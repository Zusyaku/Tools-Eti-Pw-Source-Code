<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="www.eti.pw">
<meta name="description" content="Watch Age Restricted YouTube Videos">
<META name="Keywords" content="age restricted youtube remover, youtube age remover, remove age restrict youtube, bypass age restrictions on youtube videos, age-restricted youtube, age-restricted youtube remover, age restricted youtube remove, remove restricted youtube vids how to remove youtube restricted videos, how to watch age-restricted youtube videos without signing-in">
<title>Watch Age Restricted YouTube Vids</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Watch Age Restricted YouTube Videos Without Signing In</h2>
NO Sign in to confirm your age<br />

<br />

<form method="GET" action="">
<i>Put YouTube Video: </i>
   <input name="v" id="v" title="Enter a YouTube URL here or only Youtube ID" placeholder="YouTube URL or ID" />
   <input type="submit" class="button" value="Begin Watch" title="Watch!" />
</form>  

<br />

<?php
$domain = $_SERVER['HTTP_HOST'];
$domain = preg_replace('/^www\./' , '' , $domain);
$domain = ucfirst($domain);
$v = htmlentities($_GET['v'], ENT_QUOTES, 'UTF-8');
$content = file_get_contents(clean_url("http://youtube.com/get_video_info?video_id=".$v));

parse_str($content, $yt);

function clean_url($v){
	return str_replace(array('http://www.youtube.com/watch?v=','https://www.youtube.com/watch?v=', 'http://youtube.com/watch?v=', 'https://youtube.com/watch?v=', 'https://youtu.be/', 'http://youtu.be/'),'',$v);
}

if (isset($_GET['v'])){

// with playlist loop old variant
// echo 'Youtube Link: <a href="https://www.youtube.com/watch?v='.clean_url($v).'" target="_blank"> https://www.youtube.com/watch?v='.clean_url($v).'</a><br /><p><iframe src="http://www.youtube.com/embed/'.clean_url($v).'?autoplay=1&loop=1&playlist='.clean_url($v).'" width="640" height="390" FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 allowfullscreen></iframe></p>';
echo 'Youtube Link: <a href="https://www.youtube.com/watch?v='.clean_url($v).'" target="_blank"> https://www.youtube.com/watch?v='.clean_url($v).'</a><br /><p><div class="embededContent oembed-provider- oembed-provider-youtube" data-align=none data-oembed="https://www.youtube.com/watch?v='.clean_url($v).'" data-oembed_provider=youtube data-resizetype=noresize><div class=embededContent><iframe allowfullscreen allowscriptaccess=always frameborder=0 height=480 scrolling=no src="https://www.youtube.com/embed/'.clean_url($v).'?wmode=transparent&jqoemcache=1gXFT" width="640" height="390"></iframe></div></p>';
echo $yt['title'];
echo '<br /><p>Share this unrestricted vid: <input readonly type="text" id="url" style="width:350px;height:30px;color:#00aff0" value="'.$domain.'/youtube-age-restricted-remover.php?v='.clean_url($v).'" onclick="this.focus();this.select();"></p>';

}

else {

print ("<br /><small>e.g.<br />https://www.youtube.com/watch?v=x6dzgIzCbQQ<br />https://youtu.be/x6dzgIzCbQQ<br />or Put in just the ID bit, the part after v=</small>");

}
?>

<br /><br /><br />How to watch Age-Restricted Youtube videos without signing-in?<br />
http://tools.eti.pw/youtube-age-restricted-remover.php?v=ID bit here

<?php
include 'footer.php';
?>
