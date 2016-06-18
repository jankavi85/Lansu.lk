
<?php include 'header.php'; ?>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/faq_reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/faq.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>FAQ Template | CodyHouse</title>
</head>
<body>

<section class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a class="selected" href="#basics">Basics</a></li>
		<li><a href="#mobile">Mobile</a></li>
		<li><a href="#account">Account</a></li>
		<li><a href="#payments">Payments</a></li>
		<li><a href="#privacy">Privacy</a></li>
		<li><a href="#delivery">Delivery</a></li>
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group"></ul> 
		<ul id="mobile" class="cd-faq-group"></ul>
		<ul id="account" class="cd-faq-group"></ul>
		<ul id="payments" class="cd-faq-group"></ul>
		<ul id="privacy" class="cd-faq-group"></ul>
		<ul id="delivery" class="cd-faq-group"></ul>

	
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->
<script>
function myFunction(arr) {
    var basics = "";
	var mobile = "";
	var account = "";
	var payments = "";
	var privacy = "";
	var delivery = "";
	
    var i;
    for(i = 0; i<arr.length; i++) {
        
		if(arr[i].Type=='Basics'){
		basics += '<li><a class="cd-faq-trigger" href="#0">'+arr[i].Question+'</a><div class="cd-faq-content"><p>'+arr[i].Answer+'</P></div></li>';
		}
		else if (arr[i].Type=='Mobile'){
		mobile += '<li><a class="cd-faq-trigger" href="#0">'+arr[i].Question+'</a><div class="cd-faq-content"><p>'+arr[i].Answer+'</P></div></li>';
		}
		else if (arr[i].Type=='Account'){
		account += '<li><a class="cd-faq-trigger" href="#0">'+arr[i].Question+'</a><div class="cd-faq-content"><p>'+arr[i].Answer+'</P></div></li>';
		}
		else if (arr[i].Type=='Payments'){
		payments += '<li><a class="cd-faq-trigger" href="#0">'+arr[i].Question+'</a><div class="cd-faq-content"><p>'+arr[i].Answer+'</P></div></li>';
		}
		else if (arr[i].Type=='Privacy'){
		privacy += '<li><a class="cd-faq-trigger" href="#0">'+arr[i].Question+'</a><div class="cd-faq-content"><p>'+arr[i].Answer+'</P></div></li>';
		}
		else if (arr[i].Type=='Delivery'){
		delivery += '<li><a class="cd-faq-trigger" href="#0">'+arr[i].Question+'</a><div class="cd-faq-content"><p>'+arr[i].Answer+'</P></div></li>';
		}
		
    }
    document.getElementById("basics").innerHTML = '<li class="cd-faq-title"><h2>Basics</h2></li>'+basics;
	document.getElementById("mobile").innerHTML = '<li class="cd-faq-title"><h2>Mobile</h2></li>'+mobile;
	document.getElementById("account").innerHTML = '<li class="cd-faq-title"><h2>Account</h2></li>'+account;
	document.getElementById("payments").innerHTML = '<li class="cd-faq-title"><h2>Payments</h2></li>'+payments;
	document.getElementById("privacy").innerHTML = '<li class="cd-faq-title"><h2>Privacy</h2></li>'+privacy;
	document.getElementById("delivery").innerHTML = '<li class="cd-faq-title"><h2>Delivery</h2></li>'+delivery;
}
</script>
<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
<script src="faq.json"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/faq.js"></script> <!-- Resource jQuery -->
<script src="js/jquery.js"></script>
	
</body>
