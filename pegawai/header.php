<!doctype html>
<html lang="en">
<head>
	<?php
	session_start();
	include 'cek.php';
	include 'config.php';
	?>
	<title>Dashboard | Siasy</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
			<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">

	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form>
				

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="notifications.php" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="basic-use.html">Basic Use</a></li>
								<li><a href="troubleshooting.html">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user5.png" class="img-circle" alt="Avatar"> <span>Pegawai</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="preferences.php"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			 <div class="sidebar-scroll">
				<nav>
					
	<ul class="nav">
					<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>

					
			<li>
				<a href="ajukan-surat-keluar.php" class=""><i class="fa fa-paper-plane-o"></i> <span>Ajukan Surat Keluar</span></a>
			</li>


			<li><a href="charts.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>

			
							<li><a href="profile.php" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>

							<li><a href="notifications.php" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>

							<li><a href="preferences.php" class=""><i class="lnr lnr-cog"></i> <span>Preferences</span></a></li>

							<li><a href="javascript:;" class="" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i> <span>Sign Out</span></li></a>
	</ul>				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->