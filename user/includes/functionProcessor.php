<?php 
include("db_connect.php");
//get top rated business

function topRated(){
    global $con;
$sql = "SELECT * FROM review WHERE rated >= 3";
$chk = mysqli_query($con, $sql);
return $chk;
}



?>