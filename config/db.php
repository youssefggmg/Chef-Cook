<?php
$hostName="localhost";
$userName = "root";
$password = "";
$DBname = "chef_cook";
$connection =  new mysqli($hostName,$userName,$password,$DBname);
if (mysqli_connect_error()) {
    die("connection error". $connection->connect_error);
}
?>