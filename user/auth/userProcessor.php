<?php
session_start();
include("../includes/db_connect.php");
$fname = $_POST['fname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$Reglog = $_POST['Reglog'];  

function Regfunc($fname,$username, $pass){
global $con;
$pass = base64_encode($pass);
$sql = "INSERT INTO guest VALUES(NULL,'$fname', '$username', '$pass', NULL, NULL)";
$check = mysqli_query($con, $sql);
if($check){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $pass;
    Header("location:../index.php");
}
}

function logfunc($username, $pass){
    global $con;
    $sql = "SELECT * FROM guest WHERE username ='$username' LIMIT 1";
    $checks = mysqli_query($con, $sql);
    if($checks){
        $user = mysqli_fetch_assoc($checks);
        $pass = base64_decode($user['password']);
        if($pass == $password){
            $_SESSION['username'] = $username;
            $_SESSION['password '] = $pass;
            Header("location:../index.php");
        }else{
            $_SESSION['error'] = "Username/Password is Incorrect";
            Header("location:login.php");
        }
    }else{
        $_SESSION['error'] = "Username/Password is Incorrect";
        Header("location:login.php");
    }
    }
    if($Reglog == "login"){
        logfunc($username, $pass);
        
    }
  
    if($Reglog == "register"){
        Regfunc($fname, $username, $pass);

    }
    


    





?>