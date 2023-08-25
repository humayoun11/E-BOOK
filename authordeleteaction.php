<?php
require 'connectdb.php';

$acceptId = $_GET["acceptId"];

// echo $acceptId;

$qyert = "select * from author_info where author_id = $acceptId";

$dlvry = mysqli_query($connectiondb,$qyert);

$authordata = mysqli_fetch_assoc($dlvry);

// print_r($fetchdata["Id"]);
$authorid = $authordata["author_id"];
$authorname = $authordata["author_name"];
$authoremail = $authordata["author_email"];
$authorpassword = $authordata["author_password"];
$authorcontact = $authordata["author_contact"];
$authorrole = $authordata["author_role"];
$authorimg = $authordata["author_img"];
    
     $deletquery = "DELETE FROM author_info WHERE author_id = $authorid";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if( $datadelet){
         header("Location: approvedauthor.php");
        //  header("Location: stsuspend.php.php");
         //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?>         


