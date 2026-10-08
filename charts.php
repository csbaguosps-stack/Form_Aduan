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

</head>

<body id="page-top">

 <?php include 'menu.php'?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a class="collapse-item" href="tables.php">Total Data</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php 
                         $jumlah_data = mysqli_query($koneksi,"select * from fromku ");
                           echo mysqli_num_rows($jumlah_data);
                         ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Grafik</h1>
          <p class="mb-4">Grafik analisa aduan yang telah di data</a>.</p>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-12 col-lg-7">


              <!-- Kalrifikasi -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Kalrifikasi</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="Kalrifikasi" height="100"></canvas>
                  </div>
                  <script>
    var ctx = document.getElementById("Kalrifikasi").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["PENGADUAN", "WBS", "PERMOHONAN INFORMASI", "SARAN"
],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_WEBp = mysqli_query($koneksi,"select * from fromku where klarifikasi='PENGADUAN'");
          echo mysqli_num_rows($jumlah_WEBp);
          ?>, 
          <?php 
          $jumlah_SMS = mysqli_query($koneksi,"select * from fromku where klarifikasi='WBS'");
          echo mysqli_num_rows($jumlah_SMS);
          ?>,
          <?php 
          $jumlah_EMAIL = mysqli_query($koneksi,"select * from fromku where klarifikasi='PERMOHONAN INFORMASI'");
          echo mysqli_num_rows($jumlah_EMAIL);
          ?>,
          <?php 
          $jumlah_SOSIALm = mysqli_query($koneksi,"select * from fromku where klarifikasi='SARAN'");
          echo mysqli_num_rows($jumlah_SOSIALm);
          ?>,
         
          ],
          backgroundColor: [
            'rgba(255, 159, 643, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
                
          
          ],
          borderColor: [
            'rgba(255, 159, 64, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
                
          
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
                  <hr>
                 
                </div>
              </div>



              <!-- Media pelapor -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Media pelapor</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="MeDia" height="100"></canvas>
                  </div>
                  <script>
    var ctx = document.getElementById("MeDia").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["WEB POSKO", "SMS", "EMAIL", "SOSIAL MEDIA", "TELEPON", "BERITA ONLINE", "WHATSAPP", "DATANG LANGSUNG", "TERUSAN ULT", "WEB WBS"
],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_WEBp = mysqli_query($koneksi,"select * from fromku where m_pelaporan='WEB POSKO'");
          echo mysqli_num_rows($jumlah_WEBp);
          ?>, 
          <?php 
          $jumlah_SMS = mysqli_query($koneksi,"select * from fromku where m_pelaporan='SMS'");
          echo mysqli_num_rows($jumlah_SMS);
          ?>,
          <?php 
          $jumlah_EMAIL = mysqli_query($koneksi,"select * from fromku where m_pelaporan='EMAIL'");
          echo mysqli_num_rows($jumlah_EMAIL);
          ?>,
          <?php 
          $jumlah_SOSIALm = mysqli_query($koneksi,"select * from fromku where m_pelaporan='SOSIAL MEDIA'");
          echo mysqli_num_rows($jumlah_SOSIALm);
          ?>,
          <?php 
          $jumlah_TELEPON = mysqli_query($koneksi,"select * from fromku where m_pelaporan='TELEPON'");
          echo mysqli_num_rows($jumlah_TELEPON);
          ?>,
          <?php 
          $jumlah_BERITAo = mysqli_query($koneksi,"select * from fromku where m_pelaporan='BERITA ONLINE'");
          echo mysqli_num_rows($jumlah_BERITAo);
          ?>,
          <?php 
          $jumlah_WHATSAPP = mysqli_query($koneksi,"select * from fromku where m_pelaporan='WHATSAPP'");
          echo mysqli_num_rows($jumlah_WHATSAPP);
          ?>,
          <?php 
          $jumlah_ATANG = mysqli_query($koneksi,"select * from fromku where m_pelaporan='DATANG LANGSUNG'");
          echo mysqli_num_rows($jumlah_ATANG);
          ?>,
          <?php 
          $jumlah_ULT = mysqli_query($koneksi,"select * from fromku where m_pelaporan='TERUSAN ULT'");
          echo mysqli_num_rows($jumlah_ULT);
          ?>,
          <?php 
          $jumlah_WEBw = mysqli_query($koneksi,"select * from fromku where m_pelaporan='WEB WBS'");
          echo mysqli_num_rows($jumlah_WEBw);
          ?>  
          ],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)'
          
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
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
                  <hr>
                 
                </div>
              </div>

              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Jenis Pilihan</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="Jenis" height="100"></canvas>
                  </div>

                  <script>
    var ctx = document.getElementById("Jenis").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["PENGADAAN BARANG DAN JASA", "KEUANGAN", "KEPEGAWAIAN", "AKADEMIK", "ASET", "LAINNYA"
],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_WEBp = mysqli_query($koneksi,"select * from fromku where jenis='PENGADAAN BARANG DAN JASA'");
          echo mysqli_num_rows($jumlah_WEBp);
          ?>, 
          <?php 
          $jumlah_SMS = mysqli_query($koneksi,"select * from fromku where jenis='KEUANGAN'");
          echo mysqli_num_rows($jumlah_SMS);
          ?>,
          <?php 
          $jumlah_EMAIL = mysqli_query($koneksi,"select * from fromku where jenis='KEPEGAWAIAN'");
          echo mysqli_num_rows($jumlah_EMAIL);
          ?>,
          <?php 
          $jumlah_SOSIALm = mysqli_query($koneksi,"select * from fromku where jenis='AKADEMIK'");
          echo mysqli_num_rows($jumlah_SOSIALm);
          ?>,
          <?php 
          $jumlah_TELEPON = mysqli_query($koneksi,"select * from fromku where jenis='ASET'");
          echo mysqli_num_rows($jumlah_TELEPON);
          ?>,
          <?php 
          $jumlah_BERITAo = mysqli_query($koneksi,"select * from fromku where jenis='LAINNYA'");
          echo mysqli_num_rows($jumlah_BERITAo);
          ?>,
          
          ],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
          
          ],
          borderColor: [
            'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
          
          ],
          borderWidth: 2
        }]
      },
      options: {
        
            ticks: {
              beginAtZero:true
            
        }
      }
    });
  </script>
                  <hr>
              
                </div>
              </div>            

              <!-- Jenis kasus -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Jenis Kasus</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="Jeniskk" height="100"></canvas>
                  </div>

                  <script>
    var ctx = document.getElementById("Jeniskk").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Tender", "Proses Lelang", "Spect Teknis", "Keterlambatan", "Pungutan Liar", "BOS", "BSM/PIP", "DAK", "TFG/Sertifikasi", "KKN", "Gratifikasi", "Bantuan Pemerintah", "Pungutan UNBK", "Seragam", "CPNS", "Kepegawaian", "Pengangkatan", "Pensiun & Taspen", "MPLS", "PPDB", "USBN", "Ujian Nasional", "Proses Belajar Mengajar", "Ijazah Palsu", "Penahanan Administrasi", "Hasil UN/USBN", "Larangan Ikut Ujian", "BMN", "Lahan Bangunan", "Perselingkuhan", "Penyalahgunaan Wewenang", "Perizinan", "Buku/LKS", "Transparansi Data"
],
        datasets: [{
          label: '',
          data: [
            <?php 
          $jumlah_1 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Tender'");
          echo mysqli_num_rows($jumlah_1);
          ?>, 
          <?php 
          $jumlah_2 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Proses Lelang'");
          echo mysqli_num_rows($jumlah_2);
          ?>,
          <?php 
          $jumlah_3 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Spect Teknis'");
          echo mysqli_num_rows($jumlah_3);
          ?>,
          <?php 
          $jumlah_4 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Keterlambatan'");
          echo mysqli_num_rows($jumlah_4);
          ?>,
          <?php 
          $jumlah_5 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Pungutan Liar'");
          echo mysqli_num_rows($jumlah_5);
          ?>,
          <?php 
          $jumlah_6 = mysqli_query($koneksi,"select * from fromku where jn_kasus='BOS'");
          echo mysqli_num_rows($jumlah_6);
          ?>,
          <?php 
          $jumlah_7 = mysqli_query($koneksi,"select * from fromku where jn_kasus='BSM/PIP'");
          echo mysqli_num_rows($jumlah_7);
          ?>,
          <?php 
          $jumlah_8 = mysqli_query($koneksi,"select * from fromku where jn_kasus='DAK'");
          echo mysqli_num_rows($jumlah_8);
          ?>,
          <?php 
          $jumlah_9 = mysqli_query($koneksi,"select * from fromku where jn_kasus='TFG/Sertifikasi'");
          echo mysqli_num_rows($jumlah_9);
          ?>,
          <?php 
          $jumlah_10 = mysqli_query($koneksi,"select * from fromku where jn_kasus='KKN'");
          echo mysqli_num_rows($jumlah_10);
          ?>,
          <?php 
          $jumlah_11 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Gratifikasi'");
          echo mysqli_num_rows($jumlah_11);
          ?>,
          <?php 
          $jumlah_12 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Bantuan Pemerintah'");
          echo mysqli_num_rows($jumlah_12);
          ?>,
          <?php 
          $jumlah_13 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Pungutan UNBK'");
          echo mysqli_num_rows($jumlah_13);
          ?>,
          <?php 
          $jumlah_14 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Seragam'");
          echo mysqli_num_rows($jumlah_14);
          ?>,
          <?php 
          $jumlah_15 = mysqli_query($koneksi,"select * from fromku where jn_kasus='CPNS'");
          echo mysqli_num_rows($jumlah_15);
          ?>,
          <?php 
          $jumlah_16 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Kepegawaian'");
          echo mysqli_num_rows($jumlah_16);
          ?>,
          <?php 
          $jumlah_17 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Pengangkatan'");
          echo mysqli_num_rows($jumlah_17);
          ?>,
          <?php 
          $jumlah_18 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Pensiun & Taspen'");
          echo mysqli_num_rows($jumlah_18);
          ?>,
          <?php 
          $jumlah_19 = mysqli_query($koneksi,"select * from fromku where jn_kasus='MPLS'");
          echo mysqli_num_rows($jumlah_19);
          ?>,
          <?php 
          $jumlah_20 = mysqli_query($koneksi,"select * from fromku where jn_kasus='PPDB'");
          echo mysqli_num_rows($jumlah_20);
          ?>,
          <?php 
          $jumlah_21 = mysqli_query($koneksi,"select * from fromku where jn_kasus='USBN'");
          echo mysqli_num_rows($jumlah_21);
          ?>,
          <?php 
          $jumlah_22 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Ujian Nasional'");
          echo mysqli_num_rows($jumlah_22);
          ?>,
          <?php 
          $jumlah_23 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Proses Belajar Mengajar'");
          echo mysqli_num_rows($jumlah_23);
          ?>,
          <?php 
          $jumlah_24 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Ijazah Palsu'");
          echo mysqli_num_rows($jumlah_24);
          ?>,
          <?php 
          $jumlah_25 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Penahanan Administrasi'");
          echo mysqli_num_rows($jumlah_25);
          ?>,
          <?php 
          $jumlah_26 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Hasil UN/USBN'");
          echo mysqli_num_rows($jumlah_26);
          ?>,
          <?php 
          $jumlah_27 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Larangan Ikut Ujian'");
          echo mysqli_num_rows($jumlah_27);
          ?>,
          <?php 
          $jumlah_28 = mysqli_query($koneksi,"select * from fromku where jn_kasus='BMN'");
          echo mysqli_num_rows($jumlah_28);
          ?>,
          <?php 
          $jumlah_29 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Lahan Bangunan'");
          echo mysqli_num_rows($jumlah_29);
          ?>,
          <?php 
          $jumlah_30 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Perselingkuhan'");
          echo mysqli_num_rows($jumlah_30);
          ?>,
          <?php 
          $jumlah_31 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Penyalahgunaan Wewenang'");
          echo mysqli_num_rows($jumlah_31);
          ?>,
          <?php 
          $jumlah_32 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Perizinan'");
          echo mysqli_num_rows($jumlah_32);
          ?>,
          <?php 
          $jumlah_33 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Buku/LKS'");
          echo mysqli_num_rows($jumlah_33);
          ?>,
          <?php 
          $jumlah_34 = mysqli_query($koneksi,"select * from fromku where jn_kasus='Transparansi Data'");
          echo mysqli_num_rows($jumlah_34);
          ?>,
          
          ],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
          
          ],
          borderColor: [
            'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
          
          ],
          borderWidth: 2
        }]
      },
      options: {
        
            ticks: {
              beginAtZero:true
            
        }
      }
    });
  </script>
                  <hr>
                
                </div>
              </div>


                <!-- Provinsi -->
                                     
                <div class="card shadow mb-4">           
                <div class="card-header py-3">
                  <h6 class="md-0 font-weight-bold text-primary">Provinsi</h6>
                </div>
                <div class="card-body ">
                  <div class="chart-bar">
                    <canvas id="Provinsi" height="100"></canvas>
                  </div>

                  <script>
    var ctx = document.getElementById("Provinsi").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["DKI Jakarta", "Jawa Barat", "Sumatera Utara", "Aceh", "Bali", "Banten", "Bengkulu", "DI Yogyakarta", "Gorontalo", "Jambi", "Jawa Tengah", "Jawa Timur", "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", "Kalimantan Timur", "Kalimantan Utara", "Bangka Belitung", "Kepulauan Riau", "Lampung", "Makulu", "Makulu Utara", "Nusa Tenggara Barat", "Nusa Tenggara Timur", "Papua", "Papua Barat", "Riau", "Sulawesi Barat", "Sulawesi Selatan", "Sulawesi Tengah", "Sulawesi Tenggara", "Sulawesi Utara", "Sumatra Barat", "Sumatra Selatan"
],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_199 = mysqli_query($koneksi,"select * from fromku where provinsi='1.DKI Jakarta'");
          echo mysqli_num_rows($jumlah_199);
          ?>, 
          <?php 
          $jumlah_299 = mysqli_query($koneksi,"select * from fromku where provinsi='2.Jawa Barat'");
          echo mysqli_num_rows($jumlah_299);
          ?>,
          <?php 
          $jumlah_399 = mysqli_query($koneksi,"select * from fromku where provinsi='3.Sumatera Utara'");
          echo mysqli_num_rows($jumlah_399);
          ?>,
          <?php 
          $jumlah_499 = mysqli_query($koneksi,"select * from fromku where provinsi='4.Aceh'");
          echo mysqli_num_rows($jumlah_499);
          ?>,
          <?php 
          $jumlah_599 = mysqli_query($koneksi,"select * from fromku where provinsi='5.Bali'");
          echo mysqli_num_rows($jumlah_599);
          ?>,
          <?php 
          $jumlah_699 = mysqli_query($koneksi,"select * from fromku where provinsi='6.Banten'");
          echo mysqli_num_rows($jumlah_699);
          ?>,
          <?php 
          $jumlah_799 = mysqli_query($koneksi,"select * from fromku where provinsi='7.Bengkulu'");
          echo mysqli_num_rows($jumlah_799);
          ?>,
          <?php 
          $jumlah_3399 = mysqli_query($koneksi,"select * from fromku where provinsi='8.DI Yogyakarta'");
          echo mysqli_num_rows($jumlah_3399);
          ?>,
          <?php 
          $jumlah_899 = mysqli_query($koneksi,"select * from fromku where provinsi='9.Gorontalo'");
          echo mysqli_num_rows($jumlah_899);
          ?>,
          <?php 
          $jumlah_999 = mysqli_query($koneksi,"select * from fromku where provinsi='10.Jambi'");
          echo mysqli_num_rows($jumlah_999);
          ?>,
          <?php 
          $jumlah_1099 = mysqli_query($koneksi,"select * from fromku where provinsi='11.Jawa Tengah'");
          echo mysqli_num_rows($jumlah_1099);
          ?>,
          <?php 
          $jumlah_1199 = mysqli_query($koneksi,"select * from fromku where provinsi='12.Jawa Timur'");
          echo mysqli_num_rows($jumlah_1199);
          ?>,
          <?php 
          $jumlah_1299 = mysqli_query($koneksi,"select * from fromku where provinsi='13.Kalimantan Barat'");
          echo mysqli_num_rows($jumlah_1299);
          ?>,
          <?php 
          $jumlah_1399 = mysqli_query($koneksi,"select * from fromku where provinsi='14.Kalimantan Selatan'");
          echo mysqli_num_rows($jumlah_1399);
          ?>,
          <?php 
          $jumlah_1499 = mysqli_query($koneksi,"select * from fromku where provinsi='15.Kalimantan Tengah'");
          echo mysqli_num_rows($jumlah_1499);
          ?>,
          <?php 
          $jumlah_1599 = mysqli_query($koneksi,"select * from fromku where provinsi='16.Kalimantan Timur'");
          echo mysqli_num_rows($jumlah_1599);
          ?>,
          <?php 
          $jumlah_1699 = mysqli_query($koneksi,"select * from fromku where provinsi='17.Kalimantan Utara'");
          echo mysqli_num_rows($jumlah_1699);
          ?>,
          <?php 
          $jumlah_1799 = mysqli_query($koneksi,"select * from fromku where provinsi='18.Bangka Belitung'");
          echo mysqli_num_rows($jumlah_1799);
          ?>,
          <?php 
          $jumlah_1899 = mysqli_query($koneksi,"select * from fromku where provinsi='19.Kepulauan Riau'");
          echo mysqli_num_rows($jumlah_1899);
          ?>,
          <?php 
          $jumlah_1999 = mysqli_query($koneksi,"select * from fromku where provinsi='20.Lampung'");
          echo mysqli_num_rows($jumlah_1999);
          ?>,
          <?php 
          $jumlah_2099 = mysqli_query($koneksi,"select * from fromku where provinsi='21.Makulu'");
          echo mysqli_num_rows($jumlah_2099);
          ?>,
          <?php 
          $jumlah_2199 = mysqli_query($koneksi,"select * from fromku where provinsi='22.Makulu Utara'");
          echo mysqli_num_rows($jumlah_2199);
          ?>,
          <?php 
          $jumlah_2299 = mysqli_query($koneksi,"select * from fromku where provinsi='23.Nusa Tenggara Barat'");
          echo mysqli_num_rows($jumlah_2299);
          ?>,
          <?php 
          $jumlah_2399 = mysqli_query($koneksi,"select * from fromku where provinsi='24.Nusa Tenggara Timur'");
          echo mysqli_num_rows($jumlah_2399);
          ?>,
          <?php 
          $jumlah_2499 = mysqli_query($koneksi,"select * from fromku where provinsi='25.Papua'");
          echo mysqli_num_rows($jumlah_2499);
          ?>,
          <?php 
          $jumlah_2599 = mysqli_query($koneksi,"select * from fromku where provinsi='26.Papua Barat'");
          echo mysqli_num_rows($jumlah_2599);
          ?>,
          <?php 
          $jumlah_2699 = mysqli_query($koneksi,"select * from fromku where provinsi='27.Riau'");
          echo mysqli_num_rows($jumlah_2699);
          ?>,
          <?php 
          $jumlah_2799 = mysqli_query($koneksi,"select * from fromku where provinsi='28.Sulawesi Barat'");
          echo mysqli_num_rows($jumlah_2799);
          ?>,
          <?php 
          $jumlah_2899 = mysqli_query($koneksi,"select * from fromku where provinsi='29.Sulawesi Selatan'");
          echo mysqli_num_rows($jumlah_2899);
          ?>,
          <?php 
          $jumlah_2999 = mysqli_query($koneksi,"select * from fromku where provinsi='30.Sulawesi Tengah'");
          echo mysqli_num_rows($jumlah_2999);
          ?>,
          <?php 
          $jumlah_3099 = mysqli_query($koneksi,"select * from fromku where provinsi='31.Sulawesi Tenggara'");
          echo mysqli_num_rows($jumlah_3099);
          ?>,
          <?php 
          $jumlah_3199 = mysqli_query($koneksi,"select * from fromku where provinsi='32.Sulawesi Utara'");
          echo mysqli_num_rows($jumlah_3199);
          ?>,
          <?php 
          $jumlah_3299 = mysqli_query($koneksi,"select * from fromku where provinsi='33.Sumatra Barat'");
          echo mysqli_num_rows($jumlah_3299);
          ?>,
          <?php 
          $jumlah_3499 = mysqli_query($koneksi,"select * from fromku where provinsi='34.Sumatra Selatan'");
          echo mysqli_num_rows($jumlah_3499);
          ?>,


          
          ],
          backgroundColor: [
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
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
          
          ],
          borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
          
              ],
          borderWidth: 2
        }]
      },
      options: {
        
            ticks: {
              beginAtZero:true
            
        }
      }
    });
  </script>
                  <hr>
                  
                </div>
              </div>

              <!-- Lokus -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Lokus</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="lokus" height="100"></canvas>
                  </div>

                  <script>
    var ctx = document.getElementById("lokus").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Setjen", "Itjen", "Ditjen Paudni & Dikmas", "Ditjen Dikdasmen", "Ditjen GTK", "Ditjen Kebudayaan", "Balitbang", "Badan Bahasa"
],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_WEBp = mysqli_query($koneksi,"select * from fromku where lokus='Setjen'");
          echo mysqli_num_rows($jumlah_WEBp);
          ?>, 
          <?php 
          $jumlah_SMS = mysqli_query($koneksi,"select * from fromku where lokus='Itjen'");
          echo mysqli_num_rows($jumlah_SMS);
          ?>,
          <?php 
          $jumlah_EMAIL = mysqli_query($koneksi,"select * from fromku where lokus='Ditjen Paudni & Dikmas'");
          echo mysqli_num_rows($jumlah_EMAIL);
          ?>,
          <?php 
          $jumlah_SOSIALm = mysqli_query($koneksi,"select * from fromku where lokus='Ditjen Dikdasmen'");
          echo mysqli_num_rows($jumlah_SOSIALm);
          ?>,
          <?php 
          $jumlah_TELEPON = mysqli_query($koneksi,"select * from fromku where lokus='Ditjen GTK'");
          echo mysqli_num_rows($jumlah_TELEPON);
          ?>,
          <?php 
          $jumlah_BERITAo = mysqli_query($koneksi,"select * from fromku where lokus='Ditjen Kebudayaan'");
          echo mysqli_num_rows($jumlah_BERITAo);
          ?>,
          <?php 
          $jumlah_BERI = mysqli_query($koneksi,"select * from fromku where lokus='Balitbang'");
          echo mysqli_num_rows($jumlah_BERI);
          ?>,
          <?php 
          $jumlah_BER = mysqli_query($koneksi,"select * from fromku where lokus='Badan Bahasa'");
          echo mysqli_num_rows($jumlah_BER);
          ?>,
          
          ],
          backgroundColor: [
            'rgba(255, 99, 567, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
          
          ],
          borderColor: [
            'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
          
          ],
          borderWidth: 2
        }]
      },
      options: {
        
            ticks: {
              beginAtZero:true
            
        }
      }
    });
  </script>
                  <hr>
                  
                </div>
              </div>            


