<?php
	include 'database/dbconnect.php';
	$district = strval($_GET['district']);

	//$_SESSION["area"] = $district;
	//$_SESSION["category"] = null;

	if($district == "Sri Lanka"){

	}else{
		?><h4>Select a local area with in <?php echo $district;?> </h4><br>
		<button type="button" id='<?php echo $district;?>' onclick="showItemArea4(this.value);" value='<?php echo $district;?>' class="btn btn-default btn-block">All of <?php echo $district; ?></button><br>
		<?php
		$sql = "SELECT popular_area FROM area WHERE district = '".$district."'";
		$result = mysqli_query($dbconnection, $sql);

		if (mysqli_num_rows($result) > 0) {
			    while($row = mysqli_fetch_assoc($result)) {
			        $popular_area=$row['popular_area'];?>
					<button type="button" id='<?php echo $popular_area;?>' onclick="showItemArea3(this.value);" value='<?php echo $popular_area;?>' class="btn btn-default btn-block"><?php echo $popular_area; ?></button>
					<?php
			    }
		} else {
		    echo "0 results";
		}
	}
	mysqli_close($dbconnection);
?>