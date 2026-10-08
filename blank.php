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

include 'koneksi.php';
include 'menu.php';
?>

  <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>from uji - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="b/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  


  link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


<body id="page-top">



<!-- Portfolio Grid -->
	<section class="bg-light page-section" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Portfolio</h2>
					<h3 class="section-subheading text-muted">Our Program</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/c1.png" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Caesar Cipher</h4>
					
					</div>
				</div>
				<div class="col-md-3 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/r2.png"  alt="">
					</a>
					<div class="portfolio-caption">
						<h4>ROT 13</h4>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/v3.png" width="250px" height="20px" alt="">
					
					</a>
					<div class="portfolio-caption">
						<h4>Vigenere</h4>
					
					</div>
				</div>
				<div class="col-md-3 col-sm-6 portfolio-item">
					<a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
						<div class="portfolio-hover">
							<div class="portfolio-hover-content">
								<i class="fas fa-plus fa-3x"></i>
							</div>
						</div>
						<img class="img-fluid" src="img/portfolio/e4.png" alt="">
					</a>
					<div class="portfolio-caption">
						<h4>Ekspansi</h4>
						
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- Modal 1 -->
		<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<!-- Project Details Go Here -->
									<h2 class="text-uppercase">Caesar Cipher</h2>
									<img class="img-fluid d-block mx-auto" src="img/portfolio/c1.png" alt="">
									<p align="justify">Salah satu kriptografi yang paling tua dan paling sederhana adalah kriptogtafi Caesar. Menurut sejarah, ini adalah cara Julius Caesar mengirimkan surat cinta kepada kekasihnya Cleopatra. Dalam kriptografi Caesar, maka setiap huruf akan dituliskan dalam huruf lain hasil pergeseran 3 buah huruf. Kriptografi Caesar ini adalah kriptografi substitusi karena setiap huruf akan digantikan huruf lain. <br><br>

                                    langkah-langkah yang dilakukan untuk membentuk chiperteks dengan Caesar Cipher adalah :<br>
 
                                    1. Menentukan besarnya pergeseran karakter yang digunakan dalam membentuk cipherteks ke plainteks.<br>

                                    2. Menukarkan karakter pada plainteks menjadi cipherteks dengan berdasarkan pada pergeseran yang telah ditentukan sebelumnya.<br> <br>

                                     contoh, huruf A akan digeser 3 huruf menjadi huruf D, B akan digeser 3 huruf menjadi E, J akan digeser menjadi M, O akan menjadi R dan seterusnya. Pergeseran ini juga berputar kembali ke awal abjad. sehingga sesudah huruf Z diikuti kembali oleh huruf A. Kriptografi Caesar ini dikenal sebagai monoalphabetic substitution cipher karena satu huruf tertentu pasti akan berubah menjadi huruf tertentu yang lain.</p>
							
									<button class="btn btn-primary" data-dismiss="modal" type="button">
										<i class="fas fa-times"></i>
									Close Project</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


</body>

</html>