<!-- Tindak Lanjut -->
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Tindak Lanjut</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="Tindakan" height="100"></canvas>
                  </div>

                  <script>
    var ctx = document.getElementById("Tindakan").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Tidak Dapat Ditindaklanjuti", "Disposisi ke UPG", "Surat Klarifikasi", "Telah Investigasi", "Teruskan Instansi Berwenang", "Dijawab Dengan Penjelasan"
],
        datasets: [{
          label: '',
          data: [
          <?php 
          $jumlah_WEBp = mysqli_query($koneksi,"select * from fromku where tindak_lanjut='Tidak Dapat Ditindaklanjuti'");
          echo mysqli_num_rows($jumlah_WEBp);
          ?>, 
          <?php 
          $jumlah_SMS = mysqli_query($koneksi,"select * from fromku where tindak_lanjut='Disposisi ke UPG'");
          echo mysqli_num_rows($jumlah_SMS);
          ?>,
          <?php 
          $jumlah_EMAIL = mysqli_query($koneksi,"select * from fromku where tindak_lanjut='Surat Klarifikasi'");
          echo mysqli_num_rows($jumlah_EMAIL);
          ?>,
          <?php 
          $jumlah_SOSIALm = mysqli_query($koneksi,"select * from fromku where tindak_lanjut='Telah Investigasi'");
          echo mysqli_num_rows($jumlah_SOSIALm);
          ?>,
          <?php 
          $jumlah_TELEPON = mysqli_query($koneksi,"select * from fromku where tindak_lanjut='Teruskan Instansi Berwenang'");
          echo mysqli_num_rows($jumlah_TELEPON);
          ?>,
          <?php 
          $jumlah_BERITAo = mysqli_query($koneksi,"select * from fromku where tindak_lanjut='Dijawab Dengan Penjelasan'");
          echo mysqli_num_rows($jumlah_BERITAo);
          ?>,

          
          
          ],
          backgroundColor: [
            'rgba(255, 99, 567, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
          
          ],
          borderColor: [
            'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
          
          ],
          borderWidth: 2
        }]
      },
      options: {
        
            ticks: {
              beginAtZero:true
            
        }
      }
    });
  </script>
                  <hr>
                 
                </div>
              </div>         


<!-- Status -->
<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Status</h6>
                </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="Status" height="100"></canvas>
                  </div>

                  <script>
    var ctx = document.getElementById("Status").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Belum Selesai", "Selesai"
],
        datasets: [{
          label: '',
          data: [
            <?php 
          $jumlah_SMS = mysqli_query($koneksi,"select * from fromku where status_jb='Belum Selesai'");
          echo mysqli_num_rows($jumlah_SMS);
          ?>, 
          <?php 
          $jumlah_SMS = mysqli_query($koneksi,"select * from fromku where status_jb='Selesai'");
          echo mysqli_num_rows($jumlah_SMS);
          ?>,
        
          
          ],
          backgroundColor: [
            'rgba(255, 99, 567, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
          
          ],
          borderColor: [
            'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
          
          ],
          borderWidth: 2
        }]
      },
      options: {
        
            ticks: {
              beginAtZero:true
            
        }
      }
    });
  </script>
                  <hr>
                 
                </div>
              </div>         


              </div></div>
        
        
        <!-- /.End -->



       
        

      
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
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>

</body>

</html>
