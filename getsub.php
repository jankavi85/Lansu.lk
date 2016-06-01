<?php
	//$conn = new mysqli('localhost','root','','autoparts');//set your database handler
	include "database/dbconnect.php";
	
	if($_GET['category']!= null){
		
			$category = $_GET['category'];
			$query = "SELECT sub_category FROM category WHERE category='".$category."'";
			$result = $dbconnection->query($query);
			
			while($row = $result->fetch_assoc()){
				$subcategory[]=$row['sub_category'];
			}
			sort($madeBy);
			
			echo "<option value=''>-------------------------------Select a Sub Category--------------------------------</option>";
			foreach($subcategory as $value){
				echo "<option >".$value."</option>";
			}
	}
	
?>