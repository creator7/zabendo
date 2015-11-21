<?php
	require("../requires/connection.php");
	
	$id = $_GET['id'];
	
	$database->delete('degree',array('id'=>$id));
	session_start();
	$_SESSION['token'] = 'removed';
	header("Location: ../pages/showalldegrees.php");
?>