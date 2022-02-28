<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Vbox7.com downloader|grabber">
<meta name="keywords" content="vbox7 downloader, vbox7.com downloader, vbox7 grabber, vbox7 download, сваляй клипове от vbox7, online vbox7 downloader, сваляне от vbox7, vbox7 downloader online, сваляне субтитри vbox7.com, сваляне от вибокс7, вибокс7 даунлоудер, вибокс7 даунлоудър, сваляне vbox7, как да свалям от vbox7">
<title>Vbox7.com downloader|grabber</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Vbox7.com downloader</h2>

<form method="post" action=""> 
Put link with http://<br> 

<?php

if ($_POST['formbtn']) {
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename="'.$_POST['filename']);
	echo $_POST['subs'];
	exit;
}

$Errs = array('Video_not_found'=>'<font color="red">eti: my lord, i can not find da video file!</font><br /><font color="green">brigante: why?</font><br /><font color="red">eti: i do not know how:)</font><br /><font color="green">brigante: because u are so stupid bot yo, just see how the others will succeed...</font>', 'Wrong_url'=>'Wrong address - url!');

//Преобразуване на секундите във формат час:минути:секунди
function to_time($Secs)
	{
	$Hours = floor($Secs/3600);
	$Hours = ($Hours < 10)?"0$Hours":$Hours;
	$Reminder = $Secs%3600;
	$Minutes = floor($Reminder/60);
	$Minutes = ($Minutes<10)?"0$Minutes":$Minutes;
	$Secs = $Reminder%60;
	$Secs = ($Secs<10)?"0$Secs":$Secs;
	return "$Hours:$Minutes:$Secs";
	}

//Конвертиране на субтитрите към нашенска кодова таблица ;)
function replace_unicode_escape_sequence($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}

function utf8_to_cp1251($s)
    {
	
    for ($c=0;$c<strlen($s);$c++)
        {
        $i=ord($s[$c]);
        if ($i<=127) $out.=$s[$c];
        if ($byte2)
			{
            $new_c2=($c1&3)*64+($i&63);
            $new_c1=($c1>>2)&5;
            $new_i=$new_c1*256+$new_c2;
            if ($new_i==1025)
				{
                $out_i=168;
                } else
				{
                if ($new_i==1105)
					{
                    $out_i=184;
                    }
					else
						{
						$out_i=$new_i-848;
						}
                }
                $out.=chr($out_i);
                $byte2=false;
            }
            if (($i>>5)==6)
				{
                $c1=$i;
                $byte2=true;
				}
        }
    return $out;
	}

