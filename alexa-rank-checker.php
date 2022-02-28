<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta NAME="description" content="Alexa Rank Checker">
<meta name="keywords" content="alexa rank, alexa rank checker, social popularity checker, social checker">
<title>Alexa Rank Checker</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<div>

<h2>Alexa Rank Checker</h2>
<br />

<form method="get" action="">
Put URL<br />
<input type="text" name="url" id="url" style="height:40px;" placeholder="Enter URL">
<input type="submit" class="button" value="Check">
</form>
<br>
<?php
$url = htmlentities($_GET['url']);
$xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);
$rank=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;
$web=(string)$xml->SD[0]->attributes()->HOST;
echo $web." has Alexa Rank ".$rank;
?>

</div>

<?php
include 'footer.php';
?>
