<?php 
//DATABASE CONNECTION

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'signup_form2';

$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if(!$conn){
    die(mysqli_error($conn));
}


?>