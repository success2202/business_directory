<?php include "includes/login_nav.php"; 
      include "includes/db_connect.php";

error_reporting(E_ALL);
ini_set('display_errors','on');

//db connection test

$sql = "SELECT * FROM users";
$con = mysqli_query($con, $sql);
if(!$con){

  echo "connection was not successful" . mysqli_connect_error();
}
?>
<!-- End Main Menu Area -->

<div class="container-fluid px-3 register">
  <div class="row min-vh-100">
    <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
      <div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
        <div class="mb-4">
          <h2>Register as Business Onwer</h2>
          <p style="color:red" class="text-muted">
            Complete your registration to post your business
          </p>
        </div>
        <form class="form-validate" method="POST" action="includes/auth_processor.php">
          <div class="form-group">

            <input name="fName" id="fName" type="text" placeholder="First name" autocomplete="off" required="" data-msg="Please enter your email" class="form-control">
          </div>
          <div class="form-group">

            <input name="lName" id="lName" type="text" placeholder="Last name" autocomplete="off" required="" data-msg="Please enter your email" class="form-control">
          </div>
           <div class="form-group">
          <input name="email" id="email" type="text" placeholder="Enter Email" autocomplete="off" required="" data-msg="Please enter your email" class="form-control">
        </div>
         <div class="form-group">
          <input name="phone" id="phone" type="text" placeholder="080 000 000" autocomplete="off" required="" data-msg="" class="form-control">
        </div>
         <div class="form-group">
            <input name="city" id="city" type="text" placeholder="Your Location" autocomplete="off" required="" data-msg="City" class="form-control">
          </div>
          <div class="form-group">
            <input name="username" id="username" placeholder="username" type="text" required="" data-msg="" class="form-control">
          </div>
          <div class="form-group mb-4">
            <input name="pass" id="pass" placeholder="Password" type="password" required="" data-msg="Please enter your password" class="form-control">
          </div>
          <button type="submit" name="submit_register" class="btn btn-lg btn-block btn-primary">Sign up</button>
          <hr data-content="OR" class="my-3 hr-text letter-spacing-2">
        <p class="text-center"><small class="text-muted text-center">Already have an account? <a href="login.php">Sign In</a></small></p>
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
include "includes/footer2.php";
  ?>