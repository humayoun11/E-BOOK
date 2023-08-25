<?php
session_start();
include("connectdb.php");
if(isset($_POST["signinsubmit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $userlogin = "SELECT * FROM `user_info` WHERE `user_email` ='$email' && `user_password` ='$password'";
    $userdeliver = mysqli_query($connectiondb , $userlogin);
    $userrow = mysqli_fetch_assoc($userdeliver);
    $counnt = mysqli_num_rows($userdeliver);
    if($counnt>0){
        $_SESSION["user_id"] = $userrow["user_id"]; 
        $_SESSION["user_name"] = $userrow["user_name"]; 
        $_SESSION["user_email"] = $userrow["user_email"]; 
        $_SESSION["user_password"] = $userrow["user_password"]; 
        $_SESSION["user_contact"] = $userrow["user_contact"];
        $_SESSION["user_role"] = $userrow["user_role"];
        $_SESSION["user_img"] = $userrow["user_img"];
        header("location: userdasboard.php");
        // echo $_SESSION["user_id"];
        // echo '<br>';
        exit;
    }
    $authorlogin = "SELECT * FROM `author_info` WHERE `author_email` ='$email' && `author_password` ='$password'";
    $authordeliver = mysqli_query($connectiondb , $authorlogin);
    $authorrow = mysqli_fetch_assoc($authordeliver);
    $counnt = mysqli_num_rows($authordeliver);
    if($counnt>0){
        $_SESSION["author_id"] = $authorrow["author_id"]; 
        $_SESSION["author_name"] = $authorrow["author_name"]; 
        $_SESSION["author_email"] = $authorrow["author_email"]; 
        $_SESSION["author_password"] = $authorrow["author_password"]; 
        $_SESSION["author_contact"] = $authorrow["author_contact"];
        $_SESSION["author_role"] = $authorrow["author_role"];
        $_SESSION["author_img"] = $authorrow["author_img"];
        header("location: authordasboard.php");
        // echo $_SESSION["user_id"];
        // echo '<br>';
        exit;
    }
else if($email=="admin@gmail.com" && $password=="admin123"){
    $_SESSION["adminemail"] = $email;
    $_SESSION["adminpassword"] = $password;  
       header("location:admindasboard.php");
}
else{
  header("location:login.php?error=InvalidCredentials");
  exit;
}
}
?>