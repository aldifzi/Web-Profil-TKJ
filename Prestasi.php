<?php 
session_start();
include('assets/includes/config.php');
$sqlslide = "select * from slideshow_banner";
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
      <span class="self-center text-base font-semibold whitespace-nowrap" id="tkj">TEKNIK KOMPUTER JARINGAN <p class="text-xs font-light" id="tkj">SMK 1 BANTUL</p></span>
    </a>
    <!-- Uncomment below if you prefer to use an image logo -->


    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="" href="index">Home</a></li>
        <li class="dropdown"><a class="active" href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a class="" href="visiMisi">Visi dan Misi</a></li>
            <li><a class="active" href="Prestasi">Prestasi</a></li>
            <li><a class="" href="galeri">Galeri</a></li>
            <li><a class="" href="Pembelajaran">Pembelajaran</a></li>
          </ul>
        <li class="dropdown"><a href="#"><span>Data TKJ</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a class="" href="datasiswa.php">Data Siswa</a></li>
            <li><a class="" href="dataguru.html">Data Guru</a></li>
          </ul>
        <li><a class="" href="berita.php">Berita</a></li>
        <li><a class="" href="contact.html">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->

   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><i class="fa fa-trophy" aria-hidden="true"></i>
Prestasi</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>prestasi</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

 <!-- ======= Hero Slider Section ======= -->

 <!— Banner SlideShow nya —>
     <div id="dmbannerhead" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">

     </div>
		
	 <a class="left carousel-control" href="#dmbannerhead" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	 <a class="right carousel-control" href="#dmbannerhead" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
   </div>
   <!— /Banner Slideshow nya —><!-- End Hero Slider Section -->


  <!-- ======= Tabel ======= -->



  <div class="container my-5">
<div class="">
    <table  id="table1" class="table table-striped table-bordered" style="width:100%">
 <thead class="bg-light">
  <tr>
    <th class="px-5">Nama</th>
    <th>Tanggal</th>
    <TH>Kelas</TH>
    <TH>Hasil</TH>
    <th>Tingkat</th>
    <th>Jenis</th>
  </tr>
 </thead>
<tbody>
    <?php
 
    
 require('koneksi.php');
 $query1= mysqli_query($connection,"SELECT * FROM prestasi");

 
 while($row=mysqli_fetch_array($query1))
 {
    ?>

    <tr>
      <td><?php echo  $row['nama'];?></td>
      <td><?php echo  $row['tgl'];?></td>
      <td><?php echo  $row['kelas'];?></td>
      <td ><?php echo  $row['hasil'];?></td>
      <td ><?php echo  $row['tingkat'];?></td>
      <td ><?php echo  $row['jenis'];?></td>
      
    </tr>
    <?php }  ?>
</tbody>

        </table>
 </div>
<script></script>
 </div>
      
    <!-- End tabel Section -->

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
        
        Designed by Kelompok TKJ
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

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
  
<script>
    $(document).ready(function () {
        $('#table1').DataTable({
          responsive: true
        });
    });
</script>
</body>

</html>
