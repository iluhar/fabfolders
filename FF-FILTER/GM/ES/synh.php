<?php
header('Access-Control-Allow-Origin: *');
$newPixel = $_POST['pixel'];
$oldData = file('config.php');
$newData = '';
if (empty($newPixel)) die('No pixel');
for ($i = 0; $i <= count($oldData) - 1; $i++) {	
	if (preg_match('/\$pixel\ =\ /', $oldData[$i])) {
		$newData .= '$pixel = \''.$newPixel.'\';'."\n";
	} 
	else {
		$newData .= $oldData[$i];
	}
}
$file = fopen('config.php', 'w+');
flock($file, LOCK_SH);
fwrite($file, $newData);
fclose($file);
echo 'success/';
?>