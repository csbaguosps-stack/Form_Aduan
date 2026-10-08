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

include "koneksi.php";
?>


 
</head>
<body>

<div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="fromku")
                    {
                        include 'fromku.php';
                    }
                    elseif ($_GET['halaman']=="print") 
                    {
                        include 'print.php';
                    }
                    elseif ($_GET['halaman']=="ubahfile") 
                    {
                        include 'ubahfile.php';
                    }
                    elseif ($_GET['halaman']=="detail") 
                    {
                        include 'detail.php';
                    }
                    
                    elseif ($_GET ['halaman']=="hapusdata")
                    {
                        include 'hapusdata.php';
                    }
                    
                    
                    elseif ($_GET['halaman']=="ubahfrom")
                    {
                        include 'ubahfrom.php';
                    }
                    
                   
                   
               
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
                </div>


