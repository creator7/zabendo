<?php
	require("../requires/connection.php");
	
	$name		= $_POST['branchname']; 
	$contact    = $_POST['contact'];
	$location = $_POST['location'];
	$departments = $_POST['departments'];
	
	$database->insert('branch',array('id'=>'','branchname'=>$name,'location'=>$location,'contact'=>$contact));
	$branch = $database->select('branch',array('id'),array('branchname'=>$name));
	foreach($branch as $b){
		for($i = 0;$i<count($departments);$i++){
			$database->insert('deptbranch',array('dept_id'=>$departments[$i],'branch_id'=>$b['id']));
		}
	}
	
	session_start();
	$_SESSION['token'] = 'added';
	header("Location: ../pages/showallbranches.php");
?>