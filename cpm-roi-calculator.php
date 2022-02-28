<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="CPM Advertising ROI Calculator">
<meta name="keywords" content="CPM Advertising ROI Calculator, cpm, roi calculator, cpm advertising">
<title>CPM Advertising ROI Calculator</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>CPM Advertising ROI Calculator</h2>


<?php
function fnExecute(){
	if(isset($_GET["tmi"]) and isset($_GET["cpm"]) and isset($_GET["click"]) and isset($_GET["conversion"]) and isset($_GET["profit"])) {
		 $tmi = $_GET["tmi"];
		 $cpm = $_GET["cpm"];
		 $click = $_GET["click"]*0.01;
		 $conversion = $_GET["conversion"]*0.01;
		 $profit = $_GET["profit"];

		 $monthly = $tmi*($cpm/1000);
		 $num = $tmi*$click*$conversion;
		 $projected = $profit*$num-$monthly;
		 $roi = $monthly ? $projected/$monthly : 0;

		 echo '<strong>Results:</strong>';
		 echo '<table>';
		 echo '<tr>';
		 echo '<td style="padding-right: 10px;">Monthly CPM advertising cost</td><td style="text-align: right">$'.round($monthly,2).'</td>';
		 echo '</tr>';
		 echo '<tr>';
		 echo '<td style="padding-right: 10px;">Number of conversions from CPM traffic</td><td style="text-align: right">'.round($num,2).'</td>';
		 echo '</tr>';
		 echo '<tr>';
		 echo '<td style="padding-right: 10px;">Projected profit from CPM traffic</td><td>$'.round($projected,2).'</td>';
		 echo '</tr>';
		 echo '<tr>';
		 echo '<td style="padding-right: 10px;">Your CPM advertising ROI</td><td>'.round($roi*100,2).'%</td>';
		 echo '</tr>';
		 echo '</table>';

	}
}
?>


<form method="get">
Enter Advertising info<br>
<br>
  <div class="alt1_40">Total monthly impressions</div>
  <div class="alt1_40">
    <input type="text" name="tmi" />
  </div>
  <div class="alt1_40">Estimated average CPM ($)</div>
  <div class="alt1_40">
    <input type="text" name="cpm" />
  </div>
  <div class="alt1_40">Click-through rate (%)</div>
  <div class="alt1_40">
    <input type="text" name="click" />
  </div>
  <div class="alt1_40">Conversion rate (%)</div>
  <div class="alt1_40">
    <input type="text" name="conversion" />
  </div>
  <div class="alt1_40">Average profit per conversion ($)</div>
  <div class="alt1_40">
    <input type="text" name="profit" />
  </div>
  <div class="alt1_40">
    <br><input type="submit" class="button" value="Calculate" />
  </div>
  <div class="clear"></div>
  <br />
</form>

<?php fnExecute(); ?>

<br>

This calculator measures your ROI (Return on Investment) if you are using the CPM (Cost per thousand) impressions advertising model (which is common to most banner and button ad campaigns).<br>
Total monthly impressions from your CPM advertising. This section of this CPM calculator tool lets you put in last month's number to calculate last month's ROI. You can also project next month's number to calculate next month's potential ROI<br>
Estimated average CPM. Here you can put in last month's number to calculate last month's ROI. You can also project next month's number to calculate next month's potential ROI.<br>
Click-through rate. Your click-through rate is the percentage of actual click-throughs per number of impressions. For example, if you pay for 5,000 impressions and get 50 click-throughs, your click-through rate would be 1%. Enter a percent number, not a fraction. For instance, for 10% enter 10, not 0.10.<br>
Conversion Rate. Your conversion rate is the percentage of visitors who come to your site from a banner or button and convert into customers, for instance, by making a purchase. Conversion rates vary by company, but an average conversion rate you can use as a test would be 2-3%. Enter a percent number, not a fraction. For instance, for 10% enter 10, not 0.10.<br>
Average profit per conversion. Profit refers to the amount of money you earn from a sale. For example, if you sell a software package for $100 and it only cost you $10, your profit is $90. In order for our advertising ROI calculator to work efficiently, you must supply this number from your own records by estimating the average amount of profit you make from each conversion.<br>
<?php
include 'footer.php';
?>
