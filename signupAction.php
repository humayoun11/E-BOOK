<?php

require 'connect.php';

if(isset($_POST["submit"])){

    $username = $_POST["name"];
    $userlname = $_POST["lname"];
    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];
    $tele = $_POST["contact"];
    $userimg = $_FILES["img"];
    
    
     $userImageName = $userimg["name"];
     $imageActualPath = $userimg["tmp_name"];

     $mypath = "imgs/".$userImageName;
     move_uploaded_file($imageActualPath,$mypath);
    
    
    //  $myquery = "INSERT INTO `users`(`u_name`, `u_lastName`, `u_email`, `u_pass`, `u_role`, `u_image`) VALUES ('$username','$userlname','$useremail',' $userpassword','customer','$mypath')";

    // $deliveryboy=mysqli_query($conn,$myquery);

    // if($deliveryboy){
    //     header('location:signup.php');
    // }
}








?>