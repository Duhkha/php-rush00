<?php
	if ($_POST['submit'] == "OK" && $_POST['login'] != "" && $_POST['passwd'] != "")
	{
		$servername="localhost";
		$username ="syoung";
		$password = "syoung";
		$dbname = "products";
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		$hash = hash(whirlpool, $_POST['passwd']);
		$user = array(login => $_POST['login'], passwd => $hash);
		$file = array();
		$sql = "SELECT * FROM users WHERE login = ". $_POST['login'];
		$query = mysqli_query($conn, $sql);
		if (mysqli_num_rows($query) != 0)
			echo "USER NAME ALREADY IN USE\n";
		else
		{
			$sql = "INSERT INTO users(LOGIN, PASSWD),
			VALUES(".$_POST['login'].", ". $hash.")";
			echo $sql;
			mysqli_query($conn, $sql);
			echo mysqli_error($conn);
		}
		}
	else
		echo "ERROR\n";
?>
