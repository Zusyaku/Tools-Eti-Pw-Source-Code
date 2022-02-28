<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="mac address vendor, mac vendor lookup, mac address vendor lookup, mac extractor, get mac address vendor, mac vendor extractor">
<title>MAC Address Vendor Lookup</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>MAC Address Vendor Lookup</h2>
Get vendor name of your network device using it's mac address.<br>

Send your MAC address in any shape or form and our server should be able to handle it.<br>
Generally, MAC addresses are in the following shape or form:<br>
00-11-22-33-44-55<br>
00:11:22:33:44:55<br>
but you can put it here in this way too:<br>
00.11.22.33.44.55<br>
001122334455<br>
0011.2233.4455<br>
<br>

<form method="GET" action="">
<fieldset>
<legend>MA:CV:en:do:rs</legend>
<i>Enter a MAC Address: </i><input name="mac" id="mac" title="Put here a MAC Address" placeholder="00:00:00:00:00:00" />
   <input type="submit" class="button" value="Show me" title="Go!" />
</fieldset>
</form>  

<?php

$mac_address = htmlentities($_GET['mac'], ENT_QUOTES, 'UTF-8');

  //$url = "http://api.macvendors.com/" . urlencode($mac_address);
  $url = "https://api.macvendors.com/" . urlencode($mac_address);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $response = curl_exec($ch);
  if($response) {
    echo "<br>Vendor: $response";
  } else {
    echo "<br>Not Found";
  }
?>

<?php
include 'footer.php';
?>
