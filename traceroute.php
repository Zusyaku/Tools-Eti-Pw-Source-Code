<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="traceroute, tracert, online tools, free online tools, online tools with source code, tools, webmaster tools ">
<title>Traceroute</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Traceroute, Tracert</h2>

<?php

$unix      =  1; //set this to 1 if you are on a *unix system      
$windows   =  0; //set this to 1 if you are on a windows system
// -------------------------
// nothing more to be done :P
// -------------------------
//globals on or off ?
$register_globals = (bool) ini_get('register_gobals');
$system = ini_get('system');
$unix = (bool) $unix;
$win  = (bool)  $windows;
//
If ($register_globals)
{
   $ip = getenv(REMOTE_ADDR);
   $self = $PHP_SELF;
} 
else 
{
   $submit = $_GET['submit'];
   $host   = $_GET['host'];
   $ip     = $_SERVER['REMOTE_ADDR'];
   $self   = $_SERVER['PHP_SELF'];
};
// form submitted ?
If ($submit == "Traceroute!") 
{
      // replace bad chars
      $host= preg_replace ("/[^A-Za-z0-9.]/","",$host);
      echo '<body bgcolor="#FFFFFF" text="#000000"></body>';
      echo("Trace Output:<br>"); 
      echo '<pre>';           
      //check target IP or domain
      if ($unix) 
      {
         system ("traceroute $host");
         system("killall -q traceroute"); // kill all traceroute processes in case there are some stalled ones or use echo 'traceroute' to execute without shell
      }
      else
      {
         system("tracert $host");
      }
      echo '<br><br>First variant Done! Second variant with API:<br>';
# old code with API
// echo '<br><iframe allowtransparency="true" height="250px" width="100%" src="https://api.hackertarget.com/mtr/?q='.$ip.'" frameborder="0"></iframe>';

$grab = file_get_contents('https://api.hackertarget.com/mtr/?q='.$ip.'');
echo "<p>Tracert ".$grab."</p>";

      echo '</pre>'; 
      echo '<a href="'.$self.'"> <-Tracert again|| </a>';
} 
else 
{
    echo '<body bgcolor="#FFFFFF" text="#000000"></body>';
    echo '<p><font size="2">Your IP is: '.$ip.'</font></p>';
    echo '<form methode="post" action="'.$self.'">';
    echo '   Enter IP or Host <input type="text" name="host" value="'.$ip.'"></input>';
    echo '   <input type="submit" name="submit" class="button" value="Traceroute!"></input>';
    echo '</form>';
    echo '<br><b>'.$system.'</b>';
    echo '</body></html>';
}
?>

<?php
include 'footer.php';
?>
