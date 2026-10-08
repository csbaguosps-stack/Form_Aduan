# 🏛️ Sistem Informasi Pengaduan & Pelaporan Kasus (Form Aduan)
### Inspektorat Jenderal Kementerian Pendidikan dan Kebudayaan RI (Kemendikbud Jakarta)

[![PHP](https://img.shields.io/badge/PHP-7.x%20|%208.x-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/Database-MySQL%20|%20MariaDB-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Bootstrap](https://img.shields.io/badge/Frontend-SB%20Admin%202%20(Bootstrap)-563D7C?logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![License: MIT](https://img.shields.io/badge/License-MIT%20by%20cs.baguosps@gmail.com-blue.svg)](LICENSE)
[![Year](https://img.shields.io/badge/Year-2019-brightgreen.svg)]()

Aplikasi web sistem informasi manajemen pelaporan aduan dan tindak lanjut kasus, dikembangkan pada tahun **2019** untuk keperluan penugasan / Kuliah Kerja Praktek (KKP) di lingkungan **Inspektorat Jenderal (Itjen) Kementerian Pendidikan dan Kebudayaan Republik Indonesia, Jakarta**.

---

## 📌 Latar Belakang & Gambaran Umum

Sistem ini dibuat untuk mendigitalisasi alur pencatatan, pemantauan status, dan rekapitulasi laporan pengaduan masyarakat maupun unit kerja yang masuk ke Inspektorat Jenderal Kemendikbud. Sebelum adanya sistem terpadu, aduan sering kali dicatat manual atau tersebar di berbagai saluran. 

Dengan aplikasi ini, petugas Itjen Kemendikbud dapat:
1. Menginput data pengaduan lengkap beserta identitas pelapor, terlapor, pokok persoalan, dan berkas bukti fisik (PDF).
2. Mengklasifikasikan kasus berdasarkan media laporan, wilayah/daerah, jenis perkara, dan klarifikasi penanganan.
3. Memantau progres penyelesaian (status penanganan & rekomendasi tindakan).
4. Menghasilkan lembar cetak disposisi resmi dengan format kop surat standar Inspektorat Jenderal Kemendikbud Jakarta.
5. Menampilkan analitik data dalam bentuk dashboard metrik dan grafik interaktif.

---

## 🚀 Fitur Utama

- **🔐 Autentikasi Administrator**: Proteksi halaman berbasis PHP Session (`session_start()`).
- **📊 Dashboard Terpadu (`index.php`)**:
  - Kartu statistik jumlah total data pengaduan.
  - Ringkasan status penanganan (Terproses, Selesai, Belum Selesai).
  - Grafik tren pengaduan cepat.
- **📑 Manajemen Aduan CRUD (`tables.php`, `tambahfrom.php`, `ubahfrom.php`, `hapusdata.php`)**:
  - Form entri aduan baru dengan dropdown relasional (klarifikasi, media, provinsi, daerah/kota, jenis kasus, status, dan tindakan).
  - Pengunggahan berkas bukti/lampiran dokumen pendukung (format PDF disimpan di folder `file_d/`).
  - Fitur perbaruan dokumen lampiran terpisah (`ubahfile.php`).
- **🏛️ Detail Resmi Berkop Surat (`detail.php`)**:
  - Tampilan rekap individual kasus dengan kop surat resmi Inspektorat Jenderal Kemendikbud (Jl. Jenderal Sudirman Senayan, Jakarta).
- **🖨️ Cetak / Disposisi (`print.php`, `print1.php`)**:
  - Halaman siap cetak (*print-friendly view*) untuk kebutuhan berkas fisik, arsip, dan disposisi pimpinan.
- **📈 Visualisasi Grafik Dinamis (`charts.php`, `grafik12.php`)**:
  - Integrasi Chart.js untuk menampilkan diagram lingkaran (pie) dan diagram batang (bar) berdasarkan klasifikasi kasus, media laporan, dan sebaran wilayah.
- **🗺️ AJAX Dynamic Region (`data-wilayah.php`)**:
  - Memuat data kabupaten/kota secara dinamis saat provinsi dipilih.

---

## 🛠️ Teknologi & Kebutuhan Sistem

| Komponen | Spesifikasi / Library |
|---|---|
| **Bahasa Pemrograman** | PHP (Native / Prosedural & OOP dasar) |
| **Database** | MySQL / MariaDB |
| **Web Server** | Apache (disarankan via XAMPP) |
| **Frontend Framework** | SB Admin 2 (Bootstrap 4 & HTML5/CSS3) |
| **Libraries** | jQuery, Select2, Chart.js, FontAwesome 5 Free |
| **Kebutuhan Minimum** | XAMPP for Windows / Linux / macOS (PHP 7.0+ atau 8.x) |

---

## 📁 Struktur Direktori

```text
form_aduan/
├── css/                  # File stylesheet SB Admin 2
├── js/                   # Script antarmuka dan inisialisasi Chart
├── vendor/               # Dependensi pihak ketiga (Bootstrap, FontAwesome, ChartJS, DataTables)
├── lg/                   # Aset tampilan halaman login (tema kustom)
├── as1/                  # Aset pendukung template
├── img/                  # Aset ilustrasi SVG/gambar
├── file_d/               # Direktori penyimpanan berkas upload dokumen/PDF (.htaccess protected)
├── .htaccess             # Konfigurasi keamanan direktori Apache (Options -Indexes)
├── .gitignore            # Filter file yang diabaikan Git
├── 404.php               # Halaman referensi/contoh
├── blank.php             # Template dasar SB Admin 2
├── charts.php            # Halaman visualisasi grafik pengaduan
├── data-wilayah.php      # Endpoint penanganan AJAX wilayah
├── detail.php            # Tampilan detail aduan dengan kop resmi Itjen
├── function.php          # Fungsi enkripsi/dekripsi pembantu
├── grafik12.php          # Modul grafik alternatif
├── hapusdata.php         # Script proses penghapusan data aduan
├── index.php             # Halaman dashboard utama
├── koneksi.php           # Konfigurasi koneksi MySQL
├── laporan.sql           # Skema & dump database MySQL lengkap
├── LICENSE               # Lisensi MIT (by cs.baguosps@gmail.com)
├── login.php             # Halaman autentikasi admin
├── logout.php            # Script pemutus session admin
├── menu.php              # Komponen navigasi Sidebar & Topbar
├── print.php             # Format cetak lembar pengaduan resmi
├── print1.php            # Format cetak formulir alternatif
├── README.md             # Dokumentasi proyek
├── tables.php            # Tabel data pengaduan (DataTables)
├── tambahfrom.php        # Formulir input aduan baru
├── ubahfile.php          # Formulir penggantian file lampiran
├── ubahfrom.php          # Formulir pengeditan data aduan
└── ubhf.php              # Routing modul pengeditan
```

---

## 🗄️ Struktur Database (`laporan.sql`)

Database utama bernama **`laporan`** dengan tabel-tabel berikut:
- **`admin`**: Kredensial akun pengguna sistem (id_admin, username, password, nama_lengkap).
- **`fromku`**: Tabel inti data pengaduan (id_from, klarifikasi, tgl, media, perihal, nm_pelapor, nm_terlapor, jn_kasus, pokok_persoalan, id_daerah, status, file, tindakan).
- **`klarifikasi`**: Master klarifikasi pengaduan (nm_klarifikasi).
- **`media`**: Master saluran laporan (Surat, Email, Web, SMS/WA, dll).
- **`provinsi`**: Master provinsi seluruh Indonesia.
- **`daerah`**: Master kabupaten/kota yang berelasi dengan provinsi.
- **`jn_kasus`**: Master jenis kasus pelanggaran / permasalahan pendidikan.
- **`status`**: Master tahapan proses pengaduan.
- **`tindakan`**: Master rekomendasi tindakan / disposisi pemeriksaan.
- **`itjen`**: Master identitas bagian / tim pemeriksa Inspektorat Jenderal.

---

## 💻 Panduan Instalasi Lokal (Local Setup)

### 1. Prasyarat
Pastikan Anda telah memasang **XAMPP** (atau web stack lokal sejenis seperti WampServer/Laragon).

### 2. Kloning / Salin Berkas
Letakkan folder proyek di dalam direktori `htdocs` web server:
- Path Windows: `C:\xampp\htdocs\form_aduan`
- Path Linux: `/opt/lampp/htdocs/form_aduan`

### 3. Buat Database & Import SQL
1. Buka browser dan akses **phpMyAdmin** di `http://localhost/phpmyadmin/`.
2. Buat database baru dengan nama:
   ```sql
   laporan
   ```
3. Pilih database `laporan`, lalu klik tab **Import**.
4. Pilih file **`laporan.sql`** dari folder proyek ini dan klik tombol **Go / Kirim**.

### 4. Konfigurasi Koneksi (`koneksi.php`)
Secara default file `koneksi.php` sudah disesuaikan dengan setting default XAMPP:
```php
<?php
$koneksi = mysqli_connect("localhost", "root", "", "laporan");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
```
*Sesuaikan user dan password jika MySQL lokal Anda menggunakan password khusus.*

### 5. Menjalankan Aplikasi
Buka peramban (browser) dan akses:
```text
http://localhost/form_aduan/
```

### 🔑 Kredensial Default Login:
- **Username**: `Baguos` &nbsp;|&nbsp; **Password**: `baguos`
- **Username**: `admin` &nbsp;&nbsp;&nbsp;|&nbsp; **Password**: `admin`

---

## 📤 Panduan Upload ke GitHub

Repositori resmi: **`https://github.com/csbaguosps-stack/Form_Aduan.git`**

### 1. Inisialisasi Git Lokal
Buka terminal pada direktori proyek (`c:\xampp\htdocs\form_aduan`):
```bash
git init
```

### 2. Tambahkan Semua File & Commit
```bash
git add .
git commit -m "feat: initial commit web pengaduan itjen kemendikbud (2019)"
```

### 3. Set Branch Utama ke `main`
```bash
git branch -M main
```

### 4. Hubungkan ke Remote Repositori GitHub
```bash
git remote add origin https://github.com/csbaguosps-stack/Form_Aduan.git
```

### 5. Push ke GitHub
```bash
git push -u origin main
```

---

## 📄 Lisensi (License)

Proyek ini dilisensikan di bawah lisensi **MIT License** dengan atribusi pengembang:
- **Hak Cipta**: © 2019 **Baguos PS**
- **Email Kontak**: [cs.baguosps@gmail.com](mailto:cs.baguosps@gmail.com)
- **Instansi**: Inspektorat Jenderal Kementerian Pendidikan dan Kebudayaan RI (Kemendikbud Jakarta)

Detail lengkap lisensi dapat dilihat pada berkas [LICENSE](LICENSE).

---

## 📬 Kontak & Pengembang

Dikembangkan oleh **Baguos PS**  
📧 Email: [cs.baguosps@gmail.com](mailto:cs.baguosps@gmail.com)  
📍 Jakarta, Indonesia  
🗓️ Tahun Pembuatan: **2019**
