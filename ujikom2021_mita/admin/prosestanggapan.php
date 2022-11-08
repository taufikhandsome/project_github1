<?php
   session_start();
   require_once("koneksi.php");
   $id_tanggapan = $_POST['id_pengaduan'];
   $id_pengaduan = $_POST['id_pengaduan'];
   $tgl_tanggapan = $_POST['tgl_tanggapan'];
   $tanggapan = $_POST['tanggapan'];
   $id_petugas =$_POST['id_petugas'];
$cekuser = mysqli_query($koneksi,"SELECT * FROM tanggapan WHERE id_tanggapan = '$id_tanggapan'");
if (!$id_tanggapan || !$id_pengaduan || !$tgl_tanggapan || !$tanggapan || !$id_petugas) {
  # code...
  echo "Lengkapi Datanya! <a href ='tanggapan.php'>Kembali</a>";
}
else
{
  $simpan =mysqli_query($koneksi,"INSERT INTO tanggapan values ('$id_tanggapan','$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");
  if ($simpan) {
    # code...
    echo "Pengaduan Sukses! Silahkan <a href = '../masyarakat/homeuser.php'>Kembali</a>";
  }
  else
  {
    echo "Pendaftaran Gagal!";
    header('location:tanggapan.php');

  }
}
 ?>