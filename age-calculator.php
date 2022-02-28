<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="keywords" content="age calculator, calculate age, how old are you, How Old Am I, How many minutes old am I">
<meta name="description" content="Age calculator: How old are you in years, months, weeks, days, minutes, seconds?">
<title>Age calculator</title>
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Calculate Age from Date of Birth</h2>

How Old Am I? How many minutes old am I? Calculate Your Age<br>
<br>
1. Calculator:
<br>

<script type="text/javascript">
var startyear = "1900";
var endyear = "2018";
var dat = new Date();
var curday = dat.getDate();
var curmon = dat.getMonth()+1;
var curyear = dat.getFullYear();
function checkleapyear(datea)
{
if(datea.getYear()%4 == 0)
{
if(datea.getYear()% 10 != 0)
{
return true;
}
else
{
if(datea.getYear()% 400 == 0)
return true;
else
return false;
}
}
return false; } function DaysInMonth(Y, M) {
with (new Date(Y, M, 1, 12)) {
setDate(0);
return getDate();
} } function datediff(date1, date2) {
var y1 = date1.getFullYear(), m1 = date1.getMonth(), d1 = date1.getDate(),
y2 = date2.getFullYear(), m2 = date2.getMonth(), d2 = date2.getDate();
if (d1 < d2) {
m1--;
d1 += DaysInMonth(y2, m2);
}
if (m1 < m2) {
y1--;
m1 += 12;
}
return [y1 - y2, m1 - m2, d1 - d2]; } function calage() {
var calday = document.birthday.day.options[document.birthday.day.selectedIndex].value;
var calmon = document.birthday.month.options[document.birthday.month.selectedIndex].value;
var calyear = document.birthday.year.options[document.birthday.year.selectedIndex].value;
if(curday == "" || curmon=="" || curyear=="" || calday=="" || calmon=="" || calyear=="")
{
alert("Please fill all the values");
}
else
{
var curd = new Date(curyear,curmon-1,curday);
var cald = new Date(calyear,calmon-1,calday);
var diff =
Date.UTC(curyear,curmon,curday,0,0,0) - Date.UTC(calyear,calmon,calday,0,0,0);
var dife = datediff(curd,cald);
document.birthday.age.value=dife[0]+" years, "+dife[1]+" months, and "+dife[2]+" days";
var monleft = (dife[0]*12)+dife[1];
var secleft = diff/1000/60;
var hrsleft = secleft/60;
var daysleft = hrsleft/24;
document.birthday.months.value=monleft+" Month since your birth";
document.birthday.daa.value=daysleft+" days since your birth";
document.birthday.hours.value=hrsleft+" hours since your birth";
document.birthday.min.value=secleft+" minutes since your birth";
var as = parseInt(calyear)+dife[0]+1;
var diff =
Date.UTC(as,calmon,calday,0,0,0) - Date.UTC(curyear,curmon,curday,0,0,0);
var datee = diff/1000/60/60/24;
document.birthday.nbday.value=datee+" days left for your next birthday";
} } 
</script>

<form name="birthday">
Date <select name="day" size="1">
<script type="text/javascript">for(var j=1;j<32;j++)document.write("<option value="+j+">"+j+"</option>");
</script></select> 
Month <select name="month" size="1">
<script type="text/javascript">for(var i=1;i<13;i++)document.write("<option value="+i+">"+i+"</option>");
</script></select> 
Year <select name="year" size="1">
<script type="text/javascript">for(var k=startyear;k<endyear;k++)document.write("<option value="+k+">"+k+"</option>");
</script></select>
<input name="start" onclick="calage()" value="Find" type="button" class="button"><br>
<input name="age" style="font-size: 14px;" value="Result"><br>
You have been living for:<br>
<table style="border:solid black 2px"> <tr><td>In months:</td><td><input name="months" style="font-size: 14px;"></td></tr> <tr><td>In days:</td><td><input name="daa" style="font-size: 14px;"></td></tr> <tr><td>In hours:</td><td><input name="hours" style="font-size: 14px;"></td></tr> <tr><td>In minutes:</td><td><input name="min" style="font-size: 14px;"></td></tr> <tr><td colspan=2>Your next birthday will be in:</td></tr> <tr><td colspan=2><input name="nbday" style="font-size: 14px;"></td></tr></table> 
</form>





