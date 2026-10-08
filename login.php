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
//membuat koneksi
include'koneksi.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="lg/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="lg/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="lg/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="lg/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="lg/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="lg/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="lg/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="lg/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="lg/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="lg/css/util.css">
  <link rel="stylesheet" type="text/css" href="lg/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        
      </div>
    </div>
    <div class="row ">

      <div class="container-login100" style="background-image: url('lg/images/itjen.jpg');">
        <div class="wrap-login100">
        <div class="panel panel-default">
          <div class="panel-heading">
          <center><h2> Admin Login</h2></center>

      <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><marquee direction="up" scrollamount="2" align="center" behavior="alternate" width="90%"><marquee direction="right" behavior="alternate">Welcome</marquee></marquee></center></h5>
      <br />
          </div>
          <div class="panel-body">
            <form role="form" method="post">
              <form class="login100-form validate-form">
          <span class="login100-form-logo">
            <img src="logo1.png"width='170' height='130'>
          </span>
             <br />
             <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="user" placeholder="Username">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="pass" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
              </br>
           <button class="btn btn-primary" name="login">Login</button>
         </form>
         <?php
         if (isset($_POST['login']))
         {
           $ambil = $koneksi->query("SELECT *FROM admin WHERE username ='$_POST[user]' 
            AND password = '$_POST[pass]'");
           $cek = $ambil->num_rows;
           if ($cek==1)
           {
             $_SESSION['admin']=$ambil->fetch_assoc();
             echo "<div class='alert alert-info'>Login Sukses</div>";
             echo "<meta http-equiv='refresh' content='1;url=index.php'>";
           }
           else
           {
            echo "<div class='alert alert-danger'>Login Gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
          }
        }
        ?>
      </div>

    </div>
  </div>


</div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<!--===============================================================================================-->
  <script src="lg/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="lg/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="lg/vendor/bootstrap/js/popper.js"></script>
  <script src="lg/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="lg/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="lg/vendor/daterangepicker/moment.min.js"></script>
  <script src="lg/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="lg/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>