x<!doctype html>
<html lang="en">
<head>
	<?php
	session_start();
	require 'cek.php';
	require 'config.php';
	require '../sections/header.php';
	?>
	<script src="../assets/Chart.js/Chart.bundle.js"></script>
	<style type="text/css">
            .container {
                width: 100%;
                margin: 15px auto;
            }
        </style>

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
					<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>

					<li><a href="lihat-surat-masuk.php" class=""><i class="fa fa-envelope"></i> <span>Surat Masuk</span></a></li>

					<li><a href="lihat-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i> <span>Surat Keluar</span></a></li>

			

			<li><a href="disposisi.php" class=""><i class="lnr lnr-location"></i> <span>Disposisi</span></a></li>

			<!-- <li><a href="grafik.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Grafik</span></a></li> -->


			<li>
				<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="glyphicon glyphicon-list-alt"></i> <span>Laporan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
				<div id="subPages3" class="collapse ">
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

		<?php
	//$bulan = mysqli_query("SELECT ")
	$surat = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2017-01-01' AND '2017-01-31'");
	$surat2 = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2017-02-01' AND '2017-02-30'");
	$surat3 = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2017-03-01' AND '2017-03-31'");
	$surat4 = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2017-04-01' AND '2017-04-30'");
	$surat5 = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2017-05-01' AND '2017-05-31'");
	$surat6 = mysqli_query($conn, "SELECT * FROM surat_masuk WHERE tanggal_terima BETWEEN '2017-06-01' AND '2017-06-30'");

	$surat7 = mysqli_query($conn, "SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-01-01' AND '2017-01-31'");
	$surat8 = mysqli_query($conn, "SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-02-01' AND '2017-02-30'");	
	$surat9 = mysqli_query($conn, "SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-03-01' AND '2017-03-31'");	
	$surat10 = mysqli_query($conn, "SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-04-01' AND '2017-04-30'");	
	$surat11 = mysqli_query($conn, "SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-05-01' AND '2017-05-31'");	
	$surat12 = mysqli_query($conn, "SELECT * FROM surat_keluar WHERE tanggal_dikeluarkan BETWEEN '2017-06-01' AND '2017-06-30'");

	$surat13 = mysqli_query($conn, "SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-01-01' AND '2017-01-31'");
	$surat14 = mysqli_query($conn, "SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-02-01' AND '2017-02-30'");		
	$surat15= mysqli_query($conn, "SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-03-01' AND '2017-03-31'");		
	$surat16 = mysqli_query($conn, "SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-04-01' AND '2017-04-30'");		
	$surat17 = mysqli_query($conn, "SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-05-01' AND '2017-05-31'");		
	$surat18 = mysqli_query($conn, "SELECT * FROM disposisi WHERE tanggal_disposisi BETWEEN '2017-06-01' AND '2017-06-30'");		

$jlh = mysqli_num_rows($surat);
$jlh2 = mysqli_num_rows($surat2);
$jlh3 = mysqli_num_rows($surat3);
$jlh4 = mysqli_num_rows($surat4);
$jlh5 = mysqli_num_rows($surat5);
$jlh6 = mysqli_num_rows($surat6);

$jlh7 = mysqli_num_rows($surat7);
$jlh8 = mysqli_num_rows($surat8);
$jlh9 = mysqli_num_rows($surat9);
$jlh10 = mysqli_num_rows($surat10);
$jlh11 = mysqli_num_rows($surat11);
$jlh12 = mysqli_num_rows($surat12);

$jlh13 = mysqli_num_rows($surat13);
$jlh14 = mysqli_num_rows($surat14);
$jlh15 = mysqli_num_rows($surat15);
$jlh16 = mysqli_num_rows($surat16);
$jlh17 = mysqli_num_rows($surat17);
$jlh18 = mysqli_num_rows($surat18);


?>

		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-headlineing">
							<h3 class="panel-title">Control Panel</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<a href="lihat-surat-masuk.php" class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-envelope"></i></span>
										<p>
											<span class="number">Surat</span>
											<span class="title">Masuk</span>
										</p>
									</div>
								</a>
								<a href="lihat-surat-keluar.php" class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-envelope"></i></span>
										<p>
											<span class="number">Surat</span>
											<span class="title">Keluar</span>
										</p>
									</div>
								</a>
								<a href="disposisi.php" class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-envelope"></i></span>
										<p>
											<span class="number">Disposisi</span>
											<span class="title">Surat</span>
										</p>
									</div>
								</a>
								
							<!-- Grafik Surat Masuk -->
<!-- <div class="row">
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Grafik Surat Masuk 2021</h3>
			</div>
			<div class="panel-body">
				<div class="container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni"],
                    datasets: [{
                            label: 'Data Surat Masuk',
                            data: [<?php echo "$jlh"; ?>, <?php echo "$jlh2"; ?>, <?php echo "$jlh3"; ?>, <?php echo "$jlh4"; ?>, <?php echo "$jlh5"; ?>, <?php echo "$jlh6"; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
			</div>
		</div>
	</div> -->

	<!-- Grafik Surat Keluar -->
	<!-- <div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Grafik Surat Keluar 2021</h3>
			</div>
			<div class="panel-body">
				<div class="container">
            <canvas id="myChart2" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart2");
            var myChart2 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni"],
                    datasets: [{
                            label: 'Data Surat Keluar',
                            data: [<?php echo "$jlh7"; ?>, <?php echo "$jlh8"; ?>, <?php echo "$jlh9"; ?>, <?php echo "$jlh10"; ?>, <?php echo "$jlh11"; ?>, <?php echo "$jlh12"; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
			</div>
		</div>
	</div>
</div> -->


<!-- <div class="row">
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">
				<h3 class="panel-title">Grafik Disposisi Surat 2017</h3>
			</div>
			<div class="panel-body">
				<div class="container">
            <canvas id="myChart3" width="100" height="100"></canvas>
        </div>
        <script>
            var ctx = document.getElementById("myChart3");
            var myChart3 = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni"],
                    datasets: [{
                            label: 'Data Disposisi Surat',
                            data: [<?php echo "$jlh13"; ?>, <?php echo "$jlh14"; ?>, <?php echo "$jlh15"; ?>, <?php echo "$jlh16"; ?>, <?php echo "$jlh17"; ?>, <?php echo "$jlh18"; ?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                    }
                }
            });
        </script>
			</div>
		</div>
		</div>
	</div> -->
						</div>
					</div>
					<!-- END OVERVIEW -->

					
						
					</div>


				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Anda yakin mau keluar?</h4>
            </div>
            <div class="modal-footer">
              <a href="logout.php" class="btn btn-primary">Ya</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            </div>
          </div>
        </div>
      </div>


		
		<?php
			include '../sections/footer.php'; 
		?>