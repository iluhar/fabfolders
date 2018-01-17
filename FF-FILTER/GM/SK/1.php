<?php
if( count(get_included_files()) == 1 )
{
	header('HTTP/1.1 404 Not Found');
	exit();
}

$socialText = "";
?>
<!DOCTYPE html>
safe page