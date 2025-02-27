<?php
ini_set('display_errors', 1);  // 开启错误显示
error_reporting(E_ALL);        // 报告所有错误
$rootPath = $_SERVER['DOCUMENT_ROOT'];
$title = '帮助';
require $rootPath.'/templates/head.php';
$info = '<p><a href="https://greasyfork.org/zh-CN/help" target="_blank">前往官网查看详情</a></p>';
require $rootPath.'/templates/info.php';
require $rootPath.'/templates/foot.php';
?>