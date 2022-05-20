<?php 
include "includes/header.php";
include "includes/db_connect.php";

error_reporting(E_ALL);
ini_set('dipslay_errors', '0');

$bus_id = $_GET['busid'];

$sql = "SELECT * FROM business WHERE business_id = $bus_id";
$chk = mysqli_query($con, $sql);
if(!$chk){
  echo "connection failed" .mysqli_connect_error();
}
$res = mysqli_fetch_assoc($chk);
?>
 <?php 

            
              $rel = "SELECT * FROM review WHERE business_id = $bus_id ORDER BY date_added DESC";
              $relv = mysqli_query($con, $rel);
              if(!$relv){ echo "failed" .mysqli_connect_error() ;}
               $roc = mysqli_fetch_assoc($relv);
              ?>
    <section class="pt-7 pb-5 d-flex align-items-end res-top-overlay" style="background-image: url( '<?php echo $res['images'] ;?>')">
  <div class="container overlay-content">
    <div class="d-flex justify-content-between align-items-start flex-column flex-lg-row align-items-lg-end">
      <div class="text-white mb-4 mb-lg-0">
        <h1 class="text-shadow verified"><?php echo $res['name'];?></h1>
        <p><i class="fa-map-marker-alt fas mr-2"></i> <?php echo $res['address'];?></p>
        <p class="mb-0 d-flex align-items-center">
          <?php 
                $mm = 0;
               $count =  $roc['rated'];
                while($mm <  $count ) {?>
                  <i class="fa fa-xs fa-star text-primary"></i>
                <?php  $mm ++; 
              } echo " &nbsp;";?> 

                 <?php 

              $add = 0;
              $req = "SELECT * FROM review WHERE business_id = $bus_id";
              $rev = mysqli_query($con, $req);
              if(!$rev){ echo "failed" .mysqli_connect_error() ;}
              while ($rol = mysqli_fetch_assoc($rev)){
                $add += $rol ['rated'] ;
              }
              ?>

          </i><?php echo $add ." Reviews"; ?></p>

      </div>
        
    </div>
  </div>
