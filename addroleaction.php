<?php
require 'connectdb.php';


if (isset($_POST["addrole"])){
    // echo "humayoun";
    $addrole = $_POST["val-addrole"];

    $addrolequery = "INSERT INTO `web_roles`(`role_name`) VALUES ('$addrole')";
    $addrolesave = mysqli_query($connectiondb,$addrolequery);

    if($addrolesave){
        header("Location: addrole.php");
        
    //  echo "data inserted success";
     }
}
?>