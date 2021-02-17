<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "123";
$dbName = "website";

$conn =  mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName)  or die("unable to connect");
echo "Database created"

?>