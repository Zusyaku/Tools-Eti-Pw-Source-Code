<!DOCTYPE html>
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="keywords" content="online email extractor, email extractor, online emails extractor, email crawler, online email extractor, online e-mail extractor, extract email addresses online, emails grabber, email finder, email extractor source code">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Online email extractor</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Online Email extractor</h2>

Extract email addresses online <br /> 
E-mail extractor-crawler <br /> 

<?php
$the_url = isset($_REQUEST['url']) ? htmlspecialchars($_REQUEST['url']) : '';
?>
<p>
<form method="post">
<font color="black" face="Arial, Helvetica, sans-serif" size="2">
  Please enter full URL of the page to parse: <br />( including http:// )<br />
  <input type="text" name="url" size="59" placeholder="http://" value="<?php echo $the_url;  ?>"/><br />
  or enter text directly into textarea below:</font><br />
  <textarea name="text" style="width: 500px;height: 200px;"></textarea>
  <br />
  <input type="submit" class="button" value="Parse Emails >>" />
</form>
</p>

<textarea readonly style="width: 500px;height: 200px;color: red; background-color: white">here is output:

<?php
if (isset($_REQUEST['url']) && !empty($_REQUEST['url'])) {
  // fetch data from specified url
  $text = file_get_contents($_REQUEST['url']);
}
elseif (isset($_REQUEST['text']) && !empty($_REQUEST['text'])) {
  // get text from text area
  $text = $_REQUEST['text'];
}

// parse emails
if (!empty($text)) {
  $res = preg_match_all(
    "/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i",
    $text,
    $matches
  );

  if ($res) {
    foreach(array_unique($matches[0]) as $email) {

      echo $email . "\n";
    }
  }
  else {
    echo "No emails found!";
  }
}

?>
</textarea>

<br>
Use these hot keys: <br />
Ctrl+A  - Select all <br />
Ctrl+C  - Copy selected <br />
Ctrl+V  - Paste <br />
<p>&nbsp;</p>
<p><a href="http://brigante.sytes.net/dnl.php?f=email-extractor-src.zip" target="_blank">DOWNLOAD EMAIL EXTRACTOR SOURCE CODE</a></p>

<a href="./emails.php">Try Fake E-mails Generator - if you need 10000 random generated fake emails:)</a>

<?php
include 'footer.php';
?>
