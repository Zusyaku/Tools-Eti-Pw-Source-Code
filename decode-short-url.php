<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Decode TunyURL - Short URL decoder">
<meta name="keywords" content="decode tiny url, tinyurl decode, tinyurl decoder, tiny url decoder, url expander, short url expand, decode short url">
<title>TinyURL Decoder</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Short URL Decoder</h2>

Decode a TinyURL (Short URL - Shrink URL - Shortener URL)<br>
Short URL to Original URL<br>
Find out where Short URL link is really taking you!<br />
<p>
<form method="POST" action="">
   <input type="text" name="url" id="url" style="width:300px;height:40px;" placeholder="Enter your short URL" />
   <input type="submit" name="submit" class="button" value="Show Original URL" />
</form></p>

Get information on a short URL. Find out where it goes!<br />

<?php
$url            = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');
$original_url   = get_original_url($url);
$htmlsrc = file_get_contents($_POST['url']);

echo "<font color='red'>Short URL:</font> {$url}<br/>";
echo "<font color='red'>Original URL(Long URL) is:</font> <a href='{$original_url}' target='_blank'>{$original_url}</a>";
 
function get_original_url($url)
{
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_HEADER,true); 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
    $header = curl_exec($ch);
    
    $fields = explode("\r\n", preg_replace('/\x0D\x0A[\x09\x20]+/', ' ', $header));
        
    for($i=0;$i<count($fields);$i++)
    {
        if(strpos($fields[$i],'Location') !== false)
        {
            $url = str_replace("Location: ","",$fields[$i]);
        }
    }
    return $url;
}
?>

<hr>

<i>Extra Info:</i> (See Meta tags: title, author, keywords, description, genetator) and look html source code for something suspicious; See Website Screenshot below and then go to the website!<br />

<?php
$tags = get_meta_tags($_POST['url']);
echo "Meta tags: <br />";
echo $tags['title'];       
echo $tags['author'];    
echo "<br />";   
echo $tags['keywords'];   
echo "<br />";  
echo $tags['description']; 
echo "<br />";
echo $tags["generator"];
?>
<br />
<center>
Website Screenshot:<br />
<?php
echo "<iframe src='http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$original_url}' width='320' height='250' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<img src='http://images.shrinktheweb.com/xino.php?stwembed=1&stwaccesskeyid=93e93e229a837b8&stwsize=xlg&stwurl={$original_url}'/>";
?>
</center>
<hr>
 
<textarea readonly style="width:100%;color: red;background-color:transparent" rows="20">HTML src is here:
<?php
echo htmlspecialchars( $htmlsrc );
?>
</textarea>
<br />
<a href="http://longurl.eti.pw" target="_blank">Decode Short URL - source code</a>

<?php
include 'footer.php';
?>
