<?php
require 'connectdb.php';

$acceptId = $_GET["acceptId"];

// echo $acceptId;

$qyert = "select * from pending_author where author_id  = $acceptId";

$dlvry = mysqli_query($connectiondb,$qyert);

$authordata = mysqli_fetch_assoc($dlvry);

// print_r($fetchdata["id"]);
    $authorid = $authordata["author_id"];
    $authorname = $authordata["author_name"];
    $authoremail = $authordata["author_email"];
    $authorpassword = $authordata["author_password"];
    $authorcontact = $authordata["author_contact"];
    $authorrole = $authordata["author_role"];
    $authorimg = $authordata["author_img"];
    // $sttime = $authordata["time"];
    // $stfaculty = $authordata["faculty"];


    $insertquery = "INSERT INTO `author_info`(`author_id`, `author_name`, `author_email`, `author_password`, `author_contact`, `author_role`, `author_img`)
     VALUES ('[value-1]','$authorname','$authoremail','$authorpassword','$authorcontact','$authorrole','$authorimg')";
     $datasave = mysqli_query($connectiondb,$insertquery);
     $deletquery = "DELETE FROM pending_author WHERE author_id  = $authorid";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if($datasave && $datadelet){
        header("Location: pendingauthor.php");
    //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?>         


