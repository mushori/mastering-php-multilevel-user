<?php 
include 'koneksi.php';
$nama = $_POST['nama_barang'];
$kode = $_POST['kode_barang'];
$qty = $_POST['qty'];
mysqli_query($koneksi,"INSERT INTO barang VALUES('','$nama','$kode','$qty','')");
header("location:halaman_admin.php");
?>