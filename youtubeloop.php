<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="www.eti.pw">
<meta name="description" content="Play YouTube Videos on an endless loop. Repeat the whole video. Loop Videos">
<META name="Keywords" content="loop youtube videos, loop video, loop youtube online, loop youtube video, video loop youtube, video loop, repeat youtube videos, youtube repeater, youtube video repeater, loop tube video, loop youtube videos script, loop youtube videos source code">
<title>Loop Youtube Videos</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Youtube Loop</h2>

<br />

<form method="GET" action="">
<i>Put YouTube Video: </i>
   <input name="v" id="v" title="Enter a YouTube URL here or only Youtube ID" placeholder="YouTube URL or ID" />
   <input type="submit" class="button" value="Begin Looping" title="Go!Go!Go!" />
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
/*
echo 'Youtube Link: <a href="https://www.youtube.com/watch?v='.clean_url($v).'" target="_blank"> https://www.youtube.com/watch?v='.clean_url($v).'</a><br /><p><iframe src="http://www.youtube.com/v/'.clean_url($v).'?autoplay=1&loop=1&playlist='.clean_url($v).'" width="640" height="390" frameborder="0" FRAMESPACING=0 BORDER=0 allowfullscreen></iframe></p>';
*/
echo 'Youtube Link: <a href="https://www.youtube.com/watch?v='.clean_url($v).'" target="_blank"> https://www.youtube.com/watch?v='.clean_url($v).'</a><br /><p><iframe src="http://www.youtube.com/embed/'.clean_url($v).'?autoplay=1&loop=1&playlist='.clean_url($v).'" width="640" height="390" FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 allowfullscreen></iframe></p>';
echo $yt['title'];
echo '<br /><p>Share this loop: <input readonly type="text" id="url" style="width:350px;height:30px;color:#00aff0" value="'.$domain.'/youtubeloop.php?v='.clean_url($v).'" onclick="this.focus();this.select();"></p>';

}

else {

print ("<br /><small>e.g. https://www.youtube.com/watch?v=NY-RLryio_8<br />https://youtu.be/NY-RLryio_8<br />or Put in just the ID bit, the part after v=</small>");

}
?>

</center>

<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", "./youtubeloop.php");
    }
</script>

<hr>

<a href="#tut" onclick="toggle_visibility('tut');">Click here to get the source code of this online tool!</a>

<script type="text/javascript">
    function toggle_visibility(id) {
 var e = document.getElementById(id);
 e.style.display = ((e.style.display!='none') ? 'none' : 'block');
 }
</script>

<br />

<div id="tut" style="display:none;">
The Source code of this KISS (Keep It Simple, Silly!) PHP project:<br />
<a href="http://youtubeloop.eti.pw" target="_blank" title="Loop Youtube Video Source Code">Click here!</a>
<br />
Explanation: We just use Youtube API Player parameters about this loop, and the trick is we to create "playlist": http://www.youtube.com/v/VIDEO_ID?autoplay=1&loop=1&playlist=VIDEO_ID<br />
or: https://www.youtube.com/embed/VIDEO_ID?autoplay=1&loop=1&playlist=VIDEO_ID<br />
Then there is a loop! And that's all! You can write the URL/Link in the Address Bar in your favorite Browser and will work too. Just change this VIDEO_ID ... I know it's not comfortable by this way:) When there is a playlist, then Youtube's player load next video automatically, and when we create two same videos, well there is Loop/Repeat mode. Look at the top left corner in Youtube player here to see the playlist with 2 same videos:)<br />
But if you want create simple website service about Loop Youtube Videos like: www.loopvideos.com ; www.infinitelooper.com ; www.youtubeloop.net and others - feel free to use this simple php script:) no JavaScript needed:) There is problem with Firefox browser and Chrome. Firefox don't want play Flash and block this iframe with flash player. YouTube.com uses HTML5 Player now and there is 'Loop' function in the player - just right click on it.<br />
You do not need to use any addons buttons and install them in your browser:) just no need of this:)<br /> 
You can use my free web hosting and to upload this script there: <a href="http://zoho.cf" target="_blank"> www.Zoho.cf - Free Web Hosting</a><br />

</div>

<?php
include 'footer.php';
?>
