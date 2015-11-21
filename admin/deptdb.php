<?php
	require("../requires/connection.php");
	
	$name		= $_POST['deptname']; 
	$contact    = $_POST['contact'];
	$contact_person = $_POST['contact_person'];
	$content    = $_POST['content'];
	
	$database->insert('department',array('id'=>'','deptname'=>$name,'contact'=>$contact,'contact_person'=>$contact_person,'content'=>$content));
	
	session_start();
	$_SESSION['token'] = 'added';
	header("Location: ../pages/showalldept.php");
?>