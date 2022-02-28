<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content=".htaccess Ban Generator, htaccess ban generator">
<title>.htaccess Ban Generator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>.htaccess Ban Generator</h2>

Restrict by IP address or Domain<br>
<br>
You can use .htaccess to ban or allow access to your web site by IP address or Domain.<br>
<br>
<?php
function fnExecute(){

	$iplist = split("\n", $_GET["ips"]);
	$denyht = $_GET["denyht"];
	$redirect = $_GET["redirect"];

	if (sizeof($iplist) > 0) {

		 echo "<strong>.htaccess</strong><br />";
		 echo "<textarea rows=\"14\" cols=\"40\">";
		 echo "# BAN USER BY IP\n";
		 echo "order allow,deny\n";
		 echo "allow from all\n";
		 }
                 foreach($iplist as $ip) {
		 	 echo "deny from $ip\n";
                         }
		 if ($denyht == "true") {
			  echo "## PREVENT VIEWING OF .HTACCESS\n";
			  echo "<Files .htaccess>\n";
			  echo "order allow,deny\n";
			  echo "deny from all\n";
			  echo "</Files>\n";
		 }
                 if ($redirect == "true") {
			  echo "#Redirect to URL\n";
			  echo "ErrorDocument 403 http://google.com\n";
		 }

		 echo "</textarea>";
		 echo "<br/><br/><br/>";
	}

?>

<form method="get">
Enter IPs, followed by line break. List IP addresses. List one IP address per line.<br>
<br />Your IP List:<br>
    <textarea name="ips"></textarea>
<br>
<br>
<br>
<input type="checkbox" name="denyht" value="true" />Deny browser access to generated .htaccess file. This is only needed if: <br>
Your .htaccess file is in a web accessible directory.<br>
Your server isn't configured to disable browser access to .htaccess. (this is not common)<br>
<input type="checkbox" name="redirect" value="true" />Redirect. Send the visitor to this url http://google.com if they are denied access. You can change the URL with other website:)<br>
<input type="submit" class="button" value="Create .htaccess" />
  <div class="clear"></div>
  <br />
</form>
<br>
<?php fnExecute(); ?>
<br>
Valid IP Addresses<br>
<br>
IP addresses are in the form xxx.xxx.xxx.xxx and each of these four numbers is from 0-255<br>
You can enter partial addresses to restrict larger blocks of addresses: <br>
1.2.3.4	 -Blocks one specific IP address<br>
1.2.3.	 -Blocks IP address in the range 1.2.3.0 to 1.2.3.255 (ie.. 1.2.3.xxx)<br>
1.2.	 -Blocks IP address in the range 1.2.xxx.xxx<br>
1.2	 -Blocks IP address in the range 1.2xx.xxx.xxx<br>
or just domain name<br>

Be careful when blocking blocks of IPs as you might be blocking legitimate traffic!<br>

<?php
include 'footer.php';
?>
