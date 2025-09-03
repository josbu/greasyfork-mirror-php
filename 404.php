<?php
ini_set('display_errors', 1);  // 开启错误显示
error_reporting(E_ALL);        // 报告所有错误
$rootPath = $_SERVER['DOCUMENT_ROOT'];
$title = 'Greasy Fork - 安全且实用的用户脚本站';
require $rootPath.'/templates/head.php';
echo '<script>
    
    const currentUrl = window.location.href;

    // 解析 URL
    const urlObj = new URL(currentUrl);

    // 替换 host
    const oldIndex = urlObj.host;
    function goBack() {
        if (document.referrer !== "") {
            window.history.back();
        } else {
            window.location.href = "https://"+oldIndex;
        }
    }
    urlObj.host = "greasyfork.org";

    // 返回新的完整 URL
    const newUrl = urlObj.toString();

    document.write(`<br><br><br>当前页面暂未适配，请<a href="${newUrl}" target="_blank">访问主网站</a>，或者<a style="cursor:pointer;" onclick="goBack()">返回上一页</a>`)
    </script>';
require $rootPath.'/templates/foot.php';
?>