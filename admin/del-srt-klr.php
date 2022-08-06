<?php 
include 'config.php';
$id=$_GET['id_surat'];
mysqlI_query($conn, "delete from surat_keluar where id_surat='$id'");
header("location:lihat-surat-keluar.php");

?>