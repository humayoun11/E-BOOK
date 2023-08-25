<?php
require 'connectdb.php';


if (isset($_POST["addbook"])){
    // echo "humayoun";
    $categoryname = $_POST["categoryname"];

    $query = "INSERT INTO `books_category`(`category_id`, `category_name`) VALUES ('[value-1]','$categoryname')";
    $addcategorysave = mysqli_query($connectiondb,$query);

    if($addcategorysave){
        header("Location: addbookcategory.php");
        
    //  echo "data inserted success";
     }
}
?>