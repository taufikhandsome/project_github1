<?php 
require_once("koneksi.php");
$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password =$_POST['password'];
$telp = $_POST['telp'];
$level = $_POST['level'];
$cekuser = mysqli_query($koneksi,"SELECT * FROM petugas WHERE id_petugas = '$id_petugas'");
if (!$id_petugas || !$nama_petugas || !$username || !$password || !$telp || !$level) {
  # code...
  echo "Lengkapi Datanya! <a href ='petugas.php'>Kembali</a>";
}
else
{
  $simpan =mysqli_query($koneksi,"INSERT INTO petugas values ('$id_petugas','$nama_petugas','$username','$password','$telp','$level')");
  if ($simpan) {
    # code...
    echo "Pendaftaran Sukses! Silahkan <a href = 'login.php'>Login</a>";
  }
  else
  {
    echo "Pendaftaran Gagal!";
    header('location:petugas.php');

  }
}
 ?>
