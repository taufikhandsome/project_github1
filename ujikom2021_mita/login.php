<!DOCTYPE html>
<html>
<head>
	<style>
		.bg{
			background-image: url('bg3.jpg');
			background-size: cover;
			color: white;
			margin-top: 100px;
		}
		.bg1{
			padding:10px;
			padding-left: 25px;
			background:rgba(0 0 0 5);
			width:20%;
			height: 250px;
			border-radius: 10px;
			box-shadow:4px 4px 4px 4px white;
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
<form class="bg1" method="post" action="proses_login.php">
	<h2><p>Silahkan Login</p></h2>
	<hr>
<table>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username"></td>
	</tr>
		<tr><td>Password</td>
		<td>:</td>
		<td><input type="text" name="password"></td>
		</tr>

</table>
		<br>
		<tr><td></td>
		<td></td>
		<td><input  class="tombol" type="submit" value="Login">
		<br>
		<br>
		<input class="tombol" type="reset" value="cancel">
</td>				
</tr>
</form>
</body>
</html>