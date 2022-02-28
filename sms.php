<!DOCTYPE html>
<html lang="en">
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="free sms, send free sms, web tools, free online tools, sms, send mms">
<title>Send Free SMS</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<head>

<script type="text/javascript">
var maxLength=102;
function charLimit(el) {
    if (el.value.length > maxLength) return false;
    return true;
}
function characterCount(el) {
    var charCount = document.getElementById('charCount');
    if (el.value.length > maxLength) el.value = el.value.substring(0,maxLength);
    if (charCount) charCount.innerHTML = maxLength - el.value.length;
    return true;
}
</script>

</head>
<body>
   
<a href="./">Free Online Tools</a>

<h2>Send Email2SMS</h2>

    <form action="" method="post">
       <label for="phoneNumber">Phone Number:  (without +)</label><br>
       <input type="text" name="phoneNumber" id="phoneNumber" placeholder="359" value=""/><br>
       <label for="carrier">Your Carrier:</label><br>
       <input type="text" name="carrier" id="carrier" placeholder="sms.mtel.net" value=""/><br />
<small>e.g. | sms.mtel.net | sms.globul.bg | <br />or other domain of carrier | <br />just put the domain name of your gsm operator...</small><br />
<br>
       <label for="smsMessage">Your text message here:</label><br>
       <textarea name="smsMessage" id="smsMessage" style="width: 330px;height: 200px;" onKeyPress="return charLimit(this)" onKeyUp="return characterCount(this)" ></textarea>
       <p><strong><span id="charCount">102</span></strong> from 102 allowable</p>
       <input type="submit" class="button" name="sendMessage" id="sendMessage" value="Send Message" />
   </form>

<?php  

      // sms sending email2sms ... use captcha because many spammers will use this form :)

    if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {  
     if (  
     isset( $_REQUEST['phoneNumber'], $_REQUEST['carrier'], $_REQUEST['smsMessage'] ) &&  
      !empty( $_REQUEST['phoneNumber'] ) &&  
      !empty( $_REQUEST['carrier'] )  
     ) {  
      $message = wordwrap( $_REQUEST['smsMessage'], 70 );  
      $to = $_REQUEST['phoneNumber'] . '@' . $_REQUEST['carrier'];  
      $result = @mail( $to, '', $message );  
      echo "<font color='red'>Message was sent to: $to </font><br />";  
     } else {  
      print '<font color="red">Not all information was submitted!</font><br />';  
     }  
    }  

?>
<br>

<?php
include 'footer.php';
?>
