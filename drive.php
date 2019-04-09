<?php
$title="Drive";
$userrole="DriverRider";
include "login/misc/pagehead.php";
if(isset($_GET['lat'], $_GET['lng']))
{
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO member_loc (lat, lng) VALUES ( $_GET['lat'],$_GET['lng'] )";
$conn->exec($sql);
$sql = "SELECT lat FROM member_loc";
$resultLat = $conn->query($sql);
$sql = "SELECT lng FROM member_loc";
$resultLng = $conn->query($sql);
$conn->close();
}
?>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<html>
<style>
    #map{
	top: 0%;
	height: 100%;
    }
    #wrapper{
 	left:0;
	right: 0;
	top: 52px;
	bottom: 15px;
	position: absolute;
    }
    #content{
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	overflow: auto;
	position: absolute;
    }
    #footer{
	bottom: 0;
	right: 0;
	left: 0;
	position: absolute;
	width: 100%;
	text-align: center;
	font-size: 11px;
    }
</style>
    <?php require "login/misc/pullnav.php"; ?>
</head>
<body>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozvdVUpK_GgbLa6t5pGa6MEyWDJtsPm0&callback=initMap" async defer></script>
    <div class="container">
	<div id="wrapper">
	    <div id="content">
		<div id="map">
		    <script>
var map, infoWindow;
function initMap() 
{
	map = new google.maps.Map(document.getElementById('map'), 
	{
		center: {lat: 30.4133, lng: -91.1800},
		zoom: 14
	});
	infoWindow = new google.maps.InfoWindow;
	if (navigator.geolocation) 
	{
	navigator.geolocation.getCurrentPosition(function(position) 
	{
	var userlat = position.coords.latitude;
	var userlng = position.coords.latitude;
	}), function() 
	{
	handleLocationError(true, infoWindow, map.getCenter());
	};
	} 
	else
	{
	// Browser doesn't support Geolocation
	handleLocationError(false, infoWindow, map.getCenter());
	}
	if(<?php echo isset($_GET['lat'])?>)
	{
	var poslat = <?php echo '["' . implode('", "', $resultLat) . '"]' ?>;
	var poslng = <?php echo '["' . implode('", "', $resultLng) . '"]' ?>;
	for(var i = 0; i < poslat.length; i++)
	{
		var pos = 
		{
			lat: poslat[i], 
			lng: poslng[i]
		};
		addMarker(pos,map);
	}
	}
	else
	{
	location.href="drive.php?lat="+userlat+"&lng="+userlng;
	}
}

function addMarker(pos,map)
{
	marker = new google.maps.Marker(
    {
     position: pos,
     map: map,
    });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) 
{
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
}

		    </script>
			</div>
	    </div>
	</div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
    </div>
</body>
</html>
