<?php
require 'connectdb.php';


if (isset($_POST["signupsubmit"])) {
   

    $signupname = $_POST["signupname"];
    $signupemail = $_POST["signupemail"];
    $signuppassword = $_POST["signuppassword"];
    $signupcontact = $_POST["signupcontact"];
    $signuprole = $_POST["signuprole"];


    $signupimaggge = $_FILES["signupimg"];
    // print_r($bookimaggge);
    $imagename= $signupimaggge["name"];
//    echo $imagename;
    

    $imagetemporarypath = $signupimaggge["tmp_name"];
    // echo $imagetemporarypath;

    
    $userpatch = "userimage/".$imagename;
    $auhtorpatch = "authorimage/".$imagename;
    // echo $mypatch;
    

    //  move_uploaded_file($imagetemporarypath,$mypatch);

    $queryr= "select * from web_roles where role_id  = $signuprole";
        $roledata = mysqli_query($connectiondb,$queryr);
        $roleinfo = mysqli_fetch_assoc($roledata);
        $role = $roleinfo['role_name'];
        $roleid = $roleinfo['role_id'];
        echo $roleid;

    if($roleid == 1){
        move_uploaded_file($imagetemporarypath,$userpatch);
        $query = "INSERT INTO `user_info`(`user_name`, `user_email`, `user_password`, `user_contact`, `user_role`,`user_img`) 
    VALUES ('$signupname','$signupemail','$signuppassword','$signupcontact','$role','$userpatch')";
     $datasave = mysqli_query($connectiondb,$query);
    //  if($datasave){
    //  echo '<script> alert("data inserted success")</script>'; 
    //  }
     if($datasave){
        header("Location: signup.php");
        
     }

    }
    if($roleid == 2){
        move_uploaded_file($imagetemporarypath,$auhtorpatch);
        $query = "INSERT INTO `pending_author`(`author_name`, `author_email`, `author_password`, `author_contact`, `author_role`,`author_img`) 
    VALUES ('$signupname','$signupemail','$signuppassword','$signupcontact','$role','$auhtorpatch')";
     $datasave = mysqli_query($connectiondb,$query);
    //  if($datasave){
    //  echo '<script> alert("data inserted success")</script>'; 
    //  }
     if($datasave){
        header("Location: signup.php");
        
     }

    } else {
    }
        
    

}
?>

