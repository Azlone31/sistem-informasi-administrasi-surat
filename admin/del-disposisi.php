<?php 
include 'config.php';
$id=$_GET['id_surat'];
mysqlI_query($conn, "delete from disposisi where id_surat_masuk='$id'");
header("location:disposisi.php");

?>