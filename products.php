<!DOCTYPE html>
<html>
	<head>
	<?php
	include "categories.php";
	?>
	<title></title>
</head>
<body>
	<?php
	foreach($product as $elem)
	{
		echo $elem['name']. $elem['price'];
	}
	?>
	sdsdff
</body>
</html>

