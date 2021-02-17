<?php
	include 'common_nav.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Islamic Resourses</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<div id="myclockdisplay" class="clock">

<script type="text/javascript">
	function showTime(){
		var date = new Date();
		var h = date.getHours();
		var m = date.getMinutes();
		var s = date.getSeconds();
		var session="AM";
		if(h == 0){
			h=12;
		}
		if(h>12){
			h=h-12;
			session="PM"
		}
		h=(h<10)?"0"+h:h;
		m=(m<10)?"0"+m:m;
		s=(s<10)?"0"+s:s;
		var time = h + ":" + m + ":" + s + " "+session;
		document.getElementById("myclockdisplay").innerText = time;
		document.getElementById("myclockdisplay").textContent = time;
		setTimeout(showTime,1000);
	}
	showTime();
</script>
</div>
<footer>
		<ul class="foot">
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a href="aboutus.php">About Us</a></li>
		</ul>
	</footer>
</div>

</html>
