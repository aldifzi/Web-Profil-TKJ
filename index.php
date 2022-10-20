<?php
session_start();
include('assets/includes/config.php');
$page = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TKJ SMK N1 BANTUL</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/index.css" rel="stylesheet">



</head>

<body class="selection:bg-slate-600 selection:text-white">

  <!-- ======= Top Bar ======= -->


  <!-- ======= Header ======= -->
  <?php include('assets/includes/header.php'); ?>
  <!-- End Header -->


  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner" id="top">
    <video autoplay muted loop id="bg-video">
      <source src="assets/img/Video/vidio3.mp4" type="">
    </video>

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Kuasai teknologi, maka dunia akan menyambut kita dengan bangga</h6>
        <h2 class="">
          <span class="box"></span><span class='hi'>SELAMAT DATANG DI <br><span class="kelas">Teknik Komputer Jaringan</span> </span>
          <hr><span class="text"></span><span class="cursor">_</span>
        </h2>
        <div class="main-button scroll-to-section">
          <a href="#about" class=" animate__animated animate__fadeInUp scrollto">PELAJARI LEBIH
            LANJUT</a>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <!--<main id="main">

  <section id="recent-blog-posts" class="recent-blog-posts">
  
    <div class="" data-aos="fade-up">
    
      <div class=" section-title">
        <h2>Sekilas Berita</h2>
      </div>
      <?php
      if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
      } else {
        $pageno = 1;
      }
      $no_of_records_per_page = 1;
      $offset = ($pageno - 1) * $no_of_records_per_page;


      $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
      $result = mysqli_query($con, $total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);


      $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.postedBy,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
      while ($row = mysqli_fetch_array($query)) {
      ?>
      <div class="owl-carousel">

        <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <div class="post-item card mb-4 shadow-sm position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="assets/admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" class="img-fluid" alt="">
              <span class="post-date"><?php echo htmlentities($row['postingdate']); ?></span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title"><?php echo htmlentities($row['posttitle']); ?></h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2"><?php echo htmlentities($row['postedBy']) ?></span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2"><?php echo htmlentities($row['category']) ?></span>
                </div>
              </div>

              <hr>

              <a href="news-details?nid=<?php echo htmlentities($row['pid']) ?>" class="readmore stretched-link"><span>Read More</span><i
                  class="bi bi-arrow-right"></i></a>

            </div>
          </div>


        </div>

        <?php } ?>

        

      </div>
