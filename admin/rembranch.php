<?php
	require("../requires/connection.php");
	$id = $_GET['id'];
	
	$database->delete('deptbranch',array('branch_id'=>$id));
	$database->delete('branch',array('id'=>$id));
	
	session_start();
	$_SESSION['token'] = 'removed';
	header("Location: ../pages/showallbranches.php");
?>