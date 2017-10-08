<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<?php
	//		include "categories.php";
	//	start_session();
	//	$product = array();
	//	$product[] = array(name =>"board1", price=>1000);
	///	$product[] = array(name =>"board2", price=>2000);
	//	if (empty($_SESSION['cart']))
	//	{
		//	$_SESSION['cart'] = array();
			//echo "empty sess";
		//}
	//	if ($_POST['add'] >= 0)
	//	{
	//		$_SESSION['cart'][] = $product[$_POST['add']];
	//		print_r($_SESSION['cart']);
	//	}
		?>
		<title>SURFS-UP</title>
	</head>
	<body>
		<div class="dropdown">
			<a class="dropbtn" href="index.html">HOME</a>
		</div>
		<div class="dropdown">
			<button class="dropbtn">CATERGORY</button>
			<div class="dropdown-content">
				<a href="product.php?cat=1">BOARDS</a>
				<a href="product.php?cat=2">CLOTHES</a>
				<a href="product.php?cat=3">GLASSES</a>
				<a href="product.php?cat=4">SWIMWEAR</a>
				<a href="product.php?cat=5">GO-PRO</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">ABOUT</button>
			<div class="dropdown-content">
				<a href="#">CONTACT</a>
				<a href="#">MOTTO</a>
				<a href="#">FAQ</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">ACCOUNT</button>
			<div class="dropdown-content">
				<a href="login.html">SIGN-IN</a>
				<a href="logout.php">SIGN-OUT</a>
				<a href="create.html">CREATE AN ACCOUNT</a>
				<a href="admin.html">ADMIN</a>
			</div>
		</div>
		<a href=" #" ><img src="https://www.materialui.co/materialIcons/action/shopping_cart_grey_192x192.png" style="float:right;margin-right:5%;height:40px;float:top;"</img></a>
	</div>
	<div class="product">
	<form action="product.php" method="post">
	<?php

		foreach($product as $k=>$item)
		{
				$image = 'img/'.$item['name'].'.png';
				echo "<div class=grid><img src=$image </img></a><h3>".$item['name']." R".$item['price']."</h3><br>";
				echo "<button name='add' value=".$k." type='submit'>add</button><br></div>";
		}
	?>
</form>
</div>
</body>
</html>
