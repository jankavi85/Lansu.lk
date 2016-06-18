<?php include 'headinclusion.php'; ?>
  
 <?php 
 include "../database/dbconnect.php";
 $sql="SELECT directitem_id,category,sub_category,district,district_area,conditionOn,item_avatar,title,description,price,addingtime,delivery_option,user_name,user_email,phone_number FROM directitem INNER JOIN user on directitem.user_id=user.user_id WHERE item_accept=0;";

$result = mysqli_query($dbconnection, $sql);

 
 ?>
  
  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Items Manage</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Direct Items</li>						  	
					</ol>
				</div>
			</div>
			
			<div class="table-responsive">

<table class="table" >
<thead>
<tr>
<th width="30%" align="center" bgcolor="#999"><strong>Email</strong></th>
<th width="20%" align="center" bgcolor="#999"><strong>View Item Details</strong></th>
<th width="20%" align="center" bgcolor="#999"><strong>Date/Time</strong></th>
<th width="15%" align="center" bgcolor="#999"><strong>Accept</strong></th>
<th width="15%" align="center" bgcolor="#999"><strong>Remove</strong></th>
</tr>
</thead>
<tbody>
<?php while($rows = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $rows['user_email']; ?></td>
<td><a href= "viewdirect.php?value=<?php echo $rows['directitem_id']; ?>" target="_blank" >View Item Details</a></td>
<td><?php echo $rows['addingtime']; ?></td>
<td><a href= "acceptdirect.php?detail=<?php  echo $rows['directitem_id']; ?>" >Accept Item</a></td>
<td><a href= "removedirect.php?detail=<?php  echo $rows['directitem_id']; ?>" >Remove Item</a></td>
</tr>
<?php }?>
</tbody>
</table>

			
			
			
			
			
			</div>
              
           
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

  

  
 <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
	