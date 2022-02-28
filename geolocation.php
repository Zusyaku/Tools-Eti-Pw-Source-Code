<!DOCTYPE html>
<html lang="en">
<head>
<LINK REL="SHORTCUT ICON" href="avatar brigante.jpg">
<meta http-equiv="Content-Language" content="en" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1251">
<meta name="viewport" content="width=620">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Find your location from here! Find out your IP Address!">
<meta name="keywords" content="my ip, what is my ip, ip address, show my ip, geolocation, locate, geolocator, location, ip locator, моето айпи, геолокация, моето ip, моят айпи адрес, ip адрес, къде се намирам">
<meta name="Author" content="www.eti.pw" />
<title>What is my IP Address? Where is my location?</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
</head>
<body>

<a href="./">Free Online Tools</a>
  
<h2>What is my IP Address? Where is my location?</h2> 

Geographic location of your IP address<br>

Allow your location to be shared! Allow Location Access when prompted or warned of danger page! :) Nothing dangerous! Use this tool.<br>

<script>

function getUserIP(onNewIP) { 

    var myPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;
    var pc = new myPeerConnection({
        iceServers: []
    }),
    noop = function() {},
    localIPs = {},
    ipRegex = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/g,
    key;

    function iterateIP(ip) {
        if (!localIPs[ip]) onNewIP(ip);
        localIPs[ip] = true;
    }

    pc.createDataChannel("");

    pc.createOffer(function(sdp) {
        sdp.sdp.split('\n').forEach(function(line) {
            if (line.indexOf('candidate') < 0) return;
            line.match(ipRegex).forEach(iterateIP);
        });
        
        pc.setLocalDescription(sdp, noop, noop);
    }, noop); 

    pc.onicecandidate = function(ice) {
        if (!ice || !ice.candidate || !ice.candidate.candidate || !ice.candidate.candidate.match(ipRegex)) return;
        ice.candidate.candidate.match(ipRegex).forEach(iterateIP);
    };
}


getUserIP(function(ip){
		document.getElementById("IP").innerHTML = '<b>Internal LAN IP - Your local IP address is:</b> '  + ip + "";
});
</script>

<br>

<b>Your IP Address is:</b> 

<?php
echo  $_SERVER['REMOTE_ADDR'];
?>

<p><span id="IP"></span></p>

<b>Your User-Agent String is:</b>

<?php
echo  $_SERVER['HTTP_USER_AGENT'];
?>

<br>
<br>
Do you want more info about your IP? OK click on button 'Lookup IP Address'<br>
<p>When someone check about your IP, then will see this info too.<br>
There may be differences between IP locators. But Google knows better, and now you know where are you exactly, but others who trying to checking you maybe don't know it for sure.</p><br>

<form method="get" action="ip-lookup.php">
<input type="text" name="ip" id="ip" style="width:180px;height:40px;" maxlength="15" value="<?php echo $_SERVER['REMOTE_ADDR'];?>" placeholder="IP" title="Enter IP Address here" />
<input type="submit" class="button" value="Lookup IP Address" />
</form>

<h2>1.Geolocation</h2>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <article>
<p>
        When prompted, allow your location to be shared to see Geolocation in action! Content blocked? Unblock! See your position on the map.
</p>
      <p>Finding your location: <span id="status">Checking... Please allow (from Browser) your location to be shared. It's not dangerouse!</span></p>
    </article>

<script>
function success(position) {
  var s = document.querySelector('#status');
  
  if (s.className == 'success') {

    return;
  }
  
  s.innerHTML = "Yeah, Google found you!";
  s.className = 'success';
  
  var mapcanvas = document.createElement('div');
  mapcanvas.id = 'mapcanvas';
  mapcanvas.style.height = '450px';
  mapcanvas.style.width = '560px';
    
  document.querySelector('article').appendChild(mapcanvas);
  
  var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  var myOptions = {
    zoom: 15,
    center: latlng,
    mapTypeControl: false,
    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
  
  var marker = new google.maps.Marker({
      position: latlng, 
      map: map, 
      title:"You are here! (at least within a "+position.coords.accuracy+" meter radius)"
  });
}

function error(msg) {
  var s = document.querySelector('#status');
  s.innerHTML = typeof msg == 'string' ? msg : "Failed! Maybe your Browser is old and not supports HTML5 or just blocked this content... Unblock!";
  s.className = 'fail';
  

}

if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(success, error);
} else {
  error('not supported... maybe your browser is old');
}
</script>

