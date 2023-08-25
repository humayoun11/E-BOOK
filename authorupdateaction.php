<?php
session_start();
require 'connectdb.php';

if(isset($_POST["authorupdate"]))
// echo "updated";
$authorid = $_SESSION['author_id'];
$authorname = $_POST['authorname'];
$authoremail = $_POST['authoremail'];
$authorpassword = $_POST['authorepassword'];
$auhtorcontact = $_POST['authorecontact'];
// $stpassword = $_POST['password'];
// $stcpassword = $_POST['confirm_password'];
// $staddress = $_POST['address'];
// echo $stname;
$auhtorupdateimg = $_FILES["auhtorupdateimg"];
    // print_r($bookimaggge);
    $imagename= $auhtorupdateimg["name"];
//    echo $imagename;
    

    $imagetemporarypath = $auhtorupdateimg["tmp_name"];
    // echo $imagetemporarypath;

    
    $mypatch = "authorimage/".$imagename;
    // echo $mypatch;
    

     move_uploaded_file($imagetemporarypath,$mypatch);


$updatequery= "UPDATE `author_info` SET `author_name`='$authorname',`author_email`='$authoremail',`author_password`='$authorpassword',
`author_contact`='$auhtorcontact',`author_img`='$mypatch' WHERE author_id  = $authorid  ";

$updatedata = mysqli_query($connectiondb,$updatequery);
     if( $updatedata){
        header("Location: editprofilecopy.php");
     }
?>