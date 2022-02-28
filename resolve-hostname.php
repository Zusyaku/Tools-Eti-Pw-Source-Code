<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Convert hostname to IP">
<meta name="keywords" content="resolve hostname, convert hostname to ip, web tools">
<title>Resolve Hostname</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Convert Hostname to IP Address</h2>

<?php 
function printForm()
{
global $www;

$action = $_SERVER["PHP_SELF"];

print <<<ENDHTM
<form method="post" action="$action">
<p>http:// <input type="text" name="www" value="$www"/> <input type="submit" class="button" value="Submit"/></p>
</form>

ENDHTM;
}

if($_REQUEST['www'])
{
$domain = strtolower($_REQUEST['www']);
$xArray = @parse_url($domain);

	if(!$xArray["scheme"])
	{
	$domain = "http://" . $domain;
	$xArray = @parse_url($domain);
	}

	$xProtocol = $xArray["scheme"];
	$xHost   = $xArray["host"];
	$xPort   = $xArray["port"];
	$xUser   = $xArray["user"];
	$xPass   = $xArray["pass"];
	$xPath   = $xArray["path"];
	$xQuery  = $xArray["query"];
	$xFragment = $xArray["fragment"];

	$domain = $xProtocol ."://". $xHost . $xPath . ($xQuery?"?":"") . $xQuery;
	$www = $xHost . $xPath . ($xQuery?"?":"") . $xQuery;

	$title = "Convert hostname to IP address";

	printForm();

		if(@gethostbyname($xHost) == $xHost)
		{
		$ip2 = "Returned hostname";
		$hostname2 = "Cancelled";
		}
		else
		{
		$ip2 = @gethostbyname($xHost);
		$hostname2 = @gethostbyaddr($ip2);
		}

	print "<div><p>IP Address: $ip2</p></div>\n";
	print "<div><p>Hostname: $hostname2</p></div>\n";
}
else
{
$title = "Convert hostname to IP address";


		if(isset($_COOKIE['URL']))
		{
		$www = $_COOKIE['URL'];
		}

printForm();
}
?>

<?php
include 'footer.php';
?>
