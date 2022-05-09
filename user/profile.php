<?php include('includes/db_connect.php') ;
include('includes/header.php');
include('includes/functionProcessor.php'); 


error_reporting(E_ALL);
ini_set('display_errors','on');
//db connection test
$username = $_SESSION['username'];

$sql = "SELECT * FROM guest WHERE username = '$username'";
$con = mysqli_query($con, $sql);
if(!$con){ echo "connection was not successful" . mysqli_connect_error();}
while($rest = mysqli_fetch_assoc($con)){

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
						<p>Name: <?php echo $rest['fname']; ?></p>
						<p>Email: <?php echo $rest['username']; ?></p>
						<p>Date joined: <span> <?php $kk = $rest['Date_created']; 
						$brk = explode(" ", $kk);
						echo $brk[0];
						?></span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>
<?php include "includes/footer.php"; ?>