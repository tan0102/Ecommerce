<!DOCTYPE>
<?php 

include("functions/functions.php");
?>
<html>

<head>

	<title>
		Jupiter Bargin Online Shops
	</title>
	
	<link rel="stylesheet" href="styles/style.css" media="all" />
	
</head>

<body>
	<!--Main Start-->
	<div class="main_wrapper">
	
		<!--Head Start-->
		<div class="head_wrapper">
		
			<img id="logo" src="images/logo.gif"> </img>
			<img id="bogo" src="images/bogo.gif"></img>
			
		</div>
		<!--Head End-->
		
		<!--Menu Start-->
		<div class="menu_wrapper">
			
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All product</a></li>
				<li><a href="#">My account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product"/ > 
					<input type="submit" name="search" value="Search" />
				</form>
			
			</div>
		
		</div>
		<!--Menu End-->
	
		<!--Content Start-->
		<div class="content_wrapper">
		
			<div id="side"> 
				
				<div id="side_title">
					Category
				</div>
				
				<div id="category_title">
				
					<?php getCategory(); ?>
					
				</div>
				
				<div id="side_title">
					Brand
				</div>
				
				<div id="category_title">
					
					<?php getBrand(); ?>
					
				</div>
			
			</div>
			
			<div class="product_wrapper"> 
			product
			</div>
		</div>
		<!--Content End-->
		
		<!--Foot Start-->		
		<div class="foot_wrapper">
			<h3 style="text-align:center; ">&copy; 2014 by www.OnlineTuting.com</h3>
		</div>
		<!--Foot End---->
	
	</div>
	<!--Main End-->
	
	
</body>

</html>
