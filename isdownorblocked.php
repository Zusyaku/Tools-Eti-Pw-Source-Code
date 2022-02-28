<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="is down or blocked, is down or blocked site, online website avalibility check, ping online, isdownorblocked, is this site up">
<title>Is down or blocked site? Online website avalibility check</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>is Down or Blocked</h2>

<?php
$addr = $_SERVER["REMOTE_ADDR"];
$port = "80";
if ($_GET["addr"]) {
  //$addr = $_GET["addr"];      not by this way because it is not safe
$addr = htmlentities($_GET['addr'], ENT_QUOTES, 'UTF-8');
}
if ($_GET["port"]) {
  //$port = $_GET["port"]; it is not safe!
$port = htmlentities($_GET['port'], ENT_QUOTES, 'UTF-8'); // so it is safe:)
}
if ($_GET["port2"]) {
  //$port2 = $_GET["port2"];
$port2 = htmlentities($_GET['port2'], ENT_QUOTES, 'UTF-8'); // so it is safe:)
}

echo '<br />Site is down or blocked just for you or for all?<br />		
<form action="' .$_SERVER["PHP_SELF"]. '" method="get">
  <div style="width:300px;background:#f1f1f1;padding:10px;font-family:arial;">
     
      <tr>
        <td width="30%" style="font-size:12px;">Address or IP: </td>
        <td width="80%"><input class="textbox" type="text" name="addr" value="' .$addr. '"></td>
      </tr><br />
      <tr>
        <td width="30%" style="font-size:12px;">Port: </td>
        <td width="80%"><input class="textbox" type="text" name="port" value="' .$port. '"></td>
      </tr><br />
        <td width="80%"><input class="button" type="submit" value="Check"></td>
      </tr>
    
  </div>

</form>
';

if ($_GET["addr"]) {
  if ($_GET["port"] && !$_GET["port2"]) {
    $fp = @fsockopen($addr, $port, $errno, $errstr, 2);
    $success = "#FF0000";
    $success_msg = "is DOWN now! <br /> Our system can’t access $addr The site may be unavailable or has some technical problems which are fixing right now. Try to visit it in few hours or reload this webpage later. Also, DNS can’t get information about the domain $addr <br /> Check if you have typed correct URL ... change other port :)";
    if ($fp) {
      $success = "#99FF66";
      $success_msg = "is UP! It's available!";
    }
    @fclose($fp);
    echo '<div style="width:300px;background:' .$success. ';padding:10px;font-family:arial;font-size:12px;">
    The address <b>"' .$addr. ':' .$port. '"</b> ' .$success_msg. '
  </div>';
  }
  else if ($_GET["port"] && $_GET["port2"]) {
    $p1 = $_GET["port"];
    $p2 = $_GET["port2"];
    if ($p1 == $p2) {
      $fp = @fsockopen($addr, $port, $errno, $errstr, 2);
      $success = "#FF0000";
      $success_msg = "is DOWN!";
      if ($fp) {
        $success = "#99FF66";
        $success_msg = "is UP! It's available!";
      }
      @fclose($fp);
      echo '<div style="width:300px;background:' .$success. ';padding:10px;font-family:arial;font-size:12px;">
      The address <b>"' .$addr. ':' .$port. '"</b> ' .$success_msg. '
      </div>';
    }
    else {
      if ($p1 < $p2) {
        $s = $p1;
        $st = $p1;
        $e = $p2;
      }
      else if ($p2 < $p1) {
        $s = $p2;
        $st = $p2;
        $e = $p1;
      }
      while ($s <= $e) {
        $fp = @fsockopen($addr, $s, $errno, $errstr, 1);
        if ($fp) {
          $p_open = $p_open. " " .$s;
          $p_1 = 1;
        }
        @fclose($fp);
        $s++;
      }
      if ($p_1) {
        $c = "#99FF66";
        $m = "On the address <b>" .$addr. "</b> and port range <b>" .$st. "-" .$e. "</b> the following ports were open: " .$p_open;
      }
      else {
        $c = "#FF0000";
        $m = "No ports on the address <b>" .$addr. "</b> and port range <b>" .$st. "-" .$e. "</b> were open";
      }
      echo '<div style="width:300px;background:' .$c. ';padding:10px;font-family:arial;font-size:12px;">' .$m. '</div>';
    }
  }
}
?>
<br />
<h4>About this service:</h4>
<p>Our web-service tries to answer one simply question: Is Website down only for You or for everyone?<br>
We check site for availability from different network servers and give the answer if it works normally or not.<br>
You have possibility to specify a different port.</p>
<h4>Similar Tools:</h4>
<a href="http://isdownorblocked.eti.pw" target="_blank">http://isdownorblocked.eti.pw</a><br />
<a href="http://isdownorblocked.url.ph" target="_blank">http://isdownorblocked.url.ph</a><br />

<?php
include 'footer.php';
?>
