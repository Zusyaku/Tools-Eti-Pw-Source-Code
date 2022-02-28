<!DOCTYPE html>
<html lang="en">
<head>
<title>BackLinks Maker</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="backlinks maker, backlinks creator, backlinks, backlinks generator, url submit, submit url, create backlinks, backlink, addlink, addurl, pingmyurl, ping url" />
<meta name="description" content="Backlinks Creator, Submit URL, Backlinks Maker, Backlinks Generator" />
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Backlink Generator | Backlink Builder</h2>
<br />

<form method="POST" action="">
<i>Put URL: </i>
   <input type="text" name="url" id="url" style="width:300px;height:40px;" title="Enter URL without http://" placeholder="Enter URL without http://" />
   <input type="submit" name="submit" class="button" value="Build Backlinks" title="Go Add URL!" />
</form>  

<br />

<?php
$url = htmlentities($_POST['url'], ENT_QUOTES, 'UTF-8');

if (isset($_POST['url'])){

echo "Your website will be added to other sites and this is not so bad for your unknown, unpopular website :)<br /><hr>";
echo "<a href='https://validator.w3.org/check?uri={$url}' target='_blank'>https://validator.w3.org/check?uri={$url}</a> - OK<iframe src='https://validator.w3.org/check?uri={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.builtwith.com/{$url}' target='_blank'>https://www.builtwith.com/{$url}</a> - OK<iframe src='https://www.builtwith.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.alexa.com/siteinfo/{$url}' target='_blank'>https://www.alexa.com/siteinfo/{$url}</a> - OK<iframe src='https://www.alexa.com/siteinfo/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.google.com/webmasters/tools/mobile-friendly/?url={$url}' target='_blank'>https://www.google.com/webmasters/tools/mobile-friendly/?url={$url}</a> - OK<iframe src='https://www.google.com/webmasters/tools/mobile-friendly/?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://developers.google.com/speed/pagespeed/insights/?url={$url}' target='_blank'>https://developers.google.com/speed/pagespeed/insights/?url={$url}</a> - OK<iframe src='https://developers.google.com/speed/pagespeed/insights/?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.who.is/whois/{$url}/' target='_blank'>https://www.who.is/whois/{$url}/</a> - OK<iframe src='https://www.who.is/whois/{$url}/' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://search.monstercrawler.com/search/web?q={$url}' target='_blank'>https://search.monstercrawler.com/search/web?q={$url}</a> - OK<iframe src='https://search.monstercrawler.com/search/web?q={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.statshow.com/www/{$url}' target='_blank'>https://www.statshow.com/www/{$url}</a> - OK<iframe src='https://www.statshow.com/www/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$url}' target='_blank'>http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$url}</a> - OK<iframe src='http://free.pagepeeker.com/v2/thumbs.php?size=x&url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.gigablast.com/addurl?u=http%3A%2F%2F{$url}' target='_blank'>https://www.gigablast.com/addurl?u=http%3A%2F%2F{$url}</a> - OK<iframe src='https://www.gigablast.com/addurl?u=http%3A%2F%2F{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.urlrate.com/www/{$url}' target='_blank'>https://www.urlrate.com/www/{$url}</a> - OK<iframe src='https://www.urlrate.com/www/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://w3techs.com/sites/info/{$url}' target='_blank'>https://w3techs.com/sites/info/{$url}</a> - OK<iframe src='https://w3techs.com/sites/info/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://blogs.yandex.ru/pings/?status=success&url={$url}' target='_blank'>https://blogs.yandex.ru/pings/?status=success&url={$url}</a> - OK<iframe src='https://blogs.yandex.ru/pings/?status=success&url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://blogsearch.google.com/ping?url={$url}&btnG=Submit+Blog&hl=en' target='_blank'>https://blogsearch.google.com/ping?url={$url}&btnG=Submit+Blog&hl=en</a> - OK<iframe src='https://blogsearch.google.com/ping?url={$url}&btnG=Submit+Blog&hl=en' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='http://www.sitedossier.com/site/{$url}' target='_blank'>http://www.sitedossier.com/site/{$url}</a> - OK<iframe src='http://www.sitedossier.com/site/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='http://seo.eti.pw/analyser.php?site={$url}' target='_blank'>http://seo.eti.pw/analyser.php?site={$url}</a> - OK<iframe src='http://seo.eti.pw/analyser.php?site={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.copyscape.com/?q={$url}' target='_blank'>https://www.copyscape.com/?q={$url}</a> - OK<iframe src='https://www.copyscape.com/?q={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.siteliner.com/{$url}?siteliner=site-dashboard&siteliner-sort=scan_time&siteliner-from=1&siteliner-message=' target='_blank'>https://www.siteliner.com/{$url}?siteliner=site-dashboard&siteliner-sort=scan_time&siteliner-from=1&siteliner-message=</a> - OK<iframe src='https://www.siteliner.com/{$url}?siteliner=site-dashboard&siteliner-sort=scan_time&siteliner-from=1&siteliner-message=' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.siteworthtraffic.com/report/{$url}' target='_blank'>https://www.siteworthtraffic.com/report/{$url}</a> - OK<iframe src='https://www.siteworthtraffic.com/report/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://seo2.qwebdev.eu/analyser.php?site={$url}' target='_blank'>https://seo2.qwebdev.eu/analyser.php?site={$url}</a> - OK<iframe src='https://seo2.qwebdev.eu/analyser.php?site={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://website.informer.com/{$url}' target='_blank'>https://website.informer.com/{$url}</a> - OK<iframe src='https://website.informer.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://addurl.cf/add?url={$url}' target='_blank'>https://addurl.cf/add?url={$url}</a> - OK<iframe src='https://addurl.cf/add?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.similarweb.com/website/{$url}' target='_blank'>https://www.similarweb.com/website/{$url}</a> - OK<iframe src='https://www.similarweb.com/website/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://spyonweb.com/{$url}' target='_blank'>https://spyonweb.com/{$url}</a> - OK<iframe src='https://spyonweb.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.mustat.com/{$url}' target='_blank'>https://www.mustat.com/{$url}</a> - OK<iframe src='https://www.mustat.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.similarsites.com/site/{$url}' target='_blank'>https://www.similarsites.com/site/{$url}</a> - OK<iframe src='https://www.similarsites.com/site/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://isdownorblocked.eti.pw/index.php?addr={$url}&port=80' target='_blank'>https://isdownorblocked.eti.pw/index.php?addr={$url}&port=80</a> - OK<iframe src='https://isdownorblocked.eti.pw/index.php?addr={$url}&port=80' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.semrush.com/info/{$url}' target='_blank'>https://www.semrush.com/info/{$url}</a> - OK<iframe src='https://www.semrush.com/info/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://deepsee.io/domain/{$url}' target='_blank'>https://deepsee.io/domain/{$url}</a> - OK<iframe src='https://deepsee.io/domain/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://submit-url.tk/add?url={$url}' target='_blank'>https://submit-url.tk/add?url={$url}</a> - OK<iframe src='https://submit-url.tk/add?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://webrate.org/index.php/site/{$url}' target='_blank'>https://webrate.org/index.php/site/{$url}</a> - OK<iframe src='https://webrate.org/index.php/site/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://{$url}.blogranko.com' target='_blank'>https://{$url}.blogranko.com</a> - OK<iframe src='https://{$url}.blogranko.com' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.seoptimer.com/{$url}' target='_blank'>https://www.seoptimer.com/{$url}</a> - OK<iframe src='https://www.seoptimer.com/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://website.grader.com/tests/{$url}' target='_blank'>https://website.grader.com/tests/{$url}</a> - OK<iframe src='https://website.grader.com/tests/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='http://www.webdir.ga/add?url={$url}' target='_blank'>http://www.webdir.ga/add?url={$url}</a> - OK<iframe src='http://www.webdir.ga/add?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.easycounter.com/report/{$url}' target='_blank'>https://www.easycounter.com/report/{$url}</a> - OK<iframe src='https://www.easycounter.com/report/{$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";
echo "<a href='https://www.submiturl.tk/add?url={$url}' target='_blank'>https://www.submiturl.tk/add?url={$url}</a> - OK<iframe src='https://www.submiturl.tk/add?url={$url}' width='0' height='0' FRAMEBORDER=NO FRAMESPACING=0 BORDER=0 ></iframe><br />";

}

else {

print ("<br /><p>Submit your website to other 37</p>");

}
?>

<br />
Recommend:
<a href='https://www.backlinkr.net' target='_blank'>www.backlinkr.net</a> |
<a href='http://www.pingfarm.com' target='_blank'>www.pingfarm.com</a> |
<a href='https://www.excitesubmit.com' target='_blank'>www.excitesubmit.com</a> |
<a href='https://www.directorylib.com/backlink/' target='_blank'>www.directorylib.com</a> |
<a href='http://www.indexkings.com' target='_blank'>www.indexkings.com</a> |
<a href='https://www.pingmyurls.com' target='_blank'>www.pingmyurls.com</a> |
<a href='https://www.pingmylinks.com/addurl/' target='_blank'>www.pingmylinks.com</a> |
<a href='https://mytoolstown.com/backlink-maker/' target='_blank'>www.mytoolstown.com</a> |
<a href='https://useme.org' target='_blank'>www.useme.org</a> |
<a href='https://www.backlinks.cf' target='_blank'>www.backlinks.cf</a> |
<a href='http://addurl.cf' target='_blank'>www.addurl.cf</a>

<?php
include 'footer.php';
?>
