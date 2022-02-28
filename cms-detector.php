<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="What CMS is? Find out what CMS they are using! CMS detector!">
<meta name="keywords" content="cms detector, online cms detector, what cms is, what cms is this site running">
<title>Online CMS detector</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Simple CMS detector</h2>

<form action="" method="POST">
    <input type="text" name="url" size="40" value="http://" placeholder="http://">
    <input type="submit" name="submit" class="button" value="Go!">
</form>

<?php
if(isset($_POST['submit']))
{
    $tags = get_meta_tags($_POST['url']);
    if($tags['generator'])
         echo "CMS is: " . $tags['generator'] . "<br>";
    else
         echo "No CMS info available.<br>";
}
?>
<br />
<small>(This is very simple detector and da site must have got meta tag 'generator' in da src)</small><br />
<a href="http://whatcms.ga" target="_blank">Q&A Website about What CMS is?</a>

<?php
include 'footer.php';
?>
