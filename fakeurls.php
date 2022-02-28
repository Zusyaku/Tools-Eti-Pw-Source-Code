<?php
   if (!empty($_GET['fake-url'])) {
// maximum urls to generate on each page
$maxemails = 10000;
 
$tld = ARRAY(".com",".eu",".biz",".info",".com.au",".co.uk",".sg",".cn",".fr",".de",".org",".gov",".net",".no",".bg",".tw",".br",".hu",".ru");
SLEEP(2);
 
SRAND ((double) MICROTIME() * 1000000);
FOR ($i = 1; $i <= $maxemails; $i++) {
        $nextmail = "http://";
        $rnd = RAND(5,12);
        FOR ($a = 1; $a <= $rnd; $a++) {
                $tmp = RAND(97, 122);
                $nextmail .= CHR($tmp);
        }
        $fornavn = $nextmail;
        $nextmail .= ".";
        $rnd = RAND(7,12);
        FOR ($a = 1; $a <= $rnd; $a++) {
                $tmp = RAND(97, 122);
                $nextmail .= CHR($tmp);
        }
        $rnd = RAND(1,COUNT($tld));
        $nextmail .= $tld[$rnd];
        ECHO "<a href=\"$nextmail\">".$nextmail."</a><br>\n";
}
  } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="fake links, fake urls, fake urls generator, fake links generator">
<title>Fake URLs Generator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Fake Links Generator</h2>

<form action="fakeurls.php" method="get" target="_blank">
  <input type="hidden" name="fake-url" value="10000URLs">
  <input type="submit" class="button" value="Generate 10000 Fake URLs >>" >
</form>

<?php
include 'footer.php';
?>

<?php
  }
?>
