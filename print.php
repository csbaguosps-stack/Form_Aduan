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

  <?php
    include "koneksi.php";  
    include "function.php";
  ?>
</head>
<body>




<?php
$ambil = $koneksi->query("SELECT *FROM fromku WHERE id_from = '$_GET[id]' ");
$pecah = $ambil->fetch_assoc();
?>

<div class="container">
 

<form method="post" enctype="multipart/form-data"> 
 

<table border="0" align="center">
  <?php 
    include 'koneksi.php';
      ?>
        <tr>
            <th rowspan="2" colspan="3" >
            <img src="logo1.png" width='140' height='100'></th>
            <th colspan="7" >KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN
INSPEKTORAT JENDERAL<br>
Jalan Jenderal Sudirman Senayan, Jakarta 10270<br>
Telepon 021 - 5737104<br>
Laman: www.itjen.kemdikbud.go.id
</th>
        </tr>
        <tr>
            
            <th colspan="10">&nbsp;</th>
        </tr>
        <tr>
            <td align="center" colspan="10"  ><font size="5">Aduan Keluhan</font></td>
           
            
        </tr>
        <tr>
            <td align="center" >&nbsp;</td>         
        </tr>
        <tr>
            <td align="center" colspan="10">&nbsp;</td>         
        </tr>
        <tr>
            <td align="center" >&nbsp;</td>         
        </tr>
        <tr>
        <td ></td>
            <td colspan="3"><font size="4">Klarifikasi</font></td>
            <td colspan="5">:</td>
            <td colspan="10"><font size="4"><?php echo $pecah['klarifikasi']; ?></font></td>
            
           </tr>
        <tr>
        <td width="150px" colspan="1"></td>
            <td colspan="3"><font size="4">Tanggal</font></td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['tgl']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Tiket</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['tkt']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Media Laporan</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['m_pelaporan']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Jenis</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['jenis']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Jenis Kasus</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['jn_kasus']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Deskripsi</td>
            <td colspan="5">:</td>
            <td width="500px"><?php echo $pecah['deskripsi']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Nama Pelapor</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['nm_pelapor']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Provinsi</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['provinsi']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Daerah</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['daerah']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Bukti</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['lampiran_aduan']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Lokus</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['lokus']; ?></td>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Tindak Lanjut</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['tindak_lanjut']; ?></td></br>
            
        </tr>
        <tr>
        <td colspan="1"></td>
        <td colspan="3">Status</td>
            <td colspan="5">:</td>
            <td ><?php echo $pecah['status_jb']; ?></td>
            
        </tr>
       
        
    </table>
          
  
 
</form>





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
