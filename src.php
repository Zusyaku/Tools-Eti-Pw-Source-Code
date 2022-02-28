<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Free Web Tools Source Code">
<meta name="keywords" content="online tools, online tools source code, webmaster tools source code, free online tools, online tools with source code, web tools, web tools source codes, webmaster tools, online tools src">
<title>ETI's Free Online Tools source codes</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools src</a>

<h2>Source code of this lovely project :)</h2>

src: HTML, CSS, JS, PHP<br /><br />

<?php
if(isset($_POST['captcha']))

session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo '<form method="post" action="dnl.php?zipfile=tools.eti.pw.zip">
<input type="submit" class="button" value="DOWNLOAD" />
</form><br>File Size: 82.7 MB / 167 MB
';
}

else {
echo '
<form method="post" action="">
<img src="captcha.php" title="ETI Simple Captcha Code" width="50" height="18" />
<input class="input2" name="captcha" type="text" size="4" maxlength="4" placeholder="digits" title="Put the digits here" />
<input type="submit" class="button" value="SHOW DOWNLOAD LINK" />
</form><br />Last update of src: 13.12.2021<br>No changelog, sorry! I am too lazy to describe changelog :)';
}
?>

<br />

<textarea style="width: 500px; height: 200px; color:black;">
OK here it is some changelog :)
_______________________________________________________________
(?.12.2021) bitcoin-address-generator, youtube-redirect.php, facebook-url-redirect.php, multiple-urls-opener.php,
ripple-xrp-wallet-address-generator.php have been added
(13.12.2021) cpu-core-estimator.php has been added
and there is change in index.php file ... the tools are 161 now
</textarea>

<br />
<h2>DONATE</h2>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VCPCDUM6WPW4W">
<button type="image" name="submit" alt="PayPal - The safer, easier way to pay online!" style="cursor:pointer"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0"></button>
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>1. via Paypal with credit/debit card :)<br /><br />
2.<a href="https://www.paypal.me/ETIdev" target="_blank">PayPal.Me</a><br />
3.<a href="https://www.buymeacoffee.com/ETIdev" target="_blank">BuyMeCoffee</a><br />
4.<a href="https://liberapay.com/ETI/" target="_blank">LiberaPay.com</a><br />
5.<a href="https://www.patreon.com/ETIdev" target="_blank">Patreon</a><br />
6.<a href="https://watches.eti.pw" target="_blank">Buy Watches from me :)</a><br />
7.Bitcoin: 1EE6F7okLsvQKndyA3MEEm9fWqL2Caxr1c<br />
8.Ethereum: 0x37448F43246e1F307F776882b0269e5781bcC698<br />
9.Litecoin: Lc4ERJhALsrDhQJyi3LGECJQJNKqgeh9SZ<br />
10.Dogecoin: DEiFYcXB9J9kzKz2299dQ5UqTqrk9D14ff<br />
11.Please, click on the banners :) pls excuse me for these too many ads in the site ... THANK YOU!<br /><br />

My Sponsors:<br />
From website www.buymeacoffee.com is: Anonymous man - 3$<br />
Via Paypal: Bruce (www.handsonline.net). He donated 20$<br />
Ruben Rosales and Joshua Medina (www.rafled.com)<br /><br />
All my sponsors will be shown here and in: eti.pw, eti.wtf, eti.ninja, trakietz.tk<br />
The Money goes for domains renew.<br />
Thanks to all! I appreciate Your help! Thank You very much and God bless You!<br /><br />

<?php
include 'footer.php';
?>
