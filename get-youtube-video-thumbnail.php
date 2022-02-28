<!DOCTYPE html>
<html lang="en">
<head>
<title>Get YouTube Video Thumbnail</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="YouTube Thumbnail Grabber">
<meta name="keywords" content="youtube thumbnail grabber, youtube thumbs, image thumbnail screenshot from youtube video url, get youtube thumbnail, show image thumbnail by youtube video, thumbnail from youtube">
<meta name="author" content="ETI's Free Stuff - www.eti.pw">
<meta name="robots" content="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>YouTube Thumbnail Grabber</h2>

Get YouTube video thumbnail and use it :)<br><br>

<form method="GET" action="">
<i>Put YouTube Video: </i>
   <input name="v" id="v" title="Enter a YouTube URL here or only Youtube ID" placeholder="YouTube URL or ID" />
   <input type="submit" class="button" value="Get Thumbnail" title="Go!" />
</form>  

<br>

<?php

$v = htmlentities($_GET['v'], ENT_QUOTES, 'UTF-8');
$content = file_get_contents(clean_url("http://img.youtube.com/vi/.$v"));

function clean_url($v){
	return str_replace(array('http://www.youtube.com/watch?v=','https://www.youtube.com/watch?v=', 'http://youtube.com/watch?v=', 'https://youtube.com/watch?v=', 'https://youtu.be/', 'http://youtu.be/'),'',$v);
}

if (isset($_GET['v'])){

echo 'Medium quality thumbnail<br><img src="http://img.youtube.com/vi/'.clean_url($v).'/mqdefault.jpg"/><br><br>';
echo 'High quality thumbnail<br><img src="http://img.youtube.com/vi/'.clean_url($v).'/hqdefault.jpg"/><br><br>';
echo 'Standard definition quality thumbnail<br><img src="http://img.youtube.com/vi/'.clean_url($v).'/sddefault.jpg"/><br><br>';
echo 'Maximum quality thumbnail<br><img src="http://img.youtube.com/vi/'.clean_url($v).'/maxresdefault.jpg"/><br>';

}

else {

print ("<small>YouTube stores many different types of thumbnails on its servers for different devices.<br>Here's what you will find out: Medium quality thumbnail, High quality thumbnail, Standard definition, Maximum quality.</small>");

}
?>

<?php
include 'footer.php';
?>
