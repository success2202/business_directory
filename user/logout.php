<?php 
include('includes/func.php');
session_destroy();
return redirect('auth/login.php');
?>