<?php
	session_start();
	if (isset($_SESSION['loggued_on_usr'])
	&& $_SESSION['loggued_on_usr'] != "") 
		echo $_SESSION['loggued_on_usr']. "\n";
	else
		echo "ERROR\n";
?>
