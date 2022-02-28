<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="sha1 hash generator, sha1, sha-1, sha-1 hash, sha1 generator">
<title>SHA1 Hash Generator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>SHA-1 Hash Generator</h2>

<p>SHA1 Encrypter</p>
<?php
//check if the form has been submitted
if(isset($_POST['SHA1'])) {

	$SHA1 = sha1($_POST['SHA1']);
}
?>
 
<p>SHA1 Value: <strong><?php echo $SHA1;?></strong></p>
 
<form action="" method="post">
       <label for="SHA1"></label>
SHA-1: <input name="SHA1" id="SHA1" type="text" /><br />
       <input type="submit" class="button" value="Create SHA1 Hash" />
</form>
<br />
What is SHA-1?<br />
<a href="https://en.wikipedia.org/wiki/SHA-1" target="_blank">Wikipedia.org/wiki/SHA-1</a>

</div>

<?php
include 'footer.php';
?>
