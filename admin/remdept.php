<?php
	require("../requires/connection.php");
	
	$id = $_GET['id'];
	
	$database->delete('degree',array('dept_id' => $id ));
	$database->delete('deptbranch',array('dept_id' => $id ));
	$database->delete('department',array('id'=>$id));
	
	session_start();
	$_SESSION['token'] = 'removed';
	header("Location: ../pages/showalldept.php");
?>