<?php
include("session_handler.php");
include('mySession.php');
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="css/style.css" type="text/css" rel="stylesheet" />
<!-- Favicon -->
<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<title>Business Directory</title>
</head>
<body>
<!-- Start Main Menu Area -->
<div class="main-header-area header-sticky">
  <div class="container">
    <div class="getfund-nav-container breakpoint-off"> 
      <!-- getfund Menu -->
      <nav class="getfund-navbar justify-content-between" id="listingNav"> 
        <!-- Logo --> 
        <a class="nav-brand" href="index.php"><img src="images/logo-header2.png" alt="logo"></a> 
        <!-- Navbar Toggler -->
        <div class="getfund-navbar-toggler"> <span class="navbarToggler"><span></span><span></span><span></span></span> </div>
        <!-- Menu -->
        <div class="getfund-menu"> 
          <!-- close btn -->
          <div class="getfundcloseIcon">
            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
          </div>
          <!-- Nav Start -->
          <div class="getfundnav">
            <!-- user profile picture-->
            <?php if(isset($_SESSION['user_id'])) {?>  
              <div style="border-radius: 20px; width: 90px; height: 90px; background: #fff;  margin-left: 20px; margin-bottom: 10px; padding:10px;">
              <img src="images/logo-header2.png" height="30px" width="30">
            </div>
            <?php }?>
            <ul id="responsive">
                <?php if(isset($_SESSION['user_id'])) {?>
              <li><a class="current sf-with-ul" href="index.php">Home</a></li>
              <li><a class="sf-with-ul" href="profile.php?user_id=<?php echo $_SESSION['user_id']; ?>">Profile</a>
              </li> 
             
              <li><a class="sf-with-ul" href="my_business.php?user_id=<?php echo $_SESSION['user_id']; ?>">My Business</a></li>
              <li><a class="sf-with-ul" href="add_business.php?user_id=<?php echo $_SESSION['user_id']; ?>">Add Business</a></li>
              <li><a class="sf-with-ul" href="social.php?user_id=<?php echo $_SESSION['user_id']; ?>">Add Social/Work Hours</a></li>    
              <li><a class="sf-with-ul" href="../user/logout.php">Logout</a></li>
              <?php }else{ ?>
                <li><a class="current sf-with-ul" href="login.php">Login</a></li>
              <li><a class="sf-with-ul" href="register.php">Register</a>
              </li>
              <?php }?>
            </ul>
          </div>
          <div style="border-radius: 20px; width: 30px; height: 30px;  margin-left: 20px; position: absolute; bottom: 20px; padding:1px;">
             <a href="contact-us.php"> <img src="images/support3.png" height="30px" width="30"></a>
          <!-- Nav End --> 
        </div>
      </nav>
    </div>
  </div>
</div>
              </body>
              </html>