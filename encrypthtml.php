<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="encrypt html, encrypt, decrypt, html encrypter">
<title>Encrypt HTML</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Source Code Encrypter</h2>
HTML Encrypter - "Protect" your HTML code from newbie<br>

<script language="JavaScript"> function doencrypt(theform) { if (theform.code.value == "") { alert("Insert HTML code"); return false; } else { enctext=encrypt(theform.code.value); codetocopy="<Script Language='Javascript'>\n"; codetocopy+="<!-- HTML Encryption by brigante.sytes.net -->\n"; codetocopy+="<!--\n"; codetocopy+="document.write(unescape('"+enctext+"'));\n"; codetocopy+="//-->\n"; codetocopy+="</Script\>"; theform.ecode.value=codetocopy; theform.sac.disabled = false; } return false; } function sandc(thisform) { thisform.ecode.focus(); thisform.ecode.select(); copytext=thisform.ecode.createTextRange(); copytext.execCommand("Copy"); alert("You may now paste the code in your website...\nÏîñòàâåòå êîäà â ñàéòà ñè..."); } function encrypt(tx) { var hex=''; var i; for (i=0; i<tx.length; i++) { hex += '%'+hexfromdec(tx.charCodeAt(i)) } return hex; } function hexfromdec(num) { if (num > 65535) { return ("err!") } first = Math.round(num/4096 - .5); temp1 = num - first * 4096; second = Math.round(temp1/256 -.5); temp2 = temp1 - second * 256; third = Math.round(temp2/16 - .5); fourth = temp2 - third * 16; return (""+getletter(third)+getletter(fourth)); } function getletter(num) { if (num < 10) { return num; } else { if (num == 10) { return "A" } if (num == 11) { return "B" } if (num == 12) { return "C" } if (num == 13) { return "D" } if (num == 14) { return "E" } if (num == 15) { return "F" } } } </script> 

<form name="pageform" onsubmit="return doencrypt(this);"> 
<table border="0" style="border-collapse: collapse" width="100%"> 
<tr> 
<td width="956" height="91" valign="top"> 
<table style="border-collapse: collapse" width="100%" height="76" class="tooltop"> 
<tr> 
<td> 
<table border="0" style="border-collapse: collapse" width="100%" cellspacing="5"> 
<tr> 
<td height="28" width="924"></td> 
</tr> 
<tr> 
<td width="931" height="21"> 
<textarea rows="11" name="code" cols="68" style="border: 1px solid #093A6B; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1; width:100%"></textarea>
</td> 
</tr> 
<tr> 
<td width="931" height="21"> 
<input type="submit" class="button" onClick="doencrypt(pageform);" value="Encrypt" style="float: left">
</td> 
</tr> 
</table> 
</td> 
</tr> 
</table> 
</td> 
</tr> 
<tr> 
<td width="956"> &nbsp;</td> 
</tr> 
<tr> 
<td width="956"> 
<textarea rows="11" readonly name="ecode" cols="68" class="toolbot" style="width:100%"></textarea>
</td> 
</tr> 
<tr> 
<td width="956"> 
<input type="button" class="button" value="Select" onClick="sandc(pageform);" name="sac" disabled="true" style="float: left">
</td> 
</tr> 
</table> 
</form>

<SCRIPT LANGUAGE="JavaScript">
<!--
var Words;

function SetWords(word) {
Words=unescape(word.value);
}

function SetNewWords(form) {
var NewWords;
NewWords = Words
form.NewWords.value = NewWords;
}

// -->
</SCRIPT>

<FORM METHOD="POST">
<P class="style1">Use this form for decrypt:
<P><TEXTAREA NAME="Word" style="background-color: white;VALUE="" ROWS="8" COLS="100" wrap="VIRTUAL" ONCHANGE="SetWords(this)">
</TEXTAREA>
<P><INPUT TYPE=BUTTON class="button" ONCLICK="SetNewWords(this.form)" 
VALUE="Decrypt">
<P><TEXTAREA NAME="NewWords" style="background-color: white;VALUE="" ROWS="8" COLS="100" wrap="VIRTUAL">
</TEXTAREA>
</FORM>

<?php
include 'footer.php';
?>
