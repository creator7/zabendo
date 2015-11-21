<?php
	 session_start();
	 
	if(isset($_SESSION["username"]) && isset($_SESSION["password"])){
		
	}
	else{
		$_SESSION['error'] = 'yes';
		header("Location: ../pages/home.php");
	}
?>