<?php
$pixel = 'GTM-P52VVH4';
$pixelType = !preg_match('/GTM/',$pixel) ? 'fb' : 'gtm';
$tracker = array(
	'domain' => 'http://tr.targetings.space/',
	'key'    => 'bzzgygseof476boyv5kf',
	'file'   => 'click.php'
);
//$url = $tracker['domain'].$tracker['file']."?lp=1";
$host = $_SERVER['HTTP_HOST'];
$url = $tracker['domain'].$tracker['file'].'?key='.$tracker['key'].'&t6='.$host;
$url .= isset($_GET['utm_content']) ? '&utm_content='.$_GET['utm_content'] : '';
$url .= isset($_GET['utm_campaign']) ? '&utm_campaign='.$_GET['utm_campaign'] : '';
$url .= isset($_GET['utm_medium']) ? '&utm_medium='.$_GET['utm_medium'] : '';
$url .= isset($_GET['utm_source']) ? '&utm_source='.$_GET['utm_source'] : '';
?>