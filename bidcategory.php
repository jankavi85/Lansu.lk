<?php 
include "header.php";
//include "a.html";
$category=$_GET['id'];
								

?>

<link href="css/bootstraptime1.css" rel="stylesheet">
<link href="css/directcategory.css" rel="stylesheet">
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					
				</div>
			</div>
		</div>
	
	</section><!--/slider-->
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ELECTRONICS
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Mobile Phones </a></li>
											<li><a href="#">Mobile Phone Accessories </a></li>
											<li><a href="#">Computer Accessories </a></li>
											<li><a href="#">TV & Video Accessories</a></li>
											<li><a href="#">Cameras & Camcorders</a></li>
											<li><a href="#">Audio & MP3</a></li>
											<li><a href="#">Other Electronics</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											CARS & VEHICLES
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Cars</a></li>
											<li><a href="#">Motorbikes & Scooters</a></li>
											<li><a href="#">Three Wheelers</a></li>
											<li><a href="#">Push Cycles</a></li>
											<li><a href="#">Vans & Buses</a></li>
											<li><a href="#">Heavy-Duty Vehicles</a></li>
											<li><a href="#">Auto Part & Accessories</a></li>
											<li><a href="#">Boats & Water Transport</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											LAND & PROPERTY
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Land</a></li>
											<li><a href="#">Houses</a></li>
											<li><a href="#">Apartments</a></li>
											<li><a href="#">Commercial Property</a></li>
										</ul>
									</div>
								</div>
							</div>
							
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											HOME & GARDEN
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Furniture</a></li>
											<li><a href="#">Home Appliances</a></li>
											<li><a href="#">Electricity,AC,Bathroom & Garden</a></li>
											<li><a href="#">Other Home Items</a></li>
										</ul>
									</div>
								</div>
							</div> 
								<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											FASHION HEALTH & BEAUTY
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Clothing</a></li>
											<li><a href="#">Shoes & Footwear</a></li>
											<li><a href="#">Jewellery</a></li>
											<li><a href="#">Sunglasses</a></li>
											<li><a href="#">Watches</a></li>
											<li><a href="#">Other Fashion Accessories</a></li>
											<li><a href="#">Health & Beauty Products</a></li>
											<li><a href="#">Other Personal Items</a></li>
										</ul>
									</div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											HOBBY SPORT & KIDS
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Musical Instruments</a></li>
											<li><a href="#">Sports Equipment</a></li>
											<li><a href="#">Travel, Events & Tickets</a></li>
											<li><a href="#">Art & Collectibles</a></li>
											<li><a href="#">Music, Books & Movie</a></li>
											<li><a href="#">Video Games & Consoles</a></li>
											<li><a href="#">Children's Items</a></li>
											<li><a href="#">Other Hobby,Sport & Kids Items </a></li>
										</ul>
									</div>
								</div>
							  </div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											EDUCATION
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Textbooks</a></li>
											<li><a href="#">Other Eduction</a></li>
										</ul>
									</div>
								</div>
							  </div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ANIMALS
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Pets </a></li>
											<li><a href="#">Farm Animals</a></li>
											<li><a href="#">Animal Accessories</a></li>
											<li><a href="#">Sunglasses</a></li>
											
										</ul>
									</div>
								</div>
							  </div>
							
							
						</div><!--/category-products-->
					
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Bidding Items - <?php echo $category; ?></h2>
						
	<?php									
include "database/dbconnect.php";
$sql="SELECT biditem_id,sub_category,district,district_area,conditionOn,item_avatar,closingtime,title,description,price,delivery_option,user_name,phone_number FROM biditem INNER JOIN user on biditem.user_id=user.user_id WHERE category='$category';";
$result = mysqli_query($dbconnection, $sql);
$count=-1;

while($rows = mysqli_fetch_array($result)){
	$count++;
	$closing[$count]= $rows['closingtime'];
?>	
				
				
					<a href="viewbid.php?value=<?php echo $rows['biditem_id']; ?>">	<div class="col-sm-4 borderdirect" >
							<div class="product-image-wrapper" >
								<div class="single-products" >
										<div  class="productinfo text-center"  >
										

											<img src="<?php echo $rows['item_avatar'] ; ?>" height='180'alt="" />
											<h2><?php echo $rows['title'];?></h2>
											
											<div id="<?php echo "time".$count;?>"></div>
											
											
		
										</div>
										
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">

										<li align="center"><?php  echo $rows['district']."/".$rows['district_area']; ?></li>
										</ul>
										<ul class="nav nav-pills nav-justified">
										<li align="center"><a href="viewbid.php?value=<?php echo $rows['biditem_id']; ?>" class="btn btn-default add-to-cart"><i class=""></i>Get Full Details</a></li>

									</ul>
								</div>
							</div>
						</div>
						</a>
						
						
						
							
<?php 
if($count%3==0)
{
	echo nl2br('');
}
}
if($count!=-1)
	{
	$close=json_encode($closing);
	}

 ?>
</div><!--features_items-->
					
					
					
					
				</div>
			</div>
		</div>
	</section>	
					
<?php
include "footer.php" ; ?>
<script src="js/jaquerytime1.js"></script>
<script src="js/bootstraptime1.js"></script>
	<script>
    $(function() {
		<?php
		echo "var closing = $close;";
		?>
		var times=[];
		var len=closing.length;
		for(var i = 0; i < len; i++){
			times.push({
				'id': "time"+i.toString(),
			    'end': new Date(closing[i])	
			});
								
		}
        
        // Initialize the table values
       $.each(times, function( key, value ) {
        $('#'+value.id).append('<span class="label label-primary">Loading...</span>');

       });


        function countdown()
        {
            var now = new Date();
            console.log('updating time');

            $.each(times, function( key, value ) {
                var left = value.end - now;
                var days = Math.floor( left / (1000 * 60 * 60 * 24) );
                var hours = Math.floor( (left % (1000 * 60 * 60 * 24) ) / (1000 * 60 * 60) );
                var minutes = Math.floor( (left % (1000 * 60 * 60)) / (1000 * 60) );
                var seconds = Math.floor( (left % (1000 * 60)) / 1000 );

                displayTime = '';
                if (days > 0) {
                    displayTime = "Days: " + days;
                }
                displayTime = displayTime + " Hours: " + hours + " Minutes: " + minutes + " Seconds: " + seconds;

                $('#'+value.id).text(displayTime);
            });

        }
        timer = setInterval(countdown, 1000);        

    });
</script>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>