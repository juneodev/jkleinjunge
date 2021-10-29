<?php 

$language = "french";

if ( isset( $_GET["language"]))   { 
	$cookie = $_GET["language"]; 
	setcookie('language', $cookie);
	$language = $_COOKIE["language"];
	$_GET["language"] = "";
	header("location:" . $_SERVER['SCRIPT_NAME']);
}else if (isset($_COOKIE["language"])) { 
	$language = $_COOKIE["language"];  
}

?>