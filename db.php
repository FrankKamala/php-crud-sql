<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "rsvps";

$connection = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

// Check connection
if($connection === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>