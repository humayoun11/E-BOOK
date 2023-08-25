<?php
require 'connectdb.php';

$categoryId = $_GET["acceptId"];

// echo $acceptId;

$qyert = "select * from books_category where category_id   = $categoryId";

$dlvry = mysqli_query($connectiondb,$qyert);

$fetchdata = mysqli_fetch_assoc($dlvry);

// print_r($fetchdata["role_id"]);
    // $roleId = $fetchdata["role_id"];
   
    
     $deletquery = "DELETE FROM books_category WHERE category_id = $categoryId";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if( $datadelet){
         header("Location: displaycategory.php");
        //  header("Location: stsuspend.php.php");
         //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?> 