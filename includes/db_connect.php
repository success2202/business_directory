<?php 

$con = mysqli_connect("localhost", "root", "", "businessdb");

if(!$con){

  echo "connection failed". mysqli_connect_error();
}
?>