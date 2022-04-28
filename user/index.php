<?php include('includes/db_connect.php') ;
include('includes/header.php');
include('includes/functionProcessor.php');
?>
<div class="main-banner digital-agency-banner">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row h-100 align-items-center">
     <p style="font-size:18px; color:#fff"class="wow fadeInUp">Connect with local businesses
        pretty much for anything
        in Nigeria</p>
          <div class="col-lg-12 col-md-12">
            <div class="hero-content">         
          <!--  <h1 class="wow fadeInUp">We are here for you</h1> -->  
            </div>
          </div>
          <div class="col-lg-6 col-md-12"> </div>
        </div>
        <div class="row h-100 align-items-center">
          <div class="col-lg-12 col-md-12">
            <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
              <form action="" method="POST">
                <div class="row">
                  <div class="col-lg-4 d-flex align-items-center form-group">
                    <input type="text" name="name" placeholder="What are you searching for?" class="form-control border-0 shadow-0">
                  </div>
                  <div class="col-lg-3 d-flex align-items-center form-group">
                    <div class="input-label-absolute input-label-absolute-right w-100">
                      <label for="location" class="label-absolute"><i class="fa fa-crosshairs"></i><span class="sr-only"></span></label>
                      <input type="text" name="location" placeholder="Location" id="location" class="form-control border-0 shadow-0" autocomplete="off">
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <button type="submit" name= "search" class="btn btn-primary btn-block rounded-xl h-100">Search </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$chk = topRated();
$mm = mysqli_fetch_assoc($chk);
var_dump($mm);

?>
<?php include('includes/footer.php') ?>

