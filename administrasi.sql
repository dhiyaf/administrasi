-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 02:53 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `umur` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `ipk` varchar(10) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `nama`, `jenis_kelamin`, `umur`, `alamat`, `no_hp`, `pendidikan`, `jurusan`, `ipk`, `pic`, `keterangan`, `jenis`, `tanggal`, `email`) VALUES
(31, 'Sinta', 'perempuan', 25, 'Batang', '08729127312', 'undip', 'd3 sipil', '', '', 'diterima', 'sarjana', '2018-01-19', ''),
(33, 'Dhiya Firdaus P A', 'perempuan', 34, 'Batang', '087', 'D3 Sipil Undip', 'd3 sipil', '', '', 'diproses', 'sarjana', '2018-01-19', ''),
(34, 'fendy', 'laki-laki', 29, 'semarang', '', 'SMKN 3 Madiun', 'teknik komputer', '', '', 'diproses', 'sarjana', '2018-01-19', ''),
(35, 'fendys', 'laki-laki', 29, 'semarang', '08798', 'SMKN 3 Madiun', 'teknik komputer', '4,0', 'bu erlin', 'diterima', 'sma', '2018-01-19', 'jshdkak@g.com'),
(36, 'Masadi Naim', 'laki-laki', 19, 'Manchester', '', 'SMKN 3 Madiun', 'teknik komputer', '', '', 'diproses', 'sma', '2018-01-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_magang`
--

CREATE TABLE `data_magang` (
  `id_magang` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `penempatan` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `nilai_kinerja` varchar(255) NOT NULL,
  `nilai_perilaku` varchar(255) NOT NULL,
  `sertifikat` varchar(50) NOT NULL,
  `tgl_data` date NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_magang`
--

INSERT INTO `data_magang` (`id_magang`, `nama`, `jenis_kelamin`, `asal_sekolah`, `nis`, `kelas`, `program`, `penempatan`, `tgl_masuk`, `tgl_keluar`, `nilai_kinerja`, `nilai_perilaku`, `sertifikat`, `tgl_data`, `no_hp`, `jenis`) VALUES
(6, 'M. nuril oktavian', 'laki-laki', 'universitas diponegoro', '21120115130064', '5', 'teknik sistem komputer', 'perawatan kereta', '2018-01-03', '2018-02-11', 'Dalam 1 paragraf terdapaterdapat beberapa bentuk kalimat, kalimat-kalimat itu ialah kalimat pengenal, kalimat utama (kalimat topik), kalimat penjelas, dan kalimat penutup. Kalimat-kalimat ini terangkai menjadi satu kesatuan yang dapat', 'Dalam 1 paragraf tmembentuk suatu gagasan. erdapat beberapa bentuk kalimat, kalimat-kalimat itu ialah kalimat pengenal, kalimat utama (kalimat topik), kalimat penjelas, dan kalimat penutup. Kalimat-kalimat ini terangkai menjadi satu kesatuan yang dapat', '981/imss/kajs/2018', '2018-01-04', '08795314271', 'sarjana'),
(7, 'Yura Yunita', 'perempuan', 'SMK 2 Madiun', '17642', 'XII', 'pemrograman jaringan', 'sdm', '2018-01-13', '2018-01-31', 'yha begitu', 'cukup lah', '762/imss/2018', '2018-01-11', '08756541811', 'sma');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$29Jzkuoz/Af/ORomBQH96u0rxhHaHeZoTVzQT26SpDhamr..UJT6e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `data_magang`
--
ALTER TABLE `data_magang`
  ADD PRIMARY KEY (`id_magang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `data_magang`
--
ALTER TABLE `data_magang`
  MODIFY `id_magang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
