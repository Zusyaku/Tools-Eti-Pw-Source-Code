<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="2 DAYS">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="www.eti.pw" />
<meta NAME="description" content="CSS Validator Tool">
<META name="keywords" content="online css validator, css validator, css validate">
<title>CSS Validator Tool</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>CSS Validator</h2>

	<div class="entry">


<script language="javascript">
function urlvalidate()
{
	document.getElementById("filevalidateform").style.display ='none';
	document.getElementById("urlvalidateform").style.display ='';
	document.getElementById("lifilevalidate").style.background='#c0c0c0';
	document.getElementById("liurlvalidate").style.background='white';

}

function filevalidate()
{
	document.getElementById("filevalidateform").style.display ='';
	document.getElementById("urlvalidateform").style.display ='none';
	document.getElementById("liurlvalidate").style.background='#c0c0c0';
	document.getElementById("lifilevalidate").style.background='white';

}


</script>
<div id="tabmenu">
Choose: 
		<a href="#" onClick="urlvalidate()"> By URL</a> |
		<a href="#" onClick="filevalidate()"> By File Upload</a>
	
</div>
<br/>
<br/>
<div id="urlvalidateform" style="text-align:left;">
	<form action="http://jigsaw.w3.org/css-validator/validator" method="get">

By URL:<BR><br>
					<div class="alt1" style="width:32%">Enter URL</div>
					<div class="alt1" style="width:63%"><input type="text" name="uri" value="http://" /></div>

					<div class="alt1" style="width:32%">Warnings</div>
					<div class="alt1" style="width:63%">
						<select name="warning">
						<option value="2">All</option>
						<option selected="selected" value="1">Normal report</option>
						<option value="0">Most important</option>
						<option value="no">No warnings</option>
						</select>
					</div>

					<div class="alt1" style="width:32%">CSS Profile</div>
					<div class="alt1" style="width:63%">
						<select name="profile">
						<option value="none">No special profile</option>
						<option value="css1">CSS version 1</option>
						<option selected="selected" value="css2">CSS version 2</option>
						<option value="css3">CSS version 3</option>
						<option value="svg">SVG</option>
						<option value="svgbasic">SVG basic</option>
						<option value="svgtiny">SVG tiny</option>
						<option value="mobile">mobile</option>
						<option value="atsc-tv">ATSC TV profile</option>
						<option value="tv">TV profile</option>
						</select>
					</div>

						<div class="alt1" style="width:32%">Medium</div>
						<div class="alt1" style="width:63%">
						<select name="usermedium">
						<option selected="selected" value="all">all</option>
						<option value="aural">aural</option>
						<option value="braille">braille</option>
						<option value="embossed">embossed</option>
						<option value="handheld">handheld</option>
						<option value="print">print</option>
						<option value="projection">projection</option>
						<option value="screen">screen</option>
						<option value="tty">tty</option>
						<option value="tv">tv</option>
						<option value="presentation">presentation</option>
						</select></div>

						<div class="alt1" style="width:97%; height:40px"><br/>
						<input type="submit" class="button" value="Validate" />
						<button type="reset" name="Reset"/>Reset</button></div>

					<div style="clear:both"></div>


	</form>
</div>

<div id="filevalidateform" style="display:none; text-align:left">
	<form action="http://jigsaw.w3.org/css-validator/validator" method="post" enctype="multipart/form-data">

By File Upload:<br><br />
						<div class="alt1" style="width:32%">Select File</div>
						<div class="alt1" style="width:63%">
							<input type="file" name="file" value="" />
						</div>

						<div class="alt1" style="width:32%">Warnings</div>
						<div class="alt1" style="width:63%">
						<select name="warning">
						<option value="2">All</option>
						<option selected="selected" value="1">Normal report</option>
						<option value="0">Most important</option>
						<option value="no">No warnings</option>
						</select>
						</div>

						<div class="alt1" style="width:32%">					

                                                <input type="checkbox" name="error" value="no" /> Hide errors</div>

						<div class="alt1" style="width:32%">CSS Profile</div>
						<div class="alt1" style="width:63%">
						<select name="profile">
						<option value="none">No special profile</option>
						<option value="css1">CSS version 1</option>
						<option selected="selected" value="css2">CSS version 2
						</option>
						<option value="mobile">mobile</option>
						</select>
						</div>

						<div class="alt1" style="width:32%">Medium</div>
						<div class="alt1" style="width:63%">
						<select name="usermedium">
						<option selected="selected" value="all">all</option>
						<option value="aural">aural</option>
						<option value="braille">braille</option>
						<option value="embossed">embossed</option>
						<option value="handheld">handheld</option>
						<option value="print">print</option>
						<option value="projection">projection</option>
						<option value="screen">screen</option>
						<option value="tty">tty</option>
						<option value="tv">tv</option>
						<option value="presentation">presentation</option>
						</select>
						</div>

						<div class="alt1" style="width:97%; height:40px"><br/>
							<input type="submit" class="button" value="Validate" />
							<button type="reset" name="Reset" />Reset</button>
						</div>
						<div style="clear:both"></div>

	</form>
</div>
<br><br><br>
<?php
include 'footer.php';
?>
