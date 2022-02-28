<!DOCTYPE html>
<html lang="en">
<head>
<title>Verify Phone Number Online</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Verify Email Address Online - Free Email Verifier">
<meta name="keywords" content="verify phone number, phone number verifier, verify number, phone number, phone number verification, verify phone, phone number verification, phone number verifier, phone number validation, online phone number validation, проверка на телефонен номер"/>
<meta name="author" content="ETI's Free Stuff - www.eti.pw">
<meta name="robots" content="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Free Phone Number Verifier - Verify Phone Number Online - Phone Number Verification</h2>
This verification tool actually connects to any phone number and checks whether the number is real and exists or not.<br>

<?php

// API Access Key
// from: http://apilayer.net   https://numverify.com
// from: http://apilayer.net/api/validate?access_key=your-api-key&number=0889456456&country_code=BG&format=1
$access_key = 'your-api-key-here';

$number = htmlentities($_POST["phonenumber"]);

$country = ($_POST["country"]);

if(isset($_POST['phonenumber']))
{

echo <<<HTML
<br>
<form method="post" action="">
<input type="text" name="phonenumber" id="phonenumber" placeholder="phonenumber" title="Enter Phone Number here" />
                               <select name="country">
                               <option>Choose Country Code</option>
                               <option value="AF">Afghanistan (AF)</option>
                               <option value="AL">Albania (AL)</option>
                               <option value="DZ">Algeria (DZ)</option>
                               <option value="AS">American Samoa (AS)</option>
                               <option value="AD">Andorra (AD)</option>
                               <option value="AO">Angola (AO)</option>
                               <option value="AI">Anguilla (AI)</option>
                               <option value="AG">Antigua (AG)</option>
                               <option value="AR">Argentina (AR)</option>
                               <option value="AM">Armenia (AM)</option>
                               <option value="AW">Aruba (AW)</option>
                               <option value="AU">Australia (AU)</option>
                               <option value="AT">Austria (AT)</option>
                               <option value="AZ">Azerbaijan (AZ)</option>
                               <option value="BS">The Bahamas (BS)</option>
                               <option value="BH">Bahrain (BH)</option>
                               <option value="BD">Bangladesh (BD)</option>
                               <option value="BB">Barbados (BB)</option>
                               <option value="BY">Belarus (BY)</option>
                               <option value="BE">Belgium (BE)</option>
                               <option value="BZ">Belize (BZ)</option>
                               <option value="BJ">Benin (BJ)</option>
                               <option value="BM">Bermuda (BM)</option>
                               <option value="BT">Bhutan (BT)</option>
                               <option value="BO">Bolivia (BO)</option>
                               <option value="BA">Bosnia and Herzegovina (BA)</option>
                               <option value="BW">Botswana (BW)</option>
                               <option value="BR">Brazil (BR)</option>
                               <option value="IO">British Indian Ocean Territory (IO)</option>
                               <option value="BN">Brunei (BN)</option>
                               <option value="BG">Bulgaria (BG)</option>
                               <option value="BF">Burkina Faso (BF)</option>
                               <option value="BI">Burundi (BI)</option>
                               <option value="KH">Cambodia (KH)</option>
                               <option value="CM">Cameroon (CM)</option>
                               <option value="CA">Canada (CA)</option>
                               <option value="CV">Cape Verde (CV)</option>
                               <option value="KY">Cayman Islands (KY)</option>
                               <option value="CF">Central African Republic (CF)</option>
                               <option value="TD">Chad (TD)</option>
                               <option value="CL">Chile (CL)</option>
                               <option value="CN">China (CN)</option>
                               <option value="CO">Colombia (CO)</option>
                               <option value="KM">Comoros (KM)</option>
                               <option value="CG">Republic of the Congo (CG)</option>
                               <option value="CD">Democratic Republic of Congo (CD)</option>
                               <option value="CK">Cook Islands (CK)</option>
                               <option value="CR">Costa Rica (CR)</option>
                               <option value="CI">CÃ´te d'Ivoire (CI)</option>
                               <option value="HR">Croatia (HR)</option>
                               <option value="CU">Cuba (CU)</option>
                               <option value="CY">Cyprus (CY)</option>
                               <option value="CZ">Czech Republic (CZ)</option>
                               <option value="DK">Denmark (DK)</option>
                               <option value="DJ">Djibouti (DJ)</option>
                               <option value="DM">Dominica (DM)</option>
                               <option value="DO">Dominican Republic (DO)</option>
                               <option value="EC">Ecuador (EC)</option>
                               <option value="EG">Egypt (EG)</option>
                               <option value="SV">El Salvador (SV)</option>
                               <option value="GQ">Equatorial Guinea (GQ)</option>
                               <option value="ER">Eritrea (ER)</option>
                               <option value="EE">Estonia (EE)</option>
                               <option value="ET">Ethiopia (ET)</option>
                               <option value="FK">Falkland Islands (FK)</option>
                               <option value="FO">Faroe Islands (FO)</option>
                               <option value="FJ">Fiji (FJ)</option>
                               <option value="FI">Finland (FI)</option>
                               <option value="FR">France (FR)</option>
                               <option value="GF">French Guiana (GF)</option>
                               <option value="PF">French Polynesia (PF)</option>
                               <option value="GA">Gabon (GA)</option>
                               <option value="GM">The Gambia (GM)</option>
                               <option value="GE">Georgia (GE)</option>
                               <option value="DE">Germany (DE)</option>
                               <option value="GH">Ghana (GH)</option>
                               <option value="GI">Gibraltar (GI)</option>
                               <option value="GR">Greece (GR)</option>
                               <option value="GL">Greenland (GL)</option>
                               <option value="GD">Grenada (GD)</option>
                               <option value="GP">Guadeloupe (GP)</option>
                               <option value="GU">Guam (GU)</option>
                               <option value="GT">Guatemala (GT)</option>
                               <option value="GN">Guinea (GN)</option>
                               <option value="GW">Guinea-Bissau (GW)</option>
                               <option value="GY">Guyana (GY)</option>
                               <option value="HT">Haiti (HT)</option>
                               <option value="VA">Vatican City (VA)</option>
                               <option value="HN">Honduras (HN)</option>
                               <option value="HK">Hong Kong (HK)</option>
                               <option value="HU">Hungary (HU)</option>
                               <option value="IS">Iceland (IS)</option>
                               <option value="IN">India (IN)</option>
                               <option value="ID">Indonesia (ID)</option>
                               <option value="IR">Iran (IR)</option>
                               <option value="IQ">Iraq (IQ)</option>
                               <option value="IE">Ireland (IE)</option>
                               <option value="IL">Israel (IL)</option>
                               <option value="IT">Italy (IT)</option>
                               <option value="JM">Jamaica (JM)</option>
                               <option value="JP">Japan (JP)</option>
                               <option value="JO">Jordan (JO)</option>
                               <option value="KZ">Kazakhstan (KZ)</option>
                               <option value="KE">Kenya (KE)</option>
                               <option value="KI">Kiribati (KI)</option>
                               <option value="KR">South Korea (KR)</option>
                               <option value="KW">Kuwait (KW)</option>
                               <option value="KG">Kyrgyzstan (KG)</option>
                               <option value="LA">Laos (LA)</option>
                               <option value="LV">Latvia (LV)</option>
                               <option value="LB">Lebanon (LB)</option>
                               <option value="LS">Lesotho (LS)</option>
                               <option value="LR">Liberia (LR)</option>
                               <option value="LY">Libya (LY)</option>
                               <option value="LI">Liechtenstein (LI)</option>
                               <option value="LT">Lithuania (LT)</option>
                               <option value="LU">Luxembourg (LU)</option>
                               <option value="MO">Macau (MO)</option>
                               <option value="MK">Macedonia (MK)</option>
                               <option value="MG">Madagascar (MG)</option>
                               <option value="MW">Malawi (MW)</option>
                               <option value="MY">Malaysia (MY)</option>
                               <option value="MV">Maldives (MV)</option>
                               <option value="ML">Mali (ML)</option>
                               <option value="MT">Malta (MT)</option>
                               <option value="MH">Marshall Islands (MH)</option>
                               <option value="MQ">Martinique (MQ)</option>
                               <option value="MR">Mauritania (MR)</option>
                               <option value="MU">Mauritius (MU)</option>
                               <option value="YT">Mayotte (YT)</option>
                               <option value="MX">Mexico (MX)</option>
                               <option value="FM">Federated States of Micronesia (FM)</option>
                               <option value="MD">Moldova (MD)</option>
                               <option value="MC">Monaco (MC)</option>
                               <option value="MN">Mongolia (MN)</option>
                               <option value="ME">Montenegro (ME)</option>
                               <option value="MS">Montserrat (MS)</option>
                               <option value="MA">Morocco (MA)</option>
                               <option value="MZ">Mozambique (MZ)</option>
                               <option value="MM">Burma Myanmar (MM)</option>
                               <option value="NA">Namibia (NA)</option>
                               <option value="NR">Nauru (NR)</option>
                               <option value="NP">Nepal (NP)</option>
                               <option value="NL">Netherlands (NL)</option>
                               <option value="AN">Netherlands Antilles (AN)</option>
                               <option value="NC">New Caledonia (NC)</option>
                               <option value="NZ">New Zealand (NZ)</option>
                               <option value="NI">Nicaragua (NI)</option>
                               <option value="NE">Niger (NE)</option>
                               <option value="NG">Nigeria (NG)</option>
                               <option value="NU">Niue (NU)</option>
                               <option value="NF">Norfolk Island (NF)</option>
                               <option value="MP">Northern Mariana Islands (MP)</option>
                               <option value="NO">Norway (NO)</option>
                               <option value="OM">Oman (OM)</option>
                               <option value="PK">Pakistan (PK)</option>
                               <option value="PW">Palau (PW)</option>
                               <option value="PS">Palestine (PS)</option>
                               <option value="PA">Panama (PA)</option>
                               <option value="PG">Papua New Guinea (PG)</option>
                               <option value="PY">Paraguay (PY)</option>
                               <option value="PE">Peru (PE)</option>
                               <option value="PH">Philippines (PH)</option>
                               <option value="PL">Poland (PL)</option>
                               <option value="PT">Portugal (PT)</option>
                               <option value="PR">Puerto Rico (PR)</option>
                               <option value="QA">Qatar (QA)</option>
                               <option value="RE">RÃ©union (RE)</option>
                               <option value="RO">Romania (RO)</option>
                               <option value="RU">Russia (RU)</option>
                               <option value="RW">Rwanda (RW)</option>
                               <option value="BL">Saint BarthÃ©lemy (BL)</option>
                               <option value="SH">Saint Helena (SH)</option>
                               <option value="KN">Saint Kitts and Nevis (KN)</option>
                               <option value="LC">St. Lucia (LC)</option>
                               <option value="MF">Saint Martin (MF)</option>
                               <option value="PM">Saint Pierre and Miquelon (PM)</option>
                               <option value="VC">Saint Vincent and the Grenadines (VC)</option>
                               <option value="WS">Samoa (WS)</option>
                               <option value="SM">San Marino (SM)</option>
                               <option value="ST">SÃ£o TomÃ© and PrÃ­ncipe (ST)</option>
                               <option value="SA">Saudi Arabia (SA)</option>
                               <option value="SN">Senegal (SN)</option>
                               <option value="RS">Serbia (RS)</option>
                               <option value="SC">Seychelles (SC)</option>
                               <option value="SL">Sierra Leone (SL)</option>
                               <option value="SG">Singapore (SG)</option>
                               <option value="SK">Slovakia (SK)</option>
                               <option value="SI">Slovenia (SI)</option>
                               <option value="SB">Solomon Islands (SB)</option>
                               <option value="SO">Somalia (SO)</option>
                               <option value="ZA">South Africa (ZA)</option>
                               <option value="ES">Spain (ES)</option>
                               <option value="LK">Sri Lanka (LK)</option>
                               <option value="SD">Sudan (SD)</option>
                               <option value="SR">Suriname (SR)</option>
                               <option value="SZ">Swaziland (SZ)</option>
                               <option value="SE">Sweden (SE)</option>
                               <option value="CH">Switzerland (CH)</option>
                               <option value="SY">Syria (SY)</option>
                               <option value="TW">Taiwan (TW)</option>
                               <option value="TJ">Tajikistan (TJ)</option>
                               <option value="TZ">Tanzania (TZ)</option>
                               <option value="TH">Thailand (TH)</option>
                               <option value="TL">Timor-Leste (TL)</option>
                               <option value="TG">Togo (TG)</option>
                               <option value="TK">Tokelau (TK)</option>
                               <option value="TO">Tonga (TO)</option>
                               <option value="TT">Trinidad and Tobago (TT)</option>
                               <option value="TN">Tunisia (TN)</option>
                               <option value="TR">Turkey (TR)</option>
                               <option value="TM">Turkmenistan (TM)</option>
                               <option value="TC">Turks and Caicos Islands (TC)</option>
                               <option value="TV">Tuvalu (TV)</option>
                               <option value="UG">Uganda (UG)</option>
                               <option value="UA">Ukraine (UA)</option>
                               <option value="AE">United Arab Emirates (AE)</option>
                               <option value="GB">United Kingdom (GB)</option>
                               <option value="US">United States (US)</option>
                               <option value="UY">Uruguay (UY)</option>
                               <option value="VI">US Virgin Islands (VI)</option>
                               <option value="UZ">Uzbekistan (UZ)</option>
                               <option value="VU">Vanuatu (VU)</option>
                               <option value="VE">Venezuela (VE)</option>
                               <option value="VN">Vietnam (VN)</option>
                               <option value="WF">Wallis and Futuna (WF)</option>
                               <option value="YE">Yemen (YE)</option>
                               <option value="ZM">Zambia (ZM)</option>
                               <option value="ZW">Zimbabwe (ZW)</option>
                               </select>
<img src="captcha.php" title="ETI Simple Captcha Code" width="50" height="18" />
<input class="input2" name="captcha" type="text" size="4" maxlength="4" placeholder="digits" title="Put the digits here" />
<input type="submit" class="button" value="Check" />
</form> 
HTML;

session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
echo "";
//Do you stuff ... use captcha! free api is limited :)
}
else
{
die("<br>Wrong captcha code entered! Please, enter the code. It's simple :) only 4 digits :)");
}

