<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Web Calculators - JavaScript Calculators">
<meta name="keywords" content="online calculator, calculator, web calculator, javascript calculator, online tools">
<title>Online Calculators</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Online calculator</h2>

<FORM NAME="Calc">
<TABLE BORDER=4>
<TR>
<TD>
<INPUT TYPE="text"   NAME="Input" Size="16">
<br>
</TD>
</TR>
<TR>
<TD>
<INPUT TYPE="button" NAME="one"   VALUE="  1  " OnClick="Calc.Input.value += '1'">
<INPUT TYPE="button" NAME="two"   VALUE="  2  " OnCLick="Calc.Input.value += '2'">
<INPUT TYPE="button" NAME="three" VALUE="  3  " OnClick="Calc.Input.value += '3'">
<INPUT TYPE="button" NAME="plus"  VALUE="  +  " OnClick="Calc.Input.value += ' + '">
<br>
<INPUT TYPE="button" NAME="four"  VALUE="  4  " OnClick="Calc.Input.value += '4'">
<INPUT TYPE="button" NAME="five"  VALUE="  5  " OnCLick="Calc.Input.value += '5'">
<INPUT TYPE="button" NAME="six"   VALUE="  6  " OnClick="Calc.Input.value += '6'">
<INPUT TYPE="button" NAME="minus" VALUE="  -  " OnClick="Calc.Input.value += ' - '">
<br>
<INPUT TYPE="button" NAME="seven" VALUE="  7  " OnClick="Calc.Input.value += '7'">
<INPUT TYPE="button" NAME="eight" VALUE="  8  " OnCLick="Calc.Input.value += '8'">
<INPUT TYPE="button" NAME="nine"  VALUE="  9  " OnClick="Calc.Input.value += '9'">
<INPUT TYPE="button" NAME="times" VALUE="  x  " OnClick="Calc.Input.value += ' * '">
<br>
<INPUT TYPE="button" NAME="clear" VALUE="  c  " OnClick="Calc.Input.value = ''">
<INPUT TYPE="button" NAME="zero"  VALUE="  0  " OnClick="Calc.Input.value += '0'">
<INPUT TYPE="button" NAME="DoIt"  VALUE="  =  " OnClick="Calc.Input.value = eval(Calc.Input.value)">
<INPUT TYPE="button" NAME="div"   VALUE="  /  " OnClick="Calc.Input.value += ' / '">
<br>
</TD>
</TR>
</TABLE>
</FORM>
<p>&nbsp;</p>
<p>&nbsp;</p>
<SCRIPT LANGUAGE="JavaScript">
<!--
var Memory = 0;
var Number1 = "";
var Number2 = "";
var NewNumber = "blank";
var opvalue = "";

function Display(displaynumber) {
document.calculator.answer.value = displaynumber;
}

function MemoryClear() {
Memory = 0;
document.calculator.mem.value = "";
}

function MemoryRecall(answer) {
if(NewNumber != "blank") {
Number2 += answer;
} else {
Number1 = answer;
}
NewNumber = "blank";
Display(answer);
}

function MemorySubtract(answer) {
Memory = Memory - eval(answer);
}

function MemoryAdd(answer) {
Memory = Memory + eval(answer);
document.calculator.mem.value = " M ";
NewNumber = "blank";
}

function ClearCalc() {
Number1 = "";
Number2 = "";
NewNumber = "blank";
Display("");
}

function Backspace(answer) {
answerlength = answer.length;
answer = answer.substring(0, answerlength - 1);
if (Number2 != "") {
Number2 = answer.toString();
Display(Number2);
} else {
Number1 = answer.toString();
Display(Number1);
   }
}

function CECalc() {
Number2 = "";
NewNumber = "yes";
Display("");
}

