<?php 
include 'config.php';
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$level='pegawai';
$nip=$_POST['nip'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$hp=$_POST['hp'];
$foto='';

mysqli_query($conn, "insert into user values('','$username','$password','$level','$nama','$nip','$jenis_kelamin','$alamat','$email','$hp','$foto')");
header("location:pegawai.php");

 ?>