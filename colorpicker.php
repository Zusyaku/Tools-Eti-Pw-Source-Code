<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="color picker, color palette, html colors, color blender, colorscheme, color scheme, color hex, hex color, hex colors, RGB colors, html colors generator, hex color code chart, hex palette, online tools, hex, hex colors code">
<title>Color Picker</title>
<link href="css/mcColorPicker.css" rel="stylesheet" type="text/css" />
<script src="js/mcColorPicker.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jscolor.js"></script>
</head>
<body>

<style>
#eti:link {
    background-color: white;
    color: black;
    border: 2px solid #0AF2F2;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
#eti:visited {
    background-color: #A5F2F3;
    color: white;
    border: 2px solid #A5F2F3;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
#eti:hover, #eti:active {
    background-color: #0AF2F2;
    color: white;
}
</style>

<a href="./" id="eti">Free Online Tools</a>

<div>

<h2>Color Picker</h2>

Color Palette<br>

<p>You don't know Hex color value and wonder what is? This simple tool will help you to get the Hex color. Just click, choose the color and take the Hex value.</p>
<br>
<center>
1. Click here: <input class="color" value="66ff00"><br><br>or this palette below<br /><br />
2. Click here: <input type="text" style="width:300px;height:100px;" class="color" />
</center>
<script type="text/javascript">
    function createForm()
    {
        document.getElementById("formContainer").innerHTML = 
'<input type="text" id="cinput2" class="color" value="#00aa00" />';
        MC.ColorPicker.reload();
    }
</script>
</div>

<style type="text/css">
<!--
body {background: white; color: black;}
form {margin: 0;}
#main {border-bottom: 1px solid; padding-bottom: 0.5em;}
#uicell {width: 25em;}
#uicell th {width: 6em; text-align: right; padding-right: 0.5em;
  border: 1px solid black; border-width: 0 1px 1px 0;}
#uicell td {padding: 0 0 0 0.5em;}
#uicell td.pal {padding: 0 3em;}
#uicell #gobuttons td {height: 1.5em;}
input, #input a {font: 0.85em "Andale Mono", Courier, monospace;}
#input, #output {margin: 0 0 1em;}
#input td {white-space: nowrap;}
#input a {border: 2px outset silver; background: silver; padding: 1px 0.25em; cursor: pointer;}
#input .coltype {background: #EEE; border-style: inset;}
#output input {border: 2px solid white; border-width: 0 2px;}
#output td.text {border-bottom: 1px dotted silver;}
#watercell {width: 75px; background: silver; padding: 0;}
#grid {background: black; border: 1px solid black; border-width: 0 1px 1px 0; margin: 5px 4px;}
#grid td {height: 11px; width: 11px; padding: 0; line-height: 11px;}
#grid td a {display: block; height: 10px; width: 10px; line-height: 10px;
  border: 1px solid black; border-width: 1px 0 0 1px;}
#textcell p {margin: 0; padding: 0 1em 1em 1.5em;}
-->
</style>
<script type="text/javascript">
// Thanks to Steve Champeon (hesketh.com) for explaining the math in such a way that I could 
// understand it and create this tool
// Thanks to Roberto Diez for the idea to create the "waterfall" display
// Thanks to the Rhino book, I was able to (clumsily) set up the Color object
//   v1.0 (20030213) initial release
//   v1.1 (20030221) added rgbd and rgbp value types
//   v1.2 (20030511) added "waterfall" display of "web-safe" colors
//   v1.3 (20030514) single-page structure for easy local saves; CC license
//   v1.4 (20150321) added URL fragment ID storing of colors, steps, type
// v1.4.1 (20150322) fixed RGB/rgb parsing error

var cursor = 0;
var colType = 'hex';
var base = 16;
var ends = new Array(new Color,new Color);
var step = new Array(3);
var palette = new Array(new Color,new Color,new Color,new Color,new Color,new Color,new Color,new Color,new Color,new Color,new Color,new Color);

function GetElementsWithClassName(elementName,className) {
	var allElements = document.getElementsByTagName(elementName);
	var elemColl = new Array();
	for (i = 0; i< allElements.length; i++) {
		if (allElements[i].className == className) {
			elemColl[elemColl.length] = allElements[i];
		}
	}
	return elemColl;
}

function Color(r,g,b) {
	this.r = r;
	this.g = g;
	this.b = b;
	this.coll = new Array(r,g,b);
	this.valid = cVerify(this.coll);
	this.text = cText(this.coll);
	this.bg = cText(this.coll);
}

function cVerify(c) {
	var valid = 'n';
	if ((!isNaN(c[0])) && (!isNaN(c[1])) && (!isNaN(c[2]))) {valid = 'y'}
	return valid;
}