$location = json_decode(file_get_contents('http://apilayer.net/api/validate?access_key='.$access_key.'&number='.$number.'&country_code='.$country.'&format=1'));

echo "<br><b>Valid: </b>" .$location->valid;
if ($location->valid == TRUE) {
         // you can use these characters:   &#9989;  &#x2705;    https://www.w3schools.com/charsets/ref_utf_dingbats.asp
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->valid == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Phone Number: </b>" .$location->number;
if ($location->number == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->number== FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Local Format: </b>" .$location->local_format;
if ($location->local_format == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->local_format == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>International format: </b>" .$location->international_format;
if ($location->international_format == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->international_format == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Country prefix: </b>" .$location->country_prefix;
if ($location->country_prefix == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->country_prefix == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Country code: </b>" .$location->country_code;
if ($location->country_code == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->country_code == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Country name: </b>" .$location->country_name;
if ($location->country_name == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->country_name == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Location: </b>" .$location->location;
if ($location->location == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->location == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Carrier: </b>" .$location->carrier;
if ($location->carrier == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->carrier == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
echo "<br><b>Line type: </b>" .$location->line_type;
if ($location->line_type == TRUE) {
    echo '<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NDgwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6ODQ5RDQ2NDkwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0NjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0NzA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgwEVfsAAAMcSURBVHjatJdbSBRRGMe/mVl1djczjVwvlVAIWYZdCAwvZNGNgiQKq5cIegmyejCDCu1hIcggAo0eejGILE0UikKiXgqCoogelKAIumlmslte093+33p2G9ddd3bn+A0/2Nkzc/7/c/bbc76jpH+sJJOxEGwF28F6sBSkirY/4At4DboEfWY6VUwYWAaOgf0gz6TZr6AdXAM9sz2oztJmA+fEqGriEOfIBdXgFXADe7wGlohp5JfTKPFwikE8AflmDawAT0EFyYti0efaWAYWgwdgOcmPXNF3fjQDSeCWSDopoeAa9Y8H4M+IbNACHJEMnAblMsW9/mEqs6+mEnth4LMwsQ5cCDfAGX5WprjHP0SlEG7NqqM2Vx2V6KtohMaCj5wCBUYD1SJjpYnzyO+56mm+4qA01UltMJKppdMETQZ/7pqggXRwcC7EM9TUUNvFwds0MOklDZeIvSBHFUtrzlyKnxhooiuedqxs2lQWTMUCsIsN7IzUoY/8mCyfFPFGTyelKU6jeDC2qWJjmRb8O9kUjexKMo3jTon0qnVxjiJVLLsGcV9g5NcXnUTi1JNDSaFRGo9owqI4BXMg1TjtPPLmzDO0z1lOpXohtWSdhwl9hgkJ4hwOdeaoiOapeuh+s76G7oSZkCQeWoiG/t8o9Nc/QVW9buoYej7NxF2DCVniiBFVVDKGIkAL5MDhH5emmagQJjTY3KivlCHO0csVEW9Ah8JbOPtZrDmzliqdJaHvX4x1U57NRdlahlVxjg6egUeRWpIxF5FmojilQJY4R1fQQF88JiSJ/wb32UA/aI32VDQTFsU5OsFnm7i5Co4CPZoJzokj/Q1YKfzIgx6r4rwlXg4vy92igJzlLV9gseIrCaaUxPeuJnA8vCJyizI6avC/wgYsincbix+jgVFwAHyLtfNZEP8FqoA3WlX8AeyOZSLBGAB7wLtY54I34kzwUqI4i24Bz8yejN6DTaABjFkQngCNoAy8jfdsOAxqwQZwA/yMQ3gQ3BQnIi54PVZOx8ZT0w5xRC8SdaTTYPa7mOrH4CH4ZKbTfwIMAMboK8h3GQCkAAAAAElFTkSuQmCC" width="12" height="12">';
}
if ($location->line_type == FALSE) {
    echo '<img src=" data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDIxIDc5LjE1NTc3MiwgMjAxNC8wMS8xMy0xOTo0NDowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTQgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6ODQ5RDQ2NEMwODM5MTFFNUJFQTI5NjE1OTY3Q0QzNTMiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NjcxQTBBRDYwODRGMTFFNUJFQTI5NjE1OTY3Q0QzNTMiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4NDlENDY0QTA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4NDlENDY0QjA4MzkxMUU1QkVBMjk2MTU5NjdDRDM1MyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PiOvetIAAATASURBVHjarFdrbBRVFD4zu7PPlodtd7eItRSJIBajCDWIwQhNWmIxJpII/lB/GBIfaTT4igYoGNAY/dEYjamKSGvkj4JgSEU0/oBgUoGIIYhtUQwl2LJbZLfbnd3O+J3Zu4/Z7nZntDf50nY6c853zzn3O/dIg7PXksVVATwAtALLgXpgBiABUeAi8DPQCxwBrpYypF2LUc37z9OMTQ+R04LjWuApYAOwsMQ7M4FGgSeAP4AvgQ+A/qmMy2WcPwecAjqmcF5scXReAE6Kb912CVQDB4BOIEj/fVUCW4DvgVusEqgDjgLraPrWCuAH4K5yBKqAQ8ASmv41V9heUIoAV/OnopCyS4+Nk66m8F/JnjtNIy0ax0+9sKD3Af5iBJ4GHjQ5jyfI//B9pMyfAyJx6ySSKZIUhSofaybJ6TDI5K07ge0ZWxkCQVGtpp1XPt5CwS+2UWjfNnLeFCA9aoFEcgIf61Td2U6B3a9S1bvPpiOoF5wuSWrMJ7BJ5D8vORJpI9dIH0uQsvBmCu3fRc664NQksHNd16im62Wq2LDaeDQxNDLpNURFiX/X9yL/7mj3LvALwbjB9JJLocTpflLPDJB/3Upy3lhNvjVLaezwT6QNj5LkVoo41ynwUc55ZMceimz9hCSf20Sa05K8cLnB33pPNxNowbNnim1I8rhI/WWA1F8HDRIOkPCuLkIimTLCHugyOw937Ca5wmdE02xYIv163O2sC/zOBFix7i6V0kISHAlvJhIjIMHG7DjPFpnOJyTJBHbgz9BUdZUjcQEk7k2T4EgcOk7a1etGsZnCXs4525Rl0mJxRUI3jODvWZaO9miU/G0rKPj5VpL8HkqcPE+pgSHyr7/f+s7NUYgygRQXo2V9QSv1r20yKt0RStetnkhS5I3PKLKrG8691pwLc7JdPZV9Hooh/+qZwZyV8D8U7Tli1AM57Jnkt8csvy3OeXDv6+RtFnU7oZGjtopCX0Mn6kPWxCqXgnEm8Jd15ySqfY3xKPxaF11ue8VQTdft86h2/87yYpUNm87pGmYCfVacp8/5S+Zqf6sHx/EEXdnYYZBQFtdDMa2R0GFTmT/3LBM4XH7nukle86tdnl1JsYPHsyRcTOLATkuy7V11x1Em8C1wqVRjKSYyhedcnlUhSGxPk7gtE4kSDQw2oS3jvtamg0wgLHr0pBxJinNS2HnnUpFzniZxLEdCpENpmEOkJs3+x1XyrFzS616+6HzmzLxXeBr4MjGz/ZFswVkRmRyJDmPnrsXzqObDzaTzfUDP9WNuzxC0twlqyFLMz0bFzXVVvlSmhobJs2wRRbt7KbzlY0sKZ8g2Oqh67iK5Ghso8mYPJfsvpS8mGQKJ5F4Q6HQvvZWkvMGECfwINGU7FhROhkEtoZLkcNhRuPS3UEWOZEHr/hNqugyDyTAPJvmylQA2ZguSC8XlJD2VSrOX7d0J2SnnusB5DHgUGC51K2Z9bQOGcomV7V9IM8ssyzy+rQdOlJsLTokZsI+mb/HGWoppTqnO8RvAPfYdQP2fzveIweSY3dmQ87VZFCXPCxEbTvnbr8Sp4mH1SqkXrUzHp4EnxcDJYWwWwwvfonxioIHc0d/AWTGCfQOcs8L0XwEGAEFU/rTtb2/9AAAAAElFTkSuQmCC" width="12" height="12">';
}
}

else {

echo <<<HTML
<br><small>Enter Phone Number:</small><br>
<form method="post" action="">
<input type="text" name="phonenumber" id="phonenumber" placeholder="phonenumber" title="Enter Phone Number here" />
                               <select name="country">
                               <option>Choose Country Code</option>
                               <option value="AF">Afghanistan (AF)</option>
                               <option value="AL">Albania (AL)</option>
                               <option value="DZ">Algeria (DZ)</option>
                               <option value="AS">American Samoa (AS)</option>
                               <option value="AD">Andorra (AD)</option>
                               <option value="AO">Angola (AO)</option>
                               <option value="AI">Anguilla (AI)</option>
                               <option value="AG">Antigua (AG)</option>
                               <option value="AR">Argentina (AR)</option>
                               <option value="AM">Armenia (AM)</option>
                               <option value="AW">Aruba (AW)</option>
                               <option value="AU">Australia (AU)</option>
                               <option value="AT">Austria (AT)</option>
                               <option value="AZ">Azerbaijan (AZ)</option>
                               <option value="BS">The Bahamas (BS)</option>
                               <option value="BH">Bahrain (BH)</option>
                               <option value="BD">Bangladesh (BD)</option>
                               <option value="BB">Barbados (BB)</option>
                               <option value="BY">Belarus (BY)</option>
                               <option value="BE">Belgium (BE)</option>
                               <option value="BZ">Belize (BZ)</option>
                               <option value="BJ">Benin (BJ)</option>
                               <option value="BM">Bermuda (BM)</option>
                               <option value="BT">Bhutan (BT)</option>
                               <option value="BO">Bolivia (BO)</option>
                               <option value="BA">Bosnia and Herzegovina (BA)</option>
                               <option value="BW">Botswana (BW)</option>
                               <option value="BR">Brazil (BR)</option>
                               <option value="IO">British Indian Ocean Territory (IO)</option>
                               <option value="BN">Brunei (BN)</option>
                               <option value="BG">Bulgaria (BG)</option>
                               <option value="BF">Burkina Faso (BF)</option>
                               <option value="BI">Burundi (BI)</option>
                               <option value="KH">Cambodia (KH)</option>
                               <option value="CM">Cameroon (CM)</option>
                               <option value="CA">Canada (CA)</option>
                               <option value="CV">Cape Verde (CV)</option>
                               <option value="KY">Cayman Islands (KY)</option>
                               <option value="CF">Central African Republic (CF)</option>
                               <option value="TD">Chad (TD)</option>
                               <option value="CL">Chile (CL)</option>
                               <option value="CN">China (CN)</option>
                               <option value="CO">Colombia (CO)</option>
                               <option value="KM">Comoros (KM)</option>
                               <option value="CG">Republic of the Congo (CG)</option>
                               <option value="CD">Democratic Republic of Congo (CD)</option>
                               <option value="CK">Cook Islands (CK)</option>
                               <option value="CR">Costa Rica (CR)</option>
                               <option value="CI">CÃ´te d'Ivoire (CI)</option>
                               <option value="HR">Croatia (HR)</option>
                               <option value="CU">Cuba (CU)</option>
                               <option value="CY">Cyprus (CY)</option>
                               <option value="CZ">Czech Republic (CZ)</option>
                               <option value="DK">Denmark (DK)</option>
                               <option value="DJ">Djibouti (DJ)</option>
                               <option value="DM">Dominica (DM)</option>
                               <option value="DO">Dominican Republic (DO)</option>
                               <option value="EC">Ecuador (EC)</option>
                               <option value="EG">Egypt (EG)</option>
                               <option value="SV">El Salvador (SV)</option>
                               <option value="GQ">Equatorial Guinea (GQ)</option>
                               <option value="ER">Eritrea (ER)</option>
                               <option value="EE">Estonia (EE)</option>
                               <option value="ET">Ethiopia (ET)</option>
                               <option value="FK">Falkland Islands (FK)</option>
                               <option value="FO">Faroe Islands (FO)</option>
                               <option value="FJ">Fiji (FJ)</option>
                               <option value="FI">Finland (FI)</option>
                               <option value="FR">France (FR)</option>
                               <option value="GF">French Guiana (GF)</option>
                               <option value="PF">French Polynesia (PF)</option>
                               <option value="GA">Gabon (GA)</option>
                               <option value="GM">The Gambia (GM)</option>
                               <option value="GE">Georgia (GE)</option>
                               <option value="DE">Germany (DE)</option>
                               <option value="GH">Ghana (GH)</option>
                               <option value="GI">Gibraltar (GI)</option>
                               <option value="GR">Greece (GR)</option>
                               <option value="GL">Greenland (GL)</option>
                               <option value="GD">Grenada (GD)</option>
                               <option value="GP">Guadeloupe (GP)</option>
                               <option value="GU">Guam (GU)</option>
                               <option value="GT">Guatemala (GT)</option>
                               <option value="GN">Guinea (GN)</option>
                               <option value="GW">Guinea-Bissau (GW)</option>
                               <option value="GY">Guyana (GY)</option>
                               <option value="HT">Haiti (HT)</option>
                               <option value="VA">Vatican City (VA)</option>
                               <option value="HN">Honduras (HN)</option>
                               <option value="HK">Hong Kong (HK)</option>
                               <option value="HU">Hungary (HU)</option>
                               <option value="IS">Iceland (IS)</option>
                               <option value="IN">India (IN)</option>
                               <option value="ID">Indonesia (ID)</option>
                               <option value="IR">Iran (IR)</option>
                               <option value="IQ">Iraq (IQ)</option>
                               <option value="IE">Ireland (IE)</option>
                               <option value="IL">Israel (IL)</option>
                               <option value="IT">Italy (IT)</option>
                               <option value="JM">Jamaica (JM)</option>
                               <option value="JP">Japan (JP)</option>
                               <option value="JO">Jordan (JO)</option>
                               <option value="KZ">Kazakhstan (KZ)</option>
                               <option value="KE">Kenya (KE)</option>
                               <option value="KI">Kiribati (KI)</option>
                               <option value="KR">South Korea (KR)</option>
                               <option value="KW">Kuwait (KW)</option>
                               <option value="KG">Kyrgyzstan (KG)</option>
                               <option value="LA">Laos (LA)</option>
                               <option value="LV">Latvia (LV)</option>
                               <option value="LB">Lebanon (LB)</option>
                               <option value="LS">Lesotho (LS)</option>
                               <option value="LR">Liberia (LR)</option>
                               <option value="LY">Libya (LY)</option>
                               <option value="LI">Liechtenstein (LI)</option>
                               <option value="LT">Lithuania (LT)</option>
                               <option value="LU">Luxembourg (LU)</option>
                               <option value="MO">Macau (MO)</option>
                               <option value="MK">Macedonia (MK)</option>
                               <option value="MG">Madagascar (MG)</option>
                               <option value="MW">Malawi (MW)</option>
                               <option value="MY">Malaysia (MY)</option>
                               <option value="MV">Maldives (MV)</option>
                               <option value="ML">Mali (ML)</option>
                               <option value="MT">Malta (MT)</option>
                               <option value="MH">Marshall Islands (MH)</option>
                               <option value="MQ">Martinique (MQ)</option>
                               <option value="MR">Mauritania (MR)</option>
                               <option value="MU">Mauritius (MU)</option>
                               <option value="YT">Mayotte (YT)</option>
                               <option value="MX">Mexico (MX)</option>
                               <option value="FM">Federated States of Micronesia (FM)</option>
                               <option value="MD">Moldova (MD)</option>
                               <option value="MC">Monaco (MC)</option>
                               <option value="MN">Mongolia (MN)</option>
                               <option value="ME">Montenegro (ME)</option>
                               <option value="MS">Montserrat (MS)</option>
                               <option value="MA">Morocco (MA)</option>
                               <option value="MZ">Mozambique (MZ)</option>
                               <option value="MM">Burma Myanmar (MM)</option>
                               <option value="NA">Namibia (NA)</option>
                               <option value="NR">Nauru (NR)</option>
                               <option value="NP">Nepal (NP)</option>
                               <option value="NL">Netherlands (NL)</option>
                               <option value="AN">Netherlands Antilles (AN)</option>
                               <option value="NC">New Caledonia (NC)</option>
                               <option value="NZ">New Zealand (NZ)</option>
                               <option value="NI">Nicaragua (NI)</option>
                               <option value="NE">Niger (NE)</option>
                               <option value="NG">Nigeria (NG)</option>
                               <option value="NU">Niue (NU)</option>
                               <option value="NF">Norfolk Island (NF)</option>
                               <option value="MP">Northern Mariana Islands (MP)</option>
                               <option value="NO">Norway (NO)</option>
                               <option value="OM">Oman (OM)</option>
                               <option value="PK">Pakistan (PK)</option>
                               <option value="PW">Palau (PW)</option>
                               <option value="PS">Palestine (PS)</option>
                               <option value="PA">Panama (PA)</option>
                               <option value="PG">Papua New Guinea (PG)</option>
                               <option value="PY">Paraguay (PY)</option>
                               <option value="PE">Peru (PE)</option>
                               <option value="PH">Philippines (PH)</option>
                               <option value="PL">Poland (PL)</option>
                               <option value="PT">Portugal (PT)</option>
                               <option value="PR">Puerto Rico (PR)</option>
                               <option value="QA">Qatar (QA)</option>
                               <option value="RE">RÃ©union (RE)</option>
                               <option value="RO">Romania (RO)</option>
                               <option value="RU">Russia (RU)</option>
                               <option value="RW">Rwanda (RW)</option>
                               <option value="BL">Saint BarthÃ©lemy (BL)</option>
                               <option value="SH">Saint Helena (SH)</option>
                               <option value="KN">Saint Kitts and Nevis (KN)</option>
                               <option value="LC">St. Lucia (LC)</option>
                               <option value="MF">Saint Martin (MF)</option>
                               <option value="PM">Saint Pierre and Miquelon (PM)</option>
                               <option value="VC">Saint Vincent and the Grenadines (VC)</option>
                               <option value="WS">Samoa (WS)</option>
                               <option value="SM">San Marino (SM)</option>
                               <option value="ST">SÃ£o TomÃ© and PrÃ­ncipe (ST)</option>
                               <option value="SA">Saudi Arabia (SA)</option>
                               <option value="SN">Senegal (SN)</option>
                               <option value="RS">Serbia (RS)</option>
                               <option value="SC">Seychelles (SC)</option>
                               <option value="SL">Sierra Leone (SL)</option>
                               <option value="SG">Singapore (SG)</option>
                               <option value="SK">Slovakia (SK)</option>
                               <option value="SI">Slovenia (SI)</option>
                               <option value="SB">Solomon Islands (SB)</option>
                               <option value="SO">Somalia (SO)</option>
                               <option value="ZA">South Africa (ZA)</option>
                               <option value="ES">Spain (ES)</option>
                               <option value="LK">Sri Lanka (LK)</option>
                               <option value="SD">Sudan (SD)</option>
                               <option value="SR">Suriname (SR)</option>
                               <option value="SZ">Swaziland (SZ)</option>
                               <option value="SE">Sweden (SE)</option>
                               <option value="CH">Switzerland (CH)</option>
                               <option value="SY">Syria (SY)</option>
                               <option value="TW">Taiwan (TW)</option>
                               <option value="TJ">Tajikistan (TJ)</option>
                               <option value="TZ">Tanzania (TZ)</option>
                               <option value="TH">Thailand (TH)</option>
                               <option value="TL">Timor-Leste (TL)</option>
                               <option value="TG">Togo (TG)</option>
                               <option value="TK">Tokelau (TK)</option>
                               <option value="TO">Tonga (TO)</option>
                               <option value="TT">Trinidad and Tobago (TT)</option>
                               <option value="TN">Tunisia (TN)</option>
                               <option value="TR">Turkey (TR)</option>
                               <option value="TM">Turkmenistan (TM)</option>
                               <option value="TC">Turks and Caicos Islands (TC)</option>
                               <option value="TV">Tuvalu (TV)</option>
                               <option value="UG">Uganda (UG)</option>
                               <option value="UA">Ukraine (UA)</option>
                               <option value="AE">United Arab Emirates (AE)</option>
                               <option value="GB">United Kingdom (GB)</option>
                               <option value="US">United States (US)</option>
                               <option value="UY">Uruguay (UY)</option>
                               <option value="VI">US Virgin Islands (VI)</option>
                               <option value="UZ">Uzbekistan (UZ)</option>
                               <option value="VU">Vanuatu (VU)</option>
                               <option value="VE">Venezuela (VE)</option>
                               <option value="VN">Vietnam (VN)</option>
                               <option value="WF">Wallis and Futuna (WF)</option>
                               <option value="YE">Yemen (YE)</option>
                               <option value="ZM">Zambia (ZM)</option>
                               <option value="ZW">Zimbabwe (ZW)</option>
                               </select>
<img src="captcha.php" title="ETI Simple Captcha Code" width="50" height="18" />
<input class="input2" name="captcha" type="text" size="4" maxlength="4" placeholder="digits" title="Put the digits here" />
<input type="submit" class="button" value="Check" />
</form> 
HTML;

}
?>

<?php
include 'footer.php';
?>
