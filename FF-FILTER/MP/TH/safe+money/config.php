<?php
$pixel = 'GTM-N5J22NR';
$pixelType = !preg_match('/GTM/',$pixel) ? 'fb' : 'gtm';
$tracker = array(
	'domain' => 'http://technical-ads.com/',
	'key'    => 'r26f563hmcv3it25xrv4',
	'file'   => 'click.php'
);
$url = $tracker['domain'].$tracker['file']."?lp=1";
$host = $_SERVER['HTTP_HOST'];
?>