<br />
<br />


2. Calculator:<br>


<br />



<script> 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///MIN_YEAR MUST BE UPDATED EACH YEAR ONLY FOR ALERT PURPOSE////////
MIN_YEAR=2003;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function bodyobject()
{
this.run=0;
this.birthtime=new Object();
this.calculatebutton=1;
this.cakebutton=0;
this.cakewnd=new Object();
this.showcake=0;
this.IsyourBirthday=0;
this.Cakesize=0;
}
function dateobject(second,minute,hour,day,month,year)
{
this.m_second=second;
this.m_minute=minute;
this.m_hour=hour;
this.m_day=day;
this.m_month=month;
this.m_year=year;

this.m_internal_months=0;
this.m_internal_days=0;

for (ycount=1582; ycount<this.m_year; ycount++)
  {
  if (leapyear(ycount)==1)
    {this.m_internal_days+=366;}
  else
    {this.m_internal_days+=365;}
  this.m_internal_years++;
  this.m_internal_months+=12;
  }
for (mcount=1; mcount<this.m_month; mcount++)
  {
  this.m_internal_months++;
  this.m_internal_days+=longmonth(mcount,this.m_year);
  } 
for (dcount=1;dcount<this.m_day;dcount++)
  {
  this.m_internal_days++;
  }
this.m_internal_seconds=this.m_hour*3600+this.m_minute*60+this.m_second;
}

function leapyear(year)
{
if(year%4==0)
   {
   if ((year%100==0)&&(year%400!=0))
   {return 0;}
   else
   {return 1;}		
   }
return 0;
}

function subtract_years(a,b)
{
if(a.m_month<b.m_month)
  {
  return (a.m_year-b.m_year-1);
  }
else
  {
  if(a.m_month==b.m_month)
    {
    if(a.m_day<b.m_day)
      {
      return (a.m_year-b.m_year-1);
      }
    else
      {
      return (a.m_year-b.m_year);
      }
    }
  }
return (a.m_year-b.m_year);
}

function subtract_months(a,b)
{
if(a.m_day<b.m_day)
  {
  return (a.m_internal_months-b.m_internal_months-1);
  }
return (a.m_internal_months-b.m_internal_months);
}

function subtract_weeks(a,b)
{
return (Math.floor((a.m_internal_days-b.m_internal_days)/7));
}

function subtract_days(a,b)
{
return (a.m_internal_days-b.m_internal_days);
}
function subtract_hours(a,b)
{
ahours=Math.floor(a.m_internal_seconds/3600);
bhours=Math.floor(b.m_internal_seconds/3600);

if(ahours<bhours)
  {
  return (ahours-bhours+25+((a.m_internal_days-b.m_internal_days)-1)*24);
  }
return (ahours-bhours+(a.m_internal_days-b.m_internal_days)*24);
}

function subtract_minutes(a,b)
{
aminutes=Math.floor(a.m_internal_seconds/60);
bminutes=Math.floor(b.m_internal_seconds/60);

if(aminutes<bminutes)
  {
  return (aminutes-bminutes+1441+((a.m_internal_days-b.m_internal_days)-1)*1440);
  }
return (aminutes-bminutes+(a.m_internal_days-b.m_internal_days)*1440);
}

function subtract_seconds(a,b)
{
aseconds=Math.floor(a.m_internal_seconds);
bseconds=Math.floor(b.m_internal_seconds);

if(aseconds<bseconds)
  {
  return (aseconds-bseconds+86401+((a.m_internal_days-b.m_internal_days)-1)*86400);
  }
return (aseconds-bseconds+(a.m_internal_days-b.m_internal_days)*86400);
}


