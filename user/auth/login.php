<?php include("header.php"); 
      include("../includes/db_connect.php");
error_reporting(E_ALL);
ini_set('display_errors','on');
?>
<!-- End Main Menu Area -->

<div class="container-fluid px-3 register">
  <div class="row min-vh-100">
    <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
      <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
        <div class="mb-4">
          <h2>Login</h2>
          <p class="text-muted">
          </p>
        </div>
        <form class="form-validate" method="POST" action="userProcessor.php">
          <input type="hidden" name="Reglog" value="login">
           <div class="form-group">
          <input name="username" id="username" type="text" placeholder="Enter Username" autocomplete="off" required="" data-msg="Please enter your email" class="form-control">
        </div>
          <div class="form-group mb-4">
            <input name="pass" id="pass" placeholder="Password" type="password" required="" data-msg="Please enter your password" class="form-control">
          </div>
          <button type="submit" name="submit-guest" class="btn btn-lg btn-block btn-primary">Sign in</button>
          <?php if(isset($_SESSION['error'])) { ?><span class=" btn-outline-danger"> <?=$_SESSION['error'] ?> <?php }
          session_destroy();?></span>
        
          <hr data-content="OR" class="my-3 hr-text letter-spacing-2">
        <p class="text-center"><small class="text-muted text-center">Do not have an account? <a href="register.php">Sign Up</a></small></p>
          <hr class="my-4">
      </form>
</div>
    </div>
    <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block"> 
      <!-- Image-->
      <div style="background-image: url(images/register.jpg);" class="bg-cover h-100 mr-n3"></div>
    </div>
  </div>
</div>  
  <?php 
include("../includes/footer.php");
  ?>