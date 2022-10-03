<?php
    $conn = new mysqli("localhost", "root", "", "tkj");

    if (isset($_POST['delImage'])) {
        $id = $conn->real_escape_string($_POST['id']);
        $conn->query("DELETE FROM photos WHERE id='$id'");
        exit('success');
    }

    if (isset($_POST['getImages'])) {
        $start = $conn->real_escape_string($_POST['start']);
        $sql = $conn->query("SELECT id, path FROM photos ORDER BY id DESC LIMIT $start, 8");
        $response = array();
        while ($data = $sql->fetch_assoc())
            $response[] = array("path" => $data['path'], "id" => $data['id']);

        exit(json_encode(array("images" => $response)));
    }

    if (isset($_FILES['attachments'])) {
        $msg = "";
        $targetFile = time() . basename($_FILES['attachments']['name'][0]);

        if (file_exists($targetFile))
            $msg = array("status" => 0, "msg" => "File already exists!");
        else if (move_uploaded_file($_FILES['attachments']['tmp_name'][0], "uploads/" . $targetFile)) {
            $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => "uploads/" . $targetFile);

            $conn->query("INSERT INTO photos (path, uploadedOn) VALUES ('$targetFile', NOW())");
        }

        exit(json_encode($msg));
    }

    $sql = $conn->query("SELECT id FROM photos");
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
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="assets/css/Galeri.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">smeanbtl@yahoo.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> 0274-367156
        <i class="bi bi-clock-history"><span class="ml-3" id="jam" style="font-size:24"></span></i>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://twitter.com/skansaba_id" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://id-id.facebook.com/smknegeri1bantul/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/smkn1bantul/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UCQgXA3YAufCRhmBVXjNZisw" target="_blank" class="youtube"><i class="bi bi-youtube"></i></i></a>
        <a href="https://www.tiktok.com/@skansaba.id" target="_blank" class="linkedin"><i class="bi bi-tiktok"></i></i></a>
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
              <li><a class="" href="Prestasi">Prestasi</a></li>
              <li><a class="active" href="galeri">Galeri</a></li>
              <li><a class="" href="Pembelajaran">Pembelajaran</a></li>
            </ul>
          <li class="dropdown"><a href="#"><span>Data TKJ</span> <i class="bi bi-chevron-down"></i></a>
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
        <h2>Galeri</h2>
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
             <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur.</p>
   </div>
  </section>

 


  <div class="container mt-1" id="uploadedFiles">
            <div class="row">
                <!-- <div class="col-md-9  myImg"></div> -->
            </div>
        </div>

		<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="js/vendor/jquery.ui.widget.js" type="text/javascript"></script>
		<script src="js/jquery.iframe-transport.js" type="text/javascript"></script>
		<script src="js/jquery.fileupload.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                getImages(0, <?php echo $numRows ?>);
            });

            function getImages(start, max) {
                if (start > max)
                    return;

                $.ajax({
                    url: 'galeri.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        getImages: 1,
                        start: start
                    }, success: function (response) {
                        for (var i=0; i < response.images.length; i++)
                            addImage("assets/admin/uploads/" + response.images[i].path, response.images[i].id);

                        getImages((start+8), max);
                    }
                });
            }

            

            $(function () {
               var files = $("#files");

               $("#fileupload").fileupload({
                   url: 'galeri.php',
                   dropZone: '#dropZone',
                   dataType: 'json',
                   autoUpload: false
               }).on('fileuploadadd', function (e, data) {
                   var fileTypeAllowed = /.\.(gif|jpg|png|jpeg)$/i;
                   var fileName = data.originalFiles[0]['name'];
                   var fileSize = data.originalFiles[0]['size'];

                   if (!fileTypeAllowed.test(fileName))
                        $("#error").html('Only images are allowed!');
                   else if (fileSize > 500000)
                       $("#error").html('Your file is too big! Max allowed size is: 500KB');
                   else {
                       $("#error").html("");
                       data.submit();
                   }
               }).on('fileuploaddone', function(e, data) {
                    var status = data.jqXHR.responseJSON.status;
                    var msg = data.jqXHR.responseJSON.msg;

                    if (status == 1) {
                        var path = data.jqXHR.responseJSON.path;
                        addImage(path, 0);
                    } else
                        $("#error").html(msg);
               }).on('fileuploadprogressall', function(e,data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $("#progress").html("Completed: " + progress + "%");
               });
            });

            function addImage(path, id) {
                if ($("#uploadedFiles").find('.row:last').find('.myImg').length === 4)
                    $("#uploadedFiles").append('<div class="row"></div>');


                $("#uploadedFiles").find('.row:last').append('<div id="img_'+id+'" class="col-md-3 mt-3 myImg" onclick="delImg('+id+')"><img src="'+path+'" /></div>');
            }
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

  </main><!-- End #main -->


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
  <script src="app.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="jam.js"></script>


  <script type="text/javascript" src="assets/js/jam.js">
        
    </script>
    
</body>

</html>