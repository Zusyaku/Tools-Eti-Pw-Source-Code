<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="2 DAYS">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="www.eti.pw" />
<meta NAME="description" content="Code to Text Ratio">
<META name="keywords" content="code to text ratio, seo">
<title>Code to Text Ratio</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Code to Text Ratio</h2>

<?php

error_reporting(0);

$url = trim( $_POST['url'] );

if (function_exists('curl_init')) {
	$ch = curl_init($url);
	curl_exec($ch);
	curl_close($ch);
}
else {
	$r = new HTTPRequest($url);
	echo $r->DownloadToString();
}

class HTTPRequest
{
   var $_fp;        // HTTP socket
   var $_url;        // full URL
   var $_host;        // HTTP host
   var $_protocol;    // protocol (HTTP/HTTPS)
   var $_uri;        // request URI
   var $_port;        // port

   // scan url
   function _scan_url()
   {
       $req = $this->_url;

       $pos = strpos($req, '://');
       $this->_protocol = strtolower(substr($req, 0, $pos));

       $req = substr($req, $pos+3);
       $pos = strpos($req, '/');
       if($pos === false)
           $pos = strlen($req);
       $host = substr($req, 0, $pos);

       if(strpos($host, ':') !== false)
       {
           list($this->_host, $this->_port) = explode(':', $host);
       }
       else
       {
           $this->_host = $host;
           $this->_port = ($this->_protocol == 'https') ? 443 : 80;
       }

       $this->_uri = substr($req, $pos);
       if($this->_uri == '')
           $this->_uri = '/';
   }

   // constructor
   function HTTPRequest($url)
   {
       $this->_url = $url;
       $this->_scan_url();
   }

   // download URL to string
   function DownloadHeaderToString()
   {
       $crlf = "\r\n";

       // generate request
       $req = 'GET ' . $this->_uri . ' HTTP/1.0' . $crlf
           .    'Host: ' . $this->_host . $crlf
           .    $crlf;

       // fetch
       $this->_fp = fsockopen(($this->_protocol == 'https' ? 'ssl://' : '') . $this->_host, $this->_port);
       fwrite($this->_fp, $req);
       while(is_resource($this->_fp) && $this->_fp && !feof($this->_fp))
           $response .= fread($this->_fp, 1024);
       fclose($this->_fp);

       // split header and body
       $pos = strpos($response, $crlf . $crlf);
       if($pos === false)
           return($response);
       $header = substr($response, 0, $pos);
		 return $header;
   }
   function DownloadToString()
   {
       $crlf = "\r\n";

       // generate request
       $req = 'GET ' . $this->_uri . ' HTTP/1.0' . $crlf
           .    'Host: ' . $this->_host . $crlf
           .    $crlf;

       // fetch
       $this->_fp = fsockopen(($this->_protocol == 'https' ? 'ssl://' : '') . $this->_host, $this->_port);
       fwrite($this->_fp, $req);
       while(is_resource($this->_fp) && $this->_fp && !feof($this->_fp))
           $response .= fread($this->_fp, 1024);
       fclose($this->_fp);

       // split header and body
       $pos = strpos($response, $crlf . $crlf);
       if($pos === false)
           return($response);
       $header = substr($response, 0, $pos);
       $body = substr($response, $pos + 2 * strlen($crlf));

       // parse headers
       $headers = array();
       $lines = explode($crlf, $header);
       foreach($lines as $line)
           if(($pos = strpos($line, ':')) !== false)
               $headers[strtolower(trim(substr($line, 0, $pos)))] = trim(substr($line, $pos+1));

       // redirection?
       if(isset($headers['location']))
       {
           $http = new HTTPRequest($headers['location']);
           return($http->DownloadToString($http));
       }
       else
       {
           return($body);
       }
   }
}
?>
<?php

function fetch_html($url)
{
	if (function_exists('curl_init')) {
     $ch = curl_init($url);
     curl_setopt($ch,CURLOPT_REFERER, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
     $code = curl_exec($ch);
     curl_close($ch);
	} else {
		$r = new HTTPRequest($url);
		$code = $r->DownloadToString();
	}
     return $code;
}
?>


<?php
function fnExecute(){
	$url = $_GET["url"];

	if ($url) {
		 $html = fetch_html($url);
		 $text = strip_tags($html);
		 $ratio = strlen($html) / strlen($text);
		 echo "<strong>Code to text ratio for <i>$url</i>: </strong>\n";
		 echo "<h3>$ratio</h3>\n";
	}
}
?>

<form method="get">
Enter an URL to check
<input type="text" name="url" size="20"/>
<input type="submit" class="button" value="Check Ratio" />
</form>
<br />
<?php fnExecute(); ?>
<br>
What is the Code to Text Ratio?<br>
<br>
The Code to Text Ratio represents the percentage of actual text in a webpage. Our content ratio tool extracts the text from paragraphs and the anchor text from HTML code, and calculates the content ratio based on this information.<br>
<br>
Why is the Code to Text Ratio Important for SEO?<br>
<br>
The code to text ratio of a page is used by search engines and spiders to calculate the relevancy of a webpage. A higher code to text ratio allows for a better chance of getting a good page ranking in the SERPs. Not all search engines are using the code to text ratio in their index algorithm, but most of them do. Therefore, having a higher code to text ratio than your competitors gives you a good start for on-site optimization.
<?php
include 'footer.php';
?>