function longmonth(month,year)
{
if ((month==1)||(month==3)||(month==5)||(month==7)||(month==8)||(month==10)||(month==12))
   {return 31;}
else
  {
  if (month==2)
    {
    if(leapyear(year)==1)     
      {return 29;}
    else
      {return 28;}
    }
  else
    {
    return 30;
    }  
  }	
}


function heart()
{
cal();
}
function init()
{
flyngtdy=new Date();
flyngyr=parseInt(flyngtdy.getFullYear());
if(flyngyr<MIN_YEAR){alert("Your computer is not updated\nActual year is:"+flyngyr+"  ??????");}
true_bodyobject=new bodyobject();
validatebutton();
}

function intro()
{
true_bodyobject.run=1;
byear=parseInt(1582+document.agecalc.fyear.selectedIndex);
bmonth=document.agecalc.fmonth.selectedIndex +1;
bdate=document.agecalc.fdate.selectedIndex +1;
bsecond=0;
bminute=document.agecalc.fminute.selectedIndex;
bhour=document.agecalc.fhour.selectedIndex;
true_bodyobject.birthtime=new dateobject(bsecond,bminute,bhour,bdate,bmonth,byear);
}

function invalidate()
{
true_bodyobject.run=0;
byear=parseInt(1582+document.agecalc.fyear.selectedIndex);
bmonth=document.agecalc.fmonth.selectedIndex +1;
bdate=document.agecalc.fdate.selectedIndex +1;
bsecond=0;
bminute=document.agecalc.fminute.selectedIndex;
bhour=document.agecalc.fhour.selectedIndex;
local_birthtime=new dateobject(bsecond,bminute,bhour,bdate,bmonth,byear);
daynumber=local_birthtime.m_internal_days;
day_of_week=((daynumber+5)%7);
textdayofweek="";

if(day_of_week==1){textdayofweek="Monday.";}
if(day_of_week==2){textdayofweek="Tuesday.";}
if(day_of_week==3){textdayofweek="Wednesday.";}
if(day_of_week==4){textdayofweek="Thursday.";}
if(day_of_week==5){textdayofweek="Friday.";}
if(day_of_week==6){textdayofweek="Saturday.";}
if(day_of_week==0){textdayofweek="Sunday.";}

document.agecalc.dayofweek.value="You were born on a "+textdayofweek;
true_bodyobject.calculatebutton=1;
true_bodyobject.cakebutton=0;


if(((bmonth==2)||(bmonth==4)||(bmonth==6)||(bmonth==9)||(bmonth==11))&&(bdate==31))
	{
	document.agecalc.dayofweek.value="This month never has 31 days.";
	true_bodyobject.calculatebutton=0;
    true_bodyobject.cakebutton=0;
	}   
if((bmonth==2)&&(bdate==30))
	{
	document.agecalc.dayofweek.value="February never has 30 days.";
	true_bodyobject.calculatebutton=0;
    true_bodyobject.cakebutton=0;
	}   
if(((bmonth==2)&&(bdate==29))&&(leapyear(byear)==0))
	{
	document.agecalc.dayofweek.value="February 29 did not occur in this year.";
	true_bodyobject.calculatebutton=0;
    true_bodyobject.cakebutton=0;
	}   


validatebutton();
validatecake();
invalidatepopup();
}
function validatebutton()
	{
	if(true_bodyobject.calculatebutton==1) 
		{
		document.agecalc.calculatebutton.value="Find";
		}
	else
	    {
		document.agecalc.calculatebutton.value=" ";
	    }
	}
function validatecake()
	{
	if(true_bodyobject.cakebutton==1) 
		{
		document.agecalc.showcakebutton.value="Show my birthday cake with candles.";
		document.agecalc.showcakebutton.text="(button to show the birthday cake with candles)";
		}
	else
	    {
		document.agecalc.showcakebutton.value="";
		document.agecalc.showcakebutton.text="(button only available for the actual birthday)";
	    }
	}

function invalidatepopup()
{
if(true_bodyobject.showcake==1)
	{
	if(!true_bodyobject.cakewnd.closed)
		{
		true_bodyobject.cakewnd.close();
		true_bodyobject.showcake=0;
		}
	else
		{
		true_bodyobject.showcake=0;
		}
	}

}


