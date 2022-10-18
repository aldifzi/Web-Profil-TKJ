<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
     $uname=$_POST['username'];
    $password=md5($_POST['password']);
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword,userType FROM tbladmin WHERE (AdminUserName='$uname' && AdminPassword='$password')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{

$_SESSION['login']=$_POST['username'];
$_SESSION['utype']=$num['userType'];
    echo "<script type='text/javascript'> document.location = 'dashboard'; </script>";
  }else{
echo "<script>alert('Invalid Details');</script>";
  }
 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- App title -->
        <title>Admin Panel</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/login.css" rel="stylesheet" type="text/css" />
        <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="">

        <!-- HOME -->
      <!--
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.php" class="text-success">
                                            <span><img src="../img/Logo-removebg-preview.png" alt="" height="56"></span>
                                        </a>
                                    </h2>
                                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                                </div>
                                <div class="account-content">
                                    <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off">
                                            </div>
                                        </div>
<a href="forgot-password"><i class="mdi mdi-lock"></i> Lupa Password?</a>
<hr>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control " type="password" name="password" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>


                     
                                        <div class="input-field button">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="login">Log In</button>
                                            </div>
                                        </div>

                                    </form>

                                    <div class="clearfix"></div>
<a href="../index"><i class="mdi mdi-home"></i> Kembali</a>
                                </div>
                            </div>
                            


                    

                        </div>
                      

                    </div>
                </div>
            </div>-->

            <div class="container">
      <header>login</header>
      <form action="" method="post">
        <div class="field email-field">
          <div class="input-field">
          <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off">
          </div>
          <span class="error email-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Please enter a valid email</p>
          </span>
        </div>
        
        <div class="field confirm-password">
          <div class="input-field">
          <input class="form-control " type="password" name="password" required="" placeholder="Password" autocomplete="off">
            <i class="bx bx-hide show-hide"></i>
          </div>
          <span class="error cPassword-error">
            <i class="bx bx-error-circle error-icon"></i>
            <p class="error-text">Password don't match</p>
          </span>
        </div>
        
<a href="forgot-password"><i class="mdi mdi-lock"></i> Lupa Password?</a>
        <div class="input-field button">
          <input type="submit" name="login" value="Submit Now" />
        </div>
      </form>
    </div>

    
         
          <!-- END HOME -->



         




        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>      
        <script src="https://kit.fontawesome.com/6f2ba42180.js" crossorigin="anonymous"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>