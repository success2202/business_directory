<?php
include("session_handler.php");

function redirect($url){
    Header("location:$url");
}
?>