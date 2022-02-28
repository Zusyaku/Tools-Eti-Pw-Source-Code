<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="../avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Find Instagram User ID>
<meta name="keywords" content="instagram id, instagram id grabber, find instagram user id, insta id finder, instagram id finder, id instagram, id instagram finder, find instagram id">
<title>Find Instagram User ID - Fastest way to get Instagram account numeric ID by username.</title>
<link type="text/css" rel="stylesheet" href="../css/main.css" />
</head>
<body>

<a href="../">Free Online Tools</a>

<h2>Find Instagram User ID</h2>

Enter Instagram Username<br>

<br>
<form method="get" action="">
<input type="text" name="username" id="username" style="height:40px;" placeholder="Instagram Username">
<input type="submit" class="button" value="Proceed">
</form>
<br>

<?php
$name = htmlentities($_GET['username'], ENT_QUOTES, 'UTF-8');
// $location = json_decode(file_get_contents('https://www.instagram.com/web/search/topsearch/?query='.$name));
$location = json_decode(file_get_contents('https://www.instagram.com/'.$name.'/?__a=1'));
echo $location->logging_page_id;

// i hate such websites like fb, instagram yt and others, and that's why the src is too simple :) lazy to write more... this make me nervous to code stuff for stupid sites like these :) KISS - Keep It Simple, Stupid! :)
?>

<?php
include './footer.php';
?>
