<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="dns lookup, dns, whois, who is, dns check">
<meta name="description" content="DNS Lookup - DNS Checker">
<title>Dns Lookup</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>DNS Lookup</h2>

<?php
$result = array();
$result_html = '';
if (isset($_POST['domain']) && !empty($_POST['domain'])) {
    $domain_regex = '/[a-z\d][a-z\-\d\.]+[a-z\d]/i';
    if (preg_match($domain_regex, $_POST['domain'])) {
        if ($url = parse_url($_POST['domain'])) {
            if (isset($url['host'])) {
                $result = dns_get_record($url['host'], DNS_A + DNS_AAAA + DNS_CNAME);
            } else if (isset($url['path'])) {
                $result = dns_get_record($url['path'], DNS_A + DNS_AAAA + DNS_CNAME);
            }
        }
    }

    if (empty($result)) {
        $result_html = '<hr>Nothing found or Domain Invalid';
    } else {
        foreach($result as $r) {
            reset($r);
            $host = current($r);
            $type = next($r);
            $value = next($r);
            $result_html .= sprintf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>\n", $host, $type, $value);
        }
        $result_html = "\n<table>\n$result_html</table>\n";
    }
}

?>

        <form method="post">
            <div class="form-inline">
                <label for="domain">Domain: </label>
                <input id="domain" type="text" name="domain" style="width:300px;height:40px;" value="<?=empty($_POST['domain'])?'':htmlentities($_POST['domain'])?>">
                <button type="submit" class="button">Dig</button>
        </form>
  
<br /><br />

<?=$result_html?$result_html:''?>

<br />

<?php
if(isset($_POST['domain']))
{
$file = htmlentities($_POST['domain'], ENT_QUOTES, 'UTF-8');
# old code with API
// echo '<iframe allowtransparency="true" height="250px" width="100%" src="https://api.hackertarget.com/dnslookup/?q='.$file.'" frameborder="0"></iframe>';

$grab = file_get_contents('https://api.hackertarget.com/dnslookup/?q='.$file.'');
echo "<p>".$grab."</p>";
}
?>

<br />

Server Location:
            <?
            // Free API from: ipstack.com
            // $geo = json_decode(file_get_contents('http://smart-ip.net/geoip-json'));  // api temp unavailable
            // echo $geo->countryName; // it was before time by this way :)
            $geo = json_decode(file_get_contents('http://api.ipstack.com/'.$file.'?access_key=your-free-api-key-here&format=1'));
               echo $geo->country_name;
            ?>  

<p><a href='./whois.php'>Try with Whois?</a></p>

</div>

<?php
include 'footer.php';
?>
