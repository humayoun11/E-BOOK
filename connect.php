<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "ebook";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    
    echo "Connect";
}

?>