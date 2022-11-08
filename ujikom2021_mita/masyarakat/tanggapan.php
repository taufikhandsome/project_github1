<!DOCTYPE html>
<html>
<?php
$tgl=date('d-m-y');
include ('koneksi.php');
$id_pengaduan=$_GET['id_pengaduan'];
$data=mysqli_query($koneksi,"SELECT * FROM pengaduan left join tanggapan on pengaduan.id_pengaduan=tanggapan.id_pengaduan where pengaduan.id_pengaduan='$id_pengaduan'");
$a=mysqli_fetch_array($data);
$tanggapan=$a['tanggapan'];
$isi_laporan=$a['isi_laporan'];

session_start();
$username = $_SESSION['username']; 
$nama     = $_SESSION['nama'];
//$id_petugas = $_SESSION['id_petugas'];
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
                    <li><a href="pengaduan.php">Pengaduan</a></li>
                    <br>
					<li><a href="datapengaduan.php">Data Pengaduan</a></li>
                    <br>
					
                    </ul>
                    </div>
                    <div class="right">
<center>
	<form class="box" method="POST" action="prosestanggapan.php">
		<table>
	<h1>tanggapan</h1>
				
				<tr>
					<td>id pengaduan</td>
					<td>:</td>
					<td><?php echo $id_pengaduan ?></td>
				</tr>
				<tr>
					<td>tgl tanggapan</td>
					<td>:</td>
					<td><?php echo $tgl ?></td>
				</tr>
                <tr>
                    <td>Detail Pengaduan</td>
                    <td>:</td>
                    <td><?php echo $isi_laporan ?> </td>
                </tr>
                <tr><td></td>
                    <td></td>
                    <td>
                <?php echo "<img src ='../assets/img/".$a['foto']."' width=50px height=50px "  ?> ></td>
            </tr>
				<tr>
					<td>tanggapan</td>
					<td>:</td>
					<td><?php echo $tanggapan ?> </td>
				</tr>
			</table>
	<tr>
	<td></td>
	<td></td>
	<br>
	<td>
        <br>
        <br>
			
</td>				
</tr>
</form>
</div>
                </div> 
            <div class="footer">Copy right 2021 | by mita cristiani</div>
        </div>     
    </body>
</html>