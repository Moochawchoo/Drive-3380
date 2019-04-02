<?php
$title="Drive";
$userrole="DriverRider";
include "login/misc/pagehead.php";
?>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
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
    <script src="js/bundle.js"></script>
    <script src ="js/backendMap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozvdVUpK_GgbLa6t5pGa6MEyWDJtsPm0&callback=initMap" async defer></script>
    <div class="container">
	<div id="wrapper">
	    <div id="content">
		<div id="map">
		    <script>
                    var mysql = require('mysql');
var con = mysql.createConnection(
{
	host:
	user:
	password:
	database:
});
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
			con.connect(function(err)
				{
				if(err) throw err;
				var sql = "INSERT INTO member_loc (userid, lat, lng) VALUES ( ,position.coords.latitude, position.coords.longitude)";
				con.query(sql, function(err,result)
					{
					if(err) throw err;
				});
				con.query("SELECT lat, lng FROM member_loc", function (err, results, feilds)
					{
					if(err) throw err; 
					for(var i = 0; i < results.length; i++)
					{
						var pos =
						{ 
							lat: results[i].lat,
							lng: results[i].lng
						};
					}
					addMarker(pos,map);
				});
			}), 
				    function() {
				handleLocationError(true, infoWindow, map.getCenter());
			}
				    });
		} 
		else
		{
		// Browser doesn't support Geolocation
		handleLocationError(false, infoWindow, map.getCenter());
		}
}
function handleLocationError(browserHasGeolocation, infoWindow, pos) {
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
