<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Remove Duplicate Lines">
<meta name="keywords" content="remove duplicate lines, duplicate lines">
<!-- "ETI Free Online Tools - Remove Duplicate Lines" -->
<title>Remove Duplicate Lines</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>
  
<a href="./">Free Online Tools</a>

<h2>Remove Duplicate Lines</h2>

<script type="text/JavaScript">
<!--
//Remove Duplicate Lines from Text (JavaScript)

function cleartext(){
document.getElementById('input_output').value = '';
document.getElementById('removed').innerHTML = ''
if(document.getElementById('dis_rem').checked == true) document.getElementById('removed_output').value = '';}
function rduplin(){
var text = document.getElementById('input_output').value;
text = text.replace(/\r/g,'');
var textinarr = new Array();
textinarr = text.split('\n');
var len = textinarr.length;
var textoutarr = new Array();
var textoutarrcnt = 0;
var cachearr = new Array();
var cachecnt = 0;
var hash = {};
var xkey = '';
var hkey = '';
var belong2 = 'pbclevtug grkgzrpunavp.pbz';
var cs = document.getElementById('case_sen').checked;
var rel = document.getElementById('rel').checked;
var dis = document.getElementById('dis_rem').checked;

if(cs == true && rel == true && dis == true){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey;
if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {if(xkey == '') cachearr[cachecnt] = '(Line ' + (x+1) + ' was an empty line.)'; else cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + '.) ' + xkey; cachecnt++;}}}

if(cs == true && rel == true && dis == false){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey;
if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}

if(cs == true && rel == false && dis == true){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey;
if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + '.) ' + xkey; cachecnt++;}}}

if(cs == true && rel == false && dis == false){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey;
if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}

if(cs == false && rel == true && dis == true){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey.toUpperCase();
if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {if(xkey == '') cachearr[cachecnt] = '(Line ' + (x+1) + ' was an empty line.)'; else cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + '.) ' + xkey; cachecnt++;}}}

if(cs == false && rel == true && dis == false){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey.toUpperCase();
if(hash[hkey] == null && xkey != '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}

if(cs == false && rel == false && dis == true){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey.toUpperCase();
if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachearr[cachecnt] = '(Line ' + (x+1) + ' was a duplicate of line ' + hash[hkey] + ') ' + xkey; cachecnt++;}}}

if(cs == false && rel == false && dis == false){
for(var x=0;x<len;x++){
xkey = textinarr[x];
hkey = ' ' + xkey.toUpperCase();
if(hash[hkey] == null || xkey == '') {hash[hkey] = x+1; textoutarr[textoutarrcnt] = xkey; textoutarrcnt++;} else {cachecnt++;}}}
document.getElementById('input_output').value = textoutarr.join('\n');
if(dis == true) document.getElementById('removed_output').value = cachearr.join('\n');
var lines = 'lines';
if(cachecnt == 1) lines = 'line';
document.getElementById('removed').innerHTML = cachecnt + ' duplicate ' + lines + ' removed';}
function SelectAll(id) {
document.getElementById(id).focus();
document.getElementById(id).select();}
//-->
</script>

<center>
<div id="menubuttonbar"><span id="menubutton"></span></div>
<div><input type="checkbox" id="case_sen" />Case sensitive
<input type="checkbox" id="rel" />Remove empty lines
<input type="checkbox" id="dis_rem" onClick="if(this.checked==true)document.getElementById('removed_div').style.display='block'; if(this.checked==false)document.getElementById('removed_div').style.display='none';" />Display removed
<input type="button" class="buttn" title="Select All Text" value=" Select " onClick="SelectAll('input_output')" /> <input type="button" class="buttn" title="Clear All Text" value=" Clear " onClick="cleartext();" /> <span id="removed"></span></div>

<textarea id="input_output" style="width:99%; height:382px; margin-top:3px;" wrap="off" spellcheck="false">
Enter your text here, select options and click the "Remove Duplicate Lines" button from above.
Duplicate text removal is only between content on new lines and duplicate text within the same line will not be removed.
The line order/sorting will not be affected other than subsequent duplicate lines being deleted.
Check the "Case sensitive" checkbox for case sensitive matching of duplicate line removal.
Check the "Remove empty lines" checkbox to remove/delete all blank/empty lines.
Check the "Display removed" checkbox to save removed lines. Lines are prefixed with removal information for reference.

Example:
Click the "Remove Duplicate Lines" button and watch these duplicate lines become one.
Click the "Remove Duplicate Lines" button and watch these duplicate lines become one.
Click the "Remove Duplicate Lines" button and watch these duplicate lines become one.
test@test.tt
test@test.tt
test@test.tt
</textarea>
</center>

<div id="removed_div" style="display:none;">
<textarea id="removed_output" rows="6" style="width:99%; margin-top:3px;" wrap="off" spellcheck="false">
Removed Line Box - Removed lines will display here
</textarea></div>
<br>
<button type="button" class="button" onClick="rduplin()" />Remove Duplicate Lines</button>
<?php
include 'footer.php';
?>
