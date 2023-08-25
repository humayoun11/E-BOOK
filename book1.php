<?php
ob_start();
session_start();
require 'connectdb.php';
?>



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:35 GMT -->
<style>
  /* styles.css */
.navbar {
    overflow: hidden;
    background-color: #333;
}

.navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.navbar li {
    float: left;
}

.navbar li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: green;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black !important;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
  background-color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.border{
    border: 1px solid black !important;
}

</style>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("search").innerHTML="";
    document.getElementById("search").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("search").innerHTML=this.responseText;
      document.getElementById("search").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}
</script>


<head>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png"/>
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland Book Store Ecommerce Website</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

</head>	
<body>

<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-1">
		<div class="preloader-inner">
			<div class="preloader-shade"></div>
			<div class="preloader-wrap"></div>
			<div class="preloader-wrap wrap2"></div>
			<div class="preloader-wrap wrap3"></div>
			<div class="preloader-wrap wrap4"></div>
			<div class="preloader-wrap wrap5"></div>
		</div> 
	</div>
	
	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="index.html"><img src="images/logo.png" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<div class="extra-nav">
					<div class="extra-cell">
						<ul class="navbar-nav header-right">
							<li class="nav-item">
								<a class="nav-link" href="wishlist.html">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
									<span class="badge">21</span>
								</a>
							</li>
							<li class="nav-item">
								<button type="button" class="nav-link box cart-btn">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
									<span class="badge">5</span>
								</button>
								<ul class="dropdown-menu cart-list">
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.html"> 
													<img alt="" class="media-object" src="images/books/small/pic1.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Real Life</a></h6>
												<span class="dz-price">$28.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.html"> 
													<img alt="" class="media-object" src="images/books/small/pic2.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Home</a></h6>
												<span class="dz-price">$28.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item">
										<div class="media"> 
											<div class="media-left"> 
												<a href="books-detail.html"> 
													<img alt="" class="media-object" src="images/books/small/pic3.jpg"> 
												</a> 
											</div> 
											<div class="media-body"> 
												<h6 class="dz-title"><a href="books-detail.html" class="media-heading">Such a fun age</a></h6>
												<span class="dz-price">$28.00</span>
												<span class="item-close">&times;</span>
											</div> 
										</div>
									</li>
									<li class="cart-item text-center">
										<h6 class="text-secondary">Totle = $500</h6>
									</li>
									<li class="text-center d-flex">
										<a href="shop-cart.html" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
										<a href="shop-checkout.html" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
									</li>
								</ul>
							</li>
							<li class="nav-item dropdown profile-dropdown  ms-4">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="images/profile1.jpg" alt="/">
									<div class="profile-info">
										<h6 class="title">Brian</h6>
										<span>info@gmail.com</span>
									</div>
								</a>
								<div class="dropdown-menu py-0 dropdown-menu-end">
									<div class="dropdown-header">
										<h6 class="m-0">Brian</h6>
										<span>info@gmail.com</span>
									</div>
									<div class="dropdown-body">
										<a href="my-profile.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
												<span class="ms-2">Profile</span>
											</div>
										</a>
										<a href="shop-cart.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
												<span class="ms-2">My Order</span>
											</div>
										</a>
										<a href="wishlist.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
											<div>
												<svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
												<span class="ms-2">Wishlist</span>
											</div>
										</a>
									</div>
									<div class="dropdown-footer">
										<a class="btn btn-primary w-100 btnhover btn-sm" href="shop-login.html">Log Out</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- header search nav -->
				<div class="header-search-nav">
					<form class="header-item-search">
						<div class="input-group search-input">
							<select class="default-select">
								<option>Category</option>
								<option>Photography </option>
								<option>Arts</option>
								<option>Adventure</option>
								<option>Action</option>
								<option>Games</option>
								<option>Movies</option>
								<option>Comics</option>
								<option>Biographies</option>
								<option>Children’s Books</option>
								<option>Historical</option>
								<option>Contemporary</option>
								<option>Classics</option>
								<option>Education</option>
							</select>
							<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
							<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="index.html"><img src="images/logo.png" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<!-- <div class="extra-nav">
						<div class="extra-cell">
							<a href="contact-us.html" class="btn btn-primary btnhover">Get In Touch</a>	
						</div>
					</div> -->
					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="index.html"><img src="images/logo.png" alt=""></a>
						</div>
						<!-- <form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form> -->
						<ul class="nav navbar-nav">
							<li ><a href="userindex.php"><span>Home</span></a>
								<!-- <ul class="sub-menu"> -->
									<!-- <li><a href="index.html">Home 1</a></li> -->
									<!-- <li><a href="index-2.html">Home 2</a></li> -->
								<!-- </ul> -->
							</li>
							<li><a href="about-us.html"><span>About Us</span></a></li>
					        <li class="dropdown">
							<a href="javascript:void(0)" class="dropbtn">Categories</a>
							
							<?php
                    $sql = "SELECT * FROM books_category";
