<?php 
include 'config.php';
$nomor=$_POST['nomor'];
$tanggal=$_POST['tanggal'];
$asal=$_POST['asal'];
$tujuan=$_POST['tujuan'];
$perihal=$_POST['perihal'];

mysqli_query($conn, "insert into surat_masuk values('','$asal','$nomor','$perihal','$tanggal','$tujuan')");
header("location:lihat-surat-masuk.php");

 ?>