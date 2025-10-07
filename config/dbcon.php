<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "phpecom";


//CreatingDatabase Connection
$con = mysqli_connect($host, $username, $password, $database);

//Check Database Connection
if(!$con)
{
    die("Connection Failed: ". mysqli_connect_error());
}


?>