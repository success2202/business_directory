<?php 
include("db_connect.php");
//get top rated business

function MostRecent(){
    global $con;
$sql = "SELECT * FROM business WHERE status = 1";
$chk = mysqli_query($con, $sql);
return $chk;
}


// function SearchBusiness(){  
//     global $con;  
//         $name = $_POST['name'];
//         $location = $_POST['location'];
//         $sql = "SELECT * FROM business WHERE( `name` LIKE('$name%') ||   `description` LIKE('$name%') &&  `city` LIKE('$location%'))";
//         $chk = mysqli_query($con, $sql);
//         return $chk;
// }
// if(isset($_POST['name'])){
//     session_start();
//      SearchBusiness();
//    $_SESSION['search'] = true;
//     header("Location:../index.php");
// }

?>