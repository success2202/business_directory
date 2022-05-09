<?php include "includes/nav.php"; 
      include "includes/db_connect.php";
      include "includes/func.inc.php";

error_reporting(E_STRICT);
ini_set('display_errors','on');

//db connection test
?>
<!-- End Main Menu Area -->

<section style=" padding-top: 30px" class="clearfix bg-dark profileSection pt80 pb80 admin-page">
	<div class="container">
   <center><h3>Your Profile</h3></center> 
		<div class="row">
        <form class="form-validate"  method="POST" action="">
			<div class="col-md-4 col-sm-5 col-xs-12">
				<div class="dashboardBoxBg mb30">
                
					<div class="profileImage">
						<img src="images/breadcromb_bg.png" alt="Image User" class="img-circle">
						<div class="file-upload profileImageUpload">
						
						</div>
					</div>
          <?php $details = getAdminDetails();  
            $chki = mysqli_fetch_assoc($details);
          ?>

					<div class="profileUserInfo bt profileName">
                    <div class="form-group">

           First Name: <input name="fname" id="fname" type="text" required="" placeholder="<?php echo $chki['fname'];?>" autocomplete="off"  data-msg="Please enter your email" class="form-control">
          </div>
                 <div class="form-group">

           Last Name: <input name="lname" id="fname" type="text" required="" placeholder="<?php echo $chki['lname'];?>" autocomplete="off"  data-msg="Please enter your email" class="form-control">
          </div>
                 <div class="form-group">

           Email Address: <input name="email" id="email" type="text" required="" placeholder="<?php echo $chki['email'] ;?>" autocomplete="off" data-msg="Please enter your email" class="form-control">
          </div>
            <div class="form-group">

           Phone Number: <input name="phone" id="phone" type="number" required="" placeholder="<?php echo $chki['phone'] ;?>" autocomplete="off" data-msg="Please enter your email" class="form-control">
          </div>
            <div class="form-group">

           City: <input name="city" id="city" type="text" required="" placeholder="<?php echo $chki['city'] ;?>" autocomplete="off"  data-msg="Please enter your email" class="form-control">
          </div>
           <div class="form-group">

           Nationality: <input name="country" id="country" required="" type="text" placeholder="<?php echo $chki['nationality'];?>" autocomplete="off"  data-msg="Please enter your email" class="form-control">
          </div>
		 	<center><button  style="background:#2837f3;color:#fff;  padding:10px" type="submit" name="submit" class="">Update Profile</button>
			</center>		</div>
				</div>
			</div>
            </form>
		</div>
	</div>

    <?php
    if(isset($_POST['submit'])){
        $user_id = $_GET['profileid'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        $sql = "UPDATE users SET email='$email', phone=$phone, fname='$fname', lname='$lname', city='$city', nationality='$country'  WHERE user_id = $user_id";
        $chk = mysqli_query($con, $sql); 
        if(mysqli_affected_rows($con) >= 1)
        {
            
         
           ?> 
                 <script type="text/javascript">
    window.location = "index.php";
</script>
           <?php   
        }else{
            ?> 
           
    
           <?php  
              echo mysqli_affected_rows($con);
        }
    }


    ?>
 </div>
</section>
<?php include "includes/footer2.php"; ?>