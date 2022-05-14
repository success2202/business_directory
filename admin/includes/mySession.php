<?php
if(!isset($_SESSION['user_id'])){
    header("location:login.php");
}
if(!isset($_SESSION['biz_id'])){
    header("location:login.php");
}

?>