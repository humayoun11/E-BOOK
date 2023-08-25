<?php
require 'connectdb.php';

$acceptId = $_GET["acceptId"];

// echo $acceptId;

$qyert = "select * from user_info where user_id  = $acceptId";

$dlvry = mysqli_query($connectiondb,$qyert);

$userdata = mysqli_fetch_assoc($dlvry);

// print_r($fetchdata["Id"]);
$userid = $userdata["user_id"];
$username = $userdata["user_name"];
$useremail = $userdata["user_email"];
$userpassword = $userdata["user_password"];
$usercontact = $userdata["user_contact"];
$userrole = $userdata["user_role"];
$userimg = $userdata["user_img"];
    
     $deletquery = "DELETE FROM user_info WHERE user_id = $acceptId";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if( $datadelet){
         header("Location: userdisplay.php");
        //  header("Location: stsuspend.php.php");
         //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?>         


