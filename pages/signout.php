<?php
	require("../requires/session.php");
	session_unset();
	session_destroy();
	if(isset($_COOKIE['ss']) && isset($_COOKIE['pp']) && isset($_COOKIE['ad'])){
	setcookie('ss',0,time() - 26478583,"/");
	setcookie('pp',0,time() - 9594539,"/");
	setcookie('ad',0,time() - 9594539,"/");
	}
	
	if(isset($_SESSION['url']))
		$url = $_SESSION['url']; // holds url for last page visited.
	else
		 $url = "home.php";
			  
	header("Location: $url");
?>