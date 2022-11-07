<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['update'])) {

        // AMBIL ID DATA
        $id = mysqli_real_escape_string($con, $_POST['id']);

        // AMBIL NAMA FILE FOTO SEBELUMNYA
        $data = mysqli_query($con, "SELECT gambar FROM tprestasi WHERE id='$id'");
        $dataImage = mysqli_fetch_assoc($data);
        $oldImage = $dataImage['gambar'];

        // AMBIL DATA DATA DIDALAM INPUT
        $nama_prestasi = mysqli_real_escape_string($con, $_POST['nama_prestasi']);
        $tingkat_prestasi = mysqli_real_escape_string($con, $_POST['tingkat_prestasi']);
        $deskripsi = mysqli_real_escape_string($con, $_POST['deskripsi']);
        $tahun_prestasi = mysqli_real_escape_string($con, $_POST['tahun_prestasi']);
        $juara = mysqli_real_escape_string($con, $_POST['juara']);
        $filename = $_FILES['newImage']['name'];

        // JIKA FOTO DI GANTI
        if (!empty($filename)) {
            $filetmpname = $_FILES['newImage']['tmp_name'];
            $folder = "image_prestasi/";

            // GAMBAR LAMA DI DELETE
            unlink($folder . $oldImage) or die("GAGAL");

            // GAMBAR BARU DI MASUKAN KE FOLDER
            move_uploaded_file($filetmpname, $folder . $filename);

            // NAMA FILE FOTO + DATA YANG DI GANTIBARU DIMASUKAN
            $result = mysqli_query($con, "UPDATE tprestasi SET nama_prestasi='$nama_prestasi',deskripsi='$deskripsi',tingkat_prestasi='$tingkat_prestasi',tahun_prestasi='$tahun_prestasi',juara='$juara',gambar='$filename' WHERE id=$id");
        }

        // MEMASUKAN DATA YANG DI UPDATE KECUALI GAMBAR
        $result = mysqli_query($con, "UPDATE tprestasi SET nama_prestasi='$nama_prestasi',deskripsi='$deskripsi',tingkat_prestasi='$tingkat_prestasi',tahun_prestasi='$tahun_prestasi',juara='$juara'WHERE id=$id");


        if ($result) {
            echo "
    <script>
        alert('EDIT DATA BERHASIL');
        document.location='manage_prestasi.php';    
    </script>";
        } else {
            echo "
    <script>
        alert('EDIT DATA GAGAL');
        document.location='manage_prestasi.php';    
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
                                    <h4 class="page-title">manage data prestasi</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="#">Manage Prestasi</a>
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
                                            <table id="table_id" class="dataTable table table-bordered">
                                                <thead>
                                                    <tr>

                                                        <th width="50px">Foto</th>
                                                        <th>Nama Prestasi</th>
                                                        <th>Tingkat Prestasi</th>
                                                        <th>Tahun Prestasi</th>
                                                        <th>Juara</th>
                                                        <th>Deskripsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 0;
                                                    $tampil = mysqli_query($con, "SELECT * FROM tprestasi ORDER BY id ASC");
                                                    while ($res = mysqli_fetch_array($tampil)) :
                                                        $no++;
                                                    ?>
                                                        <tr>
                                                            <td><img src="image_prestasi/<?= $res['gambar'] ?>" alt="" width="100%" class="img-thumbnail"></td>
                                                            <td><?= $res['nama_prestasi'] ?></td>
                                                            <td><?= $res['tingkat_prestasi'] ?></a></td>
                                                            <td><?= $res['tahun_prestasi'] ?></td>
                                                            <td><?= $res['juara'] ?></td>
                                                            <td><?php echo substr($res['deskripsi'], 0, 70) ?></td>
                                                            <td>
                                                                <a href="" data-toggle="modal" data-target="#modalubah<?= $no ?>" style="text-decoration: none; margin-right: 10px;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil " viewBox="0 0 16 16">
                                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                                                    </svg>
                                                                </a>
                                                                <a href="" data-toggle="modal" data-target="#modalhapus<?= $no ?>" style="text-decoration: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                    </svg>
                                                                </a>
                                                            </td>
                                                        </tr>



                                                </tbody>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalubah<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Prestasi</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!--Form Input data-->
                                                                <form method="post" name="form1" enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        <label for="nama">Nama</label>
                                                                        <input type="text" class="form-control" id="nama_prestasi" value="<?= $res['nama_prestasi'] ?>" placeholder="Nama lengkap" autocomplete="off" required="required" name="nama_prestasi">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nip">NIP</label>
                                                                        <input type="text" class="form-control" id="tingkat_prestasi" value="<?= $res['tingkat_prestasi'] ?>" placeholder="Nip" autocomplete="off" required="required" name="tingkat_prestasi">
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="mata_pelajaran">Pendidkan</label>
                                                                            <input type="date" class="form-control" id="tahun_prestasi" value="<?= $res['tahun_prestasi'] ?>" placeholder="Pendidikan Terakhir" autocomplete="off" required="required" name="tahun_prestasi">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="mata_pelajaran">Mengajar</label>
                                                                            <input type="text" class="form-control" id="juara" value="<?= $res['juara'] ?>" placeholder="Mengajar Pelajaran" autocomplete="off" required="required" name="juara">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group">
                                                                            <label for="mata_pelajaran">Deskripsi</label>
                                                                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" value="" required="required" class="form-control"><?= $res['deskripsi'] ?></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="form-group">
                                                                                <label for="foto">Foto</label>
                                                                                <br>
                                                                                <img style="margin-bottom: 10px;" width="80" src="image_prestasi/<?= $res['gambar'] ?>">
                                                                                <input type="file" class="form-control-file" autocomplete="off" name="newImage">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input type="hidden" name="id" value=<?= $res['id'] ?>>
                                                                        <button type="submit" class="btn btn-primary" name="update" value="Update">Simpan</button>
                                                                        <a data-dismiss="modal" class="btn btn-danger">Kembali</a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--Modal Hapus-->
                                                <div class="modal fade" id="modalhapus<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">PERINGATAN</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST">
                                                                    <input type="hidden" name="id" value="<?= $res['id'] ?>">
                                                                    <div class="modal-body">
                                                                        <h5 class="text-center">Apakah anda yakin akan menghapus data <br> <span class="text-danger"><?= $res['nama_prestasi'] ?>-<?= $res['tingkat_prestasi'] ?></span></h5>
                                                                    </div>
                                                                    <!--Akhir form input data-->
                                                                    <div class="modal-footer">
                                                                        <a href=<?php echo "\"hapus-prestasi.php?id=$res[id]\" onClick=\"return confirm('Kamu yakin untuk delete ini?')\"" ?> class="btn btn-primary">Hapus</a>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                            </table>
                                        </div>
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