<?php
//profile page
session_start();

if(!isset($_SESSION["loggedin"])||$_SESSION["loggedin"]!==true){
    header("location: login");
    exit;
}

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
<head>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
<style>
    .topnav{
        background-color: #333;
        overflow: hidden;
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
    }
    .topnav a{
        float: left;
        color: #F7F7F7;
        text-align: center;
        padding: 10px 16px;
        text-decoration: none;
        font-size: 15px;
        font-weight: 900;
    }
    .topnav a:hover{
        background-color: #E2B448;
        color: black;
    }
    .topnav a.active{
        background-color: #E2B448;
        color: white;
    }
    html, body{
        background-color: #606060;
        font-family: 'Roboto';
        font-size: 22px;
    }
</style>
<div class="topnav">
    <a href="../../splash" style="padding-right:8px;padding-left:8px;padding-top:2px;padding-bottom:0px"><img src="assets/driveLOGOalt.svg" alt="Drive" style="padding-top:0px;padding-bottom:0px;width:32px;height:32px;"></a>
    <a href="../../drive">Drive</a>
    <a href="logout" style="float: right;">Logout</a>
    <a href="../../about">About us</a>
</div>
    <h1>
        <p style="color:#E1E1E1; text-align: center; ;">Welcome to Drive <?php echo htmlspecialchars($_SESSION["first_name"]); ?></p>
    </h1>
</head>
</html>
