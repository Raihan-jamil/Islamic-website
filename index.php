<?php
	//15 2 2015
	if(!isset($_COOKIE["login"])){
		//session_start();
		header("location:home.php");
	}
	//else
		header("location:home.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Cookie Set</p>
</body>
</html>