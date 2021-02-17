<?php
	include 'common_nav.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/loginpage.css">
</head>
<body style="background-image: url(images/4.jpg);">
	<style class="style1"></style>
	<div class="loginbox">
		<img src="images/5.png" class="avatar">
			<h1>Login Here</h1>

			<form action="login_server.php" method="POST">
				<p>User Name</p>
				<input type="text" name="uid" placeholder="Enter User Name">
				<p>Password</p>
				<input type="password" name="pwd" placeholder="Enter Password">
				<input type="submit" name="submit" value="Login">
				<p>Keep Me Logged In</p>
				<input type="checkbox" value=1 name="remember">
				
				<a href="lost.php">Lost Password?</a><br>
				<a href="signup.php">Don't Have An Account?</a>
			</form>
	</div>
</body>
</html>