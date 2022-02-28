<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="2 DAYS">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="www.eti.pw" />
<meta NAME="description" content="Simple Webpage Analyzer SEO Tool">
<META name="keywords" content="webpage analyzer, seo analyzer, seo">
<title>Simple Webpage Analyzer</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

		<div id="page">
			<div id="content">
<h2>Simple Webpage Analyzer</h2>
	<div class="entry">
	<div class="box">
	<form method="get">
				<div class="alt1_40">
					URL
				</div>
				<div class="alt1">
                                   <input type="text" name="url" size="30" maxlength="100" />
				</div>
				<div class="alt1_40">
					Phrase
				</div>
				<div class="alt1">
                                       <input type="text" name="phrase" size="30" maxlength="100" />
				</div>
      <input type="submit" class="button" value="Analyze" />
				<div class="clear"></div>


<br />

</form>

<style type="text/css">

td    { margin: 0px; padding: 0px; }
table { border-collapse: collapse; }

div.check
{
  width: 500px;
  margin-bottom: 20px;
  font-family: Courier New, Monospace;
  font-size: 11px;
	word-wrap: break-word;
}

div.check div.row0 { background-color: #FFFFFF; }
div.check div.row1 { background-color: #F0F0F0; }

div.check table { width:  100%; }

div.check table div.head   { color: blue; }
div.check table div.good     { float: right; padding-left: 10px; color: blue; }
div.check table div.bad { float: right; padding-left: 10px; color: red; }

div.check table div.head a { text-decoration: none; color: blue; }
div.check table a          { text-decoration: none; color: green; }

</style>

<?php

$EXACT_PHRASE = -1;

function phrase_search($phrase, $format, $text)
{
     global $EXACT_PHRASE;
     $regex = sprintf($format, $phrase);
     if (preg_match($regex, $text, $matches)) {
	  return $EXACT_PHRASE;
     } else {
	  $words = split(" ", $phrase);
	  $wc = 0;
	  foreach ($words as $word) {
	       $regex = sprintf($format, $word);
	       if (preg_match($regex, $text, $matches)) {
		    $wc++;
	       }
	  }
	  return $wc;
     }
}

function fetch_html($url)
{
	if (function_exists('curl_init')) {
     $ch = curl_init($url);
     curl_setopt($ch,CURLOPT_REFERER, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HEADER, 0);
     curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
     $code = curl_exec($ch);
     curl_close($ch);
	} else {
		$r = new HTTPRequest($url);
		$code = $r->DownloadToString();
	}
     return $code;
}

function get_description($wc, $name)
{
     global $EXACT_PHRASE;
     switch ($wc) {
     case $EXACT_PHRASE:
	  return "Your exact phrase appears in ".$name." text.<td> <div class=\"good\">GOOD</div></td></tr></table></div>";
     case 0:
	  return "None of the words in your phrase appear in ".$name." text.<td><div class=\"bad\">BAD</div></td></tr></table></div>";
     default:
	  return $wc." of the words from your phrase appear in ".$name." text.<td> <div class=\"good\">GOOD</div></td></tr></table></div>";
     }
}

$url = $_GET["url"];
$phrase = $_GET["phrase"];
if ($url and $phrase) {
     $html = fetch_html($url);

     $link_text = "/\<a.*?\>.*?%s.*?\<\/a\>/i";
     $bold_text = "/\<b\>.*?%s.*?\<\/b\>/i";
     $header_text = "/\<h.*?\>.*?%s.*?\<\/h/i";
     $meta_text = "/\<meta name=\"description\" content=\".*?%s.*?\"/i";
     $title_text = "/\<title>.*?%s.*?\<\/title\>/i";
     $meta_kw_text = "/\<meta name=\"keywords\" content=\".*?%s.*?\"/i";

     echo "<strong>Results</strong>";
     echo "<div class=\"check\">";
     echo "<div class=\"row2\"><table><tr><td>";
     echo get_description(phrase_search($phrase, $link_text, $html), "link");
     echo "<div class=\"row1\"><table><tr><td>";
     echo get_description(phrase_search($phrase, $bold_text, $html), "bold");
     echo "<div class=\"row2\"><table><tr><td>";
     echo get_description(phrase_search($phrase, $header_text, $html), "header");
     echo "<div class=\"row1\"><table><tr><td>";
     echo get_description(phrase_search($phrase, $meta_text, $html), "meta");
     echo "<div class=\"row2\"><table><tr><td>";
     echo get_description(phrase_search($phrase, $title_text, $html), "title");
     echo "<div class=\"row1\"><table><tr><td>";
     echo get_description(phrase_search($phrase, $meta_kw_text, $html), "meta keywords");
     echo "</div>";
}
?>

</div>
</div>
					<p class="meta">&nbsp;</p>
				</div>

			</div>
			
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>

			<!-- end #widebar -->
		</div>
		<!-- end #page -->

	</div>
	<!-- end #wrapper2 -->
	
</div>
<?php
include 'footer.php';
?>
