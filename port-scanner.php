<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Port Scanner - scan open ports">
<meta name="keywords" content="online port scanner, scan ports, port scanner, ping, порт скенер, онлайн порт скенер">
<title>Online Port Scanner</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Online Port Scanner</h2>

<?php
echo '<title>Port Availability Checker';
echo 'brigante.sytes.net';
echo '</title>';
 
$addr = $_SERVER["REMOTE_ADDR"];
$port = "80";
if ($_GET["addr"]) {
$addr = htmlentities($_GET['addr'], ENT_QUOTES, 'UTF-8');
}
if ($_GET["port"]) {
$port = htmlentities($_GET['port'], ENT_QUOTES, 'UTF-8'); 
}
if ($_GET["port2"]) {
$port2 = htmlentities($_GET['port2'], ENT_QUOTES, 'UTF-8');
}

echo '<form action="' .$_SERVER["PHP_SELF"]. '" method="get">
  <div style="width:350px;background:#F1F1F1;padding:10px;font-family:arial;">
    <table width="100%" border="0" cellspacing="0" cellpadding="2">
      <tr>

        <td colspan="2" style="font-size:12px;">Please enter the Hostname or IP address and choose the port of the website or IP address you wish to test (enter the second port if you want to scan to that port range)    ...   your IP is below:</td>
      </tr>

      <tr>
        <td width="30%" style="font-size:12px;">Hostname / IP:</td>
        <td width="80%"><input type="text" name="addr" value="' .$addr. '"></td>
      </tr>

      <tr>
        <td width="30%" style="font-size:12px;">Port:</td>
        <td width="80%"><input type="text" name="port" value="' .$port. '"></td>
      </tr>

      <tr>
        <td width="30%" style="font-size:12px;">-</td>
        <td width="80%"><input type="text" name="port2" value="' .$port2. '"></td>
      </tr>

        <td width="30%">&nbsp;</td>
        <td width="80%"><input type="submit" class="button" value="Check / Scan Port(s) >>>"></td>
      </tr>
    </table>

  </div>
</form>
';
 
if ($_GET["addr"]) {
  if ($_GET["port"] && !$_GET["port2"]) {
    $fp = @fsockopen($addr, $port, $errno, $errstr, 2);
    $success = "#FF0000";

    $success_msg = "is closed and cannot be used at this time";
    if ($fp) {
      $success = "#99FF66";
      $success_msg = "is open and ready to be used";
    }
    @fclose($fp);
    echo '<div style="width:350px;background:' .$success. ';padding:10px;font-family:arial;font-size:12px;">
    The address <b>"' .$addr. ':' .$port. '"</b> ' .$success_msg. '

  </div>';
  }
  else if ($_GET["port"] && $_GET["port2"]) {
    $p1 = $_GET["port"];
    $p2 = $_GET["port2"];
    if ($p1 == $p2) {
      $fp = @fsockopen($addr, $port, $errno, $errstr, 2);
      $success = "#FF0000";
      $success_msg = "is closed and cannot be used at this time";
      if ($fp) {
        $success = "#99FF66";
        $success_msg = "is open and ready to be used";
      }
      @fclose($fp);
      echo '<div style="width:350px;background:' .$success. ';padding:10px;font-family:arial;font-size:12px;">
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
      echo '<div style="width:350px;background:' .$c. ';padding:10px;font-family:arial;font-size:12px;">' .$m. '</div>';
    }
  }
}
?>
<br>
Common ports:
<p>There are actually 65,536 ports, because there is port 0  :)  well, don't scan port 0 :) scan from port 1 to other port! e.g port range: from 1 to 65535</p>
<p>port 0 - tcp/udp Reserved </p>
<p>... ... ... ... ... ...</p>
<p>port 21 is about FTP</p>
<p>22 SSH</p>
<p>23 TELNET</p>
<p>25 or 2525 SMTP</p>
<p>53 DNS</p>
<p>80 HTTP</p>
<p>110 POP3</p>
<p>115 SFTP</p>
<p>135 RPC epmap</p>
<p>137 netbios-name service</p>
<p>138 netbios-dgm  datagram service</p>
<p>139 NetBIOS-ssn  session service</p>
<p>143 IMAP</p>
<p>194 IRC</p>
<p>443 SSL  https</p>
<p>445 SMB  |  microsoft-ds</p>
<p>465 Secure SMTP (SSMTP)</p>
<p>585 Secure IMAP (IMAP4-SSL)</p>
<p>993 IMAP4 over SSL(IMAPS)</p>
<p>995 Secure POP3 (SSL-POP)</p>
<p>1080 socks</p>
<p>1433 MSSQL microsoft sql server</p>
<p>3128 ndl-aas    Active</p>
<p>3306 MySQL</p>
<p>3389 Remote Desktop</p>
<p>5632 PCAnywhere</p>
<p>5900 VNC</p>
<p>6112 Warcraft III :)</p>
<p>6660-6669 IRC (irc client port 6667) 
<p>8080 http-alt     common http proxy / second web server port  just http alternate:)</p>
<p>... ... ... ... ... ...</p>
<p>port 65535 - some trojans on tcp / on udp some games like: Lord of the Rings Battle for Middle Earth 2 Dark Ages of Camelot Final Fantasy</p>

<p><a href="http://brigante.sytes.net/antihack/service-names-port-numbers.txt" target="_blank">Service names port numbers</a></p>

<p><a href="http://e-down.eti.pw/portscanner.htm" target="_blank">USE MY DESKTOP APP: 'ETI PORT SCANNER' FOR WINDOWS</a></p>

<?php
include 'footer.php';
?>
