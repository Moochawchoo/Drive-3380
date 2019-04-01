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
    <script src="js/backendMap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozvdVUpK_GgbLa6t5pGa6MEyWDJtsPm0&callback=initMap" async defer></script>
    <div class="container">
	<div id="wrapper">
	    <div id="content">
		<div id="map"></div>
	    </div>
	</div>
  <img src="" alt="Car" style="width:100%">
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
    </div>
</body>
</html>
