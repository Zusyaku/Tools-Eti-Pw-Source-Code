<!DOCTYPE html>
<html lang="en">
<head>
<title>Facebook Redirect Link Maker</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="facebook backlinks maker, facebook backlinks creator, facebook url redirect, facebook link redirect, facebook backlinks, facebook backlinks generator, facebook url submit, facebook submit url, create facebook backlinks, backlink, facebook addlink, facebook addurl, facebook redirect link, backlinks creator, submit URL via facebook, facebook Backlinks Maker, facebook link Generator" />
<meta name="description" content="facebook Redirect Maker, facebook will redirect your Link" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Facebook Redirect Link Creator</h2>
<br />

<form method="POST" action="">
<i>Put URL: </i>
   <input type="text" name="url" id="url" style="width:300px;height:40px;" title="Enter link without http://" placeholder="Enter URL without http://" />
   <input type="submit" name="submit" class="button" value="Go!" title="Go Add URL via facebook!" />
</form>  

<br />

<?php
$url = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');

if (isset($_POST['url'])){

echo "Try to put your unacceptable link in places where they accept Facebook links, but not your link :) yt will redirect to your link :)<br /><br />";
echo "<input type='text' style='width:800px;height:20px;' value='https://l.facebook.com/l.php?u=http%3A%2F%2F{$url}' onclick='this.select()' readonly /><br />";
echo "<input type='text' style='width:800px;height:20px;' value='https://www.facebook.com/flx/warn/?u=http%3A%2F%2F{$url}' onclick='this.select()' readonly /><br />";
echo "<a href='https://l.facebook.com/l.php?u=http%3A%2F%2F{$url}' target='_blank'>https://l.facebook.com/l.php?u=http%3A%2F%2F{$url}</a><iframe src='https://l.facebook.com/l.php?u=http%3A%2F%2F{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.facebook.com/flx/warn/?u=http%3A%2F%2F{$url}' target='_blank'>https://www.facebook.com/flx/warn/?u=http%3A%2F%2F{$url}</a><iframe src='https://www.facebook.com/flx/warn/?u=http%3A%2F%2F{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
}

else {

print ("<p>Submit your lovely:) url/link/website to where it's not accepted :) e.g. any chats ...</p>");

}
?>

<br />

<?php
include 'footer.php';
?>
