<?php

include 'dbh.php';

/*$sql="DROP DATABASE website";
if(mysqli_query($conn,$sql)){
  echo "Database deleted"."<br>";
}
else{
  echo "Database not deleted"."<br>";
}*/


$sql="CREATE DATABASE website";

if(mysqli_query($conn,$sql)){
  echo "Database created"."<br>";
}
else
{
  echo "Database not created"."<br>";
}

mysqli_select_db($conn,"website");

$create="CREATE TABLE Person1 (
first VARCHAR(20),
last VARCHAR(20),
email VARCHAR(30),
uid VARCHAR(20) NOT NULL,
pwd VARCHAR(20) NOT NULL,
PRIMARY KEY(uid)
)";

if(mysqli_query($conn, $create)){
  echo "Table created"."<br>";
}
else{
  echo "Table not created"."<br>".mysqli_connect_error()."<br>";
}

?>