$result = mysqli_query($connectiondb, $sql);
echo '<div class="dropdown-content">';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<a href="book1.php?category_id=' . $row['category_id'] . '">' . $row['category_name'] . '</a>';
}
echo '</div>';
?>
</li>
							
							<!-- <li><a href="contact-us.html"><span>Contact Us</span></a></li>
							<li><a href="services.html"><span>Services</span></a></li>
							<li><a href="faq.html"><span>FAQ</span></a></li>
							<li><a href="privacy-policy.html"><span>Privacy Policy</span></a></li> -->
							<li><a href="shop-login.html"><span>Login</span></a></li>
							<li><a href="shop-registration.html"><span>Registration</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/dexignzone"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/dexignzones"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="https://www.linkedin.com/showcase/3686700/admin/"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/website_templates__/"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->
	
	<div class="page-content bg-white border">
	
		<!--Swiper Banner Start -->
		
    <!-- <h1>Product Listing</h1> -->

<?php

// Fetch products from the database

if (isset($_GET['category_id'])) {
    $categoryid = $_GET['category_id'];
    $queryr= "select * from books_category  where category_id  = $categoryid";
    $categorydata = mysqli_query($connectiondb,$queryr);
    $categoryname = mysqli_fetch_assoc($categorydata);
    $category = $categoryname['category_name'];
    // print_r ($category);
    // echo $category;

$sql = "SELECT * FROM books_info WHERE book_types = '$category'" ;
$result = mysqli_query($connectiondb, $sql);
// $result = $connectiondb->query($sql);

if ($result) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {?>
    <div
              class="single-product-area mb-50 wow fadeInUp"
              data-wow-delay="100ms">
              <div class="product-info mt-15 text-center border">
                <a href="plants_details.php?category_id=<?php echo $row["book_id"];?>">
                  <p>BOOK NAME  ----<?php echo $row["book_name"];?></p>
                </a>
                <img src="<?php echo $row["book_img"];?>" alt="<?php echo $row["book_img"];?>">
                <h6>Rs. <?php echo $row["book_price"];?></h6>
                <h6>Author <?php echo $row["book_author"];?></h6>
                <input type="hidden" name="category" value="<?php echo $categoryId;?>" />
                <button type="submit" name="addtocart" value="5" class="btn alazea-btn ml-15">
                    <?php echo'<a href="userpurchase.php?book_id=' . $row['book_id'] . '">'?> Purchase </a>
                <!-- <a href="purchase.php?book_id=' . $row['category_id']"></a>Add to cart -->
            </button>
              </div>
            </div>
    
    <?php
        
        // echo "<div>";
        // echo "<h2>" . $row["book_name"] . "</h2>";
        // echo "<p><strong>Price: $" . $row["book_price"] . "</strong></p>";
        // echo "<p>" . $row["book_author"] . "</p>";
        // echo "</div>";
    }
} else {
    echo "No products found.";
}
}
?>

		
		
		
		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-users icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">125,663</h2>
								<p class="font-20">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.2s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-book icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">50,672</h2>
								<p class="font-20">Book Collections</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">1,562</h2>
								<p class="font-20">Our Stores</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.4s">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-leaf icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">457</h2>
								<p class="font-20">Famous Writers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Box End -->

		<!-- Newsletter -->
		<section class="py-5 newsletter-wrapper" style="background-image: url('images/background/bg1.jpg'); background-size: cover;">
			<div class="container">
				<div class="subscride-inner">
					<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
						<div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
							<div class="section-head mb-0">
								<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books updates</h2>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
							<form class="dzSubscribe style-1" action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="form-group">
									<div class="input-group mb-0">
										<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
										<div class="input-group-addon">
											<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
												<span>SUBSCRIBE</span>
												<i class="fa-solid fa-paper-plane"></i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Newsletter End -->
		
	</div>
	
	<!-- Footer -->
	<footer class="site-footer style-1">
		<!-- Footer Category -->
		<div class="footer-category">
			<div class="container">
				<div class="category-toggle">
					<a href="javascript:void(0);" class="toggle-btn">Books categories</a>
					<div class="toggle-items row">
						<div class="footer-col-book">
							<ul>
								<li><a href="books-grid-view.html">Architecture</a></li>
								<li><a href="books-grid-view.html">Art</a></li>
								<li><a href="books-grid-view.html">Action</a></li>
								<li><a href="books-grid-view.html">Biography</a></li>
								<li><a href="books-grid-view.html">Body, Mind & Spirit</a></li>
								<li><a href="books-grid-view.html">Business & Economics</a></li>
								<li><a href="books-grid-view.html">Children Fiction</a></li>
								<li><a href="books-grid-view.html">Children Non-Fiction</a></li>
								<li><a href="books-grid-view.html">Comics & Graphics</a></li>
								<li><a href="books-grid-view.html">Cooking</a></li>
								<li><a href="books-grid-view.html">Crafts & Hobbies</a></li>
								<li><a href="books-grid-view.html">Design</a></li>
								<li><a href="books-grid-view.html">Drama</a></li>
								<li><a href="books-grid-view.html">Education</a></li>
								<li><a href="books-grid-view.html">Family & Relationships</a></li>
								<li><a href="books-grid-view.html">Fiction</a></li>
								<li><a href="books-grid-view.html">Foreign Language</a></li>
								<li><a href="books-grid-view.html">Games</a></li>
								<li><a href="books-grid-view.html">Gardening</a></li>
								<li><a href="books-grid-view.html">Health & Fitness</a></li>
								<li><a href="books-grid-view.html">History</a></li>
								<li><a href="books-grid-view.html">House & Home</a></li>
								<li><a href="books-grid-view.html">Humor</a></li>
								<li><a href="books-grid-view.html">Literary Collections</a></li>
								<li><a href="books-grid-view.html">Mathematics</a></li>
								<li><a href="books-grid-view.html">Medical</a></li>
								<li><a href="books-grid-view.html">Nature</a></li>
								<li><a href="books-grid-view.html">Performing Arts</a></li>
								<li><a href="books-grid-view.html">Pets</a></li>
								<li><a href="books-grid-view.html">Show others</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Category End -->
		
		<!-- Footer Top -->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
						<div class="widget widget_about">
							<div class="footer-logo logo-white">
								<a href="index.html"><img src="images/logo.png" alt=""></a> 
							</div>
							<p class="text">Bookland is a Book Store Ecommerce Website Template by DexignZone lorem ipsum dolor sit</p>
							<div class="dz-social-icon style-1">
								<ul>
									<li><a href="https://www.facebook.com/dexignzone" target="_blank" ><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCGL8V6uxNNMRrk3oZfVct1g" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
									<li><a href="https://www.linkedin.com/showcase/3686700/admin/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
									<li><a href="https://www.instagram.com/website_templates__/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.2s">
						<div class="widget widget_services">
							<h5 class="footer-title">Our Links</h5>
							<ul>
								<li><a href="about-us.html">About us</a></li>
								<li><a href="contact-us.html">Contact us</a></li>
								<li><a href="privacy-policy.html">Privacy Policy</a></li>
								<li><a href="pricing.html">Pricing Table</a></li>
								<li><a href="faq.html">FAQ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.3s">
						<div class="widget widget_services">
							<h5 class="footer-title">Bookland ?</h5>
							<ul>
								<li><a href="index.html">Bookland</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="books-detail.html">Book Details</a></li>
								<li><a href="blog-detail.html">Blog Details</a></li>
								<li><a href="books-grid-view.html">Shop</a></li>
							</ul>   
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 wow fadeInUp" data-wow-delay="0.4s">
						<div class="widget widget_services">
							<h5 class="footer-title">Resources</h5>
							<ul>
								<li><a href="services.html">Download</a></li>
								<li><a href="help-desk.html">Help Center</a></li>
								<li><a href="shop-cart.html">Shop Cart</a></li>
								<li><a href="shop-login.html">Login</a></li>
								<li><a href="about-us.html">Partner</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
						<div class="widget widget_getintuch">
							<h5 class="footer-title">Get in Touch With Us</h5>
							<ul>
								<li>
									<i class="flaticon-placeholder"></i>
									<span>832  Thompson Drive, San Fransisco CA 94107,US</span>
								</li>
								<li>
									<i class="flaticon-phone"></i>
									<span>+123 345123 556<br>
									+123 345123 556</span>
								</li>
								<li>
									<i class="flaticon-email"></i> 
									<span>support@bookland.id<br>
									info@bookland.id</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Top End -->
		
		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row fb-inner">
					<div class="col-lg-6 col-md-12 text-start"> 
						<p class="copyright-text">Bookland Book Store Ecommerce Website - © 2022 All Rights Reserved</p>
					</div>
					<div class="col-lg-6 col-md-12 text-end"> 
						<p>Made with <span class="heart"></span> by <a href="https://dexignzone.com/">DexignZone</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->
		
	</footer>
	<!-- Footer End -->
	
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
<script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->
<script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
<script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
<script src="js/dz.ajax.js"></script><!-- AJAX -->
<script src="js/custom.js"></script><!-- CUSTOM JS -->
</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2023 09:39:54 GMT -->
</html>