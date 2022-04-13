<?php 

$con = mysqli_connect("localhost", "root", "", "business_directory");
if(!$con){
  echo "connection failed". mysqli_connect_error();
}


?>