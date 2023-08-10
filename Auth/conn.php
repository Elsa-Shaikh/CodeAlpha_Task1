<?php
session_start();

$serverName = "localhost";
$root = "root";
$password = "";
$DB = "crud";

$conn = mysqli_connect($serverName,$root,$password,$DB);
if(!$conn){
    die("Connection Failed!");
}


?>