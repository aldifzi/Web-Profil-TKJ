<?php
$page = 'galeri';
?>
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

  <!-- ======= Header ======= -->
  <?php include('assets/includes/header.php');?>
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
  <script src="https://kit.fontawesome.com/6f2ba42180.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="jam.js"></script>


  <script type="text/javascript" src="assets/js/jam.js">
        
    </script>
    
</body>

</html>