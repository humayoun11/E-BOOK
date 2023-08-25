<?php
require 'connectdb.php';
session_start();
$authorid = $_SESSION["author_id"];


if (isset($_POST["booksubmitaction"])){
    // echo "humayoun";
    $bookprice = $_POST["bookprice"];
    $bookname = $_POST["bookname"];
    $bookauthor = $_POST["bookauthor"];
    $releasedate = $_POST["releasedate"];
    $category = $_POST["category"];



    $bookimaggge = $_FILES["book_image"];
    print_r($bookimaggge);
    $imagename= $bookimaggge["name"];
   echo $imagename;
    

    $imagetemporarypath = $bookimaggge["tmp_name"];
    echo $imagetemporarypath;

    
    $mypatch = "productimages/".$imagename;
    // $display = "C:\xampp\htdocs\bookstore\productimage".$imagename;
    echo $mypatch;
    

     move_uploaded_file($imagetemporarypath,$mypatch);
    //  move_uploaded_file($imagetemporarypath,$display);

    
    
    $queryr= "select * from books_category where category_id  = $category";
        $categorydata = mysqli_query($connectiondb,$queryr);
        $categoryid = mysqli_fetch_assoc($categorydata);
        $categorytype = $categoryid['category_name'];
        // echo $categoryread;

    $addbookquery = "INSERT INTO `books_info`(`book_price`, `book_name`, `book_author`,`book_types`,`book_img`,`book_release__date`) 
    VALUES ('$bookprice','$bookname','$bookauthor ','$categorytype','$mypatch','$releasedate')";
    $addbooksave = mysqli_query($connectiondb,$addbookquery);

    if($addbooksave){
        header("Location: submitbook.php");
        
    //  echo "data inserted success";
     }
}
?>