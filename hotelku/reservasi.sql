-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2018 pada 16.41
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reservasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `kode_kmr` varchar(10) NOT NULL,
  `jenis_kmr` varchar(20) NOT NULL,
  `spek` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `file` varchar(30) NOT NULL,
  `baris` int(3) NOT NULL,
  `status` int(3) NOT NULL,
  `tgl_tersedia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`kode_kmr`, `jenis_kmr`, `spek`, `harga`, `file`, `baris`, `status`, `tgl_tersedia`) VALUES
('AV001', 'Suite I', 'Full AC, TV, Telphone, Air Panas, Break fast', 420000, 'suite.jpg', 1, 1, '2017-03-14'),
('AV002', 'Suite II', 'Full AC, TV, Telphone, Air Panas, Break fast', 420000, 'suite2.jpeg', 1, 0, '2017-03-20'),
('AV003', 'Deluxe I', 'Full AC, TV, Telphone, Air Panas, Break fast', 400000, 'deluxe.jpg', 1, 0, '2017-03-10'),
('AV004', 'Deluxe II', 'Full AC, TV, Telphone, Air Panas, Break fast', 400000, 'deluxe2.jpg', 2, 1, '2017-03-15'),
('AV005', 'Superior I', 'Full AC, TV, Telphone, Air Panas, Break fast', 290000, 'superior.jpg', 2, 0, '2017-03-14'),
('AY001', 'Superior II', 'Full AC, TV, Telphone, Air Panas, Break fast', 250000, 'superior2.jpg', 2, 0, '2017-03-20'),
('AY002', 'Standart I', 'Full AC, TV, Telphone, Air Panas, Break fast', 190000, 'standar.jpg', 3, 0, '2017-03-15'),
('AY003', 'Standar II', 'Full AC, TV, Telphone, Air Panas, Break fast', 150000, 'standar2.jpg', 3, 0, '2017-03-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE IF NOT EXISTS `reservasi` (
`id` int(10) NOT NULL,
  `no_reservasi` varchar(10) NOT NULL,
  `nama_plg` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `kode_kamar` varchar(30) NOT NULL,
  `nama_kamar` varchar(15) NOT NULL,
  `tgl_booking` date NOT NULL,
  `tgl_out` date NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id`, `no_reservasi`, `nama_plg`, `email`, `no_hp`, `kode_kamar`, `nama_kamar`, `tgl_booking`, `tgl_out`, `harga`) VALUES
(6, 'A123', 'nurrahmi', 'nurrahmi1400018102@webmail.uad', 6987, 'B34', 'anggrek', '0000-00-00', '0000-00-00', 450000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Mahasiswa','Dosen') NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `img`) VALUES
('admin', 'admin', 'Administrator', 'admin.png'),
('friska', 'sembalun', 'Administrator', 'sembalun.png'),
('friska wardani', '1400018071', 'Mahasiswa', 'friska.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
 ADD PRIMARY KEY (`kode_kmr`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
