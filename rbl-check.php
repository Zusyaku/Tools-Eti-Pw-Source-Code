<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="rbl check - check your ip if blacklisted">
<meta name="keywords" content="rbl check, ip blacklist check, blacklist check, blacklistalert">
<title>IP Blacklist Check</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>IP Blacklist Check</h2>
RBL Check<br>
Check your IP if blacklisted<br />
Real-time Blackhole Lists (RBL's)<br />
<br>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
?>
<form method="POST" action="">
Enter IP:
   <input type="text" name="url" id="url" value="<?php echo $ip ; ?>"/> 
   <input type="submit" name="submit" class="button" value="Check!" title="GO!"/><br /><br>
This may take up to a minute!
</form>  

<?php
$url     = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8'); // without 'htmlentities' it's not safe!
if(isset($_POST['url'])){
// i use api from: http://rbl-check.org/rbl_api.php?ipaddress=
echo "Checking about IP: {$url} ... Please wait! Meantime you can check about DBL status below.<br /><iframe src='http://rbl-check.org/rbl_api.php?ipaddress={$url}' width='820' height='700' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe>";
}
?>

<hr>
<a href="http://www.spamhaus.org/query/domain/<?php echo $url ; ?>" target="_blank" title="Check if IP is listed in DBL">Blacklist status DBL check</a>
<hr>
<h3>Convert hostname to IP</h3>
<small>If you don't know IP address of your domain/host, then view it from here. Then check it about RBL</small>
<br />

<?php 
function printForm()
{
global $www;

$action = $_SERVER["PHP_SELF"];

print <<<ENDHTM
<br>
<form method="post" action="$action">
<p>http:// <input type="text" name="www" style="height:35px;" value="$www"/> <input type="submit" class="button" value="Submit"/></p>
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
