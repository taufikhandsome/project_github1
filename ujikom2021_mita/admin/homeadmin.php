<!DOCTYPE html>
<html>
<?php
session_start();
$username = $_SESSION['username']; 
$nama     = $_SESSION['nama'];
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
        div{
            text-align:center;
        }

       
    .left{
    width: 98%;

height: 700px;

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
                   <li><a href="datapengaduan.php">Data Pengaduan</a></li>
                    <br>
					<li><a href="datamasyarakat.php">Data masyarakat</a></li>
                    </ul>
                    </div>
                    <div class="right">
                        <h3>Data Pengaduan</h3>
            <table border="1" align="center">
                <tr>
                    <th>No</th>
                    <th>id pengaduan</th>
                    <th>Tgl Pengaduan</th>
                    <th>Nik</th>
                    <th>Isi laporan</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th><colspan="2>Aksi</th>
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
                    <td><a href = 'tolak.php?id_pengaduan=$tampil[id_pengaduan]'>tolak</a></td>
                    <td><a href = 'proses.php?id_pengaduan=$tampil[id_pengaduan]'>proses</a></td>
                    <td><a href = 'selesai.php?id_pengaduan=$tampil[id_pengaduan]'>selesai</a></td>
                    <td><a href = 'tanggapi.php?id_pengaduan=$tampil[id_pengaduan]'>tanggapi</a></td>
                    </tr>";
                    $no++;
                }
                ?>
            </table>
                    </div>
                </div> 
            <div class="footer">Copy right 2021 | by mita cristiani</div>
        </div>     
    </body>
</html>