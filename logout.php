<?php 
	session_start();
	
	if($_SESSION["lansu_username"]){
	$_SESSION["lansu_username"] = false;
	$_SESSION["lansu_email"] = false;
	}
	session_destroy();
	header('location:index.php');
   

?>