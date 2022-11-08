<?php
   session_start();
   require_once("koneksi.php");
   $id_pengaduan = $_POST['id_pengaduan'];
   $tgl_pengaduan = $_POST['tgl_pengaduan'];
   $nik = $_POST['nik'];
   $isi_laporan = $_POST['isi_laporan'];
 
   $status =$_POST['status'];

$namagambar=$_FILES['foto']['name'];
$folder= $_FILES['foto']['tmp_name'];
move_uploaded_file($folder, '../assets/img/'.$namagambar);


  $simpan =mysqli_query($koneksi,"INSERT INTO pengaduan values ('$id_pengaduan','$tgl_pengaduan','$nik','$isi_laporan','$namagambar','$status')");
  if ($simpan) {
    # code...
    echo "Pendaftaran Berhasil Dikirim!";
    header('location:pengaduan.php');

  }

 ?>