<?php
	require("../requires/connection.php");
	
	$id = $_GET['id'];
	
	$database->delete('coursedegree',array('course_id' => $id ));
	$database->delete('course',array('id'=>$id));
	
	session_start();
	$_SESSION['token'] = 'removed';
	header("Location: ../pages/showallcourses.php");
?>