function cal()
{

if ((true_bodyobject.run==1)&&(true_bodyobject.calculatebutton==1))
  {
  today=new Date();
  ayear=today.getFullYear();
  amonth=today.getMonth();
  amonth++;
  amnday=today.getDate();
  amnhour=today.getHours();
  amin=today.getMinutes();
  asec=today.getSeconds();
 
  actualtime=new dateobject(asec,amin,amnhour,amnday,amonth,ayear);
  
  elapsedyears= subtract_years(actualtime,true_bodyobject.birthtime);
  elapsedmonths= subtract_months(actualtime,true_bodyobject.birthtime);
  elapsedweeks=subtract_weeks(actualtime,true_bodyobject.birthtime);
  elapseddays= subtract_days(actualtime,true_bodyobject.birthtime);
  elapsedhours=subtract_hours(actualtime,true_bodyobject.birthtime);
  elapsedminutes=subtract_minutes(actualtime,true_bodyobject.birthtime);
  elapsedseconds= subtract_seconds(actualtime,true_bodyobject.birthtime);
  if(Math.abs(elapsedyears)==1){document.agecalc.result.value="You are "+elapsedyears+" year old...\n\n";}
  else{document.agecalc.result.value="You are "+commatized(elapsedyears)+" years old...\n\n";}
  if(Math.abs(elapsedmonths)==1){document.agecalc.result.value+="    or  "+commatized(elapsedmonths)+" month old\n";} 
  else{document.agecalc.result.value+="    or  "+commatized(elapsedmonths)+" months old\n";}
  if(Math.abs(elapsedweeks)==1){document.agecalc.result.value+="    or  "+commatized(elapsedweeks)+" week old\n";} 
  else{document.agecalc.result.value+="    or  "+commatized(elapsedweeks)+" weeks old\n";}
  if(Math.abs(elapseddays)==1){document.agecalc.result.value+="    or  "+commatized(elapseddays)+" day old\n";} 
  else{document.agecalc.result.value+="    or  "+commatized(elapseddays)+" days old\n";}
  if(Math.abs(elapsedhours)==1){document.agecalc.result.value+="    or  "+commatized(elapsedhours)+" hour old\n";} 
  else{document.agecalc.result.value+="    or  "+commatized(elapsedhours)+" hours old\n";}
  if(Math.abs(elapsedminutes)==1){document.agecalc.result.value+="    or "+commatized(elapsedminutes)+" minute old\n";}  
  else{document.agecalc.result.value+="    or  "+commatized(elapsedminutes)+" minutes old\n";}
  if(Math.abs(elapsedseconds)==1){document.agecalc.result.value+="    or "+commatized(elapsedseconds)+" second old\n";}  
  else{document.agecalc.result.value+="    or  "+commatized(elapsedseconds)+" seconds old\n";}
  
 if((actualtime.m_month==true_bodyobject.birthtime.m_month)&&(actualtime.m_day==true_bodyobject.birthtime.m_day))
 	{
 	document.agecalc.result.value+="\nand today is your birthday!\n"; 
	true_bodyobject.IsyourBirthday=1;
	true_bodyobject.Cakesize=elapsedyears;
	true_bodyobject.cakebutton=1;
	showmycake();
	validatecake();
 	}
else
	{ 	
 	document.agecalc.result.value+="\nand your next birthday celebration is in:\n"; 
	true_bodyobject.IsyourBirthday=0;
	true_bodyobject.cakebutton=0;
	validatecake();
	if((actualtime.m_month< true_bodyobject.birthtime.m_month)||((actualtime.m_month== true_bodyobject.birthtime.m_month)&&(actualtime.m_day< true_bodyobject.birthtime.m_day)))
		{
        fbsec=0;
        fbmin=true_bodyobject.birthtime.m_minute;
        fbhour=true_bodyobject.birthtime.m_hour;
        fbday=true_bodyobject.birthtime.m_day;
        fbmonth=true_bodyobject.birthtime.m_month;
        fbyear=actualtime.m_year;
        futurebirthday=new dateobject(fbsec,fbmin,fbhour,fbday,fbmonth,fbyear);
        tstb=subtract_seconds(futurebirthday,actualtime);
        daystobirthday=Math.floor(tstb/86400); 
        hourstobirthday=Math.floor((tstb-daystobirthday*86400)/3600);
        minutestobirthday=Math.floor((tstb-daystobirthday*86400-hourstobirthday*3600)/60);
        secondstobirthday=Math.floor(tstb-daystobirthday*86400-hourstobirthday*3600-minutestobirthday*60)

		document.agecalc.result.value+=daystobirthday;
		if(daystobirthday==1)
			{
			document.agecalc.result.value+=" day ";
			}
		else
			{
			document.agecalc.result.value+=" days ";
			}
		document.agecalc.result.value+=hourstobirthday;
		if(hourstobirthday==1)
			{
			document.agecalc.result.value+=" hr ";
			}
		else
			{
			document.agecalc.result.value+=" hrs ";
			}
		document.agecalc.result.value+=minutestobirthday;
		if(minutestobirthday==1)
			{
			document.agecalc.result.value+=" min ";
			}
		else
			{
			document.agecalc.result.value+=" mins ";
			}
		document.agecalc.result.value+=secondstobirthday;
		if(secondstobirthday==1)
			{
			document.agecalc.result.value+=" sec. ";
			}
		else
			{
			document.agecalc.result.value+=" secs. ";
			}
		}
    else
    	{
        fbsec=0;
        fbmin=true_bodyobject.birthtime.m_minute;
        fbhour=true_bodyobject.birthtime.m_hour;
        fbday=true_bodyobject.birthtime.m_day;
        fbmonth=true_bodyobject.birthtime.m_month;
        fbyear=actualtime.m_year+1;
        futurebirthday=new dateobject(fbsec,fbmin,fbhour,fbday,fbmonth,fbyear);
        tstb=subtract_seconds(futurebirthday,actualtime);
        daystobirthday=Math.floor(tstb/86400); 
        hourstobirthday=Math.floor((tstb-daystobirthday*86400)/3600);
        minutestobirthday=Math.floor((tstb-daystobirthday*86400-hourstobirthday*3600)/60);
        secondstobirthday=Math.floor(tstb-daystobirthday*86400-hourstobirthday*3600-minutestobirthday*60)

		document.agecalc.result.value+=daystobirthday;
		if(daystobirthday==1)
			{
			document.agecalc.result.value+=" day ";
			}
		else
			{
			document.agecalc.result.value+=" days ";
			}
		document.agecalc.result.value+=hourstobirthday;
		if(hourstobirthday==1)
			{
			document.agecalc.result.value+=" hr ";
			}
		else
			{
			document.agecalc.result.value+=" hrs ";
			}
		document.agecalc.result.value+=minutestobirthday;
		if(minutestobirthday==1)
			{
			document.agecalc.result.value+=" min ";
			}
		else
			{
			document.agecalc.result.value+=" mins ";
			}
		document.agecalc.result.value+=secondstobirthday;
		if(secondstobirthday==1)
			{
			document.agecalc.result.value+=" sec. ";
			}
		else
			{
			document.agecalc.result.value+=" secs. ";
			}
    	}
	true_bodyobject.cakebutton=0;
	validatecake();
    }
  }
else
  {
  document.agecalc.result.value="";
  }
}

