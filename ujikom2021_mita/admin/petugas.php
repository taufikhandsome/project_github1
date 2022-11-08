<!DOCTYPE html>
<html>
<head>
	<style>
		.bg{
			background-image: url('../bg3.jpg');
			background-size: cover;
			color: white;
			margin-top: 100px;
		}
		.box{
			padding:10px;
			padding-left: 25px;
			background:rgba(0 0 0 5);
			width:30%;
			height: 300px;
			border-radius: 10px;
			box-shadow:4px 4px 4px 4px black;
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
	<title>Login</title>
</head>
<body class="bg">
	<center>
	<form class="box" method="POST" action="prosespetugas.php">
		<table>
	<h1>Petugas</h1>
				<tr>
					<td>id petugas</td>
					<td>:</td>
					<td><input type="text" name="id_petugas" id="id_pengaduan"></td>
				</tr>
				<tr>
					<td>nama petugas</td>
					<td>:</td>
					<td><input type="text" name="nama_petugas" id="nama_petugas"></td>
				</tr>
				<tr>
					<td>username</td>
					<td>:</td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td>telp</td>
					<td>:</td>
					<td><input type="text" name="telp" id="telp"></td>
				</tr>
				<tr>
					<td>level</td>
					<td>:</td>
					<td><input type="text" name="level" id="level"></td>
					<td>admin/petugas*</td>
				</tr>
			</table>
	<tr>
	<td></td>
	<td></td>
	<br>
	<td><input type="submit" value="simpan">
			<input type="reset" value="batal">
</td>				
</tr>
</form>
</body>
</html>