	<link rel="stylesheet" type="text/css" href="css/bootstrapItemSearch.css">
	
	<?php include "header.php"; ?>
	<?php include 'database/dbconnect.php'; ?>

	<div class="container">
		<div class="well well-sm" style="background-color:#ebebe0;">
			<div class="row">
				<div class="col-sm-2">
					<button type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal1">Area</button>
						<!-- Modal 1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h4 class="modal-title">Select Area</h4>
							    </div>
							    
							    <div class="modal-body">
							    	<div class="row">
						              <p>Select District</p>
						              <!-- District here -->
						              <button type="button" id="AmparaId" onclick="showItem(this.value);" value="Ampara" class="btn btn-default btn-block">Ampara</button>
						              <button type="button" id="AnuradhapuraId" onclick="showItem(this.value);" value="Anuradhapura" class="btn btn-default btn-block">Anuradhapura</button>
						              <button type="button" id="BadullaId" onclick="showItem(this.value);" value="Badulla" class="btn btn-default btn-block">Badulla</button>
						              <button type="button" id="BatticaloaId" onclick="showItem(this.value);" value="Batticaloa" class="btn btn-default btn-block">Batticaloa</button>
						              <button type="button" id="ColomboId" onclick="showItem(this.value);" value="Colombo" class="btn btn-default btn-block">Colombo</button>
						              <button type="button" id="GalleId" onclick="showItem(this.value);" value="Galle" class="btn btn-default btn-block">Galle</button>  
						              <button type="button" id="GampahaId" onclick="showItem(this.value);" value="Gampaha" class="btn btn-default btn-block">Gampaha</button>
						              <button type="button" id="HambantotaId" onclick="showItem(this.value);" value="Hambantota" class="btn btn-default btn-block">Hambantota</button>
						              <button type="button" id="JaffnaId" onclick="showItem(this.value);" value="Jaffna" class="btn btn-default btn-block">Jaffna</button>
						              <button type="button" id="KalutaraId" onclick="showItem(this.value);" value="Kalutara" class="btn btn-default btn-block">Kalutara</button>
						              <button type="button" id="KandyId" onclick="showItem(this.value);" value="Kandy" class="btn btn-default btn-block">Kandy</button>
						              <button type="button" id="KegalleId" onclick="showItem(this.value);" value="Kegalle" class="btn btn-default btn-block">Kegalle</button>
						              <button type="button" id="KilinochchiId" onclick="showItem(this.value);" value="Kilinochchi" class="btn btn-default btn-block">Kilinochchi</button>
						              <button type="button" id="KurunegalaId" onclick="showItem(this.value);" value="Kurunegala" class="btn btn-default btn-block">Kurunegala</button>
						              <button type="button" id="MannarId" onclick="showItem(this.value);" value="Mannar" class="btn btn-default btn-block">Mannar</button>
						              <button type="button" id="MataleId" onclick="showItem(this.value);" value="Matale" class="btn btn-default btn-block">Matale</button>
						              <button type="button" id="MataraId" onclick="showItem(this.value);" value="Matara" class="btn btn-default btn-block">Matara</button>
						              <button type="button" id="MonaragalaId" onclick="showItem(this.value);" value="Monaragala" class="btn btn-default btn-block">Monaragala</button>
						              <button type="button" id="MullaitivuId" onclick="showItem(this.value);" value="Mullaitivu" class="btn btn-default btn-block">Mullaitivu</button>
						              <button type="button" id="NuwaraEliyaId" onclick="showItem(this.value);" value="Nuwara Eliya" class="btn btn-default btn-block">Nuwara Eliya</button>
						              <button type="button" id="PolonnaruwaId" onclick="showItem(this.value);" value="Polonnaruwa" class="btn btn-default btn-block">Polonnaruwa</button>
						              <button type="button" id="PuttalamId" onclick="showItem(this.value);" value="Puttalam" class="btn btn-default btn-block">Puttalam</button>
						              <button type="button" id="RatnapuraId" onclick="showItem(this.value);" value="Ratnapura" class="btn btn-default btn-block">Ratnapura</button>
						              <button type="button" id="TrincomaleeId" onclick="showItem(this.value);" value="Trincomalee" class="btn btn-default btn-block">Trincomalee</button>
						              <button type="button" id="VavuniyaId" onclick="showItem(this.value);" value="Vavuniya" class="btn btn-default btn-block">Vavuniya</button>		
						              					               
							      	</div>
							  	</div>
							    <div class="modal-footer">
							      	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-sm-2">
					<button type="button" class="btn btn-warning btn-md btn-block" data-toggle="modal" data-target="#myModal2">Category</button>
						<!-- Modal 2 -->
						<div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog modal-lg">
							  <div class="modal-content">
							    <div class="modal-header">
							      <button type="button" class="close" data-dismiss="modal">&times;</button>
							      <h4 class="modal-title">Select Category</h4>
							    </div>
							    <div class="modal-body">
							      <p>Select Type</p>
							      <!-- Item category here -->
							      <button type="button" class="btn btn-default btn-block">Computers</button>
							      <button type="button" class="btn btn-default btn-block">Houses</button>
							      <button type="button" class="btn btn-default btn-block">Vehicles</button>
							      <button type="button" class="btn btn-default btn-block">Lands</button>
							      <button type="button" class="btn btn-default btn-block">Electronics</button>
							    </div>
							    <div class="modal-footer">
							      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							    </div>
							  </div>
							</div>
						</div>
				</div>
				<div>
					<form action="" method="POST">
						<div class="col-sm-1">
							<label class="control-label pull-left" for="search">Search Now:</label>
						</div>	
						<div class="col-sm-2">
							<input type="text" name="search"class="form-control pull-left" id="search" placeholder="Search..">
						</div>	
						<div class="col-sm-1">
							<label class="control-label pull-left" for="closing_date">Closing Date:</label>
						</div>	
						<div class="col-sm-2">
							<input type="date" name="closing_date" class="form-control pull-left" id="closing_date">
						</div>	
						<div class="col-sm-2">
							<button type="submit" name="submit" class="btn btn-warning btn-block">Search</button>
						</div>
					</form>

				</div>
					
			</div>
		</div>
		<div class="row">
			
			<div class="col-sm-12" id="item_area">
				<?php
					function test_input($data) {
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}

					if(isset($_POST['submit'])) {	
						$search = test_input($_POST['search']);
						$closing_date = test_input($_POST['closing_date']);

						//$sql = "SELECT * FROM additem WHERE district LIKE '$search%'";
						$sql = "SELECT * FROM additem WHERE price = '$search%' OR district_area LIKE '$search%' OR district LIKE '$search%' OR category LIKE '$search%' OR title LIKE '$search%'";

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

						// 3 .button press kalama wenna ona deya ajax walin sadeemata pera ikman.kl,bidnow.lk refer kranna.. 

					}
				?>
			</div>
			
		</div>

	
		
	
	<?php include "footer.php" ; ?>
	

  	<script src="js/itemSearch.js"></script> <!-- This is for items_search-->
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

</body>
</html>