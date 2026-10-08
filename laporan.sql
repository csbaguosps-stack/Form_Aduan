-- ========================================================
-- Aplikasi Sistem Informasi Pengaduan & Pelaporan Kasus (Form Aduan)
-- Tugas Web di Inspektorat Jenderal Kemendikbud Jakarta
-- 
-- Dibuat Pada : 2019
-- Author      : Baguos PS
-- Email       : cs.baguosps@gmail.com
-- Lisensi     : Copyright (c) 2019 by cs.baguosps@gmail.com
-- ========================================================

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Nov 2025 pada 07.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(12, 'Baguos', 'baguos', 'Baguos ps'),
(101, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah`
--

CREATE TABLE `daerah` (
  `id_daerah` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nm_daerah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daerah`
--

INSERT INTO `daerah` (`id_daerah`, `id_jenis`, `nm_daerah`) VALUES
(1, 1, 'Kota Administrasi Jakarta Pusat'),
(1, 1, 'Kota Administrasi Jakarta Utara'),
(1, 1, 'Kota Administrasi Jakarta Barat'),
(1, 1, 'Kota Administrasi Jakarta Selatan'),
(1, 1, 'Kota Administrasi Jakarta Timur'),
(2, 1, 'Kabupaten Bogor'),
(2, 1, 'Kabupaten Sukabumi'),
(2, 1, 'Kabupaten Cianjur'),
(2, 1, 'Kabupaten Bandung'),
(2, 1, 'Kabupaten Garut'),
(2, 1, 'Kabupaten Tasikmalaya'),
(2, 1, 'Kabupaten Ciamis'),
(2, 1, 'Kabupaten Kuningan'),
(2, 1, 'Kabupaten Cirebon'),
(2, 1, 'Kabupaten Majalengka'),
(2, 1, 'Kabupaten Sumedang'),
(2, 1, 'Kabupaten Indramayu'),
(2, 1, 'Kabupaten Subang'),
(2, 1, 'Kabupaten Purwakarta'),
(2, 1, 'Kabupaten Karawang'),
(2, 1, 'Kabupaten Bekasi'),
(2, 1, 'Kabupaten Bandung Barat'),
(2, 1, 'Kabupaten Pangandaran'),
(2, 1, 'Kota Bogor'),
(2, 1, 'Kota Sukabumi'),
(2, 1, 'Kota Bandung'),
(2, 1, 'Kota Cirebon'),
(2, 1, 'Kota Bekasi'),
(2, 1, 'Kota Depok'),
(2, 1, 'Kota Cimahi'),
(2, 1, 'Kota Tasikmalaya'),
(2, 1, 'Kota Banjar'),
(3, 1, 'Kabupaten Tapanuli Tengah'),
(3, 1, 'Kabupaten Tapanuli Utara'),
(3, 1, 'Kabupaten Tapanuli Selatan'),
(3, 1, 'Kabupaten Nias'),
(3, 1, 'Kabupaten Langkat'),
(3, 1, 'Kabupaten Karo'),
(3, 1, 'Kabupaten Deli Serdang'),
(3, 1, 'Kabupaten Simalungun'),
(3, 1, 'Kabupaten Asahan'),
(3, 1, 'Kabupaten Labuhanbatu'),
(3, 1, 'Kabupaten Dairi'),
(3, 1, 'Kabupaten Toba Samosir'),
(3, 1, 'Kabupaten Mandailing Natal'),
(3, 1, 'Kabupaten Nias Selatan'),
(3, 1, 'Kabupaten Pakpak Bharat'),
(3, 1, 'Kabupaten Humbang Hasundutan'),
(3, 1, 'Kabupaten Samosir'),
(3, 1, 'Kabupaten Serdang Bedagai'),
(3, 1, 'Kabupaten Batubara'),
(3, 1, 'Kabupaten Padang Lawas Utara'),
(3, 1, 'Kabupaten Padang Lawas'),
(3, 1, 'Kabupaten Labuhanbatu Selatan'),
(3, 1, 'Kabupaten Labuhanbatu Utara'),
(3, 1, 'Kabupaten Nias Utara'),
(3, 1, 'Kabupaten Nias Barat'),
(3, 1, 'Kota Medan'),
(3, 1, 'Kota Pematang Siantar'),
(3, 1, 'Kota Sibolga'),
(3, 1, 'Kota Tanjung Balai'),
(3, 1, 'Kota Binjai'),
(3, 1, 'Kota Tebing Tinggi'),
(3, 1, 'Kota Padangsidempuan'),
(3, 1, 'Kota Gunungsitoli'),
(4, 1, 'Kabupaten Aceh Selatan'),
(4, 1, 'Kabupaten Aceh Tenggara'),
(4, 1, 'Kabupaten Aceh Timur'),
(4, 1, 'Kabupaten Aceh Tengah'),
(4, 1, 'Kabupaten Aceh Barat'),
(4, 1, 'Kabupaten Aceh Besar'),
(4, 1, 'Kabupaten Pidie'),
(4, 1, 'Kabupaten Aceh Utara'),
(4, 1, 'Kabupaten Simeulue'),
(4, 1, 'Kabupaten Aceh Singkil'),
(4, 1, 'Kabupaten Bireuen'),
(4, 1, 'Kabupaten Aceh Barat Daya'),
(4, 1, 'Kabupaten Gayo Lues'),
(4, 1, 'Kabupaten Aceh Jaya'),
(4, 1, 'Kabupaten Nagan Raya'),
(4, 1, 'Kabupaten Aceh Tamiang'),
(4, 1, 'Kabupaten Bener Meriah'),
(4, 1, 'Kabupaten Pidie Jaya'),
(4, 1, 'Kota Banda Aceh'),
(4, 1, 'Kota Sabang'),
(4, 1, 'Kota Lhokseumawe'),
(4, 1, 'Kota Langsa'),
(4, 1, 'Kota Subulussalam'),
(5, 1, 'Kabupaten Jembrana'),
(5, 1, 'Kabupaten Tabanan'),
(5, 1, 'Kabupaten Badung'),
(5, 1, 'Kabupaten Gianyar'),
(5, 1, 'Kabupaten Klungkung'),
(5, 1, 'Kabupaten Bangli'),
(5, 1, 'Kabupaten Karangasem'),
(5, 1, 'Kabupaten Buleleng'),
(5, 1, 'Kota Denpasar'),
(6, 1, 'Kabupaten Pandegelang'),
(6, 1, 'Kabupaten Lebak'),
(6, 1, 'Kabupaten Tangerang'),
(6, 1, 'Kabupaten Serang'),
(6, 1, 'Kota Tangerang'),
(6, 1, 'Kota Cilegon'),
(6, 1, 'Kota Serang'),
(6, 1, 'Kota Tangerang Selatan'),
(7, 1, 'Kabupaten Bengkulu Selatan'),
(7, 1, 'Kabupaten Rejang Lebong'),
(7, 1, 'Kabupaten Bengkulu Utara'),
(7, 1, 'Kabupaten Kaur'),
(7, 1, 'Kabupaten Seluma'),
(7, 1, 'Kabupaten Mukomuko'),
(7, 1, 'Kabupaten Lebong'),
(7, 1, 'Kabupaten Kepahiang'),
(7, 1, 'Kabupaten Bengkulu Tengah'),
(7, 1, 'Kota Bengkulu'),
(8, 1, 'Kabupaten Kulon Progo'),
(8, 1, 'Kabupaten Bantul'),
(8, 1, 'Kabupaten Gunungkidul'),
(8, 1, 'Kabupaten Sleman'),
(8, 1, 'Kota Yogyakarta'),
(9, 1, 'Kabupaten Gorontalo'),
(9, 1, 'Kabupaten Boalemo'),
(9, 1, 'Kabupaten Bone Bolango'),
(9, 1, 'Kabupaten Pohuwato'),
(9, 1, 'Kabupaten Gorontalo Utara'),
(9, 1, 'Kota Gorontalo'),
(10, 1, 'Kabupaten Kerinci'),
(10, 1, 'Kabupaten Merangin'),
(10, 1, 'Kabupaten Sarolangun'),
(10, 1, 'Kabupaten Batanghari'),
(10, 1, 'Kabupaten Muaro Jambi'),
(10, 1, 'Kabupaten Tanjung Jabung Barat'),
(10, 1, 'Kabupaten Tanjung Jabung Timur'),
(10, 1, 'Kabupaten Bungo'),
(10, 1, 'Kabupaten Tebo'),
(10, 1, 'Kota Jambi'),
(10, 1, 'Kota Sungai Penuh'),
(11, 1, 'Kabupaten Cilacap'),
(11, 1, 'Kabupaten Banyumas'),
(11, 1, 'Kabupaten Purbalingga'),
(11, 1, 'Kabupaten Banjarnegara'),
(11, 1, 'Kabupaten Kebumen'),
(11, 1, 'Kabupaten Purworejo'),
(11, 1, 'Kabupaten Wonosobo'),
(11, 1, 'Kabupaten Magelang'),
(11, 1, 'Kabupaten Boyolali'),
(11, 1, 'Kabupaten Klaten'),
(11, 1, 'Kabupaten Sukoharjo'),
(11, 1, 'Kabupaten Wonogiri'),
(11, 1, 'Kabupaten Karanganyar'),
(11, 1, 'Kabupaten Sragen'),
(11, 1, 'Kabupaten Grobogan'),
(11, 1, 'Kabupaten Blora'),
(11, 1, 'Kabupaten Rembang'),
(11, 1, 'Kabupaten Pati'),
(11, 1, 'Kabupaten Kudus'),
(11, 1, 'Kabupaten Jepara'),
(11, 1, 'Kabupaten Demak'),
(11, 1, 'Kabupaten Semarang'),
(11, 1, 'Kabupaten Temanggung'),
(11, 1, 'Kabupaten Kendal'),
(11, 1, 'Kabupaten Batang'),
(11, 1, 'Kabupaten Pekalongan'),
(11, 1, 'Kabupaten Pemalang'),
(11, 1, 'Kabupaten Tegal'),
(11, 1, 'Kabupaten Brebes'),
(11, 1, 'Kota Magelang'),
(11, 1, 'Kota Surakarta'),
(11, 1, 'Kota Salatiga'),
(11, 1, 'Kota Semarang'),
(11, 1, 'Kota Pekalongan'),
(11, 1, 'Kota Tegal'),
(12, 1, 'Kabupaten Pacitan'),
(12, 1, 'Kabupaten Ponorogo'),
(12, 1, 'Kabupaten Trenggalek'),
(12, 1, 'Kabupaten Tulungagung'),
(12, 1, 'Kabupaten Blitar'),
(12, 1, 'Kabupaten Kediri'),
(12, 1, 'Kabupaten Malang'),
(12, 1, 'Kabupaten Lumajang'),
(12, 1, 'Kabupaten Jember'),
(12, 1, 'Kabupaten Banyuwangi'),
(12, 1, 'Kabupaten Bondowoso'),
(12, 1, 'Kabupaten Situbondo'),
(12, 1, 'Kabupaten Probolinggo'),
(12, 1, 'Kabupaten Pasuruan'),
(12, 1, 'Kabupaten Sidoarjo'),
(12, 1, 'Kabupaten Mojokerto'),
(12, 1, 'Kabupaten Jombang'),
(12, 1, 'Kabupaten Nganjuk'),
(12, 1, 'Kabupaten Madiun'),
(12, 1, 'Kabupaten Magetan'),
(12, 1, 'Kabupaten Ngawi'),
(12, 1, 'Kabupaten Bojonegoro'),
(12, 1, 'Kabupaten Tuban'),
(12, 1, 'Kabupaten Lamongan'),
(12, 1, 'Kabupaten Gresik'),
(12, 1, 'Kabupaten Bangkalan'),
(12, 1, 'Kabupaten Sampang'),
(12, 1, 'Kabupaten Pamekasan'),
(12, 1, 'Kabupaten Sumenep'),
(12, 1, 'Kota Kediri'),
(12, 1, 'Kota Blitar'),
(12, 1, 'Kota Malang'),
(12, 1, 'Kota Probolinggo'),
(12, 1, 'Kota Pasuruan'),
(12, 1, 'Kota Mojokerto'),
(12, 1, 'Kota Madiun'),
(12, 1, 'Kota Surabaya'),
(12, 1, 'Kota Batu'),
(13, 1, 'Kabupaten Sambas'),
(13, 1, 'Kabupaten Mempawah'),
(13, 1, 'Kabupaten Sanggau'),
(13, 1, 'Kabupaten Ketapang'),
(13, 1, 'Kabupaten Sintang'),
(13, 1, 'Kabupaten Kapuas Hulu'),
(13, 1, 'Kabupaten Bengkayang'),
(13, 1, 'Kabupaten Landak'),
(13, 1, 'Kabupaten Sekadau'),
(13, 1, 'Kabupaten Melawi'),
(13, 1, 'Kabupaten Kayong Utara'),
(13, 1, 'Kabupaten Kubu Raya'),
(13, 1, 'Kota Pontianak'),
(13, 1, 'Kota Singkawang'),
(14, 1, 'Kabupaten Tanah Laut'),
(14, 1, 'Kabupaten Kotabaru'),
(14, 1, 'Kabupaten Banjar'),
(14, 1, 'Kabupaten Barito Kuala'),
(14, 1, 'Kabupaten Tapin'),
(14, 1, 'Kabupaten Hulu Sungai Selatan'),
(14, 1, 'Kabupaten Hulu Sungai Tengah'),
(14, 1, 'Kabupaten Hulu Sungai Utara'),
(14, 1, 'Kabupaten Tabalong'),
(14, 1, 'Kabupaten Tanah Bumbu'),
(14, 1, 'Kabupaten Balangan'),
(14, 1, 'Kota Banjarmasin'),
(14, 1, 'Kota Banjarbaru'),
(15, 1, 'Kabupaten Kotawaringin Barat'),
(15, 1, 'Kabupaten Kotawaringin Timur'),
(15, 1, 'Kabupaten Kapuas'),
(15, 1, 'Kabupaten Barito Selatan'),
(15, 1, 'Kabupaten Barito Utara'),
(15, 1, 'Kabupaten Katingan'),
(15, 1, 'Kabupaten Seruyan'),
(15, 1, 'Kabupaten Sukamara'),
(15, 1, 'Kabupaten Lamandau'),
(15, 1, 'Kabupaten Gunung Mas'),
(15, 1, 'Kabupaten Pulang Pisau'),
(15, 1, 'Kabupaten Murung Raya'),
(15, 1, 'Kabupaten Barito Timur'),
(15, 1, 'Kota Palangkaraya'),
(16, 1, 'Kabupaten Paser'),
(16, 1, 'Kabupaten Kutai Kartanegara'),
(16, 1, 'Kabupaten Berau'),
(16, 1, 'Kabupaten Kutai Barat'),
(16, 1, 'Kabupaten Kutai Timur'),
(16, 1, 'Kabupaten Panajam Paser Utara'),
(16, 1, 'Kabupaten Mahakam Ulu'),
(16, 1, 'Kota Balikpapan'),
(16, 1, 'Kota Samarinda'),
(16, 1, 'Kota Bontang'),
(17, 1, 'Kabupaten Bulungan'),
(17, 1, 'Kabupaten Malinau'),
(17, 1, 'Kabupaten Nunukan'),
(17, 1, 'Kabupaten Tana Tidung'),
(17, 1, 'Kota Tarakan'),
(18, 1, 'Kabupaten Bangka'),
(18, 1, 'Kabupaten Belitung'),
(18, 1, 'Kabupaten Bangka Selatan'),
(18, 1, 'Kabupaten Bangka Tengah'),
(18, 1, 'Kabupaten Bangka Barat'),
(18, 1, 'Kabupaten Belitung Timur'),
(18, 1, 'Kota Pangkal Pinang'),
(19, 1, 'Kabupaten Bintan'),
(19, 1, 'Kabupaten Karimun'),
(19, 1, 'Kabupaten Natuna'),
(19, 1, 'Kabupaten Lingga'),
(19, 1, 'Kabupaten Kepulauan Anambas'),
(19, 1, 'Kota Batam'),
(19, 1, 'Kota Tanjung Pinang'),
(20, 1, 'Kabupaten Lampung Selatan'),
(20, 1, 'Kabupaten Lampung Tengah'),
(20, 1, 'Kabupaten Lampung Utara'),
(20, 1, 'Kabupaten Lampung Barat'),
(20, 1, 'Kabupaten Tulang Bawang'),
(20, 1, 'Kabupaten Tanggamus'),
(20, 1, 'Kabupaten Lampung Timur'),
(20, 1, 'Kabupaten Way Kanan'),
(20, 1, 'Kabupaten Pesawaran'),
(20, 1, 'Kabupaten Pringsewu'),
(20, 1, 'Kabupaten Mesuji'),
(20, 1, 'Kabupaten Tulang Bawang Barat'),
(20, 1, 'Kabupaten Pesisir Barat'),
(20, 1, 'Kota Bandar Lampung'),
(20, 1, 'Kota Metro'),
(21, 1, 'Kabupaten Maluku Tengah'),
(21, 1, 'Kabupaten Maluku Tenggara'),
(21, 1, 'Kabupaten Maluku Tenggara Barat'),
(21, 1, 'Kabupaten Buru'),
(21, 1, 'Kabupaten Seram Bagian Timur'),
(21, 1, 'Kabupaten Seram Bagian Barat'),
(21, 1, 'Kabupaten Kepulauan Aru'),
(21, 1, 'Kabupaten Maluku Barat Daya'),
(21, 1, 'Kabupaten Buru Selatan'),
(21, 1, 'Kota Ambon'),
(21, 1, 'Kota Tual'),
(22, 1, 'Kabupaten Halmahera Barat'),
(22, 1, 'Kabupaten Halmahera Tengah'),
(22, 1, 'Kabupaten Halmahera Utara'),
(22, 1, 'Kabupaten Halmahera Selatan'),
(22, 1, 'Kabupaten Kepulauan Sula'),
(22, 1, 'Kabupaten Halmahera Timur'),
(22, 1, 'Kabupaten Pulau Morotai'),
(22, 1, 'Kabupaten Pulau Taliabu'),
(22, 1, 'Kota Ternate'),
(22, 1, 'Kota Tidore Kepulauan'),
(23, 1, 'Kabupaten Lombok Barat'),
(23, 1, 'Kabupaten Lombok Tengah'),
(23, 1, 'Kabupaten Lombok Timur'),
(23, 1, 'Kabupaten Sumbawa'),
(23, 1, 'Kabupaten Dompu'),
(23, 1, 'Kabupaten Bima'),
(23, 1, 'Kabupaten Sumbawa Barat'),
(23, 1, 'Kabupaten Lombok Utara'),
(23, 1, 'Kota Mataram'),
(23, 1, 'Kota Bima'),
(24, 1, 'Kabupaten Kupang'),
(24, 1, 'Kabupaten Timor Tengah Selatan'),
(24, 1, 'Kabupaten Timor Tengah Utara'),
(24, 1, 'Kabupaten Belu'),
(24, 1, 'Kabupaten Alor'),
(24, 1, 'Kabupaten Flores Timur'),
(24, 1, 'Kabupaten Sikka'),
(24, 1, 'Kabupaten Ende'),
(24, 1, 'Kabupaten Ngada'),
(24, 1, 'Kabupaten Manggarai'),
(24, 1, 'Kabupaten Sumba Timur'),
(24, 1, 'Kabupaten Sumba Barat'),
(24, 1, 'Kabupaten Lembata'),
(24, 1, 'Kabupaten Rote Ndao'),
(24, 1, 'Kabupaten Manggarai Barat'),
(24, 1, 'Kabupaten Nagekeo'),
(24, 1, 'Kabupaten Sumba Tengah'),
(24, 1, 'Kabupaten Sumba Barat Daya'),
(24, 1, 'Kabupaten Manggarai Timur'),
(24, 1, 'Kabupaten Sabu Raijua'),
(24, 1, 'Kabupaten Malaka'),
(24, 1, 'Kota Kupang'),
(25, 1, 'Kabupaten Merauke'),
(25, 1, 'Kabupaten Jayawijaya'),
(25, 1, 'Kabupaten Jayapura'),
(25, 1, 'Kabupaten Nabire'),
(25, 1, 'Kabupaten Kepulauan Yapen'),
(25, 1, 'Kabupaten Biak Numfor'),
(25, 1, 'Kabupaten Puncak Jaya'),
(25, 1, 'Kabupaten Paniai'),
(25, 1, 'Kabupaten Mimika'),
(25, 1, 'Kabupaten Sarmi'),
(25, 1, 'Kabupaten Keerom'),
(25, 1, 'Kabupaten Pegunungan Bintang'),
(25, 1, 'Kabupaten Yahukimo'),
(25, 1, 'Kabupaten Tolikara'),
(25, 1, 'Kabupaten Waropen'),
(25, 1, 'Kabupaten Boven Digoel'),
(25, 1, 'Kabupaten Mappi'),
(25, 1, 'Kabupaten Asmat'),
(25, 1, 'Kabupaten Supiori'),
(25, 1, 'Kabupaten Mamberamo Raya'),
(25, 1, 'Kabupaten Mamberamo Tengah'),
(25, 1, 'Kabupaten Yalimo'),
(25, 1, 'Kabupaten Lanny Jaya'),
(25, 1, 'Kabupaten Nduga'),
(25, 1, 'Kabupaten Puncak'),
(25, 1, 'Kabupaten Dogiyai'),
(25, 1, 'Kabupaten Intan Jaya'),
(25, 1, 'Kabupaten Deiyai'),
(25, 1, 'Kota Jayapura'),
(26, 1, 'Kabupaten Sorong'),
(26, 1, 'Kabupaten Manokwari'),
(26, 1, 'Kabupaten Fakfak'),
(26, 1, 'Kabupaten Sorong Selatan'),
(26, 1, 'Kabupaten Raja Ampat'),
(26, 1, 'Kabupaten Teluk Bintuni'),
(26, 1, 'Kabupaten Teluk Wondama'),
(26, 1, 'Kabupaten Kaimana'),
(26, 1, 'Kabupaten Tambrauw'),
(26, 1, 'Kabupaten Maybrat'),
(26, 1, 'Kabupaten Manokwari Selatan'),
(26, 1, 'Kabupaten Pegunungan Arfak'),
(26, 1, 'Kota Sorong'),
(27, 1, 'Kabupaten Kampar'),
(27, 1, 'Kabupaten Indragiri Hulu'),
(27, 1, 'Kabupaten Bengkalis'),
(27, 1, 'Kabupaten Indragiri Hilir'),
(27, 1, 'Kabupaten Pelalawan'),
(27, 1, 'Kabupaten Rokan Hulu'),
(27, 1, 'Kabupaten Rokan Hilir'),
(27, 1, 'Kabupaten Siak'),
(27, 1, 'Kabupaten Kuantan Singingi'),
(27, 1, 'Kabupaten Kepulauan Meranti'),
(27, 1, 'Kota Pekanbaru'),
(27, 1, 'Kota Dumai'),
(28, 1, 'Kabupaten Mamuju Utara'),
(28, 1, 'Kabupaten Mamuju'),
(28, 1, 'Kabupaten Mamasa'),
(28, 1, 'Kabupaten Polewali Mandar'),
(28, 1, 'Kabupaten Majene'),
(28, 1, 'Kabupaten Mamuju Tengah'),
(29, 1, 'Kabupaten Kepulauan Selayar'),
(29, 1, 'Kabupaten Bulukumba'),
(29, 1, 'Kabupaten Bantaeng'),
(29, 1, 'Kabupaten Jeneponto'),
(29, 1, 'Kabupaten Takalar'),
(29, 1, 'Kabupaten Gowa'),
(29, 1, 'Kabupaten Sinjai'),
(29, 1, 'Kabupaten Bone'),
(29, 1, 'Kabupaten Maros'),
(29, 1, 'Kabupaten Pangkajene dan Kepulauan'),
(29, 1, 'Kabupaten Barru'),
(29, 1, 'Kabupaten Soppeng'),
(29, 1, 'Kabupaten Wajo'),
(29, 1, 'Kabupaten Sidenreng Rappang'),
(29, 1, 'Kabupaten Pinrang'),
(29, 1, 'Kabupaten Enrekang'),
(29, 1, 'Kabupaten Luwu'),
(29, 1, 'Kabupaten Tana Toraja'),
(29, 1, 'Kabupaten Luwu Utara'),
(29, 1, 'Kabupaten Luwu Timur'),
(29, 1, 'Kabupaten Toraja Utara'),
(29, 1, 'Kota Makassar'),
(29, 1, 'Kota Parepare'),
(29, 1, 'Kota Palopo'),
(30, 1, 'Kabupaten Banggai'),
(30, 1, 'Kabupaten Poso'),
(30, 1, 'Kabupaten Donggala'),
(30, 1, 'Kabupaten Tolitoli'),
(30, 1, 'Kabupaten Buol'),
(30, 1, 'Kabupaten Morowali'),
(30, 1, 'Kabupaten Banggai Kepulauan'),
(30, 1, 'Kabupaten Parigi Moutong'),
(30, 1, 'Kabupaten Tojo Una-Una'),
(30, 1, 'Kabupaten Sigi'),
(30, 1, 'Kabupaten Banggai Laut'),
(30, 1, 'Kabupaten Morowali Utara'),
(30, 1, 'Kota Palu'),
(31, 1, 'Kabupaten Kolaka'),
(31, 1, 'Kabupaten Konawe'),
(31, 1, 'Kabupaten Muna'),
(31, 1, 'Kabupaten Buton'),
(31, 1, 'Kabupaten Konawe Selatan'),
(31, 1, 'Kabupaten Bombana'),
(31, 1, 'Kabupaten Wakatobi'),
(31, 1, 'Kabupaten Kolaka Utara'),
(31, 1, 'Kabupaten Konawe Utara'),
(31, 1, 'Kabupaten Buton Utara'),
(31, 1, 'Kabupaten Kolaka Timur'),
(31, 1, 'Kabupaten Konawe Kepulauan'),
(31, 1, 'Kabupaten Muna Barat'),
(31, 1, 'Kabupaten Buton Tengah'),
(31, 1, 'Kabupaten Buton Selatan'),
(31, 1, 'Kota Kendari'),
(31, 1, 'Kota Bau Bau'),
(32, 1, 'Kabupaten Bolaang Mongondow'),
(32, 1, 'Kabupaten Minahasa'),
(32, 1, 'Kabupaten Kepulauan Sangihe'),
(32, 1, 'Kabupaten Kepulauan Talaud'),
(32, 1, 'Kabupaten Minahasa Selatan'),
(32, 1, 'Kabupaten Minahasa Utara'),
(32, 1, 'Kabupaten Minahasa Tenggara'),
(32, 1, 'Kabupaten Bolaang Mondondow Utara'),
(32, 1, 'Kabupaten Kepulauan Siau Tagulandang Biaro'),
(32, 1, 'Kabupaten Bolaang Mondondow Timur'),
(32, 1, 'Kabupaten Bolaang Mondondow Selatan'),
(32, 1, 'Kota Manado'),
(32, 1, 'Kota Bitung'),
(32, 1, 'Kota Tomohon'),
(32, 1, 'Kota Kotamobagu'),
(33, 1, 'Kabupaten Pesisir Selatan'),
(33, 1, 'Kabupaten Solok'),
(33, 1, 'Kabupaten Sijunjung'),
(33, 1, 'Kabupaten Tanah Datar'),
(33, 1, 'Kabupaten Padang Pariaman'),
(33, 1, 'Kabupaten Agam'),
(33, 1, 'Kabupaten Lima Puluh Kota'),
(33, 1, 'Kabupaten Pasaman'),
(33, 1, 'Kabupaten Kepulauan Mentawai'),
(33, 1, 'Kabupaten Dharmasraya'),
(33, 1, 'Kabupaten Solok Selatan'),
(33, 1, 'Kabupaten Pasaman Barat'),
(33, 1, 'Kota Padang'),
(33, 1, 'Kota Solok'),
(33, 1, 'Kota Sawahlunto'),
(33, 1, 'Kota Padangpanjang'),
(33, 1, 'Kota Bukittinggi'),
(33, 1, 'Kota Payakumbuh'),
(33, 1, 'Kota Pariaman'),
(34, 1, 'Kabupaten Ogan Komering Ulu'),
(34, 1, 'Kabupaten Ogan Komering Ilir'),
(34, 1, 'Kabupaten Muara Enim'),
(34, 1, 'Kabupaten Lahat'),
(34, 1, 'Kabupaten Musi Rawas'),
(34, 1, 'Kabupaten Musi Banyuasin'),
(34, 1, 'Kabupaten Banyuasin'),
(34, 1, 'Kabupaten Ogan Komering Ulu Timur'),
(34, 1, 'Kabupaten Ogan Komering Ulu Selatan'),
(34, 1, 'Kabupaten Ogan Ilir'),
(34, 1, 'Kabupaten Empat Lawang'),
(34, 1, 'Kabupaten Penukal Abab Lematang Ilir'),
(34, 1, 'Kabupaten Musi Rawas Utara'),
(34, 1, 'Kota Palembang'),
(34, 1, 'Kota Pagar Alam'),
(34, 1, 'Kota Lubuk Linggau'),
(34, 1, 'Kota Prabumulih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fromku`
--

CREATE TABLE `fromku` (
  `id_from` int(11) NOT NULL,
  `klarifikasi` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `tkt` varchar(20) NOT NULL,
  `m_pelaporan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `jn_kasus` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `nm_pelapor` varchar(50) NOT NULL,
  `instansi_telapor` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `daerah` varchar(100) NOT NULL,
  `lokus` varchar(20) NOT NULL,
  `lampiran_aduan` varchar(250) NOT NULL,
  `tindak_lanjut` varchar(50) NOT NULL,
  `s_itjen` varchar(20) NOT NULL,
  `jb_laporan` varchar(200) NOT NULL,
  `status_jb` varchar(200) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fromku`
--

INSERT INTO `fromku` (`id_from`, `klarifikasi`, `tgl`, `tkt`, `m_pelaporan`, `jenis`, `jn_kasus`, `judul`, `deskripsi`, `nm_pelapor`, `instansi_telapor`, `provinsi`, `daerah`, `lokus`, `lampiran_aduan`, `tindak_lanjut`, `s_itjen`, `jb_laporan`, `status_jb`, `keterangan`) VALUES
(117, 'PENGADUAN', '2020-11-11', '392019Kk', 'SOSIAL MEDIA', 'KEPEGAWAIAN', 'KKN', '', 'Oke', 'Shadat', 'SMP', '7.Bengkulu', 'Kabupaten Bengkulu Selatan', 'Itjen', '11.pdf', 'Telah Investigasi', '', '', 'Selesai', 'Shadat'),
(118, 'WBS', '2020-11-12', '197493az', 'EMAIL', 'KEUANGAN', 'BOS', 'Kecurangan', 'ecamatan yang memiliki peran aktif dalam masalah ini dengan pihak penyedia pengadaan soal, atau tersangka yang sudah kami tahan kemarin (JRR,red). Mereka kerjasama itu. Disitu komunikasi dengan tersangka sebelumnya terjadi. Kita sudah cek komunikasinya melalui HP tersangka. Di sinilah permainan antara K3S dengan penyedia soal-soal itu sehingga timbul kerugian negara yang nilainya 17 milyar', 'Tirta', 'SMP', '18.Bangka Belitung', 'Kabupaten Bangka', 'Ditjen Paudni & Dikm', '12.pdf', 'Surat Klarifikasi', '', '', 'Selesai', 'Panji'),
(120, 'PERMOHONAN INFORMASI', '2020-11-21', '197428fA', 'WEB POSKO', 'KEUANGAN', 'CPNS', 'Cek Bantuan', 'Deskripsi adalah teks atau paragraf yang menggambarkan suatu objek. Teks deskripsi biasanya menjelaskan seseorang, benda, sebuah peristiwa, dan lain-lainnya. Dengan gambaran dari teks deskripsi, pembaca bisa mendapatkan bayangan tentang objek yang sedang dijelaskan dalam teks tersebut.  Tujuan dari teks deskripsi adalah untuk memberikan gambaran dan penjelasan kepada pembaca agar mereka memahami objek apa yang sedang dibahas atau dibicarakan dalam sebuah teks. Gambaran objek dalam teks deskripsi', 'Rifqi1', 'Kelurahan', '18.Bangka Belitung', 'Kabupaten Bangka', 'Ditjen Dikdasmen', '14.pdf', 'Surat Klarifikasi', '', '', 'Belum Selesai', 'Bayu'),
(121, 'WBS', '2020-11-21', '356174Wk', 'TELEPON', 'AKADEMIK', 'BSM/PIP', 'Cek Bantuan', 'sadsadsadasdsadsadsad', 'Shadat1', 'mendung', '4.Aceh', 'Kabupaten Aceh Barat', 'Ditjen Dikdasmen', '15.pdf', 'Telah Investigasi', '', '', 'Selesai', 'Yoga'),
(122, 'SARAN', '2020-11-15', '849061uC', 'TELEPON', 'AKADEMIK', 'Kepegawaian', 'Administrasi', '1. Menurut M. Manullang (2008:11)Menurut M. Manulang administrasi kepegawaian adalah ilmu dalam merencanakan pelaksanaan dan pengontrolan tenaga kerja dalam upaya agar terciptanya atau terealisasikan sebuah tujuan yang sudah dirancang dalam suatu organisasi atau perusahaan dengan adanya kepuasan hati pada diri pegawai.2. Menurut HandokoMenurut Handoko pengertian administrasi kepegawaian adalah penarikan, seleksi, pemeliharaan, pengembangan sumber daya manusia yang ada guna mencapai tujua', 'Uji', 'SMP', '21.Makulu', 'Kabupaten Buru', 'Ditjen GTK', '16.pdf', 'Teruskan Instansi Be', '', '', 'Belum Selesai', 'Lem'),
(123, 'PERMOHONAN INFORMASI', '2020-11-12', '453021uH', 'TELEPON', 'KEPEGAWAIAN', 'DAK', 'Kecurangan', 'sedang berlangsung', 'Rani', 'Balai ', '7.Bengkulu', 'Kabupaten Bengkulu Selatan', 'Balitbang', '5.BusinessModelCanvasRisetBatubara.pdf', 'Telah Investigasi', '', '', 'Selesai', 'Visnu'),
(124, 'WBS', '2020-11-16', '418537YG', 'SOSIAL MEDIA', 'ASET', 'Spect Teknis', 'Bantuan', 'Peta persebaran bantuan pembangunan resmi tahun 2005. Dalam hubungan internasional, bantuan (juga disebut bantuan internasional atau bantuan luar negeri)', 'Rifqi', 'SD', '18.Bangka Belitung', 'Kabupaten Bangka', 'Ditjen Dikdasmen', '15.pdf', 'Disposisi ke UPG', '', '', 'Belum Selesai', 'Shadat'),
(125, 'PENGADUAN', '2020-11-18', '375921Ca', 'SMS', 'AKADEMIK', 'Bantuan Pemerintah', 'Sedang mendalami proses', 'Bantuan', 'Bayu', 'kecamatan', '7.Bengkulu', 'Kabupaten Bengkulu Selatan', 'Ditjen Paudni & Dikm', 'Validasi Perangkat MobileAssignment T6 - (20170801176).pdf', 'Surat Klarifikasi', '', '', 'Belum Selesai', ''),
(126, 'PENGADUAN', '2020-11-14', '458312sY', 'SMS', 'KEPEGAWAIAN', 'Pungutan Liar', 'Oke', 'Bantuan', 'Rifqi', 'Kelurahan', '11.Jawa Tengah', 'Kabupaten Brebes', 'Ditjen Dikdasmen', 'Validasi Perangkat MobileAssignment T6 - (20170801176).pdf', 'Disposisi ke UPG', '', '', 'Belum Selesai', ''),
(129, 'PENGADUAN', '2021-02-08', '879051MC', 'SOSIAL MEDIA', 'KEPEGAWAIAN', 'BMN', 'Pemilihan data', 'Bantuan', 'Shadat', 'Kelurahan', '25.Papua', 'Kabupaten Jayawijaya', 'Ditjen Paudni & Dikm', 'Baguos PS KKP v1.4.pdf', 'Telah Investigasi', '', '', 'Belum Selesai', 'Yoga'),
(130, 'PERMOHONAN INFORMASI', '0000-00-00', '201357yT', 'WEB POSKO', 'PENGADAAN BARANG DAN JASA', 'Tender', 'sadsa', 'adsad', 'dsfdsf', 'sadsa', '14.Kalimantan Selatan', 'Kabupaten Barito Kuala', 'Ditjen Paudni & Dikm', 'cv BaguosPS (1).pdf', 'Telah Investigasi', '', '', 'Belum Selesai', 'dfsfdsfds'),
(131, 'WBS', '2022-08-03', '937125kb', 'EMAIL', 'KEPEGAWAIAN', 'BOS', 'testtt', 'test', 'test', 'test', '10.Jambi', 'Kabupaten Tanjung Jabung Timur', 'Ditjen GTK', 'MSDS US - Uvex Clear S463.pdf', 'Surat Klarifikasi', '', '', 'Selesai', 'testtttt'),
(132, '', '0000-00-00', '925361IV', '', '', '', '', '', '', '', '', '', '', 'MSDS US - Uvex Clear S463.pdf', '', '', '', '', ''),
(133, '', '0000-00-00', '831972Si', '', '', '', '', '', '', '', '', '', '', 'MSDS US - Uvex Clear S463.pdf', '', '', '', '', ''),
(134, '', '0000-00-00', '457362UF', '', '', '', '', '', '', '', '', '', '', 'test.pdf', '', '', '', '', ''),
(135, 'PENGADUAN', '2022-08-10', '748260TD', 'DATANG LANGSUNG', 'AKADEMIK', 'Pungutan UNBK', 'das', 'sadas', 'asdas', 'asdas', '15.Kalimantan Tengah', 'Kabupaten Pulang Pisau', 'Ditjen Dikdasmen', 'price_card.pdf', 'Telah Investigasi', '', '', 'Belum Selesai', 'asdas'),
(136, 'WBS', '2022-08-17', '134680Yt', 'WHATSAPP', 'KEPEGAWAIAN', 'Seragam', 'asd', 'asdasd', 'asdas', 'asda', '15.Kalimantan Tengah', 'Kabupaten Pulang Pisau', 'Ditjen Kebudayaan', 'checklist.pdf', 'Telah Investigasi', '', '', 'Belum Selesai', 'asdas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `itjen`
--

CREATE TABLE `itjen` (
  `id_itjen` int(11) NOT NULL,
  `nm_itjen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `itjen`
--

INSERT INTO `itjen` (`id_itjen`, `nm_itjen`) VALUES
(1, 'Setjen'),
(2, 'Itjen'),
(3, 'Ditjen Paudni & Dikmas'),
(4, 'Ditjen Dikdasmen'),
(5, 'Ditjen GTK'),
(6, 'Ditjen Kebudayaan'),
(7, 'Balitbang'),
(8, 'Badan Bahasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nm_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nm_jenis`) VALUES
(1, 'PENGADAAN BARANG DAN JASA'),
(2, 'KEUANGAN'),
(3, 'KEPEGAWAIAN'),
(4, 'AKADEMIK'),
(5, 'ASET'),
(6, 'LAINNYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jn_kasus`
--

CREATE TABLE `jn_kasus` (
  `id_jn` int(11) NOT NULL,
  `nm_jn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jn_kasus`
--

INSERT INTO `jn_kasus` (`id_jn`, `nm_jn`) VALUES
(1, 'Tender'),
(1, 'Proses Lelang'),
(1, 'Spect Teknis'),
(1, 'Keterlambatan'),
(2, 'Pungutan Liar'),
(2, 'BOS'),
(2, 'BSM/PIP'),
(2, 'DAK'),
(2, 'TFG/Sertifikasi'),
(2, 'KKN'),
(2, 'Gratifikasi'),
(2, 'Bantuan Pemerintah'),
(2, 'Pungutan UNBK'),
(2, 'Seragam'),
(3, 'CPNS'),
(3, 'Kepegawaian'),
(3, 'Pengangkatan'),
(3, 'Pensiun & Taspen'),
(4, 'MPLS'),
(4, 'PPDB'),
(4, 'USBN'),
(4, 'Ujian Nasional'),
(4, 'Proses Belajar Mengajar'),
(4, 'Ijazah Palsu'),
(4, 'Penahanan Administrasi'),
(4, 'Hasil UN/USBN'),
(4, 'Larangan Ikut Ujian'),
(5, 'BMN'),
(5, 'Lahan Bangunan'),
(6, 'Perselingkuhan'),
(6, 'Penyalahgunaan Wewenang'),
(6, 'Perizinan'),
(6, 'Buku/LKS'),
(6, 'Transparansi Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klarifikasi`
--

CREATE TABLE `klarifikasi` (
  `id` int(11) NOT NULL,
  `nm_klarifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klarifikasi`
--

INSERT INTO `klarifikasi` (`id`, `nm_klarifikasi`) VALUES
(1, 'PENGADUAN'),
(2, 'WBS'),
(3, 'PERMOHONAN INFORMASI'),
(4, 'SARAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media`
--

CREATE TABLE `media` (
  `id_media` int(50) NOT NULL,
  `m_pelapor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `media`
--

INSERT INTO `media` (`id_media`, `m_pelapor`) VALUES
(1, 'WEB POSKO'),
(2, 'SMS'),
(3, 'EMAIL'),
(4, 'SOSIAL MEDIA'),
(5, 'TELEPON'),
(6, 'BERITA ONLINE'),
(7, 'WHATSAPP'),
(8, 'DATANG LANGSUNG'),
(9, 'TERUSAN ULT'),
(10, 'WEB WBS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(50) NOT NULL,
  `nm_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nm_provinsi`) VALUES
(1, 'DKI Jakarta'),
(2, 'Jawa Barat'),
(3, 'Sumatera Utara'),
(4, 'Aceh'),
(5, 'Bali'),
(6, 'Banten'),
(7, 'Bengkulu'),
(8, 'DI Yogyakarta'),
(9, 'Gorontalo'),
(10, 'Jambi'),
(11, 'Jawa Tengah'),
(12, 'Jawa Timur'),
(13, 'Kalimantan Barat'),
(14, 'Kalimantan Selatan'),
(15, 'Kalimantan Tengah'),
(16, 'Kalimantan Timur'),
(17, 'Kalimantan Utara'),
(18, 'Bangka Belitung'),
(19, 'Kepulauan Riau'),
(20, 'Lampung'),
(21, 'Makulu'),
(22, 'Makulu Utara'),
(23, 'Nusa Tenggara Barat'),
(24, 'Nusa Tenggara Timur'),
(25, 'Papua'),
(26, 'Papua Barat'),
(27, 'Riau'),
(28, 'Sulawesi Barat'),
(29, 'Sulawesi Selatan'),
(30, 'Sulawesi Tengah'),
(31, 'Sulawesi Tenggara'),
(32, 'Sulawesi Utara'),
(33, 'Sumatra Barat'),
(34, 'Sumatra Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nm_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nm_status`) VALUES
(1, 'Belum Selesai'),
(2, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tdkl` int(11) NOT NULL,
  `nm_tdkl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tindakan`
--

INSERT INTO `tindakan` (`id_tdkl`, `nm_tdkl`) VALUES
(1, 'Tidak Dapat Ditindaklanjuti'),
(2, 'Disposisi ke UPG'),
(3, 'Surat Klarifikasi'),
(4, 'Telah Investigasi'),
(5, 'Teruskan Instansi Berwenang'),
(6, 'Dijawab Dengan Penjelasan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `fromku`
--
ALTER TABLE `fromku`
  ADD PRIMARY KEY (`id_from`);

--
-- Indeks untuk tabel `itjen`
--
ALTER TABLE `itjen`
  ADD PRIMARY KEY (`id_itjen`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `klarifikasi`
--
ALTER TABLE `klarifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tdkl`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `fromku`
--
ALTER TABLE `fromku`
  MODIFY `id_from` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT untuk tabel `itjen`
--
ALTER TABLE `itjen`
  MODIFY `id_itjen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `klarifikasi`
--
ALTER TABLE `klarifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tindakan`
--
ALTER TABLE `tindakan`
  MODIFY `id_tdkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
