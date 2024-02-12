<?php
$db_host = "localhost";
$db_name = "merga";
$db_pass = ""; // Corrected variable name from $dn_pass to $db_pass
$db_user = "root";

// Establishing connection to the database
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Checking for connection errors
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>
