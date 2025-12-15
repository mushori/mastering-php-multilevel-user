<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Cek data user di database
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // Cek Level Admin
    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:halaman_admin.php");
    
    // Cek Level Pegawai
    }else if($data['level']=="pegawai"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pegawai";
        header("location:halaman_pegawai.php");
    
    // Cek Level Pengurus
    }else if($data['level']=="pengurus"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pengurus";
        header("location:halaman_pengurus.php");
    
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
    header("location:index.php?pesan=gagal");
}
?>