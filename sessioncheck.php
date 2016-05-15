<?php 
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!$_SESSION["lansu_email"]){
        header("location:login.php?session=notset");
	
    }
	?>