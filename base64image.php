<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Picture to base64 - Image2Base64">
<meta name="keywords" content="image2base64, image to base64, base64image, base64 image, imagetobase64, base64, image base64">
<title>Image to Base64</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Image2Base64</h2>

1. Variant<br />
&nbsp;<b><small>Select file (.jpeg .gif .png .bmp .webp .svg) to encode:</small></b><br>

<noscript>
    <div class="ns pt5"><span style="font-size:24px">This demo needs JavaScript</span></div>
</noscript>

<div class="all_wrapper">
    <div class="ib">
        <p class="pm0 ms">
            <input type="file" id="inp" class="ms">
        </p>
    </div>
    <div class="ib">
        <p class="pm0 ms">
            <input type="hidden" value="submit" id="submit_url">
        </p>
    </div>
    <div class="inner_holder">
        <canvas class="canvas_styling" id="imageCanvas"></canvas>
    </div>
    <div class="inner_holder">
        <p id="st" class="ms"><small>Click below to select</small></p>
        <textarea rows="1" id="output_url" class="URI_textarea ms" onclick="this.select();document.getElementById('st').innerHTML=this.getAttribute('data-text')?'...':'Selected';" onblur="document.getElementById('st').innerHTML=!this.getAttribute('data-text')?'Click below to select':this.getAttribute('data-text');"
        wrap="off" readonly></textarea>
    </div>
</div>

<style>
.pm0 {
    padding: 0;
    margin: 0;
}

.pt5 {
    padding-top: 5px;
}

.URI_textarea {
    font-size: 14px;
    padding: 10px;
    margin: 0;
    border: 0;
    box-shadow: 1px 1px 2px #555 inset;
    background-color: #ddd;
    color: darkgreen;
    resize: none;
}

.canvas_styling {
    opacity: 0;
    transition: opacity .5s;
    display: inline-block;
    border-radius: 8px;
    padding: 20px;
    background-color: #888;
    box-shadow: 0 0 20px #555 inset;
}

.inner_holder {
    box-sizing: border-box;
    overflow: auto;
    border-radius: 4px;
}

.URI_textarea,
.canvas_holder,
.all_wrapper,
.ib,
input {
    box-sizing: border-box;
}

.all_wrapper,
.URI_textarea {
    width: 100%;
}



#inp:hover {
    cursor: pointer;
}

.sub_title {
    color: blue;
}

#inp::-webkit-file-upload-button {
    border-radius: 4px;
    padding: 10px 20px;
    font-family: consolas, monaco, menlo, courier, monospace;
    border: 1px solid #555;
}

#inp_url,
#submit_url {
    display: block;
    width: 100%;
    margin: 0 auto;
}


#inp::-webkit-file-upload-button:hover {
    background-color: #888;
    color: #fff;
    cursor: pointer;
}

#inp::-webkit-file-upload-button:focus {
    outline-color: #333;
}

.sbg {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
}

.all_wrapper {
    padding: 10px 0;
}

.ib {
    display: inline-block;
    vertical-align: top;
    margin-bottom: 20px;
}

.green {
    color: darkgreen;
}

.all_wrapper,
.inner_holder {
    display: none;
}

@media (max-width:640px) {
    .ib {
        display: block;
        margin: 0;
        width: 100%;
    }
    .ib:nth-child(2) {
        margin-top: 5px;
        margin-bottom: 20px;
    }
  
    .pt5 {
        padding: 0;
    }
}
</style>

