<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
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
		<a href="#" ><img src="https://www.materialui.co/materialIcons/action/shopping_cart_grey_192x192.png" style="float:right;float:top;margin-right:5%;height:40px;"</img></a>
	</div>
	<div>
	<br>
					<?php
	if ($_POST['submit'] == "OK" && $_POST['login'] != "" && $_POST['passwd'] != "")
	{
		$servername="127.0.0.1";
		$username ="root";
		$password = "g5nrqbcm";
		$dbname = "cms_info_db";
		$login = $_POST['login'];
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if ($conn == false)
			echo "failed to connect";
		$hash = hash(whirlpool, $_POST['passwd']);
		$sql = "SELECT * FROM cms_info_db.users WHERE username = '$login'";
		$query = mysqli_query($conn, $sql);
		if (mysqli_num_rows($query) != 0)
			echo "<br><h1>USER NAME ALREADY IN USE</h1>";
		else
		{
			$sql = "INSERT INTO users(username, passwrd)
			VALUES('$login', '$hash')";
			mysqli_query($conn, $sql);
			echo "<br><h1>SUCCESS</h1>";
		}
		}
	else
		echo "<br><h1>ERROR</h1>";
?>
</div>
	<img src="http://s1.picswalls.com/wallpapers/2014/01/22/hq-black-wallpaper_052248_13.jpg" style="width:1904px;height:1000px;"</img>
</body>
</html>

