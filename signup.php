<?php
include 'common_nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/loginpage.css">
</head>
<body style="background-image: url(images/4.jpg);">

	<form action="signup_server.php" method="POST">
		<form action="login.php" method="POST">
				
	</form>
</form>

<style class="style1">
</style>
	<div class="loginbox" id="signupbox">
		<img src="images/5.png" class="avatar">
			<h1>Sign Up</h1>

			<form action="signup_server.php" method="POST">
				<p>First Name</p>
				<input type="text" name="first" placeholder="Enter First Name">
				<p>Last Name</p>
				<input type="text" name="last" placeholder="Enter Last Name">
				<p>E-mail</p>
				<input type="text" name="email" placeholder="Enter E-mail">
				<p>User Name</p>
				<input type="text" name="uid" placeholder="Enter User Name">
				<p>Password</p>
				<input type="password" name="pwd" placeholder="Enter Password">
				<input type="submit" name="submit" value="Sign Up">
			</form>

	</div>
</body>
</html>