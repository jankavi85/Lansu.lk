<?php include 'sessioncheck.php'; ?>
<?php include 'header.php' ; ?>
<link href="css/additem.css" rel="stylesheet">




<div class="panel panel-default" id='paneladd'>
  <div class="panel-heading" ><h3>Welcome! Let's Add a Item. Select Your Option</h3></div>
  <div class="panel-body" >
  <div class="container">
 <div class="row">
  <a href="bidform.php">
  <div class="col-sm-4" id='bid'>
	 <div>
	<img src="images/home/bid.png" width='300' height='200' alt="" />
	</div>
	<font size="6" color="red">Add Item To Bid!</font>
										
</div>
</a>
<a href="directform.php">
<div class="col-sm-4" id='direct'>
   <div>
  <img src="images/home/direct.ico" width='300' height='200' alt="" />
	</div>	
<font size="6" color="red">Add Item To Direct Sale!</font>
</div>
</a>
  
  
  </div>



</div>
</div>
</div>

<?php include 'footer.php' ; ?>