<?php 

session_start();
require_once('koneksi.php');
$username = addslashes ($_POST['username']);
$password = addslashes (md5($_POST['password']));

$sql = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password' ");
// $hasil = mysqli_fetch_assoc($sql);
$cek = mysqli_num_rows($sql);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($sql);

 // cek jika user login sebagai admin
 if($data['level']=="SuperAdmin"){

  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "SuperAdmin";
  // alihkan ke halaman dashboard admin
  echo '<script LANGUAGE="JavaScript">
        alert("Hallo '.$_POST['username'].' anda telah berhasil login sebagai: '.$_SESSION['level'].'")
        window.location.href="../home.php";
        </script>';

 // cek jika user login sebagai pegawai
 }else if($data['level']=="Admin"){
  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "Admin";
  // alihkan ke halaman dashboard pegawai
  echo '<script LANGUAGE="JavaScript">
        alert("Hallo '.$_POST['username'].' anda telah berhasil login sebagai: '.$_SESSION['level'].'")
        window.location.href="../home.php";
        </script>'; 

 }else if($data['level']=="Pimpinan"){
      // buat session login dan username
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "Pimpinan";
      // alihkan ke halaman dashboard pegawai
      echo '<script LANGUAGE="JavaScript">
            alert("Hallo '.$_POST['username'].' anda telah berhasil login sebagai: '.$_SESSION['level'].'")
            window.location.href="../home.php";
            </script>'; 
    
}else{
  // alihkan ke halaman login kembali
  echo '<script LANGUAGE="JavaScript">
            alert("Username/Password tidak sesuai!")
            window.location.href="../index.php";
            </script>'; 
//   header("location:../index.php?pesan=gagal");
 } 
}else{
      echo '<script LANGUAGE="JavaScript">
            alert("Username/Password tidak sesuai!")
            window.location.href="../index.php";
            </script>'; 
//  header("location:../index.php?pesan=gagal");
}


?>