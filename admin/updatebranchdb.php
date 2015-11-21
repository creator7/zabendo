<?php
	require("../requires/connection.php");
	
	$id = $_POST['id'];
	$name		= $_POST['branchname']; 
	$contact    = $_POST['contact'];
	$location = $_POST['location'];
	
	$database->update('branch',array('branchname'=>$name,'contact'=>$contact,'location'=>$location),array('id'=>$id));
	
	session_start();
	$_SESSION['token'] = 'updated';
	header("Location: ../pages/showallbranches.php");
?>