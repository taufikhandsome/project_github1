<?php
include ('koneksi.php');
$id_pengaduan=$_GET['id_pengaduan'];
$status="Tolak";

$query="UPDATE pengaduan SET status='$status' where id_pengaduan = '$id_pengaduan'";
mysqli_query($koneksi,$query);
header("location:../admin/homeadmin.php?pesan=validasi");
?>