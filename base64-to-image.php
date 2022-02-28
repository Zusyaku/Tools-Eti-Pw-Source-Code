<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="base64 to image, base64 to picture, base64 to image converter, base64, base64 images, base64 converter">
<title>Base64 to Image</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Base64 to Picture</h2>

<br />

<?php
$data = htmlspecialchars($_GET['string']);
$data = base64_decode($data);

$im = imagecreatefromstring($data);
if ($im !== false) {
    header('Content-Type: image/png');
    imagepng($im);
    imagedestroy($im);
}
else {
    echo '';
}
?>

<form method="POST" action="">
<input type="text" name="string" id="string" style="width:500px;height:40px;" title="Enter Base64 string" placeholder="Enter base64 string"/>
<input type="submit" style="width:180px;height:35px" class="button" title="Gimme Image" value="Generate Image!"/>
</form>

<?php
include 'footer.php';
?>
