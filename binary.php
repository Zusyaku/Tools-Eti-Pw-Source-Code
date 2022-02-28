<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<META NAME="description" CONTENT="Online tool to translate ASCII/ANSI, HEX, Binary, Base64, Encoder/Decoder with MD2, MD4, MD5, SHA1+2, RIPEMD, CRC, etc. hashing algorithms.">
<META NAME="keywords" CONTENT="binary encoder, binary decoder, binary translator, binary translator source code, binary tools, binary converter, hexadecimal encoder/decoder, base 64, MD5, Message-Digest algorithm, CRC, Cyclic Redundancy Check, SHA, Secure Hash Algorithm, RIPEMD, RACE Integrity Primitives Evaluation Message Digest">
<title>Binary Translator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Binary encoder-decoder</h2>
Binary Translator<br>

<? 

static $binary;
static $ascii;
static $hex;
static $b64;
static $char;

?>

<style>
.ff{font-size: 10px;
	font-family:verdana,arial,helvetica,sans;
	color: #333333;
	background: #eee;
	}
.btn{
	font-size: 8px;
	font-family:verdana,arial,helvetica,sans;
	color: #333333;
	background: #eee;
	}
BODY{
scrollbar-3dlight-color:#999999;
scrollbar-arrow-color:#999999;
scrollbar-base-color:#DDDDDD;
scrollbar-darkshadow-color:#999999;
scrollbar-face-color:#DDDDDD;
scrollbar-highlight-color:#DDDDDD;
scrollbar-shadow-color:#DDDDDD;
scrollbar-track-color:#CCCCCC;
}

</style>


<center>

<table border=0 cellspacing=0 cellpadding=0><tr><td align=center>
<font face="verdana,arial,helvetica" size=1>

<p><b>Please note:</b><br> This application encodes and decodes 
<a href="http://en.wikipedia.org/wiki/ASCII">ASCII</a> and 
<a href="http://en.wikipedia.org/wiki/ANSI">ANSI</a> 
text.  <br>Only codepoints &lt; 128 are ASCII.  This is provided for educational and entertainment use only.</p>
<a onClick="window.location.href=window.location.href">|clear all|</a> 
<table border=0 cellspacing=0 cellpadding=10>
<tr><form method="POST"><td align=center valign=top>
<font face="verdana,arial,helvetica" size=1>

<b>[ <a href="">TEXT</a> ]</b><br>
<textarea cols=48 rows=15 wrap="virtual" name="ascii" class="ff">
<?php

set_magic_quotes_runtime(0);
foreach($_POST as $key=>$val){ $$key = stripslashes($val); }

#$_POST[ascii] = str_replace("\\'","'",$_POST[ascii]);
#$_POST[ascii] = str_replace("\\\"","\"",$_POST[ascii]);
#$_POST[ascii] = str_replace("\\\\","\\",$_POST[ascii]);
if($ascii != "") print htmlentities($ascii);
else {

if($binary != "") {
	$binary_ = preg_replace("/[^01]/","", $binary);
	for($i = 0; $i < strlen($binary_); $i = $i + 8)
	$ascii = $ascii.chr(bindec(substr($binary_, $i, 8)));
}

if($hex != "") {
	$hex_ = preg_replace("/[^0-9a-fA-F]/","", $hex);
	for($i = 0; $i < strlen($hex_); $i = $i + 2)
	$ascii = $ascii.chr(hexdec(substr($hex_, $i, 2)));
}

if($b64 != "") {
	//$ascii = gzinflate($gzip);
	$ascii = base64_decode($b64);
}

if($char != "") {
	$char_ = preg_split("/\\D+/",trim($char));
	foreach ($char_ as $key)
	$ascii = $ascii.chr($key);
}

echo htmlentities($ascii);
}

?>
</textarea>
<br>
<input type="submit" class="button" value="&lt; ENCODE &gt;">
</td></form><form method="POST"><td align=center valign=top>
<font face="verdana,arial,helvetica" size=1>

<b>2 [ <a href="http://en.wikipedia.org/wiki/Binary_numeral_system"><acronym title="Binary">BINARY</acronym></a> ]</b><br>
<textarea cols=48 rows=15 wrap="virtual" name="binary" class="ff"><?php

if($binary != "") echo $binary;
else if($ascii != "") {
$val = strval(decbin(ord(substr($ascii, 0, 1))));
echo str_repeat("0", 8-strlen($val)).$val;
for($i = 1; $i < strlen($ascii); $i = $i + 1) {
$val = strval(decbin(ord(substr($ascii, $i, 1))));
echo " ".str_repeat("0", 8-strlen($val)).$val;
}
}
?>
</textarea>
<br>
<input type="submit" class="button" value="&lt; DECODE &gt;">
</td></form><form method="POST"><td align=center valign=top>
<font face="verdana,arial,helvetica" size=1>

<b>4 [ <a href="http://en.wikipedia.org/wiki/Hexidecimal"><acronym title="Hexidecimal">HEX</acronym></a> ]</b><br>
<textarea cols=48 rows=15 wrap="virtual" name="hex" class="ff"><?php

if($hex != "") echo $hex;
else if($ascii != "") {
$val = dechex(ord(substr($ascii, 0, 1)));
echo str_repeat("0", 2-strlen($val)).$val;
for($i = 1; $i < strlen($ascii); $i = $i + 1) {
  $val = dechex(ord(substr($ascii, $i, 1)));
  echo " ".str_repeat("0", 2-strlen($val)).$val;
}
}
?>
</textarea>
<br>
<input type="submit" class="button" value="&lt; DECODE &gt;">
</td></tr></form>

