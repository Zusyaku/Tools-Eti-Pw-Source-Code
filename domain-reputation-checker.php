<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domain Reputation Check</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Domain Reputation check">
    <meta name="keywords" content="domain reputation check, domain reputation checker, domain reputation, domain reputation, check domain reputation"/>
    <meta name="author" content="www.eti.pw">
    <meta name="robots" content="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>Domain Reputation Checker</h2>

<?php

// API Access Key -> threatintelligenceplatform.com and whoisxmlapi.com
$access_key = 'your-api-key-here';  // threatintelligenceplatform.com api key
$access_key1 = 'your-api-key-here'; // whoisxmlapi.com api key

$domain = htmlentities($_POST["domain"]);

if(isset($_POST['domain']))
{
print ('<form method="post" action="">
<input type="text" name="domain" id="domain" placeholder="domain" title="Enter domain here" />
<img src="captcha.php" title="ETI Simple Captcha Code" width="50" height="18" />
<input class="input2" name="captcha" type="text" size="4" maxlength="4" placeholder="digits" title="Put the digits here" />
<input type="submit" class="button" value="Check" />
</form>');

session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "";
//Do you stuff
}
else
{
die("<br>Wrong captcha code entered! Please, enter the code. It's simple :) only 4 digits :)");
}

$location = json_decode(file_get_contents('https://api.threatintelligenceplatform.com/v1/reputation?domainName='.$domain.'&mode=fast&apiKey='.$access_key.''));
$location1 = json_decode(file_get_contents('https://domain-reputation.whoisxmlapi.com/api/v1?apiKey='.$access_key1.'&domainName='.$domain.''));

echo "<br><b>1. Reputation Score: </b>" .$location->reputationScore;
echo "<br><b>2. Reputation Score: </b>" .$location1->reputationScore;

}

else {

echo 'Enter Domain:<br><br>
<form method="post" action="">
<input type="text" name="domain" id="domain" placeholder="domain" title="Enter domain here" />
<img src="captcha.php" title="ETI Simple Captcha Code" width="50" height="18" />
<input class="input2" name="captcha" type="text" size="4" maxlength="4" placeholder="digits" title="Put the digits here" />
<input type="submit" class="button" value="Check" />
</form>';
}
?>

<?php
include 'footer.php';
?>
