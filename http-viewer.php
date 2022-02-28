<!DOCTYPE html>
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="description" content="HTTP Viewer, Decode TinyURL, Find out where tinyurl link is really taking you">
<meta name="keywords" content="http viewer, tinyurl checker, untiny url, decode tinyurl, find out where that tinyurl link is really taking you, online tools">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>HTTP Viewer</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>HTTP Viewer, Decode a TinyURL</h2> 

<p>Sniff Webserver - what webserver they used? Find out how! Just put link here!</p>
<p>Also Tinyurl.com checker:) Decode a TinyURL:)<br />
|Find out where TinyURL link is really taking you. Well, just see  "Location:" on the output|</p>

<?php

if(!function_exists("fsockopen"))
{
$title = "Whoops! - Function Disabled";


print <<<ENDHTM
<p>Your server has the PHP function (fsockopen) disabled! You will not be able to run this program.</p>
ENDHTM;

exit(include_once($footer_path));
}

function printForm()
{
global $www,$options;

$action = $_SERVER["PHP_SELF"];
$action = str_replace("index.php","", $action);

print <<<ENDHTM

<form method="post" action="$action">


<p>http:// <input type="text" name="www" value="$www"/></p>


<p>Method <select name="methods">
ENDHTM;

foreach($options as $o)
{
print "<option value=\"$o\">$o</option>\n";
}

print <<<ENDHTM
</select></p>
<p><input type="submit" class="button" value="Submit"/></p>
</form>


ENDHTM;
}

function fetchURL($m)
{
global $domain;

$theArray = parse_url($domain);

$theProtocol = $theArray["scheme"];
$theHost   = $theArray["host"];
$thePort   = $theArray["port"];
$theUser   = $theArray["user"];
$thePass   = $theArray["pass"];
$thePath   = $theArray["path"];
$theQuery  = $theArray["query"];
$theFragment = $theArray["fragment"];

if(!$thePort)
{
$thePort  = "80";
}
if(!$thePath)
{
$thePath    = "/";
}

$thePage = $thePath . ($theQuery?"?":"") . $theQuery;

$open_socket = @fsockopen($theHost, $thePort, $errno, $errstr, 30);

	if($open_socket)
	{
	$message .= $m ." ". $thePage . " HTTP/1.1\r\n";
	$message .= "Host: $theHost\r\n";
	$message .= "User-Agent: " . $_SERVER["HTTP_USER_AGENT"] . "\r\n";
	$message .= "Connection: close\r\n\r\n";

	fputs($open_socket, "$message\n");

  		while ($read_text = fgets($open_socket, 4096)) 
		{
		$response .= htmlspecialchars($read_text, ENT_QUOTES);
		}

	return $response;
	}
}

$options = array('HEAD','GET','POST','OPTIONS','TRACE','BASELINE_CONTROL','CHECKIN','CHECKOUT','CONNECT','COPY','DELETE','INVALID','LABEL','LOCK','MERGE','MKACTIVITY','MKCOL','MKWORKSPACE','MOVE','PATCH','PROPFIND','PROPPATCH','PUT','REPORT','UNCHECKOUT','UNLOCK','UPDATE','VERSION_CONTROL');

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

	$title = "HTTP Viewer - Emulate a browser with this page sniffer";


	if(!$fp = @fsockopen($xHost, 80, $errno, $errstr, 30))
	{
	$host = $xArray["host"];
	printForm();
	print "<p><span class=\"bold\">ERROR</span> Could not connect to $host</p>\n";
	exit(include_once($footer_path));
	}
	else
	{
	$result = fetchURL($_REQUEST['methods']);	
	printForm();
	print "<h4>". $_REQUEST['methods'] ." Request</h4>\n";

	print "<pre>$result</pre>\n\n";
	}
}
else
{
$title = "HTTP Viewer - Emulate a browser with this page sniffer";


		if(isset($_COOKIE['URL']))
		{
		$www = $_COOKIE['URL'];
		}

printForm();
}

?>
<a href="decode-short-url.php">|Decode Short URL from here|</a>
<?php
include 'footer.php';
?>
