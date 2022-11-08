<!DOCTYPE html>
<html>
<?php
$tgl=date('d-m-y');
include ('koneksi.php');
$id_pengaduan=$_GET['id_pengaduan'];
$data=mysqli_query($koneksi,"SELECT * From pengaduan where id_pengaduan='$id_pengaduan'");

session_start();
$username = $_SESSION['username']; 
$nama     = $_SESSION['nama'];
$id_petugas = $_SESSION['id_petugas'];
  ?>
    <head>
        <meta charset="utf-8"/>
        <title>Home Admin</title>
    </head>
    <style>
        body{
            margin:0;
        }
        .box{
            margin:0 auto;
            overflow:hidden;
        }
        .nav{
            background-color:lavender;
            text-align: right;
            padding: 10px;
        }
        .box .header{
            background:#123C69;
            background-size: cover;
            color: white;
            font-family: Castellar;
            font-size: 40px;
            height:120px;
            border:1px solid #f00;
        }
        .box .left{
            width:15%;
            height:400px;
            background-color:#6495ED;
            float:left;
        }
        .box .right{
            width:85%;
            height:400px;
            
            float:left;
        }
        .footer{
            height:100px;
            border:1px solid #e64dfa;
            line-height:100px;
            color:white;
            background-color: #123C69;
            text-decoration: none;
        }
        .tombol{
            color:white;
            border:none;
            background:#123C69;
            font-size: 10pt;
            padding:5px 110px;
            text-decoration:none;
            border-radius: 5px;
        }
        .tombol1{
            color:white;
            border:none;
            background:#123C69;
            font-size: 10pt;
            padding:5px 110px;
            text-decoration:none;
            border-radius: 5px;
        }
        div{
            text-align:center;
        }

    .left{
    width: 98%;

height: 50px;

background-color: lavender;

text-align: center;
    }
.left li{
list-style:none;
float:left;

}
    </style>
    <body>
          <div class="box">
            <div class="header"><p align="center">APLIKASI PENGADUAN MASYARAKAT</div>
                <div class="nav">Selamat Datang <?php echo $username ?> <a href="../index.php">Logout</div>
                <div class="box">
                    <div class="left">
                    <ul>
                    <li><a href="profil.php">Profile</a></li>
                    <br>
                    <li><a href="tanggapan.php">tanggapan</a></li>
                    <br>
					<li><a href="datapengaduan.php">Data Pengaduan</a></li>
                    <br>
					<li><a href="datamasyarakat.php">Data masyarakat</a></li>
                    </ul>
                    </div>
                    <div class="right">
<center>
	<form class="box" method="POST" action="prosestanggapan.php">
		<table>
	<h1>tanggapan</h1>
				<tr>
					<td></td>
					<td></td>
					<td><input type="text" name="id_tanggapan" id="id_tanggapan" hidden="" readonly="" ></td>
				</tr>
				<tr>
					<td>id pengaduan</td>
					<td>:</td>
					<td><input type="text" readonly name="id_pengaduan" id="id_pengaduan" value=<?php echo $id_pengaduan ?> ></td>
				</tr>
				<tr>
					<td>tgl tanggapan</td>
					<td>:</td>
					<td><input type="text" readonly name="tgl_tanggapan" id="tgl_tanggapan" value=<?php echo $tgl ?> ></td>
				</tr>
				<tr>
					<td>tanggapan</td>
					<td>:</td>
					<td><input type="text" name="tanggapan" id="tanggapan"></td>
				</tr>
				<tr>
					<td>id_petugas</td>
					<td>:</td>
					<td><input type="text" name="id_petugas" id="id_petugas" value=<?php echo $id_petugas ?>></td>
				</tr>
			</table>
	<tr>
	<td></td>
	<td></td>
	<br>
	<td><input class="tombol" type="submit" value="kirim">
        <br>
        <br>
			<input class="tombol1" type="reset" value="batal">
</td>				
</tr>
</form>
</div>
                </div> 
            <div class="footer">Copy right 2021 | by mita cristiani</div>
        </div>     
    </body>
</html>