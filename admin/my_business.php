<?php include "includes/header.php"; 
      include "includes/db_connect.php";

error_reporting(E_ALL);
ini_set('display_errors','on');
//db connection test

$user_id = $_SESSION['user_id'];
if(isset($user_id)){

}

?>
<!-- End Main Menu Area -->

<section style=" padding-top: 10px" class="clearfix bg-dark profileSection pt80 pb80 admin-page">
	<div class="container">
	 <center><p>Your Business</p></center> 
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="table-responsive" data-pattern="priority-columns">
          <table class="table listingsTable">
            <thead>
              <tr class="rowItem">
                <th data-priority="">Name</th>
                <th data-priority="6">Reviews</th>
                <th data-priority="6">Posted</th>
                <th data-priority="5">Status</th>
                <th data-priority="5">Update</th>
              
              </tr>
            </thead>
            <tbody>
              <?php 

              //get business name and details for each user 

              $sql = "SELECT * FROM business WHERE user_id = $user_id ORDER BY Date_created DESC";
              $chk = mysqli_query($con, $sql);
              if(!$chk){ echo "failed to connect" . mysqli_connect_error();}
              while($bisCount = mysqli_fetch_assoc($chk)){
              
              ?>
              <?php  ?>
              <tr class="rowItem">
                <td><ul class="list-inline listingsInfo">
                  
                    <li><a href="single_page.php?busid=<?php echo urlencode($bisCount['business_id']); ?>"><img src="../uploads/<?php echo $bisCount['images'];  ?>" style="width:50px; height:50px" alt="Image Listings"></a></li>
                    
                    <li>
                      <h6><?php echo $bisCount['name']; ?><i class="fas fa-check-circle"></i></h6>
    
                    </li>
                  </ul></td>
                <td>
                <?php   
                $add = 0;
                $id = $bisCount['business_id'];
              $req = "SELECT * FROM review WHERE business_id = $id ORDER BY date_added DESC";
              $rev = mysqli_query($con, $req);
              if(!$rev){ echo "failed" .mysqli_connect_error() ;}
              while ($rol = mysqli_fetch_assoc($rev)){
              
                $add += $rol ['rated'] ;
              };
              echo $add ." Reviews";
              ?>
                </td>
              
                <td><?php $date = explode( '-' , $bisCount['Date_created']);
                  $day = $date[2];
                  $day1 = explode( ' ', $day);
                  //print_r($day1);
                  print_r($day1[0]); echo"/"; print_r($date[1]); echo"/"; print_r($date[0]);   ?></td>
                <td><span class="label label-success"><?php 
                if($bisCount['status'] == 1) {echo " Active "; }else{echo " Closed"; } ?></span></td>
                 <td><a href="edit_business.php?busid=<?php echo urlencode($bisCount['business_id']); ?>"><span style="font-size: 12px; color:#aaeeff">Edit</span></td>
              </tr>
             <?php } ?>      
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include "includes/footer.php"; ?>