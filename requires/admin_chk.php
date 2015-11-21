
<?php
if(!isset($_SESSION))
	 session_start();

if(isset($_SESSION['username'])) 
{ 
	if($_SESSION['admin']){
	}
	else{
		$_SESSION['error'] = 'yes';
	header("Location: ../pages/home.php");
	}
}
else
{
	$_SESSION['error'] = 'yes';
	header("Location: ../pages/home.php");
}

?>