<!doctype html>
<html>
<?php
session_start();
$password = $_SESSION['password']; 
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
        .bg{
            padding:10px;
            padding-left: 25px;
            background-image: linear-gradient(gold,red);
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
                <div class="nav">Selamat Datang <?php echo $username ?><a href="../login.php">Logout</a></div>
                <div class="box">
                    <div class="left">
                    <ul>
                    <li><a href="profil.php">Profile</a></li>
                    <br>
                    <li><a href="pengaduan.php">pengaduan</a></li>
                    <br>
                    <li><a href="datapengaduan.php">Data Pengaduan</a></li>
                    <br>
                    <li><a href="datamasyarakat.php">Data masyarakat</a></li>
                    </ul>
                    </div>
                    <div class="right">
                        <center>
                        <form action="update_profil.php" method="POST" enctype="multipart">
                         <h1>EDIT PROFILE</h1>   
                        <table>
                             <tr>
                                <td>NIK</td>
                                <td>:</td>
                                <td><input type="text" name="nik" readonly="" value=<?php echo $nik ?>></td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td>:</td>
                              <td><input type="text" name="nama" value=<?php echo $nama ?>></td>
                            </tr>
                            <tr>
                                <td>USERNAME</td>
                                <td>:</td>
                                <td><input type="text" name="username"  value=<?php echo $username ?>></td>
                            </tr>
                            <tr>
                                <td>PASSWORD</td>
                                <td>:</td>
                                <td><input type="text" name="password"  value=<?php echo $password ?>></td>
                            </tr>
                            
                      </table>
                                <br>
                                <input type="submit" value="Update">
                                
                        </form>
                    </div>
                </div> 
            <div class="footer">@copyright2021 by mita cristiani</div>
           
        </div>  
        </style>
        <body>   
    </body>
</html>