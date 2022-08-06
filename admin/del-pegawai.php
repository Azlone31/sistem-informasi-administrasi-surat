<?php 
include 'config.php';
$id=$_GET['id'];
mysqlI_query($conn, "delete from user where id='$id'");
header("location:pegawai.php");

?>