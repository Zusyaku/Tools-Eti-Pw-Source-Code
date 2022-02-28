<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="c class checker">
<title>C Class Checker</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>C Class Checker</h2>
	
Select Domains<br>
<br>
<form method="get">

				<div class="alt1_40">
					First Domain
				</div>
				<div class="alt1_40">
      <input type="text" name="domain1" size="26"/>
				</div>
				<div class="alt1_40">
					Second Domain
				</div>
				<div class="alt1">
      <input type="text" name="domain2" size="26"/>
				</div>
      <div class="alt1_40">
			<input type="submit" class="button" value="Check" />

<br />

</form>

<?php
function get_bits($domain)
{
     $domain = split('\.', gethostbyname($domain));
     $domain = $domain[0]*256*256*256 + $domain[1]*256*256 + $domain[2]*256 + $domain[3];
     return $domain;
}

function get_ip_class($ip)
{
     if (($ip>>31) == 0) return 'A';
     if (($ip>>30) == 2) return 'B';
     if (($ip>>29) == -2) return 'C';
     if (($ip>>28) == -2) return 'D';
     if (($ip>>28) == -1) return 'E';
}
$domain1 = $_GET['domain1'];
$domain2 = $_GET['domain2'];
if($domain1 and $domain2) {
     $d1 = parse_url($domain1, PHP_URL_HOST);
     $d2 = parse_url($domain2, PHP_URL_HOST);
     $d1 = $d1 ? $d1 : $domain1;
     $d2 = $d2 ? $d2 : $domain2;

     $ip1 = get_bits($d1);
     $ip2 = get_bits($d2);
     $c1 = get_ip_class($ip1);
     $c2 = get_ip_class($ip2);
     $last8 = 0x000000ff;
     if (($c1 == 'C') && ($c2 == 'C') && (($last8 & $ip1) == ($last8 & $ip2))) {
	  $r = ' ';
	  $r2 = ' (<b>'.join('.', array_slice(split('\.', gethostbyname($d1)), 0, -1)).'.*</b>)';
     } else {
	  $r = ' <b>NOT</b> ';
	  $r2 = '';
     }
     echo '<strong>Class C information</strong><br />';
     echo 'The 2 domains are '.$r.' hosted on the same Class C IP range.'.$r2.'<br />';
     echo $d1.' is hosted on Class '.$c1.' IP '.gethostbyname($d1).'<br />';
     echo $d2.' is hosted on Class '.$c2.' IP '.gethostbyname($d2).'<br />';
}
?>
<?php
include 'footer.php';
?>
