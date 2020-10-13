<?php include ("cart.php");?>
<html>
	<head>
		<meta http-equiv ="Content-Type" content="text/html; charset= utf-8" />
		<title>Shopping Cart</title>
		<link rel ="icon" type="image" href ="images/cart.png">
		<link rel="stylesheet" type ="text/css" href="css/main.css" />
	</head>
	<body style= "background-image:url('images/background.jpeg')">
		<header id ="heading">
			<image id="logo"  src="images/l.png" height="65"  width "140" />
			<h1>DBMS<span id="color_me"> PROJECT</span></h1>
		</header>
		<div id="main_div">
			<h3> SHOPPING CART</h3><br />
			<div id="division">
				<section id="main_section">
					<?php display_cart();?>
				</section>
				<aside id= "side">	
					<span class= "YOUR_CART">YOUR CART</span>&nbsp;&nbsp;
					<img src ="images/t.png" height="45" width="45" /><br /><br /><br /> 
					<?php product()?>
				</aside>
			</div>
		</div>
	</body>	
</html>
