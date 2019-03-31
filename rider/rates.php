<?php
$title="Rates";
$userrole="DriverRider";
include "../login/misc/pagehead.php";
?>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<style>
    #footer{
	    bottom: 0;
	    right: 0;
	    left: 0;
	    position: absolute;
	    width: 100%;
	    text-align: center;
	    font-size: 11px;
    }
    html, body{
        font-family: 'Roboto';
    }
    .column{
        float: left;
        width: 50%;
        padding: 0px;
    }
    #mapper{
        height: calc(100vh - 400px);
        width: 100%;
        position: realtive;
        overflow: hidden;
        margin: 0 auto;
    }
</style>
    <?php require "../login/misc/pullnav.php"; ?>
</head>
<body>
    <h1>
        <p style="color:#E1E1E1; text-align: center; ;">Our Rates</p>
    </h1>
    <div class="column">
        <p style="color:#E1E1E1; margin-left: 25px">Rates:</p>
    </div>
    <div class="column">
        <div id="mapper">
            <script>
                function initMap() {
                    map = new google.maps.Map(document.getElementById("mapper"), {
                        center: {lat: 30.4133, lng: -91.1800},
                        zoom: 14
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozvdVUpK_GgbLa6t5pGa6MEyWDJtsPm0&callback=initMap"async defer></script>
        </div>
    </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>

