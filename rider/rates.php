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
        <p>
            1. <b>DriveScout</b> (a low-cost service which seats up to two passengers)<br />
            2. <b>DriveSquad</b> (a low-cost service which seats up to four passengers)<br />
            3. <b>DriveParty</b> (a mid-cost service which seats up to eight passengers)
        </p>
        <h3>
            Drive Rates: our current rates for these services:
        </h3>
        <p>
            <strong>DriveScout</strong><br />
            Base Fare: $1.25<br />
            Per Minute: $0.15<br />
            Per Mile: $0.90<br />
            Cancellation Fee: $5<br />
            Service Fee: $1.75
        </p>
        <p>
            <strong>DriveSquad</strong><br />
            Base Fare: $2<br />
            Per Minute: $0.25<br />
            Per Mile: $1.35<br />
            Cancellation Fee: $5<br />
            Service Fee: $1.75
        </p>
        <p>
            <strong>DriveParty</strong><br />
            Base Fare: $2.50<br />
            Per Min: $0.30<br />
            Per Mile: $1.80<br />
            Cancellation Fee: $10<br />
            Service Fee: $1.75
        </p>
    </div>
    <div id="footer"><header style="color:#b3b3b3">Copyright &#169 2019 Drive</header></div>
</body>
</html>

