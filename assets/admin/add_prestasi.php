<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    $status = 1;
    if (isset($_POST['Submit'])) {
        $nama_prestasi = mysqli_real_escape_string($con, $_POST['nama_prestasi']);
        $tingkat_prestasi = mysqli_real_escape_string($con, $_POST['tingkat_prestasi']);
        $tahun_prestasi = mysqli_real_escape_string($con, $_POST['tahun_prestasi']);
        $deskrip = mysqli_real_escape_string($con, $_POST['deskrip']);
        $juara = mysqli_real_escape_string($con, $_POST['juara']);
        $filename = $_FILES['gambar']['name'];

        // CEK DATA TIDAK BOLEH KOSONG
        // JIKA SEMUANYA TIDAK KOSONG
        $filetmpname = $_FILES['gambar']['tmp_name'];

        // FOLDER DIMANA GAMBAR AKAN DI SIMPAN
        $folder = 'image_prestasi/';
        // GAMBAR DI SIMPAN KE DALAM FOLDER
        move_uploaded_file($filetmpname, $folder . $filename);

        // MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
        $result = mysqli_query($con, "INSERT INTO tprestasi(nama_prestasi,deskripsi,tingkat_prestasi,tahun_prestasi,juara,gambar,is_active) VALUES('$nama_prestasi','$deskrip','$tingkat_prestasi', '$tahun_prestasi','$juara','$filename','$status')");

        if ($result) {
            echo "
    <script>
        alert('Berhasil Tambah Data Guru');
        document.location='add_prestasi.php';    
    </script>";
        } else {
            echo "
    <script>
        alert('GagalTambah Data Guru');
        document.location='add_prestasi.php';    
    </script>";
        }
    }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Newsportal | Add Category</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include('includes/topheader.php'); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/leftsidebar.php'); ?>
            <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Tambah Data Prestasi</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#">Tambah Data Prestasi</a>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>



                        <div class="container mt-3">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" name="form1" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama Prestasi</label>
                                                    <input type="text" class="form-control" id="nama_prestasi" placeholder="Nama Prestasi" autocomplete="off" required="required" name="nama_prestasi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nip">Tingkat Prestasi</label>
                                                    <input type="text" class="form-control" id="tingkat_prestasi" placeholder="Tingkat Prestasi" autocomplete="off" required="required" name="tingkat_prestasi">
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="mata_pelajaran">Tahun Prestasi</label>
                                                        <input type="date" class="form-control" id="tahun_prestasi" placeholder="Tahun Prestasi" autocomplete="off" required="required" name="tahun_prestasi">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="mata_pelajaran">Mendapat juara ke</label>
                                                        <input type="text" class="form-control" id="juara" placeholder="Mendapat juara ke" autocomplete="off" required="required" name="juara">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">Deskripsi</label>
                                                    <textarea class="form-control" name="deskrip" placeholder="Deskripsi tentang Prestasi" rows="3"></textarea>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="foto">Foto</label>
                                                    <input type="file" class="form-control-file" id="gambar" autocomplete="off" required="required" name="gambar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-primary" name="Submit" value="Add">Tambah</button>
                                            <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include('includes/footer.php'); ?>

                </div>
            </div>

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

            <!-- App js -->
            <script src="assets/js/jquery.core.js"></script>
            <script src="assets/js/jquery.app.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    </body>

    </html>
<?php } ?>