function CheckNumber(answer) {
if(answer == ".") {
Number = document.calculator.answer.value;
if(Number.indexOf(".") != -1) {
answer = "";
   }
}
if(NewNumber == "yes") {
Number2 += answer;
Display(Number2);
}
else {
if(NewNumber == "blank") {
Number1 = answer;
Number2 = "";
NewNumber = "no";
}
else {
Number1 += answer;
}
Display(Number1);
   }
}
function AddButton(x) {
if(x == 1) EqualButton();
if(Number2 != "") {
Number1 = parseFloat(Number1) + parseFloat(Number2);
}
NewNumber = "yes";
opvalue = '+';
Display(Number1);
}
function SubButton(x) {
if(x == 1) EqualButton();
if(Number2 != "") {
Number1 = parseFloat(Number1) - parseFloat(Number2);
}
NewNumber = "yes";
opvalue = '-';
Display(Number1);
}
function MultButton(x) {
if(x == 1) EqualButton();
if(Number2 != "") {
Number1 = parseFloat(Number1) * parseFloat(Number2);
}
NewNumber = "yes";
opvalue = '*';
Display(Number1);
}
function DivButton(x) {
if(x == 1) EqualButton();
if(Number2 != "") {
Number1 = parseFloat(Number1) / parseFloat(Number2);
}
NewNumber = "yes";
opvalue = '/';
Display(Number1);
}
function SqrtButton() {
Number1 = Math.sqrt(Number1);
NewNumber = "blank";
Display(Number1);
}
function PercentButton() {
if(NewNumber != "blank") {
Number2 *= .01;
NewNumber = "blank";
Display(Number2);
   }
}
function RecipButton() {
Number1 = 1/Number1;
NewNumber = "blank";
Display(Number1);
}
function NegateButton() {
Number1 = parseFloat(-Number1);
NewNumber = "no";
Display(Number1);
}
function EqualButton() {
if(opvalue == '+') AddButton(0);
if(opvalue == '-') SubButton(0);
if(opvalue == '*') MultButton(0);
if(opvalue == '/') DivButton(0);
Number2 = "";
opvalue = "";
}
//   -->
</script>
<form name="calculator">
<table bgcolor="#aaaaaa" width=220>
<tr><td>
<table bgcolor="#000000" border=1>
<tr><td>
<table border=0 cellpadding=0>
<tr><td bgcolor="#000000"><b style="color:white">Calculator</b></td></tr>
<tr><td>
<table width="100%" border=0>
<tr><td colspan=6><input type="text" name="answer" size=30 maxlength=30 onChange="CheckNumber(this.value)"></td></tr>
<tr><td colspan=6>
<table border=0 cellpadding=0>
<tr><td>
<input type="text" name="mem" size=3 maxlength=3> <input type="button" name="backspace" style="width: 135px;" class="red" title="Backspace" value="Backspace" onClick="Backspace(document.calculator.answer.value); return false;"> <input type="button" name="CE" class="red" style="width: 50px;" value="CE" onClick="CECalc(); return false;"> <input type="reset" name="C" class="red" style="width: 50px;" title="Clear" value="  C  " onClick="ClearCalc(); return false;">
</td></tr>
</table>
</td></tr>
<tr><td><input type="button" name="MC" class="red" value=" MC " onClick="MemoryClear(); return false;"></td>
<td><input type="button" name="calc7" class="blue" value="  7  " onClick="CheckNumber('7'); return false;"></td>
<td><input type="button" name="calc8" class="blue" value="  8  " onClick="CheckNumber('8'); return false;"></td>
<td><input type="button" name="calc9" class="blue" value="  9  " onClick="CheckNumber('9'); return false;"></td>
<td><input type="button" name="divide" class="red" value="  /  " onClick="DivButton(1); return false;"></td>
<td><input type="button" name="sqrt" class="blue" value="sqrt" onClick="SqrtButton(); return false;"></td></tr>
<tr><td><input type="button" name="MR" class="red" value=" MR " onClick="MemoryRecall(Memory); return false;"></td>
<td><input type="button" name="calc4" class="blue" value="  4  " onClick="CheckNumber('4'); return false;"></td>
<td><input type="button" name="calc5" class="blue" value="  5  " onClick="CheckNumber('5'); return false;"></td>
<td><input type="button" name="calc6" class="blue" value="  6  " onClick="CheckNumber('6'); return false;"></td>
<td><input type="button" name="multiply" class="red" value="  *  " onClick="MultButton(1); return false;"></td>
<td><input type="button" name="percent" class="blue" value=" %  " onClick="PercentButton(); return false;"></td></tr>
<tr><td><input type="button" name="MS" class="red" value=" MS " onClick="MemorySubtract(document.calculator.answer.value); return false;"></td>
<td><input type="button" name="calc1" class="blue" value="  1  " onClick="CheckNumber('1'); return false;"></td>
<td><input type="button" name="calc2" class="blue" value="  2  " onClick="CheckNumber('2'); return false;"></td>
<td><input type="button" name="calc3" class="blue" value="  3  " onClick="CheckNumber('3'); return false;"></td>
<td><input type="button" name="minus" class="red" value="  -  " onClick="SubButton(1); return false;"></td>
<td><input type="button" name="recip" class="blue" value="1/x " onClick="RecipButton(); return false;"></td></tr>
<tr><td><input type="button" name="Mplus" class="red" value=" M+  " onClick="MemoryAdd(document.calculator.answer.value); return false;"></td>
<td><input type="button" name="calc0" class="blue" value="  0  " onClick="CheckNumber('0'); return false;"></td>
<td><input type="button" name="negate" class="blue" value="+/- " onClick="NegateButton(); return false;"></td>
<td><input type="button" name="dot" class="blue" value="  .   " onClick="CheckNumber('.'); return false;"></td>
<td><input type="button" name="plus" class="red" value=" +  " onClick="AddButton(1); return false;"></td>
<td><input type="button" name="equal" class="red" value="  =   " onClick="EqualButton(); return false;"></td>
</tr>
</table>
</td></tr>
</table>
</td></tr>
</table>
</td></tr>
</table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<SCRIPT LANGUAGE="JavaScript">
<!--
function addChar(input, character) {
if(input.value == null || input.value == "0")
input.value = character
else
input.value += character
}
function cos(form) {
form.display.value = Math.cos(form.display.value);}
function sin(form) {
form.display.value = Math.sin(form.display.value);}
function tan(form) {

form.display.value = Math.tan(form.display.value);}
function sqrt(form) {
form.display.value = Math.sqrt(form.display.value);}
function ln(form) {
form.display.value = Math.log(form.display.value);}
function exp(form) {
form.display.value = Math.exp(form.display.value);}
function sqrt(form) {
form.display.value = Math.sqrt(form.display.value);}
function deleteChar(input) {
input.value = input.value.substring(0, input.value.length - 1)
}
function changeSign(input) {
if(input.value.substring(0, 1) == "-")
input.value = input.value.substring(1, input.value.length)
else
input.value = "-" + input.value
}
function compute(form)  {
form.display.value = eval(form.display.value)}
function square(form)  {
form.display.value = eval(form.display.value) *
eval(form.display.value)}
function checkNum(str)  {
for (var i = 0; i < str.length; i++) {
var ch = str.substring(i, i+1)
if (ch < "0" || ch > "9") {
if (ch != "/" && ch != "*" && ch != "+" && ch !=
"-" && ch != "."
&& ch != "(" && ch!= ")") {
alert("invalid entry!")
return false
         }
      }
   }
return true
}
//  -->
</SCRIPT>
<!--  -->
<form>
<input name="display" value="0" size=25>
<br>
<input type="button" value="   exp  " onClick="if (checkNum(this.form.display.value))
{ exp(this.form) }">
<input type="button" value="    7    " onClick="addChar(this.form.display, '7')">
<input type="button" value="    8    " onClick="addChar(this.form.display, '8')">
<input type="button" value="    9    " onClick="addChar(this.form.display, '9')">
<input type="button" value="    /    " onClick="addChar(this.form.display, '/')">
<br>
<input type="button" value="    ln    " onClick="if (checkNum(this.form.display.value))
{ ln(this.form) }">
<input type="button" value="    4    " onClick="addChar(this.form.display, '4')">
<input type="button" value="    5    " onClick="addChar(this.form.display, '5')">
<input type="button" value="    6    " onClick="addChar(this.form.display, '6')">
<input type="button" value="    *    " onClick="addChar(this.form.display, '*')">
<br>
<input type="button" value="   sqrt  " onClick="if (checkNum(this.form.display.value))
{ sqrt(this.form) }">
<input type="button" value="    1    " onClick="addChar(this.form.display, '1')">
<input type="button" value="    2    " onClick="addChar(this.form.display, '2')">
<input type="button" value="    3    " onClick="addChar(this.form.display, '3')">
<input type="button" value="    -    " onClick="addChar(this.form.display, '-')">
<br>
<input type="button" value="    sq   " onClick="if (checkNum(this.form.display.value))

{ square(this.form) }">
<input type="button" value="   0     " onClick="addChar(this.form.display, '0')">
<input type="button" value="    .    " onClick="addChar(this.form.display, '.')">
<input type="button" value="   +/-   " onClick="changeSign(this.form.display)">
<input type="button" value="    +    " onClick="addChar(this.form.display, '+')">
<br>
<input type="button" value="    (    " onClick="addChar(this.form.display, '(')">
<input type="button" value="   cos   " onClick="if (checkNum(this.form.display.value))
{ cos(this.form) }">
<input type="button" value="   sin   " onClick="if (checkNum(this.form.display.value))
{ sin(this.form) }">
<input type="button" value="   tan   " onClick="if (checkNum(this.form.display.value))
{ tan(this.form) }">
<input type="button" value="    )    " onClick="addChar(this.form.display, ')')">
<br>
<input type="button" value="Clear" onClick="this.form.display.value = 0 ">
<input type="button" style="width: 150px;" value="Back Space" onClick="deleteChar(this.form.display)">
<input type="button" value="Enter" name="enter" onClick="if (checkNum(this.form.display.value))
{ compute(this.form) }">
</FORM>

<?php
include 'footer.php';
?>