-->
  </div>
  </div>
  </section>
  <!-- End Tentang berita -->
  <!-- ======= Penjelasan TKJ ======= -->
  <section id="about" class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 gambarcon" data-aos="fade-left">
          <img src="assets/img/TKJ-1.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>Pengertian <b>TKJ</b> (Teknik Komputer dan Jaringan)</h3>
          <p class="fst-italic mt-2">
            TKJ (Teknik Komputer dan Jaringan) adalah ilmu berbasis Teknologi Informasi dan Komunikasi terkait
            kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan
            pengoperasian perangkat lunak, dan internet. Teknik komputer, dan jaringan juga membutuhkan pemahaman di
            bidang teknik listrik, dan ilmu komputer sehingga mampu mengembangkan, dan mengintegrasikan perangkat
            lunak, dan perangkat keras.
          </p>
          <h3 class="mt-4">Pekerjaan Yang Cocok Dengan Jurusan <b>TKJ</b> </h3>
          <ul>
            <li><i class="bi bi-check-circle"></i> Jaringan nirkabel</li>
            <li><i class="bi bi-check-circle"></i> Administrator server</li>
            <li><i class="bi bi-check-circle"></i> Integrator komputer</li>
            <li><i class="bi bi-check-circle"></i> Integrator VOIP</li>
            <li><i class="bi bi-check-circle"></i> Administrator Linux</li>
          </ul>

        </div>
      </div>

    </div>
  </section><!-- End Pengertian TKJ -->

  <!-- ======= Sponsor TKJ ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">

      <div class="row d-flex align-items-center">

        <div class="col-lg-2 col-md-4 col-6">
          <a href="https://www.telkom.co.id/sites"><img src="assets/img/Sponsor/LogoTelkom-removebg-preview.png" class="img-fluid" alt=""></a>

        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/LogoTenda.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/TPLINK_Logo_2.svg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/intel-logo-baru-4-removebg-preview.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/LogoDCi.png" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6">
          <img src="assets/img/Sponsor/Asus-Logo.png" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Sponsor TKJ -->

  <!-- ======= Data TKJ ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="section-title">
        <h2>Data Tentang TKJ</h2>
      </div>

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Kelas</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="210" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Siswa</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Guru Produktif</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
          <p>Jumlah Lab</p>
        </div>

      </div>

    </div>

    </div>
  </section><!-- End Data TKJ -->

  <!-- ======= Skills yang di kembangkan ======= -->
  <section id="skills" class="skills bg-gray-100">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Skills</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Hadrware Komputer <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Software Computer <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Jaringan<i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">Ciso<i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Microtik<i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Server<i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

        </div>

      </div>
  </section>
  <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 200" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
        <stop stop-color="rgba(229.553, 229.553, 229.553, 1)" offset="0%"></stop>
        <stop stop-color="rgba(218.169, 218.169, 218.169, 1)" offset="100%"></stop>
      </linearGradient>
    </defs>
    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,40L48,53.3C96,67,192,93,288,93.3C384,93,480,67,576,60C672,53,768,67,864,73.3C960,80,1056,80,1152,66.7C1248,53,1344,27,1440,30C1536,33,1632,67,1728,90C1824,113,1920,127,2016,110C2112,93,2208,47,2304,40C2400,33,2496,67,2592,83.3C2688,100,2784,100,2880,103.3C2976,107,3072,113,3168,116.7C3264,120,3360,120,3456,126.7C3552,133,3648,147,3744,156.7C3840,167,3936,173,4032,160C4128,147,4224,113,4320,110C4416,107,4512,133,4608,120C4704,107,4800,53,4896,33.3C4992,13,5088,27,5184,56.7C5280,87,5376,133,5472,140C5568,147,5664,113,5760,113.3C5856,113,5952,147,6048,160C6144,173,6240,167,6336,143.3C6432,120,6528,80,6624,63.3C6720,47,6816,53,6864,56.7L6912,60L6912,200L6864,200C6816,200,6720,200,6624,200C6528,200,6432,200,6336,200C6240,200,6144,200,6048,200C5952,200,5856,200,5760,200C5664,200,5568,200,5472,200C5376,200,5280,200,5184,200C5088,200,4992,200,4896,200C4800,200,4704,200,4608,200C4512,200,4416,200,4320,200C4224,200,4128,200,4032,200C3936,200,3840,200,3744,200C3648,200,3552,200,3456,200C3360,200,3264,200,3168,200C3072,200,2976,200,2880,200C2784,200,2688,200,2592,200C2496,200,2400,200,2304,200C2208,200,2112,200,2016,200C1920,200,1824,200,1728,200C1632,200,1536,200,1440,200C1344,200,1248,200,1152,200C1056,200,960,200,864,200C768,200,672,200,576,200C480,200,384,200,288,200C192,200,96,200,48,200L0,200Z"></path>
    <defs>
      <linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0">
        <stop stop-color="rgba(243, 244, 246, 1)" offset="0%"></stop>
        <stop stop-color="rgba(243, 244, 246, 1)" offset="100%"></stop>
      </linearGradient>
    </defs>
    <path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,180L48,176.7C96,173,192,167,288,136.7C384,107,480,53,576,40C672,27,768,53,864,63.3C960,73,1056,67,1152,60C1248,53,1344,47,1440,60C1536,73,1632,107,1728,116.7C1824,127,1920,113,2016,93.3C2112,73,2208,47,2304,50C2400,53,2496,87,2592,93.3C2688,100,2784,80,2880,86.7C2976,93,3072,127,3168,120C3264,113,3360,67,3456,66.7C3552,67,3648,113,3744,113.3C3840,113,3936,67,4032,56.7C4128,47,4224,73,4320,93.3C4416,113,4512,127,4608,140C4704,153,4800,167,4896,163.3C4992,160,5088,140,5184,113.3C5280,87,5376,53,5472,43.3C5568,33,5664,47,5760,53.3C5856,60,5952,60,6048,50C6144,40,6240,20,6336,40C6432,60,6528,120,6624,140C6720,160,6816,140,6864,130L6912,120L6912,200L6864,200C6816,200,6720,200,6624,200C6528,200,6432,200,6336,200C6240,200,6144,200,6048,200C5952,200,5856,200,5760,200C5664,200,5568,200,5472,200C5376,200,5280,200,5184,200C5088,200,4992,200,4896,200C4800,200,4704,200,4608,200C4512,200,4416,200,4320,200C4224,200,4128,200,4032,200C3936,200,3840,200,3744,200C3648,200,3552,200,3456,200C3360,200,3264,200,3168,200C3072,200,2976,200,2880,200C2784,200,2688,200,2592,200C2496,200,2400,200,2304,200C2208,200,2112,200,2016,200C1920,200,1824,200,1728,200C1632,200,1536,200,1440,200C1344,200,1248,200,1152,200C1056,200,960,200,864,200C768,200,672,200,576,200C480,200,384,200,288,200C192,200,96,200,48,200L0,200Z"></path>
  </svg>

  <!-- End Skil yang di kembangkan -->

  <!--berita-->

  <section id="berita" class="berita mt-1">
    <div class="container">
      <div class="section-title">
        <h2>Berita</h2>
      </div>

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 gambarcon" data-aos="fade-left">
          <img src="assets/img/berita.png" style="width: 400px;" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">

          <?php
          if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
          } else {
            $pageno = 1;
          }
          $no_of_records_per_page = 5;
          $offset = ($pageno - 1) * $no_of_records_per_page;


          $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
          $result = mysqli_query($con, $total_pages_sql);
          $total_rows = mysqli_fetch_array($result)[0];
          $total_pages = ceil($total_rows / $no_of_records_per_page);


          $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
          while ($row = mysqli_fetch_array($query)) {
          ?>

            <div class="p-2 max-w-full px-8 mt-4  bg-white rounded-lg border border-gray-200 shadow-md">
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>">
                <p class="font-semibold"><?php echo htmlentities($row['posttitle']); ?></p>
              </a>

            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Pesan Guru Produktif ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Daftar Siswa</h2>
        <p></p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php


          require('koneksi.php');
          $query1 = mysqli_query($connection, "SELECT * FROM user LIMIT 30 OFFSET 95");


          while ($row = mysqli_fetch_array($query1)) {
          ?>
            <div class="swiper-slide">

              <div class="testimonial-item">
                <img src="assets/img/no-image.jpg" class="testimonial-img" alt="">
                <h3><?= $row['name'] ?></h3>
                <h4><?= $row['kelas'] ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $row['NIS'] ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          <?php }  ?>



        </div>
        <div class="swiper-pagination"></div>
        <a href="datasiswa">
  <button class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 text-center border-b-4 border-red-700 hover:border-red-500 rounded">
  Lebih Banyak
</button></a>
      </div>
      

    </div>
  </section><!-- End Testimonials Section -->




  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <?php include('assets/includes/footer.php'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/TextPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/EasePack.min.js"></script>
  <script src="resources/js/jquery.min.js"></script>
  <script src="app.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      })
    })
  </script>

</body>

</html>