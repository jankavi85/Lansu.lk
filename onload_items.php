<?php
	include 'database/dbconnect.php';

	$sql = "SELECT * FROM biditem ORDER BY addingtime DESC";
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