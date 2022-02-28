<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Youtube random video from playlist generator. Create YT random video from playlist for Your Website. HTML, PHP, JavaScript code available.">
<meta name="keywords" content="youtube random, youtube random video, play random video from youtube playlist, youtube video random generator, youtube playlist random generator, mix video from youtube playlist, play a youtube playlist randomly, youtube playlist randomly, start a youtube playlist from random video, random youtube, random yt, yt, random youtube video from playlist, how to start youtube playlist from random video">
<title>YouTube random video from playlist</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Create YouTube random video from playlist</h2>

How to Start YouTube Playlist from Random Video?<br>
Do You need YT Playlist with random vid for Your Website?<br>
Play a Youtube playlist randomly using this Generator.<br>
Generator, who give PHP and JS code.<br> 
Copy&Paste this HTML code into Your Website and that's all.<br> 
You have alrady randon video from Youtube Playlist.</p>

1. Varian with PHP code<br><br>

<form method="post" action="">
Put YT Playlist:<br>
<input type="text" name="id" id="id" style="height:40px;" placeholder="Enter YouTube Playlist ID"><br><br>
How many videos has the Playlist?<br>
<input type="text" name="count" id="count" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" style="width:50px;height:40px;" placeholder="Count"><br><br>
YT Player Width:<br>
<input type="text" name="width" id="width" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" style="width:50px;height:40px;" value="400" placeholder="400"><br><br>
YT Player Height:<br>
<input type="text" name="height" id="height" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" style="width:50px;height:40px;" value="300" placeholder="300"><br><br>
<input type="submit" class="button" title="Go Proceed" value="Generate">
</form>

<?php
$id = htmlentities($_POST['id'], ENT_QUOTES, 'UTF-8');
$count = htmlentities($_POST['count'], ENT_QUOTES, 'UTF-8');
$width = htmlentities($_POST['width'], ENT_QUOTES, 'UTF-8');
$height = htmlentities($_POST['height'], ENT_QUOTES, 'UTF-8');

function clean_url($id){
	return str_replace(array('http://www.youtube.com/watch?v=','https://www.youtube.com/watch?v=', 'http://youtube.com/watch?v=', 'https://youtube.com/watch?v=', 'https://youtu.be/', 'http://youtu.be/', 'https://www.youtube.com/watch?list=', 'http://www.youtube.com/watch?list=', 'https://www.youtube.com/playlist?list=', 'http://www.youtube.com/playlist?list='),'',$id);
}

echo '<small>Here it is HTML code with simple PHP code - rand() function</small><br>
<textarea onclick="this.select()" readonly rows="10" cols="53"><iframe allowfullscreen="allowFullScreen" src="https://www.youtube.com/embed/?list='.clean_url($id).'&amp;autoplay=1&index=<?php print rand(1,'.$count.')?>" allowtransparency="true" width="'.$width.'" height="'.$height.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen"></iframe></textarea>';
?>

<br><br>Preview:<br>
<iframe allowfullscreen="allowFullScreen" src="https://www.youtube.com/embed/?list=<?php echo (clean_url($id)); ?>&amp;autoplay=1&index=<?php print rand(1,$count)?>" allowtransparency="true" width="<?php echo $width; ?>" height="<?php echo $height; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture allowfullscreen"></iframe>

<br><br><br>

2. Variant with JavaScript code<br><br>

<?php
echo '<small>Here it is HTML code with simple JS code</small><br>
<textarea onclick="this.select()" readonly rows="10" cols="53">
<div id="player"></div>
<script>
    var playlistId = "'.clean_url($id).'";
    var tag = document.createElement("script");
		tag.src = "https://www.youtube.com/iframe_api";

    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player("player", {
            width: "'.$width.'",
            height: "'.$height.'",
            events: {
                "onReady": onPlayerReady,
                "onStateChange": onPlayerStateChange
            }
        });
    }

    var playlistArray;
    var playListArrayLength;
    var maxNumber;

    var oldNumber = 0;
    var NewNumber = 0;

    function newRandomNumber() {
        oldNumber = NewNumber;
        NewNumber = Math.floor(Math.random() * maxNumber);
        if (NewNumber == oldNumber) {
            newRandomNumber();
        } else {
            return NewNumber;
        }
    }

function onPlayerReady(event) {
    player.loadPlaylist({
        "listType": "playlist",
        "list": playlistId
    });
}

var firstLoad = true;
function onPlayerStateChange(event) {
    console.log(event.data);
    if (event.data == YT.PlayerState.ENDED) {
        player.playVideoAt(newRandomNumber());   
    } else {
        if (firstLoad && event.data == YT.PlayerState.PLAYING) {
            firstLoad = false;
            playlistArray = player.getPlaylist();
            playListArrayLength = playlistArray.length;
            maxNumber = playListArrayLength;
            NewNumber = newRandomNumber();
            player.playVideoAt(newRandomNumber());
        }
    }
}    
</script></textarea>';
?>

<br><br>Preview:<br>
<div id="player"></div>
<script>
    var playlistId = <?php echo '"' .clean_url($id). '"'; ?>;
    var tag = document.createElement("script");
		tag.src = "https://www.youtube.com/iframe_api";

    var firstScriptTag = document.getElementsByTagName("script")[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player("player", {
            width: <?php echo '"' .$width. '"'; ?>,
            height: <?php echo '"' .$height. '"'; ?>,
            events: {
                "onReady": onPlayerReady,
                "onStateChange": onPlayerStateChange
            }
        });
    }

    var playlistArray;
    var playListArrayLength;
    var maxNumber;

    var oldNumber = 0;
    var NewNumber = 0;

    function newRandomNumber() {
        oldNumber = NewNumber;
        NewNumber = Math.floor(Math.random() * maxNumber);
        if (NewNumber == oldNumber) {
            newRandomNumber();
        } else {
            return NewNumber;
        }
    }

function onPlayerReady(event) {
    player.loadPlaylist({
        "listType": "playlist",
        "list": playlistId
    });
}

var firstLoad = true;
function onPlayerStateChange(event) {
    console.log(event.data);
    if (event.data == YT.PlayerState.ENDED) {
        player.playVideoAt(newRandomNumber());   
    } else {
        if (firstLoad && event.data == YT.PlayerState.PLAYING) {
            firstLoad = false;
            playlistArray = player.getPlaylist();
            playListArrayLength = playlistArray.length;
            maxNumber = playListArrayLength;
            NewNumber = newRandomNumber();
            player.playVideoAt(newRandomNumber());
        }
    }
}    
</script>

<?php
include 'footer.php';
?>
