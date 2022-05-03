<?php 
include("db_connect.php");
//get top rated business

function topRated(){
    global $con;
$sql = "SELECT * FROM business WHERE status = 1";
$chk = mysqli_query($con, $sql);
return $chk;
}



?>