<?php 
require_once("koneksi.php");
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$telp = $_POST['telp'];
$password =$_POST['password'];

$cekuser = mysqli_query($koneksi,"SELECT * FROM masyarakat WHERE username = '$username'");
if (!$username || !$password || !$nik || !$nama || !$telp) {
	# code...
	echo "Lengkapi Datanya! <a href ='buat_akun.php'>Kembali</a>";
}
else
{
	$simpan =mysqli_query($koneksi,"INSERT INTO masyarakat values ('$nik','$nama','$username','$password','$telp')");
	if ($simpan) {
		# code...
		echo "Pendaftaran Sukses! Silahkan <a href = 'login.php'>Login</a>";
	}
	else
	{
		echo "Pendaftaran Gagal!";
		header('location:buat_akun.php');

	}
}
 ?>
