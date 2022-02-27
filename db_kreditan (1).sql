-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 11:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kreditan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ajuan_kreditan`
--

CREATE TABLE `tbl_ajuan_kreditan` (
  `id_ajuan_kreditan` varchar(50) NOT NULL,
  `id_pengguna` varchar(50) DEFAULT NULL,
  `kk` varchar(50) DEFAULT NULL,
  `ktp` varchar(50) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `bukunikah` varchar(50) DEFAULT NULL,
  `skubelumnikah` varchar(50) DEFAULT NULL,
  `jaminan` varchar(50) DEFAULT NULL,
  `jangka_waktu` varchar(2) DEFAULT NULL,
  `jumlah_kredit` double DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `notif` int(11) NOT NULL DEFAULT 0,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ajuan_kreditan`
--

INSERT INTO `tbl_ajuan_kreditan` (`id_ajuan_kreditan`, `id_pengguna`, `kk`, `ktp`, `sku`, `bukunikah`, `skubelumnikah`, `jaminan`, `jangka_waktu`, `jumlah_kredit`, `tgl`, `status`, `notif`, `jenis`) VALUES
('07a6615787dec55ec8bf0177a8c3c30720211127', '2da2656c14c06e8d51aec9a5d2e9997e', 'kk.jpg', 'ktp.jpg', 'sku.jpg', 'buku-nikah.jpg', '-', 'jaminan.jpg', '24', 50000000, '2021-11-01', 2, 1, 1),
('3c9caa83162af14f755da5a179b5935520211114', '38763f2005de9e69abf6c9308bbd71d8', 'kk.jpg', 'ktp.jpg', 'sku.jpg', 'buku-nikah.jpg', '-', 'jaminan.jpg', '24', 25000000, '2021-11-01', 2, 2, 1),
('7d4052154be37051f96d7d0f237ca5db20211206', '38763f2005de9e69abf6c9308bbd71d8', 'kk.jpg', 'ktp.jpg', 'sku.jpg', 'buku-nikah.jpg', '-', 'jaminan.jpg', '24', 45000000, '2021-11-06', 2, 1, 2),
('f8fbabf86b406e0dc92e03f790b6573e20211206', '9e5d1505e6c0c1d72b4354984b0b54da', 'kk.jpg', 'ktp.jpg', 'sku.jpg', 'buku-nikah.jpg', '-', 'jaminan.jpg', '12', 25000000, '2021-12-06', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(20) DEFAULT NULL,
  `pin` varchar(20) DEFAULT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`id_bank`, `nama_bank`, `pin`, `foto`) VALUES
