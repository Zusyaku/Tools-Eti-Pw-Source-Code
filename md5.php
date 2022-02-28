<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="md5 hash generator, md5, md5 hash, md5 generator">
<title>MD5 Hash Generator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>MD5 Hash Generator</h2>

<p>MD5 Encrypter</p>

<?php
//check if the form has been submitted
if(isset($_POST['md5me'])) {
	//MD5 encode the submitted content
	$md5ed = md5($_POST['md5me']);
}
?>
 
Please input text to be encrypted to MD5<br />
<form action="" method="post">
    <label for="md5me"></label>
    md5 ( <input name="md5me" id="md5me" type="text" /> )<br />
    <input type="submit" class="button" value="Create MD5 Hash" />
</form>
<p>MD5 checksum (value) -> <strong><?php echo $md5ed;?></strong></p>
<br />
What is MD5?<br />
MD5 stands for 'Message Digest algorithm 5'. MD5 algorithm is used as a cryptographic hash function or a file fingerprint. Often used to encrypt password in databse, MD5 can also generate a fingerprint file to ensure that a file is the same after a transfer for example. A MD5 hash is composed of 32 hexadecimal characters. MD5 means a 128-bit encryption algorithm, generating a 32-character hexadecimal hash. This algorithm is not reversible. It is normally impossible to find the original word from the md5 hash. Enter a word in the MD5 encrypter form above to know the corresponding MD5 hash.<br />
<a href="https://en.wikipedia.org/wiki/MD5" target="_blank">Wikipedia.org/wiki/MD5</a>

<?php
include 'footer.php';
?>
