<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="website screenshot, online screenshot, web screenshot, web snapshot, website snapshot, website to image, webpage to image, url2jpg, web capture, free web capture, free web snapshot, free web screenshot">
<meta name="description" content="Web-capture: URL2JPG - Online webpage screenshot tool that take a full page snapshot of a website">
<title>Web SnapShot</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Website Screenshot, Website Snapshot</h2>

Web-capture | URL2JPG<br />
<br>
<form method="POST" action="">
<i>Enter URL: </i>
   <input type="text" name="url" id="url" style="width:300px;height:40px;" value="http://" title="Enter URL" placeholder="Enter URL" />
   <input type="submit" name="submit" class="button" value="CAPTURE!" title="GO!" />
</form>  

Website Screenshots will appear below shortly, please wait.<br />

<?php
$url     = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8'); // without 'htmlentities' it's not safe!
// i use api from: shrinktheweb.com and pagepeeker.com | you must create free account in shrinktheweb.com and to get key
// my 'access key id' will not work for you! ... it's so simple code and no need more explanation:)
echo "<br><font color='red'>Domain: </font>{$url}<br/>";
echo "<br />";
echo "<img src='http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=93e93e229a837b8&stwsize=xlg&stwurl={$url}' title='320x240 pixels'/>";
echo "<img src='http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=93e93e229a837b8&stwsize=lg&stwurl={$url}' title='200x150 pixels'/>";
echo "<img src='http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=93e93e229a837b8&stwsize=sm&stwurl={$url}' title='120x90 pixels'/>";
echo "<img src='http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=93e93e229a837b8&stwsize=vsm&stwurl={$url}' title='100x75 pixels'/>";
echo "<img src='http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=93e93e229a837b8&stwsize=tny&stwurl={$url}' title='90x68 pixels'/><br />";

echo "<iframe src='http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$url}' title='480x360 pixels' width='320' height='250' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe>";
?>

<br />
<small>Note: If you see 'pagepeeker loading process' "peeking..." just <a href="javascript:history.go(0)">Click Here to Check</a></small><br />

<p>Well, just save pictures now: Save Image... Save Image As... with right click of the mouse:)</p> 
</center>

<?php
include 'footer.php';
?>
