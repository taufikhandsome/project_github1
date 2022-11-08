<!doctype html>
<html>
<?php
session_start();
$username = $_SESSION['username']; 
$nik      = $_SESSION['nik'];
$nama     = $_SESSION['nama'];
  ?>
    <head>
        <meta charset="utf-8"/>
        <title>Home User</title>
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
            background-color: #123C69;
            color: white;
        }
        div{
            text-align:center;
        }
        .tombol{
            color:white;
            border:none;
            background:#123C69;
            font-size: 10pt;
            padding:5px 75px;
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
                </div>
                <div class="nav">
                    Selamat Datang <?php echo $username ?> <a href="../index.php">Logout</div>
                <div class="box">
                    <div class="left">
                    <ul>
                    <li><a href="profil.php">Profile</a></li>
                    <br>
                    <li><a href="pengaduan.php">pengaduan</a></li>
                    <br>
                    <li><a href="datapengaduan.php">Data Pengaduan</a></li>
                    <br>
                   
                    </ul>
                    </div>
                    <div class="right">
                    	<center>
                 <form method="POST" action="proses_pengaduan.php" enctype="multipart/form-data">
				<table>
				<h2>Pengaduan Masyarakat</h2>
				<tr>
					<td></td>
					<td></td>
					<td><input type="text" name="id_pengaduan" id="id_pengaduan" hidden=""></td>
				</tr>
				<tr>
					<td>tgl pengaduan</td>
					<td>:</td>
					<td><input type="date" name="tgl_pengaduan" id="tgl_pengaduan"></td>
				</tr>
				<tr>
					<td>nik</td>
					<td>:</td>
					<td><input type="text" name="nik" readonly="" value=<?php echo $nik ?>></td>
				</tr>
				<tr>
					<td>isi laporan</td>
					<td>:</td>
					<td><input type="text" name="isi_laporan" id="isi_laporan" ></td>
				</tr>
				<tr>
					<td>foto</td>
					<td>:</td>
					<td><input type="file" name="foto" class="formregistrasi"></td>
				</tr>
				<tr>
					<td>status</td>
					<td>:</td>
					<td><input type="text" name="status" id="status" value="Pending" readonly=""></td>
				</tr>
			</table>
			<br>
			<input class="tombol" type="submit" value="kirim pengaduan">
            <br>
            <br>
			<input class="tombol1" type="reset" value="batal">
		</form>
                    </div>
                </div> 
            <div class="footer">Copy right 2021 | by mita cristiani</div>
        </div>     
    </body>
</html>