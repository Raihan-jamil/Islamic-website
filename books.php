<?php
include 'common_nav.php';
?>

<body style="background-image: url(images/17.jpg);">
	<?php if(!isset($_COOKIE["login"]) && !(isset($_SESSION["uid"]))){ ?>
	<h1 style="text-align: center; color: gold;font-style: inherit;">We Guess You Are Not Logged In <br> Login To Download</h1>
	<?php } ?>
</body>

<table align="center">
	<tr>
		<td>
			<?php if(isset($_COOKIE["login"])|| isset($_SESSION["uid"])){ ?>
			<a download="books/Musnad Ahmed Part 1.pdf" href="books/MH 1.pdf">
			<img src="images/MH 1.jpg" style="height: 400px; width: 300px;"></a>
			<?php }else{ ?>
			<img src="images/MH 1.jpg" style="height: 400px; width: 300px;">
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td>
			<?php if(isset($_COOKIE["login"])|| isset($_SESSION["uid"])){ ?>
			<a download="books/Musnad Ahmed Part 2.pdf" href="books/MH 2.pdf">
			<img src="images/MH 2.jpg" style="height: 400px; width: 300px;"></a>
			<?php }else{ ?>
			<img src="images/MH 2.jpg" style="height: 400px; width: 300px;">
			<?php } ?>
		</td>
	</tr>
</table>