<p>Select Sub Category</p>
<?php
	$category = strval($_GET['category']);
	echo $category;

	if ($category == "AllCategories") {
		echo $category;
	}elseif ($category == "Electronics") {
		?>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">All Electronics</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Mobile Phone Accessories</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Computer Accessories & Tablets</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">TVs & Radios</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Cameras & Video Accessories</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Audio & MP3</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Other Electronics</button>
		<?php
	}elseif ($category == "HomeItems") {
		?>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">All Home Items</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Furniture</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Home Appliances</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Other Home Items</button>
		<?php
	}elseif ($category == "FashionHB") {
		?>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">All Fashion, Health & Beauty</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Clothing</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Shoes & Footwear</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Jewellery</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Sunglasses</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Watches</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Other Fashion Accessories</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Health & Beauty Products</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Other Personal Items</button>
		<?php
	}elseif ($category == "HobbySK") {  
		?>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">All Hobby, Sport & Kids</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Musical Instruments</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Sports Equipment</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Art & Collectibles</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Movies & CD/DVD</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Video Games & Consoles</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Children's Items</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Other Hobby, Sport & Kids Items</button>
		<?php
	}elseif ($category == "BusinessSI") {
		?>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">All Business, Services & Industry</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Industry Tools & Machinery</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Medical Equipment & Supplies</button>
		<?php
	}elseif ($category == "Education") {
		?>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">All Education</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Books</button>
		<button type="button"  class="btn btn-default btn-block" value="Electronics">Other Education</button>
		<?php
	}elseif ($category == "Other") {
		echo $category;
	}
?>