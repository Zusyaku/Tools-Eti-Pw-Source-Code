<?php

class TiktokDownloader
{
    public function Download($url)
    {

        if (preg_match("#tiktok.com#",$url))
        {
        // m.tiktok.com Checking if logged in or not
        if (preg_match("#Redirecting to <a href=#", $this->cUrl($url)))
        {
            $newUrl = explode('<a href="', $this->cUrl($url));
            $newUrl = explode('">', $newUrl[1]);
            $url = $newUrl[0];
        }

        preg_match_all('#<video playsinline="" loop="" src="(.*)#', $this->cUrl($url) , $Result);
        @$ResultExp = explode('<video playsinline="" loop="" src="', $Result[0][0]);
        @$ResultFinally = explode('preload="', $ResultExp[1]);
        return $ResultFinally[0];
        }
        else
        {
            return null;
        }
    }

    private function cUrl($url)
    {
        $user_agent = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/79.0.3945.130 Safari/537.36';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
     
    }
}

$Tiktok = new TiktokDownloader();

if (isset($_POST['q'])) {
    $Url = $_POST['q'];
    if (!empty($Url)) {
        if (filter_var($Url, FILTER_VALIDATE_URL)) {
        	if($Tiktok->Download($Url) != null){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TikTok Video Downloader</title>
    <LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="description" content="Online Tiktok Video Downloader">
    <meta name="keywords" content="tiktok video downloader, online tiktok video downloader, tiktok downloader, tiktok videos download, tiktok download"/>
    <meta name="author" content="www.eti.pw">
    <meta name="robots" content="all"/>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>TikTok Video Downloader</h2>

<video width="300" height="300" controls>
<source src="<?php echo $Tiktok->Download($Url); ?>" type="video/mp4">
Your browser does not support the video tag!
</video>
<br /><br />Right click on the video clip and "Save Video As..."<br />
<a href="<?php echo $Tiktok->Download($Url); ?>" class="button" target="_blank">Download TikTok Video</a><br /><br />			
<button onclick="window.history.back();" class="button">Go Back</button>

</body>
</html>

<?php
include 'footer.php';
?>

<?php
    } else {
        echo 'The video could not be resolved! Check the url!';
    }
    } else {
        echo 'Url is not in the correct format!';
    }
    } else {
        echo 'Put TikTok URL!';
    }

    } else {
?>

<html lang="en">
<head>
    <title>TikTok Video Downloader</title>
    <LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="description" content="Online TikTok Video Downloader">
    <meta name="keywords" content="tiktok video downloader, online tiktok video downloader, tiktok downloader, tiktok videos download, tiktok download"/>
    <meta name="author" content="www.eti.pw">
    <meta name="robots" content="all"/>
    <link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>TikTok Video Downloader</h2>

<form action="" method="post">
<input type="text" name="q" placeholder="Put TikTok link here"><br>
<!--<button type="submit" class="button">Download</button>-->
<input type="submit" class="button" value="Download">
</form>

Example:
<br /> https://www.tiktok.com/@abner_vlogs/video/6788696684525309189
<br /> or
<br /> https://m.tiktok.com/v/6788696684525309189.html 

</body>
</html>

<?php
include 'footer.php';
?>

<?php } ?>
