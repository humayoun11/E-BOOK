<?php

require 'connect.php';

if(isset($_POST["submit"])){


    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];

    
    
    
     $myqueryy = "select * from users where u_email='$useremail' and u_pass='$userpassword'";

    $deliveryboyy=mysqli_query($conn,$myqueryy);

    $count = mysqli_num_rows($deliveryboyy);



    
}








?>