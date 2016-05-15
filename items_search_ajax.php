<?php
	include 'database/dbconnect.php';
	$district = strval($_GET['district']);

	$sql = "SELECT * FROM additem WHERE district = '".$district."'";
	$result = mysqli_query($dbconnection, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $title=$row['title'];
	        $price=$row['price'];
	        ?>
	        <a href="ss" class="btn btn-default btn-lg btn-block">
	        	<div class="row">
					<div class="col-sm-2">
						<img src="images/home/new.png"/>
					</div>
					<div class="col-sm-6">
						<?php echo $title;?>
					</div>
					<div class="col-sm-4">
						<?php echo "Rs.".$price;?>
					</div>
				</div>						        	
	        </a>
	        <?php
	        echo "<br>";
	    }
	} else {
	    echo "0 results";
	}

	mysqli_close($dbconnection);
	
?>