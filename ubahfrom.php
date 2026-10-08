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
include 'koneksi.php';

if (!isset($_SESSION['admin'])) {
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='login.php';</script>";
  header('location:login.php');
  exit();
}
?>
<!DOCTYPE html>
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

  ?>

</head>

<body>
  <?php include 'menu.php' ?>

  <?php
  $ambil = $koneksi->query("SELECT *FROM fromku WHERE id_from = '$_GET[id]' ");
  $pecah = $ambil->fetch_assoc();
  ?>

  <div class="container">
    <br>
    <div class="row">
      <div class="col-sm-offset-1  col-sm-9">
        <div class="panel panel-default">
          <div class="panel-heading"><b>Ubah From<img src="logo1.png" width='40' height='30' align="right"></b></div><br>
          <div class="panel-body">

            <form method="post" enctype="multipart/form-data">


              <div class="form-group">
                <label>Klarifikasi</label>
                <select class="form-control" name="klarifikasi" required="required">
                  <option value="<?php echo $pecah['klarifikasi']; ?>"><?php echo $pecah['klarifikasi']; ?></option>
                  <?php
                  $ambil = $koneksi->query("SELECT *FROM klarifikasi");
                  while ($klarifikasi = $ambil->fetch_assoc()) {
                  ?>
                    <option value="<?php echo $klarifikasi['nm_klarifikasi'] ?>">
                      <?php echo $klarifikasi['nm_klarifikasi'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>



              <div class="form-group">
                <label>Date</date>
                  <input type="date" class="form-control" name="date" required="required" value="<?php echo $pecah['tgl']; ?>">
              </div>



              <div class="form-group">
                <label>Tiket</label>
                <input type="text" class="form-control" name="tkt" value="<?php echo $pecah['tkt']; ?>">
              </div>

              <div class="form-group">
                <label>Pilih Media</label>
                <select class="form-control" name="media">
                  <option value="<?php echo $pecah['m_pelaporan']; ?>"><?php echo $pecah['m_pelaporan']; ?></option>
                  <?php
                  $ambil = $koneksi->query("SELECT *FROM media");
                  while ($mediaku = $ambil->fetch_assoc()) {
                  ?>
                    <option value="<?php echo $mediaku['m_pelapor'] ?>">
                      <?php echo $mediaku['m_pelapor'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Pilih Jenis</label>
                <select class="form-control" name="jenis">
                  <option value="<?php echo $pecah['jenis']; ?>"><?php echo $pecah['jenis']; ?></option>
                  <?php
                  $ambil = $koneksi->query("SELECT *FROM jenis");
                  while ($jenis = $ambil->fetch_assoc()) {
                  ?>
                    <option value="<?php echo $jenis['nm_jenis'] ?>">
                      <?php echo $jenis['nm_jenis'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Pilih Kasus</label>
                <select class="form-control" name="jeniskasus">
                  <option value="<?php echo $pecah['jn_kasus']; ?>"><?php echo $pecah['jn_kasus']; ?></option>
                  <?php
                  $ambil = $koneksi->query("SELECT *FROM jn_kasus");
                  while ($jk = $ambil->fetch_assoc()) {
                  ?>
                    <option value="<?php echo $jk['nm_jn'] ?>">
                      <?php echo $jk['nm_jn'] ?>
                    </option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Judul</label>
                <input class="form-control" name="judul" rows="10" value="<?php echo $pecah['judul']; ?>">

                <div class="form-group">
                  <label>Deskripsi</label>
                  <input class="form-control" name="deskripsi" rows="10" value="<?php echo $pecah['deskripsi']; ?>">

                  <div class="form-group">
                    <label>Nama Pelapor</label>
                    <input type="text" class="form-control" name="nm_pelapor" value="<?php echo $pecah['nm_pelapor']; ?>" required="required">
                  </div>

                  <div class="form-group">
                    <label>Instansi Telapor</label>
                    <input type="text" class="form-control" name="instansi_telapor" value="<?php echo $pecah['instansi_telapor']; ?>">
                  </div>
                </div>



                <form class="form-horizontal" method="post">
                  <div class="form-group">
                    <label class="control-label col-sm-3">Provinsi:</label>
                    <div class="col-sm-9">
                      <?php
                      $sql_provinsi = mysqli_query($koneksi, "SELECT * FROM provinsi ORDER BY nm_provinsi ASC");
                      ?>
                      <select class="form-control" name="provinsi" id="provinsi">
                        <option><?php echo $pecah['provinsi']; ?></option>
                        <?php
                        while ($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)) {
                          echo '<option value="' . $rs_provinsi['id_provinsi'] . '.' . $rs_provinsi['nm_provinsi'] . '">' . $rs_provinsi['nm_provinsi'] . '</option>';
                        }
                        ?>
                      </select>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Kota/Kabupaten:</label>
                    <div class="col-sm-9">
                      <select class="form-control" name="kota" id="kota">
                        <option><?php echo $pecah['daerah']; ?></option>
                      </select>

                    </div>
                  </div>




                  <div class="form-group">
                    <label>Pilih Lokus</label>
                    <select class="form-control" name="lokus">
                      <option value="<?php echo $pecah['lokus']; ?>"><?php echo $pecah['lokus']; ?></option>
                      <?php
                      $ambil = $koneksi->query("SELECT *FROM itjen");
                      while ($itjen = $ambil->fetch_assoc()) {
                      ?>
                        <option value="<?php echo $itjen['nm_itjen'] ?>">
                          <?php echo $itjen['nm_itjen'] ?>
                        </option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="form-gorup">
                    <label>File</label>

                    <label>Name File = <?php echo $pecah['lampiran_aduan']; ?></label>

                  </div>

                  <a href="ubahfile.php?halaman=ubahfile&id=<?php echo $pecah['id_from']; ?>" class="btn btn-warning">>>> Ubah File <<<< /a>





                      <div class="form-group">
                        <label>Tindakan</label>
                        <select class="form-control" name="tdk">
                          <option value="<?php echo $pecah['tindak_lanjut']; ?>"><?php echo $pecah['tindak_lanjut']; ?></option>
                          <?php
                          $ambil = $koneksi->query("SELECT *FROM tindakan");
                          while ($tdk = $ambil->fetch_assoc()) {
                          ?>
                            <option value="<?php echo $tdk['nm_tdkl'] ?>">
                              <?php echo $tdk['nm_tdkl'] ?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          <option value="<?php echo $pecah['status_jb']; ?>"><?php echo $pecah['status_jb']; ?></option>
                          <?php
                          $ambil = $koneksi->query("SELECT *FROM status");
                          while ($status = $ambil->fetch_assoc()) {
                          ?>
                            <option value="<?php echo $status['nm_status'] ?>">
                              <?php echo $status['nm_status'] ?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Nama Penginput</label>
                        <input class="form-control" name="keterangan" rows="10" value="<?php echo $pecah['keterangan']; ?>">


                        <button class="btn btn-primary" name="ubah">Ubah</button>
                </form>

                <?php
                if (isset($_POST['ubah'])) {
                  $file = $_FILES['file']['name'];
                  $lokasi = $_FILES['file']['tmp_name'];
                  move_uploaded_file($lokasi, "file_d/" . $file); {
                    $koneksi->query("UPDATE fromku SET klarifikasi='$_POST[klarifikasi]',tgl='$_POST[date]',tkt='$_POST[tkt]',m_pelaporan='$_POST[media]',jenis='$_POST[jenis]',jn_kasus='$_POST[jeniskasus]',judul='$_POST[judul]',deskripsi='$_POST[deskripsi]',nm_pelapor='$_POST[nm_pelapor]',instansi_telapor='$_POST[instansi_telapor]',provinsi='$_POST[provinsi]',daerah='$_POST[kota]',lokus='$_POST[lokus]',tindak_lanjut='$_POST[tdk]',status_jb='$_POST[status]',keterangan='$_POST[keterangan]'
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