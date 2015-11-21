<?php
	require("../requires/connection.php");
	session_start();
	
	$id = $_POST['id'];
	$name		= $_POST['degreename']; 
	$department    = $_POST['departments'];
	
	$database->update('degree',array('degreename'=>$name,'dept_id'=>$department),array('id'=>$id));
	
	$_SESSION['token'] = 'updated';
	header("Location: ../pages/showalldegrees.php");
?>