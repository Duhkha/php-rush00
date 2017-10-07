<?php
	session_start();
	include "auth.php";
	if (auth($_POST['login'], $_POST['passwd']) == true)
	{
		$_SESSION['loggued_on_usr'] = $_POST['login'];
		print_r($_SESSION);
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
		$_SESSION['loggued_on_usr'] = "";
	}
?>
