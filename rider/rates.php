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
        <p style="color:#E1E1E1; text-align: center; ;">Our Rates</p>
    </h1>
    <div id="content">
        <h3>
            The current rates for our services:
        </h3>
        <p>
        <font size = "5.5">
            <strong>DriveScout</strong><br />
        </font>
        <font size = "3.5">
            Seats up to two<br />
            Base Fare: $1.25<br />
            Per Minute: $0.15<br />
            Per Mile: $0.90<br />
            Cancellation Fee: $5<br />
            Service Fee: $1.75
        </font>
        </p>
        <p>
        <font size = "5.5">
            <strong>DriveSquad</strong><br />
        </font>
        <font size = "3.5">
            Seats up to four<br />
            Base Fare: $2<br />
            Per Minute: $0.25<br />
            Per Mile: $1.35<br />
            Cancellation Fee: $5<br />
            Service Fee: $1.75
        </font>
        </p>
        <p>
        <font size = "5.5">
            <strong>DriveParty</strong><br />
        </font>
        <font size = "3.5">
            Seats up to eight<br />
            Base Fare: $2.50<br />
            Per Min: $0.30<br />
            Per Mile: $1.80<br />
            Cancellation Fee: $10<br />
            Service Fee: $1.75
        </font>
        </p>
    </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>

