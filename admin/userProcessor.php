<?php
include("includes/db_connect.php");
session_start();
$email = $_POST['username'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$city = $_POST['city'];
$nation = $_POST['nationality'];
$Reglog = $_POST['Reglog'];  


function checkUser($email, $fname){
    global $con;
    $user = "SELECT * FROM users where email = '$email' LIMIT 1";
    $ucheck = mysqli_query($con, $user);
    $uchk = mysqli_num_rows($ucheck);
    if ($ucheck){
        $_SESSION ['username'] = "this username has been taken";
    }
    return $uchk;
}


function Regfunc($email, $pass, $phone, $fname,$lname, $city, $nation){
     $getU = checkUser($username, $fname);
     if ($getU){
         return header("location:./register.php");
         echo 'the username is taken';
    }
 global $con;
 $pass = base64_encode($pass);
 $sql = "INSERT INTO users VALUES(NULL, '$email', '$pass', '$phone', '$fname', '$lname', '$city', '$nation', now(), NULL)";
$check = mysqli_query($con, $sql);
 if($check){
     $_SESSION['username'] = $email;
     $_SESSION['password'] = $pass;
    Header("location:./login.php");
 }
 }
 
function logfun($email, $pass){
    global $con;
    $sql = "SELECT * FROM users WHERE email ='$email' LIMIT 1";
    $checks = mysqli_query($con, $sql);
    //var_dump($checks);
    //die();
    if($checks){
        $users = mysqli_fetch_assoc($checks);
        $password = base64_decode($users['pass']);
        if($password == $pass){
            $_SESSION['user_id'] = $users['user_id'];
            $_SESSION['pass'] = $pass;
            Header("location:./index.php");
        }else{
            $_SESSION['error'] = "Username/Password is Incorrect";
            Header("location:./login.php");
        }
    }else{
        $_SESSION['error'] = "Username/Password is Incorrect";
        Header("location:./login.php");
    }
     }
    
    if($Reglog == "register"){  
        Regfunc($email, $pass, $phone, $fname,$lname, $city, $nation);}
    

        if($Reglog == "log"){
            logfun($email, $pass); }
    

?>