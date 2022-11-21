<?php

function emptySignup($name,$email,$username,$password,$passwordrpt){
    $result = false;
    if(empty($name) || empty($name) || empty($name) || empty($name) || empty($name) ){
        $result = true;
    }else{
        $result;
    }
    return $result;

}

function invalidUser($username){
    $result = false;
    if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
        $result = true;
    }else{
        $result;
    }
    return $result;
}
function invalidEmail($email){
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }else{
        $result ;
    }
    return $result;
}


function pwdMatch($pwd, $passwordrpt){
    $result = false;
    if ($pwd !== $passwordrpt) {
        $result = true;
    }else{
        $result;
    }
    return $result;
}

function checkUser($connect, $username, $email){
    $sql = "SELECT * FROM project WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: signup.php?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
          return $row;
    }else{
        $result = false;
        return false;
    }
 mysqli_stmt_close($stmt);
}
function createUser($connect,$name,$username,$pwd,$email){
    $sql = "INSERT INTO project (name, Username, Password,email)
    VALUES ('$name', '$username', '$pwd','$email')";
    
    if (mysqli_query($connect, $sql)) {
        header("location: ../Backend/login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    
}
function emptyLogin($uName, $pwd){
    $result = false;
    if(empty($uName) || empty($pwd) ){
        $result = true;
    }else{
        $result;
    }
    return $result;

}
function login($connect, $uName, $pwd){
    $checkUser =  checkUser($connect, $uName, $uName);
    if($checkUser === false){
        header("location: login.php?error=wronglogin");
        exit();
    }

    $dbPwd = $checkUser["password"];
    
    if($pwd === $dbPwd){
      session_start();
      $_SESSION["userid"] = $checkUser["id"];
      $_SESSION["name"] = $checkUser["name"];
      $_SESSION["uname"] = $checkUser["username"];
      $_SESSION["email"] = $checkUser["email"];
    
      header("location: ../Frontend/start.php");
      
    }else{
        header("location: login.php?error=pwdMatch");
        exit();
    }
}

?>