<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Liveleak.com videos downloader|grabber">
<meta name="keywords" content="www.liveleak.com downloader, liveleak.com downloader, liveleak.com video downloader, liveleak.com video grabber, liveleak.com video download, сваляй клипове от liveleak.com, online liveleak.com downloader, сваляне от liveleak.com videos, liveleak.com downloader online, сваляне видео от liveleak, svalqne na video ot liveleak.com, сваляне на видео от сайта на liveleak.com, liveleak.com videos download">
<title>Liveleak.com videos grabber</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Liveleak.com videos downloader</h2>

This grabber can get videos from: www.liveleak.com<br>
<br>
<form method="POST" action="">
<input name="url" id="url" title="Put URL here" placeholder="Link here" />
<input type="submit" class="button" value="Get .mp4 video" title="Go!" />
</form>

<br>

<?php
$file = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');
$searchfor = '.mp4';

function clean($url){
	return str_replace(array("src:",'"','}','{',',','','"',"'",']','[','/>','=','/<','content','<','meta','itemprop','itempropURL','URL','url:','video','src','>/>','autoplay','loop','width160 height90','width142 height80','width height','live.mp4','bravo.btv.bg/btvlive','?t','source','src=','label="360p" type="video/mp4">','default','default label="720p" type="video/mp4">','>',' label720p type/mp4>','label720p','type/mp4','label360p'),'',$url);
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
   echo '<br><br>There are two links began with https://... for different quality :) Copy these 2 links and paste to address bar in your browser... Right click on the video and Save video as... Yeah, KISS src :) I am lazy :)';
}
else{
   echo ""; 
}
?>

<?php
include 'footer.php';
?>
