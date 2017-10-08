<?php
include('db_query.php');
include('manage_admin.php');
function init_db()
{
	$db_name =  'cms_info_db';
	$query = "CREATE DATABASE IF NOT EXISTS $db_name";
	if (db_query($query))
		echo "created db successfully\n";
	else
		die ("could not create database\n");
	create_admins_tb();
	create_users_tb($db_name);
	create_cat_tb($db_name);
	create_pro_tb($db_name);
	create_pro_cat_tb($db_name);
}
function create_users_tb($db_name)
{
	$users_create = "CREATE TABLE  IF NOT EXISTS $db_name.users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,    
		passwrd VARCHAR(128) NOT NULL,
		email VARCHAR(50)
		)";
	if (db_query($users_create))
		echo ("users table created successfully\n");
	else
		die ("There was an error creating user table\n");
}

function create_cat_tb($db_name)
{
	$product_cat = "CREATE TABLE  IF NOT EXISTS $db_name.categories (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL
		);";
	if (db_query($product_cat))
		echo ("categories table created successfully\n");
	else
		die ("There was an error creating categories table\n");
	$import_cat = "LOAD DATA LOCAL INFILE 'default_data/cat.txt' 
						INTO TABLE $db_name.categories COLUMNS TERMINATED BY '\t';";
	if (db_query($import_cat))
		echo ("imported categories successfully\n");
	else
		die ("There was an error importing categories\n");
}

function create_pro_tb($db_name)
{
	$product_create = "CREATE TABLE  IF NOT EXISTS $db_name.products (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		img VARCHAR(128) NOT NULL,
		price DECIMAL NOT NULL
		);";
	
	if (db_query($product_create))
		echo ("products table created successfully\n");
		else
	die ("There was an error creating products table\n");

	$import_products = "LOAD DATA LOCAL INFILE 'default_data/products.txt' 
						INTO TABLE $db_name.products COLUMNS TERMINATED BY '\t';";

	if (db_query($import_products))
		echo ("imported products successfully\n");
	else
		die ("There was an error importing products\n");
}

function create_pro_cat_tb($db_name)
{
	$prod_cat_create = "CREATE TABLE  IF NOT EXISTS $db_name.pro_cat (
		product_id INT(6),
		cat_id INT(6)
		);";
		
	if (db_query($prod_cat_create))
		echo ("products_cat table created successfully\n");
		else
	die ("There was an error creating products_cat table\n");

	$import_pro_cat = "LOAD DATA LOCAL INFILE 'default_data/pro_cat.txt' 
	INTO TABLE $db_name.pro_cat COLUMNS TERMINATED BY '\t';";

	if (db_query($import_pro_cat))
	echo ("imported products successfully\n");
	else
		die ("There was an error importing products\n");
}
?>
