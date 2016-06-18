<?php include "header.php"; ?>
<?php include 'database/dbconnect.php';

$_SESSION["area"] = null;
$_SESSION["category"] = null;

 ?>
 <!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrapItemSearch.css">
</head>
<body onload="onload_search_item();">
	<section id=""><!--slider-->
		<div class="container">
			<br>
			<div class="row">
				<div class="col-sm-5">
					<h3>What are you looking to search ?</h3>
				</div>
				<div class="col-sm-2">
				    <label class="radio-inline">
				      	<input type="radio" name="option" id="bidId" value="bid" onclick="activeClosingDate();" checked="checked">Item From Bid
				    </label>
				</div>
				<div class="col-sm-2">
				    <label class="radio-inline">
				      	<input type="radio" name="option" id="directId" value="direct" onclick="inactiveClosingDate();">Item From Direct Sale
				    </label>
				</div>
			</div>
			<div class="row">
				<div class="well well-sm" style="background-color:#ebebe0;">
					<div class="row">
						<div class="col-sm-2">
							<button id="area" type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-map-marker"></span>    Area</button>
						</div>	
						<div class="col-sm-2">
							<button id="category" type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-tag"></span>    Category</button>
						</div>
						<div>
							<div class="col-sm-1">
								<label class="control-label pull-left" for="search">Search Now:</label>
							</div>	
							<div class="col-sm-2">
								<input type="text" name="search" class="form-control pull-left" id="search" placeholder="Search..">
							</div>	
							<div class="col-sm-1">
								<label class="control-label pull-left" for="closing_date">Closing Date:</label>
							</div>	
							<div class="col-sm-2">
								<input type="date" name="closing_date" class="form-control pull-left" id="closing_date">
							</div>	

							<div class="col-sm-2">
								<button type="submit" onclick="searchButtonAction();" name="submit" class="btn btn-warning btn-block">Search</button>
							</div>
						</div>
						<!--Above have main structure-->

						<!-- Modal 1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog modal-md">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h3 class="modal-title">Select Area</h3>
							    </div>
							    
							    <div class="modal-body">
							    	<div class="row">
							    		<div class="col-sm-6">
							              <h4>Select a City or Division</h4>
							              <br>
							              <button type="button" id="all_sl_id" onclick="showItemArea1(this.value);" value="Sri Lanka" class="btn btn-default btn-block">All of Sri Lanka</button>
							              <?php
											$sql = "SELECT district FROM area GROUP BY district";
											$result = mysqli_query($dbconnection, $sql);

											if (mysqli_num_rows($result) > 0) {
										    // output data of each row
											    while($row = mysqli_fetch_assoc($result)) {
											        $district=$row['district'];?>
												    <button type="button" id='<?php echo $district;?>' onclick="showItemArea2(this.value);" value='<?php echo $district;?>' class="btn btn-default btn-block"><?php echo $district; ?><span class="glyphicon glyphicon-menu-right pull-right"></span></button>
													<?php
												}
											} else {
											    echo "0 results";
											}
				                			?>
								      	</div>
								      	<div class="col-sm-6" id="item_area3"></div>
							      	</div>
							  	</div>
							    <div class="modal-footer">
							      	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							</div>
						   </div>
					    </div>
						<!-- Modal 2 -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h4 class="modal-title">Select Category</h4>
							    </div>
							    <div class="modal-body">
							    	<div class="row">
							    		<div class="col-sm-6">
							              <h4>Select a Category</h4>
							              <br>
							              <button type="button" id="all_category_id" onclick="showItemCategory1(this.value);" value="All Category" class="btn btn-default btn-block">All Categories</button>
							              <?php
											$sql1 = "SELECT category FROM category GROUP BY category";
											$result1 = mysqli_query($dbconnection, $sql1);

											if (mysqli_num_rows($result1) > 0) {
										    // output data of each row
											    while($row = mysqli_fetch_assoc($result1)) {
											        $category=$row['category'];?>
												    <button type="button" id='<?php echo $category;?>' onclick="showItemCategory2(this.value);" value='<?php echo $category;?>' class="btn btn-default btn-block"><?php echo $category; ?><span class="glyphicon glyphicon-menu-right pull-right"></span></button>
													<?php
												}
											} else {
											    echo "0 results";
											}

				                			?>
								      	</div>
								      	<div class="col-sm-6" id="item_area5"></div>
							      	</div>
							    </div>
							    <div class="modal-footer">
							      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							  </div>
							</div>
						</div>	

					</div>
				</div>		
			</div>	
			<div class="row" id="item_area"></div>
			
			<div class="row"><div class=""><div data-ride="carousel" style="width:700px; height:300px; margin-left:auto;"></div></div></div>
			
		</div>
	</section><!--/slider-->

	<?php include "footer.php" ; ?>
	
    <script src="js/itemSearch.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>