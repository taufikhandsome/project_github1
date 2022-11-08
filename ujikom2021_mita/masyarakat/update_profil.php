<?php
include('koneksi.php');
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$simpan=mysqli_query($koneksi,"UPDATE masyarakat SET nama='$nama',username='$username',password='$password' where nik='$nik'");
header("location:../masyarakat/profil.php?pesan=berhasil")