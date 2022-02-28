<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="social popularity checker, social counter, social checker">
<title>Social Popularity Checker</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<div>

<h2>Social Popularity Checker</h2>
Check popularity of your website on different social networks like Facebook, Pinterest, Twitter, StumbleUpon<br />
<br />

<form method="get" action="" role="form">
<input type="text" name="url" id="url" style="height:35px;" value="http://" alt="Enter URL with http://" title="Enter URL with http://" placeholder="Enter URL with http://">
<input type="submit" name="submit" class="button" value="Check">
</form>

<br>

<?php
require("shareCount.php");
if(isset($_GET['submit']))
{
$obj=new shareCount($_GET['url']);  

echo "Facebook: ".$obj->get_fb() . " total count (likes+shares+comments)<br />";
echo "Pinterest: ".$obj->get_pinterest() . " pins<br />";
echo "Twitter: ".$obj->get_tweets() . " tweets<br />";
echo "StumbleUpon: ".$obj->get_stumble() . " views<br />"; 
// echo "Linkedin: ".$obj->get_linkedin() . " shares<br />"; 
// echo "Google+: ".$obj->get_plusones() . " plusones<br />"; 
// echo "Delicious: ".$obj->get_delicious() . " bookmarks<br />";
}
?>

</div>

<?php
include 'footer.php';
?>
