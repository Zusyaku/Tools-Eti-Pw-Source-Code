<!DOCTYPE html>
<html lang="en">
<head>
<title>Latitude Longitude finder</title>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Map Latitude Longitude finder. Online tool to find the latitude and longitude of a location chosen on a map">
<meta name="keywords" content="latitude longitude finder, latitude longitude lookup, show latitude longitude on map, find latitude and longitude"/>
<meta name="author" content="www.eti.pw">
<meta name="robots" content="all"/>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>

<body>

<a href="./">Free Online Tools</a>

<h2>Latitude Longitude finder</h2>

<?php
$IP = $_SERVER['REMOTE_ADDR'];
$ip = htmlentities($_GET["ip"]);
$hostname = gethostbyaddr($_GET['ip']);
$location = json_decode(file_get_contents('http://freegeoip.net/json/'.$ip));
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

if(isset($_GET['ip']))
{
echo '<form method="get" action="">
<input type="text" name="ip" id="ip" maxlength="15" placeholder="IP" title="Enter IP Address here" />
<input type="submit" class="button" value="Lookup IP Address" />
</form>';
echo "<br><b>Latitude: </b>" .$location->latitude;
echo "<br><b>Longitude: </b>" .$location->longitude;

echo <<<HTML
<b>Map Latitude Longitude:</b>
<form action="" method="post">
<br>Enter a latitude/longitude:
<input type="text" name="address" value="$location->latitude $location->longitude" />
<input type="submit" class="button" value="Go to this Location" /><br />
</form>
HTML;

}

else {

print ('<b>Map Latitude Longitude:</b>
<form action="" method="post">
<br>Enter a latitude/longitude:
<input type="text" name="address" value="" />
<input type="submit" class="button" value="Go to this Location" /><br />
<small>(You can put any latitude/longitude to see the location on the map)</small><br>
<small>e.g. 27.3717 -81.4306</small>
</form>');


}
?>
	
	<style>
	#gmap_canvas{
		width:100%;
		height:30em;
	}
	
	#map-label,
	#address-examples{
		margin:1em 0;
	}
	</style>


<?php
function geocode($address){

	// url encode the address
	$address = urlencode($address);
	
	// google map geocode free api url ... keyless old api
	// $url = "http://maps.google.com/maps/api/geocode/json?address={$address}"; // no need &key parameter :)

// Keyless access to Google Maps Platform is deprecated since June 11th,2018 ... Get KEY: cloud.google.com/maps-platform/maps
$url = "http://maps.google.com/maps/api/geocode/json?address={$address}&key=YOUR_API_KEY"; //key parameter contains your application's API key

	// get the json response
	$resp_json = file_get_contents($url);
	
	// decode the json
	$resp = json_decode($resp_json, true);

	// response status will be 'OK', if able to geocode given address 
	if($resp['status']=='OK'){

		// get the important data
		$lati = $resp['results'][0]['geometry']['location']['lat'];
		$longi = $resp['results'][0]['geometry']['location']['lng'];
		$formatted_address = $resp['results'][0]['formatted_address'];
		
		// verify if data is complete
		if($lati && $longi && $formatted_address){
		
			// put the data in the array
			$data_arr = array();			
			
			array_push(
				$data_arr, 
					$lati, 
					$longi, 
					$formatted_address
				);
			
			return $data_arr;
			
		}else{
			return false;
		}
		
	}else{
		return false;
	}
}
?>



<?php
if($_POST){

	// get latitude, longitude and formatted address
	$data_arr = geocode($_POST['address']);

	// if able to geocode the address
	if($data_arr){
		
		$latitude = $data_arr[0];
		$longitude = $data_arr[1];
		$formatted_address = $data_arr[2];
					
?>

	<div id="gmap_canvas">Loading map...</div>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>    
	<script type="text/javascript">
		function init_map() {
			var myOptions = {
				zoom: 14,
				center: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
			marker = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>)
			});
			infowindow = new google.maps.InfoWindow({
				content: "<?php echo $formatted_address; ?>"
			});
			google.maps.event.addListener(marker, "click", function () {
				infowindow.open(map, marker);
			});
			infowindow.open(map, marker);
		}
		google.maps.event.addDomListener(window, 'load', init_map);
	</script>

	<?php
	}else{
		echo "<br>ERROR: No map found!";
	}
}
?>

<?php
include 'footer.php';
?>
