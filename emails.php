<?php
   if (!empty($_GET['emails-list'])) {
// maximum emails to generate on each page
$maxemails = 100;
 
$tld = ARRAY(".com",".eu",".biz",".info",".com.au",".co.uk",".sg",".cn",".fr",".de",".org",".gov",".net",".no",".bg",".tw",".br",".hu",".ru");
SLEEP(2);
 
SRAND ((double) MICROTIME() * 1000000);
FOR ($i = 1; $i <= $maxemails; $i++) {
        $nextmail = "";
        $rnd = RAND(5,12);
        FOR ($a = 1; $a <= $rnd; $a++) {
                $tmp = RAND(97, 122);
                $nextmail .= CHR($tmp);
        }
        $fornavn = $nextmail;
        $nextmail .= "@";
        $rnd = RAND(7,12);
        FOR ($a = 1; $a <= $rnd; $a++) {
                $tmp = RAND(97, 122);
                $nextmail .= CHR($tmp);
        }
        $rnd = RAND(1,COUNT($tld));
        $nextmail .= $tld[$rnd];
        ECHO "<a href=\"mailto:$nextmail\">".$nextmail."</a><br>\n";
}
  } else {
?>
<!DOCTYPE html>
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="keywords" content="fake emails generator, fake emails, free emails list, dead emails, dead emails generator, emails generator, online emails generator, generator emails, fake mails, fake email addresses, emails grabber, email finder, fake email, dead mails, 10000 emails free list, free list with 10000 emails, 10000 emails, emails list, spam poison, spam poison button, spam bot poison, million emails">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Fake Emails Generator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Generator for fake emails</h2>

If you need 100 random generated fake emails:)<br />
Generator for dead emails...<br />
It's good for spammers poisoning...<br /> 
It's good for mass email attack...<br />
Do you want more emails? - Well, just click da button more times:) or click Reload/Refresh button of your browser, or F5 key:) same:)<br /> 
<p>&nbsp;</p>
<form action="http://emails.cf/emails.php" method="get" target="_blank">
  <input type="hidden" name="emails-list" value="10000emails">
  <input type="submit" class="button" value="Generate 100 Fake Emails >>" >
</form>
<p>&nbsp;</p>
For Webmasters:<br />
<p>&nbsp;</p>
Here is html code for your website:<br />
<p>Choose Button Style. Copy and paste the code of the page you want in your site. That's all! You already have a SpamBotPoison button.</p>
Get the code of this button:  <img src="img/sbp.gif"/><br />
<textarea style="color: blue; background-color: transparent" rows="9" onfocus="this.select()" onclick="this.select()" readonly>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="emails list" target="_blank"><img src="http://emails.cf/sbp.gif"/></a><!-- END SBP CODE-->
</textarea> 
<p>&nbsp;</p>
Get the code of this button:  <img src="img/sp.gif"/><br />
<textarea style="color: blue; background-color: transparent" rows="9" onfocus="this.select()" onclick="this.select()" readonly>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="emails list" target="_blank"><img src="http://emails.cf/sp.gif"/></a><!-- END SBP CODE-->
</textarea> 
<p>&nbsp;</p>
Get the code of this button:  <img src="img/sbp.png"/><br />
<textarea style="color: blue; background-color: transparent" rows="10" onfocus="this.select()" onclick="this.select()" readonly>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="emails list" target="_blank"><img src="http://emails.cf/sbp.png"/></a><!-- END SBP CODE-->
</textarea> 
<p>&nbsp;</p>
Get the code of this button:  <img src="img/sp.png"/><br />
<textarea style="color: blue; background-color: transparent" rows="9" onfocus="this.select()" onclick="this.select()" readonly>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="emails list" target="_blank"><img src="http://emails.cf/sp.png"/></a><!-- END SBP CODE-->
</textarea> 
<p>&nbsp;</p>
Get the code of this button:  <img src="img/sp1.png"/><br />
<textarea style="color: blue; background-color: transparent" rows="10" onfocus="this.select()" onclick="this.select()" readonly>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="emails list" target="_blank"><img src="http://emails.cf/sp1.png"/></a><!-- END SBP CODE-->
</textarea> 
<p>&nbsp;</p>
Get the code of this button:  <img src="img/spb.gif"/><br />
<textarea style="color: blue; background-color: transparent" rows="10" onfocus="this.select()" onclick="this.select()" readonly>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="emails list" target="_blank"><img src="http://emails.cf/spb.gif"/></a><!-- END SBP CODE-->
</textarea> 
<p>&nbsp;</p>

