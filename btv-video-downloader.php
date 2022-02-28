<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="BTV.bg videos downloader">
<meta name="keywords" content="btvplus downloader, btv downloader, btv downloader online, btv.bg downloader, btv video downloader, btv video grabber, btv video download, btvplus.bg downloader, btvplus.bg video downloader, online btv downloader, btv downloader online, online btvplus downloader, btv videos download, btv novinite downloader, svalqne ot btv, svalqne ot btvplus, svalqne na video ot btv, svalqne na video ot btvplus, как да свалям видео от бтв, сваляне от btvplus videos, сваляне от btvplus.bg videos, сваляне от btv videos, сваляне на видео от сайта на бтв, сваляй клипове от btv, сваляне видео от бтв, сваляне от бтв, сваляй клипове от btvplus, сваляй клипове от btv, сваляне от сайта на бтв">
<title>BTV.bg videos grabber</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>BTV.bg videos downloader</h2>

This grabber can get videos from: www.btv.bg , www.btvplus.bg<br>
<br>
<form method="POST" action="">
<input name="url" id="url" title="Put URL here" placeholder="Link here" />
<input type="submit" class="button" value="Get video" title="Go!" />
</form>

<?php
$file = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');
$searchfor = '.mp4';

function clean($url){
	return str_replace(array("src:",'"','}','{',',','','"',"'",']','[','/>','=','/<','content','<','meta','itemprop','itempropURL','URL','url:','video','src','>/>','autoplay','loop','width160 height90','width142 height80','width height','live.mp4','bravo.btv.bg/btvlive','?t','https://',': //','Url','contentUrl',':'),'',$url);
}

// the following line prevents the browser from parsing this as HTML.
//header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
   //echo implode(clean($matches[0]));
   echo ''.implode(clean($matches[0])).'';
   echo '<br><br>2 links ... copy & paste to address bar in your browser... Right click on the video and Save video as...';
}
else{
   echo ""; 
}
?>

<?php
include 'footer.php';
?>
