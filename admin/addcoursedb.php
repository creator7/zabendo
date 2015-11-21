<?php
	require("../requires/connection.php");
	
	$name		= $_POST['coursename']; 
	$cr_hr    = $_POST['cr_hr'];
	$degrees = $_POST['degrees'];
	
	$database->insert('course',array('id'=>'','coursename'=>$name,'cr_hr'=>$cr_hr));
	$course = $database->select('course',array('id'),array('coursename'=>$name));
	foreach($course as $c){
		for($i = 0;$i<count($degrees);$i++){
			$database->insert('coursedegree',array('degree_id'=>$degrees[$i],'course_id'=>$c['id']));
		}
	}
	session_start();
	$_SESSION['token'] = 'added';
	header("Location: ../pages/showallcourses.php");
?>