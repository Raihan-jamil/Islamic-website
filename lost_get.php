<?php
include 'createdb.php';

$email=$_POST['email'];
$uid = $_POST['uid'];


mysqli_select_db($conn,"mydataBASE");
$sql = "SELECT * FROM Person WHERE uid='$uid' AND email='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$row_num = mysqli_num_rows($result);
if($row_num){

echo 'Your password id '. $row['pwd'];
}
else
	echo "No date found with this E-mail and User Name";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get Password</title>
</head>
<body style="background-image: url(images/9.jpg);">
<a href="home.php" style="margin: 100px;">Home</a>
</body>
</html>