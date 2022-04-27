<?php
session_start();
include("../includes/db_connect.php");
$fname = $_POST['fname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$Reglog = $_POST['Reglog'];  


function checkUser($username, $fname){
    global $con;
    $user = "SELECT * FROM guest where username = '$username' || fname = '$Fname' LIMIT 1";
    $ucheck = mysqli_query($con, $user);
    $uchk = mysqli_num_rows($ucheck);
    if ($ucheck){
        $_SESSION ['username'] = "this username has been taken";
    }
    return $uchk;
}


function Regfunc($fname,$username, $pass){
    $getU = checkUser($username, $fname);
    if ($getU){
        return header("location:./register.php");
        echo 'the username is taken';
    }
global $con;
$pass = base64_encode($pass);
$sql = "INSERT INTO guest VALUES(NULL,'$fname', '$username', '$pass', NULL, NULL)";
$check = mysqli_query($con, $sql);
if($check){
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $pass;
    Header("location:./login.php");
}
}
 
function logfunc($username, $pass){
    global $con;
    $sql = "SELECT * FROM guest WHERE username ='$username' LIMIT 1";
    $checks = mysqli_query($con, $sql);
    if($checks){
        $users = mysqli_fetch_assoc($checks);
        $pass = base64_decode($users['pass']);
        if($password == $pass){
            $_SESSION['username'] = $username;
            $_SESSION['pass'] = $pass;
            Header("location:../index.php");
        }else{
            $_SESSION['error'] = "Username/Password is Incorrect";
            Header("location:./login.php");
        }
    }else{
        $_SESSION['error'] = "Username/Password is Incorrect";
        Header("location:./login.php");
    }
    }
    if($Reglog == "login"){
        logfunc($username, $pass);
        
    }
  
    if($Reglog == "register"){
        Regfunc($fname, $username, $pass);

    }
    


    





?>