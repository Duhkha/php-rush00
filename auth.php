<?php

function auth($login, $passwd)
{
	if ($login != "" && $passwd != "")
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
		$passwd = hash(whirlpool, $passwd);
		$account = array(login => $login, passwd => $passwd);
		$sql = "SELECT * FROM users WHERE login = '$login'";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
		if ($row['passwd'] != $user['passwd'])
			return false;
		else
			return true;
	}	
}

?>
