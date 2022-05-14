
<?php include "includes/header.php";
include "includes/db_connect.php";  ?>
<!-- End Main Menu Area -->

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
                   <div class="col-lg-3 d-flex align-items-center form-group no-divider">
                    <div class=" bootstrap-select">
                      <select title="Categories" data-style="btn-form-control" class="selectpicker" tabindex="-98">
                        <option class="bs-title-option" value="">Restaurants</option>
                        <option value="small">Restaurants</option>
                        <option value="medium">Hotels</option>
                        <option value="large">Cafes</option>
                        <option value="x-large">Garages</option>
                      </select>
                      <div class="dropdown-menu">
                        <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                          <ul class="dropdown-menu inner show">
                          </ul>
                        </div>
                      </div>
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
<?php  if(isset($_POST['search'])){
  //all post here is for search
      ?>
<section class="Campaigns pt80 pb40">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <h3 class="paddtop1 lspace-sm" style="font-style:italic">Search Results</h3>
        <p> Showing results of <span style="color:red"><?php echo $_POST['name'];?> </span> in <?php echo $_POST['location'];?></p>
        <hr style="padding:0px; color:$fff; width:50px">
        <input type="password" name="focus"  style= "width:1px; height:1px; background-color:#f8f9fa; border:0px solid #000" autofocus="autofuse">
      </div>
    </div>
    <?php 
$sql = "SELECT * FROM business WHERE (`name` Like('$_POST[name]%') || `description` Like('$_POST[name]%')) && `city` Like('$_POST[location]%')   ";
$chk = mysqli_query($con, $sql);
if(!$chk){
  echo "connection failed" .mysqli_connect_error();
}

while($res = mysqli_fetch_assoc($chk)){ 
    
    ?>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
        <div class="ListriBox">
          <figure> <a href="single_page.php?busid=<?php echo urlencode($res['business_id']) ;?>" class="wishlist_bt"></a> <a href="single_page.php?busid=<?php echo urlencode($res['business_id']) ;?>"><img src="<?php echo $res['images'] ;?>" class="img-fluid" alt="" >
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="ListriBoxmain">
            <h3><a href="single_page.php?busid=<?php echo urlencode($res['business_id']) ;?>"><?php echo $res['name']; ?></a></h3>
            <p><?php echo $res['description']; ?></p>
            <a class="address" href="#"><?php echo $res['address']; ?></a> </div>
          <ul>
            <li><span class="Ropen">
              <?php if($res['status'] == 1)
            {echo " Active" ; } 
            else{echo " Close" ; } 
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
              <div class="R_retings"><span>Rated<em><?php echo $add ." Reviews"; ?></em></span><strong><?php echo $add/5; ?></strong></div>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <?php }?>
    <?php if(empty($add )){
      echo "<center><p style=\"font-size:20px\">no results found for " .$_POST['name'] ."</p></center>";
    }
      ?>
  </div>
</section>
            <?php }else{?>
  <section class="Campaigns pt80 pb40">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <h1 class="paddtop1 font-weight lspace-sm">Most Recents</h1>
      </div>
    </div>
    <?php 
$sql = "SELECT * FROM business ORDER BY Date_created DESC";
$chk = mysqli_query($con, $sql);
if(!$chk){
  echo "connection failed" .mysqli_connect_error();
}
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
            <p style="text-align: justify;"><?php echo substr($res['description'],0,200); ?></p>
            <a class="address" href="#"><?php echo $res['address']; ?></a> </div>
          <ul>
            <li><span class="Ropen">
              <?php if($res['status'] == 1)
            {echo " Active" ; } 
            else{echo " Close" ; } 
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
              <div class="R_retings"><span>Rated<em><?php echo $add ." Reviews"; ?></em></span><strong><?php echo $add/5; ?></strong></div>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <?php }?>
  </div>
</section>
            <?php }?>

<?php include "includes/footer.php"; ?>


