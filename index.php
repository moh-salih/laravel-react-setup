<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));



if($uri !== '/' && file_exists(__DIR__.'/public'.$uri))
	return false;
else
	require_once __DIR__.'/frontend/index.html';
?>