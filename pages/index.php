

<?php
@require("../requires/connection.php"); 
require("../requires/chk_cookie.php");

session_start();
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];
$remember = $_POST['remember'];

		// To protect MySQL injection (more detail about MySQL injection)
		$encriptedPass=md5($mypassword);
		
		$data = $database->select('users',array('username','password','admin'),array('AND'=> array('username'=>$myusername, 'password'=>$encriptedPass))); 
		
		// If result matched $myuseqrname and $mypassword, table row must be 1 row
		if(!empty($data))
		{
			foreach($data as $d)
				$admin = $d['admin'];
				if(isset($remember)){
					setcookie('ss',$myusername,time() + (86400 * 30),"/");
					setcookie('pp',$encriptedPass,time() + (86400 * 30),"/");
					setcookie('ad',$admin,time() + (86400 * 30),"/");
				}
				
			$_SESSION['username']=$myusername;
			$_SESSION['password']=$mypassword;
			$_SESSION['admin'] = $admin;
			$_SESSION['status'] ='loggedin';
			
			if(isset($_SESSION['url']))
			   $url = $_SESSION['url']; // holds url for last page visited.
			else
			   $url = "home.php";
			  
			header("Location: $url");
			
			exit();
		}
			
		else if($myusername == "" && $mypassword == ""){
			header("Location: home.php");
			exit();
		}
		else 
		{
			$_SESSION['error'] = 'loginerror';
			header("Location: home.php");
			exit();
			
		}


?>