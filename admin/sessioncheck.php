<?php 
    session_start(); 
    
    if(!$_SESSION['lansu_user_type']){
        header("location:../login.php?session=notset");
	
    }
	?>