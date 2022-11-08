<!doctype html>
<html>
<?php
include ('koneksi.php');

session_start();
$username = $_SESSION['username']; 
$nik      = $_SESSION['nik'];
$nama     = $_SESSION['nama'];
$tanggapan=mysqli_query($koneksi, "SELECT * FROM tanggapan inner join pengaduan on id_pengaduan.id_pengaduan= id_tanggapan.id_pengaduan");


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
            background-color: #123C69;
            color: white;
        }
        div{
            text-align:center;
        }
        .bg{
            padding:10px;
            padding-left: 25px;
            background-image: linear-gradient(white,yellow);
            width:300px;
            height: 300px;
            border-radius: 10px;
            margin-top: 20px;
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
            <div class="header"><p align="center">APLIKASI PENGADUAN MASYARAKAT</p></div>
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
                    	<h3>Data Pengaduan</h3>
			<table border="1">
				<tr>
					<th>No</th>
					<th>id pengaduan</th>
					<th>Tgl Pengaduan</th>
					<th>Nik</th>
					<th>Isi laporan</th>
					<th>Foto</th>
					<th>Status</th>
					<th><colspan="2>Keterangan</th>
				</tr>
				<?php
				include "koneksi.php";
				$no= 1;
				$data= mysqli_query($koneksi,"SELECT * FROM pengaduan");
             	while($tampil= mysqli_fetch_array($data)){
					echo"
					<tr>
					<td>$no</td>
					<td>$tampil[id_pengaduan]</td>
					<td>$tampil[tgl_pengaduan]</td>
					<td>$tampil[nik]</td>
					<td>$tampil[isi_laporan]</td>
                   <td><img src ='../assets/img/".$tampil['foto']."' width=50px height=50px></td>
					<td>$tampil[status]</td>
                    <td><a href = 'tanggapan.php?id_pengaduan=$tampil[id_pengaduan]'>Tanggapan</a></td>
					<td><a href = '?id_pengaduan=$tampil[id_pengaduan]'>Hapus</a></td>
					</tr>";
					$no++;
				}
				?>
			</table>
			<?php
			include "koneksi.php";
			if (isset ($_GET['id_pengaduan'])) {
				mysqli_query($koneksi,"DELETE From pengaduan where id_pengaduan='$_GET[id_pengaduan]'");
				echo"Berhasil Dihapus !
				<a href='datapengaduan.php'>Back</a>";
			}
				?>
                    </div>
                </div> 
            <div class="footer">Copy right 2021 | by mita cristiani</div>
           
        </div>  
        </style>
        <body>   
    </body>
</html>