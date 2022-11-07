<?php
$page = 'prestasi';

?>
<?php 
session_start();
include('assets/includes/config.php');
$sqlslide = "select * from slideshow_banner";
include ('lang/config.php');
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prestasi</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.5/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/prestasi.css" rel="stylesheet">


</head>

<body class="selection:bg-slate-600 selection:text-white">


  <!-- ======= Header ======= -->
  <?php include('assets/includes/header.php'); ?>
  <!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><i class="fa fa-trophy" aria-hidden="true"></i>
          <?= $lang['prestasi'] ?></h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li><?= $lang['prestasi'] ?></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->



  <section class="light">
    <div class="container py-2">
      <?php
      include "koneksi.php";
      $result = mysqli_query($con, "SELECT * FROM tprestasi");
      while ($res = mysqli_fetch_array($result)) {
      ?>
        <article class="postcard light blue">
          <a class="postcard__img_link" href="#">
            <?php echo "<img class='postcard__img' src='assets/admin/image_prestasi/" . $res['gambar'] . "'"; ?>
          </a>
          <div class="postcard__text t-dark">
            <h1 class="postcard__title blue"><a href="#"><?= $res['nama_prestasi'] ?></a></h1>
            <div class="postcard__subtitle small">
              <time datetime="2020-05-25 12:00:00">
                <i class="fas fa-calendar-alt mr-2"></i><?= $res['tahun_prestasi'] ?>
              </time>
            </div>
            <div class="postcard__bar"></div>
            <div class="postcard__preview-txt">
              <p style="word-wrap: break word;"><?= $res['deskripsi'] ?></p>
            </div>
          </div>
        </article>
      <?php } ?>
    </div>
  </section>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- ======= Footer ======= -->
  <?php include('assets/includes/footer.php'); ?>
  <!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="pagShrink.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="resources/js/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="jam.js"></script>
  <script src="https://kit.fontawesome.com/6f2ba42180.js" crossorigin="anonymous"></script>

  <script type="text/javascript" src="assets/js/jam.js">

  </script>


  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.jqueryui.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
</body>

</html>