function commatized(numericvalue)
{

if(Math.abs(numericvalue)<1000){return (""+numericvalue);}

textstring=""+numericvalue;
sit=0;
while(textstring.charAt(sit)!="")
	{
	sit++
	}
textdone="";
for (x=sit-1;x>=0;x--)
	{
	comingchar=textstring.charAt(x)
	if(((((sit-1)-x)%3)==0)&&(((sit-1)-x)>0))
	{
	if((comingchar=="1")||(comingchar=="2")||(comingchar=="3")||(comingchar=="4")||
	(comingchar=="5")||(comingchar=="6")||(comingchar=="7")||(comingchar=="8")||(comingchar=="9")||(comingchar=="0"))
		{
		textdone=","+textdone;
		}
	}
	textdone=comingchar+textdone;
	}
return(textdone);
}

function buttoncake()
{
if(true_bodyobject.IsyourBirthday==1)
	{
	if(true_bodyobject.showcake==0)
		{
		showmycake();
		}
	else
		{
		if(true_bodyobject.showcake==1)
			{
	        if(true_bodyobject.cakewnd.closed)
	        	{
				true_bodyobject.showcake=0;
				showmycake();
	        	}
			else
				{
		        if(!true_bodyobject.cakewnd.closed)
		        	{
					true_bodyobject.cakewnd.close();
					true_bodyobject.showcake=0;
					showmycake();
		        	}
				}
		    }
		}
	}
}
function showmycake()
{
if((true_bodyobject.IsyourBirthday==1)&&(true_bodyobject.showcake==0))
	{
	true_bodyobject.showcake=1;	
	true_bodyobject.cakewnd=window.open("","Birthday","width=205, height=270,toolbar=0,menubar=0,scrollbars=0");
	true_bodyobject.cakewnd.document.write("<html>");
	true_bodyobject.cakewnd.document.write("<head>");
	true_bodyobject.cakewnd.document.write("<title>Happy Birthday!</title>");
	true_bodyobject.cakewnd.document.write("</head>");
	true_bodyobject.cakewnd.document.write("<body bgcolor=yellow>");
	true_bodyobject.cakewnd.document.write("<font size=+1>");
	true_bodyobject.cakewnd.document.write("<font face=arial>");
	true_bodyobject.cakewnd.document.write("<center>");
	true_bodyobject.cakewnd.document.write("Happy Birthday!");
	true_bodyobject.cakewnd.document.write("</center>");
	true_bodyobject.cakewnd.document.write("<center>");
	true_bodyobject.cakewnd.document.write("You are ");
	true_bodyobject.cakewnd.document.write(true_bodyobject.Cakesize);
	true_bodyobject.cakewnd.document.write(" years old.");
	true_bodyobject.cakewnd.document.write("</center>");
	true_bodyobject.cakewnd.document.write("</font>");
	true_bodyobject.cakewnd.document.write("</font>");

	true_bodyobject.cakewnd.document.write("<center>");
	true_bodyobject.cakewnd.document.write("<table border=0 cellspacing=0 cellpadding=0>");
	if (true_bodyobject.Cakesize<10)
		{
		true_bodyobject.cakewnd.document.write("<tr><td>");
		true_bodyobject.cakewnd.document.write("</td></tr>");
		true_bodyobject.cakewnd.document.write("<tr><td>");
		true_bodyobject.cakewnd.document.write("</td></tr>");
		true_bodyobject.cakewnd.document.write("<tr><td>");
		true_bodyobject.cakewnd.document.write("</td></tr>");
	    }
	else
		{
		if(true_bodyobject.Cakesize<100)
			{
			true_bodyobject.cakewnd.document.write("<tr><td>");
			true_bodyobject.cakewnd.document.write("</td></tr>");
			true_bodyobject.cakewnd.document.write("<tr><td>");
			tensvalue=Math.abs(Math.floor(true_bodyobject.Cakesize/10));
			unityvalue=true_bodyobject.Cakesize-(tensvalue*10);
			true_bodyobject.cakewnd.document.write("</td></tr>");
			true_bodyobject.cakewnd.document.write("<tr><td>");
			true_bodyobject.cakewnd.document.write("</td></tr>");
            }
		else
			{
			if(true_bodyobject.Cakesize<1000)
				{
				true_bodyobject.cakewnd.document.write("<tr><td>");
				hundredsvalue=Math.abs(Math.floor(true_bodyobject.Cakesize/100));
				true_bodyobject.cakewnd.document.write("</td></tr>");
				true_bodyobject.cakewnd.document.write("<tr><td>");
				auxiliarvar=true_bodyobject.Cakesize-(hundredsvalue*100);
				tensvalue=Math.abs(Math.floor(auxiliarvar/10));
				unityvalue=auxiliarvar-(tensvalue*10);
				true_bodyobject.cakewnd.document.write("</td></tr>");
				true_bodyobject.cakewnd.document.write("<tr><td>");
				true_bodyobject.cakewnd.document.write("</td></tr>");
			    }
			}
		}
	true_bodyobject.cakewnd.document.write("</table>");
	true_bodyobject.cakewnd.document.write("</center>");
	true_bodyobject.cakewnd.document.write("<center>");
	true_bodyobject.cakewnd.document.write("<input type=button value=close  onClick='self.close();'>");
	true_bodyobject.cakewnd.document.write("</center>");
	true_bodyobject.cakewnd.document.write("</body>");
	true_bodyobject.cakewnd.document.write("</html>");
	true_bodyobject.cakewnd.document.close();
	}
}

