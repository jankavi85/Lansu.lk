<?php 
    session_start(); 
    
    if(!$_SESSION["lansu_email"]){
        header("location:login.php?session=notset");
	
    }
	?>