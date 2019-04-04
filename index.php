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
  .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      background-color: #E1E1E1;
  }
  .column{
    float: left;
    width: 50%;
    height: 50%;
    padding: 0px;
  }

  .text-container{
    background-color: #E1E1E1;
  }
  #mapper{
    border-radius: 25px;
    height: calc(100vh - 360px);
    width: 90%;
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
      if ($auth->isLoggedIn())
      {
        echo '<div class="jumbotron text-center"><h1>Hi, '.$_SESSION['username'].'!</h1>
        <p>Click on your username in the top right corner to expose menu options</p></div>';
      }
      else
      {
        echo '<div class="jumbotron text-center"><h1 class="display-1">Welcome to Drive</h1>
        <p>You can sign in or create a new account by clicking "Sign In" in the top right corner!</p></div>';
      }
    ?>
    <div id="footer">
      <header style="color:#b3b3b3">Copyright © 2019 Drive</header>
    </div>
  </div>
  <div class="column">
    <div class="jumbotron text-center" style="border-radius: 25px; margin-left: 14px;">
        <p style="margin-left:25px; margin-right:25px; font-size:15px;">Drive is your way to get around efficiently.
          Use it for a quick trip, or if you commute frequently, use you can schedule rides that repeat at whatever
          day or time you choose. Need a quick way to make money? Join our driver team. Our service allows drivers to
          be in control of their schedule, and pick which rides they want to take. No matter what you need, we'll make
          sure you enjoy the ride.</p>
    </div>
  </div>
  <div class="column">
    <div id="mapper">
         <script>
            function initMap() {
                    map = new google.maps.Map(document.getElementById("mapper"),
                        {
                          if (navigator.geolocation)
                        	{
                          	navigator.geolocation.getCurrentPosition(function(position)
                          	{
                			            var pos =
                                  {
                				              lat: position.coords.latitude,
                				              lng: position.coords.longitude
                                  }
                			            map.setCenter(pos);
                          	}),
                          }
                          else
                          {
                            center: {lat: 30.4133, lng: -91.1800},
                          }
                          zoom: 14
                        });
                    }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozvdVUpK_GgbLa6t5pGa6MEyWDJtsPm0&callback=initMap"async defer></script>
    </div>
  </div>
</body>
</html>
