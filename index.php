<?php
$title = 'Home';

include "login/misc/pagehead.php";
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
    @media screen and (max-width: 600px){
	    .column{
	        width: 100%;
	    }
    }
    *{
	    box-sizing: border-box;
    }
</style>

</head>
<body>

<script>
    function KC(cb) {
        var input='';
        var key='38384040373937396665';
        document.addEventListener('keydown',function(e) {
            input+=(""+e.keyCode);
            if (input===key) {
                return cb();
            }
        if (!key.indexOf(input)) return;
        input=(""+e.keyCode);
        });
    }

    var links=[
        "https://server.1337ersprime.com/secret/dino.php",
        "https://server.1337ersprime.com/secret/receipt.php",
        "https://server.1337ersprime.com/secret/ascii.php"
    ];
    var random=Math.floor(Math.random()*links.length);

    KC(function () {location.replace(links[random])})
</script>

<?php require 'login/misc/pullnav.php'; ?>

<div class="container">

<?php

if ($auth->isLoggedIn()) {
    echo '<div class="jumbotron text-center"><h1>Hi, '.$_SESSION['username'].'!</h1>
    <p>Click on your username in the top right corner to expose menu options</p></div>
    <div class="col-lg-2"></div><div class="col-lg-8">
    
} else {
    echo '<div class="jumbotron text-center"><h1 class="display-1">Welcome to Drive</h1>
    <small>You are currently signed out.</small><br><br>
    <p>You can sign in or create a new account by clicking "Sign In" in the top right corner!</p>';
}

?>
        </div><div class="col-lg-2"></div>
	<div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
    </div>
<div class="column">
	<p style="color:#E1E1E1; margin-left: 25px">Need a ride? Pick a point A and we'll get you to point B</p>
</div>
<div class="column">
	<div id="mapper">
	    <script>
    		function initMap() {
                map = new google.maps.Map(document.getElementById("mapper"),
                    {
                        center: {lat: 30.4133, lng: -91.1800},
                        zoom: 14
                    });
                }
            </script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozvdVUpK_GgbLa6t5pGa6MEyWDJtsPm0&callback=initMap"async defer></script>
	</div>
</div>
</body>
</html>
