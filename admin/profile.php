<?php include('includes/db_connect.php') ;
include('includes/header.php');



error_reporting(E_ALL);
ini_set('display_errors','on');
//db connection test
$user = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE user_id = $user";
$chs = mysqli_query($con, $sql);

if(!$chs){ echo "connection was not successful" . mysqli_connect_error();}
while($rest = mysqli_fetch_assoc($chs)){

?>
<!-- End Main Menu Area -->

<section style=" padding-top: 30px" class="clearfix bg-dark profileSection pt80 pb80 admin-page">
	<div class="container">
   <center><h3><span style="border:1px solid #0055; padding: 2px">My Profile</span></h3></center> 
		<div class="row">
			<div class="col-md-4 col-sm-5 col-xs-12">
				<div class="dashboardBoxBg mb30">
					<div class="profileImage">
						<img src="images/breadcromb_bg.png" alt="Image User" class="img-circle">
						<div class="file-upload profileImageUpload">
						
						
						</div>
					</div>
					<div class="profileUserInfo bt profileName">
						<p>First Name: <?php echo $rest['fname']; ?></p>
						<p>Last Name: <?php echo $rest['lname']; ?></p>
						<p>Phone Number: <?php echo $rest['phone']; ?></p>
						<p>Email: <?php echo $rest['email']; ?></p>
						<p>City: <?php echo $rest['city']; ?></p>
						<p>Country: <?php echo $rest['nationality']; ?></p>
						<p>Date joined: <span> <?php $kk = $rest['date_registered']; 
						$brk = explode(" ", $kk);
						echo $brk[0];
						
						?></span></p>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>
<?php 
}?>
<?php include "includes/footer.php"; ?>