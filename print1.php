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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Print</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/asset/bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/asset/select2-4.0.6-rc.1/dist/css/select2.min.css">
  <script src="vendor/asset/jquery/jquery-3.3.1.min.js"></script>
  <script src="vendor/asset/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="vendor/asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>   
  <script src="vendor/asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>   
  <script src="vendor/asset/js/app.js"></script>


  <?php
    include "koneksi.php";  
    include "function.php";
  ?>
</head>
<body>


<h2>Print</h2>
<?php
$ambil = $koneksi->query("SELECT *FROM fromku WHERE id_from = '$_GET[id]' ");
$pecah = $ambil->fetch_assoc();
?>

<div class="container">
  <br>
  <div class="row">
    <div class="col-sm-offset-1  col-sm-9">
      <div class="panel panel-default">
        <div class="panel-heading"><b>Ubah From</b></div>
        <div class="panel-body">

<form method="post" enctype="multipart/form-data"> 
 

  <div class = "form-group">
          <label>Klarifikasi</label>
            <select class="form-control" name="klarifikasi">
              <option value="<?php echo $pecah['klarifikasi']; ?>"><?php echo $pecah['klarifikasi']; ?></option>
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
    <input type="date" class="form-control" name="tgl" value="<?php echo $pecah['tgl']; ?>">
  </div>
  <div class = "form-group">
    <label>Tiket</label>
    <input type="text" class="form-control" name="tkt"  value="<?php echo $pecah['tkt']; ?>">
  </div>
  <div class="form-group">
        <label>Media Pelapor</label>
        <select class="form-control" name="media">
      <option value="">"<?php echo $pecah['m_pelaporan']; ?>"</option>
      <option value="WEB POSKO">WEB POSKO</option>
      <option value="SMS">SMS</option>
      <option value="EMAIL">EMAIL</option>
      <option value="SOSIAL MEDIA">SOSIAL MEDIA</option>
      <option value="TELEPON">TELEPON</option>
      <option value="BERITA ONLINE">BERITA ONLINE</option>
      <option value="WHATSAPP">WHATSAPP</option>
      <option value="DATANG LANGSUNG">DATANG LANGSUNG</option>
      <option value="TERUSAN ULT">TERUSAN ULT</option>
      <option value="WEB WBS">WEB WBS</option>
    </select>
      </div>



        <div class = "form-group">
          <label>Pilih Jenis</label>
            <select class="form-control" name="jenis">
              <option value=""><?php echo $pecah['jenis']; ?></option>
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
            <select class="form-control" name="jeniskasus">
              <option value=""><?php echo $pecah['jn_kasus']; ?></option>
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


         

    
      
      <div class="form-group">
    <label>Deskripsi</label>
    <input   class="form-control" name="deskripsi"  value="<?php echo $pecah['deskripsi']; ?>">

    <div class = "form-group">
    <label>Nama Pelapor</label>
    <input type="text" class="form-control" name="nm_pelapor" value="<?php echo $pecah['nm_pelapor']; ?>">
      </div>

    <div class = "form-group">
    <label>Instansi Telapor</label>
    <input type="text" class="form-control" name="instansi_telapor" value="<?php echo $pecah['instansi_telapor']; ?>">
  </div>
</div>



  <form class="form-horizontal" method="post">
              <div class="form-group">
                <label class="control-label col-sm-3">Provinsi:</label>
                <div class="col-sm-9">
                  <?php                    
                    $sql_provinsi = mysqli_query($koneksi,"SELECT * FROM provinsi ORDER BY nm_provinsi ASC");
                   ?>
                  <select class="form-control" name="provinsi" id="provinsi">
                    <option><?php echo $pecah['provinsi']; ?></option>
                    <?php                       
                        while($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)){ 
                           echo '<option value="'.$rs_provinsi['id_provinsi'].'">'.$rs_provinsi['nm_provinsi'].'</option>';
                        }                        
                      ?>
                  </select>
                  
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kota/Kabupaten:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kota" id="kota">
                    <option><?php echo $pecah['daerah']; ?></option>
                  </select>
                  
                </div>
              </div>


     

        <div class = "form-group">
          <label>Pilih Lokus</label>
            <select class="form-control" name="lokus">
              <option value=""><?php echo $pecah['lokus']; ?></option>
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
    <input type="file" class="from-control" name="file" value="<?php echo $pecah['lampiran_aduan']; ?>">
  </div><br>

  

            <div class = "form-group">
          <label>Tindakan</label>
            <select class="form-control" name="tdk">
              <option value=""><?php echo $pecah['tindak_lanjut']; ?></option>
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
            <select class="form-control" name="status">
              <option value=""><?php echo $pecah['status_jb']; ?></option>
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
          
	
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) 
{{
	$koneksi->query("UPDATE fromku SET klarifikasi='$_POST[klarifikasi]',instansi_telapor='$_POST[instansi_telapor]'
	WHERE id_from='$_GET[id]' ");
}

	echo "<script>alert('Data From Telah Diubah');</script>";
	echo "<meta http-equiv='refresh' content='1;url=tables.php'>";
  
}
?>

 <a href="print.php" class="btn btn-primary">print</a>

<script>
    window.print();
  </script>



    </div>
      </div>     
    </div>
  </div>  
</div>
</body>
</html>
