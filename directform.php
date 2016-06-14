<?php include 'sessioncheck.php'; ?>
<?php include 'header.php' ?>
<link href="css/direct.css" rel="stylesheet">

				
<script type="text/javascript">
function loadsub(category) {
		
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("subcategory").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","getsub.php?category="+category,true);
			//xmlhttp.open("GET","getMadeBy.php?id="+id,true);
			xmlhttp.send();
		
		//alert("bninm");
	}
	
function loadarea(district) {
		
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("area").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","getarea.php?district="+district,true);
			//xmlhttp.open("GET","getMadeBy.php?id="+id,true);
			xmlhttp.send();
		
		//alert("bninm");
	}
	
$(function () {
    $(":file").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[0]);
        }
    });
});

function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
};
</script>
<script type="text/javascript">
function ValidateMobNumber(txtMobId) {
  var fld = document.getElementById(txtMobId);

  if (isNaN(fld.value)) {
  alert("The phone number contains illegal characters.");
  fld.value="";
  fld.focus();
  return false;
 }
 else if (!(fld.value.length == 10 || fld.value.length == 0)) {
  alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
  fld.value="";
  fld.focus();
  return false;
 }

}
</script>
<script type="text/javascript">
function validateprice(price) {
  var fld = document.getElementById(price);

  if (isNaN(fld.value)) {
  alert("The phone number contains illegal characters.");
  fld.value="";
  fld.focus();
  return false;
 }
}
</script>
<div class="col-sm-10 col-sm-offset-1">
<div class="panel panel-warning">
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-1">
					<div class="bid-form">
						<h2><b>About Item Details</b></h2>
						<hr>
						<form name="form2" method="post" action="directformdata.php" enctype="multipart/form-data">
						<label> Category </label>
						<select name="category" id="category" onchange="loadsub(this.value)"   required>
						<option value="">----------------------------------Select a Category----------------------------</option>
						<option value='Animals'>Animals</option>
						<option value='CarsVehicles'>Cars & Vehicle</option>
						<option value='Education'>Education</option>
						<option value='Electronics'>Electronics</option>
						<option value='HobbySportKids'>Hobby, Sport & Kids</option>
						<option value='HomeGarden'>Home & Garden</option>
						<option value='FashionHealthBeauty'>Fashion & Health,Beauty</option>
						<option value='Property'>Property</option>
						<option value='other'>other</option>
						</select>
						
						<label>Sub Category </label>
						<select name="subcategory" id="subcategory" required>
						<option value="">-----------------------------Select a sub category------------------------------</option>
						</select>
						
						<label> District </label>
						<select name="district" id="district" onchange="loadarea(this.value)" required>
						<option value="">----------------------------------Select a District-------------------------------</option>
						<option value="Ampara">Ampara</option>
						<option value="Anuradhapura">Anuradhapura</option>
						<option value="Badulla">Badulla</option>
						<option value="Batticaloa">Batticaloa</option>
						<option value="Colombo">Colombo</option>
						<option value="Galle">Galle</option>
						<option value="Gampaha">Gampaha</option>
						<option value="Hambantota">Hambantota</option>
						<option value="Jaffna">Jaffna</option>
						<option value="Kalutara">Kalutara</option>
						<option value="Kandy">Kandy</option>
						<option value="Kegalle">Kegalle</option>
						<option value="Kilinochci">Kilinochci</option>
						<option value="Kurunegala">Kurunegala</option>
						<option value="Matale">Matale</option>
						<option value="Matara">Matara</option>
						<option value="Mannar">Mannar</option>
						<option value="Moneragala">Moneragala</option>
						<option value="Mullativu">Mullativu</option>
						<option value="Nuwara Eliya">Nuwara Eliya</option>
						<option value="Polonnaruwa">Polonnaruwa</option>
						<option value="Puttalam">Puttalam</option>
						<option value="Ratnapura">Ratnapura</option>
						<option value="Trincomalee">Trincomalee</option>
						<option value="Vavuniya">Vavuniya</option>
						</select>
						
						
						<label>Your Area</label>
						<select name="area" id="area" required>
						<option value="">--------------------------------Select a your area---------------------------------</option>
						</select>
		
						

						
						<label><h2><b>Add Photos(max 3 photo)</b></h2></label><br>
						<img id="myImg" src='images/form/upload.jpg' height='150' width='200'></img>
						<div id='upload'>
						<input type="file" name="image"  />
						</div><br>
						
						<label>Condition</label>
						<select name="condition" id="condition"  required>
						<option>Used</option>
						<option>New</option>
						</select>
						
						<label>Title</label>
						<input type="text" name='title' placeholder='title*' required/>
						
						<label>Description</label>
						<textarea name='description' rows='5' cols='100' placeholder='description*'></textarea>
						
						<label>Price</label>
						<input type="text" name='price' placeholder='Rs *' id='price' onBlur="return validateprice('price')"  required/>
						
						<label>Phone Number</label>
						<input type="text" name='phonenumber' id='phonenumber' onBlur="return ValidateMobNumber('phonenumber')" placeholder='phone number*' required/>
						
						<label>Address</label>
					<input type="text" name='address' placeholder='Address' />
						
						<label>Delivery Option</label>
					<br>
					<input type="radio" name="deliver" value="meeting" id='d1' checked>
					<label for='d1'>Meeting Person</label> <br>
					<input type="radio" name="deliver" value="lansu" id='d2' >
					<label for='d2'>Lansu Delivery</label>
					<button type="submit" name='AddItem' class="btn btn-default">Add Item</button>
					</form>
					</div>
				</div>
				
				<div class="col-sm-3 ">
				<br><br><br><br><br>
				<div class="alert alert-warning">
				Choose category for your item.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				Choose sub category for your item.
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
				how are the item quality.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				Enter name for your item.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				please give some details about your item.
				</div>
				<br><br><br>
				<div class="alert alert-warning">
				please give suitable price to your item.
				</div>
			 </div>
			</div>
		</div>
	</section>
</div>
</div>


<?php include 'footer.php' ?>
