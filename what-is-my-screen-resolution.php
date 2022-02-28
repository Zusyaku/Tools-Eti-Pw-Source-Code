<!DOCTYPE html>
<html lang="en">
<head>
<title>What is My Screen Resolution</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Online tool to find your screen resolution and browser's current size">
<meta name="keywords" content="what is my screen resolution, find screen resolution, screen resolution, screen size, display resolution, browser screen resolution, online resolution check, what's my screen resolution, monitor screen resolution, check screen resolution, test screen resolution"/>
<meta name="author" content="www.eti.pw">
<meta name="robots" content="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<style>
	.resolution {
		text-align:center;
		width:340px;
		padding:20px;
		border:#FFFFFF solid 10px;
		margin-top:10px;
		font-family:"Trebuchet MS", Arial, Verdana;
		color:#A5F2F3;
		font-size:27px;
		line-height:40px;
		}
	.resolution span{
		color:#A5F2F3;
		display:block;
		font-size:55px;
		text-transform:lowercase;
		}
</style>

</head>

<body>

<a href="./">Free Online Tools</a>

<h2>What is my Screen Resolution</h2>

What is your screen resolution /  display resolution?<br>
Online tool to find your Screen resolution and Browser screen resolution<br>

<div class="resolution">
You are using<br />
<span id="resolutionNumber"></span>
</div>

The number above represents your screen/monitor resolution (in width and height)<br /> 
<br>
Screen Resolution: 
<span id="resolution"></span><br>
<span id="x-width"></span><br>
<span id="y-height"></span><br>
<span id="b"></span>
<div id="plugins"></div>

<SCRIPT type="text/javascript">
<!--

height = screen.height;
width = screen.width;

res = document.getElementById ('resolutionNumber');
res.innerHTML = width + " X " + height;

if (res == null)
{
	alert ("hello");
}
//-->
</SCRIPT>

    <script>
      function getScreenResolution(){
        var width = screen.width;
        var height = screen.height;
        var resolution = width+"x"+height;
        return resolution; 

      }
      function getWidth(){
        return "Screen Width: "+screen.width+" pixels";
      }
      function getHeight(){
        return "Screen Height: "+screen.height+" pixels";
      }
      document.getElementById("resolution").innerHTML = getScreenResolution();
      document.getElementById("x-width").innerHTML = getWidth();
      document.getElementById("y-height").innerHTML = getHeight();
      
    </script>

<script>
var w = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

var h = window.innerHeight
|| document.documentElement.clientHeight
|| document.body.clientHeight;

var x = document.getElementById("b");
x.innerHTML = "Browser inner window is with Width: " + w + " and Height: " + h + "";

var txt = "";
txt += "Color depth: " + screen.colorDepth + "<br>";
txt += "Color resolution: " + screen.pixelDepth + "<br>";
document.getElementById("browser").innerHTML = txt;
</script>

<script type="text/javascript">
var x=navigator.plugins.length; 
var txt="Total plugin installed: "+x+"<br/>";
txt+="Available plugins are -> "+"";
for(var i=0;i<x;i++)
{
  txt+=navigator.plugins[i].name + "<br/>"; 
}
document.getElementById("plugins").innerHTML=txt;
</script>

<br>

<SCRIPT language="javascript">
numPlugins = navigator.plugins.length;

if (numPlugins > 0)
  document.writeln("Installed plugins:");
else
 document.writeln("No plug-ins are installed.");

for (i = 0; i < numPlugins; i++) {
 plugin = navigator.plugins[i];
 document.write("<font size=+1>");
 document.write(plugin.name);
 document.writeln("</font><br>");
 document.writeln("<dl>");
 document.writeln("<dd>File name:");
 document.write(plugin.filename);
 document.write("<dd><br>");
 document.write(plugin.description);
 document.writeln("</dl>");
 document.writeln("<p>");
 document.writeln("<table border=1 >");
 document.writeln("<tr>");
 document.writeln("<th width=20%>Mime Type</th>");
 document.writeln("<th width=50%>Description</th>");
 document.writeln("<th width=20%>Suffixes</th>");
 document.writeln("<th>Enabled</th>");
 document.writeln("</tr>");
 numTypes = plugin.length;
 for (j = 0; j < numTypes; j++)
 {
  mimetype = plugin[j];

  if (mimetype){
   enabled = "No";
   enabledPlugin = mimetype.enabledPlugin;
   if (enabledPlugin && (enabledPlugin.name == plugin.name))
    enabled = "Yes";
   document.writeln("<tr align=center>");
   document.writeln("<td>");
   document.write(mimetype.type);
   document.writeln("</td>");
   document.writeln("<td>");
   document.write(mimetype.description);
   document.writeln("</td>");
   document.writeln("<td>");
   document.write(mimetype.suffixes);
   document.writeln("</td>");
   document.writeln("<td>");
   document.writeln(enabled);
   document.writeln("</td>");
   document.writeln("</tr>");
  }
 }
 document.write("</table>");
}
</SCRIPT>

<br>

Info:<br>
An Online tool to check screen resolution of any display device. Using this tool, you can test resolution of your Monitor, iPad, Tablet, iPhone, MacBook or any other display device.<br>
Screen resolution Monitor, TV, Mobile device or any display device is the number of pixels in x and y dimensions.<br>
The Screen resolution is generally measured as width x height in pixels. For example resolution 1920 x 1080 means the 1920 pixels is width and 1080 pixels is height of the screen.<br>
However your current screen resolution may be less than max supported screen resolution. So you can change your screen resolution from your device settings.<br>
It's not good idea to have many plugins/addons installed!

<?php
include 'footer.php';
?>
