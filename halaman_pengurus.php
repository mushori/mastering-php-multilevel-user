<?php 
session_start();
if($_SESSION['level']==""){ header("location:index.php?pesan=gagal"); }
?>
<!DOCTYPE html>
<html>
<head><title>Halaman Pegawai</title></head>
<body>
    <h1>Halaman Pegawai</h1>
    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <a href="logout.php">LOGOUT</a>
</body>
</html>