<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="links extractor, link extractor, extract links, how to extract links, get links, get urls">
<title>Link Extractor</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<div>

<h2>Link Extractor</h2>
This tool will enable you to extract links from a specific web page.<br />
<br>
<?php
	$request_url = htmlentities($_GET['url']);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $request_url);	// The url to get links from
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);	// We want to get the respone
	$result = curl_exec($ch);
 
	$regex='|<a.*?href="(.*?)"|';
	preg_match_all($regex,$result,$parts);
	$links=$parts[1];
	foreach($links as $link){
		echo $link."<br>";
	}
	curl_close($ch);
?>


<form method="get" action="">
<p>Enter URL: <input type="text" name="url" id="url">
              <input type="submit" class="button" value="Get"></p>
</form>

</div>

<?php
include 'footer.php';
?>
