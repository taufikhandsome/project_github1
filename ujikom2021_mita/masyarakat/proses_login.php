<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $cekuser = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username = '$username'");
   $hasil = mysqli_fetch_assoc($cekuser);
   if(mysqli_num_rows($cekuser) == 0) {
    
   echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       $_SESSION['nama'] = $hasil['nama'];
      
         header('location:admin/homeadmin.php');
     }
   }
?>
