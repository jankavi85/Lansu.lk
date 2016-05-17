<?php include 'header.php' ?>
<link href="css/bidform.css" rel="stylesheet">
<div class="col-sm-10 col-sm-offset-1">
<div class="panel panel-warning">
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-1">
					<div class="bid-form">
						<h2><b>About Item Details</b></h2>
						<form name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
						<label> Category </label>
						<select name="category" id="category"  required>
						<option>Animals</option>
						<option>Cars & Vehicle</option>
						<option>Computer</option>
						<option>Education</option>
						<option>Electronics</option>
						<option>Hobby, Sport & Kids</option>
						<option>Home & Garden</option>
						<option>Fashion</option>
						<option>Property</option>
						<option>other</option>
						</select>
						<label>Sub Category </label>
						<select name="sub_category" id="sub_category" required></select>
						
						<label> District </label>
						<select name="district" id="district"  required>
						<option>Ampara</option>
						<option>Anuradhapura</option>
						<option>Badulla</option>
						<option>Batticaloa</option>
						<option>Colombo</option>
						<option>Galle</option>
						<option>Gampaha</option>
						<option>Hambantota</option>
						<option>Jaffna</option>
						<option>Kalutara</option>
						<option>Kandy</option>
						<option>Kegalle</option>
						<option>Kilinochci</option>
						<option>Kurunegala</option>
						<option>Matale</option>
						<option>Matara</option>
						<option>Mannar</option>
						<option>Moneragala</option>
						<option>Mullativu</option>
						<option>Nuwara Eliya</option>
						<option>Polonnaruwa</option>
						<option>Puttalam</option>
						<option>Ratnapura</option>
						<option>Trincomalee</option>
						<option>Vavuniya</option>
						
						
						
						</select>
						<label>Your Area</label>
						<select name="area" id="area" required></select>
						
						<label><h2><b>Add Photos(max 3 photo)</b></h2></label><br>
						<img src='images/home/upload.jpg' height='150' width='150'></img>
						<div id='upload'>
						<h2> Add a Photo</h2>
						</div><br>
						
						<label>Condition</label>
						<select name="condition" id="condition"  required>
						<option>Used</option>
						<option>New</option>
						</select>
						
						<label>Title</label>
						<input type="text" name='title'  required/>
						
						<label>Description</label>
						<textarea name='description' rows='5' cols='100'></textarea>
						
						<label>Price</label>
						<input type="text" name='price' placeholder='Rs' required/>
						
						<label>Phone Number</label>
						<input type="text" name='phonenumber' required/>
						
						<label>Delivery Option</label>
					<br>
					<input type="radio" name="deliver" value="meeting" id='d1' checked>
					<label for='d1'>Meeting Person</label> <br>
					<input type="radio" name="deliver" value="lansu" id='d2' >
					<label for='d2'>Lansu Delivery</label>
					<button type="submit" name='Add Item' class="btn btn-default">Add Item</button>
					</form>
					</div>
				</div>
				
				<div class="col-sm-3 ">
				<br><br><br>
				<div class="alert alert-warning">
				Choose category for your bidding item.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				Choose sub category for your bidding item.
				</div>
				<br><br>
				<div class="alert alert-warning">
				choose your district
				</div>
				<br><br>
				<div class="alert alert-warning">
				choose area, near your place
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				please upload image files below 5MB.
				you can upload jpg,png,bmp file types.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				how are the bidding item quality.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				Enter name for your bidding item.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				please give some details about your bidding item.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				please give minimum price to your bidding item.
				</div>
			 </div>
			</div>
		</div>
	</section>
</div>
</div>



<?php include 'footer.php' ?>
