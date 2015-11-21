<?php

require  ("medoo.php");
 
$database = new medoo(array(
	'database_type' => 'mysql',
	'database_name' => 'universitydb',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'option' => array(
		PDO::ATTR_CASE => PDO::CASE_NATURAL
	)
));
?>