<?php
include('includes/db_connect.php');
error_reporting(E_ALL);
ini_set('display_errors', 0);

$cat = $_POST['category'];
$name = $_POST['bizName'];
$baddress = $_POST['bizAddress'];
$phoneN= $_POST['Phone'];
$cities = $_POST['city'];
$addB = $_POST['addBusiness'];
$userid = $_POST['user_id'];
$des = $_POST['Description'];



$email = $_POST['bizEmail'];
$web = $_POST['bizWebsite'];
$link = $_POST['linkedin'];
$facebook = $_POST['facebook'];
$twiter= $_POST['twitter'];
$monday = $_POST['monday'];
$tuesday = $_POST['tuesday'];
$wednesday = $_POST['wednesday'];
$thursday = $_POST['thuresday'];
$friday = $_POST['friday'];
$saturday = $_POST['saturday'];
$sunday = $_POST['sunday'];
$busid = $_POST['busid'];

// var_dump($busid);
// die();


$file = $_FILES["image"]["name"]; 
$dir = "../uploads/".$file;
$dd = move_uploaded_file($_FILES["image"]["tmp_name"],$dir);
           
function addbiz( $userid, $cat, $name, $baddress, $phoneN, $cities, $file,  $des ){ 
    global $con;
    $sql = "INSERT INTO business VALUES(NULL, $userid, $cat,  '$name', '$baddress', $phoneN, '$cities', '$file', '$des',  1, now())"; 
    $ck = mysqli_query($con, $sql);
    
    
 //var_dump($ck);
 //die();
    if($ck){
        header("location:social.php?user_id=".$userid);
    }else{
        echo "invalid information";
    }

       //var_dump($ck);
    //die();
}




function get_business()
			{
                global $con; $user_id = $_GET['user_id'];
				$dd = "SELECT * FROM business WHERE `user_id` = $user_id  ORDER BY Date_created DESC LIMIT 1";
				$pp = mysqli_query($con, $dd);
				$mm = mysqli_fetch_assoc($pp);
				$busid = $mm['business_id'];
				return $busid;
            }


function Add_social($web, $busid, $email, $facebook, $twiter, $monday, $tuesday,$wednesday,$thursday, $friday, $saturday, $sunday, $con){
    
    $sqli = "INSERT INTO opening_hours (`time_id`, `business_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) 
           VALUES(null, $busid,'$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday')";
			 $cc = mysqli_query($con,  $sqli);
             
            //  var_dump($cc);
            //  die();

	 if(!$cc){
			 	"error occured" .mysqli_connect_error();
			 }
			 $sql = "INSERT INTO social (`socical_id`, `business_id`, `website`, `facebook`, `twitter`, `email`) 
                                    VALUES(null, $busid, '$web', '$email', '$facebook', '$twiter')";
		     $chk = mysqli_query($con, $sql);
	
		if(!$chk){
			echo "connection was not successful" .mysqli_connect_error();			
		}else{
			header("Location:index.php");
		}
		return $chk;
}



if(isset($_POST['addBusiness'])){
         
    addbiz($userid, $cat, $name, $baddress, $phoneN, $cities, $file, $des );
}



if(isset($_POST['social'])){
    Add_social($web, $busid, $email, $facebook, $twiter, $monday, $tuesday,$wednesday,$thursday, $friday, $saturday, $sunday, $con);
}
?>