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
	    position: fixed;
	    text-align: center;
	    font-size: 11px;
    }
    #content{
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
</style>
    <?php require "../login/misc/pullnav.php"; ?>
</head>
<body>
    
    <h1>
        <p style="color:#E1E1E1; text-align: center; ;">Drive Rates</p>
    </h1>
    <div id="content">
        <h3>
           <strong> We offer different pricing depending on the number of riders: </strong>
        </h3>
        <div id="background">
        <p>
        <h3>
            <strong>DriveScout:</strong><br />
        </h3>
        <font size = "3.5">
            Seats up to two people<br />
            Base Fare: $1.25<br />
            Per Minute: $0.15<br />
            Per Mile: $0.50<br />
            Cancellation Fee: $5<br />
            Service Fee: $1.75
        </font>
        </p>
        <p>
        <h3>
            <strong>DriveSquad:</strong><br />
        </h3>
        <font size = "3.5">
            Seats up to four people<br />
            Base Fare: $2<br />
            Per Minute: $0.25<br />
            Per Mile: $1<br />
            Cancellation Fee: $5<br />
            Service Fee: $1.75
        </font>
        </p>
        <p>
        <h3>
            <strong>DriveParty:</strong><br />
        </h3>
        <font size = "3.5">
            Seats up to eight people<br />
            Base Fare: $2.50<br />
            Per Min: $0.30<br />
            Per Mile: $1.50<br />
            Cancellation Fee: $5<br />
            Service Fee: $1.75
        </font>
        </p>
    </div>
</div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>

