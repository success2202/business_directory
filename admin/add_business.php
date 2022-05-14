<?php include "includes/header.php"; 
      include "includes/db_connect.php";
error_reporting(E_ALL);
ini_set('display_errors','on');

$userid = $_GET['user_id'];

?>

<section style=" padding: 20px; border-radius: 50px" class="clearfix bg-dark listingSection pt80 pb80 admin-page">

 <center style="padding:10px"><h3>Add Business</h3></center> 
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
    <form method="POST" action="business_processor.php" class="listing__form" enctype="multipart/form-data">
          <div class="dashboardBoxBg mb30">
            <div class="profileIntro paraMargin">
              <h3>About</h3>
              <p> Please enter your Business details below </p>
              <div class="row">
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="listingTitle">Business Name</label>
                  <input type="text" name = "bizName"class="form-control" id="listingTitle" placeholder="Company Name" required>
                </div>
                <div class="form-group col-sm-12 col-xs-12">
                  <label for="discribeTheListing">Business Description</label>
                  <textarea class="form-control" name="Description" rows="2" placeholder="Discribe Business"></textarea>
                </div>
              </div>
            </div>
          </div>
         <div class="col-lg-12 d-flex align-items-center form-group no-divider">
                    <div class=" bootstrap-select">
                      <select type="number" title="Categories" name="category" data-style="btn-form-control" class="selectpicker form-control" tabindex="-98">
                      <option>Select Category</option>
                        <?php 
                          $sql = "SELECT* FROM category ";
                          $chk = mysqli_query($con, $sql);
                          while($mikk = mysqli_fetch_assoc($chk)){
                            $kk = $mikk['cat_name'];
                            $mm = $mikk['cat_id'];
                            echo "<option value=\"$mm\">" .
                            $kk ."</option>";
                          }
                        ?>
                      </select>
                      <div class="dropdown-menu">
                        <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                          <ul class="dropdown-menu inner show">
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
          <div class="dashboardBoxBg mb30">
            <div class="profileIntro paraMargin">
              <h3>Contact</h3>
              <p>Enter Business Contact Details</p>
              <div class="row">
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="listingAddress">Office Address</label>
                  <input type="text" name="bizAddress" class="form-control" id="listingAddress" placeholder="Address" autocomplete="off" required>
                </div>
          
                <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                  <label for="listingPhone">Business Phone</label>
                  <input type="number" name="Phone" class="form-control" id="listingPhone" placeholder="080-000-000" required>
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="listingAddress">City</label>
                  <input type="text" name="city" class="form-control" id="listingAddress" placeholder="Address" autocomplete="off">
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
                      <input type="file" name="image" id="fff" class="form-control input-sm mb5" placeholder="Image"  value="image">
                      <input type="hidden" name="addBusiness" value="businessAdd">
                    
                      <input type="hidden" name="user_id" value = "<?= $_GET['user_id']?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-footer text-center">
            <button type="submit" name="" class="btn-submit">Next Page</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 <?php 
include "includes/footer.php";
  ?>
  