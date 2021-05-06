<?php

$servername = "remotemysql.com";
$username = "CqS9yEFwVk";
$password = "jhSPTo8CrX";
$db = "CqS9yEFwVk";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
