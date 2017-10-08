<?php
function db_query($query)
{
    $host ='127.0.0.1';
    $user ='root';
    $pass ='g5nrqbcm';
    $con = mysqli_connect($host,$user,$pass);
    if (!$con)
        die("Database not created successfully\n");
    $result = mysqli_query($con, $query);

    return ($result);
}
?>
