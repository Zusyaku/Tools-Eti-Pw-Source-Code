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
<meta NAME="description" content="HTML Validator Tool">
<META name="keywords" content="online html validator, html validator, html validate, validate html, validate website">
<title>HTML Validator Tool</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>HTML Validator</h2>
	<div class="entry">

<script language="javascript">
function urlvalidate()
{
	document.getElementById("filevalidateform").style.display ='none';
	document.getElementById("urlvalidateform").style.display ='';
	document.getElementById("lifilevalidate").style.background='#cc0000';
	document.getElementById("liurlvalidate").style.background='white';

}

function filevalidate()
{
	document.getElementById("filevalidateform").style.display ='';
	document.getElementById("urlvalidateform").style.display ='none';
	document.getElementById("liurlvalidate").style.background='#cc0000';
	document.getElementById("lifilevalidate").style.background='white';

}


</script>
<div id="tabmenu">
Choose: 
	<a href="#" onClick="urlvalidate()">By URL</a> |
	<a href="#" onClick="filevalidate()">By File Upload</a>

</div>
<br />
<br />
<div id="urlvalidateform">
<div class="box" style="width:100%">
			<form method="get" action="http://validator.w3.org/check">
By URL:<br><br />
								<div class="alt1_40">
								Enter URL
								</div>
								<div class="alt1_60">
								<input id="uri" name="uri" />
								</div>

								<div class="alt1_40">
								Encoding
								</div>
								<div class="alt1_60">
								<select id="charset" name="charset">
								<option value="(detect automatically)">(detect automatically)
								</option>
								<option value="utf-8 (Unicode, worldwide)">utf-8
								(Unicode, worldwide)</option>
								<option value="utf-16 (Unicode, worldwide)">utf-16
								(Unicode, worldwide)</option>
								<option value="iso-8859-1 (Western Europe)">iso-8859-1
								(Western Europe)</option>
								<option value="iso-8859-2 (Central Europe)">iso-8859-2
								(Central Europe)</option>
								<option value="iso-8859-3 (Southern Europe)">iso-8859-3
								(Southern Europe)</option>
								<option value="iso-8859-4 (Baltic Rim)">iso-8859-4
								(Baltic Rim)</option>
								<option value="iso-8859-5 (Cyrillic)">iso-8859-5
								(Cyrillic)</option>
								<option value="iso-8859-6-i (Arabic)">iso-8859-6-i
								(Arabic)</option>
								<option value="iso-8859-7 (Greek)">iso-8859-7 (Greek)
								</option>
								<option value="iso-8859-8-i (Hebrew)">iso-8859-8-i
								(Hebrew)</option>
								<option value="iso-8859-9 (Turkish)">iso-8859-9
								(Turkish)</option>
								<option value="iso-8859-10 (Latin 6)">iso-8859-10
								(Latin 6)</option>
								<option value="iso-8859-13 (Latin 7)">iso-8859-13
								(Latin 7)</option>
								<option value="iso-8859-14 (Celtic)">iso-8859-14
								(Celtic)</option>
								<option value="iso-8859-15 (Latin 9)">iso-8859-15
								(Latin 9)</option>
								<option value="us-ascii (basic English)">us-ascii
								(basic English)</option>
								<option value="euc-jp (Japanese, Unix)">euc-jp (Japanese,
								Unix)</option>
								<option value="shift_jis (Japanese, Win/Mac)">shift_jis
								(Japanese, Win/Mac)</option>
								<option value="iso-2022-jp (Japanese, email)">iso-2022-jp
								(Japanese, email)</option>
								<option value="euc-kr (Korean)">euc-kr (Korean)
								</option>
								<option value="gb2312 (Chinese, simplified)">gb2312
								(Chinese, simplified)</option>
								<option value="gb18030 (Chinese, simplified)">gb18030
								(Chinese, simplified)</option>
								<option value="big5 (Chinese, traditional)">big5
								(Chinese, traditional)</option>
								<option value="tis-620 (Thai)">tis-620 (Thai)
								</option>
								<option value="koi8-r (Russian)">koi8-r (Russian)
								</option>
								<option value="koi8-u (Ukrainian)">koi8-u (Ukrainian)
								</option>
								<option value="macintosh (MacRoman)">macintosh (MacRoman)
								</option>
								<option value="windows-1250 (Central Europe)">windows-1250
								(Central Europe)</option>
								<option value="windows-1251 (Cyrillic)">windows-1251
								(Cyrillic)</option>
								<option value="windows-1252 (Western Europe)">windows-1252
								(Western Europe)</option>
								<option value="windows-1253 (Greek)">windows-1253
								(Greek)</option>
								<option value="windows-1254 (Turkish)">windows-1254
								(Turkish)</option>
								<option value="windows-1255 (Hebrew)">windows-1255
								(Hebrew)</option>
								<option value="windows-1256 (Arabic)">windows-1256
								(Arabic)</option>
								<option value="windows-1257 (Baltic Rim)">windows-1257
								(Baltic Rim)</option>
								</select>
								</div>

								<div class="alt1_40">
								Type
								</div>
								<div class="alt1_60">
								<select id="doctype" name="doctype">
								<option value="Inline">(detect automatically)
								</option>
								<option>XHTML 1.1</option>
								<option>XHTML Basic 1.0</option>
								<option>XHTML 1.0 Strict</option>
								<option>XHTML 1.0 Transitional</option>
								<option>XHTML 1.0 Frameset</option>
								<option>HTML 4.01 Strict</option>
								<option>HTML 4.01 Transitional</option>
								<option>HTML 4.01 Frameset</option>
								<option>HTML 3.2</option>
								<option>HTML 2.0</option>
								</select>
								</div>

								<div class="alt1_40">
																<input name="ss" type="checkbox" value="1" /> Show Source
								</div>

								<div class="alt1_40">
																<input name="sp" type="checkbox" value="1" /> Show Parse Tree
								</div>

								<div class="alt1_40">
																<input name="outline" type="checkbox" value="1" /> Show Outline
								</div>

								<div class="alt1_40">
																<input name="noatt" type="checkbox" value="1" /> Exclude Attributes
								</div>

								<div class="alt1_40">
																<input name="No200" type="checkbox" value="1" /> Validate error pages
								</div>

								<div class="alt1_40">
								<input name="verbose" type="checkbox" value="1" checked="checked" /> Verbose Output
								</div>

						<div style="padding-left:10px;width:80%;"><br /><input type="submit"  class="button" value="Validate this page" /><br /></div>

			</form>

