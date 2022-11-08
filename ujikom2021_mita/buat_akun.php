<!DOCTYPE html>
<html>
<head>
	<style>
		.bg1{
			padding:10px;
			padding-left: 25px;
			background:rgba(0 0 0 5);
			width:20%;
			height: 300px;
			border-radius: 10px;
			box-shadow:4px 4px 4px 4px white;
		}
			.bg{
			background-image: url('bg3.jpg');
			background-size: cover;
			color: white;
			margin-top: 100px;
		}
		.tombol{
			color:black;
			border:none;
			background:#eee;
			font-size: 10pt;
			padding:5px 100px;
			text-decoration:none;
			border-radius:10px;
		}
	</style>
	<title>Buat_akun</title>
</head>
<body class="bg">
	<center>
	<form class="bg1" method="POST" action="prosesbuat_akun.php">
		<table>
	<h3>SILAHKAN DAFTAR AKUN</h3>
	<hr>
	<tr>
		<td>Nik</td>
		<td>:</td>
		<td><input type="text" name="nik" id="nik"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" id="nama"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" id="username"></td>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" id="password"></td>
	</tr>
		<tr>
		<td>No Tlp</td>
		<td>:</td>
		<td><input type="text" name="telp"></td>
	</tr>
	</table>
	<br>
	<input  class="tombol" type="submit" value="simpan">
	<br>
	<br>
	<input class="tombol" type="reset" value=" batal ">


</form>
</body>
</html>