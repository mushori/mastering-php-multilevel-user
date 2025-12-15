<?php 
session_start();
if($_SESSION['level']==""){ header("location:index.php?pesan=gagal"); }
?>
<!DOCTYPE html>
<html>
<head><title>Halaman Admin</title></head>
<body>
    <h1>Halo Admin, <?php echo $_SESSION['username']; ?></h1>
    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    
    <a href="logout.php">LOGOUT</a>
    <br/><br/>

    <h3>Data Barang (Khusus Admin)</h3>
    <a href="tambah_barang.php">+ Tambah Barang</a>
    <table border="1">
        <tr>
            <th>No</th><th>Nama Barang</th><th>Kode</th><th>Qty</th><th>Opsi</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from barang");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_barang']; ?></td>
            <td><?php echo $d['kode_barang']; ?></td>
            <td><?php echo $d['qty']; ?></td>
            <td>
                <a href="edit_barang.php?id=<?php echo $d['id']; ?>">Edit</a>
                <a href="hapus_barang.php?id=<?php echo $d['id']; ?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>