</div>
</div>

<div id="filevalidateform" style="display:none;">
<div class="box" style="width:100%">
By File Upload:<br /><br />
			<form method="post" enctype="multipart/form-data" action="http://validator.w3.org/check">

							<div class="alt1_40">
								Select File
							</div>
							<div class="alt1_60">
								<input type="file" id="uploaded_file" name="uploaded_file" />
								</div>

								<div class="alt1_40">
								Encoding
							</div>
							<div class="alt1_60">
								<select id="charset" name="charset">
								<option value="(detect automatically)">(detect automatically)
								</option>
								<option value="utf-8 (Unicode, worldwide)">utf-8
								(Unicode, worldwide)</option>
								<option value="utf-16 (Unicode, worldwide)">utf-16
								(Unicode, worldwide)</option>
								<option value="iso-8859-1 (Western Europe)">iso-8859-1
								(Western Europe)</option>
								<option value="iso-8859-2 (Central Europe)">iso-8859-2
								(Central Europe)</option>
								<option value="iso-8859-3 (Southern Europe)">iso-8859-3
								(Southern Europe)</option>
								<option value="iso-8859-4 (Baltic Rim)">iso-8859-4
								(Baltic Rim)</option>
								<option value="iso-8859-5 (Cyrillic)">iso-8859-5
								(Cyrillic)</option>
								<option value="iso-8859-6-i (Arabic)">iso-8859-6-i
								(Arabic)</option>
								<option value="iso-8859-7 (Greek)">iso-8859-7 (Greek)
								</option>
								<option value="iso-8859-8-i (Hebrew)">iso-8859-8-i
								(Hebrew)</option>
								<option value="iso-8859-9 (Turkish)">iso-8859-9
								(Turkish)</option>
								<option value="iso-8859-10 (Latin 6)">iso-8859-10
								(Latin 6)</option>
								<option value="iso-8859-13 (Latin 7)">iso-8859-13
								(Latin 7)</option>
								<option value="iso-8859-14 (Celtic)">iso-8859-14
								(Celtic)</option>
								<option value="iso-8859-15 (Latin 9)">iso-8859-15
								(Latin 9)</option>
								<option value="us-ascii (basic English)">us-ascii
								(basic English)</option>
								<option value="euc-jp (Japanese, Unix)">euc-jp (Japanese,
								Unix)</option>
								<option value="shift_jis (Japanese, Win/Mac)">shift_jis
								(Japanese, Win/Mac)</option>
								<option value="iso-2022-jp (Japanese, email)">iso-2022-jp
								(Japanese, email)</option>
								<option value="euc-kr (Korean)">euc-kr (Korean)
								</option>
								<option value="gb2312 (Chinese, simplified)">gb2312
								(Chinese, simplified)</option>
								<option value="gb18030 (Chinese, simplified)">gb18030
								(Chinese, simplified)</option>
								<option value="big5 (Chinese, traditional)">big5
								(Chinese, traditional)</option>
								<option value="tis-620 (Thai)">tis-620 (Thai)
								</option>
								<option value="koi8-r (Russian)">koi8-r (Russian)
								</option>
								<option value="koi8-u (Ukrainian)">koi8-u (Ukrainian)
								</option>
								<option value="macintosh (MacRoman)">macintosh (MacRoman)
								</option>
								<option value="windows-1250 (Central Europe)">windows-1250
								(Central Europe)</option>
								<option value="windows-1251 (Cyrillic)">windows-1251
								(Cyrillic)</option>
								<option value="windows-1252 (Western Europe)">windows-1252
								(Western Europe)</option>
								<option value="windows-1253 (Greek)">windows-1253
								(Greek)</option>
								<option value="windows-1254 (Turkish)">windows-1254
								(Turkish)</option>
								<option value="windows-1255 (Hebrew)">windows-1255
								(Hebrew)</option>
								<option value="windows-1256 (Arabic)">windows-1256
								(Arabic)</option>
								<option value="windows-1257 (Baltic Rim)">windows-1257
								(Baltic Rim)</option>
								</select>
								</div>

								<div class="alt1_40">
								Type
							</div>
							<div class="alt1_60">
								<select id="doctype" name="doctype">
								<option value="Inline">(detect automatically)
								</option>
								<option>XHTML 1.1</option>
								<option>XHTML Basic 1.0</option>
								<option>XHTML 1.0 Strict</option>
								<option>XHTML 1.0 Transitional</option>
								<option>XHTML 1.0 Frameset</option>
								<option>HTML 4.01 Strict</option>
								<option>HTML 4.01 Transitional</option>
								<option>HTML 4.01 Frameset</option>
								<option>HTML 3.2</option>
								<option>HTML 2.0</option>
								</select>
								</div>

								<div class="alt1_40">
																<input name="ss" type="checkbox" value="1" /> Show Source
							</div>

								<div class="alt1_40">
																<input name="sp" type="checkbox" value="1" /> Show Parse Tree
							</div>

								<div class="alt1_40">
																<input name="outline" type="checkbox" value="1" /> Show Outline
							</div>

								<div class="alt1_40">
																<input name="noatt" type="checkbox" value="1" /> Exclude Attributes
							</div>

								<div class="alt1_40">
																<input name="No200" type="checkbox" value="1" /> Validate error pages
							</div>

								<div class="alt1_40">
										<input name="verbose" type="checkbox" value="1" checked="checked" /> Verbose Output
							</div>

								<div style="padding-left:10px;width:80%;"><br/><input type="submit" class="button" value="Validate this page" /><br/></div>

			</form>
</div>
</div>

<br><br><br>
<?php
include 'footer.php';
?>
