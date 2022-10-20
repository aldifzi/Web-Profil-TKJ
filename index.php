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

    </div>
  </section><!-- End Skil yang di kembangkan -->

  <!--berita-->

  <section id="berita" class="berita">
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
                                                              $pageno = 3;
                                                            }
                                                            $no_of_records_per_page = 1;
                                                            $offset = ($pageno - 3) * $no_of_records_per_page;


                                                            $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                                                            $result = mysqli_query($con, $total_pages_sql);
                                                            $total_rows = mysqli_fetch_array($result)[0];
                                                            $total_pages = ceil($total_rows / $no_of_records_per_page);


                                                            $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.postedBy,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                                                            while ($row = mysqli_fetch_array($query)) {
                                                            ?>
                                                            <div class="pt-7 pl-6 drop-shadow-lg bg-slate-50">
              <p class="font-sans">
                <?php echo htmlentities($row['posttitle']); ?>
              </p>
            
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  </main><!-- End #main -->

  <!-- ======= Pesan Guru Produktif ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pesan Guru Produktif</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/team/team-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/team/team-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/team/team-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
                labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->



        </div>
        <div class="swiper-pagination"></div>
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