<script>
//Updated the explanation and the coding below on Sept 23, 2015.
(function (d) {
    "use strict";
    //Elements/objects global variables
    var inp, out, note, notee, st, sut, iu, su, ch, aw, canvas, c2d;

    //Get element(s) (by Id or Class)
    function q(a) {        
        var buff;
        if (!(/^\./.test(a))) {
            if (d.getElementById(a)) {
                buff = d.getElementById(a);
            } else {
                buff = d.querySelector(a);
            }
        } else {
            buff = Array.prototype.slice.call(d.querySelectorAll(a));
        }
        return buff;
    }

    //IMG TESTER
    function imt(a) { // test the local file's tail-strings (allowed image format/extension)
        return (/jpe?g|gif|png|bmp|webp|svg/i).test(a);
    }

    //ELEMENTS/OBJECTS VARS INIT
    inp = q("inp"); //input file
    out = q("output_url"); //the base64 URI output text
    note = q("note"); //local file notification
    notee = q("notee"); //external url notification
    st = q("st"); //the "select"
    sut = q("sub_title"); //the bottom notification
    iu = q("inp_url"); //external url input
    su = q("submit_url"); //external url button
    ch = q(".inner_holder"); //inner holders (plural)
    aw = q(".all_wrapper")[0]; //outer holder
    canvas = q("imageCanvas"); //the canvas
    //[canvas] related
    c2d = canvas.getContext("2d");

    //CHECK HTML5 COMPATIBILITY
    (function () {
        aw.style.display = "block";
        if ((typeof canvas !== "object") && (typeof FileReader !== "function")) {
            aw.innerHTML = "<span style='font-size:24px'>Your browser doesn't support <strong>HTML5</strong> built-in API.</span>";
            //all functions below will have no triggers, because the "all_wrapper" content is changed to be just that "span" above.
        }
    }());

    //COMMON HANDLERS
    function loadThis(a) {
        canvas.width = a.width;
        canvas.height = a.height;
        c2d.drawImage(a, 0, 0);
    }
    function showElms() {
        ch.forEach(function (v) {
            v.style.display = "block";
        });
        canvas.style.opacity = 1;
    }
    function hideElms() {
        ch.forEach(function (v) {
            v.style.display = "none";
        });
        out.removeAttribute("style");
        out.value = "";
        inp.value = "";
        canvas.removeAttribute("style");
        st.removeAttribute("style");
        sut.removeAttribute("style");
        c2d.clearRect(0, 0, canvas.width, canvas.height);
        note.innerHTML = note.getAttribute("data-title");
        notee.innerHTML = notee.getAttribute("data-title");
        if (out.getAttribute("data-text")) {
            out.removeAttribute("data-text");
        }
        su.disabled = 1;
    }

    //EXTERNAL URL CHECKER
    function check_img_URL(a, b) {
        var protocol = /^https?:\/\//.test(a.value),
            btn = q(b);
        //RESET LOCAL INPUT AND OUTPUT
        if (inp.value.length) {
            inp.value = "";
        }
        note.innerHTML = note.getAttribute("data-title");
        a.removeAttribute("style");
        hideElms();
        //CHECK URL STARTS HERE
        if (protocol && a.value.length > 20 &&
                a.value.match(/\//g).length > 2 &&
                a.value.match(/\./g).length > 1 &&
                imt(a.value)) {
            btn.disabled = 0;
        } else if (a.value.length === 0) {
            hideElms();
        } else {
            a.style.color = "brown";
            btn.disabled = 1;
        }
    }

    //EXTERNAL URL HANDLER (BUTTON CLICK)
    function handle_img_URL() {
        var img_url = iu.value,
            new_img = d.createElement("img"),
            word;
        new_img.src = img_url;
        new_img.addEventListener("load", function () {
            if (new_img.complete) {
                try { //umm...
                    loadThis(new_img); //draw the image to [canvas].
                    out.value = c2d.getImageData(0, 0, new_img.width, new_img.height).data; //get URI.
                    notee.innerHTML = "Done!"; //not really.
                } catch (error) { //this'd certainly happen.
                    if (error) {
                        word = error.toString();
                        word = word.substring(0, word.indexOf(":"));
                        out.setAttribute("data-text", "<span style='color:red'>" + word + "</span>");
                        out.value = error.message;
                        out.style.color = "purple";
                        if (window.innerWidth > 1024) {
                            out.style.overflowX = "hidden";
                        }
                        st.innerHTML = "<span style='color:red'>" + word + "</span>";
                        sut.style.display = "none";
                        notee.innerHTML = "<span style='color:violet'>" + word + "</span>";
                    }
                }
                su.disabled = 1;
                showElms();
            }
        }, 0);
    }

    //LOCAL FILE HANDLER
    function handleImage(e) { // http://stackoverflow.com/a/10906961
        //the "e" is the "change" event object from the input[type='file'].
        //you can console.log(e) to find out the what's in it.
        var reader = new FileReader(),
            theFile = e.target.files[0]; //the file object being loaded.
        try {
            if (imt(theFile.type)) { //test if it has the allowed format, using imt() function - declared above.
                //to get the file size, use [size] key                
                //as in: theFile.size (using the variable "theFile") <- it's in Bytes (number).
                //to get the file name, use [name] key
                //example: theFile.name <- returns string
                reader.readAsDataURL(theFile);
                //wait for the image to load.
                reader.addEventListener("load", function (ev) {
                    //the "ev" parameter is the "reader" variable load event object.
                    //you can console.log(ev) to find out what's in it.
                    var img = d.createElement("img"); //create [img] object.
                    //the conversion product is right here [ev.target.result]
                    img.src = ev.target.result; //the [img] source -> base64 URI strings.
                    //And then listen to the load event of that [img] object.
                    img.addEventListener("load", function () {
                        loadThis(img); //draw that [img] to the [canvas].
                    }, 0);
                    out.value = img.src; //base64 URI strings.

                    note.innerHTML = "Done!"; //notification.
                    st.innerHTML = "Click below to select"; //notification.
                }, 0);
            } else {
                window.alert("Only jpg, jpeg, gif, png, bmp, webp, and svg");
                hideElms();
                return;
            }
        } catch (error) {
            if (error) { // This happens when we cancel the file window opener.
                hideElms();
                return;
            }
        }
        out.removeAttribute("style");
        showElms();
    }

    //EVENT LISTENERS
    su.onclick = handle_img_URL;
    inp.onclick = function () {
        hideElms();
        iu.value = "";
    };
    inp.onchange = handleImage;
    iu.oninput = function () {
        check_img_URL(iu, "submit_url");
    };
    iu.onclick = function () {
        iu.select();
    };
}(document));
</script>

2.Variant<br />

<?php 

$ver="1.0";
$LineLength=50;

function htmlhead() {
global $ver;
?>

<?
}
 #phpinfo();

$size = 0;
$imgcode="";

#run this with:
if (array_key_exists("i", $_REQUEST ) && $_REQUEST["i"] == "holtsmarklogo") 
	{ holtsmarklogo(); die(); }
if (array_key_exists("i", $_REQUEST ) && $_REQUEST["i"]== "base64imglogo") 
	{ base64imglogo(); die(); } 

if ( array_key_exists( "submit", $_POST ))
{
	$uploadfile = "";
	
	if (array_key_exists("uploadfile", $_FILES ) ) $uploadfile = $_FILES["uploadfile"]["tmp_name"];
	if ( array_key_exists("uploadfile", $_FILES )) $uploadfile_name = $_FILES["uploadfile"]["name"];
	if ($_FILES["uploadfile"]["name"] == "none")
	die("<font face=verdana size=2><font color=red>
	Error: Could not fetch uploaded file</font>
	<br>Please <a href=\"".$_SERVER["PHP_SELF"]."\">go back</a> and try again!
	<br><br><b>base64img</b> v$ver is created by<br>
			<img src=\"".$_SERVER["PHP_SELF"]."?i=holtsmarklogo\">");
	if (!File_exists ("$uploadfile"))
		die("<font face=verdana size=2><font color=red>
			Error: Could not fetch uploaded file, wrong permissions... 
			
			
			");

  function showphpcode() 
  {
	  global $c,$size,$imgcode;
    echo "<?
# Copy and paste this code
# into the TOP of your
# php-script!
";
    echo "
  function img() 
  {
    header(\"Content-type: image/$c\");
    header(\"Content-length: $size\");
    echo base64_decode(
'";
    echo $imgcode;
    echo "');
  }
# Above is the code of
# your image..

# Here is a Example:
# This is the phpcode to
# execute function img(); :
  if ( array_key_exists(\"image\", \$_REQUEST) && \$_REQUEST[\"image\"]==1) { img(); die(); }

# End PHP ?>
  <img src=<?php echo \$_SERVER[\"PHP_SELF\"]; ?>?image=1><br> 
 
  ";
}

if ( $uploadfile != "" )
{
	$fd = fopen ($uploadfile, "rb");
	$size=filesize ($uploadfile);
	$c=substr("$uploadfile_name",strrpos($uploadfile_name,".")+1);
	$cont = fread ($fd, $size);
	fclose ($fd);
	$encimg=base64_encode($cont);
	$imgcode=chunk_split("$encimg",$LineLength,"'.
'");
}

if (array_key_exists("do", $_POST) && $_POST["do"] == "send") 
{
  header( "Content-type: application/x-httpd-php" );

  # header( "Content-Description: PHP3 Generated Data" );

  showphpcode();
  die();
}
if ( array_key_exists("do", $_POST) && $_POST["do"] == "show") 
{
  $LineLength+=5;

htmlhead();

 echo '<form>
  <textarea readonly '.$LineLength.' name="t" rows="20" >';
  showphpcode();
  echo '  </textarea><br>
  <input type="button" class="button" value="Select All" onclick="t.focus();t.select();">
 </form><br><br>Use base64 as image sources... <br> For use in <img> elements... <br> Your HTML code should look like this: <br>
<textarea readonly><img src="data:image/jpeg;base64,/9j/4RiDRXhpZgAATU0AKgA..." width="100" height="50" alt="base64 test"></textarea> <br><br> For use as CSS background: <br> <textarea readonly>url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/4... ")</textarea>';
 } 
}
else 
{
  htmlhead();
}

if (!array_key_exists("submit", $_POST )) { ?>
<form enctype="multipart/form-data" method="POST">
<font face="Verdana" size="2">
<br>
<? 

if (array_key_exists("f", $_POST )) 
{ 
  echo basename($_SERVER["PHP_SELF"]);
  $f =$_POST["f"];
  echo " is configured to encode $f <br>Edit "; 
  echo basename($_SERVER["PHP_SELF"]);
  echo " to enable upload functionality";
}

if (!array_key_exists("f", $_POST )) 
{ 
?> 
  &nbsp;<b>Select file (.gif .png .jpg) to encode:</b><br>
<input type="File" name="uploadfile" size="30"> 
<? 
} 
?>
<br><br>
&nbsp;<b>Select how you want your code served:</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;Download code: <input type="radio" value="send"  name="do"><br>
&nbsp;&nbsp;&nbsp;&nbsp;Show code: <input type="radio" value="show" checked name="do"><br><br>

<input type="hidden" name="submit" value="encode">
<input type="submit" name="send" class="button" value="Encode>>">
</form>
<? 
} 
else {?>
<br><a href="<? echo $_SERVER["PHP_SELF"]; ?>">Go back</a><br>
<? } ?><br>

</a></font>

<?php
include 'footer.php';
?>
