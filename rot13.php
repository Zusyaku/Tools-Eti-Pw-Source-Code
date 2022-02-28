<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Encode Decode ROT13, ROT5, ROT18, ROT47, ROT30">
<meta name="keywords" content="rot13, rot5, rot18, rot47, encode decode rot13, encode decode rot5, encode decode rot18, encode decode rot47, rot30">
<title>Encode-Decode ROT13 ROT5 ROT18 ROT47 ROT30</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Online rot13 rot5 rot18 rot47 rot30 encode-decode</h2>

<?php

$text = str_rot13($_POST['rot13']);
echo '
<h3>Encode-Decode rot13</h3>
Type in the message you want to encode in rot13 or paste<br>
rot13 encoded text into the text field.<br>
<br />
<form action="" method="post" enctype="multipart/form-data">
<textarea rows="8" cols="65" name="rot13" placeholder="letters only"></textarea><br/>

<input type="submit" class="button" value="Encode/Decode to rot13" />
<form>';
echo "<br>Output: $text";
?>

<br />

<?php 
function rot5($string){ 
for ($i = 0, $j = strlen( $string); $i < $j; $i++)  
{     
    $char = ord($string[$i]);      
    if( ($char >= 48  && $char <= 57))  
    { 
        $char += 5;          
        if( $char > 57) 
        { 
            $char -= 10; 
        } 
    }     
    $string[$i] = chr($char); 
}  
 return $string; 
} 
?>
<p><h3>Encode-Decode rot5</h3></p>
<form method="POST" action="">
  <p>
  <font face="Verdana" size="2"><b></b></font><font face="Verdana"><font size="2"><br>
  </font>
  <textarea rows="8" name="string" cols="46"  placeholder="numbers only" style="font-family: Courier New; font-size: 10pt"><?php echo stripslashes($_POST['string']);?></textarea></font></p>
  <p><font face="Verdana"><input type="submit" class="button" value="Encode/Decode to rot5"></font></p>
</form>

<?php
if (isset($_POST['string'])) {
$_POST['string'] = ereg_replace("\n","k3Cm\n",$_POST['string']);
?>
<p>Output: <?php echo rot5($_POST['string']);?></p>
<?php
}
?>

<br />

<?php

function rot47($text) {
    $ersetzen = array(    "!" => "P" , "\""=> "Q" , "#" => "R" , "\$"=> "S" , "%" => "T" ,
                        "&" => "U" , "\'"=> "V" , "(" => "W" , ")" => "X" , "*" => "Y" ,
                        "+" => "Z" , "," => "[" , "-" => "\\", "." => "]" , "/" => "^" ,
                        "0" => "_" , "1" => "`" , "2" => "a" , "3" => "b" , "4" => "c" ,
                        "5" => "d" , "6" => "e" , "7" => "f" , "8" => "g" , "9" => "h" ,
                        ":" => "i" , ";" => "j" , "<" => "k" , "=" => "l" , ">" => "m" ,
                        "?" => "n" , "@" => "o" , "A" => "p" , "B" => "q" , "C" => "r" ,
                        "D" => "s" , "E" => "t" , "F" => "u" , "G" => "v" , "H" => "w" ,
                        "I" => "x" , "J" => "y" , "K" => "z" , "L" => "{" , "M" => "|" ,
                        "N" => "}" , "O" => "~" , "P" => "!" , "Q" => "\"" ,"R" => "#" ,
                        "S" => "\$" ,"T" => "%" , "U" => "&" , "V" => "\'" ,"W" => "(" ,
                        "X" => ")" , "Y" => "*" , "Z" => "+" , "[" => "," , "\\"=> "-" ,
                        "]" => "." , "^" => "/" , "_" => "0" , "`" => "1" , "a" => "2" ,
                        "b" => "3" , "c" => "4" , "d" => "5" , "e" => "6" , "f" => "7" ,
                        "g" => "8" , "h" => "9" , "i" => ":" , "j" => ";" , "k" => "<" ,
                        "l" => "=" , "m" => ">" , "n" => "?" , "o" => "@" , "p" => "A" ,
                        "q" => "B" , "r" => "C" , "s" => "D" , "t" => "E" , "u" => "F" ,
                        "v" => "G" , "w" => "H" , "x" => "I" , "y" => "J" , "z" => "K",
                        "{" => "L" , "|" => "M" , "}" => "N" , "~" => "O" );

    return stripslashes(strtr($text, $ersetzen));
}
?>

<p><h3>Encode-Decode rot47</h3></p>
<form method="POST" action="rot13.php">
  <p>
  <font face="Verdana" size="2"><b></b></font><font face="Verdana"><font size="2"><br>
  </font>
  <textarea rows="8" name="text" cols="46" style="font-family: Courier New; font-size: 10pt"><?php echo stripslashes($_POST['text']);?></textarea></font></p>
  <p><font face="Verdana"><input type="submit" class="button" value="Encode/Decode to rot47"></font></p>
</form>

