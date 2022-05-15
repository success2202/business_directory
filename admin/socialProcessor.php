<?php
include('includes/db_connect.php');
$busid = $_POST['business_id'];
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


function get_business()
			{
                global $con; $user_id = $_GET['user_id'];
				$dd = "SELECT * FROM business WHERE `user_id` = $user_id  ORDER BY Date_created DESC LIMIT 1";
				$pp = mysqli_query($con, $dd);
				$mm = mysqli_fetch_assoc($pp);
				$busid = $mm['business_id'];
				return $busid;
            }
            function Add_social($web, $email, $facebook, $twiter, $monday, $tuesday,$wednesday,$thursday, $friday, $saturday, $sunday, $con){
                $busid = $_GET['business_id'];
                $sqli = "INSERT INTO opening_hours(`time_id`, `business_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`)
                        VALUES (null,'$busid','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$sunday')";
                         $cc = mysqli_query($con, $sqli);
            var_dump($cc);
                die();
                         if(!$cc){
                             "error occured" .mysqli_connect_error();
                         }
                         $sql = "INSERT INTO `social`(`socical_id`, `business_id`, `website`, `facebook`, `twitter`, `email`)
                        VALUES(null, $busid, '$web', '$facebook', '$twiter', '$email')";
                    $chk = mysqli_query($con, $sql);
                
                    if(!$chk){
                        echo "connection was not successful" .mysqli_connect_error();			
                    }else{
                        header("Location:index.php");
                    }
                    return $chk;
            }
            
            if(isset($_POST['social'])){
                Add_social($web, $email, $facebook, $twiter, $monday, $tuesday,$wednesday,$thursday, $friday, $saturday, $sunday, $con);
            }
?>