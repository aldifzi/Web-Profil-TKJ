<?php 

require_once 'koneksi.php';
if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM tbl_guru WHERE id = $id");

$row = mysqli_fetch_assoc($query);
$aktif = 'siswa';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $row['nama'] ?></title>
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
  <link rel="stylesheet" href="resources/datatables/datatables.min.css">
  <link rel="stylesheet" href="resources/datatables/datatables.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/DataSiswa.css" rel="stylesheet">


</head>

<body  class="selection:bg-slate-600 selection:text-white">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">smeanbtl@yahoo.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0274-367156
        <span class="ml-3" id="jam" style="font-size:24"></span>
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
          <li class="dropdown"><a class="" href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="" href="visiMisi">Visi dan Misi</a></li>
              <li><a class="" href="Prestasi">Prestasi</a></li>
              <li><a class="" href="galeri">Galeri</a></li>
              <li><a class="" href="Pembelajaran">Pembelajaran</a></li>
            </ul>
          <li class="dropdown"><a class="active" href="#"><span>Data TKJ</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="" href="datasiswa">Data Siswa</a></li>
              <li><a class="" href="dataguru">Data Guru</a></li>
            </ul>
          <li><a class="" href="berita.php">Berita</a></li>
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
        <h2><?= $row['nama'] ?></h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Detail Guru</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <main>
  <div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Detail Guru - <b><?= $row['nama'] ?></b>
				</div>
				<table class="table table-stripped">
							<tr>
								<td width="225px"><b>Nama</b></td>
								<td>:</td>
								<td><?= $row['nama'] ?></td>
							</tr>
							<tr>
								<td><b>NIP</b></td>
								<td>:</td>
								<td><?= $row['nip'] ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td>:</td>
								<td>
									<?= $row['jenis_kelamin'] == 'L' ? 'Laki Laki' : '' ?>
									<?= $row['jenis_kelamin'] == 'P' ? 'Perempuan' : '' ?>
								</td>
							</tr>
							<tr>
								<td><b>No Handphone</b></td>
								<td>:</td>
								<td><?= $row['no_hp'] ?></td>
							</tr>
							<tr>
								<td><b>Tempat Tanggal Lahir</b></td>
								<td>:</td>
								<td><?= $row['tempat_lahir'] ?>, <?= $row['tanggal_lahir'] ?></td>
							</tr>
							<tr>
								<td><b>Mata Pelajaran</b></td>
								<td>:</td>
								<td><?= $row['mata_pelajaran'] ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td>:</td>
								<td><?= $row['alamat'] ?></td>
							</tr>
							<tr>
								<td><b>Foto</b></td>
								<td>:</td>
								<td><img src="images/guru/<?= $row['foto'] ?>" alt="<?= $row['nama'] ?>" width="25%" class="img-thumbnail"></td>
							</tr>
							<tr>
								<td><b></td>
								<td></td>
								<td><a href="dataguru" class="btn btn-secondary btn-sm">Kembali</a></td>
							</tr>
						</table>
			</div>
			
		</div>
</main>
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
              <a href="https://twitter.com/skansaba_id" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://id-id.facebook.com/smknegeri1bantul/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/smkn1bantul/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCQgXA3YAufCRhmBVXjNZisw" target="_blank" class="youtube"><i class="bi bi-youtube"></i></i></a>
              <a href="https://www.tiktok.com/@skansaba.id" target="_blank" class="linkedin"><i class="bi bi-tiktok"></i></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.smkn1bantul.sch.id/" target="_blank" >SMK N1 Bantul</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://skansaba.id/login/index.php" target="_blank" >Elerning</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://policies.google.com/terms?hl=en-US" target="_blank" >Terms of
                  service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="assets//admin/index.php">Admin</a></li>
              <li><i class="bx bx-chevron-right"></i> <a
                  href="https://www.google.com/intl/id/policies/privacy/archive/20160325/" target="_blank" >Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Anggota Pembuat</h4>
            <ul>
              <li><i class="bx bx-chevron-right"><a href="#"></i>Fadlan Buwono Mukti</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/aldyfzi_/">Aldi Fauzi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.instagram.com/dnkwy_/">Denok Wahyuni</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Arul</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ridho</a></li>
            </ul>
          </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Kata Pengantar</h4>
            <p>WebSide ini di buat sepenuh hati oleh kelompok TKJ 
              yang beranggotakan 5 orang yaitu : 1.Fadlan Buwono Mukti,2.Aldi fauzi,3.Denok Wahyuni,4.Arul,5.Ridho Yang berasal dari sekolah SMK N1 Bantul dengan jurusan XI RPL1.
              Web ini di buat untuk menyelesaikan tugas project yang di berikan oleh guru jurusan RPL.Web ini akan di jadikan nilai di semua pelajaran produktif.
              Dengan webside ini semoga dapat mengangkat nama sekolah agar di lirik oleh dunia kerja.
              Dan Terimakasih kami ucapkan untuk guru produktif TKJ yang telah membantu kami dalam pembuatan webside ini</p>

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
  <script src="resources/datatables/datatables.min.js"></script>
	<script src="resources/datatables/datatable.js"></script>
  <script src="resources/js/jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="jam.js"></script>


<script type="text/javascript" src="assets/js/jam.js">
      
  </script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
    
</body>
</html>