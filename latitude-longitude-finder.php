<!DOCTYPE html>
<html lang="en">
<head>
<title>Latitude Longitude finder</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Map Latitude Longitude finder. Online tool to find the latitude and longitude of a location chosen on a map">
<meta name="keywords" content="latitude longitude finder, latitude longitude lookup, show latitude longitude on map, find latitude and longitude"/>
<meta name="author" content="www.eti.pw">
<meta name="robots" content="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>Latitude Longitude finder</h2>

<?php

$latitude = htmlentities($_POST['latitude'], ENT_QUOTES, 'UTF-8');
$longitude = htmlentities($_POST['longitude'], ENT_QUOTES, 'UTF-8');

if($_POST){

print ('<b>Map Latitude Longitude:</b>
<form action="" method="post">
<br>Enter a latitude/longitude:
<input type="text" name="latitude" id="latitude" placeholder="latitude" /><input type="text" name="longitude" id="longitude" placeholder="longitude" />
<input type="submit" class="button" value="Go to this Location" /><br />
<small>(You can put any latitude/longitude to see the location on the map)</small><br>
<small>e.g. 27.3717 -81.4306</small>
</form>');

// echo "<iframe src='https://google-developers.appspot.com/maps/documentation/utils/geocoder/#q%3D{$latitude}%2520{$longitude}' width='100%' height='900' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe>";
// echo "<iframe src='https://developers-dot-devsite-v2-prod.appspot.com/maps/documentation/utils/geocoder?hl=pt-br#q%3D{$latitude}%2520{$longitude}' width='100%' height='900' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe>";
echo "<iframe src='https://developers-dot-devsite-v2-prod.appspot.com/maps/documentation/utils/geocoder/#q%3D{$latitude}%2520{$longitude}' width='100%' height='900' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe>";

}

else {

print ('<b>Map Latitude Longitude:</b>
<form action="" method="post">
<br>Enter a latitude/longitude:
<input type="text" name="latitude" id="latitude" placeholder="latitude" /><input type="text" name="longitude" id="longitude" placeholder="longitude" />
<input type="submit" class="button" value="Go to this Location" /><br />
<small>(You can put any latitude/longitude to see the location on the map)</small><br>
<small>e.g. 27.3717 -81.4306</small>
</form>');

}
				
?>

<?php
include 'footer.php';
?>
