<?php
$pixel = 'GTM-NW4LB6F';
$pixelType = !preg_match('/GTM/',$pixel) ? 'fb' : 'gtm';
$tracker = array(
	'domain' => 'http://tr.targetings.space/',
	'key'    => '3ewcuq1vwoo57fn217it',
	'file'   => 'click.php'
);
$url = $tracker['domain'].$tracker['file']."?lp=1";
$host = $_SERVER['HTTP_HOST'];
?>