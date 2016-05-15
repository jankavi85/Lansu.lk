<!DOCTYPE html>
<html>
<body>
	<?php 
	include "database/dbconnect.php";
	$sql ="SELECT user_id, user_name, user_email FROM user";
	$result = $dbconnection -> query($sql);

	if($result -> num_rows > 0){
		while($row = $result-> fetch_assoc()){
			$name =$row["user_name"];
			echo "<br>";
			?>
			<input type="text" value ="<?php  echo $name; ?>" readonly="readonly">
			<?php
			//return $row["user_name"];
			//echo "Name ";
			echo "<br>";
		}
	}else{
		echo "0 result";
	}

	
	//$conn -> close();

	?>

	<?php 
	//$r = $row["user_name"];
	//echo "Name : ";

	 ?>
</body>

</html>