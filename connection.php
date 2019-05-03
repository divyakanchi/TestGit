<?php

$host = "localhost";
$user = "div";
$pass = "7O7G3hz81GmEszu7";
$dbname="USERS";


// Create connection
$con= mysqli_connect($host,$user,$pass,$dbname);


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
 
?>