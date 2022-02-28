<!DOCTYPE html>
<html lang="en">
<head>
<title>YouTube Redirect Link Maker</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="youtube backlinks maker, youtube backlinks creator, youtube url redirect, youtube link redirect, youtube backlinks, youtube backlinks generator, youtube url submit, youtube submit url, create youtube backlinks, backlink, youtube addlink, youtube addurl, YouTube redirect link, Backlinks Creator, Submit URL via youtube, Youtube Backlinks Maker, Youtube link Generator" />
<meta name="description" content="YouTube Redirect Maker, YouTube will redirect your Link" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>YouTube Redirect Link Creator</h2>
<br />

<form method="POST" action="">
<i>Put URL: </i>
   <input type="text" name="url" id="url" style="width:300px;height:40px;" title="Enter link without http://" placeholder="Enter URL without http://" />
   <input type="submit" name="submit" class="button" value="Go!" title="Go Add URL via Youtube!" />
</form>  

<br />

<?php
$url = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');

if (isset($_POST['url'])){

echo "Try to put your unacceptable link in places where they accept youtube links, but not your link :) yt will redirect to your link :)<br /><br />";
echo "<input type='text' style='width:800px;height:20px;' value='https://www.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}' onclick='this.select()' readonly /><br />";
echo "<input type='text' style='width:800px;height:20px;' value='https://m.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}' onclick='this.select()' readonly /><br />";
echo "<a href='https://www.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}' target='_blank'>https://www.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}</a><iframe src='https://www.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://m.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}' target='_blank'>https://m.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}</a><iframe src='https://m.youtube.com/redirect?event=&redir_token=&q=http%3A%2F%2F{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
}

else {

print ("<p>Submit your lovely:) url/link/website to where it's not accepted :) e.g. facebook, any chats ...</p>");

}
?>

<br />

<?php
include 'footer.php';
?>
