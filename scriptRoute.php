<?php

$route = $_GET['route'];
//这里是路由处理
require './scriptsControl.php';
require './templates/head.php';
echo $body;
require './templates/foot.php';

?>