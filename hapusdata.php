<?php
/**
 * Aplikasi Sistem Informasi Pengaduan & Pelaporan Kasus (Form Aduan)
 * Tugas Web di Inspektorat Jenderal Kemendikbud Jakarta
 * 
 * @author    Baguos PS
 * @contact   cs.baguosps@gmail.com
 * @year      2019
 * @license   MIT License by cs.baguosps@gmail.com
 * 
 * Copyright (c) 2019 Baguos PS <cs.baguosps@gmail.com>
 * All rights reserved.
 */

// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from fromku where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tables.php");
 
?>

<?php
$ambil = $koneksi->query("SELECT *FROM fromku WHERE id_from='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$gambar = $pecah['foto_produk'];
if (file_exists("../foto_produk/$gambar"))
{
	unlink("../foto_produk/$gambar");
}

$koneksi->query("DELETE FROM fromku WHERE id_from='$_GET[id]'");

echo "<script>alert('Produk Terhapus');</script>";
echo "<meta http-equiv='refresh' content='1;url=tables.php'>";
?>