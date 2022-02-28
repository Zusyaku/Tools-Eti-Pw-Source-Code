<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="online crontab code genrator, crontab code generator, crontab generator, crontab">
<title>Crontab Code Generator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<style type="text/css">
/* <![CDATA[ */
h3 {
	margin:0;
}
select {
	height:100px;
	width:100px;
}
br {
	clear:both;
}
.box {
	width:180px;
	float:left;
}
/* ]]> */
</style>
<script language="javascript" type="text/javascript">
/* <![CDATA[ */
function init() {
	JSL.dom(".chooser").click(function(e) {
		var for_element = this.name.replace(/_chooser/,"");

		JSL.dom(for_element).disabled = (this.value !== "1");
	});
	
	JSL.dom("crontab-form").on("submit", function(e) {
		JSL.event(e).stop();
		
		var minute, hour, day, month, weekday;
		
		minute	= getSelection('minute');
		hour	= getSelection('hour');
		day		= getSelection('day');
		month	= getSelection('month');
		weekday	= getSelection('weekday');
		
		var command = JSL.dom("command").value;
		JSL.dom("cron").value = minute + "\t" + hour + "\t" + day + "\t" + month + "\t" + weekday + "\t" + command;
	});
}

function getSelection(name) {
	var chosen;
	if(JSL.dom(name + "_chooser_every").checked) {
		chosen = '*';
	} else {
		var all_selected = [];
		JSL.dom("#" + name+ " option").each(function(ele) {
			if(ele.selected)
				all_selected.push(ele.value);
		});
		if(all_selected.length)
			chosen = all_selected.join(",");
		else
			chosen = '*';
	}
	return chosen;
}
/* ]]> */
</script>

</head>
<body>

<a href="./">Free Online Tools</a>
  
<center>
<h2>Crontab Code Generator</h2>

<form method="post" action="" id="crontab-form">

Command: <input type="text" name="command" id="command" size="70" /><br />
<br>
<div class="box">
<h3>Minute</h3>
<input type="radio" name="minute_chooser" id="minute_chooser_every" class="chooser" value="0" checked="checked" /><label for="minute_chooser_every">Every Minute</label><br />

<input type="radio" name="minute_chooser" id="minute_chooser_choose" class="chooser" value="1" /><label for="minute_chooser_choose">Choose</label><br />

<select name="minute" id="minute" multiple="multiple" disabled="disabled">
<option value="0">0</option>
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
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
</select>
</div>

<div class="box">
<h3>Hour</h3>
<input type="radio" name="hour_chooser" id="hour_chooser_every" class="chooser" value="0" checked="checked" /><label for="hour_chooser_every">Every Hour</label><br />

<input type="radio" name="hour_chooser" id="hour_chooser_choose" class="chooser" value="1" /><label for="hour_chooser_choose">Choose</label><br />

<select name="hour" id="hour" multiple="multiple" disabled="disabled">
<option value="0">12 Midnight</option>
<option value="1">1 AM</option><option value="2">2 AM</option><option value="3">3 AM</option><option value="4">4 AM</option><option value="5">5 AM</option><option value="6">6 AM</option><option value="7">7 AM</option><option value="8">8 AM</option><option value="9">9 AM</option><option value="10">10 AM</option><option value="11">11 AM</option><option value="12">12 Noon</option>
<option value="13">1 PM</option><option value="14">2 PM</option><option value="15">3 PM</option><option value="16">4 PM</option><option value="17">5 PM</option><option value="18">6 PM</option><option value="19">7 PM</option><option value="20">8 PM</option><option value="21">9 PM</option><option value="22">10 PM</option><option value="23">11 PM</option></select>
</div>
<div class="box">
<h3>Day</h3>
<input type="radio" name="day_chooser" id="day_chooser_every" class="chooser" value="0" checked="checked" /><label for="day_chooser_every">Every Day</label><br />

<input type="radio" name="day_chooser" id="day_chooser_choose" class="chooser" value="1" /><label for="day_chooser_choose">Choose</label><br />

<select name="day" id="day" multiple="multiple" disabled="disabled">
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
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
</select>
</div>

<div class="box">
<h3>Month</h3>
<input type="radio" name="month_chooser" id="month_chooser_every" class="chooser" value="0" checked="checked" /><label for="month_chooser_every">Every Month</label><br />

<input type="radio" name="month_chooser" id="month_chooser_choose" class="chooser" value="1" /><label for="month_chooser_choose">Choose</label><br />

<select name="month" id="month" multiple="multiple" disabled="disabled">
<option value="1">January</option>
<option value="2">February</option>
<option value="3">March</option>
<option value="4">April</option>
<option value="5">May</option>
<option value="6">June</option>
<option value="7">July</option>
<option value="8">Augest</option>
<option value="9">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
</div>

