<?php
function create_user($data)
{
    $db_name = "cms_info_db";
    $query = "INSERT INTO $db_name.users (`username`, `passwrd`, `email`) 
                VALUES ('$data[0]', '$data[1]', '$data[2]');";
    if (db_query($query))
        echo "user created";
    else
        echo ("could not create account for the user\n");
}
function userexist($user)
{
    $db_name = "cms_info_db";
    $query = "SELECT count(*) FROM $db_name.users WHERE username = '$user';";    
    $ret = db_query($query);
    $query_data = mysqli_fetch_array($ret, MYSQLI_NUM);
    if ($query_data[0] > 0)
        return 1;
    return 0;
}
?>