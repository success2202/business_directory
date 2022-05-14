<?php include("auth/header.php"); 
      include("includes/db_connect.php");

error_reporting(E_ALL);
ini_set('display_errors','on');
?>
<!-- End Main Menu Area -->
<div class="container-fluid px-3 register">
  <div class="row min-vh-100">
    <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
      <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
        <div class="mb-4">
          <h2>Sign up</h2>
          <p class="text-muted">
          </p>
        </div>
        <form class="form-validate" method="POST" action="userProcessor.php">
          <div class="form-group">
            <input name="fname" id="fName" type="text" placeholder="Full name" autocomplete="off" required="" data-msg="l" class="form-control">
          </div>
          <input type="hidden" name="Reglog" value="register">
           <div class="form-group">
          <input name="username" id="username" type="email" placeholder="Enter Username" autocomplete="off" required="" data-msg="Please enter your email" class="form-control">
        </div>
          <div class="form-group mb-4">
            <input name="pass" id="pass" placeholder="Password" type="password" required="" data-msg="Please enter your password" class="form-control">
          </div>

          <div class="form-group mb-4">
            <input name="phone" id="phone" placeholder="phone number" type="number" required="" data-msg="Please enter your phone number" class="form-control">
          </div>

          <div class="form-group mb-4">
            <input name="lname" id="lname" placeholder="lastname" type="text" required="" data-msg="Please enter your last name" class="form-control">
          </div>


          <div class="form-group mb-4">
            <input name="city" id="city" placeholder="city" type="text" required="" data-msg="Please enter your city" class="form-control">
          </div>


          <div class="form-group mb-4">
            <input name="nationality" id="nation" placeholder="nationality" type="text" required="" data-msg="Please enter your country" class="form-control">
          </div>

          <button type="submit" name="submit-guest" class="btn btn-lg btn-block btn-primary">Sign up</button>
          <?php
        if(isset($_SESSION['user_id'])) echo "<span style=\" color:red \">" .$_SESSION['user_id'] ."</span>";  session_destroy()?>
          <hr data-content="OR" class="my-3 hr-text letter-spacing-2">
        <p class="text-center"><small class="text-muted text-center">Already have an account? <a href="login.php">Sign In</a></small></p>
          
        <p class="text-center"><small class="text-muted text-center">admin login <a href="register.php">sign up</a></small></p>
        <hr class="my-4">
        </form>
        </div>
    </div>
    <div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block"> 
      <!-- Image-->
      <div style="background-image: url(images/register.jpg)"; class="bg-cover h-100 mr-n3"></div>
    </div>
  </div>
</div>  
  <?php 
include("includes/footer.php");
  ?>