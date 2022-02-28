<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Get the time the Google bot last accessed your page">
<meta name="keywords" content="googlebot last access detector, online googlebot last access checker, googlebot last accessed date checker tool, google bot last visit, check when your website was last crawled by google bot">
<title>Googlebot last accessed your page</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Google Bot Last Accessed Date Checker Tool</h2>
This tool will help you to know that when Google accessed your site last time, it shows the result with last accessed date.<br />
<br />

<?php
    //get googlebot last access
function googlebot_lastaccess($domain_name)
{
    $request = 'http://webcache.googleusercontent.com/search?hl=en&q=cache:'.$domain_name.'&btnG=Google+Search&meta=';
    $data = getPageData($request);
    $spl=explode("as it appeared on",$data);
   //echo "<pre>".$spl[0]."</pre>";
    $spl2=explode(".<br>",$spl[1]);
    $value=trim($spl2[0]);
   //echo "<pre>".$spl2[0]."</pre>";
    if(strlen($value)==0)
    {
        return(0);
    }
    else
    {
        return($value);
    }      
} 

function getPageData($url) {
 if(function_exists('curl_init')) {
 $ch = curl_init($url); // initialize curl with given url
 curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // add useragent
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // write the response to a variable
 if((ini_get('open_basedir') == '') && (ini_get('safe_mode') == 'Off')) {
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow redirects if any
 }
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5); // max. seconds to execute
 curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
 return @curl_exec($ch);
 }
 else {
 return @file_get_contents($url);
 }
}

echo '<form action="" method="POST">
Website URL:<br />    
<input type="text" name="url" size="40" value="http://" placeholder="http://">
<input type="submit" name="submit" class="button" value="Check!">
</form>';

if(isset($_POST['url']))
{

$domain_name = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');

// echo "Googlebot last access = ".googlebot_lastaccess($domain_name)."<br />"; 
$content = googlebot_lastaccess($domain_name);
$date = substr($content , 0, strpos($content, 'GMT') + strlen('GMT'));
echo "Googlebot last accessed your page on ".$date."<br />";
}
?>

<br />Check when your website was last crawled by Google Bot!

<?php
include 'footer.php';
?>
