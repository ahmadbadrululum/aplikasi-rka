-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2018 at 05:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rkap`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_subkomponen`
--

CREATE TABLE `detail_subkomponen` (
  `id_detail` int(11) NOT NULL,
  `nama_detail` varchar(100) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `frq` int(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `id_subkomponen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_subkomponen`
--

INSERT INTO `detail_subkomponen` (`id_detail`, `nama_detail`, `qty`, `satuan`, `frq`, `anggaran`, `id_subkomponen`) VALUES
(46, 'Direktur', 12, 'bulan', 1, 500000, 68),
(47, 'Deputi (KSA)', 12, 'bulan', 1, 400000, 68),
(48, 'Deputi (KSA)', 12, 'bulan', 1, 300000, 68),
(59, 'Dosen Aqidah & Fiqh ', 12, 'bulan', 1, 2000, 71),
(60, 'Dosen Bahasa Arab', 5, NULL, 1, NULL, 71),
(61, 'Dosen Siroh', 3, 'uang', 4, 60000, 71);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama`, `deskripsi`) VALUES
(1, 'SDK', 'SDM dan Keuangan '),
(2, 'SUH', 'Pengasuhan'),
(5, 'KUM', 'Kesekretariatan dan Umum '),
(10, 'PEK', 'PENDIDIKAN, PENGAJARAN DAN PENGEMBANGAN KURIKULUM'),
(11, 'YAN', 'PELAYANAN');

-- --------------------------------------------------------

--
-- Table structure for table `komponen`
--

CREATE TABLE `komponen` (
  `id_komponen` int(11) NOT NULL,
  `nama_komponen` varchar(100) NOT NULL,
  `id_suboutput` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komponen`
--

INSERT INTO `komponen` (`id_komponen`, `nama_komponen`, `id_suboutput`) VALUES
(25, 'Pendidikan dan Pelatihan', 30),
(26, 'Kunjungan Belajar', 30),
(27, 'Buku Manajemen SDM dan Organisasi', 30),
(28, 'Karyawan Tetap', 33),
(29, 'Karyawan Honorer', 33),
(31, 'Kegiatan Santri Pekanan', 35),
(32, 'Uang Saku Santri', 37),
(33, 'Alat Tulis Kantor', 37),
(35, 'Modul Pembelajaran', 34),
(37, 'Pekerja antar waktu', 33),
(38, 'Aplikasi Penilaian Kinerja Karyawan', 31),
(39, 'Aplikasi Penilaian Kinerja Organisasi', 31),
(40, 'Kegiatan Santri Pekanan', 35),
(41, 'Kegiatan Santri Bulanan', 39),
(42, 'Rekrutmen Santri PeTIK Angkatan 5', 40),
(43, 'Kegiatan Santri Tahunan', 40),
(44, 'Peringatan Hari Besar Islam/Nasional', 40),
(45, 'Administrasi & Dokumentasi', 40),
(46, 'Kemandirian Pangan Santri (Penanaman Tanaman Buah & Sayur)', 40),
(47, 'Administrasi & Dokumentasi', 37),
(48, 'Rapat Kerja dan Rapat Kerja dan Anggaran', 38),
(49, 'BPM Development', 38),
(50, 'Partisipasi Lembaga Pemerintahan', 38),
(51, 'Informasi Kelembagaan', 38),
(52, 'Pajak dan Perizinan ', 38),
(53, 'Kerjasama LP3 STT Nurul Fikri', 41),
(54, 'Penyelenggaraan Pendidikan IT Mandiri', 41),
(55, 'Evaluasi Pendidikan dan Pengajaran', 41),
(56, 'Pengadaan Modul Kuliah dan Sumber Belajar', 41),
(57, 'Ekstrakulikuler dan Pengembangan Kompetensi Santri', 41),
(58, 'Ekstrakulikuler dan Pengembangan Kompetensi Santri', 30),
(59, 'Tagihan Bulanan', 42),
(60, 'Pantri', 42),
(61, 'Kesehatan ', 42),
(62, 'Pengembangan Sekretariat', 43),
(63, 'Peningkatan Fungsi Aula Serbaguna dan LabKomputer', 43),
(64, 'Peningkatan Fungsi Ruang Arsip', 43),
(65, 'Alat Elektronik, Hardware dan Software Komputer', 43),
(66, 'Perlengkapan/Fasilitas Umum', 43),
(67, 'Peralatan Elektrik', 43),
(68, 'Instalasi Sound System', 43),
(69, 'Perlengkapan Olahraga', 43),
(70, 'Kebersihan', 43),
(71, 'Perlengkapan Dapur', 43),
(72, 'Perkakas dan Alat Mekanik', 30),
(73, 'Pemeliharaan Aset Transportasi', 44),
(74, 'Pemeliharaan Alat Elektronik', 44),
(75, 'Perawatan Inventaris', 44),
(76, 'Renovasi dan Perawatan Fisik Bangunan', 44);

-- --------------------------------------------------------

--
-- Table structure for table `rancangan_bulan`
--

CREATE TABLE `rancangan_bulan` (
  `id_bulanan` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_suboutput` int(11) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `id_subkomponen` int(11) NOT NULL,
  `id_detailsubkomponen` int(11) DEFAULT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `tgl_realisasi` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `satuan` varchar(30) DEFAULT NULL,
  `frq` int(11) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rancangan_bulan`
--

INSERT INTO `rancangan_bulan` (`id_bulanan`, `id_divisi`, `id_suboutput`, `id_komponen`, `id_subkomponen`, `id_detailsubkomponen`, `kode`, `tgl_realisasi`, `qty`, `satuan`, `frq`, `anggaran`, `keterangan`) VALUES
(4, 1, 30, 25, 38, NULL, 'A3', '2018-05-02', 45, 'konsumsi', 45, 5000, ''),
(6, 1, 33, 28, 68, NULL, 'A6', '2018-05-15', NULL, NULL, NULL, NULL, ''),
(7, 1, 31, 27, 40, NULL, 'A11', '2018-06-14', 1, 'hari', 45, 20000, ''),
(8, 2, 35, 40, 42, NULL, 'A09', '2018-06-27', 11, 'hari', 10, 10000, '');

-- --------------------------------------------------------

--
-- Table structure for table `subkomponen`
--

CREATE TABLE `subkomponen` (
  `id_subkomponen` int(11) NOT NULL,
  `nama_subkomponen` varchar(100) NOT NULL,
  `id_komponen` int(11) NOT NULL,
  `tgl_realisasi` date DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `frq` int(11) DEFAULT NULL,
  `anggaran` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkomponen`
--

INSERT INTO `subkomponen` (`id_subkomponen`, `nama_subkomponen`, `id_komponen`, `tgl_realisasi`, `qty`, `satuan`, `frq`, `anggaran`) VALUES
(38, 'Workshop kepemimpinan', 25, NULL, NULL, NULL, NULL, NULL),
(39, 'Komunikasi, Pemasaran dan jaringan', 25, '1970-01-01', 100, 'pcs', 4, 50000),
(40, 'Smart Ekselensia', 26, NULL, NULL, NULL, NULL, NULL),
(41, 'Tazkia Boarding School', 26, NULL, NULL, NULL, NULL, NULL),
(42, 'Ta\'jil Shaum Sunnah & Khataman Qur\'an ', 25, NULL, NULL, NULL, NULL, NULL),
(44, 'Buku Qiyamul Lail ', 35, NULL, NULL, NULL, NULL, NULL),
(45, 'Pelatihan administrasi perkantoran', 25, NULL, NULL, NULL, NULL, NULL),
(46, 'Workshop penilaian kinerja organisasi dan SDM', 25, NULL, NULL, NULL, NULL, NULL),
(47, 'Pelatihan (SUH)', 25, '1970-01-01', 10, 'tahun', 3, 150000),
(48, 'Pelatihan perpajakan & penyusunan lapkeu (SDK)', 25, NULL, NULL, NULL, NULL, NULL),
(49, 'Pelatihan Menejemen Asset (SDK)', 25, NULL, NULL, NULL, NULL, NULL),
(50, 'Pengajian bulanan karyawan (SDK)', 25, NULL, NULL, NULL, NULL, NULL),
(51, 'Pelatihan administrasi kesekretariatan (KUM)', 25, NULL, NULL, NULL, NULL, NULL),
(52, 'SMA Insan Cendekia Boarding School', 25, NULL, NULL, NULL, NULL, NULL),
(53, 'Perusahaan umum (administratif)', 26, NULL, NULL, NULL, NULL, NULL),
(54, 'Dompet Dhuafa (ukur dan nilai SDM-Organisasi)', 26, NULL, NULL, NULL, NULL, NULL),
(55, 'Studi banding (SUH)', 26, NULL, NULL, NULL, NULL, NULL),
(56, 'Studi banding (KUM)', 26, NULL, NULL, NULL, NULL, NULL),
(57, 'Corporate University', 27, NULL, NULL, NULL, NULL, NULL),
(58, 'Human Capital', 27, NULL, NULL, NULL, NULL, NULL),
(59, 'Pedoman Lengkap Profesional SDM', 27, NULL, NULL, NULL, NULL, NULL),
(60, 'Perilaku Organisasi 1', 27, NULL, NULL, NULL, NULL, NULL),
(61, 'Perilaku Organisasi 2', 27, NULL, NULL, NULL, NULL, NULL),
(62, 'Perilaku Organisasi 2 Key Performance Indicator', 27, NULL, NULL, NULL, NULL, NULL),
(63, 'Manajemen Kepemimpinan dan Kerjasama', 25, NULL, NULL, NULL, NULL, NULL),
(64, 'Audit Manajemen Prosedur dan Implementasi', 27, NULL, NULL, NULL, NULL, NULL),
(65, 'Perilaku Konsumen dan Strategi Pemasaran', 27, NULL, NULL, NULL, NULL, NULL),
(66, 'Panduan Sekretaris', 27, NULL, NULL, NULL, NULL, NULL),
(67, 'Etika Bisnis dan Profesi 1', 25, '2018-12-03', 2, 'set', 23, 35000),
(68, 'Gaji', 28, '2018-07-12', NULL, NULL, NULL, NULL),
(69, 'Tunjangan Hari Raya (THR)', 28, NULL, 2, 'paket', 2, 1000),
(70, 'Hard Competency', 38, NULL, NULL, NULL, NULL, NULL),
(71, 'Gaji', 29, '2018-07-16', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suboutput`
--

CREATE TABLE `suboutput` (
  `id_suboutput` int(11) NOT NULL,
  `nama_suboutput` varchar(50) NOT NULL,
  `id_divisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suboutput`
--

INSERT INTO `suboutput` (`id_suboutput`, `nama_suboutput`, `id_divisi`) VALUES
(30, 'MANAJEMEN BELAJAR', 1),
(31, 'SISTEM SDM', 1),
(33, 'BIAYA SDM', 1),
(34, 'PROGRAM HARIAN', 2),
(35, 'PROGRAM PEKANAN', 2),
(37, 'ADMINISTRASI', 5),
(38, 'KESEKRETARIATAN', 5),
(39, 'PROGRAM BULANAN', 2),
(40, 'PROGRAM TAHUNAN', 2),
(41, 'PENDIDIKAN DAN PENGAJARAN', 10),
(42, 'PELAYANAN', 11),
(43, 'PENGADAAN DAN INSTALASI', 11),
(44, 'PEMELIHARAAN DAN PERAWATAN', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `id_divisi`, `username`, `password`) VALUES
(10, 'Muhammad Iqbal', 1, 'iqbal', 'eedae20fc3c7a6e9c5b1102098771c70'),
(12, 'Wahyu Ilahi', 2, 'wahyu', '32c9e71e866ecdbc93e497482aa6779f'),
(13, 'ahmad', 2, 'badrul', 'e7cd0359c0dd9da73b790eb9bc323714');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_subkomponen`
--
ALTER TABLE `detail_subkomponen`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_subkomponen` (`id_subkomponen`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `komponen`
--
ALTER TABLE `komponen`
  ADD PRIMARY KEY (`id_komponen`),
  ADD KEY `id_suboutput` (`id_suboutput`);

--
-- Indexes for table `rancangan_bulan`
--
ALTER TABLE `rancangan_bulan`
  ADD PRIMARY KEY (`id_bulanan`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_suboutput` (`id_suboutput`),
  ADD KEY `id_komponen` (`id_komponen`),
  ADD KEY `id_subkomponen` (`id_subkomponen`),
  ADD KEY `id_detailsubkomponen` (`id_detailsubkomponen`);

--
-- Indexes for table `subkomponen`
--
ALTER TABLE `subkomponen`
  ADD PRIMARY KEY (`id_subkomponen`),
  ADD KEY `id_komponen` (`id_komponen`);

--
-- Indexes for table `suboutput`
--
ALTER TABLE `suboutput`
  ADD PRIMARY KEY (`id_suboutput`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_subkomponen`
--
ALTER TABLE `detail_subkomponen`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `komponen`
--
ALTER TABLE `komponen`
  MODIFY `id_komponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `rancangan_bulan`
--
ALTER TABLE `rancangan_bulan`
  MODIFY `id_bulanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subkomponen`
--
ALTER TABLE `subkomponen`
  MODIFY `id_subkomponen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `suboutput`
--
ALTER TABLE `suboutput`
  MODIFY `id_suboutput` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_subkomponen`
--
ALTER TABLE `detail_subkomponen`
  ADD CONSTRAINT `detail_subkomponen_ibfk_1` FOREIGN KEY (`id_subkomponen`) REFERENCES `subkomponen` (`id_subkomponen`);

--
-- Constraints for table `komponen`
--
ALTER TABLE `komponen`
  ADD CONSTRAINT `komponen_ibfk_2` FOREIGN KEY (`id_suboutput`) REFERENCES `suboutput` (`id_suboutput`);

--
-- Constraints for table `rancangan_bulan`
--
ALTER TABLE `rancangan_bulan`
  ADD CONSTRAINT `rancangan_bulan_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`),
  ADD CONSTRAINT `rancangan_bulan_ibfk_2` FOREIGN KEY (`id_suboutput`) REFERENCES `suboutput` (`id_suboutput`),
  ADD CONSTRAINT `rancangan_bulan_ibfk_3` FOREIGN KEY (`id_komponen`) REFERENCES `komponen` (`id_komponen`),
  ADD CONSTRAINT `rancangan_bulan_ibfk_4` FOREIGN KEY (`id_subkomponen`) REFERENCES `subkomponen` (`id_subkomponen`),
  ADD CONSTRAINT `rancangan_bulan_ibfk_5` FOREIGN KEY (`id_detailsubkomponen`) REFERENCES `detail_subkomponen` (`id_detail`);

--
-- Constraints for table `subkomponen`
--
ALTER TABLE `subkomponen`
  ADD CONSTRAINT `subkomponen_ibfk_1` FOREIGN KEY (`id_komponen`) REFERENCES `komponen` (`id_komponen`);

--
-- Constraints for table `suboutput`
--
ALTER TABLE `suboutput`
  ADD CONSTRAINT `suboutput_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
