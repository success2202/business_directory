<?php 
      include("includes/db_connect.php");
error_reporting(E_ALL);
ini_set('display_errors','on');



$name = $_POST['Rname'];
$rating = $_POST['rating'];
$email = $_POST['Remail'];
$comment= $_POST['review'];


function Add_social($name, $busid, $rating, $email, $comment){
    global $con;
    $sql = "INSERT INTO review VALUES(null,$name, $busid,'$rating','$email','$comment')";
			 $bb = mysqli_query($con,  $sql);
             
        

	 if($bb){
		header("location:business.php");
			 
			 }else{
				"error occured" .mysqli_connect_error();
			 }

			
		
	
}



if(isset($_POST['addBusiness'])){
         
    addbiz($userid, $cat, $name, $baddress, $phoneN, $cities, $file, $des );
}


?>