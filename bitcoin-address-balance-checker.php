<!DOCTYPE html>
<html lang="en">
<head>
<title>Bitcoin Address balance checker</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bitcoin address balance checker">
<meta name="keywords" content="bitcoin address balance checker, check bitcoin, check bitcoins, bitcoin address balance check, bitcoins, bitcoin, base58, hash160, bitcoin balance, bitcoin balans check, BTC address checker, BTC address check, BTC address balance, BTC address explorer">
<link rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>

<h2>Bitcoin address balance checker</h2>

Address type: 'Standard Public'<br>
Address can be base58 or hash160<br><br>

Short Info about BTC now:<br>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div>
<script>
// API from https://sochain.com/api     ...     https://sochain.com/api/v2/get_info/btc
$.get( "https://sochain.com/api/v2/get_info/BTC", function( response ) { // BTC or btc, DASH, ZEC, DOGE, LTC, BTCTEST, DASHTEST, ZECTEST, DOGETEST, LTCTEST 
  $( "div" ) // $( "body" )
  //.append( "Name: " + response.data.name + "<br>" ); // the name about what coin is
    .append( "Total Blocks: " + response.data.blocks + "<br>"); // current block count
}, "json" );

$.get( "https://sochain.com/api/v2/get_info/btc", function( response ) {
  $( "div" ) // body
    .append( "Price: " + response.data.price + " USD<br>"); // current price in USD ... https://sochain.com/api#get-prices
}, "json" );

$.get( "https://sochain.com/api/v2/get_info/btc", function( response ) {
  $( "div" ) // it can be body and not div :)
    .append( "Mining difficulty: " + response.data.mining_difficulty + "<br>"); // mining difficulty
}, "json" );

$.get( "https://sochain.com/api/v2/get_info/btc", function( response ) {
  $( "div" )
    .append( "Unconfirmed Transactions: " + response.data.unconfirmed_txs + "<br>"); // Unconfirmed Transactions, Unconfirmed BTC
}, "json" );
</script>
</div>

<br>

<?php

$bitcoin_address = htmlentities($_POST["bitcoin_address"]);

// Free API from: https://blockchain.info   and   https://api.blockcypher.com/v1/btc/main/addrs/bitcoin-address-here/full
$location = json_decode(file_get_contents('https://blockchain.info/rawaddr/'.$bitcoin_address)); // 26-35 alphanumeric characters
$location1 = json_decode(file_get_contents('https://api.blockcypher.com/v1/btc/main/addrs/'.$bitcoin_address.'/full'));

if(isset($_POST['bitcoin_address']))
{
echo '<form method="post" action="">
<input type="text" name="bitcoin_address" id="bitcoin_address" maxlength="42" placeholder="bitCoin Address" title="Enter bitcoin address here" />
<input type="submit" class="button" value="Lookup BitCoin Address" />
</form>';
echo "<br><b>General Short Information:</b><br>";
echo "<br><b>hash160: </b>" .$location->hash160;
echo "<br><b>Transactions: </b>" .$location->n_tx;
echo "<br><b>Unredeemed: </b>" .$location->n_unredeemed;
echo "<br><b>Total received: </b>" .$location->total_received;
echo "<br><b>Total sent: </b>" .$location->total_sent;
echo "<br><b>Final balance: </b>" .$location->final_balance;

echo "<br><br><b>Other Short Info:</b>";
echo "<br><b>Address: </b>" .$location1->address;
echo "<br><b>Total received: </b>" .$location1->total_received;
echo "<br><b>Total sent: </b>" .$location1->total_sent;
echo "<br><b>Balance: </b>" .$location1->balance;
echo "<br><b>Unconfirmed balance: </b>" .$location1->unconfirmed_balance;
echo "<br><b>Final balance: </b>" .$location1->final_balance;
echo "<br><b>Transactions: </b>" .$location1->n_tx;
echo "<br><b>Unconfirmed transactions: </b>" .$location1->unconfirmed_n_tx;
echo "<br><b>Final transactions: </b>" .$location1->final_n_tx;
}

else {

print ('<form method="post" action="">
<input type="text" name="bitcoin_address" id="bitcoin_address" maxlength="42" placeholder="bitCoin Address" title="Enter bitcoin address here" />
<input type="submit" class="button" value="Lookup BitCoin Address" />
</form>');
echo "<small>e.g. 1AJbsFZ64EpEfS5UAjAfcUG8pH8Jn3rn1F</small><br>";
echo "<br>Here's what you will find out:<br><br>Transactions<br>Unredeemed<br>Unconfirmed transactions<br>Total received<br>Total sent<br>Balance<br>Final balance<br>Unconfirmed balance<br>Final transactions";
}
?>

<?php
include 'footer.php';
?>
