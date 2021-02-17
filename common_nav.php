<?php
	session_start();
	if(isset($_SESSION["uid1"])){
		if(time() > $_SESSION["uid1"]){
			session_destroy();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Islamic Resourses</title>
	<link rel="stylesheet" type="text/css" href="css/home2.css">
	<link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="body">
	<nav>
		<ul class="showing">
			<li><a href="home.php">Home</a></li>
			<li><a href="books.php">Books</a></li>
			<li><a href="tilawat.php">Tilawat</a></li>
			<li><a href="images.php">Images</a></li>
			<li><a href="links.php">Important Links</a></li>
			<?php if(!isset($_COOKIE["login"]) && !(isset($_SESSION["uid"]))){ ?>
			<li><a href="login.php">User Login</a>
				<ul>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Sign Up</a></li>
					<?php } else{ ?>
					<li><a id="lin" style="font-size:30px;font-family:'Italianno',cursive;;cursor:default;"> <?php if(isset($_COOKIE["login"])) {
						echo "Welcome ".$_COOKIE["login"];
						session_unset();
						session_destroy();}
						else
							echo "Welcome ".$_SESSION["uid"]; ?>
						 </a></li>
					<li><a href="logout.php">Log Out</a></li>
					<?php } ?>
				</ul>
				</li>

		</ul>
		
		<div class="handle">Menu</div>
	</nav>


<script type="text/javascript">
		$('.handle').on('click',function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
</div>



</body>
</html>
