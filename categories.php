<?php
	$servername ="localhost";
	$username = "syoung";
	$password = "syoung";
	$dbname = "products";
	$conn = mysqli_connect($servername, $username, $password, $dbname); 
	if ($conn == false)
	{
		echo "Connection failed: " . mysqli_connect_error();
		exit();
	}
	$cat = "SELECT * FROM categories";
	$prod = "SELECT * FROM products";
	$catq = mysqli_query($conn, $cat);
	$prodq = mysqli_query($conn, $prod);
	while ($catarr = mysqli_fetch_assoc($catq))
	{
		if ($catarr[$_GET['cat']] == 1)
		{	
			while ($prodarr = mysqli_fetch_assoc($prodq))
			{
				if ($catarr['ID'] == $prodarr['ID'])
				{
					$product[] = array(name =>$prodarr['ITEM'], 
					price=>$prodarr['PRICE']);
				}
			}
		}
	}
	mysqli_close($conn);
?>

