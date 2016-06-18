<?php
	session_start();
	include 'database/dbconnect.php';
	$sub_category = strval($_GET['category']);
	$radiovalue = strval($_GET['radiovalue']);

	$_SESSION["category"] = $sub_category;
	$area = $_SESSION["area"];

	if ($radiovalue == "bid") {
		$sql = ""; 
		if ($_SESSION["area"] == null) {
			$sql = "SELECT * FROM biditem WHERE sub_category = '$sub_category' ORDER BY addingtime DESC";		
		}else{
			$sql = "SELECT * FROM biditem WHERE sub_category = '$sub_category' AND (district ='$area' OR district_area='$area') ORDER BY addingtime DESC";
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
	}else if($radiovalue == "direct") {
		$sql = ""; 
		if ($_SESSION["area"] == null) {
			$sql = "SELECT * FROM directitem WHERE sub_category = '$sub_category' ORDER BY addingtime DESC";		
		}else{
			$sql = "SELECT * FROM directitem WHERE sub_category = '$sub_category' AND (district ='$area' OR district_area='$area') ORDER BY addingtime DESC";
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