<?php
	require("../requires/connection.php");
	
	$id = $_POST['id'];
	$name		= $_POST['coursename']; 
	$cr_hr    = $_POST['cr_hr'];
	
	$database->update('course',array('coursename'=>$name,'cr_hr'=>$cr_hr),array('id'=>$id));
	
	session_start();
	$_SESSION['token'] = 'updated';
	header("Location: ../pages/showallcourses.php");
?>