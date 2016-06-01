<?php
	//$conn = new mysqli('localhost','root','','autoparts');//set your database handler
	include "database/dbconnect.php";
	
	if($_GET['district']!= null){
		
			$district = $_GET['district'];
			$query = "SELECT popular_area FROM area WHERE district='".$district."'";
			$result = $dbconnection->query($query);
			
			while($row = $result->fetch_assoc()){
				$area[]=$row['popular_area'];
			}
			sort($madeBy);
			
			echo "<option value=''>-------------------------------Select a Your area--------------------------------</option>";
			foreach($area as $value){
				echo "<option >".$value."</option>";
			}
	}
	
?>