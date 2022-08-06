<?php 
include 'config.php';
$id=$_GET['id_surat'];
mysqlI_query($conn, "delete from surat_masuk where id_surat='$id'");
header("location:lihat-surat-masuk.php");

?>