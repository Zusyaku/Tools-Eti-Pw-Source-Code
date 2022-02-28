<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="online tools, free online tools, online tools with source code, web tools, webmaster tools ">
<title>ETI's Free Online Tools</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Contact Form</h2>

<!-- ############################################email form################################################### -->

<?php
extract($_POST);

if (!file_exists("config.php")) 
	{
$host = $_SERVER[HTTP_HOST ];
$path = pathinfo($_SERVER['PHP_SELF']);
$file_path = $path['dirname'];
print "<h1>PHP mailer</h1>";
exit;
	}
include "config.php";


if ($sendto_email == "changeme@example.com")
	{
print "<h1>PHP mailer</h1>";
exit;
	} 
if (empty ($senders_name)) 
	{
	$error = "1";
	$info_error .= $lang_noname . "<br>"; 
	}
if (empty ($senders_email)) 
	{
	$error = "1";
	$info_error .= $lang_noemail . "<br>";  
	}
if (empty ($mail_subject)) 
	{
	$error = "1";
	$info_error .= $lang_nosubject . "<br>";  
	}
if (empty ($mail_message))  
	{
	$error = "1";
	$info_error .= $lang_nomessage . "<br>";  
	}
if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,6}$", $senders_email))
	{
	$error = "1";
	$info_error .= $lang_invalidemail . "<br>"; 
	}
if (empty ($security_code))  
	{
	$error = "1";
	$info_error .= $lang_nocode . "<br>";  
	}
elseif ($security_code != $randomness)  
	{
	$error = "1";
	$info_error .= $lang_wrongcode . "<br>";  
	}
if ($showlink != "no")
	{
	$link = "<br><span style=\"font-size: 10px;\"> </span>";
	}
if ($error == "1") 
	{
	$info_notice = "<span style=\"color: " . $error_colour . "; font-weight: bold;\">" . $lang_error . "</span><br>"; 
	
	if (empty ($submit)) 
		{
		$info_error = "";
		$info_notice = $lang_notice;
		}	

	function Random() 
		{
		$chars = "ABCDEFGHJKLMNPQRSTUVWZYZ23456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 4) 
			{
			$num = rand() % 32;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++; 
			} 
		return $pass; 
		}
	$random_code = Random();
	$mail_message = stripslashes($mail_message);

	print "<form name=\"BELLonline_email\" method=\"post\" style=\"margin: 0;\" action=\"\">
  <table  border=\"0\" cellspacing=\"2\" cellpadding=\"2\">
    <tr align=\"$title_align\" valign=\"top\">
      <td colspan=\"2\"><span style=\"$title_css\">$lang_title</span></td>
    </tr>
    <tr align=\"left\" valign=\"top\">
      <td colspan=\"2\">$info_notice$info_error</td>
    </tr>
    <tr valign=\"top\">
      <td align=\"right\">$lang_name</td>
      <td align=\"left\"><input name=\"senders_name\" type=\"text\" class=\"mailform_input\" id=\"senders_name\" style=\"width: $input_width;\" value=\"$senders_name\" maxlength=\"32\"></td>
    </tr>
    <tr valign=\"top\">
      <td width=\"100\" align=\"right\">$lang_youremail</td>
      <td align=\"left\"><input name=\"senders_email\" type=\"text\" class=\"mailform_input\" id=\"senders_email\" style=\"width: $input_width;\" value=\"$senders_email\" maxlength=\"64\"></td>
    </tr>
    <tr valign=\"top\">
      <td width=\"100\" align=\"right\">$lang_subject</td>
      <td align=\"left\"><input name=\"mail_subject\" type=\"text\" class=\"mailform_input\" id=\"mail_subject\" style=\"width: $input_width;\" value=\"$mail_subject\" maxlength=\"64\"></td>
    </tr>
    <tr valign=\"top\">
      <td width=\"100\" align=\"right\">$lang_message</td>
      <td align=\"left\"><textarea name=\"mail_message\" cols=\"36\" rows=\"5\" style=\"width: $input_width;\" class=\"mailform_input\">$mail_message</textarea></td>
    </tr>
    <tr align=\"left\" valign=\"top\">
      <td width=\"100\">$lang_confirmation</td>
      <td><input name=\"security_code\" type=\"text\" id=\"security_code\" size=\"5\"> 
        &nbsp;&nbsp;&nbsp;&nbsp;<b>$random_code</b></td>
    </tr>
    <tr valign=\"top\">
      <td colspan=\"2\" align=\"right\"><input name=\"randomness\" type=\"hidden\" id=\"randomness\" value=\"$random_code\">
      <input name=\"submit\" class=\"button\" type=\"submit\" id=\"submit\" value=\"$lang_submit\"></td>
    </tr>
  </table>
</form>";
	}
else
	{
	
	
	
	if ($checkdomain == "yes") 
		{
		$sender_domain = substr($senders_email, (strpos($senders_email, '@')) +1);
		$recipient_domain = substr($sendto_email, (strpos($sendto_email, '@')) +1);
		if ($sender_domain == $recipient_domain)
			{
			print "You can not send a message from this domain ($sender_domain)";
			exit;
			}		
		}
		
		
	$info_notice = $lang_sent;
	$mail_message = stripslashes($mail_message);
	$senders_email = preg_replace("/[^a-zA-Z0-9s.@-_]/", "-", $senders_email);
	$senders_name = preg_replace("/[^a-zA-Zа-яА-Я0-9s]/", " ", $senders_name);
	$headers = "From: $senders_name <$senders_email> \r\n";
	$headers .= "X-Mailer: PHP mailer \r\n";
    $headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
	mail($sendto_email, $mail_subject, $mail_message, $headers);
	print "  <table  border=\"0\" cellspacing=\"2\" cellpadding=\"2\">
    <tr align=\"$title_align\" valign=\"top\">
      <td colspan=\"2\"><span style=\"$title_css\">$lang_title</span></td>
    </tr>
    <tr align=\"$title_align\" valign=\"top\">
      <td colspan=\"2\">$info_notice</td>
    </tr>
    <tr valign=\"top\">
      <td width=\"100\" align=\"right\">$lang_name</td>
      <td align=\"left\"><b>$senders_name</b></td>
    </tr>
    <tr valign=\"top\">
      <td width=\"100\" align=\"right\">$lang_youremail</td>
      <td align=\"left\"><b>$senders_email</b></td>
    </tr>
    <tr valign=\"top\">
      <td width=\"100\" align=\"right\">$lang_subject</td>
      <td align=\"left\"><b>$mail_subject</b></td>
    </tr>
    <tr valign=\"top\">
      <td width=\"100\" align=\"right\">$lang_message</td>
      <td align=\"left\"><b>$mail_message</b></td>
    </tr>
  </table>";
	}
print $link;
?>
<!-- ###########################################end########################################################### -->
<?php
include 'footer.php';
?>