function cText(c,t) {
	var result = '';
	var d = 1;
	if (t) {
		var cT = t;
	} else cT = colType;
	if (cT == 'hex') var base = 16;
	if (cT == 'rgbp') {d = 2.55}
	for (k = 0; k < 3; k++) {
		val = Math.round(c[k]/d);
		piece = val.toString(base);
		if (cT == 'hex' && piece.length < 2) {piece = '0' + piece;}
		if (cT == 'rgbp') {piece = piece + '%'};
		if (cT != 'hex' && k < 2) {piece = piece + ',';}
		result = result + piece;
	}
	if (cT == 'hex') {result = '#' + result.toUpperCase();}
		else {result = 'rgb(' + result + ')';}
	return result;
}

function colorParse(c,t) {
	var m = 1;
	c = c.toUpperCase();
	col = c.replace('RGB','').replace(/[\#\(]*/i,'');
	if (t == 'hex') {
		if (col.length == 3) {
			a = col.substr(0,1);
			b = col.substr(1,1);
			c = col.substr(2,1);
			col = a + a + b + b + c + c;
		}
		var num = new Array(col.substr(0,2),col.substr(2,2),col.substr(4,2));
		var base = 16;
	} else {
		var num = col.split(',');
		var base = 10;
	}
	if (t == 'rgbp') {m = 2.55}
	var ret = new Array(parseInt(num[0],base)*m,parseInt(num[1],base)*m,parseInt(num[2],base)*m);
	return(ret);
}

function updateHash() {
	if (ends[0].valid == 'y') c0 = cText(ends[0].coll,'hex').substring(1); else c0 = '';
	if (ends[1].valid == 'y') c1 = cText(ends[1].coll,'hex').substring(1); else c1 = '';
	st = document.getElementById('steps').value;
	obj = GetElementsWithClassName('a','coltype');
	ty = obj[0].id;
	hashstr = '#' + c0 + ':' + c1 + ':' + st + ':' + ty;
	window.location.hash = hashstr;
}

function colorPour(pt,n) {
	var textObj = document.getElementById(pt + n.toString());
	var colObj = document.getElementById(pt.substring(0,1) + n.toString());
	if (pt == 'col') {temp = ends[n]} else {temp = palette[n]}
	if (temp.valid == 'y') {
		textObj.value = temp.text;
		colObj.style.backgroundColor = temp.bg;
	}
}

function colorStore(n) {
	var inVal = 'col'+n.toString();
	var inCol = document.getElementById(inVal).value;
	var c = colorParse(inCol,colType);
	ends[n] = new Color(c[0],c[1],c[2]);
	if (ends[n].valid == 'y') {colorPour('col',n)}
}

function stepCalc() {
	var steps = parseInt(document.getElementById('steps').value) + 1;
	step[0] = (ends[1].r - ends[0].r) / steps;
	step[1] = (ends[1].g - ends[0].g) / steps;
	step[2] = (ends[1].b - ends[0].b) / steps;
}

function mixPalette() {
	var steps = parseInt(document.getElementById('steps').value);
	var count = steps + 1;
	palette[0] = new Color(ends[0].r,ends[0].g,ends[0].b);
	palette[count] = new Color(ends[1].r,ends[1].g,ends[1].b);
	for (i = 1; i < count; i++) {
		var r = (ends[0].r + (step[0] * i));
		var g = (ends[0].g + (step[1] * i));
		var b = (ends[0].b + (step[2] * i));
			palette[i] = new Color(r,g,b);
	}
	for (j = count + 1; j < 12; j++) {
		palette[j].text = '';
		palette[j].bg = 'white';
	}
}

function drawPalette() {
	stepCalc();
	mixPalette();
	for (i = 0; i < 12; i++) {
		colorPour('pal',i);
	}		
	updateHash();
}

function setCursor(n) {
	cursor = n;
	var obj1 = document.getElementById('col0');
	var obj2 = document.getElementById('col1');
	obj1.style.backgroundColor = '';
	obj2.style.backgroundColor = '';
	if (cursor >= 0 && cursor <= 1) {
		document.getElementById('col'+cursor).style.backgroundColor = '#FF9';
	}
}

function colorIns(c) {
	var obj = document.getElementById('col'+cursor);
	var result = colorParse(c,'hex');
	ends[cursor] = new Color(result[0],result[1],result[2]);
	obj.value = ends[cursor].text;
	if (ends[cursor].valid == 'y') {colorPour('col',cursor)}
	updateHash();
}

function setType(inp) {
	colType = inp;
	if (inp == 'hex') {base = 16;} else {base = 10;}
	for (i = 0; i < 2; i++) {
		var obj = document.getElementById('col' + i);
		if (ends[i].valid == 'y') {
			ends[i] = new Color(ends[i].r,ends[i].g,ends[i].b);
			obj.value = ends[i].text;
		}
	}
	document.getElementById('hex').className = '';
	document.getElementById('rgbd').className = '';
	document.getElementById('rgbp').className = '';
	document.getElementById(inp).className = 'coltype';	
	drawPalette();
}

function hashChange() {
	init(1);
}

function init(inp) {
	document.getElementById('steps').value = '0';
	if (!inp) {
		obj = GetElementsWithClassName('a','coltype');
		inp = obj[0].id;
		window.location.hash = '::1:' + colType;
	}
	for (i = 0; i < 2; i++) {
		ends[i] = new Color;
		document.getElementById('col'+i).value = '';
		document.getElementById('c'+i).style.background = 'white';
	}
	for (j = 0; j < 12; j++) {
		palette[j] = new Color;
		document.getElementById('pal'+j).value = '';
		document.getElementById('p'+j).style.background = 'white';
	}
	document.getElementById('col0').focus();
	if (window.location.hash) {
		hash = window.location.hash.substring(1);
		vals = hash.split(":");
		if (vals[0]) {
			document.getElementById('col0').value = vals[0];
			colorStore('0');
		}
		if (vals[1]) {
			document.getElementById('col1').value = vals[1];
			colorStore('1');
		}
		document.getElementById('steps').value = vals[2];
		inp = vals[3];
		if (vals[0] && vals[1]) drawPalette();
	}
	setType(inp);
}

</script>

<body onload="init('hex');">
<form onsubmit="return false;">
<h3>Color Blender</h3>

<table id="main">
<tr valign="top">
<td id="uicell">

<table id="input">
<tr>
<th>Format</th>
<td colspan="2">
<a onclick="setType('hex');" id="hex" class="coltype">Hex</a>
<a onclick="setType('rgbd');" id="rgbd">RGB</a>
<a onclick="setType('rgbp');" id="rgbp">RGB%</a>
</td>
</tr>
<tr>
<th id="l1">Color 1</th>
<td class="col"><input type="text" id="col0" size="19" onblur="colorStore('0');" onfocus="setCursor(0);" /></td>
<td class="pal" id="c0">&nbsp;</td>
</tr>
<tr>
<th id="l2">Color 2</th>
<td class="col"><input type="text" id="col1" size="19" onblur="colorStore('1');" onfocus="setCursor(1);" /></td>
<td class="pal" id="c1">&nbsp;</td>
</tr>
<tr>
<th>Midpoints</th>
<td>
<select id="steps" onchange="updateHash();">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</td>
</tr>
<tr id="gobuttons">
<td></td>
<td>
<a onclick="drawPalette();">blend</a></td>
<td><a onclick="init(0);">clear</a></td>
</tr>
</table>

<table id="output">
<tr>
<th>Palette</th>
<td class="text"><input type="text" id="pal0" size="19" /></td>
<td class="pal" id="p0">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal1" size="19" /></td>
<td class="pal" id="p1">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal2" size="19" /></td>
<td class="pal" id="p2">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal3" size="19" /></td>
<td class="pal" id="p3">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal4" size="19" /></td>
<td class="pal" id="p4">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal5" size="19" /></td>
<td class="pal" id="p5">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal6" size="19" /></td>
<td class="pal" id="p6">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal7" size="19" /></td>
<td class="pal" id="p7">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal8" size="19" /></td>
<td class="pal" id="p8">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal9" size="19" /></td>
<td class="pal" id="p9">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal10" size="19" /></td>
<td class="pal" id="p10">&nbsp;</td>
</tr>
<tr>
<td></td>
<td class="text"><input type="text" id="pal11" size="19" /></td>
<td class="pal" id="p11">&nbsp;</td>
</tr>
</table>

</td>
<td id="watercell">

<script type="text/javascript">
var colors = new Array('00','33','66','99','CC','FF');
document.write('<table cellspacing="0" id="grid">');
for (i = 5; i >= 0; i--) {
	for (j = 5; j >= 0; j--) {
		document.write('<tr>');
		for (k= 5; k >= 0; k--) {
			var col = colors[i]+colors[j]+colors[k];
			document.write('<td style="background: #'+col+';"><a href="javascript:colorIns(\'#'+col+'\');"><\/a><\/td>');
		}
		document.write('<\/tr>');
	}
}
document.write('<\/table>');
</script>

</td>
<td id="textcell">
</td>
</tr>
</table>
</form>

<br />

<p>HEX Color Code Chart & Generator</p>

<p>Generate Your Own Custom Hex HTML Colors</p>

<p>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="480" height="480" title="hex colors">
    <param name="movie" value="/img/hex-colors.swf" />
    <param name="quality" value="high" />
    <embed src="/img/hex-colors.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="480" height="480"></embed>
</object>
</p>

<p>Choose a Color Scheme</p>
<p>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="480" height="480" title="hex colors">
    <param name="movie" value="/img/hexcolors.swf" />
    <param name="quality" value="high" />
    <embed src="/img/hexcolors.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="480" height="480"></embed>
</object>
</p>

<br>Try this website: <a href="http://www.color-hex.com" target="_blank">Color-HEX.com</a><br><br>

<?php
include 'footer.php';
?>
