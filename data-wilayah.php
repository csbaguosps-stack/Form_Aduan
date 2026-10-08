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

include("koneksi.php");     
	switch ($_GET['jenis']) {
		//ambil data kota / kabupaten
		case 'kota':
		$id_provinces = $_POST['id_provinces'];
		if($id_provinces == ''){
		     exit;
		}else{
		     $getcity = mysqli_query($koneksi,"SELECT  * FROM daerah WHERE id_daerah ='$id_provinces' ORDER BY nm_daerah ASC") or die ('Query Gagal');
		     while($data = mysqli_fetch_array($getcity)){
		          echo '<option value="'.$data['nm_daerah'].'">'.$data['nm_daerah'].'</option>';
		     }
		     exit;    
		}
		break;


	}
?>