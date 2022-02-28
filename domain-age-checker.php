<!DOCTYPE html>
<html lang="en">
<head>
<title>Domain Age Tool - Check the Age of Your Domain Name</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="How old is my domain name">
<meta name="keywords" content="domain age, domain age checker, check domain age, провери старостта на домейн, проверка домейн, колко стар е моят домейн, възраст на домейн, age of domain, domain age check, domain age tool, how old is my domain, how old is my domain name, Check the Age of a Website">
<meta name="author" content="ETI's Free Stuff - www.eti.pw">
<meta name="robots" content="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Domain Age Checker</h2>

This is a simple fast an free tool to get the age in days and years of any type of website/domain (.de .com .net .org .biz .online ... )<br>

<br>

<?php
// API from https://ipty.de/domage/
$domain = htmlentities($_GET["domain"]);

$location = json_decode(file_get_contents("https://ipty.de/domage/api.php?domain={$domain}&mode=full"));

if(isset($_GET['domain']))
{
echo '<small>(without http://)</small><br><form method="get" action="">
<input type="text" name="domain" id="domain" placeholder="Domain name here" title="Enter Domain here" />
<input type="submit" class="button" value="Check" />
</form>';
$calling_code = $location->result->creation->years; // :)
echo "<br>Years: " .$calling_code;
echo "<br>Days: " .$location->result->creation->days;
echo "<br>Fulldays: " .$location->result->creation->fulldays;
echo "<br>Creation Date: " .$location->result->creation->date;
}

else {

print ('<small>(without http://)</small><br><form method="get" action="">
<input type="text" name="domain" id="domain" placeholder="Domain name only" title="Enter Domain here" />
<input type="submit" class="button" value="Check" />
</form>');
echo "<br>Here's what you will find out: Years, Days, Fulldays, Creation Date<br><br>Info: One of the criteria used by search engines to rank a website is age of a domain name. Older websites (and domain names) tend to be more stable than newer websites, and offer more credibility to search engines. This free domain age tool will help you find the age of a domain name and the original registered date. If you wish to buy a premium domain name, knowing the age of a domain will help you understand history of the domain name.";
}
?>

<?php
include 'footer.php';
?>