</script>


<body onLoad="setInterval('JavaScript:heart()',1000);init();">
<form name="agecalc" >
<tr>
<td height="50"><FONT style="FONT-SIZE: 22px; FONT-FAMILY: Comic Sans MS">How old are you?</FONT></td>
</tr>


<table>
<tr><td>
<center>
<FONT style="FONT-SIZE: 18px; FONT-FAMILY: Comic Sans MS">Birthday:</FONT> 
<SELECT style="FONT-SIZE: 18px; FONT-FAMILY: 'Comic Sans MS'" onChange="invalidate()" size=1 name="fmonth"> 
<OPTION selected>January<OPTION>February<OPTION>March<OPTION>April<OPTION>May<OPTION>June
<OPTION>July<OPTION>August<OPTION>September<OPTION>October<OPTION>November<OPTION>December
</OPTION></SELECT> 
<SELECT style="FONT-SIZE: 18px; FONT-FAMILY: 'Comic Sans MS'" onChange="invalidate()" size=1 name="fdate"> 
<OPTION selected>1<OPTION>2<OPTION>3<OPTION>4<OPTION>5<OPTION>6<OPTION>7<OPTION>8<OPTION>9<OPTION>10
<OPTION>11<OPTION>12<OPTION>13<OPTION>14<OPTION>15<OPTION>16<OPTION>17<OPTION>18<OPTION>19<OPTION>20
<OPTION>21<OPTION>22<OPTION>23<OPTION>24<OPTION>25<OPTION>26<OPTION>27<OPTION>28<OPTION>29<OPTION>30
<OPTION>31</OPTION></SELECT> 
<SELECT style="FONT-SIZE: 18px; FONT-FAMILY: 'Comic Sans MS'" onChange="invalidate()" size=1 name="fyear"> 

