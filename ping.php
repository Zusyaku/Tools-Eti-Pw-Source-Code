<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Ping online">
<meta name="keywords" content="ping, online ping, free online tools, web tools, webmaster tools">
<title>Ping</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Ping</h2>

<?php
// Put it into whatever directory and call it. That's all.
// Get Variable from form via register globals on/off
// Security problem, $count wasn't checked upon. 
// "-" was zapped out....not anymore
//-------------------------
$max_count = 10; //maximum count for ping command
$unix      =  1; //set this to 1 if you are on a *unix system      
$windows   =  0; //set this to 1 if you are on a windows system
// -------------------------
// nothing more to be done.
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
   $count  = $_GET['count'];
   $host   = $_GET['host'];
   $ip     = $_SERVER['REMOTE_ADDR'];
   $self   = $_SERVER['PHP_SELF'];
};
// form submitted ?
If ($submit == "Ping!") 
{
   // over count ?
   If ($count > $max_count) 
   {
      echo 'Maximum for count is: '.$max_count;
      echo '<a href="'.$self.'">Back</a>';
   }
   else 
   {
      // replace bad chars
      $host= preg_replace ("/[^A-Za-z0-9.-]/","",$host);
      $count= preg_replace ("/[^0-9]/","",$count);
      echo '<body bgcolor="#FFFFFF" text="#000000"></body>';
      echo("<br>Ping Output:<br>"); 
      echo '<pre>';           
      //check target IP or domain
      if ($unix) 
      {
         system ("ping -c$count -w$count $host");
         system("killall ping"); // kill all ping processes in case there are some stalled ones or use echo 'ping' to execute ping without shell
      }
      else
      {
         system("ping -n $count $host");
      }

# old code with API
// echo 'With API:<br><iframe allowtransparency="true" height="250px" width="100%" src="https://api.hackertarget.com/nping/?q='.$ip.'" frameborder="0"></iframe>';

$grab = file_get_contents('https://api.hackertarget.com/nping/?q='.$ip.'');
echo "<p>".$grab."</p>";

      echo '</pre>';
       echo '<a href="'.$self.'"> <-Ping again|| </a>';
    }
} 
else 
{
    echo '<body bgcolor="#FFFFFF" text="#000000"></body>';
    echo '<p><font size="2">Your IP is: '.$ip.'</font></p>';
    echo '<form methode="post" action="'.$self.'">';
    echo '   Enter IP or Host <input type="text" name="host" value="'.$ip.'"></input><br />';
    echo '   Enter Count <input type="text" name="count" size="2" value="4"></input><br />';
    echo '   <input type="submit" name="submit" class="button" value="Ping!"></input>';
    echo '</form>';
    echo '<br><b>'.$system.'</b>';
    echo '</body></html>';
}
?>

<?php
include 'footer.php';
?>
