<?php
@require("../requires/connection.php"); 


$username		= $_POST['myUsername']; 
$fullname		= $_POST['myFullname']; 
$password		= $_POST['mypassword']; 
$email		    = $_POST['myEmail']; 

$encriptedPass=md5($password);


$database->insert('users',array('id'=>'','username'=>$username,'fullname'=>$fullname,'password'=>$encriptedPass,'email'=>$email,'admin'=>false));
	session_start();
		
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['admin'] = false;
		$_SESSION['status'] = 'signedup';
		
		if(isset($_SESSION['url']))
		   $url = $_SESSION['url']; // holds url for last page visited.
		else 
		   $url = "home.php";
		
		header("Location: $url");
?>