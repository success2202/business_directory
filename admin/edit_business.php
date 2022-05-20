<?php include "includes/header.php"; 
      include "includes/db_connect.php";
error_reporting(E_ALL);
ini_set('display_errors','on');

$bus_id = $_GET['busid'];

$sql = "SELECT * FROM business WHERE business_id = $bus_id";
$chk = mysqli_query($con, $sql);
if(!$chk){
  echo "connection failed" .mysqli_connect_error();
}
$res = mysqli_fetch_assoc($chk);
?>



<section style=" padding: 20px; border-radius: 50px" class="clearfix bg-dark listingSection pt80 pb80 admin-page">

 <center style="padding:10px"><h3>Update Business Details</h3></center> 
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
    <form method="POST" action="" class="listing__form" enctype="multipart/form-data">
          <div class="dashboardBoxBg mb30">
            <div class="profileIntro paraMargin">
              <div class="row">
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="listingTitle">Business Name</label>
                  <input type="text" name = "bizName"class="form-control" id="listingTitle" placeholder="<?php echo $res['name'];?>">
                </div>
                <div class="form-group col-sm-12 col-xs-12">
                  <label for="discribeTheListing">Business Description</label>
                  <textarea class="form-control" name="description" rows="2" placeholder="<?php echo $res['description'];?>"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="dashboardBoxBg mb30">
            <div class="profileIntro paraMargin">
              <h3>Contact</h3>
              <div class="row">
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="listingAddress">Office Address</label>
                  <input type="text" name="bizAddress" class="form-control" id="listingAddress" placeholder="<?php echo $res['address'];?>" autocomplete="off">
                </div>
          
                <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                  <label for="listingPhone">Business Phone</label>
                  <input type="number" name="phone" class="form-control" id="listingPhone" placeholder="<?php echo "0".$res['phone'];?>">
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="listingAddress">City</label>
                  <input type="text" name="city" class="form-control" id="listingAddress" placeholder="<?php echo $res['city'];?>" autocomplete="off">
                </div>
              </div>
            </div>
          </div>
          <div class="dashboardBoxBg mb30">
            <div class="profileIntro paraMargin">
              <p>Upload Images</p>
              <div class="row">
                <div class="form-group col-md-12 col-xs-12">
                  <div class="imagUploader text-center">
                    <div class="file-upload">
                      <div class="upload-area">
                      <input type="file" name="image" id="fff" class="form-control input-sm mb5" placeholder="<?php echo $res['images'];?>"  value="image">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-footer text-center">
            <button type="submit" name="submit" class="btn-submit">Update</button>
            
          </div>
           <div class="form-footer text-center">
            <button style="background-color:red; margin:10px"type="submit" name="submit2" class="btn-submit">Delete</button>
            
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
    if(isset($_POST['submit'])){

        $name = $_POST['bizName'];
        $description = $_POST['description'];
        $address = $_POST['bizAddress'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        
        
$tm = md5(time());
$fn=$_FILES['image']['name'];
$tmploc=$_FILES['images']['tmp_name'];
$dir = "../uploads/" .$tm .$fn;
move_uploaded_file($tmploc, $dir);

        //update business details

    $updateBiz = "UPDATE business SET `name`='$name',`description`='$description', `address`='$address',`phone`='$phone', `city`='$city', `images` = '$fn' WHERE `business_id`=$bus_id ";

    $chkbiz = mysqli_query($con,$updateBiz);
    if(mysqli_affected_rows($con) >= 0){
        ?>
         <script type="text/javascript">
        window.location="index.php";
        </script>

         <?php
 
    }else{
       echo "failed to connect" .mysqli_connect_error();    
           
    }
    var_dump($chkbiz);
}else{ if(isset($_POST['submit2'])) {
    $delFile = "DELETE FROM business WHERE business_id=$bus_id";
    $delchk = mysqli_query($con,$delFile);
var_dump($delchk);
    if(mysqli_affected_rows($con) >= 0){
        ?>
         <script type="text/javascript">
        window.location="index.php";
        </script>
         <?php
 
    }else{
       echo "failed to connect" .mysqli_connect_error();    
}
  
}
}




?>
 <?php 
include "includes/footer.php";
  ?>
  