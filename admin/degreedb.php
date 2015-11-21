
<?php
	require("../requires/connection.php");
	
	$name		= $_POST['degreename']; 
	$department		= $_POST['departments']; 
	
	if($department){
		
		$database->insert("degree", array(
		"id" => "",
		"degreename" => $name,
		"dept_id" => $department
		));
	}
	session_start();
	$_SESSION['token'] = 'added';
	header("Location: ../pages/showalldegrees.php");
?>