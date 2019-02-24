<?php
//register
require_once "dbconnect";

$_SESSION['email'] = $_POST['email'];
$_SESSION['first_name'] = $_POST['firstname'];
$_SESSION['last_name'] = $_POST['lastname'];

$first_name = $mysqli->escape_string($_POST['firstname']);
$last_name = $mysqli->escape_string($_POST['lastname']);
$email = $mysqli->escape_string($_POST['email']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));
$hash = $mysqli->escape_string(md5(rand(0,1000)));
$role = $mysqli->escape_string();

$result=$mysqli->query("SELECT * FROM users WHERE email='$email'") or die($mysqli->error());
if($result->num_rows>0){
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error");
}
else{

}

?>