<h2>2.Geolocation</h2>
    <p>
        Find out approximately where you are. <br />Try Microsoft Bing too:)
    </p>
    <p>
        Click on the button: <button class="btn btn-primary" onclick="GetMap()">Show da map from Microsoft Bing</button>
    </p>
    
    <div id="mapDiv" style="position: relative; width: 700px; height: 600px;"></div>
    <script type="text/javascript" src="http://ecn.dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=7.0"></script>
    <script type="text/javascript">
        var map = null;
        function GetMap() {
            /* BING_MAPS_KEY http://www.bingmapsportal.com/
                http://www.microsoft.com/maps/developers/ */
            var cred = "AmksnZKffguqp8LmDitTTDBnshVHJ_ZKF6hN39aCkNgiHPap7xcYsLo6194CPl1H";

            map = new Microsoft.Maps.Map(document.getElementById("mapDiv"),
                { credentials: cred });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(locateSuccess, locateFail);
            }
            else {
                alert('I\'m sorry, but Geolocation is not supported in your current browser. Have you tried running this in IE9?');
            }
        }

        function locateSuccess(loc) {

            var userLocation = new Microsoft.Maps.Location(loc.coords.latitude, loc.coords.longitude);

            map.setView({ center: userLocation, zoom: 14 });

            var locationArea = drawCircle(userLocation);
            map.entities.push(locationArea);
        }

        function locateFail(geoPositionError) {
            switch (geoPositionError.code) {
                case 0: 
                    alert('An unknown error occurred, sorry');
                    break;
                case 1: 
                    alert('Permission to use Geolocation was denied');
                    break;
                case 2:
                    alert('Couldn\'t find you...');
                    break;
                case 3: 
                    alert('The Geolocation request took too long and timed out');
                    break;
                default:
            }
        }

        function drawCircle(loc) {
            var radius = 100;
            var R = 6378137;
            var lat = (loc.latitude * Math.PI) / 180;
            var lon = (loc.longitude * Math.PI) / 180;
            var d = parseFloat(radius) / R;
            var locs = new Array();
            for (x = 0; x <= 360; x++) {
                var p = new Microsoft.Maps.Location();
                brng = x * Math.PI / 180;
                p.latitude = Math.asin(Math.sin(lat) * Math.cos(d) + Math.cos(lat) * Math.sin(d) * Math.cos(brng));
                p.longitude = ((lon + Math.atan2(Math.sin(brng) * Math.sin(d) * Math.cos(lat), Math.cos(d) - Math.sin(lat) * Math.sin(p.latitude))) * 180) / Math.PI;
                p.latitude = (p.latitude * 180) / Math.PI;
                locs.push(p);
            }
            return new Microsoft.Maps.Polygon(locs, { fillColor: new Microsoft.Maps.Color(125, 0, 0, 255), strokeColor: new Microsoft.Maps.Color(0, 0, 0, 255) });
        }
    </script>

<p>This online tool is not so dangerous! Use it:)</p>
<p>But You must know that when you allow GPS and Location (You are positioning yourself via your Smart Phone, Tablet), and then Google get your data. Google collects all about your IP,ISP and show this on the google map... Everybody got your real street, block, house address ... and when someone check your IP, then has available with your real address (your street, your block, house) ... This exactly is very dangerouse! Never positioning from your wi-fi router in house via your phone, tablet! Google will know all and show this on da map! Capisci?</p>
<img src="http://hitwebcounter.com/counter/counter.php?page=4651933&style=0008&nbdigits=5&type=ip&initCount=1" title="" Alt="" border="0">

<?php
include 'footer.php';
?>
