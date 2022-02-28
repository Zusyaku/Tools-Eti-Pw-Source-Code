<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="character count, word count, word counter, character counter, characters calculator, words counter, letter count, letters counter, symbols counter, symbols count, online word count, online character count">	
<meta name="description" content="Online Character Counter - Letter Count - Word Count" />
<title>Character Count</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Symbols, Letter, Word, Character Counter</h2>

<p>Write or paste your text into this online Character counter:</p>

<form method="POST">

<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%">
<textarea style="width: 550px;height: 200px;" name="charcount" wrap="virtual"></textarea>
      </td>
    </tr>
    <tr>
      <td width="100%"><div align="right"><p><button type="button" class="button" onClick="countit(this)">Calculate Characters</button> <input type="text" name="displaycount" style="width: 50px;height: 20px;"></p>
      </td>
    </tr>
  </table>
</form>

<script language="JavaScript">
function countit(what){

formcontent=what.form.charcount.value
what.form.displaycount.value=formcontent.length
}
</script>

<br />

<p>Write or paste your text into this online Word counter:</p>

<form method="POST" name="wordcount">
<script language="JavaScript">
function count(){
var formcontent=document.wordcount.wordcount2.value
formcontent=formcontent.split(" ")
document.wordcount.wordcount3.value=formcontent.length
}
</script>
<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="100%"><textarea name="wordcount2" style="width: 550px;height: 200px;" wrap="virtual"></textarea></td>
    </tr>
    <tr>
      <td width="100%"><div align="right"><p><button type="button" class="button" onClick="count()">Calculate Words</button> <input type="text" name="wordcount3" style="width: 50px;height: 20px;"></p>
      </td>
    </tr>
  </table>
</form>
<br />
<p>This is a free online calculator which counts the number of characters, words, letters, symbols in a text.</p>

<br />

<?php
include 'footer.php';
?>
