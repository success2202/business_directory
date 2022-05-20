<?php 
include("db_connect.php");
//get top rated business

function MostRecent(){
    global $con;
$sql = "SELECT * FROM business WHE RE status = 1";
$chk = mysqli_query($con, $sql);
return $chk;
}



if(isset($_POST['name'])){
    header("Location:../searchResults.php");
}

?>