<?php
if (isset($_POST['text'])) {
$_POST['text'] = ereg_replace("\n","\n",$_POST['text']);
?>
<p>Output: <?php echo rot47($_POST['text']);?></p>
<?php
}
?>

<?php

function rot30($rot30) {
    $zameni = array(    
                        "а" => "к" , "б" => "л" , "в" => "м" , "г" => "н" , "д" => "о" ,
                        "е" => "п" , "ж" => "р" , "з" => "с" , "и" => "т" , "й" => "у" ,
                        "ф" => "х" , "ц" => "ч" , "ш" => "ъ" , "щ" => "ь" , "ю" => "я" ,
                        "0" => "@" , "1" => "€" , "2" => "%" , "3" => "–" , "4" => "+" ,
                        "5" => "*" , "6" => "§" , "7" => "=" , "8" => "." , "9" => "!" ,

                        "к" => "а" , "л" => "б" , "м" => "в" , "н" => "г" , "о" => "д" ,
                        "п" => "е" , "р" => "ж" , "с" => "з" , "т" => "и" , "у" => "й" ,
                        "х" => "ф" , "ч" => "ц" , "ъ" => "ш" , "ь" => "щ" , "я" => "ю" ,
                        "@" => "0" , "€" => "1" , "%" => "2" , "–" => "3" , "+" => "4" ,
                        "*" => "5" , "§" => "6" , "=" => "7" , "." => "8" , "!" => "9" );

    return stripslashes(strtr($rot30, $zameni));
}
?>

<br />

<p><h3>Encode-Decode rot30 Cyrillic</h3></p>
<form method="POST" action="rot13.php">
  <p>
  <font face="Verdana" size="2"><b></b></font><font face="Verdana"><font size="2"><br>
  </font>
  <textarea rows="8" name="rot30" cols="46" style="font-family: Courier New; font-size: 10pt" placeholder="bulgarian letters only and numbers | само на кирилица и цифри"><?php echo stripslashes($_POST['rot30']);?></textarea></font></p>
  <p><font face="Verdana"><input type="submit" class="button" value="Encode/Decode to rot30 Cyrillic"></font></p>
</form>

<?php
if (isset($_POST['rot30'])) {
$_POST['rot30'] = ereg_replace("\n","\n",$_POST['rot30']);
?>
<p>Output|Изход: <?php echo rot30($_POST['rot30']);?></p>
<?php
}
?>

<hr />
<h4>Info::.</h4>

<p>
The ROT algorithms are simple shift ciphers. They are not designed to provide any cryptographic security, but to provide an easy means to obscure pieces of text such as messages posted in an online forum or in the Usenet. For example, you want to post the solution of a puzzle. With regard to readers who want to solve the puzzle on their own, you should reveal the solution only ROT encoded. By that, it is guaranteed that those readers who have (accidentally) chosen to read your message will not find out the solution. 
<br />
The four ROT algorithms ROT5, ROT13, ROT18 and ROT47 vary in the characters that can be encoded/decoded:<br />
ROT5 covers the numbers 0-9<br />
Rot13 , Rot-13 or rot13 (short for rotate 13) is a simple letter substitution encryption scheme. It works by replacing the current english letters in a message with those that are 13 positions ahead in the alphabet.<br />
ROT13 covers the 26 upper and lower case letters of the Latin alphabet (A-Z, a-z)<br />
ROT18 is a combination of ROT5 and ROT13<br />
ROT47 covers all printable ASCII characters, except empty spaces. Besides numbers and the letters of the Latin alphabet, the following characters are included: !"#$%&'()*+,-./:;<=>?[\]^_`{|}~<br />
ROT30 are letters and numbers - encryption scheme with Bulgarian AlphaBet (Cyrillic alphabet). Cyrillic alphabet used by many Slavic peoples and asian people like mongolian (Mongolia). Over 350 million people use the Bulgarian AlphaBet. Yes, Cyrillic alphabet is Bulgarian! This is very important!
It's not Russian, not Byzantium, Macedonian or Serbian! The country of Bulgaria is very ancient - over 1300 years! Bulgarian alphabet derived from Greek alphabet, and Latin ABC too! The Greek and Latin ABC derived from Egyptians and Phoenician. Cyrillic alphabet is now used from Bulgarians of course, Russians, Belarusians, Serbians, Macedonians (Bulgarian land and belongs to Greece too; macedonians are bulgarians and some greeks, and there are serbians too), Ukrainians, Mongolians and others. The Cyrillic is very powerful alphabet! There are exactly only 2 powerful alphabets and they are: Latin and Bulgarian alphabet - Cyrillic! There are too: Greece AlfaBeta, Georgian ABC (Grusia, grusian), Armenian, Korean. There are only 6 modern alphabets now in all world! Others are Logograms, hieroglyphics and they are not ABC's! The Korean Alphabet (Hangeul) is like logogram too, but with not so many characters like arabic, chinese, japanese logograms, hieroglyphics.
</p>

<?php
include 'footer.php';
?>
