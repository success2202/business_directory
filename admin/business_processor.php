<?php
include('includes/db_connect.php');

$cat = $_POST['category'];
$name = $_POST['bizName'];
$baddress = $_POST['bizAddress'];
$phoneN= $_POST['Phone'];
$cities = $_POST['city'];
$addB = $_POST['addBusiness'];
$userid = $_POST['user_id'];
$des = $_POST['Description'];

$file = $_FILES["image"]["name"];
$dir = "../uploads/".$file;
$dd = move_uploaded_file($_FILES["image"]["tmp_name"],$dir);
           
function addbiz( $userid, $cat, $name, $baddress, $phoneN, $cities, $file,  $des ){ 
    global $con;
    $sql = "INSERT INTO business VALUES(NULL, $userid, $cat,  '$name', '$baddress', $phoneN, '$cities', '$file', '$des',  1, now())"; 
    $ck = mysqli_query($con, $sql);
    if($ck){
        header("location:social.php");
    }else{
        echo "invalid information";
    }

       //var_dump($ck);
    //die();
}



if(isset($_POST['addBusiness'])){
         
    addbiz($userid, $cat, $name, $baddress, $phoneN, $cities, $file, $des );
}



?>