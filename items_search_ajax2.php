<?php
	include 'database/dbconnect.php';
	$category = strval($_GET['category']);

	//$_SESSION["area"] = null;
	//$_SESSION["category"] = $category;

	if($category == "All Category"){

	}else{
		?><h4>Select a Sub Category</h4><br>
		<button type="button" id='<?php echo $category;?>' onclick="showItemCategory4(this.value);" value='<?php echo $category;?>' class="btn btn-default btn-block">All <?php echo $category; ?></button><br>
		<?php
		$sql = "SELECT sub_category FROM category WHERE category = '".$category."'";
		$result = mysqli_query($dbconnection, $sql);

		if (mysqli_num_rows($result) > 0) {
			    while($row = mysqli_fetch_assoc($result)) {
			        $sub_category=$row['sub_category'];?>
					<button type="button" id='<?php echo $sub_category;?>' onclick="showItemCategory3(this.value);" value='<?php echo $sub_category;?>' class="btn btn-default btn-block"><?php echo $sub_category; ?></button>
					<?php
			    }
		
		} else {
		    echo "0 results";
		}
	}
	mysqli_close($dbconnection);
?>