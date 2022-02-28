<!DOCTYPE html>
<html lang="en">
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="send anonymous email, anonymous email, send email">
<title>Send Anonymous Email</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<head>

<script type="text/javascript">
var maxLength=500;
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

<h2>Send Anonymous Email</h2>

    <form action="" method="post">
     <ul>
       <label for="phoneNumber">Receiver's email name only:</label><br>
       <input type="text" name="phoneNumber" id="phoneNumber" placeholder="name" value=""/><br>
       <label for="carrier">The Carrier:</label><br>
       <input type="text" name="carrier" id="carrier" placeholder="yahoo.com" value=""/><br />
e.g. | yahoo.com | gmail.com | abv.bg | mail.bg | mail.ru |<br />or other domain of carrier | <br />just put the domain name of mail service<br />
<p></p>
       <label for="smsMessage">Your text message here:</label><br>
       <textarea name="smsMessage" id="smsMessage" style="width: 450px;height: 200px;" onKeyPress="return charLimit(this)" onKeyUp="return characterCount(this)" ></textarea>
       <p><strong><span id="charCount">500</span></strong> from 500 allowable</p>
       <input type="submit" class="button" name="sendMessage" id="sendMessage" value="Send Message" />
    </ul>
   </form>

<?php  
      
    if ( isset( $_REQUEST ) && !empty( $_REQUEST ) ) {  
     if (  
     isset( $_REQUEST['phoneNumber'], $_REQUEST['carrier'], $_REQUEST['smsMessage'] ) &&  
      !empty( $_REQUEST['phoneNumber'] ) &&  
      !empty( $_REQUEST['carrier'] )  
     ) {  
      $message = wordwrap( $_REQUEST['smsMessage'], 70 );  
      $to = $_REQUEST['phoneNumber'] . '@' . $_REQUEST['carrier'];  
      $result = @mail( $to, '', $message );  
      echo "<center><font color='red'>Message was sent to: $to </font></center><br />";  
     } else {  
      print '<center><font color="red">Not all information was submitted!</font></center><br />';  
     }  
    }  

?>
<br>
<p>Help for sending of anonymous email:</p>
You can use this service to send anonymous emails, but don't be evil:) <br />To do this, type the name of the mail, but without @ <br /> Only name of mail! Then u must enter carrier of mail(post) service! Like: yahoo.com or gmail.com, or hotmail.com ... and others ... <br /> 
<br />
Example: <br />
in field - Receiver's email name only:<br />
nameofmail <br />
field - The Carrier: <br />
yahoo.com <br />
<br />
In field "Receiver's email name only:" you must put only name, and in field "The Carrier:" only yahoo.com or other mail carrier service. <br />
You can try the Temporary Mail Service (Disposable Email Service) to receive emails. 
Visit <a href="http://postilion.eti.pw" target="_blank">Postilion.eti.pw</a>
<br />
Don't be evil and do not abuse! :) OK Enjoy!

<?php
include 'footer.php';
?>