<script language="javascript">

for (xyz=1582;xyz<2000;xyz++)

{

document.write("<OPTION>");

document.write(xyz);

if (leapyear(xyz)==1){document.write("*");}

}

document.write("<OPTION selected>2000*");


flyingtoday=new Date();

flyingyear=parseInt(flyingtoday.getFullYear());

//flyingyear+=5;

for (xyz=2001;xyz<=flyingyear;xyz++)

{

document.write("<OPTION>");

if (xyz==flyingtoday.getFullYear()){document.write(">");}

document.write(xyz);

if (leapyear(xyz)==1){document.write("*");}

if (xyz==flyingtoday.getFullYear()){document.write("<");}

if (xyz>flyingtoday.getFullYear()){document.write("?");}

}

</script>

</OPTION></SELECT>

</center>

</td></tr>

<tr><td>

<center>

<input name="dayofweek" size="40" style="font-family:'Comic Sans MS';font-size: 16px;"></textarea>

</center>

</td></tr>

<tr><td><center>

<table border=0 cellspacing=0 cellpadding=0>

<tr><td>

<table border=0 cellspacing=0 cellpadding=0>

<tr><td>

<center>

<FONT style="FONT-SIZE: 10px; FONT-FAMILY: Comic Sans MS">time of birth (optional)</FONT> 

</center>

</td></tr>

<tr><td>

