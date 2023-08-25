<?php
require 'connectdb.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<?php require 'stylee.php';?>

<style>
    .container{
        background-color: white !important;
    }
       
</style>
<body>
    <div class="container ">
        <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-2">Sign up</p>

                <form class="mx-1 mx-md-4" method="POST" action="signupaction.php" enctype="multipart/form-data">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      <input type="text" name="signupname" class="form-control" required />
                    </div>
                  </div>
                  <!-- <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Your last Name</label>
                      <input type="text" name="lname" class="form-control" required/>
                    </div>
                  </div> -->

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="email" name="signupemail" class="form-control" required/>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Password</label>
                      <input type="password" name="signuppassword" class="form-control" required/>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Contact #</label>
                      <input type="number" name="signupcontact" class="form-control" required />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">Your Picture</label>
                      <input type="file" name="signupimg" class="form-control" />
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                  <label class="form-label" for="form3Example4cd">Your Role</label><br><br>
                  <select name="signuprole" required>
      <?php
        $queryr= "select * from web_roles";
        $roledata = mysqli_query($connectiondb,$queryr);
        if($roledata){
          while( $row = mysqli_fetch_assoc($roledata)){
              echo '<option value='.$row["role_id"].'>'.$row["role_name"].'</option>';
          }
       }
        ?>
      </select><br><br>

                  </div>
                  



                  <center><p class="mt-2">have an account ? <a href="sigin.php"><b>SignIn</b></a></p></center>
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" name="signupsubmit" class="btn btn-primary btn-sm">Register</button>
                      <br>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="img/book.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>