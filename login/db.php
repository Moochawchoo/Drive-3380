<?php
/* Database connection settings */
$host = 'localhost';
$user = 'drivedb';
$pass = 'whatpassword';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
