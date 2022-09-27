<?php
session_start();
 $active = 'master';
require_once '../../koneksi.php';
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tambah Data Guru</title>
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
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
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->
 <div class="content-page">
                <!-- Start content -->
                
                <div class="content">
                    <div class="container">
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Tambah Data Guru
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_tambah-guru" enctype="multipart/form-data">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" placeholder="nama" autocomplete="off" required="required" name="nama">
							</div>
							<div class="form-group">
								<label for="nip">NIP</label>
								<input type="number" class="form-control" id="nip" placeholder="nip" autocomplete="off" required="required" name="nip">
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="jenis_kelamin">Jenis Kelamin</label>
										<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
											<option value="L">Laki Laki</option>
											<option value="P">Perempuan</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="no_hp">No HP</label>
										<input type="text" class="form-control" id="no_hp" placeholder="no hp" autocomplete="off" required="required" name="no_hp">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="tempat_lahir">Tempat Lahir</label>
										<input type="text" class="form-control" id="tempat_lahir" placeholder="tempat lahir" autocomplete="off" required="required" name="tempat_lahir">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="tanggal_lahir">Tanggal Lahir</label>
										<input type="date" class="form-control" id="tanggal_lahir" placeholder="tanggal_lahir" autocomplete="off" required="required" name="tanggal_lahir">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" class="form-control-file" id="foto" autocomplete="off" required="required" name="foto">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="mata_pelajaran">Guru Mapel</label>
										<input type="text" class="form-control" id="mata_pelajaran" placeholder="mata pelajaran" autocomplete="off" required="required" name="mata_pelajaran">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="tambah">Tambah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
 </div>
 </div> 
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>