<?php
$title="About";
include "login/misc/pagehead.php";
?>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<style>
    #footer{
	    bottom: 0;
	    right: 0;
	    left: 0;
	    position: relative;
	    width: 100%;
	    text-align: center;
	    font-size: 11px;
    }

    html, body{
	font-family: 'Roboto';
    }
    html{
        box-sizing: border-box;
    }    
    *, *:before, *:after{
        box-sizing: inherit;
    }
    .column{
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding 0 8px;
    }
    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .container {
        padding: 0 16px;
    }
    .container::after, .row::after {
        content: "";
        clear: both;
        display: table;
    }
    .title {
        color: grey;
    }
    .button {
        border: none;
        outine: 0;
        display: inline-block;
        padding: 8px;
        color: green;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }
    .button:hover {
        background-color: #555;
    }
</style>
    <?php require "login/misc/pullnav.php"; ?>
</head>
<body>
    <h1>
        <p style="color:#E1E1E1; text-align: center; ;">About Drive</p>       
    </h1>
    <div class="row">
    <div class="column">
        <div class="card">
        <img src="" alt="" style="width:100%">
         <div class="container">
            <h2>Hunter Adams</h2>
            <p class="title">Front-end</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>

  <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Chris Calvo</h2>
        <p class="title">Front-end</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Leslyanne Warrington</h2>
        <p class="title">Front-end</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    </div>
    <div class="row">
    <div class="column">
        <div class="card">
        <img src="" alt="" style="width:100%">
         <div class="container">
            <h2>Brandon Norman</h2>
            <p class="title">Back-end</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button">Contact</button></p>
        </div>
        </div>
    </div>

  <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Philip Kerr</h2>
        <p class="title">Back-end</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Sean Wilkinson</h2>
        <p class="title">Back-end</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
    </div>
    <div class="row">
        <div class="column">
        <div class="card">
        <img src="" alt="" style="width:100%">
      <div class="container">
        <h2>Robert Zhong</h2>
        <p class="title">Almighty Server-guy</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>

