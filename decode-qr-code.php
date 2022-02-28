<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Online QR Code Decoder">
<meta name="keywords" content="decode qr code, qr code decoder, qr decoder, online qr code decoder">
<title>Decode QR Code</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Decode QR Code</h2>

<?php
$content ='
<script type="text/javascript" src="js/llqrcode.js"></script>
<script type="text/javascript" src="js/webqr.js"></script>
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script>
$(document).ready(function() {
load();
setimg();            
});
</script>

<div id="mainbody"></div>          
<div id="outdiv"></div>          
<div id="result"></div>

<canvas id="qr-canvas" width="100" height="100"></canvas>';

$pre = 1;

if(!isset($pre)) {
 print_r($content);

      }else{ 
 print_r($content);
      } 
?>

<?php
include 'footer.php';
?>
