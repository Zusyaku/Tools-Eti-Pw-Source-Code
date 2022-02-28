<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="skype user status, skype user status detector, skype status, skype status user">
<title>Skype User Status Detector</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Detect Skype user status</h2>

Sorry, but this online tool no longer works, because da microsoft's bastards stopped da service - no API<br />
<br />
<?php
function get_skype_status($username, $image = false, $icon = false ){

    if($image && $icon)
    {
        return "http://mystatus.skype.com/smallicon/".$username;
    }

    else if($image)
    {
        return "http://mystatus.skype.com/".$username;
    }

    else
    {
        $url = "http://mystatus.skype.com/".$username.".xml";

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($curl);
        curl_close($curl);
        
        $pattern = '/xml:lang="en">(.*)</';
        preg_match($pattern,$data, $match); 
        
        return $match[1];   
    }
}
$status = "";
if(isset($_POST['status']))
{
// $ID = $_POST['status'];    only by this way it's not good idea to leave it:) because is not safe! you'll be cracked!
$ID = htmlentities($_POST['status'], ENT_QUOTES, 'UTF-8');   // therefore we will use 'htmlentities' php function

    $ico = get_skype_status("$ID", true, true);
    $status .= "<p>Skype status icon:</p>";
    $status .= "<p><img src='".$ico."'/></p>";

    $image = get_skype_status("$ID", true);
    $status .= "<p>Skype image:</p>";
    $status .= "<p><img src='".$image."'/></p>";

    $text = get_skype_status("$ID");
    $status .= "<p>Skype status is:</p>";
    $status .= "<p>$text</p>";
    $status = 'Skype ID: '.$ID.' status<br>'.$status.'<br>';
}

echo $status.'
    <form action="" method="post">
    <input type="text" name="status" id="status" style="width:300px;height:40px;" placeholder="Skype Username" />
    <input type="submit" value="Get Status" class="button" />
    <form>';
?>
<br />
<p>
Skype Status Checker - Check the status of a Skype user. View if a Skype user is online or offline. Use this free tool to check the status of a Skype user. Remember that the user has to be enabled the privacy option "Allow my online status to be shown on the web"(this is by default), else the output will always be "Unknown" or "Offline". The available status messages are: Unknown, Offline, Online, Away, Not Available, Do Not Disturb, Invisible and Skype Me.
</p>

<?php
include 'footer.php';
?>
