<?php  

$db = new mysqli("localhost", "root", "" , "bid");
	
	if($db->connect_errno){
		die('Sorry we have some problem with the Database!');
	}             
?>