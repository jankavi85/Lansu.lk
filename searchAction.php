<?php
	session_start();
	include 'database/dbconnect.php';

	$search_field = strval($_GET['search_field']);
	$radiovalue = strval($_GET['radiovalue']);
	$closing_date = strval($_GET['closing_date']);

	$area = $_SESSION["area"];
	$category = $_SESSION["category"];

	function convertDateFormat($cd){
		if($cd != null){
			$dateArray = explode('-', $cd);
			$month="";
			switch ($dateArray[1]) {
				case 1:
					$month = "January";
					break;
				case 2:
					$month = "February";
					break;
				case 3:
					$month = "March";
					break;
				case 4:
					$month = "April";
					break;
				case 5:
					$month = "May";
					break;
				case 6:
					$month = "June";
					break;
				case 7:
					$month = "July";
					break;
				case 8:
					$month = "August";
					break;
				case 9:
					$month = "September";
					break;
				case 10:
					$month = "October";
					break;
				case 11:
					$month = "November";
					break;
				case 12:
					$month = "December";
					break;
				default:
					$month = "Error";
					break;
			}
			$closing_date_search_format = $dateArray[2]." ".$month." ".$dateArray[0];	
			return $closing_date_search_format;
		}
	}

	$sql = "";
	if ($search_field == null) {
		if ($radiovalue == "bid") {
			if ($closing_date == null) {
				if (($area == null) & ($category == null)) {
					$sql = "SELECT * FROM biditem ORDER BY addingtime DESC";
				}else if (($area != null) & ($category == null)) {
					$sql = "SELECT * FROM biditem WHERE district ='$area' OR district_area='$area' ORDER BY addingtime DESC";
				}else if (($area == null) & ($category != null)) {
					$sql = "SELECT * FROM biditem WHERE category ='$category' OR sub_category='$category' ORDER BY addingtime DESC";
				}else{//both area,category session are not null
					$sql = "SELECT * FROM biditem WHERE (category ='$category' OR sub_category='$category') AND (district ='$area' OR district_area='$area') ORDER BY addingtime DESC";
				}				
			}else{//$closing_date != null
				$closing_time = convertDateFormat($closing_date);
				if (($area == null) & ($category == null)) {
					$sql = "SELECT * FROM biditem WHERE closingtime LIKE '$closing_time%' ORDER BY addingtime DESC";
				}else if (($area != null) & ($category == null)) {
					$sql = "SELECT * FROM biditem WHERE (district ='$area' OR district_area='$area') AND closingtime LIKE '$closing_time%' ORDER BY addingtime DESC";
				}else if (($area == null) & ($category != null)) {
					$sql = "SELECT * FROM biditem WHERE (category ='$category' OR sub_category='$category') AND closingtime LIKE '$closing_time%' ORDER BY addingtime DESC";
				}else{//both area,category session are not null
					$sql = "SELECT * FROM biditem WHERE ((category ='$category' OR sub_category='$category') AND (district ='$area' OR district_area='$area')) AND closingtime LIKE '$closing_time%' ORDER BY addingtime DESC";
				}
			}	
		}else if($radiovalue == "direct"){
			if (($area == null) & ($category == null)) {
				$sql = "SELECT * FROM directitem ORDER BY addingtime DESC";
			}else if (($area != null) & ($category == null)) {
				$sql = "SELECT * FROM directitem WHERE district ='$area' OR district_area='$area' ORDER BY addingtime DESC";
			}else if (($area == null) & ($category != null)) {
				$sql = "SELECT * FROM directitem WHERE category ='$category' OR sub_category='$category' ORDER BY addingtime DESC";
			}else{//both area,category session are not null
				$sql = "SELECT * FROM directitem WHERE (category ='$category' OR sub_category='$category') AND (district ='$area' OR district_area='$area') ORDER BY addingtime DESC";
			}						
		}
	}else{//$search_field != null
		if ($radiovalue == "bid") {
			if ($closing_date == null) {
				if (($area == null) & ($category == null)) {
					$sql = "SELECT * FROM biditem WHERE price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%' ORDER BY addingtime DESC";
				}else if (($area != null) & ($category == null)) {
					$sql = "SELECT * FROM biditem WHERE (district ='$area' OR district_area='$area') AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%') ORDER BY addingtime DESC";
				}else if (($area == null) & ($category != null)) {
					$sql = "SELECT * FROM biditem WHERE (category ='$category' OR sub_category='$category') AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%') ORDER BY addingtime DESC";
				}else{//both area,category session are not null
					$sql = "SELECT * FROM biditem WHERE ((category ='$category' OR sub_category='$category') AND (district ='$area' OR district_area='$area')) AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%') ORDER BY addingtime DESC";
				}
			}else{//$closing_date != null
				$closing_time = convertDateFormat($closing_date);
				if (($area == null) & ($category == null)) {
					$sql = "SELECT * FROM biditem WHERE (closingtime LIKE '$closing_time%') AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%') ORDER BY addingtime DESC";
				}else if (($area != null) & ($category == null)) {
					$sql = "SELECT * FROM biditem WHERE (closingtime LIKE '$closing_time%') AND ((district ='$area' OR district_area='$area') AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%')) ORDER BY addingtime DESC";
				}else if (($area == null) & ($category != null)) {
					$sql = "SELECT * FROM biditem WHERE (closingtime LIKE '$closing_time%') AND ((category ='$category' OR sub_category='$category') AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%')) ORDER BY addingtime DESC";
				}else{//both area,category session are not null
					$sql = "SELECT * FROM biditem WHERE (closingtime LIKE '$closing_time%') AND (((category ='$category' OR sub_category='$category') AND (district ='$area' OR district_area='$area')) AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%')) ORDER BY addingtime DESC";
				}
			}	
		}else if($radiovalue == "direct"){
			if (($area == null) & ($category == null)) {
				$sql = "SELECT * FROM directitem WHERE price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%' ORDER BY addingtime DESC";
			}else if (($area != null) & ($category == null)) {
				$sql = "SELECT * FROM directitem WHERE (district ='$area' OR district_area='$area') AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%') ORDER BY addingtime DESC";
			}else if (($area == null) & ($category != null)) {
				$sql = "SELECT * FROM directitem WHERE (category ='$category' OR sub_category='$category') AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%') ORDER BY addingtime DESC";
			}else{//both area,category session are not null
				$sql = "SELECT * FROM directitem WHERE ((category ='$category' OR sub_category='$category') AND (district ='$area' OR district_area='$area')) AND (price='$search_field' OR title LIKE '%$search_field%' OR district_area LIKE '%$search_field%' OR district LIKE '%$search_field%' OR sub_category LIKE '%$search_field%' OR category LIKE '%$search_field%') ORDER BY addingtime DESC";
			}	
		}
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
		        $image_link=$row['item_avatar'];
		        ?>
		        <a href="ss" class="list-group-item">
		        	<div class="row">
						<div class="col-sm-2">
							<img width="125px" height="125px" src="<?php echo $image_link;?>"/>
						</div>
						<div class="col-sm-6">
							<?php echo $title;?>
						</div>
						<div class="col-sm-4">
							<?php echo "Rs.".$price;?>
						</div>
					</div>						        	
		        </a>
		        <br>
		        <?php
		    }
		    ?>
	    </div>
	    <?php
	} else {
	    ?>
        <div>
		    <strong><center><font color="orange" size="5px">No Results Found !</font></center></strong>
		</div>
        <?php
	}


?>