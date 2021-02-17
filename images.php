<?php
include 'common_nav.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/testcss.css">
	<link rel="stylesheet" type="text/css" href="javascript:unhide('img1');">
	<title>Images</title>
</head>
<body style="background-image: url(images/6.jpg);">
<div>
<a href="javascript:unhide('m0');"><img src="images/m0.jpg" class="imageclass"></a>
<div id="m0" class="hidden">
	<p class="para">Holy Makkah – Saudi Arabia</p>
	<p class="paradown"><a download="Holy Makkah – Saudi Arabia" href="images/m0.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m1');"><img src="images/m1.jpg" class="imageclass"></a>
<div id="m1" class="hidden">
	<p class="para">Masjid al-Haram (The Holy Mosque) – Saudi Arabia</p>
	<p class="paradown"><a download="Masjid al-Haram (The Holy Mosque) – Saudi Arabia" href="images/m1.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m2');"><img src="images/m2.jpg" class="imageclass"></a>
<div id="m2" class="hidden">
	<p class="para">Masjid Nabawi – Saudi Arabia</p>
	<p class="paradown"><a download="Masjid Nabawi – Saudi Arabia" href="images/m2.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m3');"><img src="images/m3.jpg" class="imageclass"></a>
<div id="m3" class="hidden">
	<p class="para">Mosque in Brunei</p>
	<p class="paradown"><a download="Mosque in Brunei" href="images/m3.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m4');"><img src="images/m4.jpg" class="imageclass"></a>
<div id="m4" class="hidden">
	<p class="para">Putrajaya Mosque on Water – Malaysia</p>
	<p class="paradown"><a download="Putrajaya Mosque on Water – Malaysia" href="images/m4.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m5');"><img src="images/m5.jpg" class="imageclass"></a>
<div id="m5" class="hidden">
	<p class="para">The Umayyad Mosque – Damascus</p>
	<p class="paradown"><a download="The Umayyad Mosque – Damascus" href="images/m5.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m6');"><img src="images/m6.jpg" class="imageclass"></a>
<div id="m6" class="hidden">
	<p class="para">Faisal Mosque – Pakistan</p>
	<p class="paradown"><a download="Faisal Mosque – Pakistan" href="images/m6.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m7');"><img src="images/m7.jpg" class="imageclass"></a>
<div id="m7" class="hidden">
	<p class="para">Turkey – Brand New Day over The Blue Mosque (Sultan Ahmet Camii) in Istanbul</p>
	<p class="paradown"><a download="Turkey – Brand New Day over The Blue Mosque (Sultan Ahmet Camii) in Istanbul" href="images/m7.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m8');"><img src="images/m8.jpg" class="imageclass"></a>
<div id="m8" class="hidden">
	<p class="para">Crystal Mosque, Malaysia</p>
	<p class="paradown"><a download="Crystal Mosque, Malaysia" href="images/m8.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m9');"><img src="images/m9.jpg" class="imageclass"></a>
<div id="m9" class="hidden">
	<p class="para">Bahrain Grand Mosque</p>
	<p class="paradown"><a download="Bahrain Grand Mosque" href="images/m9.jpg">Download</a></p>
</div>
<p></p>
<a href="javascript:unhide('m10');"><img src="images/m10.jpg" class="imageclass"></a>
<div id="m10" class="hidden">
	<p class="para">Alnour Mosque Sharjah</p>
	<p class="paradown"><a download="Alnour Mosque Sharjah" href="images/m10.jpg">Download</a></p>
</div>
<p></p>
</div>
</body>


<script type="text/javascript">
	function unhide(divID){
		var item = document.getElementById(divID);
		if (item){
			item.className=(item.className=='hidden')?'unhidden':'hidden';
		}
	}
</script>
</html>