<SELECT style="FONT-SIZE: 10px; FONT-FAMILY: 'Comic Sans MS'" onChange="invalidate()" size=1 name="fhour"> 

<OPTION selected>12 AM = 0 h

<OPTION>1 AM = 1 h<OPTION>2 AM = 2 h<OPTION>3 AM = 3 h<OPTION>4 AM = 4 h<OPTION>5 AM = 5 h<OPTION>6 AM = 6 h<OPTION>7 AM = 7 h<OPTION>8 AM = 8 h

<OPTION>9 AM = 9 h<OPTION>10 AM = 10 h<OPTION>11 AM = 11 h<OPTION>12 PM = 12 h<OPTION>1 PM = 13 h<OPTION>2 PM = 14 h<OPTION>3 PM = 15 h<OPTION>4 PM = 16 h

<OPTION>5 PM = 17 h<OPTION>6 PM = 18 h<OPTION>7 PM = 19 h<OPTION>8 PM = 20 h<OPTION>9 PM = 21 h<OPTION>10 PM = 22 h<OPTION>11 PM = 23 h</OPTION></SELECT> 

<SELECT style="FONT-SIZE: 10px; FONT-FAMILY: 'Comic Sans MS'" onChange="invalidate()" size=1 name="fminute"> 

<OPTION selected>00 minutes<OPTION>01 minute<OPTION>02 minutes<OPTION>03 minutes<OPTION>04 minutes<OPTION>05 minutes<OPTION>06 minutes
<OPTION>07 minutes<OPTION>08 minutes<OPTION>09 minutes<OPTION>10 minutes<OPTION>11 minutes<OPTION>12 minutes
<OPTION>13 minutes<OPTION>14 minutes<OPTION>15 minutes<OPTION>16 minutes<OPTION>17 minutes<OPTION>18 minutes
<OPTION>19 minutes<OPTION>20 minutes<OPTION>21 minutes<OPTION>22 minutes<OPTION>23 minutes<OPTION>24 minutes
<OPTION>25 minutes<OPTION>26 minutes<OPTION>27 minutes<OPTION>28 minutes<OPTION>29 minutes<OPTION>30 minutes
<OPTION>31 minutes<OPTION>32 minutes<OPTION>33 minutes<OPTION>34 minutes<OPTION>35 minutes<OPTION>36 minutes
<OPTION>37 minutes<OPTION>38 minutes<OPTION>39 minutes<OPTION>40 minutes<OPTION>41 minutes<OPTION>42 minutes
<OPTION>43 minutes<OPTION>44 minutes<OPTION>45 minutes<OPTION>46 minutes<OPTION>47 minutes<OPTION>48 minutes
<OPTION>49 minutes<OPTION>50 minutes<OPTION>51 minutes<OPTION>52 minutes<OPTION>53 minutes<OPTION>54 minutes
<OPTION>55 minutes<OPTION>56 minutes<OPTION>57 minutes<OPTION>58 minutes<OPTION>59 minutes</OPTION></SELECT> 

</td></tr>
</table>
</td>
<td>
<table border=0 cellspacing=0 cellpadding=0>
<tr><td>&nbsp;&nbsp;&nbsp;
<INPUT style="FONT-SIZE: 18px; FONT-FAMILY: 'Comic Sans MS'" onclick=intro(); type=button name="calculatebutton" value="---------"> 
</td></tr>
</table>
</td>
</tr>
</table>
</center>
</td>
</tr>
<tr><td>
<center>
<textarea name="result" rows="11" cols="42" style="font-family:'Comic Sans MS';font-size: 14px; "></textarea>
</center>
</td></tr>
<tr><td>
</td></tr>
<tr><td>
<center>
<INPUT type="hidden" style="FONT-SIZE: 14px; FONT-FAMILY: 'Comic Sans MS'" onclick=buttoncake(); name="showcakebutton" value=""> 
</center>
</td></tr>
<tr><td>
</td></tr>
<tr height="50" valign="bottom"><td>
</td></tr>
</table>
</center>
</form>

<?php
include 'footer.php';
?>
