<?php
	require("../requires/connection.php");
	
	session_start();
	$id = $_POST['id'];
	$name		= $_POST['deptname']; 
	$contact    = $_POST['contact'];
	$contact_person = $_POST['contact_person'];
	$content = $_POST['content'];
	
	$database->update('department',array('deptname'=>$name,'contact'=>$contact,'contact_person'=>$contact_person),array('id'=>$id));
	$_SESSION['token'] = 'updated';
	header("Location: ../pages/showalldept.php");
?>