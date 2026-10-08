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


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah</title>
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
 
  ?>

</head>
<body >
<?php include 'menu.php'?>
<div class="container">
  <br>
  <div class="row">
    <div class="col-sm-offset-1  col-sm-9">
      <div class="panel panel-default">
        <div class="panel-heading"><b>Tambah From <img src="logo1.png"width='40' height='30' align="right"></b></div><br>
        <div class="panel-body">

<form method="post" enctype="multipart/form-data"> 
 

  <div class = "form-group">
          <label>Klarifikasi</label>
            <select class="form-control" name="klarifikasi" required="required">
              <option value="">Klarifikasi</option>
              <?php
              $ambil=$koneksi->query("SELECT *FROM klarifikasi");
              while ($klarifikasi = $ambil->fetch_assoc()) {
                ?>
                <option value="<?php echo $klarifikasi['nm_klarifikasi']?>">
                  <?php echo $klarifikasi['nm_klarifikasi']?>
                </option>
              <?php } ?>
            </select>
          </div>

  

  <div class = "form-group">
    <label>Date</date>
    <input type="date" class="form-control" name="date" required="required" value="<?php echo $pecah['tgl']; ?>">
    <?php echo date('d-m-Y'); ?>
  </div>


 <div class="form-group">
    <label>Tiket</label>
    <input required="required"  class="form-control" name="tkt"  value="<?php
 $permitted_chars = '0123456789';
// Output: 54esmdr0qfs
echo substr(str_shuffle($permitted_chars), 0, 6);
$permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// Output: video-g6swmAP8X5VG4jCi.mp4
echo ''.substr(str_shuffle($permitted_chars), 0, 2);
 
?>">
</div>

                <div class = "form-group">
          <label>Pilih Media</label>
            <select class="form-control" name="media" required="required">
              <option value="">Pilih Kategori</option>
              <?php
              $ambil=$koneksi->query("SELECT *FROM media");
              while ($mediaku = $ambil->fetch_assoc()) {
                ?>
                <option value="<?php echo $mediaku['m_pelapor']?>">
                  <?php echo $mediaku['m_pelapor']?>
                </option>
              <?php } ?>
            </select>
          </div> 

        <div class = "form-group" required="required">
          <label>Pilih Jenis</label>
            <select class="form-control" name="jenis">
              <option value="">Jenis</option>
              <?php
              $ambil=$koneksi->query("SELECT *FROM jenis");
              while ($jenis = $ambil->fetch_assoc()) {
                ?>
                <option value="<?php echo $jenis['nm_jenis']?>">
                  <?php echo $jenis['nm_jenis']?>
                </option>
              <?php } ?>
            </select>
          </div>

          <div class = "form-group">
          <label>Pilih Kasus</label>
            <select class="form-control" name="jeniskasus" required="required">
              <option value="">Jenis Kasus</option>
              <?php
              $ambil=$koneksi->query("SELECT *FROM jn_kasus");
              while ($jk = $ambil->fetch_assoc()) {
                ?>
                <option value="<?php echo $jk['nm_jn']?>">
                  <?php echo $jk['nm_jn']?>
                </option>
              <?php } ?>
            </select>
          </div>


         
          <div class = "form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="judul" required="required">
      </div>
    
      
      <div class="form-group">
    <label>Deskripsi</label>
    <textarea class="form-control" name="deskripsi" rows="10" required="required"></textarea>

    <div class = "form-group">
    <label>Nama Pelapor</label>
    <input type="text" class="form-control" name="nm_pelapor" required="required">
      </div>

    <div class = "form-group">
    <label>Instansi Telapor</label>
    <input type="text" class="form-control" name="instansi_telapor" required="required">
  </div>
</div>



  <form class="form-horizontal" method="post">
              <div class="form-group">
                <label class="control-label col-sm-3">Provinsi:</label>
                <div class="col-sm-9">
                  <?php                    
                    $sql_provinsi = mysqli_query($koneksi,"SELECT * FROM provinsi ORDER BY nm_provinsi ASC");
                   ?>
                  <select class="form-control" name="provinsi" id="provinsi" required="required">
                    <option></option>
                    <?php                       
                        while($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)){ 
                           echo '<option value="'.$rs_provinsi['id_provinsi'].'.'.$rs_provinsi['nm_provinsi'].'">'.$rs_provinsi['nm_provinsi'].'</option>';
                        }                        
                      ?>
                  </select>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kota/Kabupaten:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kota" id="kota" required="required">
                    <option></option>
                  </select>
                  
                </div>
              </div>


     

        <div class = "form-group">
          <label>Pilih Lokus</label>
            <select class="form-control" name="lokus" required="required">
              <option value="">Lokus</option>
              <?php
              $ambil=$koneksi->query("SELECT *FROM itjen");
              while ($itjen = $ambil->fetch_assoc()) {
                ?>
                <option value="<?php echo $itjen['nm_itjen']?>">
                  <?php echo $itjen['nm_itjen']?>
                </option>
              <?php } ?>
            </select>
          </div>

         <div class="form-gorup">
    <label>File</label>
    <input type="file" class="from-control"  name="file" multiple required="required">
    
  </div><br>

  

            <div class = "form-group">
          <label>Tindakan</label>
            <select class="form-control" name="tdk" required="required">
              <option value="">lanjut</option>
              <?php
              $ambil=$koneksi->query("SELECT *FROM tindakan");
              while ($tdk = $ambil->fetch_assoc()) {
                ?>
                <option value="<?php echo $tdk['nm_tdkl']?>">
                  <?php echo $tdk['nm_tdkl']?>
                </option>
              <?php } ?>
            </select>
          </div>

          <div class = "form-group">
          <label>Status</label>
            <select class="form-control" name="status" required="required">
              <option value="">Status</option>
              <?php
              $ambil=$koneksi->query("SELECT *FROM status");
              while ($status = $ambil->fetch_assoc()) {
                ?>
                <option value="<?php echo $status['nm_status']?>">
                  <?php echo $status['nm_status']?>
                </option>
              <?php } ?>
            </select>
          </div>
          
          <div class = "form-group">
    <label>Nama Penginput</label>
    <input type="text" class="form-control" name="keterangan" required="required">
      </div>

         
          
              
              <div class="form-group">        
                <div class="col-sm-offset-3 col-sm-11">
                <button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
 
 $file = $_FILES['file']['name'];
 $file_type=$_FILES['file']['type'];
  $lokasi = $_FILES['file']['tmp_name'];
  if ($file_type=="application/pdf"){
  move_uploaded_file($lokasi,"file_d/".$file);
  $koneksi->query("INSERT INTO fromku
    (klarifikasi,tgl,tkt,m_pelaporan,jenis,jn_kasus,judul,deskripsi,nm_pelapor,instansi_telapor,provinsi,daerah,lokus,lampiran_aduan,tindak_lanjut,status_jb,keterangan)
    VALUES ('$_POST[klarifikasi]','$_POST[date]','$_POST[tkt]','$_POST[media]','$_POST[jenis]','$_POST[jeniskasus]','$_POST[deskripsi]','$_POST[judul]','$_POST[nm_pelapor]','$_POST[instansi_telapor]','$_POST[provinsi]','$_POST[kota]','$_POST[lokus]','$file','$_POST[tdk]','$_POST[status]','$_POST[keterangan]')");



  
  echo "<script>alert('Data Tersimpan');</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=fromku'>";
}
else{
  echo "<script>alert('PDF Only');</script>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=fromku'>";
}
}

?>
        </div>
      </div>     
    </div>
  </div>  
</div>
</body>
</html>

