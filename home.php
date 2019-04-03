<?php
$title="Drive";
$userrole="DriverRider";
include "login/misc/pagehead.php";
?>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .hero-image {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("assets/cars overhead.jpg");
      height: 100%;
      margin-top: -20px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
    }

    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .hero-text button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px 25px;
      color: black;
      background-color: #ddd;
      text-align: center;
      cursor: pointer;
    }

    .hero-text button:hover {
      background-color: #555;
      color: white;
    }
</style>
    <?php require "login/misc/pullnav.php"; ?>
</head>
<body style>
    <div class="hero-image">
        <div class="hero-text">
          <h1>Let's Get on the Road</h1>
          <p>Drive is here to help you get where you want, when you want to.</p>
          <button onclick="window.location.href = 'https://server.1337ersprime.com/login/index.php';">Start Here</button>
        </div>
    </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright © 2019 Drive</header></div>
</body>
</html>
