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
	    position: absolute;
	    width: 100%;
	    text-align: center;
	    font-size: 11px;
    }
    #content {
        height: 100%;
        width: 100%;
        position: absolute;
        overflow: hidden;
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
        width: 33%;
        margin-bottom: 16px;
        padding 0 8px;
        transition: all .3s ease-in;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        background-color: #E1E1E1;
    }
    .carde {}
    .card:hover .containerc{
        visibility: hidden;
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
</style>
    <?php require "login/misc/pullnav.php"; ?>
</head>
<body style="overflow-x: hidden;"> 
    <h1>
        <p style="color:#E1E1E1; text-align: center; ;">The Drive team</p>
    </h1>
    <div class="content">
        <div class="row">
            <div class="column">
                <div class="card">                   
                    <div class="container">
                        <h2>Hunter Adams</h2>
                        <p class="title">HTML-slave</p>
                        <p>I'm occasionally capable of coding things right on the first try, I swear.</p>
                        <p>huadams.2021@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Chris Calvo</h2>
                        <p class="title">Apprentice Coder</p>
                        <p>I do things and dissapear ḭ̷͔̟̫͘͢n͍̮̰̣t̷̩̝̣͇̺̼̫͞o̥͕̹̜̬̫̠ ̨̰͍̙͍̙̺͈͈͝t̵̜̻̥̩͚͍͟͟h̖̱̙̥̝̺̕é̦̣̝͍̭̯͜ ̨͖͎͇͝ͅv̺̳o҉͎i̢̲̣͕̗̳̲͉̮͢d͖̱͍̙͠.</p>
                        <p>Spirit@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Leslyanne Warrington</h2>
                        <p class="title">Front-end</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>BandGekc0@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Brandon Norman</h2>
                        <p class="title">Back-end</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>Branduhn@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                         <h2>Philip Kerr</h2>
                        <p class="title">Back-end</p>
                        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                        <p>DReplicant@yahoo.com</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Sean Wilkinson</h2>
                        <p class="title">Back-end</p>
                        <p>Doesn't know how to Google.</p>
                        <p>SWlkns@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <div class="carde">
                    <div class="container"></div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Robert Zhong</h2>
                        <p class="title">Almighty Server Guy</p>
                        <p>Here for all your server needs.<br/><strike>Please send help. This is my life now</strike></p>
                        <p>robzhong@1337ersprime.com</p>
                    </div>
                </div>
            </div>
        </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>
