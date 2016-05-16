<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ?>

	<p> </p>
	<div class="container">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<p> </p>
					<div class="row">
						<div class="col-md-10">
							<center><h4> My Profile </h4> </center>
						</div>
						<div class="col-md-2">
						<button class="btn btn-default" href="logout.php">  LOGOUT </button>
						</div>
					</div>
						<p> </p>
				</div>
				<div class="panel-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#overview"> Overview </a></li>
					<li><a data-toggle="tab" href="#edit"> Edit</a></li>
					<li><a data-toggle="tab" href="#mybids"> My Bids</a></li>
					<li><a data-toggle="tab" href="#favorites"> Favorites</a></li>
					<li><a data-toggle="tab" href="#complaints"> Complaints </a> </li>
				</ul>
					<div class="tab-content">
						<div id="overview" class="tab-pane fade in active"><center>
							<p> </p>
							<div class="row">
								<div class="col-md-7"> 
									<p> </p>
									<div class="row">
										<div class="col-md-2">
											<center>Name </center> 
										</div>
										<div class="col-md-9">
										<span class=" form-control"> Kavishan</span>
										</div>
            						</div>
            						<p> </p>
            						<div class="row">
										<div class="col-md-2">
											<center>E-mail </center> 
										</div>
										<div class="col-md-9">
											<span class=" form-control"> miyurukavishan@gmail.com</span>
										</div>
            						</div>
            						<p> </p>
            						<div class="row">
										<div class="col-md-2">
											<center> Telephone </center> 
										</div>
									<div class="col-md-9">
										<span class=" form-control"> 0716179152</span>
									</div>
            						</div>
            						<p> </p>
            						<p> </p>
            						<h2> </h2>
          							</div>
          							<div class="col-md-2">
          							<div>
          							<img src="images/profile/dummy.jpg" width="110px" height="130px">
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
              					<span class=""> 40% Profile Completed </span>
              				</div>
            			</div>
          			</div>
          		</div>
        		
          	</center>
			</div>
			<div id="edit" class="tab-pane fade">
				<p> </p>
				<div class="col-md-8">
					<form method="post" id="rigistrationform" action="" role="form">
						<div class="form-group has-feedback">
						<label for="rname"> First Name </label>
						<input type="text" class="form-control" id="rname" placeholder="Enter First Name">
						<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
						<label for="lname"> Last Name </label>
						<input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
						<span class="glyphicon glyphicon-pencil form-control-feedback"></span>
						</div>

						<div class="form-group has-feedback">
						<label for="nic"> NIC Number </label>
						<input type="text" class="form-control" id="nic" placeholder="Enter Your NIC number">
						<span class="glyphicon glyphicon-pencil form-control-feedback">
						</div>

						<div class="form-group has-feedback">
						<label for="tp"> Telephone Number </label>
						<input type="text" class="form-control" id="tp" placeholder="Enter Your Telephone number">
						<span class="glyphicon glyphicon-phone form-control-feedback">
						</div>

						<div class="col-md-5">
						</div>
						<button class="btn btn-default"> UPDATE NOW </button>
						<button class="btn btn-default"> CANCEL </button>


					</form>
				</div>
				<div class="col-md-2">
          			<div>
          			<img src="images/profile/dummy.jpg" width="110px" height="130px">
          			<p> </p>
          			<button class="btn btn-default"> UPLOAD </button>
          			<p> </p>
          			</div>
          			</div>

			</div>
			<div id="mybids" class="tab-pane fade">
				<p> </p>
				<center><h3>Bidding History</h3></center>
				<p> </p>
				<div class="col-md-4">
				</center><img src="images/sold.png" width="145px" height="175px"></center>
				</div>
				<div class="col-md-4">
				</center><img src="images/sold.png" width="145px" height="175px"></center>
				</div>
				<div class="col-md-4">
					<center>
				<img src="images/sold.png" width="145px" height="175px"></center>
				</div>


			</div>
			<div id="favorites" class="tab-pane fade">
				<h3> My Favorites </h3>
			</div>
			<div id="complaints" class="tab-pane fade">
				<h3> Cpmlaints About Me </h3>
			</div>

		</div>
	</div>
	</div>
	</div>
</div>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script> 

</body>

</html>