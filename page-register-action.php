<?php
require 'connectdb.php';


if (isset($_POST["signupsubmit"])) {
    # code...
    // echo 'signup hogaya hai ';
    // echo '<script>alert("Signup Succesfully")</script>';
    // header('location:home.php');
    // echo '<script>alert("Signup Succesfully")</script>';

    $signupname = $_POST["signupname"];
    $signupemail = $_POST["signupemail"];
    $signupphonenumber = $_POST["signupcontact"];
    $signuppassword = $_POST["signuppassword"];
    $signuprole = $_POST["signuprole"];

    echo $signupname;
    echo "<br>";
    echo $signupemail;
    echo "<br>";
    echo $signupphonenumber;
    echo "<br>";
    echo $signuppassword;
    echo "<br>";
    echo $signuprole;
    echo "<br>"; 

    $rolequery= "select * from web_roles where role_id = $signuprole";
        $roledata = mysqli_query($connectiondb,$rolequery);
        $roleid = mysqli_fetch_assoc($roledata);
        $web_role = $roleid['role_name'];
        print_r ($web_role);
        
        // if(){}
        
    //  echo $Facultydata;
    // $query = "INSERT INTO `pending_st`(`name`, `email`,`phone_number`, `password`, `confirm_password`, `time`, `faculty`,`address`)
    //  VALUES ('$stname','$stemail','$stphonenumber','$stpassword','$stcpassword','$sttime','$faculty','$staddress')";
    //  $datasave = mysqli_query($connectiondb,$query);
    //  if($datasave){
    //  echo '<script> alert("data inserted success")</script>'; 
    //  }
    //  if($datasave){
    //     header("Location: signup.php");
        
    // //  echo "data inserted success";
    //  }

}
?>

