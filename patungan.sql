-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Feb 2018 pada 18.03
-- Versi Server: 10.1.28-MariaDB
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
-- Database: `patungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_admin`
--

CREATE TABLE `patungan_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patungan_admin`
--

INSERT INTO `patungan_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Bambang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_gambar`
--

CREATE TABLE `patungan_gambar` (
  `gambar_id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `gambar_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patungan_gambar`
--

INSERT INTO `patungan_gambar` (`gambar_id`, `proyek_id`, `gambar_url`) VALUES
(1, 1, 'kayu_manis.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_gambar_laporan`
--

CREATE TABLE `patungan_gambar_laporan` (
  `gambar_laporan_id` int(11) NOT NULL,
  `laporan_id` int(11) NOT NULL,
  `gambar_laporan_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_keuntungan`
--

CREATE TABLE `patungan_keuntungan` (
  `keuntungan_id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `keuntungan_nominal` int(10) NOT NULL,
  `keuntungan_diterima` char(1) NOT NULL,
  `keuntungan_bukti_file` text NOT NULL,
  `keuntungan_konfirmasi` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_laporan`
--

CREATE TABLE `patungan_laporan` (
  `laporan_id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `laporan_deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_pembayaran`
--

CREATE TABLE `patungan_pembayaran` (
  `pembayaran_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `pembayaran_dibayar` char(1) NOT NULL,
  `pembayaran_bukti_file` text NOT NULL,
  `pembayaran_konfirmasi` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_pengambilan`
--

CREATE TABLE `patungan_pengambilan` (
  `pemngambilan_id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `pengambilan_date` date NOT NULL,
  `pengambilan_konfirmasi` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_proyek`
--

CREATE TABLE `patungan_proyek` (
  `proyek_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `proyek_nama` varchar(50) NOT NULL,
  `proyek_deskripsi` text NOT NULL,
  `proyek_lokasi` varchar(255) NOT NULL,
  `proyek_total_dana` int(10) NOT NULL,
  `proyek_total_slot` int(2) NOT NULL,
  `proyek_estimasi_keuntungan` varchar(25) NOT NULL,
  `proyek_harga_slot` int(10) NOT NULL,
  `proyek_jangka_waktu` varchar(40) NOT NULL,
  `proyek_insert_date` date NOT NULL,
  `proyek_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patungan_proyek`
--

INSERT INTO `patungan_proyek` (`proyek_id`, `user_id`, `proyek_nama`, `proyek_deskripsi`, `proyek_lokasi`, `proyek_total_dana`, `proyek_total_slot`, `proyek_estimasi_keuntungan`, `proyek_harga_slot`, `proyek_jangka_waktu`, `proyek_insert_date`, `proyek_status`) VALUES
(1, 2, 'Reseller Kayu Manis', 'Mengumpulkan Kayu Manis dari Pengepul untuk dijual ke beberapa negara', 'Sumatera Utara', 100000000, 10, '30000000', 10000000, '1 bulan', '2017-11-25', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_rincian_pengambilan`
--

CREATE TABLE `patungan_rincian_pengambilan` (
  `rincian_pengambilan_id` int(11) NOT NULL,
  `pengambilan_id` int(11) NOT NULL,
  `rincian_pengambilan_deskripsi` text NOT NULL,
  `rincian_pengambilan_nominal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_salur_keuntungan`
--

CREATE TABLE `patungan_salur_keuntungan` (
  `salur_keuntungan_id` int(11) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `salur_keuntungan_nominal` int(10) NOT NULL,
  `salur_keuntungan_dibayar` char(1) NOT NULL,
  `salur_keuntungan_konfirmasi` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_slot`
--

CREATE TABLE `patungan_slot` (
  `slot_id` int(11) NOT NULL,
  `proyek_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `slot_harga` int(10) NOT NULL,
  `slot_date` date NOT NULL,
  `slot_estimasi_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patungan_slot`
--

INSERT INTO `patungan_slot` (`slot_id`, `proyek_id`, `user_id`, `slot_harga`, `slot_date`, `slot_estimasi_pembayaran`) VALUES
(1, 1, 2, 10000000, '2017-11-25', '0000-00-00'),
(2, 1, 2, 10000000, '2017-11-25', '0000-00-00'),
(3, 1, 2, 10000000, '2017-11-25', '0000-00-00'),
(4, 1, 2, 10000000, '2017-11-25', '0000-00-00'),
(5, 1, 2, 10000000, '2017-11-25', '0000-00-00'),
(6, 1, 2, 10000000, '2017-11-25', '0000-00-00'),
(7, 1, 2, 10000000, '2017-11-25', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `patungan_user`
--

CREATE TABLE `patungan_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_alamat` text,
  `user_telephone` varchar(12) NOT NULL,
  `user_name_bank` varchar(255) DEFAULT NULL,
  `user_name_rekening_owner` varchar(255) DEFAULT NULL,
  `user_num_rekening` int(50) DEFAULT NULL,
  `user_num_ktp` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `patungan_user`
--

INSERT INTO `patungan_user` (`user_id`, `user_email`, `user_password`, `user_name`, `user_alamat`, `user_telephone`, `user_name_bank`, `user_name_rekening_owner`, `user_num_rekening`, `user_num_ktp`) VALUES
(1, 'fiqihfatwa@gmail.com', '21651ea39dbd2d5d8d7ccc351df74143', 'Fiqih Fatwa', 'Jalan Alamat Rumah', '081395852053', 'BNI', 'Fiqih Fatwa', 1010101010, '1234567890'),
(2, 'f@f.com', '21651ea39dbd2d5d8d7ccc351df74143', 'Fiqih Fatwa 2', NULL, '081395852053', NULL, NULL, NULL, NULL),
(3, 'a@a.com', '21651ea39dbd2d5d8d7ccc351df74143', 'Sakta', NULL, '081395852053', NULL, NULL, NULL, NULL),
(4, 'a@a.com', '21651ea39dbd2d5d8d7ccc351df74143', 'Sakta', NULL, '081395852053', NULL, NULL, NULL, NULL),
(5, 'b@b', '21651ea39dbd2d5d8d7ccc351df74143', 'Isa Dadi', NULL, '081395852053', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patungan_admin`
--
ALTER TABLE `patungan_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `patungan_gambar`
--
ALTER TABLE `patungan_gambar`
  ADD PRIMARY KEY (`gambar_id`);

--
-- Indexes for table `patungan_gambar_laporan`
--
ALTER TABLE `patungan_gambar_laporan`
  ADD PRIMARY KEY (`gambar_laporan_id`);

--
-- Indexes for table `patungan_keuntungan`
--
ALTER TABLE `patungan_keuntungan`
  ADD PRIMARY KEY (`keuntungan_id`);

--
-- Indexes for table `patungan_laporan`
--
ALTER TABLE `patungan_laporan`
  ADD PRIMARY KEY (`laporan_id`);

--
-- Indexes for table `patungan_pembayaran`
--
ALTER TABLE `patungan_pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`);

--
-- Indexes for table `patungan_pengambilan`
--
ALTER TABLE `patungan_pengambilan`
  ADD PRIMARY KEY (`pemngambilan_id`);

--
-- Indexes for table `patungan_proyek`
--
ALTER TABLE `patungan_proyek`
  ADD PRIMARY KEY (`proyek_id`);

--
-- Indexes for table `patungan_rincian_pengambilan`
--
ALTER TABLE `patungan_rincian_pengambilan`
  ADD PRIMARY KEY (`rincian_pengambilan_id`);

--
-- Indexes for table `patungan_salur_keuntungan`
--
ALTER TABLE `patungan_salur_keuntungan`
  ADD PRIMARY KEY (`salur_keuntungan_id`);

--
-- Indexes for table `patungan_slot`
--
ALTER TABLE `patungan_slot`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `patungan_user`
--
ALTER TABLE `patungan_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patungan_admin`
--
ALTER TABLE `patungan_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patungan_gambar`
--
ALTER TABLE `patungan_gambar`
  MODIFY `gambar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patungan_gambar_laporan`
--
ALTER TABLE `patungan_gambar_laporan`
  MODIFY `gambar_laporan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patungan_keuntungan`
--
ALTER TABLE `patungan_keuntungan`
  MODIFY `keuntungan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patungan_laporan`
--
ALTER TABLE `patungan_laporan`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patungan_pembayaran`
--
ALTER TABLE `patungan_pembayaran`
  MODIFY `pembayaran_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patungan_pengambilan`
--
ALTER TABLE `patungan_pengambilan`
  MODIFY `pemngambilan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patungan_proyek`
--
ALTER TABLE `patungan_proyek`
  MODIFY `proyek_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patungan_rincian_pengambilan`
--
ALTER TABLE `patungan_rincian_pengambilan`
  MODIFY `rincian_pengambilan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patungan_salur_keuntungan`
--
ALTER TABLE `patungan_salur_keuntungan`
  MODIFY `salur_keuntungan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patungan_slot`
--
ALTER TABLE `patungan_slot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patungan_user`
--
ALTER TABLE `patungan_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