(1, 'BANK BNI', '9382939239', 'bank_bni.png'),
(2, 'BANK BRI', '489380348', 'bank_bri.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bunga_angsuran`
--

CREATE TABLE `tbl_bunga_angsuran` (
  `id` int(11) NOT NULL,
  `harga_awal` double DEFAULT NULL,
  `harga_akhir` double DEFAULT NULL,
  `bulan_12` double DEFAULT NULL,
  `bulan_24` double DEFAULT NULL,
  `bulan_36` double DEFAULT NULL,
  `bulan_48` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bunga_angsuran`
--

INSERT INTO `tbl_bunga_angsuran` (`id`, `harga_awal`, `harga_akhir`, `bulan_12`, `bulan_24`, `bulan_36`, `bulan_48`) VALUES
(1, 1500000, 50000000, 1.83, 1.87, 1.88, 1.89),
(2, 51000000, 100000000, 1.63, 1.67, 1.68, 1.89),
(3, 101000000, 150000000, 1.53, 1.57, 1.58, 1.59);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` varchar(50) NOT NULL,
  `id_pengguna` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `sandi` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `id_pengguna`, `username`, `sandi`, `level`) VALUES
('4ebb7f026859efb1ab3011f86f2095c620211206', '9e5d1505e6c0c1d72b4354984b0b54da', 'user_kreditan07', '$2y$10$qCPSBVh1Gsmm8rX4tQivC.1Z0iIsWcxuh24QIYfyK.q9NwlffZvCu', 2),
('52ecfd986fa49c25dde388f73c7384f720211127', '2da2656c14c06e8d51aec9a5d2e9997e', 'user_kreditan01', '$2y$10$0R.UOveLQUo7fIH/qe7GFen8kbL7N96dktQ6xm/MuedTZR1bl09z2', 2),
('5ebcacd2f1adf6f1cae0e324058ab91120211115', '939254a196dec9cdc020ec396259055a', 'user_kreditan3210', '$2y$10$VpoSztHYylg8MANQ8Yb1UuXYYl97O.2xSPt3oTt0DxIR5qOCI3O6a', 2),
('6701e5425d02e0cc6eaa07b28349194220211107', '73884713c671acb65559b147ea290917', 'admin1710', '$2y$10$mprPTpywKst3yGyIckpNIefUFpJ2eX1SJKPMfOljobazPxAzT22Re', 1),
('97f98876a06047ad395518a86ebc9b4b20211114', '38763f2005de9e69abf6c9308bbd71d8', 'user_kreditan1710', '$2y$10$OdUJOk5rGSQLG60LgTFJ2.SNmRyF6tcBkxMf2VUlIED7OUeM7GPuC', 2),
('a204b89e166672aa3a8154729453d00520211115', '50b90583a4a5032fbe785771bcd72036', 'andrian1710', '$2y$10$kv9Xt8ziYDSBaGHQSoFGP.X2ZuMotyy9ettCsTfbZFybRqWyL.gJS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif_kreditan`
--

CREATE TABLE `tbl_notif_kreditan` (
  `id` int(11) NOT NULL,
  `notif_admin` int(11) DEFAULT NULL,
  `notif_nasabah` int(11) DEFAULT NULL,
  `id_kreditan` varchar(50) DEFAULT NULL,
  `id_pengguna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` varchar(50) NOT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `nomor_hp` varchar(12) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sandi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_lengkap`, `nomor_hp`, `alamat`, `username`, `sandi`) VALUES
('2da2656c14c06e8d51aec9a5d2e9997e', 'andi', '082271586923', 'jalan ahmad yani', 'user_kreditan01', '$2y$10$Vt62dvcpFsbNpIzppGy2Ne8f6CqOJvEInUKpBFOLFPmgKEo4tO6ku'),
('38763f2005de9e69abf6c9308bbd71d8', 'Indah Ayu Sari', '082271586923', 'Jalan Ahmad Yani', 'user_kreditan1710', '$2y$10$aO0PAbSYQAS5CjhPhq5gqOth/bC5bg3408rhAGyT/tF0hgf7bSNrC'),
('50b90583a4a5032fbe785771bcd72036', 'Andrian', '082271586923', 'Jalan Ahmad Yani', 'andrian1710', '$2y$10$OqBq/r05xKWKmwkfcYv4gemQc7HXgMzQKExBbK7oYLKzGy0z9hhS6'),
('73884713c671acb65559b147ea290917', 'admin', '082271586923', 'Jalan Hayam Wuruk', 'admin1710', '$2y$10$mprPTpywKst3yGyIckpNIefUFpJ2eX1SJKPMfOljobazPxAzT22Re'),
('939254a196dec9cdc020ec396259055a', 'Andri Maulana', '082271586923', 'Jalan Ahmad Yani', 'user_kreditan3210', '$2y$10$5rr7vjIpjp9xZEms02OqcOO0lNVYqu82RbFCk7wagqaJEWlQdu1IC'),
('9e5d1505e6c0c1d72b4354984b0b54da', 'Ishak', '082271586923', 'Jalan Ahmad yani', 'user_kreditan07', '$2y$10$byMWiBPMyHpJYz8n1AVmNO7UJ41Yg9V8Ckf1OVpfsfEYRkcymK17e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_persyaratan`
--

CREATE TABLE `tbl_persyaratan` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_persyaratan`
--

INSERT INTO `tbl_persyaratan` (`id`, `keterangan`) VALUES
(1, 'KTP/KTP PASANGAN'),
(2, 'KARTU KELUARGA'),
(3, 'SURAT KETERANGAN BELUM NIKAH'),
(4, 'BUKU NIKAH'),
(5, 'SURAT KETERANGAN USAHA'),
(6, 'JAMINAN/SERTIFIKAT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_pengguna` varchar(100) NOT NULL,
  `id_ajuan_kreditan` varchar(50) DEFAULT NULL,
  `angsuran_bunga` double DEFAULT NULL,
  `angsuran_pokok` double DEFAULT NULL,
  `saldo` double DEFAULT NULL,
  `total_angsuran` double DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `foto` varchar(70) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `denda` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id_riwayat`, `id_pengguna`, `id_ajuan_kreditan`, `angsuran_bunga`, `angsuran_pokok`, `saldo`, `total_angsuran`, `tgl`, `status`, `foto`, `tgl_pembayaran`, `denda`) VALUES
(36, '38763f2005de9e69abf6c9308bbd71d8', '3c9caa83162af14f755da5a179b5935520211114', 467500, 1041667, 23958333, 1509167, '2021-12-01', 1, 'transfer-saldo-gopay-ke-rekening-bank-berhasil.jpg', '2021-12-06', 10000),
(37, '38763f2005de9e69abf6c9308bbd71d8', '7d4052154be37051f96d7d0f237ca5db20211206', 841500, 1875000, 43125000, 2716500, '2021-12-06', 1, 'transfer-saldo-gopay-ke-rekening-bank-berhasil1.jpg', '2021-12-06', 2000),
(38, '9e5d1505e6c0c1d72b4354984b0b54da', 'f8fbabf86b406e0dc92e03f790b6573e20211206', 457500, 2083333, 22916667, 2540833, '2022-01-06', 1, 'transfer-saldo-gopay-ke-rekening-bank-berhasil.jpg', '2022-01-05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ajuan_kreditan`
--
ALTER TABLE `tbl_ajuan_kreditan`
  ADD PRIMARY KEY (`id_ajuan_kreditan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tbl_bunga_angsuran`
--
ALTER TABLE `tbl_bunga_angsuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `tbl_notif_kreditan`
--
ALTER TABLE `tbl_notif_kreditan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_persyaratan`
--
ALTER TABLE `tbl_persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_ajuan_kreditan` (`id_ajuan_kreditan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bunga_angsuran`
--
ALTER TABLE `tbl_bunga_angsuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_notif_kreditan`
--
ALTER TABLE `tbl_notif_kreditan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_persyaratan`
--
ALTER TABLE `tbl_persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
