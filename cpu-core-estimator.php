<!DOCTYPE html>
<html lang="en">
<head>
<title>CPU core estimator</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="cpu core estimator, online CPU core estimator, online tools, free online tools, online tools with source code, web tools, web tools source code, webmaster tools, online tools for android, tools android app, online tools android, android app online tools, how many CPU cores your device have">
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Central processing unit (CPU) core estimator</h2>
How many CPU cores your device have?<br /><br />

<div>This device has <span id="cpu-cores"></span> logical Cores</div>
<script>document.querySelector("#cpu-cores").innerHTML = navigator.hardwareConcurrency;</script>

<br /><br /><br /><br />ETI's Free Stuff<br /><br />

<?php
include 'footer.php';
?>
