<?php
$page = 'visimisi';
session_start();
include('lang/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Visi dan Misi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo-removebg-preview.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/VisiMisi.css" rel="stylesheet">

</head>

<body class="selection:bg-slate-600 selection:text-white">


  <!-- ======= Header ======= -->
  <?php include('assets/includes/header.php'); ?>
  <!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><?= $lang['visi'] ?></h2>
        <ol>
          <li><a href="index">Home</a></li>
          <li><?= $lang['visi'] ?></li>
        </ol>
      </div>


    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Hero Visi Misi ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/foto11.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Visi Dan Misi TKJ <span>TKJ</span></h2>
              <p class="animate__animated animate__fadeInUp">membangun karakter siswa yang tangguh, berakhlak
                mulia,inofatif serta mampu melaksanakan hak dan kewajiban sebagai warga negara indonesia</p>
              <a href="#constructions" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pelajari
                Lebih Lanjut</a>
            </div>
          </div>
        </div>

    

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(ssets/img/foto12.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Visi Dan Misi TKJ</h2>
              <p class="animate__animated animate__fadeInUp">Menghasilkan Lulusan yang berkompeten, professional dan
                mampu bersaing di pasar tenaga kerja di bidang teknologi dan computer</p>
              <a href="#constructions" class="btn-get-started animate__animated animate__fadeInUp scrollto">Pelajari
                Lebih Lanjut</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero visi misi -->

  <main id="main">


    <!-- ======= Tujuan Visi Misi Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2> <?= $lang['tujuan']?></h2>
          <p> </p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/foto11.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">VISI</h4>
                    <p><?= $lang ['isivisi']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->




          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/foto12.jpg); "></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">MISI</h4>
                    <p><?= $lang ['isimisi']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->





        </div>

      </div>
    </section><!-- End Tujuan Visi Misi -->

    <!-- ======= Features Section ======= -->
    

    <!-- ======= Footer ======= -->
    <?php include('assets/includes/footer.php'); ?>
    <!-- End Footer -->

    <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
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