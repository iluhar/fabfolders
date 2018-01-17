<?php
	$mail = isset($_POST['email']) ? $_POST['email'] : "";
	$curUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$todo = $mail."\t".$curUrl."\r\n";
	file_put_contents("log.txt", $todo, FILE_APPEND);
	$lang = isset($_POST['lang']) ? $_POST['lang'] : 'en';
    header('Location: /blog/?lang='.$lang);
?>