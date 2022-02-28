<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="YouTube Profile Image Grabber. Extract the Image from YouTube Profile.">
<meta name="keywords" content="youtube profile image grabber, youtube profile image extractor, extract image of youtuber, extract image of youtube profile, extract image of youtube channel, youtube extractor">
<title>YouTube Profile Image Grabber</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>YouTube Profile Image Extractor</h2>

Get the real Image of YouTuber<br>
This Tool extract the real Image of YouTube Channel/Profile.<br>
You can see better the person who use the Tube. Enjoy.<br><br>

<form method="post" action="">
<input type="text" name="id" id="id" style="height:40px;" placeholder="YouTube Channel URL">
<input type="submit" class="button" title="Go Proceed" value="Get Image">
</form>

<?php

$id = file_get_contents(htmlentities($_POST['id']));

function clean_src($id){
  return str_replace(array('-c-k-c0xffffffff-no-rj-mo', '=s100'),'',$id);
}

if (preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i',$id, $matches)){

echo '<br><a href="'.$matches[ 1 ][ 0 ].'" target="_blank"><img border="0" src="'.$matches[ 1 ][ 0 ].'"> 100x100</a><br>';
echo '<br><a href="'.clean_src($matches[ 1 ][ 0 ]).'=s288" target="_blank"><img border="0" src="'.$matches[ 1 ][ 0 ].'"> 288x288</a>';
echo '<br>Save with Right click on the Image or click and follow the Link. You can change with other value in =s100 or =s288 ... just enter other numbers :) and google will generate bigger Image with different quality.';
}
else{
  echo "<small>e.g.<br>https://www.youtube.com/channel/UCvBpL7QnKvt5XFurRI5jNag<br>https://www.youtube.com/user/CHANEL</small>";
}
?>

<?php
include 'footer.php';
?>
