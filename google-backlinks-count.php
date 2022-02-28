<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="backlinks count, backlinks checker, google backlinks count, google backlinks checker, social popularity checker, social checker">
<title>Google backlinks count</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<div>

<h2>Google Backlinks Checker</h2>
<br />

<form method="get" action="">
Enter URL<br />
<input type="text" name="url" id="url" style="height:40px;" placeholder="Enter URL">
<input type="submit" class="button" value="Check">
</form>
<br>
<?php
$domain = htmlentities($_GET['url']);
  echo "Google backlinks: ";
  echo GoogleBL($domain); //get backlinks
?>

<?php
  function GoogleBL($domain){
  $url="http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=link:".$domain."&filter=0";
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt ($ch, CURLOPT_HEADER, 0);
  curl_setopt ($ch, CURLOPT_NOBODY, 0);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  $json = curl_exec($ch);
  curl_close($ch);
  $data=json_decode($json,true);
  if($data['responseStatus']==200)
  return $data['responseData']['cursor']['resultCount'];
  else
  return false;
  }
?>

</div>

<?php
include 'footer.php';
?>
