<?php
/* Database connection settings */
$host = 'localhost';
$user = 'drivedb';
$pass = 'whatpassword';
$db = 'accountsTest';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>