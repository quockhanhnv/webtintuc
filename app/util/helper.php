<?php 
function location($path)
{
	$link = str_replace($_GET['url'],'', $_SERVER['REQUEST_URI']) . $path;

	return $link;
}
//echo $_SERVER['REQUEST_URI'];
// echo $_GET['url'];
//var_dump($_SERVER);