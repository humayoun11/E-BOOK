<?php
require 'connectdb.php';
?>



<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.php"> <h4>Rosella</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="page-register-action.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="User Name" name="signupname" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="signupemail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="signuppassword" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Contact" name="signupcontact" required>
                                    </div>
                                    <div class="form-group">
                                    <select name="signuprole" required>
      <?php
        $queryr= "select * from web_roles";
        $web_roles = mysqli_query($connectiondb,$queryr);
        if($web_roles){
          while( $row = mysqli_fetch_assoc($web_roles)){
              echo '<option value='.$row["role_id"].'>'.$row["role_name"].'</option>';
          }
       }
        ?>
      </select><br><br>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control">
                                    </div>
                                    <button class="btn login-form__btn submit w-100" name="signupsubmit">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="page-login.php" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





