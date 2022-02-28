<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="HTML to JavaScript Converter - Text to JS">
<meta name="keywords" content="html, html2js, html2javascript, text to js, text2javascript, html to javascript, html2js convertor">
<title>HTML2JavaScript Converter</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>HTML,Text to JavaScript</h2>

<p><strong>HTML2JS Converter</strong></p>

<?php

function printForm()
{
$action = $_SERVER["PHP_SELF"];

print <<<ENDHTM

<p>Enter some html / text to encode...</p>
<form method="post" action="$action">
<p><textarea name="encoder" rows="15" cols="100"></textarea></p>
<p><input type="submit" class="button" value="Encode>>"/></p>
</form>

ENDHTM;

}

function printArea()
{
global $encoded,$js_code;

print <<<ENDHTM
<form method="post" action="javascript:void()">
<p><textarea name="encoder" rows="15" cols="100">$js_code</textarea></p>
<p>Now u must <b>select</b> and <b>copy</b><br />your encoded text!</p>
use these hot keys: <br />
Ctrl+A  - <b>Select</b> all <br />
Ctrl+C  - <b>Copy</b> selected <br />
Ctrl+V  - <b>Paste</b> <br />
<a href="./html2javascript.php"> <-Convert other|| </a><br />
</form>

ENDHTM;

}

function encode($txt)
{
$hex = "";

	for($i=0;$i<strlen($txt);$i++)
	{ 
	$hex .= "%" . strtoupper(bin2hex($txt{$i}));
	}

return $hex;
}


if($_POST['encoder'])
{
$encoded = encode(stripslashes($_POST['encoder']));
$js_code = "<script type=\"text/javascript\">\n";
$js_code .= "document.write(unescape('".$encoded."'));\n";
$js_code .= "</script>";
printArea();
}
else
{
printForm();
}
?>

<?php
include 'footer.php';
?>
