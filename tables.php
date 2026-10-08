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

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="vendor/chartjs/Chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>



<body id="page-top">
  

<?php
// FUNGSI
function tanggal_indo($tanggal, $cetak_hari = false)
{
  $hari = array ( 1 =>    'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu',
        'Minggu'
      );
      
  $bulan = array (1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );
  $split    = explode('-', $tanggal);
  $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
  
  if ($cetak_hari) {
    $num = date('N', strtotime($tanggal));
    return $hari[$num] . ', ' . $tgl_indo;
  }
  return $tgl_indo;
}


  
    include("koneksi.php");     
  ?>
  <?php include 'menu.php'?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Inputan Data</h6>
            </div>
            <div class="card-body" >
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                  <thead>
                    <tr >
                <th>No</th>
                <th>Opsi</th>
                <th>Klarifikasi</a></th>
                <th>Tgl</th>
                <th>Tiket</th>
                <th>Media Pelaporan</th>
                <th>Jenis</th>
                <th>Jenis Kasus</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Nama Pelapor</th>
                <th>Instansi Telapor</th>
                <th>Provinsi</th>
                <th>Daerah</th>
                <th>Bukti</th>
                <th>Lokus</th>
                <th>Tindak Lanjut</th>
                <th>Status</th>
                <th>Nama Penginput</th>
                <th>Opsi</th>
                
              </tr>
                  </thead>
                  <tfoot>
                    <tr >
                <th>No</th>
                <th>Opsi</th>
                <th>Klarifikasi</a></th>
                <th>Tgl</th>
                <th>Tiket</th>
                <th>Media Pelaporan</th>
                <th>Jenis</th>
                <th>Jenis Kasus</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Nama Pelapor</th>
                <th>Instansi Telapor</th>
                <th>Provinsi</th>
                <th>Daerah</th>
                <th>Bukti</th>
                <th>Lokus</th>
                <th>Tindak Lanjut</th>
                <th>Status</th>
                <th>Nama Penginput</th>
                <th>Opsi</th>
                
              </tr>
                  </tfoot>
                  <tbody>
                     <?<?php $nomor = 1; ?>
    <?php $ambil=$koneksi->query("SELECT *FROM fromku "); ?>
    <?php while ($pecah = $ambil->fetch_assoc()){ ?>

      <tr>
        <td><?php echo $nomor; ?></td>
        <td class="column100 column17" data-column="column17">
          
            <a href="hapusdata.php?halaman=hapusdata&id=<?php echo $pecah['id_from'];   ?>"
             class="btn btn-danger btn-circle" data-toggle="tooltip" title="Hapus">
                    <i class="fas fa-trash"></i>
            <a href="ubhf.php?halaman=ubahfrom&id=<?php echo $pecah['id_from']; ?>"
             class="btn btn-warning btn-circle" data-toggle="tooltip" title="Ubah From">
                    <i class="far fa-edit"></i>
                  </a>

              <a href = "print.php?halaman=print&id=<?php echo $pecah['id_from']; ?>" 
              class="btn btn-success btn-circle" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print"></i>
                  </a>

            </td>
        <td><?php echo $pecah['klarifikasi']; ?></td>
        <td><?php $tanggal = date('Y-m-d', strtotime($pecah['tgl'])); echo '' . tanggal_indo($tanggal, true) . '';?></td>
        <td><?php echo $pecah['tkt']; ?></td>
        <td><?php echo $pecah['m_pelaporan']; ?></td>
        <td><?php echo $pecah['jenis']; ?></td>
        <td><?php echo $pecah['jn_kasus']; ?></td>
        <td><?php echo $pecah['judul']; ?></td>
        <td><?php echo substr($pecah['deskripsi'], 0, 20)?>...<a href="detail.php?halaman=detail&id=<?php echo $pecah['id_from']; ?>"><br>Read More</td>
        <td><?php echo $pecah['nm_pelapor']; ?></td>
        <td><?php echo $pecah['instansi_telapor']; ?></td>
        <td><?php echo $pecah['provinsi']; ?></td>
        <td><?php echo $pecah['daerah']; ?></td>
        <td>
        <?php echo substr($pecah['lampiran_aduan'], 0, 20)?><br>
        <a href="file_d/<?=$pecah['lampiran_aduan']; ?>">Download</a><br>
        <a href="ubahfile.php?halaman=ubahfile&id=<?php echo $pecah['id_from']; ?>"> Ubah File </a>
        </td>
        <td><?php echo $pecah['lokus']; ?></td>
        <td><?php echo $pecah['tindak_lanjut']; ?></td>
        <td><?php echo $pecah['status_jb']; ?></td>
        <td><?php echo $pecah['keterangan']; ?></td>
        <td class="column100 column17" data-column="column17">
          
            <a href="hapusdata.php?halaman=hapusdata&id=<?php echo $pecah['id_from'];   ?>"
             class="btn btn-danger btn-circle" data-toggle="tooltip" title="Hapus">
                    <i class="fas fa-trash"></i>
            <a href="ubhf.php?halaman=ubahfrom&id=<?php echo $pecah['id_from']; ?>"
             class="btn btn-warning btn-circle" data-toggle="tooltip" title="Ubah From">
                    <i class="far fa-edit"></i>
                  </a>

              <a href = "print.php?halaman=print&id=<?php echo $pecah['id_from']; ?>" 
              class="btn btn-success btn-circle" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print"></i>
                  </a>

            </td>
          </tr>
          <?php $nomor++ ?>
        <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Baguos Priyo Satiaji 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
