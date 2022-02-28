<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="pagerank checker, check pagerank, pr checker, pr check, google pagerank checker, social checker, seo tools">
<title>Google Pagerank Checker</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<div>

<h2>Google Pagerank Checker</h2>
<br />

<form method="get" action="">
Enter URL<br />
<input type="text" name="url" id="url" style="height:40px;" placeholder="Enter URL">
<input type="submit" class="button" value="Check PageRank">
</form>
<br>
<?php
include 'google-pagerank-checker-class.php';
$pr = new PR();
$pagerank = htmlentities($_GET['url']);
$pagerank = $pr->get_google_pagerank($_GET['url']);
echo "Google PageRank: " . $pagerank;
?>
<br />
<br>
Why Check Pagerank is Important<br />

Google PageRank and also known as PR is an important part of search engine optimization or SEO, the ranking system measure how important the website or web page by calculating link popularity, keyword and content. Check Pagerank score is number ranged from 0-10 and the higher pagerank your site has will help for better position on Google Search Engine.

</div>

<?php
include 'footer.php';
?>