</section>
<section class="pt80 pb80 listingDetails">
  <div class="container">
    <div class="row">
      <div class="col-lg-8"> 
        <!-- About Listing-->
        <div class="text-block">
          <h3 class="mb-3">About</h3>
          <p class="text-muted"><?php echo $res['description'];?></p>
        </div>
        <div class="text-block"> 
          <!-- Listing Location-->
          <h5 class="mb-4">Address</h5>
      <a class="address" href="#"><?php echo $res['address']; ?></a>

        </div>
        <div class="text-block">
          <p class="subtitle text-sm text-primary">Top Review </p>
          <div class="media d-block d-sm-flex review">
            <div class="media-body">
              <h6 class="mt-2 mb-1">Name: <?php echo $roc['name'] ; ?></h6>
             <h6 class="mt-2 mb-1">Email: <?php echo $roc['email'] ; ?></h6>
              <div class="mb-2">Rated: 
                <?php 
                $mm = 0;
               $count =  $roc['rated'];
                while($mm <  $count ) {

                ?><i class="fa fa-xs fa-star text-primary"></i>
                <?php  $mm ++; }?> 

              </div>
              <p class="text-muted text-sm">Review: <?php echo $roc['review'] ; ?></p>
            </div>
          </div>
          <div class="rebiew_section">
        <?php 
        if (isset($_POST['review_submit'])) {
          $review_name = $_POST['Rname'];
         $rating = $_POST['rating'];
          $review_email = $_POST['Remail'];
           $review_review = $_POST['review'];
        function update_review($review_name,$rating, $bus_id, $review_email,  $review_review,$con)
          {
          $sql = "INSERT INTO review(`review_id`, `name`, `business_id`, `rated`, `user_email`, `review`, `date_added`) 
               VALUES (null,'$review_name',$bus_id,$rating,'$review_email','$review_review',NOW()
              )";
               $chk = mysqli_query($con, $sql);
               if (!$chk) { echo "failed" .mysqli_connect_error(); 
             }else{ 
          if(mysqli_affected_rows($con) == 1){
      $message ="<p style=\"color:red\"> Your Review has been submitted successfully</p>";
        echo $message;
         }
         ?>
         <input type="password" name="focus"  style= "width:1px; height:1px; background-color:#fff; border:0px solid #000" autofocus="autofuse"/>
              <?php
               }
          return $message;
         }

        update_review($review_name,$rating, $bus_id, $review_email,  $review_review, $con );
       }

          ?>

            <div id="leaveReview" class="mt-4 collapse show" style="">
              <h5 class="mb-4">Leave a review</h5>
              <form id="contact-form" method="POST" action="review.php" class="form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="Rname" id="name" placeholder="Enter your name" required class="form-control">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <select name="rating" id="rating" class="custom-select focus-shadow-0">
                        <option value="5">★★★★★ (5/5)</option>
                        <option value="4">★★★★☆ (4/5)</option>
                        <option value="3">★★★☆☆ (3/5)</option>
                        <option value="2">★★☆☆☆ (2/5)</option>
                        <option value="1">★☆☆☆☆ (1/5)</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="Remail" id="email" placeholder="Enter your  email" required class="form-control">
                </div>
                <div class="form-group">
                  <textarea rows="4" name="review" id="review" placeholder="Enter your review" required class="form-control"></textarea>
                </div>
                <button type="submit" name="review_submit"class="btn btn-primary" >Post review</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 right_Details">
        <div class="pl-xl-4"> 
        
        
               
          <!-- Opening Hours      -->
          <div class="card border-0 shadow mb-5">
            <div class="card-header bg-gray-100 py-4 border-0">
              <div class="media align-items-center">
                <div class="media-body">
                  <?php
              $tim = "SELECT * FROM opening_hours WHERE business_id = $bus_id";
              $times = mysqli_query($con, $tim);
              if(!$times){ echo "failed" .mysqli_connect_error() ;}
               $timi = mysqli_fetch_assoc($times);
              ?>
                  <p class="subtitle text-sm text-primary">Opening Hours</p>
                  <h4 class="mb-0"></h4>
                </div>
                <i class="far fa-clock"></i> </div>
            </div>
            <div class="card-body">
              <table class="table text-sm mb-0">
                <tbody>
                  <tr>
                    <th class="pl-0 border-0">Sunday</th>
                    <td class="pr-0 text-right border-0"><?php echo $timi['sunday']; ?></td>
                  </tr>
                  <tr>
                    <th class="pl-0">Monday</th>
                    <td class="pr-0 text-right"><?php echo $timi['monday']; ?></td>
                  </tr>
                  <tr>
                    <th class="pl-0">Tuesday</th>
                    <td class="pr-0 text-right"><?php echo $timi['tuesday']; ?></td>
                  </tr>
                  <tr>
                    <th class="pl-0">Wednesday</th>
                    <td class="pr-0 text-right"><?php echo $timi['wednesday']; ?></td>
                  </tr>
                  <tr>
                    <th class="pl-0">Thursday</th>
                    <td class="pr-0 text-right"><?php echo $timi['thursday']; ?></td>
                  </tr>
                  <tr>
                    <th class="pl-0">Friday</th>
                    <td class="pr-0 text-right"><?php echo $timi['friday']; ?></td>
                  </tr>
                  <tr>
                    <th class="pl-0">Saturday</th>
                    <td class="pr-0 text-right"><?php echo $timi['saturday']; ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card border-0 shadow mb-5">
            <div class="card-header bg-gray-100 py-4 border-0">
              <div class="media align-items-center">
                <div class="media-body">
 
                    <?php
              $social = "SELECT * FROM social WHERE business_id = $bus_id";
              $soc = mysqli_query($con, $social);
              if(!$soc){ echo "failed" .mysqli_connect_error() ;}
               $scol = mysqli_fetch_assoc($soc);
              ?>
                   <p class="subtitle text-sm text-primary">Drop Us a Line</p>
                  <h4 class="mb-0">Contact</h4>                 
                  
                </div>
                <i class="fas fa-share-alt"></i> </div>
            </div>
            <div class="card-body">
              <ul class="list-unstyled mb-4">
                <li class="mb-2"> <a href="#" class="text-gray-00 text-sm text-decoration-none"><i class="fa fa-phone mr-3"></i><span class="text-muted"><?php echo "(+234) " .$res['phone']; ?></span></a></li>
                <li class="mb-2"> <a href="#" class=" text-sm text-decoration-none"><i class="fa fa-envelope mr-3"></i><span class="text-muted"><?php echo $scol['email']; ?></span></a></li>
                <li class="mb-2"> <a href="#" class=" text-sm text-decoration-none"><i class="fa fa-globe mr-3"></i><span class="text-muted"><?php echo $scol['website']; ?></span></a></li>
                <li class="mb-2"> <a href="#" class="text-blue text-sm text-decoration-none"><i class="fab fa-facebook mr-3"></i><span class="text-muted"><?php echo $scol['facebook']; ?></span></a></li>
                <li class="mb-2"> <a href="#" class=" text-sm text-decoration-none"><i class="fab fa-twitter mr-3"></i><span class="text-muted"><?php echo $scol['twitter']; ?></span></a></li>
              </ul>
              
            </div>
          </div>
          <div class="text-center">
       
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include "includes/footer.php"
?>