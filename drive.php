<?php
$title="Drive";
$userrole="DriverRider";
include "login/misc/pagehead.php";
include "login/dbconf.php";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO $tbl_member_loc (lat, lng)" . "VALUES ( $_COOKIE["latitude"],$_COOKIE["longitude"] )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "SELECT lat FROM $tbl_member_loc";
$resultLat = $conn->query($sql);
$sql = "SELECT lng FROM $tbl_member_loc";
$resultLng = $conn->query($sql);
$conn->close();
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
            			$(document).ready(function()
            			{
                            var latitude = position.coords.latitude;
                            var longitude = position.coords.longitude;
            			createCookie("latitude",latitude,5);
            			createCookie("longitude",longitude,5);
            			});
            			var resultLat = <?php echo $_resultLat[] ?>;
            			var resultLng = <?php echo $_resultLng[] ?>;
            					for(var i = 0; resultLat.length; i++)
            					{
            						var pos =
            						{
            							lat: resultLat[i],
            							lng: resultLng[i]
            						};
            						addMarker(pos,map);
            					}
            			}),
            				    function() {
            				handleLocationError(true, infoWindow, map.getCenter());
            			}
            		}
            		else
            		{
            		// Browser doesn't support Geolocation
            		handleLocationError(false, infoWindow, map.getCenter());
            		}
            }
            function handleLocationError(browserHasGeolocation, infoWindow, pos)
            {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }
            function createCookie(var name, var latitude, var longitude)
            {
                if (days)
                {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toGMTString();
                }
                else
                {
                    expires = "";
                }
                document.cookie = userid + "=" + coord + expires + "; path=\\";
            }
          </script>
			  </div>
	    </div>
    </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright © 2019 Drive</header></div>
  </div>
</body>
</html>
