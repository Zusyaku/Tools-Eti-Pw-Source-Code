<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="internet speed converter, bandwidth speed converter, bandwidth speed, internet speed convertor, speed meter convertor, speed convertor, speed converter">
<title>Internet Speed Converter</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<div>

<h2>Internet Speed Converter</h2>

<center>
<p>&nbsp;</p>
<p><span style="color:#0AF2F2">Internet Speed Converter:</span></p>

<script LANGUAGE="JavaScript"> 
function calcul()
{
var n=document.getElementById("N").value;
var t=document.getElementById("t").value;
var nb=parseInt(n);
   
   if(isNaN(nb))
   {
   alert("Enter number! Въведи число!");
   }
   else
   {
    if(t=='Mbps')
	{nb=nb*1024;}
	else {if(t=='Gbps')
		{ nb=nb*1024*1024;}
		else {if(t=='KBps')
		{ nb=nb*8;}
			else {if(t=='MBps')
			{ nb=nb*1024*8;}
			else {if(t=='GBps')
			{ nb=nb*1024*1024*8;}
			}}}}
			  
				document.getElementById("Kbps").innerHTML ="<font color='#D60202'>"+nb+"</font>"+" Kilobit per sec (Kbps)";
				document.getElementById("Mbps").innerHTML ="<font color='#D60202'>"+nb/1024+"</font>"+" Megabit per sec (Mbps)";
				document.getElementById("Gbps").innerHTML ="<font color='#D60202'>"+nb/(1024*1024)+"</font>"+" Gigabit per sec (Gbps)";
				document.getElementById("KBps").innerHTML ="<font color='#D60202'>"+nb/8+"</font>"+" Kilobyte per sec (KBps) - <font color='#D60202'>u must know this</font>";
				document.getElementById("MBps").innerHTML ="<font color='#D60202'>"+nb/(1024*8)+"</font>"+" Megabyte per sec (MBps)";
				document.getElementById("GBps").innerHTML ="<font color='#D60202'>"+nb/(1024*1024*8)+"</font>"+" Gigabyte per sec (GBps)";
   }
 
}
</script>
      <form name="form" > 
        <div align="center"> 
          <input type="text" id="N"> 
          <select name="t" id="t"> 
            <option value="Kbps">Kilobit per sec(Kbps) </option> 
            <option value="Mbps">Megabit per sec(Mbps) </option> 
            <option value="Gbps">Gigabit per sec(Gbps) </option> 
            <option value="KBps">Kilobyte per sec(KBps) </option> 
            <option value="MBps">Megabyte per sec(MBps) </option> 
	    <option value="GBps">Gigabyte per sec(GBps) </option> 
          </select> 
          <input type="button" class="button" name="b" value="Convert" onClick="calcul()"> 
        </div> 
      </form> 
      <p align="center"></p></td> 
  </tr></table> 
<p><font color='#0AF2F2'>
	  <div align="center"  id="Kbps">Kilobit per sec (Kbps)</div> 
          <div align="center"  id="Mbps">Megabit per sec (Mbps)</div> 
	  <div align="center"  id="Gbps">Gigabit per sec (Gbps)</div>
	  <div align="center"  id="KBps">Kilobyte per sec <font color='#D60202'>(KBps)</font></div> 
	  <div align="center"  id="MBps">Megabyte per sec (MBps)</div> 
	  <div align="center"  id="GBps">Gigabyte per sec (GBps)</div> 
</font></p>
<p>&nbsp;</p>

<p>
<small>
1 Megabit per sec  ( Mbps ) = 1 024 Kilobit per sec Kbps<br />
1 Gigabit per sec ( Gbps ) = 1 024 Mbps = 1 048 576 Kbps<br />
1 Kilobyte per sec ( KBps ) = 8 Kbps<br />
1 Megabyte per sec ( MBps ) = 1 024 KBps = 8192 Kbps<br />
1 Gigabyte per sec ( GBps) = 1 024 MBps = 8 388 608 Kbps<br />
</small>
</p>
</center>

</div>

<?php
include 'footer.php';
?>
