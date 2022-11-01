<?php
$page = 'galeri';
?>
<?php
$conn = new mysqli("localhost", "root", "", "tkj");


$sql = $conn->query("SELECT * FROM photos");
$numRows = $sql->num_rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Galeri</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Logo-removebg-preview.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="assets/css/Galeri.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" rel="stylesheet">
<style>
.wrap {
      overflow: hidden;
      margin: 10px;
    }
    .box {
      float: left;
      position: relative;
      width: 20%;
      padding-bottom: 20%;
    }
    .boxInner {
      position: absolute;
      left: 10px;
      right: 10px;
      top: 10px;
      bottom: 10px;
      overflow: hidden;
    }
    .boxInner img {
      width: 100%;
    }
    .boxInner .titleBox {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      margin-bottom: -50px;
      background: #fff;
      background: rgba(0, 0, 0, 0.5);
      color: #FFF;
      padding: 10px;
      text-align: center;
      -webkit-transition: all 0.3s ease-out;
      -moz-transition: all 0.3s ease-out;
      -o-transition: all 0.3s ease-out;
      transition: all 0.3s ease-out;
    }
    section.no-touch .boxInner:hover .titleBox, section.touch .boxInner.touchFocus .titleBox {
      margin-bottom: 0;
    }
    @media only screen and (max-width : 480px) {
      /* Smartphone view: 1 tile */
      .box {
        width: 100%;
        padding-bottom: 100%;
      }
    }
    @media only screen and (max-width : 650px) and (min-width : 481px) {
      /* Tablet view: 2 tiles */
      .box {
        width: 50%;
        padding-bottom: 50%;
      }
    }
    @media only screen and (max-width : 1050px) and (min-width : 651px) {
      /* Small desktop / ipad view: 3 tiles */
      .box {
        width: 33.3%;
        padding-bottom: 33.3%;
      }
    }
    @media only screen and (max-width : 1290px) and (min-width : 1051px) {
      /* Medium desktop: 4 tiles */
      .box {
        width: 25%;
        padding-bottom: 25%;
      }
    }

</style>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include('assets/includes/header.php'); ?>
    <!-- End Header -->


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2><i class="fa fa-picture-o" aria-hidden="true"></i>
                    Galeri</h2>
                <ol>
                    <li><a href="index">Home</a></li>
                    <li>Galeri</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->


    <!-- ======= Isi Galeri ======= -->
    <section class="head">

        <div class="Judul">
            <h2>Galeri TKJ</h2>
        </div>
    </section>




    <!-- <div class="container-fluid" id="uploadedFiles">
        <div class="row">
        <?php
    require('koneksi.php');
    $query1 = mysqli_query($connection, "SELECT * FROM photos");
    while ($row = mysqli_fetch_array($query1)) {
    ?>
     <div class="container">
     <div class="card">
      <div class="card-image">
        <a href="assets/admin/uploads/<?= $row['path'] ?>" data-fancybox="gallery" >
          <img id="img" class="" src="assets/admin/uploads/<?= $row['path'] ?>" alt="Image Gallery">
        </a>
      </div>
    </div>
    </div>
        

    
        
      </div><!-- End testimonial item -->
    <!-- <?php }  ?>
        </div>
    </div> --> -->
    

    <section class="no-touch">

  <div class="wrap">
  <?php
    require('koneksi.php');
    $query1 = mysqli_query($connection, "SELECT * FROM photos");
    while ($row = mysqli_fetch_array($query1)) {
    ?>
    <div class="box">
      <div class="boxInner">
        <img src="assets/admin/uploads/<?= $row['path'] ?>" data-fancybox="gallery" />
    
      </div>
    </div>
    <?php }  ?>
  
   
    
    
    </div>
    
  </div>
  
</section>

    <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
    <script src="js/jquery.iframe-transport.js" type="text/javascript"></script>
    <script src="js/jquery.fileupload.js" type="text/javascript"></script>
    <script type="text/javascript">
    $('[data-fancybox="gallery"]').fancybox({
  buttons: [
    "slideShow",
    "thumbs",
    "zoom",
    "fullScreen",
    "share",
    "close"
  ],
  loop: false,
  protect: true
});

</script>
           


    </div>

    </div>
    <!-- END wrapper -->
  


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
    <script src="../plugins/switchery/switchery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <?php include('assets/includes/footer.php'); ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://kit.fontawesome.com/6f2ba42180.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <script src="jam.js"></script>


    <script type="text/javascript" src="assets/js/jam.js">

    </script>

</body>

</html>