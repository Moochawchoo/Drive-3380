<?php
//logout
session_start();

$_SESSION=array();
session_destrouy();

header("location: ../../splash");
exit;
?>