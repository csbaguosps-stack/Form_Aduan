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

</head>

<body id="page-top">

  <?php include 'menu.php' ?>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a class="collapse-item" href="tables.php">Total Data</a></div>
              <div class="h5 mb-0 font-weight-bold text-gray-800" href="tables.php">
                <?php
                $jumlah_data = mysqli_query($koneksi, "select * from fromku ");
                echo mysqli_num_rows($jumlah_data);
                ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-sync-alt fa-spin fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Belum Selesai</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php
                    $jumlah_bm = mysqli_query($koneksi, "select * from fromku where status_jb='Belum Selesai'");
                    echo mysqli_num_rows($jumlah_bm); ?></div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 
                    <?php
                    // menghitung grafik
                    $data_barang = mysqli_query($koneksi, "SELECT status_jb FROM fromku");
                    $data_barang2 = mysqli_query($koneksi, "SELECT * FROM fromku where status_jb='Belum Selesai'");
                    // menghitung data barang
                    $jumlah_barang = mysqli_num_rows($data_barang);
                    $jumlah_barang2 = mysqli_num_rows($data_barang2);
                    ?> <?php echo $jumlah_barang2 / $jumlah_barang * 100; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Selesai</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                    <?php
                    $jumlah_bm = mysqli_query($koneksi, "select * from fromku where status_jb='Selesai'");
                    echo mysqli_num_rows($jumlah_bm); ?></div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 
                    <?php
                    // menghitung grafik
                    $data_barang = mysqli_query($koneksi, "SELECT status_jb FROM fromku");
                    $data_barang2 = mysqli_query($koneksi, "SELECT * FROM fromku where status_jb='Selesai'");
                    // menghitung data barang
                    $jumlah_barang = mysqli_num_rows($data_barang);
                    $jumlah_barang2 = mysqli_num_rows($data_barang2);
                    ?> <?php echo $jumlah_barang2 / $jumlah_barang * 100; ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tanggal -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tanggal</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo date('d / M / y'); ?></div>
            </div>
            <div class="col-auto">
              <i class="fa fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Media pelapor</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div>
          <canvas id="MeDia"></canvas>
        </div>
        <br /> <br />
        <script>
          var ctx = document.getElementById("MeDia").getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
              labels: ["WEB POSKO", "SMS", "EMAIL", "SOSIAL MEDIA", "TELEPON", "BERITA ONLINE", "WHATSAPP", "DATANG LANGSUNG", "TERUSAN ULT", "WEB WBS"],
              datasets: [{
                label: '',
                data: [
                  <?php
                  $jumlah_WEBp = mysqli_query($koneksi, "select * from fromku where m_pelaporan='WEB POSKO'");
                  echo mysqli_num_rows($jumlah_WEBp);
                  ?>,
                  <?php
                  $jumlah_SMS = mysqli_query($koneksi, "select * from fromku where m_pelaporan='SMS'");
                  echo mysqli_num_rows($jumlah_SMS);
                  ?>,
                  <?php
                  $jumlah_EMAIL = mysqli_query($koneksi, "select * from fromku where m_pelaporan='EMAIL'");
                  echo mysqli_num_rows($jumlah_EMAIL);
                  ?>,
                  <?php
                  $jumlah_SOSIALm = mysqli_query($koneksi, "select * from fromku where m_pelaporan='SOSIAL MEDIA'");
                  echo mysqli_num_rows($jumlah_SOSIALm);
                  ?>,
                  <?php
                  $jumlah_TELEPON = mysqli_query($koneksi, "select * from fromku where m_pelaporan='TELEPON'");
                  echo mysqli_num_rows($jumlah_TELEPON);
                  ?>,
                  <?php
                  $jumlah_BERITAo = mysqli_query($koneksi, "select * from fromku where m_pelaporan='BERITA ONLINE'");
                  echo mysqli_num_rows($jumlah_BERITAo);
                  ?>,
                  <?php
                  $jumlah_WHATSAPP = mysqli_query($koneksi, "select * from fromku where m_pelaporan='WHATSAPP'");
                  echo mysqli_num_rows($jumlah_WHATSAPP);
                  ?>,
                  <?php
                  $jumlah_ATANG = mysqli_query($koneksi, "select * from fromku where m_pelaporan='DATANG LANGSUNG'");
                  echo mysqli_num_rows($jumlah_ATANG);
                  ?>,
                  <?php
                  $jumlah_ULT = mysqli_query($koneksi, "select * from fromku where m_pelaporan='TERUSAN ULT'");
                  echo mysqli_num_rows($jumlah_ULT);
                  ?>,
                  <?php
                  $jumlah_WEBw = mysqli_query($koneksi, "select * from fromku where m_pelaporan='WEB WBS'");
                  echo mysqli_num_rows($jumlah_WEBw);
                  ?>
                ],
                backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',

                ],
                borderColor: [
                  'rgba(255,99,132,1)',

                ],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true
                  }
                }]
              }
            }
          });
        </script>
      </div>
    </div>



    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Kasus yang Tertangani</h6>
          <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
              <div class="dropdown-header">Dropdown Header:</div>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </div>
        </div>
        <!-- Card Body -->
        <div>
          <canvas id="keluhan"></canvas>
        </div>
        <br /><br />
        <script>
          var ctx = document.getElementById("keluhan").getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
              labels: ["Selesai", "Belum Selesai", ],
              datasets: [{
                label: '',
                data: [
                  <?php
                  $jumlah_selesai = mysqli_query($koneksi, "select * from fromku where status_jb='Selesai'");
                  echo mysqli_num_rows($jumlah_selesai);

                  ?>,
                  <?php
                  $jumlah_bm = mysqli_query($koneksi, "select * from fromku where status_jb='Belum Selesai'");
                  echo mysqli_num_rows($jumlah_bm);
                  ?>

                ],
                backgroundColor: [
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(255, 99, 132, 0.2)'

                ],
                borderColor: [
                  'rgba(75, 192, 192, 1)',
                  'rgba(255,99,132,1)'

                ],
                borderWidth: 2
              }]
            },
            options: {

              ticks: {
                beginAtZero: true

              }
            }
          });
        </script>
      </div>
    </div>




    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Baguos Priyo Satiaji 2020 <br></span>
      </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>