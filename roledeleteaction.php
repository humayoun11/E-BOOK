<?php
require 'connectdb.php';

$roleId = $_GET["acceptId"];

// echo $acceptId;

$qyert = "select * from web_roles where role_id  = $roleId";

$dlvry = mysqli_query($connectiondb,$qyert);

$fetchdata = mysqli_fetch_assoc($dlvry);

// print_r($fetchdata["role_id"]);
    // $roleId = $fetchdata["role_id"];
   
    
     $deletquery = "DELETE FROM web_roles WHERE role_id = $roleId";
     $datadelet = mysqli_query($connectiondb,$deletquery);
     if( $datadelet){
         header("Location: displayrole.php");
        //  header("Location: stsuspend.php.php");
         //  echo "<script>alert('operation completed')</script>";
     }

    // print_r($fetchdata["phone_number"]);


?> 