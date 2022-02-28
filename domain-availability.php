<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Check Domain Availability online">
<meta name="keywords" content="domain availability, free online tools, web tools, webmaster tools">
<title>Domain Availability</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Check Domain Availability</h2>
 
<form action="" method="get">
Enter Domain Name:
<input type="text" name="domain_name">
<input type="submit" name="check" class="button" value="Check">
</form>
 
<?php
 
if(isset($_GET['check'])) {
 
 if (!empty($_GET['domain_name'])){

 $name_domain = trim(htmlentities($_GET['domain_name'])).$_GET['suffix'];
 $response = @dns_get_record($name_domain, DNS_ALL);

 if(empty($response)){
 echo "<p style='color:green;' >Domain $name_domain is available.</p>";
 
 }

else{
 echo "<p style='color:red;'>Domain $name_domain has taken.</p>";
 }
 }

else {
 echo "<p style='color:red;'>ERROR: Domain name can not be left empty!</p>";
 }
}
?>

<?php
include 'footer.php';
?>
