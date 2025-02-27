<?php
ini_set('display_errors', 1);  // 开启错误显示
error_reporting(E_ALL);        // 报告所有错误
$rootPath = $_SERVER['DOCUMENT_ROOT'];
$title = 'Greasy Fork - 安全且实用的用户脚本站';
require $rootPath.'/templates/head.php';
require $rootPath.'/templates/index.php';
require $rootPath.'/templates/foot.php';
?>