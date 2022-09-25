<?php 
session_start();
include('assets/includes/config.php');

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


    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/DataSiswa.css" rel="stylesheet">
  </head>

  <body class="selection:bg-slate-600 selection:text-white">

    <!-- Navigation -->
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">smeanbtl@yahoo.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0274-367156
        <i class="bi bi-clock-history"><span class="ml-3" id="jam" style="font-size:24"></span></i>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://id-id.facebook.com/smknegeri1bantul/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
    <a class="navbar-brand logo me-auto flex" href="#">
        <img src="assets/img/Logo-removebg-preview.png" alt=""   class="h-10 mr-3" width="51" height="70">
        <span class="self-center text-base font-semibold whitespace-nowrap">TEKNIK KOMPUTER JARINGAN <p class="text-xs font-light">SMK 1 BANTUL</p></span>
      </a>
      <!-- Uncomment below if you prefer to use an image logo -->


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="index">Home</a></li>
          <li class="dropdown"><a class="" href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="" href="visiMisi">Visi dan Misi</a></li>
              <li><a class="" href="Prestasi">Prestasi</a></li>
              <li><a class="" href="galeri">Galeri</a></li>
              <li><a class="" href="Pembelajaran">Pembelajaran</a></li>
            </ul>
          <li class="dropdown"><a class="" href="#"><span>Data TKJ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="" href="datasiswa">Data Siswa</a></li>
              <li><a class="" href="dataguru">Data Guru</a></li>
            </ul>
          <li><a class="active" href="berita.php">Berita</a></li>
          <li><a class="" href="contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


   
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Berita</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Berita</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->


    <!-- Page Content -->
    
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="p-6 mt-4 max-w-fit bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
 <img class="rounded-t-lg" src="assets/admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
            <div class="card-body">
              <h2 class="mb-2 mt-4 text-2xl font-bold tracking-tight text-gray-900 "><?php echo htmlentities($row['posttitle']);?></h2>
                 <p><!--category-->
 <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
<!--Subcategory--->
  <a class="badge bg-secondary text-decoration-none link-light"  style="color:#fff"><?php echo htmlentities($row['subcategory']);?></a></p>
       
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="mt-3 inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-900 focus:ring-4 focus:outline-none focus:ring-blue-300 ">Read More &rarr;</a>
            </div>
            <div class="pt-3 mt-6 px-6 border-t border-gray-300 text-gray-600">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>
       

      

          <!-- Pagination -->


    <ul class="flex items-center space-x-1 mx-5 my-4 sm:flex hidden">
        <li class="page-item"><a href="?pageno=1"  class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="px-4 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="px-4 py-2  text-gray-700 bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md">Last</a></li>
    </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <?php include('assets/includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>SMK N1 Bantul</h3>
              <p>
                Jl. Parangtritis No.KM.11, Dukuh, Sabdodadi, Kec. Bantul, Kabupaten Bantul<br>
                Daerah Istimewa Yogyakarta 55715<br><br>
                <strong>Phone:</strong> 0274-367156 <br>
                <strong>Email:</strong> smeanbtl@yahoo.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.smkn1bantul.sch.id/">SMK N1 Bantul</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://skansaba.id/login/index.php">Elerning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://policies.google.com/terms?hl=en-US">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="form.html">Admin</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.google.com/intl/id/policies/privacy/archive/20160325/">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Anggota Pembuat</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Fadlan Buwono Mukti</li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Aldi Fauzi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Denok Wahyuni</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Arul</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ridho</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis dolorum fugiat numquam minus tempora incidunt quibusdam. Aperiam rerum eligendi ratione ullam quas odit nobis, laborum omnis expedita exercitationem illum vitae excepturi error quisquam quod neque. Minus, consequuntur fugit nam obcaecati, eveniet deserunt commodi voluptatem earum dolore deleniti praesentium. Dignissimos, libero odio! Omnis natus beatae eveniet distinctio repudiandae voluptatibus perspiciatis iste nihil sequi, accusamus incidunt cum animi molestiae nobis, porro ratione quidem voluptatem neque enim nulla, obcaecati inventore ad repellendus. Quibusdam voluptatibus incidunt velit iure illum voluptatem exercitationem id distinctio, esse laborum eum quasi laudantium possimus voluptates provident est ipsa? Officia.</p>
            

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>bootstrap</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/day-multipurpose-html-template-for-free/ -->
        Designed by Kelompok TKJ
      </div>
    </div>
  </footer><!-- End Footer -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="jam.js"></script>


<script type="text/javascript" src="assets/js/jam.js">
      
  </script>
 
</head>
  </body>

</html>