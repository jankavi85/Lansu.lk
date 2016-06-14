<?php
	//session_start();
?>
<!DOCTYPE html>
<html lang="en">


<?php 
ob_start();
include "header.php" 
?>
<?php 
// over view form
	include "database/dbconnect.php";
	$email = $_SESSION["lansu_email"]; // Catch Login User Email
	//echo $email;
	$sql ="SELECT * FROM user WHERE user_email = '$email'";
	$result = $dbconnection -> query($sql);
	if($result -> num_rows >0){
		while($row = $result->fetch_assoc()){	
?>
<body>
	<p> </p>
	<div class="container">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<p> </p>
					<div class="row">
						<div class="col-md-10">
							<center><h4><?php echo MY_PROFILE; ?> </h4> </center>
						</div>
						<div class="col-md-2">
							<form method="post" action="logout.php">
						<button class="btn btn-default" name="logout"> <?php echo LOGOUT; ?> </button>
					</form>
						</div>
					</div>
						<p> </p>
				</div>
				<div class="panel-body">
				<ul class="nav nav-tabs"><!-- User Profile page -->
					<li class="active"><a data-toggle="tab" href="#overview"> <?php echo OVERVIEW; ?> </a></li>
					<li><a data-toggle="tab" href="#edit"> <?php echo EDIT; ?></a></li>
					<li><a data-toggle="tab" href="#mybids"><?php echo  MYBIDS; ?></a></li>
				<!--	<li><a data-toggle="tab" href="#favorites"> Favorites</a></li> -->
					<li><a data-toggle="tab" href="#complaints"><?php echo FEEDBACK;?> </a> </li>
				</ul>
					<div class="tab-content">
						<div id="overview" class="tab-pane fade in active"><center><!--User OverView part -->
							<p> </p>
							<div class="row">
								<div class="col-md-7"> 
									<p> </p>
									<div class="row">
										<div class="col-md-3">
											<center><?php echo NAME; ?> </center> 
										</div>
										<div class="col-md-9">
										<span class=" form-control" >
											<?php
												echo $row["user_name"]; 
												//echo $row["user_email"];
											?>
											<!--
											<?php 
										 		//if($result -> num_rows > 0){
												//while($row = $result-> fetch_assoc()){
												//	echo $row["user_name"];
													  //echo $name; 
												//}
												//}else{
												//echo "Not Yet...";
												//}
										 	?>
											-->
										</span>
										</div>
            						</div>
            						<p> </p>
            						<div class="row">
										<div class="col-md-3">
											<center><?php echo EMAIL ;?> </center> 
										</div>
										<div class="col-md-9">
											<span class=" form-control"> <!-- Show Login User Email -->
											 	<?php
												echo $row["user_email"]; 
											?>
											</span>
										</div>
            						</div>
            						<p> </p>
            						<div class="row">
										<div class="col-md-3">
											<center><?php echo TELEPHONE; ?> </center> 
										</div>
									<div class="col-md-9">
										<span class=" form-control">
											<?php
												echo $row["phone_number"]; 	
											?>
										</span>
									</div>
            						</div>
            						<p> </p>
            						<p> </p>
            						<h2> </h2>
          							</div>
          							<div class="col-md-3">
          							<div>
          							<img src="images/profile/Miy1.jpg" width="110px" height="130px" class="img-thumbnail img-circle img-responsive">
          							<p> </p>
          							</div>
          						</div>
          					</div>
				<div class="row">
          			<div class="col-md-2">
          			</div>
          			<div class="col-md-8">
            			<div class="progress ">
              				<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="0"
                				aria-valuemin="100" style="width:40%">
              					<span class=""> 20% Profile Completed </span>
              				</div>
            			</div>
          			</div>
          		</div>
        		
          	</center>
			</div>
			<div id="edit" class="tab-pane fade"><!-- Details Edit Part -->
				<p> </p>
				<div class="col-md-1">
				</div>
				<div class="col-md-8">
					<form method="post" id="rigistrationform" action="<?php $_PHP_SELF ?>" role="form">
						<div class="form-group has-feedback">
						<label for="email" > Email </label>
						<input type="text" class="form-control" id="rname" name="email" value="<?php echo $row["user_email"];  	
											?>" readonly="readonly">
						<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
						<label for="user_name" > User Name </label>
						<input type="text" class="form-control" id="lname" name="user_name" value="<?php echo $row["user_name"];
											}
											}else{
													echo "Not Yet...";
												}	
						  ?>">
						<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
						<label for="nic_num" > Permanent Address </label>
						<input type="text" class="form-control" name="address" id="nic" placeholder="Enter Your Permanent Address" required>
						<span class="glyphicon glyphicon-home form-control-feedback">
						</div>

						<div class="form-group has-feedback">
						<label for="tel_num" > Telephone Number </label>
						<input type="text" class="form-control" name="tel_num" id="tp" placeholder="Enter Your Telephone number" required>
						<span class="glyphicon glyphicon-phone form-control-feedback">
						</div>

						<div class="form-group has-feedback">
						<label for="tp" > Verification Code </label>
						<input type="text" class="form-control" name="verify_code" id="tp" placeholder="Enter Your verification Code" required>
						<span class="glyphicon glyphicon-phone form-control-feedback">
						</div>

						<div class="col-md-5">
						</div>
						<button class="btn btn-default" name="update"> UPDATE NOW </button>
						<button class="btn btn-default" name="cancel" type="reset"> CANCEL </button>
					</form>
				</div>
				<div class="col-md-2"><!-- Profile Picture Begin-->
          			<center><img src="images/profile/Miy1.jpg" width="110px" height="130px" class="img-thumbnail img-circle img-responsive"></center>
          			<p> </p>
          			<div class="col-md-1">
          			</div>
          			<button class="btn btn-default"> UPLOAD </button>
          			<p> </p>
          			</div>
          			

			</div>
			<div id="mybids" class="tab-pane fade"> <!-- My bids Part -->
				<p> </p>
				<center><h3>Bidding History</h3></center>
				<p> </p>
				<div class="row">
				<div class="col-md-4">
				</center><img src="images/profile/sold.png" width="145px" height="175px"></center>
				</div>
				<div class="col-md-4">
				</center><img src="images/profile/sold.png" width="145px" height="175px"></center>
				</div>
				<div class="col-md-4">
				<center><img src="images/profile/sold.png" width="145px" height="175px"></center>
				</div>
				</div>

				<div class="row">
				<div class="col-md-3">
				<img src="images/profile/sold.png" width="145px" height="175px">
				</div>
				<div class="col-md-3">
				<img src="images/profile/sold.png" width="145px" height="175px">
				</div>
				<div class="col-md-3">
				<img src="images/profile/sold.png" width="145px" height="175px">
				</div>
				<div class="col-md-3">
				<img src="images/profile/sold.png" width="145px" height="175px">
				</div>
				</div>


			</div>
			<!--
			<div id="favorites" class="tab-pane fade">  Favourites Part 
				<center><h3> My Favorites </h3></center>
			</div>
		-->
			<div id="complaints" class="tab-pane fade"> <!-- Complaints Part -->
				<p> </p>
				<center><h3> Complaints About Me </h3></center>
				<p> </p>
				<div class="panel panel-warning">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<center>Sender Name </center> 
							</div>
							<div class="col-md-5">
								<span class=" form-control"> <!-- Show Complaint Sender -->
								Anushka Indunil		
								</span>
							</div>
            			</div>
            			<div class="row">
							<div class="col-md-3">
								<center>Feedback </center> 
								<p> </p>
							</div>
							<div class="col-md-9">
								<p> </p>
								I was place a bid for your Television. So I have been recieved a massege i'm the bidd winner of your television. Therefore I accepted i will buy your tv yesterday. But you don't response me.  
							</div>
            			</div>
            		</div>
            	</div>

            	<div class="panel panel-warning">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<center>Sender Name </center> 
							</div>
							<div class="col-md-5">
								<span class=" form-control"> <!-- Show Complaint Sender -->
								Janith Kavinda		
								</span>
							</div>
            			</div>
            			<div class="row">
							<div class="col-md-3">
								<center>Feedback </center> 
								<p> </p>
							</div>
							<div class="col-md-9">
								<p> </p>
								I think you are good seller because you deliverd your mobile phone which added to this site to me on time. 
							</div>
            			</div>
            		</div>
            	</div>

            	            	<div class="panel panel-warning">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<center>Feedback </center> 
							</div>
							<div class="col-md-5">
								<span class=" form-control"> <!-- Show Complaint Sender -->
								Chirantha Perera	
								</span>
							</div>
            			</div>
            			<div class="row">
							<div class="col-md-3">
								<center>Feedback </center> 
								<p> </p>
							</div>
							<div class="col-md-9">
								<p> </p>
								I was place a bid for your Television. So I have been recieved a massege i'm the bidd winner of your television. Therefore I accepted i will buy your tv yesterday. But you don't response me.  
							</div>
            			</div>
            		</div>
            	</div>

            	            	<div class="panel panel-warning">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<center>Sender Name </center> 
							</div>
							<div class="col-md-5">
								<span class=" form-control"> <!-- Show Complaint Sender -->
								Viduravi Lamahewa		
								</span>
							</div>
            			</div>
            			<div class="row">
							<div class="col-md-3">
								<center>Feedback </center> 
								<p> </p>
							</div>
							<div class="col-md-9">
								<p> </p>
								I was place a bid for your Television. So I have been recieved a massege i'm the bidd winner of your television. Therefore I accepted i will buy your tv yesterday. But you don't response me.  
							</div>
            			</div>
            		</div>
            	</div>



			</div>

		</div>
	</div>
	</div>
	</div>
</div>
	
	<!-- Update User Details -->
	<?php
	//include "database/dbconnect.php";
	//echo $email;
		if(isset($_POST['update'])){
			$email = $_POST['email'];
			//echo $email;
			$user_name = $_POST['user_name'];
			$address = $_POST['address'];
			$tel_num = $_POST['tel_num'];
			$sql = "UPDATE user SET user_name = '$user_name', phone_number='$tel_num', address = '$address' WHERE user_email = '$email'";

			$result = $dbconnection -> query($sql);
			if(!$result){
				//echo "Not Update";
			}else{
				//echo "Success";
			}

		}

	?>

	<?php include "footer.php" ?>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script> 

</body>

</html>