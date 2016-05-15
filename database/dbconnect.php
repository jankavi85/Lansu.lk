<?php

        $hostname = "localhost";
        $user = "root";
        $password = "";
        $database = "lansu";
		
        $dbconnection=mysqli_connect($hostname,$user,$password,$database);

        if (!$dbconnection){
            die("Database Connection failed : " . mysqli_connect_error());
        }
   
?>
