<?php
include "header.php";
$id=$_GET['value'];
include "database/dbconnect.php";
$sql="SELECT category,sub_category,district,district_area,conditionOn,item_avatar,title,description,price,delivery_option,user_name,phone_number FROM directitem INNER JOIN user on directitem.user_id=user.user_id WHERE directitem_id='$id';";
$result = mysqli_query($dbconnection, $sql);
$rows = mysqli_fetch_array($result);

?>
<link href="css/viewdirect.css" rel="stylesheet">




<div class="panel panel-default" id='paneladd'>
  <div class="panel-heading" ><h3><?php echo $rows['title']; ?></h3></div>
  <div class="panel-body" >
  <div class="container">
 <div class="row">
       <div class="col-sm-4" >
				<div id="slider-carousel" class="carousel slide" data-ride="carousel" style="width:500px; height:350px; margin:auto 0;">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								
								<div class="col-sm-4">
									<img src="<?php echo $rows['item_avatar']; ?>" height='250' width="300" alt="" />
									
								</div>
							</div>
							<div class="item">
								
								<div class="col-sm-4">
									<img src="<?php echo $rows['item_avatar']; ?>" height='250' width="300" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								
								<div class="col-sm-4">
									<img src="<?php echo $rows['item_avatar']; ?>" height='250' width="300" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
					</a>
				</div>
		</div>
		<div class="col-sm-4 col-sm-offset-2">
		<p><span class="glyphicon glyphicon-th-large glyphicon-color"></span> <?php echo "Category		: ".$rows['category'];  ?></p>
		
		<p><span class="glyphicon glyphicon-th glyphicon-color"></span> <?php echo "Sub Category	:".$rows['sub_category'];  ?></p>
		
		<p><span class="glyphicon glyphicon-map-marker glyphicon-color"></span> <?php echo "District		:".$rows['district'];  ?></p>
		
		<p><span class="	glyphicon glyphicon-road glyphicon-color"></span>  <?php echo "Area			:".$rows['district_area'];  ?></p>	
		
			<p><span class="		glyphicon glyphicon-phone glyphicon-color"></span>  <?php echo "Contact 			:".$rows['phone_number'];  ?></p>

		<h3><b>About<b></h3>
		<p> <?php echo $rows['description'];  ?></p>		
		</div>
					
				
				
				
</div>
</div>



</div>
</div>
</div>


<?php include 'footer.php' ; ?>

<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>

