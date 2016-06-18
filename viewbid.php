<html>
<head>

</head>
<?php
include "header.php";
$id=$_GET['value'];
include "database/dbconnect.php";
$sql="SELECT category,sub_category,district,district_area,conditionOn,item_avatar,closingtime,title,description,price,delivery_option,user_name,phone_number FROM biditem INNER JOIN user on biditem.user_id=user.user_id WHERE biditem_id='$id';";
$result = mysqli_query($dbconnection, $sql);
$rows = mysqli_fetch_array($result);
$closing=$rows['closingtime'];
$close=json_encode($closing);

?>
<link href="css/bootstraptime1.css" rel="stylesheet">
<link href="css/viewdirect.css" rel="stylesheet">

<script type="text/javascript">
	function toggle(Info) {
  		var CState = document.getElementById(Info);
  		CState.style.display = (CState.style.display != 'block') ? 'block' : 'none';
		}
</script>


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
				
<DIV class="FAQ" onclick="toggle('faq3')">
<h4> Bid Now</h4>
</DIV>
<div class="FAA" id="faq3">
<form>
<label><h4>Phone Number</h4></label>
					<input type="text" name='phonenumber' placeholder='phone number *' id='phonenumber' onBlur="return ValidateMobNumber('phonenumber')"required/>
			<br>		
<label><h4>Price</h4></label>
					<input type="text" name='phonenumber' placeholder='LKR *' id='phonenumber' onBlur="return ValidateMobNumber('phonenumber')"required/>
</form>
</div>
		</div>
		
		<div class="col-sm-4 col-sm-offset-2">
		
		 <h5><b><div id="time"></div></b></h5>
		<p><span class="glyphicon glyphicon-euro glyphicon-color"></span> <?php echo "Price		: "."LKR ".$rows['price'];  ?></p>
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
<script src="js/jaquerytime1.js"></script>
<script src="js/bootstraptime1.js"></script>
	<script>
    $(function() {
		<?php
		echo "var closing = $close;";
		?>
		var times=[];
		times.push({
				'id': "time",
			    'end': new Date(closing)	
			});
								
		
        // Initialize the table values
       $.each(times, function( key, value ) {
        $('#time').append('<span class="label label-primary">Loading...</span>');

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

                $('#time').text(displayTime);
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

	</html>