<p>Buttons in action:</p>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="SpamBotPoison Button" target="_blank"><img src="http://emails.cf/sbp.gif"/></a>
<!-- END SBP CODE-->
<p>&nbsp;</p>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="SpamBotPoison Button" target="_blank"><img src="http://emails.cf/sp.gif"/></a>
<!-- END SBP CODE-->
<p>&nbsp;</p>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="SpamBotPoison Button" target="_blank"><img src="http://emails.cf/sbp.png"/></a>
<!-- END SBP CODE-->
<p>&nbsp;</p>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="SpamBotPoison Button" target="_blank"><img src="http://emails.cf/sp.png"/></a>
<!-- END SBP CODE-->
<p>&nbsp;</p>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="SpamBotPoison Button" target="_blank"><img src="http://emails.cf/sp1.png"/></a>
<!-- END SBP CODE-->
<p>&nbsp;</p>
<!-- BEGIN SBP CODE-->
<a href="http://emails.cf/emails.php?emails-list=10000emails" title="SpamBotPoison Button" target="_blank"><img src="http://emails.cf/spb.gif"/></a>
<!-- END SBP CODE-->
<p>&nbsp;</p>
Powered by: <a href="http://spampoisonbutton.pe.hu" target="_blank">SpamPoisonButton.pe.hu</a><br /> 

    <h4>Info::.</h4>
Fight Against Spammers is mission imposible:) but try:)
This webpage will feeding spammers:) 
You can do it too! Grab the button!
</div>

<div id="right-help">
    <h4>Help::.</h4>
WWW Robots (also called wanderers, grabbers, spiders, crawlers or bots) are programs that crawl the Web continually retrieving linked pages. When a email spammer's bot visits your website, blog, forum, etc, all pages and sites linked to it will be searched looking for email addresses.<br />
Now you can fight back against their robots! Just grab the button:) All you have to do is link to this page so that whenever a spammer's robot scans your page, it will be sucked into this one. To link to this page, just use this simple button.<br />
These links will redirect email harvesting bots to trap sites that will feed it with an almost infinite loop of dynamically generated fake email addresses, mostly on known spammer owned domains! This will render their harvested lists practically useless and of no commercial value.
Every suscribe form on websites is guaranty for spam:) so don't put your email into subscribe forms!
</div>

<div id="right-help">
    <h4>About the button::.</h4>
This button is not dangerous for your website! But your site will reload maybe little slowly:) because it must try to load small image from my websites: tools.eti.pw, emails.cf or others<br />
Anyway just use it:) don't worry!
</div>
Write your email in your websites by this way:<br />
<textarea style="color: blue; background-color: transparent" rows="11" onfocus="this.select()" onclick="this.select()" readonly>
<SCRIPT TYPE="text/javascript">
<!-- 
emailE=('yournameofemail@' + 'yahoo.com')
document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')
//-->
</script>
</textarea> 
<br>or so in this way:<br />
<textarea style="color: blue; background-color: transparent" rows="3" onfocus="this.select()" onclick="this.select()" readonly>
nameofmail<span>@</span>yahoo.com
</textarea> 
<br />
<p>Just use formatted text,styled text about this symbol @  - use CSS :) give class or id (id or class css selectors)
This two methods are simple, but effective.
You can do it with text2image generators too, but i don't like this:) 
You can write: name @ yahoo . com   , but i don't like this:)
or just to create 'submit contact email form' - this is the best solution:)</p>

<?php
include 'footer.php';
?>

<?php
  }
?>
