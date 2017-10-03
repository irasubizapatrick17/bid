<?php  

$db = new mysqli("localhost", "root", "root" , "commerce_db");
	
	if($db->connect_errno){
		die('Sorry we have some problem with the Database!');
	}             
?>

