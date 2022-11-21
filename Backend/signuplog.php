<?php

    

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['uid'];
$pwd = $_POST['pwd'];
$passwordrpt = $_POST['pwdrep'];

require_once "dbconnect.php";
require_once "function.php";

if(emptySignup($name,$email,$username,$password,$passwordrpt) !== false ){
    header("location: signup.php?error=emptyInputs");
    exit();
}
if(invalidUser($username) !== false ){
    header("location: signup.php?error=invalidUsername");
    exit();
}
if(invalidEmail($email) !== false ){
    header("location: signup.php?error=invalidEmail");
    exit();
}

if(pwdMatch($pwd, $passwordrpt) !== false ){
    header("location: signup.php?error=incorrectPassword");
    exit();
}
if(checkUser($connect, $username, $email) !== false ){
    header("location: signup.php?error=usernameTaken");
    exit();
}

createUser($connect,$name,$username,$pwd,$email);

}else{
    header("location: singup.php");
    exit();
}
?>