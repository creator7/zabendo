

<?php
 if(isset($_COOKIE['ss']) && isset($_COOKIE['pp']) && isset($_COOKIE['ad'])){
	session_start();
			$_SESSION['username']=$_COOKIE['ss'];
			$_SESSION['password']=$_COOKIE['pp'];
			$_SESSION['admin'] = $_COOKIE['ad'];
			   
			header("Location: home.php?r=s");
			
			exit();
 }
	 
?>