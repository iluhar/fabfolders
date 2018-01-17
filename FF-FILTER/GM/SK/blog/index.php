<?php
include '../config.php';
preg_match('/^(.*\/)blog\//',$_SERVER['REQUEST_URI'],$matches);
$host .= $matches[1];
$_SERVER['HTTP_REFERER'] = null;
$lang = isset($_GET['lang']) ?  $_GET['lang'] : 'en';
header('refresh:0;url=http://'.$host.'success/?lang='.$lang);
?>