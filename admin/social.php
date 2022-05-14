  <?php include("includes/header.php"); 
      include ("includes/db_connect.php");
error_reporting(E_ALL);
ini_set('display_errors','on');

$bizid = $_GET['Biz_id'];
?>
<!-- End Main Menu Area -->

   <div class="dashboardBoxBg mb30">
            <div class="profileIntro paraMargin">
              <h3>Additional Information</h3>
              <p>Connect your customers to your social network</p>
              <form method="POST" action="socialProcessor.php" class="listing__form">
              <div class="row">
                <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                  <label for="listingEmail">Business Email</label>
                  <input type="email" name="bizEmail" class="form-control" id="listingEmail" placeholder="hello@company.com" required/>
                </div>
                <div class="form-group col-sm-6 col-sm-pull-6 col-xs-12">
                  <label for="listingWebsite">Business Website</label>
                  <input type="text" name="bizWebsite" class="form-control" id="listingWebsite" placeholder="http://">
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="linkedUrl">Linked in URL</label>
                  <input type="text" name="linkedin" class="form-control" id="linkedUrl" placeholder="http://linkedin.com/">
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="facebookUrl">Facebook URL</label>
                  <input type="text" name="facebook" class="form-control" id="facebookUrl" placeholder="http://facebook.com/">
                </div>
                <div class="form-group col-sm-6 col-xs-12">
                  <label for="twitterUrl">Twitter URL</label>
                  <input type="text" name="twitter" class="form-control" id="twitterUrl" placeholder="http://twitter.com/">
                </div>
              </div>
            </div>
          </div>
          <div class="dashboardBoxBg mb30">
            <div class="profileIntro paraMargin">
              <h3>Opening Hours</h3>
              <p>Example: 10.00am - 5.00pm</p>

                  <input type="hidden" name="Biz_id" value = "<?= $_GET['biz_id']?>">
          
              <div class="row">
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                  <label for="mondayTime">Monday</label>
                  <input type="text" name="monday" class="form-control" id="mondayTime" placeholder="10.00am - 5.00pm" required>
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                  <label for="tuesdayTime">Tuesday</label>
                  <input type="text" name="tuesday" class="form-control" id="tuesdayTime" placeholder="10.00am - 5.00pm">
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                  <label for="wednesdayTime">Wednesday</label>
                  <input type="text" name="wednesday" class="form-control" id="wednesdayTime" placeholder="10.00am - 5.00pm">
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                  <label for="thrusdayTime">Thrusday</label>
                  <input type="text" name="thuresday" class="form-control" id="thrusdayTime" placeholder="10.00am - 5.00pm">
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                  <label for="fridayTime">Friday</label>
                  <input type="text" name="friday" class="form-control" id="fridayTime" placeholder="10.00am - 5.00pm">
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                  <label for="saturdayTime">Saturday</label>
                  <input type="text" name="saturday" class="form-control" id="saturdayTime" placeholder="10.00am - 5.00pm">
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                  <label for="sundayTime">Sunday</label>
                  <input type="text" name="sunday" class="form-control" id="sundayTime" placeholder="Closed">
                  
                  <input type="hidden" name="weeks" value="social">
                </div>
              </div>
            </div>
          </div>
           <div class="form-footer text-center">
            <button type="submit" name="social-submit" class="btn btn-primary btn-block rounded-xl h-100">Submit </button>
          </div>
        </form>
         <?php 
include "includes/footer.php";
  ?>