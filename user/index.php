<?php 
include('includes/db_connect.php') ;
include('includes/header.php');
include('includes/functionProcessor.php');

error_reporting(E_ALL);
ini_set('display_errors',0);
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
                    <button type="submit" name="search" class="btn btn-primary btn-block rounded-xl h-100">Search </button>
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
    function SearchBusiness(){  
      global $con;  
          $name = $_POST['name'];
          $location = $_POST['location'];
          $sql = "SELECT * FROM business WHERE( `name` LIKE('$name%') ||   `description` LIKE('$name%') &&  `city` LIKE('$location%'))";
          $chk = mysqli_query($con, $sql);
          return $chk;
  }
    if($_POST['name']){
      ?>
      <section class="Campaigns pt80 pb40">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <h1 class="paddtop1 font-weight lspace-sm">Search Results</h1>
      </div>
    </div>
      <?php
      $results = SearchBusiness();
while($result = mysqli_fetch_assoc($results)){ ?>
<div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="ListriBox">
          <figure> <a href="single_page.php?busid=<?php echo urlencode($result['business_id']) ;?>" class="wishlist_bt"></a> 
          <a href="single_page.php?busid=<?php echo urlencode($res['business_id']) ;?>">
          <img src="<?php echo $result['images'] ;?>" class="img-fluid" alt="" >
          
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="ListriBoxmain">
            <h3><a href="single_page.php?busid=<?php echo urlencode($result['business_id']) ;?>"><?php echo $result['name']; ?></a></h3>
            <p><?php echo substr($result['description'],0,50); ?></p>
            <a class="address" href="#"><?php echo $result['address']; ?></a> </div>
          <ul>
            <li><span class="Ropen">
              <?php if($result['status'] == 1)
            {echo " Active" ; } 
            else{echo " Inactive" ; } 
            ?></span></li>
            <li>
              <?php 

              $add = 0;
              $id = $result['business_id'];
              $req = "SELECT * FROM review WHERE business_id = $id";
              $rev = mysqli_query($con, $req);
              if(!$rev){ echo "failed" .mysqli_connect_error() ;}
              while ($rol = mysqli_fetch_assoc($rev)){
              
                $add += $rol ['rated'] ;
              };
              ?>
              <div class="R_retings"><span>Rated<em><?php echo $add ." Reviews"; ?></em></span><strong><?php echo $add; ?></strong></div>
            </li>
          </ul>
        </div>
      </div>

    </div>

    <?php
   } }else{ ?>
<section class="Campaigns pt80 pb40">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <h1 class="paddtop1 font-weight lspace-sm">Most Recents</h1>
      </div>
    </div>
      <?php 
$chk = mostRecent();
while($res = mysqli_fetch_assoc($chk)){ ?>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="ListriBox">
          <figure> <a href="single_page.php?busid=<?php echo urlencode($res['business_id']) ;?>" class="wishlist_bt"></a> 
          <a href="single_page.php?busid=<?php echo urlencode($res['business_id']) ;?>">
          <img src="<?php echo $res['images'] ;?>" class="img-fluid" alt="" >
          
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="ListriBoxmain">
            <h3><a href="single_page.php?busid=<?php echo urlencode($res['business_id']) ;?>"><?php echo $res['name']; ?></a></h3>
            <p><?php echo substr($res['description'],0,50); ?></p>
            <a class="address" href="#"><?php echo $res['address']; ?></a> </div>
          <ul>
            <li><span class="Ropen">
              <?php if($res['status'] == 1)
            {echo " Active" ; } 
            else{echo " Inactive" ; } 
            ?></span></li>
            <li>
              <?php 

              $add = 0;
              $id = $res['business_id'];
              $req = "SELECT * FROM review WHERE business_id = $id";
              $rev = mysqli_query($con, $req);
              if(!$rev){ echo "failed" .mysqli_connect_error() ;}
              while ($rol = mysqli_fetch_assoc($rev)){
              
                $add += $rol ['rated'] ;
              };
              ?>
              <div class="R_retings"><span>Rated<em><?php echo $add ." Reviews"; ?></em></span><strong><?php echo $add; ?></strong></div>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <?php }?>
  </div>
</section>

<?php } ?>
    
<?php include('includes/footer.php') ?>

