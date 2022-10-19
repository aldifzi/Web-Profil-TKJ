<?php 

require_once 'koneksi.php';
$query = mysqli_query($connection, "SELECT id, nama, alamat, foto, no_hp, mata_pelajaran FROM tbl_guru");
$aktif = 'guru';
$no = 1;
$page = 'dataguru';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Guru</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo-removebg-preview.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


  <!-- Template Main CSS File -->
  <link href="assets/css/DataSiswa.css" rel="stylesheet">

  <!-- =======================================================
 
  ======================================================== -->
</head>

<body class="selection:bg-slate-600 selection:text-white">

  <!-- ======= Header ======= -->
  <?php include('assets/includes/header.php');?>
  <!-- End Header -->


  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Data Guru</h2>
        <ol>
          <li><a href="index">Home</a></li>
          <li>Data Guru</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Guru Produktif ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <br>
        <span>Data Guru Produktif</span>
        <h2> Data Guru Produktif </h2>

      </div>
      <?php while($row = mysqli_fetch_assoc($query)) : ?>
      <div class="container">
      <div class="row justify-content-center">
      <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_advisor_details_info">
                <h6><?= $row['nama'] ?></h6>
                <a href="detail-guru?id=<?= $row['id'] ?>"><button id="bguru" class="bg-red-500  text-white font-bold py-1 mt-2 px-2 rounded">Detail Guru</button></a>
              </div>
            </div>
          </div>
      </div>
      </div>
        </div>
        <?php endwhile; ?>
       

    </div>
  </section><!-- End Team Section -->

   <!-- ======= Footer ======= -->
   <?php include('assets/includes/footer.php');?>
   <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="jam.js"></script>


  <script type="text/javascript" src="assets/js/jam.js">
        
    </script>
</body>

</html>