//Обработка на подадения адрес
if ($_POST['address']) {	
$_POST['address'] = trim($_POST['address']);


//Извличане на домейна
$addr=parse_url($_POST['address']);
$domain = explode('.', $addr['host']);
$tld = array_pop($domain);
$domain = strtolower(array_pop($domain).'.'.$tld);
switch ($domain) {
	case 'vbox7.com':

		preg_match("/play:(.*)/", $_POST["address"], $n);
		//съдържанието на страницата от този адрес съдържа
                //адреса на видеофайла, както и субтитрите
		$Address = "http://www.vbox7.com/etc/ext.do?key=".$n[1];
		$content = base64_encode($Address); //За препредаване адеса към секцията за дърпане на субтитри
		$Address = urldecode(file_get_contents($Address, FILE_TEXT));
                //Извличане адреса на видеофайла
		preg_match("/flv_addr=(.*?)&/", $Address, $n);
		if (!$n[1]) {
			$Err = $Errs['Video_not_found'];
			break;
		}
		$t = str_replace("http//", "", $n[1]);
		$Urls = array("<a href=\"$t\">$t</a><br />");
		//Сглобяване адреса за дърпане на субтитрите
		$v = @basename($n[1], ".flv");
		$Subs = array("<a href=\"?subs=$content&domain=vbox7.com&v=$v\">$v.srt</a><br />");
		$_GET["domain"] = 'vbox7.com';
		$_GET["subs"] = $content;
		$_GET["v"] = $v;
		
	break;
	case 'youtube.com':

		$Logo = '<a id="logo" href="http://www.youtube.com" title="www.youtube.com">
		<img src="./youtube.png" alt="youtube logo" /></a>';
		//Извличане ID-то на видеото
		parse_str($addr['query'], $v);
		$v = $v['v'];
		
		//=============Извличане адресите на видеото
		
		 //Извличане съдъжанието на подадената станицата
		$content = @file_get_contents($_POST['address'], FILE_TEXT);
		if (!$content) {
			$Err = $Errs['Wrong_url'];
			break;
		}
		preg_match("/flashvars=(.*?)\" /", $content, $vars); //Извличане параметрите на вградения flash 
		
		//Окастряне на излишните неща
		$vars = $vars[1];
		$vars = str_replace("\\u0026", "&", $vars);
		
		$vars = urldecode(stripslashes((htmlspecialchars_decode($vars, ENT_NOQUOTES))));
		parse_str($vars, $vars);

		//Показван в удобeн вид на променливите, подавани към flash плеъра
		//echo "<pre>"; foreach ($vars as $k=>$vv) { echo "### $k # $vv\r\n\r\n\r\n" ; } echo "</pre>";
		$vid = $vars['video_id'];
		
		//Извличане на инфомация за наличните за изтегляне видео файлове
		//Внимание - резултата от извикването на този адрес зависи от извикващия
		//$vars["url_encoded_fmt_stream_map"] = str_replace("url=", null, $vars["url_encoded_fmt_stream_map"]);
		$vars = file_get_contents('http://www.youtube.com/get_video_info?video_id='.$vid);
		parse_str($vars, $vars);
		//urldecode($vars['url_encoded_fmt_stream_map']);
		
		//Извличане на списъка с възможните адеси към видеото
		$modes=array(5=>"[240].flv", 34=>"[360].flv", 35=>"[480].flv", 18=>"[360].mp4", 22=>"[720].mp4", 37=>"[1080].mp4", 
			38=>"[3072].mp4", 43=>"[360].WebM", 44=>"[480].WebM", 45=>"[720].WebM",  17=>"[144].3gp");
		$urls = $vars['url_encoded_fmt_stream_map'];
		
		$urls = explode(',', $urls);
		if (!$urls) {
			$Err = $Errs['Video_not_found'];


			break;
		}
		
		foreach ($urls as &$u)  {
			$u = urldecode($u);
			$u = str_replace('url=', null, $u);
			//Добавяне на резолюцията към съответното видео
			parse_str($u, $t);
			$u = array($u, $modes[$t['itag']*1]);
			//$u[2]= $modes[$u[0]];
		}
		//Сглобяване на html кода, който ще се показва в баузъа
		$Urls = array();
		foreach($urls as $a) {
			$Urls[] = "<a href=\"$a[0]\">$vid"."_$a[1]</a><br />";
		}
		//=============Извличане адресите на субтитрите
		//Извличане на списъка с наличните субтитри
		$url = "http://www.youtube.com/api/timedtext?asrs=1&hl=en&type=list&v=$v&fmts=1&caps=asr&tlangs=0";
		$content = @file_get_contents($url, FILE_TEXT);
		$Subs = array();
		if ($content) {
			//Обработка на xml списъка
			$xml = simplexml_load_string($content);
			foreach ($xml->track as $track) {
				$content = base64_encode("http://www.youtube.com/api/timedtext?hl=en&type=track&lang=$track[lang_code]&name=$track[name]&v=$v&format=1");
				$track[name] = trim($track[name]);
				$Subs[] = "$track[name]: <a href=\"?subs=$content&domain=youtube.com\">$v"."_$track[lang_code].srt</a><br />";
			}
		}
	break;
	
	default:
		$Err =  "ERROR: Wrong URL $domain ";
	break;
}
} //if ($_POST['address'])

