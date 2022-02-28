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

<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="screen resolutions, screen resolutions simulator, mobile simulator">
<title>Screen Resolutions Simulator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<script language="JavaScript">
	var testWin;

	function resTest(w,h) {
		frm = document.forms[0];
		urlF = frm.testURL.value;

		if(urlF == "" || urlF == "http://") {
			alert('Please enter a URL');
			frm.testURL.focus();
			return false;
		}

		if(w == null) {
			w = frm.customw.value;
			if(w == "" || !Number(w) || w < 100) {
				alert('Please enter a valid Width');
				frm.customw.value = "";
				frm.customw.focus();
				return false;
			}
		}

		if(h == null) {
			h = frm.customh.value;
			if(h == "" || !Number(h) || h < 100) {
				alert('Please enter a valid Height');
				frm.customh.value = "";
				frm.customh.focus();
				return false;
			}
		}

		properties  = "width=" + w;
		properties += ",height=" + h;
		properties += ",scrollbars=1,toolbar=1,location=1";
		properties += ",directories=1,status=1,menubar=1";
		properties += ",resizable=1,left=0,top=0";

		if(testWin && !testWin.closed) {
			testWin.close();
		}

		testWin = window.open(urlF,"TestRes",properties);

		if(navigator.appName.indexOf("Netscape") != -1) {
			testWin.outerWidth = w;
			testWin.outerHeight = h;
		}

		frm.innerDim.value  = "Test Resolution: " + w + "x" + h + "\n";

		if(navigator.appName.indexOf("Netscape") != -1) {
			frm.innerDim.value += "Window Inner Width: " + testWin.innerWidth + "\n";
			frm.innerDim.value += "Window Inner Height: " + testWin.innerHeight + "\n\n";
		}

		else {
			frm.innerDim.value += "IE does not allow access to the window properties of ";
			frm.innerDim.value += "pages on a different domain. Below are some general ";
			frm.innerDim.value += "inner dimensions:\n\n";
			frm.innerDim.value += "window      document\n";
			frm.innerDim.value += "640x480  -> 615x314\n";
			frm.innerDim.value += "800x600  -> 775x434\n";
			frm.innerDim.value += "1024x768 -> 999x602\n\n";
			frm.innerDim.value += "For a custom resolution, you\'ll need to get a ";
			frm.innerDim.value += "screen grab of the new window, paste it to your ";
			frm.innerDim.value += "favorite graphics program, then measuer the size ";
			frm.innerDim.value += "of the content area.\n\n";
		}

		frm.innerDim.value += "To ensure that you\'ve tested properly, be sure ";
		frm.innerDim.value += "to make all your toolbars and window chrome viewable. ";
		frm.innerDim.value += "Be sure to test with both major browsers (IE and Netscape), ";
		frm.innerDim.value += "as each one will have different inner document dimensions!";

	}
</script>

<a href="./">Free Online Tools</a>

<h2>Screen Resolutions</h2>
Mobile Simulator<br>
<br>

<form>
URL <input type="text" name="testURL" size="40" value="http://"/><br>
<br>Resolution:  Width <input type="text" name="customw" style="width: 50px;"/>&nbsp;&nbsp;Height <input type="text" name="customh" style="width: 50px;"/>
  <div class="alt1">
     <button type="button" class="button" name="custom" onClick="resTest()"/>Test Custom</button>&nbsp;&nbsp;
     <button type="button" class="button" name="640" onClick="resTest('640','480')"/>Test 640x480</button><br>
     <button type="button" class="button" name="800" onClick="resTest('800','600')"/>Test 800x600</button>&nbsp;&nbsp;
     <button type="button" class="button" name="1024" onClick="resTest('1024','768')" />Test 1024x768</button>
  </div>
  <br/>
  <div class="alt_1" style="height: 120px;">
     <textarea name="innerDim" rows="10" cols="40" wrap="physical">The test window inner dimensions will be displayed here</textarea>
  </div>
</form>
<br /><br /><br /><br />
<?php
include 'footer.php';
?>
