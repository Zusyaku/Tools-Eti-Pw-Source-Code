<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<META NAME="REVISIT-AFTER" CONTENT="2 DAYS">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="www.eti.pw" />
<meta NAME="description" content="Spider View">
<META name="keywords" content="spider view, spider viewer, spider search">
<title>Spider View Tool</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>Spider View</h2>

Spider Search<br>
<br>

<form method="post" name="pageform" action="spider-view.php"  onsubmit="return validate(this);">
View search for: <small>(without http://)</small><br>
<input type="text" name="domain" size="36"><br><br>
Keywords:<br>
<input type="text" name="keyword" size="30"><br>
<input type="submit" value="View" class="button">
</form>

<script language="JavaScript">
function validate(theform) {
if (theform.domain.value == "") { alert("No Domain"); return false; }
return true;
}
</script>

<?php

function strip_html_tags( $text )
{
    $text = preg_replace(
        array(
          // Remove invisible content
          /*  '@<head[^>]*?>.*?</head>@siu',*/
            '@<style[^>]*?>.*?</style>@siu',
            '@<script[^>]*?.*?</script>@siu',
            '@<object[^>]*?.*?</object>@siu',
            '@<embed[^>]*?.*?</embed>@siu',
            '@<applet[^>]*?.*?</applet>@siu',
            '@<noframes[^>]*?.*?</noframes>@siu',
            '@<noscript[^>]*?.*?</noscript>@siu',
            '@<noembed[^>]*?.*?</noembed>@siu',
          // Add line breaks before and after blocks
            '@</?((address)|(blockquote)|(center)|(del))@iu',
            '@</?((div)|(h[1-9])|(ins)|(isindex)|(p)|(pre))@iu',
            '@</?((dir)|(dl)|(dt)|(dd)|(li)|(menu)|(ol)|(ul))@iu',
            '@</?((table)|(th)|(td)|(caption))@iu',
            '@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
            '@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
            '@</?((frameset)|(frame)|(iframe))@iu',
        ),
        array(
            ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
            "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
            "\n\$0", "\n\$0",
        ),
        $text );
    return strip_tags( $text );
}

function extractBodyText($url){
	$html = @file_get_contents($url);
	//$html=strtolower($html);

    $fstr=(preg_match('/<html[^>]*>(.*?)<\/html>/si', $html, $regs)?$fstr=$regs[1]:$html);
    $rtrn=strip_html_tags($fstr);
    return $rtrn;
}
?>


<form method="get" name="pageform" action="spider-view.php"  onsubmit="return validate(this);">
<br>
<?php echo $_POST['domain'];?><br>
<br>
<?php
$tmpnewtext = extractBodyText("http://".$_POST['domain']);
echo $tmpnewtext;
?>


<?php
if($_POST['keyword']!='') {
$words=explode(strtolower($_POST['keyword']),strtolower($tmpnewtext));
$tmpcount=count($words);

?>
<br>
<br />
Your Keyword <strong><?php echo $_POST['keyword'];?></strong> appeared <?php echo $tmpcount;?> times

<?php
}
?>

</form>

<?php
include 'footer.php';
?>
