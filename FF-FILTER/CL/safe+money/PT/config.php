<?php
$pixel = 'GTM-WZ9R99L';
$pixelType = !preg_match('/GTM/',$pixel) ? 'fb' : 'gtm';
$tracker = array(
	'domain' => 'http://tr.targetings.space/',
	'key'    => '85uvwszkj3ntxtar9a45',
	'file'   => 'click.php'
);
$host = $_SERVER['HTTP_HOST'];
$url = $tracker['domain'].$tracker['file'].'?lp=1';
//$url = $tracker['domain'].$tracker['file'].'?key='.$tracker['key'].'t6='.$host;
?>