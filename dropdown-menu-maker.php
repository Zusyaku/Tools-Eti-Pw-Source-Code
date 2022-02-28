<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Drop-Down Menu Maker">
<meta name="keywords" content="drop-down menu, drop-down menu maker, drop down menu creator, menu maker, online menu maker, online drop down menu maker">
<title>Drop-Down Menu Creator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2 class="title">Drop-Down Menu Maker</h2>
	<div class="entry">
<script language="JavaScript" type="text/javascript">
<!-- Begin
	function generate(form){
		var txt = '<!-- Copy this code into the body of your html document  -->\r\n\r\n';

		if (document.jump.go[0].checked) {
			txt += "<form name=\"jump\">\n<select name=\"menu\" 	onChange=\"location=document.jump.menu.options[document.jump.menu.selectedIndex].value;\" value=\"GO\">\n";
			}

		if (document.jump.go[1].checked) {
			txt += "<form name=\"jump\">\n<select name=\"menu\">\n";
			var Button = "<input type=\"button\" onClick=\"location=document.jump.menu.options[document.jump.menu.selectedIndex].value;\" value=\"GO\">\n";
		}


		if (document.jump.go[2].checked) {
			txt += "<form name=\"jump\">\n<script language='JavaScript' type='text/javascript'>\nfunct" +
			"ion jumpMenu(){\nlocation=document.jump.menu.options[document.jump.menu.selectedIndex].value;\n}\n" +
			"</sc" + "ript>\n<select name=\"menu\" />\n";
			var Button = "<a href=\"Javascript:jumpMenu()\">"+
			"<IMG SRC=\""+document.jump.image.value+"\" border=0></a>\n";
		}
		for (jig = 5; jig <= 24; jig = jig + 2) {
			if (form[jig].value)
			{
			   txt += "<option";
			   if (form[jig+1].value)
			   {
			   txt += " value=\""+form[jig+1].value+"\"";
			   }
			   else
			   {
			   txt += " value=\"#\"";
			   }
			   txt += ">"+form[jig].value+"</option>\n";
			}

		}

		if (document.jump.go[0].checked) {
			txt += "</select>\n</form>\n";
		}

		if (document.jump.go[1].checked) {
			txt += "</select>\n"+Button+"</form>\n";
		}

		if (document.jump.go[2].checked) {
			txt += "</select>\n"+Button+"</form>\n";
		   }

		document.mail.source.value=txt;
	}

	function View(text) {
		msg=open("about:blank","DisplayWindow","statusbar=0,menubar=0,width=300,height=100");
		msg.document.writeln('<html><body>');
		msg.document.writeln(text);
		msg.document.writeln('</body></html>');
		msg.document.close();
	}

// End -->

</script>
<div class="box">
<form name="jump">


<div class="tcat" style="width:96%;padding-right:10px;">Choose menu button type:</div><br />
<div class="alt_1"><input type="radio" checked="" name="go" />Load selected page immediately</div>
<div class="alt_1"><input type="radio" name="go" />Use <button type="button"/>Go</button> button</div>
<div class="alt_1"><input type="radio" name="go" />Use image button (Image URL) <input type="text" size="20" name="image" value="http://" />
</div>

<br>	
Text Shown and Link URL:<BR>						
Link text / http://

							<div class="alt_1" >
							<input type="text" size="20" name="text1" value="Link text"/></div>
							<div class="alt_1">
							<input type="text" size="20" name="url1" value="http://" /></div>

							<div class="alt_1">
							<input type="text" size="20" name="text2" value="Link text"/></div>
							<div class="alt_1">
							<input type="text" size="20" name="url2" value="http://" /></div>

							<div class="alt_1" >
							<input type="text" size="20" name="text3" value="Link text"/></div>
							<div class="alt_1">
							<input type="text" size="20" name="url3" value="http://" /></div>

							<div class="alt_1">
							<input type="text" size="20" name="text4" value="Link text"/></div>
							<div class="alt_1" >
							<input type="text" size="20" name="url4" value="http://" /></div>

							<div class="alt_1">
							<input type="text" size="20" name="text5" value="Link text"/></div>
							<div class="alt_1">
							<input type="text" size="20" name="url5" value="http://" /></div>

							<div class="alt_1" >
							<input type="text" size="20" name="text6" value="Link text"/></div>
							<div class="alt_1">
							<input type="text" size="20" name="url6" value="http://" /></div>

							<div class="alt_1" >
							<input type="text" size="20" name="text7" value="Link text"/></div>
							<div class="alt_1" >
							<input type="text" size="20" name="url7" value="http://" /></div>

							<div class="alt_1" >
							<input type="text" size="20" name="text8" value="Link text"/></div>
							<div class="alt_1" >
							<input type="text" size="20" name="url8" value="http://" /></div>

							<div class="alt_1" >
							<input type="text" size="20" name="text9" value="Link text"/></div>
							<div class="alt_1" >
							<input type="text" size="20" name="url9" value="http://" /></div>

							<div class="alt_1" >
							<input type="text" size="20" name="text10" value="Link text"/></div>
							<div class="alt_1" >
							<input type="text" size="20" name="url10" value="http://" /> </div>

					<div class="but">
					<br />
					<input type="button" class="button" value="Generate" onClick="generate(this.form)" />
					<button type="reset"/>Reset</button> <br/><br/><div style="clear:both"></div></div>


</form>



<form name="mail">
			<input type="hidden" name="scriptname" value="Drop Down Menu Generator" />

					  <div class="but">
						<input type="button" name="DOC" class="button" style="width: 280px;" value="Show me the Drop-Down Menu!" onClick="View(this.form.source.value);" />		 <br/><br/>
					 </div>

					<div style="text-align:center; width:98%">
						<strong>Copy and Paste this code </strong><br/><br/>
						<textarea name="source" style="width: 550px;height: 200px;"></textarea>
					</div>


</form>
<br />
<div style="clear:both"></div>
</div>

<?php
include 'footer.php';
?>
