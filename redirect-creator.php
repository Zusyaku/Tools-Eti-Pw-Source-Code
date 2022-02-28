<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="meta refresh creator, meta refresh, redirect creator, redirect generator">
<title>Redirect Creator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<script>

function GenerateMeta()
{
var output;
output = '';

if(document.MetaForm.forward.checked)
{
	output += '<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"' + document.MetaForm.time.value + '; url=' +  document.MetaForm.redirect.value + '\">\n\n';
}
document.MetaForm.MetaCode.value = output;
}
</script>

<h2>Redirect Creator</h2>
Meta Refresh Generator<br>
<br>
<form name="MetaForm" id="MetaForm">
					<div style="line-height:10pt;">
					<input type="checkbox" name="forward" value="yes" checked="checked"/> Redirect to another site required some specified time set. <br>If you want redirect immediately, then put digit null (0) in seconds field.<br>
					</div>

					<div>
					<br>Redirection time (seconds)
					<input type="text" name="time" style="width: 50px;" value="10" /> <small>if you want redirect immediately, put 0</small>
					</div>

					<div>
					Redirection URL
					</div>
					<div class="alt1">
					<input type="text" name="redirect" size="20" value="http://" />
					</div>

<div class="clear"></div>
<div class="but" ><button type="button" class="button" name="submit"  onclick="GenerateMeta()"/>Make Meta Tag for Redirect</button><br/><br/>
</div>

<div style="text-align:center; color:#000000">
	Here are your Meta tag for your page<br>
	Copy and Paste the following onto your page inside the &lt;HEAD&gt; and
	&lt;/HEAD&gt; tag<br/><br/>
	<textarea name="MetaCode" rows="13" cols="74" style="width:92%;"></textarea><br/>
</div>

</form>

<br />

Info:<br>
Meta refresh is a method of instructing a web browser to automatically refresh the current web page or frame after a given time interval, using an HTML meta element with the http-equiv parameter set to "refresh" and a content parameter giving the time interval in seconds. It is also possible to instruct the browser to fetch a different URL when the page is refreshed, by including the alternative URL in the content parameter. By setting the refresh time interval to zero (or a very low value), this allows meta refresh to be used as a method of URL redirection.<br>
<a href="https://en.wikipedia.org/wiki/Meta_refresh" target="_blank">About Meta Refresh</a>

<?php
include 'footer.php';
?>
