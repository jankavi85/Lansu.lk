<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/title.png">
    <title>Lansu.lk</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
</head><!--/head-->
<body>
<div class="page-wrapper">
 	
   
 	
    <!-- Main Header -->
    <header id="scroll-to-search-box" class="main-header style-one">
    	<!-- Header Top -->
    	<div class="header-top">

        	<div class="auto-container clearfix">
            
                <nav>

                <div class="top-left clearfix">
                    <div class="email pull-left"><a href="mailto:companymail@gmailcom"><span class="f-icon flaticon-email145"></span> admin@lansu.lk</a></div>
                    <div class="phone pull-left"><a href="#"><span class="f-icon flaticon-phone325"></span>077XXXXXXX</a></div>
                </div>

                <div class="top-right pull-right">
                	

                    <ul class="locales">
                        <li><a href="#">සිංහල</a></li>
                        <li><a href="#">தமிழ்</a></li>
                    </ul>

                    <ul class="login-signup">
					 <?php 		
	if(isset($_SESSION["lansu_username"]) ) { //Checking whether a user has logged in
	?>
				<li><a href="profile.php"><span class="glyphicon glyphicon-user glyphicon-color"></span> My Account</a></li>
	
	<?php }
	else{
	?>
                            <li><a href="login.php"><span class="glyphicon glyphicon-user glyphicon-color"></span> Sign UP</a></li>
                            <li>
                        
                            <a id="modal_trigger" href="login.php" class="btn">
                            <span class="glyphicon glyphicon-log-in glyphicon-color"></span> Login</a></li>

	
	<?php } ?>
                    </ul>



                </div>

                </nav>
                
            </div>
        </div>

	<div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href="index.php"><img src="images/home/logo.png" alt="Bulldozer" title="Bulldozer"></a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
              
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                          <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                    
                                                                                                        
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="items_search.php">All Items</a></li>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
                                   
                            <div class="clearfix"></div>
        
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                
            </div>
            
        </div>
        
   
      
      
      
        
        
    </header>
    <!--End Main Header -->


<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>


	
	