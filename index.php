<?php
$title = 'Drive';

include "login/misc/pagehead.php";
?>

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<style>
    #wrapper{
        height: 300px;
        width: 300px;
        position: relative;
        left: 60%;
        border-radius: 10px;
        overflow: hidden;
        outline-width: 20px;
        outline-color: black;
    }
    #map{
        height: inherit;
        width: inherit;
    }
</style>
</head>
<body>

<?php require 'login/misc/pullnav.php'; ?>

<div class="container">

<?php

if ($auth->isLoggedIn()) {
    echo '<div class="jumbotron text-center"><h1>Hi, '.$_SESSION['username'].'!</h1>
    <p>Click on your username in the top right corner to expose menu options</p></div>
    <div class="col-lg-2"></div><div class="col-lg-8">
    <h2>Menu Items:</h2>

    <p><b><em>Edit Profile</em></b> - Edit your own user profile information including your name, contact info, avatar, etc</p>
    <p><b><em>Account Settings</em></b> - Change your email address and/or password</p>';

    if ($auth->isAdmin()) {
        echo '<p><b><em>Manage Active Users</em></b> - Admin manage active users and/or ban trolls</p>';
        echo '<p><b><em>Verify/Delete Users</em></b> - Admin mass verify or delete new user requests</p>';
        echo '<p><b><em>Mail Log</em></b> - Admin mail status logging</p>';
    }

    if ($auth->isSuperAdmin()) {
        echo '<p><b><em>Edit Site Config</em></b> - Superadmin edit site configuration in one page</p>';
    }
} else {
    echo '<div class="jumbotron text-center"><h1 class="display-1">Homepage</h1>
    <small>This is your homepage. You are currently signed out.</small><br><br>
    <p>You can sign in or create a new account by clicking "Sign In" in the top right corner!</p>';
}

?>
        </div><div class="col-lg-2"></div>
        <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
    </div>


<h1>
    <p style="color:#E1E1E1; text-align: center; ;">Welcome to Drive</p>
</h1>
<div id="wrapper">
    <div id="map">
        <script>
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"),
                    {
                        center: {lat: 30.4133, lng: -91.1800},
                        zoom: 14
                    });
                }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=KEY_REDACTED&callback=initMap"async defer></script>
    </div>
</div>

</body>
</html>
