<!DOCTYPE html>
<html>

<head>
	<title>Siasy Login</title>
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
	<?php include 'admin/config.php'; ?>
	<style type="text/css">
		.kotak {
			margin-top: 150px;
		}

		.kotak .input-group {
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<div class="container">
		<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
		<div class="panel panel-default">
			<form action="login_admin_act.php" method="post">
				<div class="col-md-4 col-md-offset-4 kotak">
					<h3>Selamat Datang</h3>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" class="form-control" placeholder="Username" name="uname">
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					</div>
					<div class="input-group">
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
					<br>
					<!-- <center>
						<p>Repost by <a href="https://stokcoding.com/" title="StokCoding.com" target="_blank">StokCoding.com</a></p>
					</center> -->
				</div>
			</form>
		</div>
	</div>
</body>

</html>