</textarea>
<br>
<? //<input type="submit" class="btn" value="&lt; DECODE &gt;">?>
</td></form>

<!--BASE 64-->
<form method="POST"><tr><td align=center valign=top>
<font face="verdana,arial,helvetica" size=1>

<b>6 [ <a href="http://en.wikipedia.org/wiki/Base64">BASE64</a> ]</b><br>
<textarea cols=48 rows=15 wrap="virtual" name="b64" class="ff"><?php

if($b64 != "") echo $b64;
else if($ascii != "") {
echo base64_encode($ascii);
//$gzip = gzencode($ascii, 9);
//echo substr($gzip,10,strlen($gzip)-19);
}
?>
</textarea>
<br>
<input type="submit" class="button" value="&lt; DECODE &gt;">
</td></form>

<!--CHAR-->
<form method="POST"><td align=center valign=top>
<font face="verdana,arial,helvetica" size=1>

<b><a href="https://www.google.bg/search?client=opera&q=%5B+DEC+/+CHAR+%5D&sourceid=opera&ie=utf-8&oe=utf-8&channel=suggest&gws_rd=ssl">[ DEC / CHAR ]</a></b><br>
<textarea cols=48 rows=15 wrap="virtual" name="char" class="ff"><?php

if($char != "") echo $char;
else if($ascii != "") {
echo ord(substr($ascii, 0, 1));
for($i = 1; $i < strlen($ascii); $i = $i + 1)
echo " ".ord(substr($ascii, $i, 1));
}
?>
</textarea>
<br>
<input type="submit" class="button" value="&lt; DECODE &gt;">
</td></form><form method="POST"><td align=center valign=top>
<font face="verdana,arial,helvetica" size=1>

<b><a href="https://www.google.bg/search?client=opera&q=%5B+MESSAGE+DIGEST+/+CHECK+SUM+%5D&sourceid=opera&ie=utf-8&oe=utf-8&channel=suggest&gws_rd=ssl">[ MESSAGE DIGEST / CHECK SUM ]</a></b><br>
<textarea cols=48 rows=15 wrap="virtual" name="char" class="ff">
<?php
$tmpfname = tempnam("/tmp", "xlate");
$handle = fopen($tmpfname, "w");
fwrite($handle, $ascii);
fclose($handle);

#echo "MD2: ".exec("/home/paulscho/bin/md2 $tmpfname")."\n";
echo "MD2: ".openssl("md2",$tmpfname)."\n";
#echo "MD4: ".exec("/home/paulscho/bin/md4 $tmpfname")."\n";
echo "MD4: ".openssl("md4",$tmpfname)."\n";
echo "MD5: ".md5($ascii)."\n";
echo "CRC 8, ccitt, 16, 32 : ".
#  exec("/home/paulscho/bin/crc8 $tmpfname").", ".
#  exec("/home/paulscho/bin/crcc $tmpfname").", ".
#  exec("/home/paulscho/bin/crc16 $tmpfname").", ".
  exec("/usr/bin/crc32 $tmpfname")."\n\n";
#crc32($ascii)."\n\n";
echo "CRYPT (form: $ MD5? $ SALT $ CRYPT):\n".crypt($ascii)."\n";
echo "      (form: SALT[2] CRYPT[11]):\n".crypt($ascii,"ps")."\n\n";
#include("sha1lib.class.inc.php");
#$sha = new Sha1Lib;

#echo "SHA1:".base64_encode($sha->str_sha1($ascii))."\n";
$sha1 = explode("= ",exec("/usr/bin/openssl dgst -sha1 $tmpfname"));
echo "SHA1: $sha1[1]";
#$ascii = $sha->str_sha1($ascii);
#for($i = 1; $i < strlen($ascii); $i = $i + 1) {
#  $val = dechex(ord(substr($ascii, $i, 1)));
#  echo "".str_repeat("0", 2-strlen($val)).$val;
#}
echo "\n";
#echo "RIPEMD-160: ".splitn(60,exec("/home/paulscho/bin/ripemd160 $tmpfname"))."\n";
echo "RIPEMD-160: ".splitn(60,openssl("rmd160",$tmpfname))."\n";
#echo "SHA2-256: ".split32(exec("/home/paulscho/bin/sha2-256 $tmpfname"))."\n";
#echo "SHA2-384: ".split32(exec("/home/paulscho/bin/sha2-384 $tmpfname"))."\n";
#echo "SHA2-512: ".split32(exec("/home/paulscho/bin/sha2-512 $tmpfname"))."\n";
unlink($tmpfname);

function openssl($dgst = "sha1", $filename) {
$sha1 = explode("= ",exec("/usr/bin/openssl dgst -$dgst $filename"));
return trim($sha1[1]);
}
?>
</textarea>
<br>
( * This cannot be decoded )
</td></tr></form></table>

<sup>*</sup>Cannot be decoded easily (within my lifespan)
The source code for this page is available <a href="http://brigante.sytes.net/howto/php/encode-decode-binary-script.html">here</a><br>
Credit for this idea goes to http://nickciske.com/binary/ in its original form in 2000.

<?
function split32($text) {
	$string = "";
	for($i = 0; $i < strlen($text); $i = $i + 32) {
		$string = "$string\n  ".substr($text, $i, 32);
	}
	return $string;
}
function splitn($n,$text) {
	$string = "";
	for($i = 0; $i < strlen($text); $i = $i + $n) {
		$string = "$string\n  ".substr($text, $i, $n);
	}
	return $string;
}
?>

</center>

<?php
include 'footer.php';
?>
