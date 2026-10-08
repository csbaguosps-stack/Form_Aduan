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

session_start();
include'koneksi.php';

if (!isset($_SESSION['admin']))
{
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>
<html lang="en">
<head>
  <title>Ubah From</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

 
  <script src="vendor/asset/jquery/jquery-3.3.1.min.js"></script>
 
  <script src="vendor/asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>   

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">  
  <script src="vendor/asset/js/app.js"></script>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">



  <?php
    include("koneksi.php");  
    include("menu.php"); 
  ?>
  
  
</head>
<body>


<?php
$ambil = $koneksi->query("SELECT *FROM fromku WHERE id_from = '$_GET[id]' ");
$pecah = $ambil->fetch_assoc();
?>

<div class="container">
  <br>
  <div class="row">
    <div class="col-sm-offset-1  col-sm-9">
      <div class="panel panel-default">
        <div class="panel-heading"><b>Ubah File<img src="logo1.png"width='40' height='30' align="right"></b></div><br>
        <div class="panel-body">

<form method="post" enctype="multipart/form-data"> 

<div class = "form-group">
    <label>Nama Pelapor</label>
    <input type="readonly" readonly class="form-control" name="nm_pelapor" value="<?php echo $pecah['nm_pelapor']; ?>" required="required">
      </div>

<div class="form-gorup">
    <label>File</label>
    <input type="file" class="from-control"  name="file" multiple required="required">
    <br>
   =======================
   <br>
    
    <label>Name File = <?php echo $pecah['lampiran_aduan']; ?></label> >>>
    <a href="file_d/<?=$pecah['lampiran_aduan']; ?>">Download</a><br>
  </div><br>

  <button class="btn btn-primary" name="ubah">Ubah</button> 
</form>
<?php
if (isset($_POST['ubah'])) 
{
  $file = $_FILES['file']['name'];
  $lokasi = $_FILES['file']['tmp_name'];
  move_uploaded_file($lokasi,"file_d/".$file);
  {
	$koneksi->query("UPDATE fromku SET lampiran_aduan='$file'
	WHERE id_from='$_GET[id]' ");
}

	echo "<script>alert('Data From Telah Diubah');</script>";
	echo "<meta http-equiv='refresh' content='1;url=tables.php'>";
  
}
?>

</div>
      </div>     
    </div>
  </div>  
</div>
</body>
</html>
