<?php
	session_start();
	include 'database/dbconnect.php';
	$district = strval($_GET['district']);
	$radiovalue = strval($_GET['radiovalue']);

	$_SESSION["area"] = null; //district haven't value so this should be null
	$category = $_SESSION["category"];

	if (($radiovalue == "bid") & ($district == "Sri Lanka")){
		$sql = ""; 
		if ($_SESSION["category"] == null) {
			$sql = "SELECT * FROM biditem ORDER BY addingtime DESC";	
		}else{
			$sql = "SELECT * FROM biditem WHERE category ='$category' OR sub_category='$category' ORDER BY addingtime DESC";
		}

		$result = mysqli_query($dbconnection, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    ?>
		    <div class="list-group">
			    <?php
			    while($row = mysqli_fetch_assoc($result)) {
			        $title=$row['title'];
			        $price=$row['price'];
			        ?>
			        <a href="ss" class="list-group-item">
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
			    }
			    ?>
		    </div>
		    <?php
		} else {
		    echo "0 results";
		}
	}else if(($radiovalue == "direct") & ($district == "Sri Lanka")){
		$sql = ""; 
		if ($_SESSION["category"] == null) {
			$sql = "SELECT * FROM directitem ORDER BY addingtime DESC";	
		}else{
			$sql = "SELECT * FROM directitem WHERE category ='$category' OR sub_category='$category' ORDER BY addingtime DESC";
		}

		$result = mysqli_query($dbconnection, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    ?>
		    <div class="list-group">
			    <?php
			    while($row = mysqli_fetch_assoc($result)) {
			        $title=$row['title'];
			        $price=$row['price'];
			        ?>
			        <a href="ss" class="list-group-item">
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
			    }
			    ?>
		    </div>
		    <?php
		} else {
		    echo "0 results";
		}
	}else{
		echo "Oops..!";
	}
	
	mysqli_close($dbconnection);
?>