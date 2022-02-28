<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="SedemOsmi.TV videos downloader|grabber">
<meta name="keywords" content="сваляй клипове от седемосми, сваляне 7/8, сваляй клипове от телевизия седем осми, сваляй клипове от телевизия 7/8, www.SedemOsmi.TV downloader, sedemosmi downloader, SedemOsmi.TV video downloader, SedemOsmi.TV video grabber, SedemOsmi.TV video download, сваляй клипове от SedemOsmi, сваляй клипове от sedemosmi.tv, online liveleak.com downloader, сваляне от liveleak.com videos, liveleak.com downloader online, сваляне видео, svalqne na video ot SedemOsmi.TV, сваляне на видео от сайта на слави трифонов, svalqne ot sedemosmi, SedemOsmi.TV videos download">
<title>SedemOsmi.TV videos grabber</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>7/8 TV videos downloader</h2>

This grabber can get videos from website: www.sedemosmi.tv<br>
<br>
<form method="POST" action="">
<input name="url" id="url" title="Put URL here" placeholder="Link here" />
<input type="submit" class="button" value="Get .mp4 video" title="Go!" />
</form>

<br>

<?php
$file = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');
$searchfor = '.mp4';
$searchfor = '.jpg/1';

function clean($url){
	return str_replace(array("src:",'"','}','{',',','','"',"'",']','[','/>','=','/<','content','<','meta','itemprop','itempropURL','URL','url:','src','>/>','autoplay','loop','width160 height90','width142 height80','width height','live.mp4','bravo.btv.bg/btvlive','?t','source','src=','label="360p" type="video/mp4">','default','default label="720p" type="video/mp4">','>',' label720p type/mp4>','label720p','type/mp4','label360p','classWrapperiframe','width854','height480','scrollingno','frameborder0','allowfullscreen','allow','allow;',';','fullscreen','iframe',
'div','/div','fullscreen/iframe/div','classvideoWrapper','</iframe></div></div>','</>','div class="videoWrapper"><iframe src="','width="854" height="480" scrolling="no" frameborder="0" allowfullscreen allow="autoplay; fullscreen"></iframe></div>		</div>','</div>','<div>'),'',$url);
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
   echo '<a href="'.implode(clean($matches[0])).'" target="_blank">Click here to View video and DOWNLOAD</a><br>';
   echo 'Download it with Right click and Save Video As...';
}
else{
   echo ""; 
}
?>

<?php
include 'footer.php';
?>
