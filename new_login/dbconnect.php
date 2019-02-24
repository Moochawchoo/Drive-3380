<?php
//database connection file

define('host','localhost');
define('user','drivedb');
define('pass','whatpassword');
define('name','accounts');

$mysqli=new mysqli(host,user,pass,name);

if($mysqli===false){
    die("ERROR: Could not connect to database. ".$mysqli->connect_error);
}
?>