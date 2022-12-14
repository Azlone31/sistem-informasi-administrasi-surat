<!doctype html>
<html lang="en">
<head>
	
	<?php
	session_start();
	include 'cek.php';
	include 'config.php';
	include '../sections/header.php';
	?>

	<title>Dashboard | Siasy</title>
	
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
		<?php
			require '../sections/navbar.php';
		?>
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			 <div class="sidebar-scroll">
				<nav>
					
	<ul class="nav">
					<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>

					<li><a href="lihat-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Surat Masuk</span></a></li>

					<li><a href="lihat-surat-keluar.php" class="active"><i class="fa fa-paper-plane-o"></i> <span>Surat Keluar</span></a></li>

			

			<li><a href="disposisi.php" class=""><i class="lnr lnr-location"></i> <span>Disposisi</span></a></li>

			<!-- <li><a href="grafik.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Grafik</span></a></li> -->


			<li>
				<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="glyphicon glyphicon-list-alt"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages3" class="collapse">
					<ul class="nav">
													<li><a href="lap-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Surat Masuk</span></a></li>
													<li><a href="lap-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i> <span>Surat Keluar</span></a></li>
											</ul>
				</div>
			</li>

							<!-- <li><a href="pemberitahuan.php" class=""><i class="lnr lnr-alarm"></i> <span>Pemberitahuan</span></a></li>
 -->
							

			<li>
				<a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>Pengguna</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages4" class="collapse ">
					<ul class="nav">
													<li><a href="admin.php" class=""><i class="fa fa-user"></i> <span>Admin</span></a></li>
													<li><a href="pegawai.php" class=""><i class="fa fa-user"></i> <span>Pegawai</span></a></li>
													<li><a href="pimpinan.php" class=""><i class="fa fa-user"></i> <span>Pimpinan</span></a></li>
											</ul>
				</div>
			</li>

							<li><a href="pengaturan.php" class=""><i class="lnr lnr-cog"></i> <span>Pengaturan</span></a></li>

							<li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i> <span>Keluar</span></li></a>
	</ul>				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
	<h3 class="page-title"><i class="fa fa-paper-plane-o"></i>  Surat Keluar</h3>
	<div class="panel panel-headline demo-icons">
		<div class="panel-heading">


		</div>
		<div class="panel-body">
		<a class="btn btn-primary" href="lihat-surat-keluar.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_srt=$_GET['id_surat'];
$det=mysqlI_query($conn, "select * from surat_keluar where id_surat='$id_srt'");
while($d=mysqlI_fetch_array($det)){
?>					
	<form action="#" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id_surat'] ?>" id="disableInput" disabled></td>
			</tr>
			<tr>
				<td>Nomor Surat</td>
				<td><input type="text" class="form-control" name="nomor" value="<?php echo $d['no_surat'] ?>" id="disableInput" disabled></td>
			</tr>
			<tr>
				<td>Jenis Surat</td>
				<td><input type="text" class="form-control" name="jenis_surat" value="<?php echo $d['jenis_surat'] ?>" id="disableInput" disabled></td>
			</tr>
			<tr>
				<td>Tanggal Dikeluarkan</td>
				<td><input type="date" class="form-control" name="tanggal_dikeluarkan" value="<?php echo $d['tanggal_dikeluarkan'] ?>" id="disableInput" disabled></td>
			</tr>
			<tr>
				<td>Tujuan Surat</td>
				<td><input type="text" class="form-control" name="tujuan_surat" value="<?php echo $d['tujuan_surat'] ?>" id="disableInput" disabled></td>
			</tr>
			<tr>
				<td>Ringkasan Surat</td>
				<td><input type="text" class="form-control" name="ringkasan_surat" value="<?php echo $d['ringkasan_surat'] ?>" id="disableInput" disabled></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" class="form-control" name="status" value="<?php echo $d['status'] ?>" id="disableInput" disabled></td>
			</tr>
			<tr>
				<!-- <td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr> -->
		</table>
	</form>
	<?php 
}
?>

	
	<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
              <a href="logout.php" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>


		
		<?php
		include '../sections/footer.php'; 
		?>