<?php

if(isset($_POST["login"])){
    $uName = $_POST["logName"];
    $pwd = $_POST["logPwd"];


 require_once 'dbconnect.php';
 require_once 'function.php';

 if(emptyLogin($uName, $pwd) !== false ){
    header("location: login.php?error=invalidlogin");
    exit();

}

login($connect, $uName, $pwd);

}
?>