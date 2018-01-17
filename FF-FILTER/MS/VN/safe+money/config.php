<?php
$pixel = '172940516633023';
$pixelType = !preg_match('/GTM/',$pixel) ? 'fb' : 'gtm';
$tracker = array(
	'domain' => 'http://technical-ads.com/',
	'key'    => 'hcmgb0br2otj5cowtmen',
	'file'   => 'click.php'
);
$url = $tracker['domain'].$tracker['file']."?lp=1";
$host = $_SERVER['HTTP_HOST'];
?>