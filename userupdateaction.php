<?php
session_start();
require 'connectdb.php';

if(isset($_POST["userupdate"]))
// echo "updated";
$userid = $_SESSION['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$usercontact = $_POST['usercontact'];
// $stpassword = $_POST['password'];
// $stcpassword = $_POST['confirm_password'];
// $staddress = $_POST['address'];
// echo $stname;
$userupdateimg = $_FILES["userupdateimge"];
    // print_r($bookimaggge);
    $imagename= $userupdateimg["name"];
//    echo $imagename;
    

    $imagetemporarypath = $userupdateimg["tmp_name"];
    // echo $imagetemporarypath;

    
    $mypatch = "userimage/".$imagename;
    // echo $mypatch;
    

     move_uploaded_file($imagetemporarypath,$mypatch);


$updatequery= "UPDATE `user_info` SET `user_id`='[value-1]',`user_name`='$username',`user_email`='$email ',`user_password`='$password',
`user_contact`='$usercontact',`user_img`='$mypatch' WHERE user_id = $userid ";

$updatedata = mysqli_query($connectiondb,$updatequery);
     if( $updatedata){
        header("Location: editprofile.php");
     }
?>