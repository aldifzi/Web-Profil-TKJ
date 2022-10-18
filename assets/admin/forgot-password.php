<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
  {
    $username=$_POST['username'];
    $email=$_POST['email'];
$password=md5($_POST['newpassword']);
        $query=mysqli_query($con,"select id from tbladmin where  AdminEmailId='$email' and AdminUserName='$username' ");
        
    $ret=mysqli_num_rows($query);
    if($ret>0){
      $query1=mysqli_query($con,"update tbladmin set AdminPassword='$password'  where  AdminEmailId='$email' && AdminUserName='$username' ");
       if($query1)
   {
echo "<script>alert('Password successfully changed');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

   }
     
    }
    else{
    
      echo "<script>alert('Invalid Details. Please try again.');</script>";
    }
  }

  ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="News Portal.">
        <meta name="author" content="PHPGurukul">


        <!-- App title -->
        <title>Forgot Password</title>

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
<script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
} 

</script>
    </head>


    <body class="">

        <!-- HOME -->
       
           
        <div class="container">
      <header>forgot password</header>
      <form action="" method="post">

                                    <div class="field email-field">
          <div class="input-field">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Username" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="field email-field">
          <div class="input-field">
                                                <input class="form-control" type="text" required="" name="email" placeholder="Email" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="field confirm-password">
          <div class="input-field">
                                               <input type="password" class="form-control" id="userpassword" name="confirmpassword" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <div class="field email-field">
          <div class="input-field">
                                               <input type="password" class="form-control" id="userpassword" name="newpassword" placeholder="New Password">
                                            </div>
                                        </div>
                                        <a href="../admin/index.php"><i class="mdi mdi-home"></i> Back Home</a>
                     
                                        <div class="input-field button">
          <input type="submit" name="submit" value="reset" />
        </div>
                                            </div>
                                        </div>

                                    </form>

                                   

                                </div>
                            </div>
                            <!-- end card-box-->


                    

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
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

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>