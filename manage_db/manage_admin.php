<?php
function create_admins_tb()
{
    $db_name = 'cms_info_db';
    $admin_create = "CREATE TABLE  IF NOT EXISTS $db_name.admins (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(30) NOT NULL,    
		passwrd VARCHAR(128) NOT NULL,
		email VARCHAR(50)
		)";
	if (db_query($admin_create))
		echo ("admins table created successfully\n");
	else
        die ("There was an error creating admins table\n");
    
     $import_admin = "LOAD DATA LOCAL INFILE 'default_data/admins.txt' 
        INTO TABLE $db_name.admins COLUMNS TERMINATED BY '\t';";
    if (db_query($import_admin))
        echo ("imported categories successfully\n");
    else
        die ("There was an error importing categories\n");
}

function userexist($user)
{
    $db_name = "cms_info_db";
    $query = "SELECT count(*) FROM $db_name.admin WHERE username = '$user';";    
    $ret = db_query($query);
    $query_data = mysqli_fetch_array($ret, MYSQLI_NUM);
    if ($query_data[0] > 0)
        return 1;
    return 0;

}
?>