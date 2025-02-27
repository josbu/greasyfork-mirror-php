<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$key = md5($route);
$fn = __DIR__ . '/' . 'store/';
if (strpos($route, '?version=') !== false && strpos($route, '/versions?version=') === false&& strpos($route, '/feedback?version=') === false && strpos($route, '/stats?version=') === false) {
    $fn .= 'forever';
} else {
    $fn .= 'temp';
}
$file_name = $fn . '/' . $key . '.html';
$split = '[title|'.$key.']';
if (file_exists($file_name)) {
    $page =  file_get_contents($file_name);
    $arr = explode($split,$page);
    $title = $arr[0];
    $body = '来自缓存'.$arr[1];
} else {
    require './config.php';
    $url = $originUrl . '/zh-CN/scripts' . $route;
    $key = md5($route);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // 跟随重定向
    curl_setopt($ch, CURLOPT_MAXREDIRS, 5); // 最大重定向次数
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36",
        "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
        "Accept-Encoding: gzip, deflate",
        "Accept-Language: en-US,en;q=0.9",
        "Connection: keep-alive",
        "Upgrade-Insecure-Requests: 1"
    ));
    // curl_setopt($ch, CURLOPT_PROXY, "http://127.0.0.1:10809");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    $response = curl_exec($ch);
    if ($response === false) {
        $body = 'Curl error: ' . curl_error($ch);
    }
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    // 检查是否是 302 重定向
    if ($httpCode == 302 || $httpCode == 301) {
        preg_match('/Location: (.+)/', $response, $matches);
        $redirectUrl = trim($matches[1]);
        $redirect_url = str_ireplace($originUrl, $mirrorUrl, $redirect_url);
        header("Location: " . $redirect_url);
        exit();
    }else {
        $html = $response;
        $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
        $html = str_ireplace($originUrl, $mirrorUrl, $html);
        $html = str_ireplace($originUpdateUrl, $replaceUpdateUrl, $html);
        $doc = new DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true); // 禁止输出警告，避免加载无效HTML时报错
        $doc->loadHTML($html);
        // 创建DOMXPath实例
        $xpath = new DOMXPath($doc);
        // 查找 .width-constraint 元素
        $titleNode = $xpath->query('//title');

        // 判断是否找到了<title>元素
        if ($titleNode->length > 0) {
            // 输出<title>标签的内容
            $title = $titleNode->item(0)->nodeValue;
        } else {
            $title = '无标题';
        }
        $scriptNodes = $xpath->query('//script');
        foreach ($scriptNodes as $scriptNode) {
            $scriptNode->parentNode->removeChild($scriptNode);
        }
        $nodeList = $xpath->query('//*[@class="width-constraint"]');
        // 判断是否找到了该元素

        if ($nodeList->length > 1) {
            // 获取第一个匹配的元素
            $node = $nodeList->item(1);
            // 获取该元素内的HTML内容，不包括该元素本身
            $innerHTML = '';
            foreach ($node->childNodes as $childNode) {
                $innerHTML .= $doc->saveHTML($childNode);
            }
            // 输出结果
            $body = $innerHTML;
            $file = fopen($file_name, 'w');
            if ($file) {
                fwrite($file, $title.$split.$body);
                // 关闭文件
                fclose($file);
            }
        } else {
            $body =  "解析出现异常";
        }
    }
}
