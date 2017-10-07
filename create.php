<?php
	if ($_POST['submit'] == "OK" && $_POST['login'] != "" && $_POST['passwd'] != "")
	{
		$servername="localhost";
		$username ="syoung";
		$password = "syoung";
		$dbname = "cms_info_db";
		$login = $_POST['login'];
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		$hash = hash(whirlpool, $_POST['passwd']);
		$user = array(login => $_POST['login'], passwd => $hash);
		$sql = "SELECT * FROM users WHERE login = '$login'";
		$query = mysqli_query($conn, $sql);
		if (mysqli_num_rows($query) != 0)
			echo "USER NAME ALREADY IN USE\n";
		else
		{
			$sql = "INSERT INTO users(login, passwd)
			VALUES('$login', '$hash')";
			mysqli_query($conn, $sql);
			echo mysqli_error($conn);
		}
		}
	else
		echo "ERROR\n";
?>