<div class="box">
<h3>Weekday</h3>
<input type="radio" name="weekday_chooser" id="weekday_chooser_every" class="chooser" value="0" checked="checked" /><label for="weekday_chooser_every">Every Weekday</label><br />

<input type="radio" name="weekday_chooser" id="weekday_chooser_choose" class="chooser" value="1" /><label for="weekday_chooser_choose">Choose</label><br />

<select name="weekday" id="weekday" multiple="multiple" disabled="disabled">
<option value="0">Sunday</option>
<option value="1">Monday</option>
<option value="2">Tuesday</option>
<option value="3">Wednesday</option>
<option value="4">Thursday</option>
<option value="5">Friday</option>
<option value="6">Saturday</option>
</select>
</div>

<br /><br />
Result Crontab Line:<br />
<textarea name="cron" id="cron" style="width: 500px;height: 70px;"></textarea>
<br />
<input type="submit" class="button" name="action" id="action" value="Create Crontab Line" />
</form>
</center>
<br>
<h3>About Crontab Code Generator</h3>
<p><strong class="highlight">Cron is a automation tool for Linux systems.</strong></p>

<blockquote><p>Cron is the name of program that enables unix users to execute commands or scripts (groups of commands) automatically at a specified time/date. It is normally used for sys admin commands, like makewhatis, which builds a search database for the man -k command, or for running a backup script, but can be used for anything. A common use for it today is connecting to the internet and downloading your email.</p>
<a href="http://www.unixgeeks.org/security/newbie/unix/cron-1.html" target="_blank">Introduction for noobs about Cron</a>
</blockquote>

<p>cron is driven by a crontab, a configuration file that specifies shell commands to run periodically on a given schedule.</p>

<h3>crontab syntax</h3>

<p><strong class="highlight">Each line in a crontab file is a job</strong> and follows a particular format as a series of fields, separated by spaces or tabs(see example below). Each field can have a single value or a series of values.</p>

<h3>crontab Operators</h3>

<p>There are multiple ways of specifying several date/time values in a field:</p>

<ul>
<li>The comma(,) specifies a list of values, for example: "1,3,4,7,8"</li>
<li>The dash(-) specifies a range. Example: "1-6", which is equivalent to "1,2,3,4,5,6"</li>
<li>The asterisk(*) operator specifies all possible values for a field. For example, an asterisk in the hour time field would be the same as 'every hour'.</li>
</ul>

<p>There is also an operator which some extended versions of cron support, the slash(/) operator, which can be used to skip a given number of values. For example, "*/3" in the hour time field is equivalent to "0,3,6,9,12,15,18,21". So "*" specifies 'every hour' but the "*/3" means only those hours divisible by 3.</p>

<p>Example: the following will clear the Apache error log at one minute past midnight each day.</p>

<pre><code class="crontab">    01 00 * * * echo "" > /www/apache/logs/error_log</code></pre>

<h3>Fields</h3>

<pre>
 .---------------- minute (0 - 59) 
 |  .------------- hour (0 - 23)
 |  |  .---------- day of month (1 - 31)
 |  |  |  .------- month (1 - 12) OR jan,feb,mar,apr ... 
 |  |  |  |  .---- day of week (0 - 6) (Sunday=0 or 7)  OR sun,mon,tue,wed,thu,fri,sat 
 |  |  |  |  |
 *  *  *  *  *  &lt;command to be executed&gt;
</pre>

<p>For more information about the cron and crontab, run the command <code>man cron</code> and <code>man crontab</code></p>

<h3>About this Crontab Code Generator:</h3>

<p>You can use this tool to generate the crontab commands easily. Just <strong class="highlight">enter the command and the intervals it should be executed on</strong> - this tool will create a line in crontab syntax that will do the work for you. All you have to do is add the generated line to your crontab file. Once the result line is generated, <strong class="highlight">run the command 'crontab -e' - this will open your crontab file in an editor</strong>. Just <strong class="highlight">copy the generated line into this editor and save the file</strong> - you are done.</p>

<h3>Apache Example</h3>

<p>For example, lets say you want to clear the apache log file every day at midnight. The command to be executed is:</p>

<pre><code class="cli">echo "" > /www/apache/logs/error_log</code></pre>

<p>Enter that command into the command input field in the application. Next click on the 'Choose' radio button in the minute and set it to 0. Then select the 'Choose' option in Hour and set it to 12 Midnight. Live the rest as it it - we want the command to be executed every day. Now just click on the 'Create Crontab Line'. The final crontab line will show up in the 'Result crontab Line' textarea.</p>
<div class="row">
<div class="span4">
</div>

<script src="./js/jsl.js" type="text/javascript"></script>
<script src="./js/common.js" type="text/javascript"></script>

<?php
include 'footer.php';
?>
