<?php
$host="localhost";
$user="root";
$password="Salmalimbu1";
$database="mac272";
$connect=  mysqli_connect($host, $user, $password, $database); 
if(mysqli_connect_errno()){
    die("Connection Failed". mysqli_connect_error());
    
}
?>