<?php 
require "../requires/connection.php";
$users = $database->select("users",array('username'),array('username'=>$_GET['username']));
if(isset($users)){
	echo "Taken";
}
else{
	echo "Available";
}

?>
