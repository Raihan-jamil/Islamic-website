<?php

include 'createdb.php';

$first = $_POST['first'];
$last = $_POST['last'];
$email =$_POST['email'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

mysqli_select_db($conn,"website");

$sql = "SELECT * FROM Person WHERE uid='$uid'";
$result = mysqli_query($conn,$sql);
$row_num = mysqli_num_rows($result);

if($row_num==0){
	$sql = "INSERT INTO Person (first,last,email,uid,pwd) VALUES ('$first','$last','$email','$uid','$pwd')";
	$result = $conn->query($sql);
	header("Location: login.php");
}

elseif ($row_num>0) {
	echo "This uid is taken";
	header("Location:invalid.php");
}





?>

