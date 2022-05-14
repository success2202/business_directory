<?php
include('includes/db_connect.php');
$bizid = $_POST['Biz_id'];
$email = $_POST['bizEmail'];
$web = $_POST['bizWebsite'];
$link = $_POST['linkedin'];
$facebook = $_POST['facebook'];
$twiter= $_POST['twitter'];
$monday = $_POST['monday'];
$tuesday = $_POST['tuesday'];
$wednesday = $_POST['wednesday'];
$thursday = $_POST['thuresday'];
$friday = $_POST['friday'];
$saturday = $_POST['saturday'];
$sunday = $_POST['sunday'];
$week = $_POST['weeks'];


    function socialTime($bizid, $web, $facebook, $twiter, $email, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday){ 
        global $con;
    $sql = "INSERT INTO social VALUES(NULL, $bizid, '$web', '$facebook', '$twiter', '$email')";
    $cks = mysqli_query($con, $sql);
    var_dump($cks);
    die();
    if($cks){
        $sqll = "INSERT INTO opening_hours VALUES(NULL, $bizid, '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday', '$sunday')";
    $ckk = mysqli_query($con, $sqll);
    if($ckk){
        header("location:./index.php");
    }
    
    }else{
    
        echo "<script type='text/javascript'> alert('connection failed')</script>";
    
    }
}
   
    if(isset($_POST['weeks'])){
        socialTime($bizid, $web, $facebook, $twiter, $email, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday, $sunday);

    }
?>