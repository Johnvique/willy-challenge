<?php
$host = "localhost";
$database = "housinn1_food";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn){
    die("Connection failed").mysqli_connect_error;
}

?>