//Смъкване от официалния сайт и конвертиране на исканите субтитри
if ($_GET["subs"]){

	if ($_GET['domain'] == 'youtube.com') {
		//Извличане на подадените данни
		$Url = base64_decode($_GET['subs']);
		$data=parse_url($Url);
		parse_str($data['query'], $data);
		//Конструиране името на файла за изтегляне
		$FileName = "$data[v]"."_$data[lang].srt";
		//Извличане на файла със субтитрите
		$content = file_get_contents($Url, FILE_TEXT);
		//Конвертиране на субтитрите от xml към srt формат
		$xml = simplexml_load_string($content);
		$num=0; $Subtitles = null;
		foreach ($xml->text as $text) {
			$num++;
			$attr = $text->attributes();
			//$Start = str_replace(',', '.', $attr['start']);
			$Start = floatval($attr['start']);
			$Dur = floatval($attr['dur']);
			$End = $Start + $Dur;
			$StartF = round(($Start - floor($Start))*100);
			$StartF = str_pad($StartF, 2, '0', STR_PAD_LEFT).'0';
			$EndF = round(($End - floor($End))*100);
			$EndF = str_pad($EndF, 2, '0', STR_PAD_LEFT).'0';
			$t = preg_replace("/\r?\n/", '|', $text);
			$t = str_replace("¶", '|', $text);
			$Subtitles .= $num."\r\n".to_time($Start).",$StartF --> ".to_time($End).",$EndF\r\n$t\r\n\r\n";
		}
		header('Content-type: text/plain');

		header('Content-Disposition: attachment; filename="'.$FileName);
		echo $Subtitles;
		exit;
		
	}
	if ($_GET['domain'] == 'vbox7.com') {
		$Url = base64_decode($_GET['subs']);
		//Смъкване на данните официалния сайт
		$content = urldecode(@file_get_contents($Url, FILE_TEXT));
		if ($content) {
			//Извличане на променливата със субтитрите
			preg_match("/&subsData=(.*)/", $content, $n);
			$subs = $n[1];
			$subs = preg_replace_callback('/\\\\u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $subs);
			$Subtitles = "";
			//Конвертиране на получените субтитри в srt формат
			$rows = explode("},{", $subs);
			$num = 0;
			foreach ($rows as $row) {
				$num++;
				preg_match('/"s":"(.*?)"/', $row, $n);
				$Sub = preg_replace("/<br>$/", "", $n[1]);
				$Sub = str_replace("<br>", "\r\n", $Sub);
				if (!$_POST) $Sub = utf8_to_cp1251($Sub);
				preg_match('/"t":(.*?),"f":(\d*)/', $row, $n);
				$End = $n[1]*1; //Крайно време
				$Start = $n[2]*1; //Стартово време
				if ($Sub) $Subtitles .= $num."\r\n".to_time($Start).",000 --> ".to_time($End).",000\r\n".$Sub."\r\n\r\n";
			}
			$Subtitles = str_replace("\\", "", $Subtitles);
			if (!$_POST) {
			header('Content-type: text/plain');
			header('Content-Disposition: attachment; filename="'.$_GET["v"].'.srt');
			echo $Subtitles;
			exit;
			}
		}
	}
}

?>

<div>
<form action="?" method="post">
<p>
<?php if ($Err) echo "<div class=\"error\">$Err</div>"; ?>
<label for="address" id="addr"></label>

Grabber 1:<br>
<input type="text" name="address" id="address" value="<?php echo $_POST['address']; ?>"/>
<input type="submit" class="button" value="Vbox7.com video grabber 1"/>
</p>
</form>

<?php if ($Urls) { ?>

<p class="vlink">

<?php if ($_GET['domain'] == 'youtube.com') { ?>

<?php
}
foreach ($Urls as $Url) {
echo $Url."\r\n";
} 
?>

</p>
<?php }?>

<?php if ($Subs) { ?>

<p>Subs:</p>
<p>
<?php foreach ($Subs as $Sub) {
	
} 
?>
<form action="?" method="post">
<textarea readonly cols="60" rows="30" id="subs" name="subs"><?php echo $Subtitles;?></textarea>
<input type="hidden" name="filename" value="<?php echo $_GET["v"].'.srt' ?>" />
</form>
</p>
<?php echo "";}?>
</div>

<form method="post" action="">
<br>
Grabber 2:<br>
<input type="text" name="url" value="<?php echo $_POST['url']; ?>">
<input type="submit" class="button" name="submit" style="font-style: italic;" value="Vbox7.com video grabber 2"> 
</form>

<br /> 

<?php 
if($_POST['submit']){ 
$file = $_POST['url']; 
if (empty($file)) die(""); 
$number = explode(":", $file); 
$i = substr($number[2],0 ,2); 
if(@fopen("http://media.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media02.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media02.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media2.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media2.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media03.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media03.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media04.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media04.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media05.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media05.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media06.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media06.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media07.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media07.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media08.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media08.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media09.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media09.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media10.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media10.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media11.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media11.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media12.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media12.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media13.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media13.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media14.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media14.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media15.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media15.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media16.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media16.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media17.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media17.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media18.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media18.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media19.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media19.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media20.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media20.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media21.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media21.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media22.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media22.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media23.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media23.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media24.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media24.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media25.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media25.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media26.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media26.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media27.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media27.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media28.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media28.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media29.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media29.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media30.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media30.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media31.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media31.vbox7.com/s/$i/$number[2].flv"; 
} 
elseif(@fopen("http://media32.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media32.vbox7.com/s/$i/$number[2].flv"; 
}  
elseif(@fopen("http://media33.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media33.vbox7.com/s/$i/$number[2].flv"; 
}  
elseif(@fopen("http://media34.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media34.vbox7.com/s/$i/$number[2].flv"; 
}  
elseif(@fopen("http://media35.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media35.vbox7.com/s/$i/$number[2].flv"; 
}  
elseif(@fopen("http://media101.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media101.vbox7.com/s/$i/$number[2].flv"; 
}  
elseif(@fopen("http://media102.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media102.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media36.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media36.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media37.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media37.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media38.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media38.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media39.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media39.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media40.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media40.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media41.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media41.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media43.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media43.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media44.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media44.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media45.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media45.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media46.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media46.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media47.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media47.vbox7.com/s/$i/$number[2].flv"; 
}
elseif(@fopen("http://media48.vbox7.com/s/$i/$number[2].flv","r")) 
{ 
$url = "http://media48.vbox7.com/s/$i/$number[2].flv"; 
}

echo "<a href='".$url."' target='_blank'>$url</a><br /><br />"; 

}
?>

<br>
Grabber 3:<br />
<form method="POST" action="">
<input name="vbox7" id="vbox7" title="Put URL here" />
<input type="submit" class="button" value="Vbox7.com video grabber 3" title="Go! Get video!" />
</form>

<br>

<?php
$file = htmlentities($_POST['vbox7'], ENT_QUOTES, 'UTF-8');
$searchfor = '.mp4';

function clean($url){
	return str_replace(array("src:",'"','}','{',',','','"',"'",']','[','/>','=','/<','content','<','meta','itemprop','itempropURL','URL'),'',$url);
}

// the following line prevents the browser from parsing this as HTML.
//header('Content-Type: text/plain');

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($file);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){
   //echo implode(clean($matches[0]));
   echo '<a href="'.implode(clean($matches[0])).'" target="_blank">' . implode(clean($matches[0])) . '</a>';
}
else{
   echo "";
}
?>
 
<?php
include 'footer.php';
?>
