<?php
ob_start();
session_start();
require 'connectdb.php';
$userid = $_SESSION["user_id"];
$query = "select * from user_info where user_id = $userid";
$getuserinfo = mysqli_query($connectiondb,$query);
$row= mysqli_fetch_assoc($getuserinfo);
// print_r($row);
$username = $row['user_name'];
$user_email = $row['user_email'] ;
$user_password = $row['user_password'] ;
$user_contact = $row['user_contact'] ;

if (isset($_POST['purchase']))
$trd = $_POST['trdnumber'];
echo $trd;

?>