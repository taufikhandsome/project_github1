<!doctype html>
<html>
<?php
session_start();
$username = $_SESSION['username']; 
$nik      = $_SESSION['id_petugas'];
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
            margin-top: px;
            float:left;
        }
        .footer{
            height:100px;
            border:1px solid #e64dfa;
            line-height:100px;
            color: white;
            background-color: #123C69;
            text-decoration: none;
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
                </div>
                <div class="nav">
                    Selamat Datang <?php echo $username ?> <a href="../index.php">Logout</div>
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
                        <center>
                        <h3>PROFIL</h3>
            <table border="1">
                <tr>
                    <th>id petugas</th>
                    <th>nama petugas</th>
                    <th>username</th>
                    <th>password</th>
                    <th>telp</th>
                    <th>level</th>
                    </tr>
                <?php
                include "koneksi.php";
                $data= mysqli_query($koneksi,"SELECT * FROM petugas where username='$username'");
                while($tampil= mysqli_fetch_array($data)){
                    echo"
                    <tr>
                    <td>$tampil[id_petugas]</td>
                    <td>$tampil[nama_petugas]</td>
                    <td>$tampil[username]</td>
                    <td>$tampil[password]</td>
                    <td>$tampil[telp]</td>
                    <td>$tampil[level]</td>
                    <td><a href = 'editprofil.php?id_petugas=$tampil[id_petugas]'>Edit Profile</a></td>
                    </tr>";
                   
                }
                ?>
            </table>
            <?php
            include "koneksi.php";
            if (isset ($_GET['id_petugas'])) {
                mysqli_query($koneksi,"UPDATE From petugas where id_petugas='$_GET[id_petugas]'");
                echo"Berhasil Diubah !
                <a href='homeadmin.php'>Back</a>";
            }
                ?>
                    </div>
                </div> 
            <div class="footer">Copy right 2021 | by mita cristiani</div>
        </div>     
    </body>
</html>