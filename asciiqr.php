<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="ascii qr, ascii art, ascii qr code, ascii qr code creator, asciiqr, qr ascii">
<title>Ascii QR Code Creator</title>
<script src="js/asciiqrscript.js"  type="text/javascript"></script>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>ASCII QR Code Creator</h2>

<h4>Generate <a href="http://en.wikipedia.org/wiki/QR_Code" target="_blank">QR Codes</a> in <a href="http://en.wikipedia.org/wiki/ASCII_art" target="_blank">"ASCII Art"</a><span style="color:silver"> - Unicode</span></h4>
<?php
//$imageFile = 'chart.png';
if(isset($_GET['i']) || isset($_GET['t']))
{//The user has given us an image, or some text to use
	if($_GET['i'] == '' && $_GET['t'] == '')
		die('No Image specified <a href="asciiqr.php">Go Again</a>');
	
	if(isset($_GET['i']) && $_GET['i'] != '')
	{
		$imageFile = $_GET['i'];
		$imageFileExtension = strtolower(end(explode('.',$imageFile)));
	}
	if(isset($_GET['t']) && $_GET['t'] != '')
	{
		$imageFile = 'http://chart.apis.google.com/chart?cht=qr&chs=200x200&chld=L|0&chl='.urlencode($_GET['t']);
		$imageFileExtension = 'png';
	}

//	$imageFile = 'chart.png';
//	$imageFileExtension = 'png';
	
	if($imageSize = @getimagesize($imageFile))
	{//this is a valid image
		
		$imageXSize = $imageSize[0];
		$imageYSize = $imageSize[1];


		switch($imageFileExtension)
		{
			case 'jpg':
			case 'jpeg': $image=imagecreatefromjpeg($imageFile); break;
			case 'png': $image=imagecreatefrompng($imageFile); break;
			case 'gif': $image=imagecreatefromgif($imageFile); break;
			default: $image=imagecreatefrompng($imageFile); break;
		}
		
		//Change the image to greyscale so that "not quite white" backgrounds turn white.
		//This fix was added by boskee (www.reddit.com/user/boskee)
		imagefilter($image, IMG_FILTER_GRAYSCALE); 
		imagefilter($image, IMG_FILTER_CONTRAST, -1000);
		
		//define "black"
		if(imageistruecolor($image))
		{
			$blackColor = 0;
			$whiteColor = 16777215;
			$imageIsTrueColor = true;
		}
		else
		{
			$blackColor = 1;
			$whiteColor = 0;	
			$imageIsTrueColor = false;
		}

		//creat array to hold values of each pixed.
		//$imagePixels[xCord][yCord]
		$imagePixels = array();
		
		for($x = 0; $x < $imageXSize; $x++)
		{
			$imagePixels[$x] = array();
			for($y = 0; $y < $imageYSize; $y++)
			$imagePixels[$x][$y] = imagecolorat($image, $x, $y);
		}
		

					
		//go through and indetify how many pixels for each block
		$counter = 0;
		$firstBlack = -1;
		$nextWhite = -1;
		while($counter < $imageXSize && $counter < $imageYSize && $nextWhite == -1)
		{
			if($firstBlack == -1)
			{//we have not found the first black pixel
				if($imagePixels[$counter][$counter] == $blackColor)
				{//this is the first black pixel
					$firstBlack = $counter;
				}
			}
			else
			{//we have found the first black, look for the next white
				if($imagePixels[$counter][$counter] == $whiteColor)
				{//this is the first white pixel
					$nextWhite = $counter;
				}		
			}
			$counter++;
		}
		//decide how many actual pixels each "block" in the image is
		$pixelScale = $nextWhite - $firstBlack;

		//load into array
		$pixels = array();
		$xCounter = 0;

		for($y = 0; $y < $imageYSize; $y+=2*$pixelScale)
		{
			$pixels[] = array();//make new line
			$yCounter = 0;
			for($x = 0; $x < $imageXSize; $x+=$pixelScale)
			{
				//get the color of the pixel
				$line1 = imagecolorat($image, $x, $y);
				if($y+$pixelScale < $imageYSize)
				{//now move down one "row" in the image (might be more than once pixel)
					$line2 = imagecolorat($image, $x, $y+$pixelScale);
				}
				else
				{// we have gone out of range, make it white
					$line2 = $whiteColor;
				}
			
				if($line1 == $whiteColor)
				{//white
					if($line2 == $whiteColor)
					{//white and white
						$pixels[$xCounter][$yCounter] = '&#x00A0;';
					}
					else
					{//white and black
						$pixels[$xCounter][$yCounter] = '&#x2584;';
					}
				}
				else
				{//black
					if($line2 == $whiteColor)
					{//black and white
						$pixels[$xCounter][$yCounter] = '&#x2580;';	
					}
					else
					{//black and black
						$pixels[$xCounter][$yCounter] = '&#x2588;';		
					}
				}
				$yCounter++;
			}
			$xCounter++;
		}


		
		echo '
		<br />
		<div class="asciiOutput">
			<div class="displayMenu">
				
		<p>Menu:</p>
		<a onclick="document.location=\'asciiqr.php\'" title="Yes, click here for new one">Create New</a><br />
		<a onclick="showAsciiQR()" title="Show in ASCII">Create Ascii</a><br />
		<a onclick="showHtmlQR()" title="Show HTML code">HTML</a><br />
		<a onclick="showRedditQR()" title="Put in Reddit">Reddit</a><br />
		<a onclick="showImageQR()" title="Show Image">Show Image</a>
				
			</div>
		<br />
		<br />
		<div id="QRImage" style="display:none"><img src="'.$imageFile.'"></div>	';
		echo'
		<div id="QRAscii" style="line-height:1em; letter-spacing:0em;  font-family:monospace">
		';
		for($x=0; $x < count($pixels); $x++)
		{
			for($y=0; $y < count($pixels[$x]); $y++)
			{
				echo $pixels[$x][$y];
			}
			echo "<br />\n";
		}
		
		echo '</div>';
		
		//html formatting
		echo'
		<div id="QRHtml" style="display:none;">
		<textarea style="width:90%;" rows="'.$yCounter.'">';
		echo htmlspecialchars('<span style="font-family: \'Courier New\', monospace; line-height:1em; letter-spacing:1em;">')."<br />\n";
		for($x=0; $x < count($pixels); $x++)
		{
			for($y=0; $y < count($pixels[$x]); $y++)
			{
				echo htmlspecialchars($pixels[$x][$y]);
			}
			echo htmlspecialchars('<br \>');
		}
		echo htmlspecialchars('</span>');
		echo '</textarea></div>';	
		
		echo'	
		<div id="QRReddit" style="display:none">
		<textarea cols="'.ceil(($imageXSize/$pixelScale)+6).'" rows="'. ceil(($imageYSize/$pixelScale/2) +7) .'" style="line-height:1em">    ';
		
		//reddit formatting
		for($x=0; $x < count($pixels); $x++)
		{
			for($y=0; $y < count($pixels[$x]); $y++)
			{
				//hack for reddit's commenting system that doesn't like duplicate x00A0
				if($pixels[$x][$y] == '&#x00A0;')
					echo '&#x0020;';
				else
					echo $pixels[$x][$y];
			}
			echo "\n    ";
		}
		echo '
[Image Link]('.$imageFile.')
				</textarea>
				<br />
				<br />
				A small note with QR Codes on Reddit. Some users of Macs are reporting that they cannot scan these codes, because they show up like <a href="http://i.imgur.com/3WHGm.png">this</a>.
				From what I can tell, this is because they don\'t have Courier New set as the default monospace font in their browser, and reddit\'s CSS doesn\'t specify what fixed-width font to use.
				<br />
				Basically, my hands are tied. If people complain about the codes not working on their screen, direct them here, or ask them to change their monospace font.</div>';
		
		echo '</div>';
	}
	else
	{//this is not a valid image.
		echo 'Not a valid image, please <a href="asciiqr.php">try again.</a>';
	}
}
else
{//no image or text has been specified, so display the form
	echo '<form method="get" action="asciiqr.php">
			Please enter the URL of an existing QR Code Image:<br />
			<input type="text" name="i"><br />
			<br />
			Or the Text you would like to encode:<br />
			<input type="text" name="t"><br />			
			<br />
			<input class="button" type="submit">
		</form>';

}
echo '<span style="font-size: 12px; color:silver">This uses Unicode not ASCII</span>';
?>

</div>

<?php
include 'footer.php';
?>
