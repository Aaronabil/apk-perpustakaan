-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 04:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kelas` enum('7A','7B','7C','7D','7E','7F','7G','7H','7I','7J','7K','8A','8B','8C','8D','8E','8F','8G','8H','8I','8J','9A','9B','9C','9D','9E','9F','9G','9H','9I','9J') DEFAULT NULL,
  `judul_buku` varchar(150) DEFAULT NULL,
  `banyaknya` int(10) DEFAULT NULL,
  `tanggal_kembali` date NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `keterangan` enum('Belum Dikembalikan','Sudah Dikembalikan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `tanggal`, `nama`, `kelas`, `judul_buku`, `banyaknya`, `tanggal_kembali`, `kategori_id`, `keterangan`) VALUES
(40, '2023-12-04', 'caramel', '7G', 'kisah para nabi', 5, '2023-12-06', 13, 'Sudah Dikembalikan'),
(41, '2023-12-06', 'Anabeth', '8B', 'Danur', 1, '2023-12-09', 21, 'Belum Dikembalikan'),
(42, '2023-12-06', 'Zyan', '8C', 'Kumpulan lagu - lagu daerah ', 3, '2023-12-09', 18, 'Sudah Dikembalikan'),
(43, '2023-12-11', 'Hanna', '8E', 'TIK', 37, '2023-12-11', 17, 'Sudah Dikembalikan'),
(44, '2023-12-12', 'Georgie', '9E', 'kamus bahasa indonesia', 1, '2023-12-12', 15, 'Belum Dikembalikan'),
(45, '2023-12-13', 'Miguel', '7K', 'Idiom English', 1, '2023-12-14', 15, 'Sudah Dikembalikan'),
(46, '2023-12-13', 'Eliot', '9I', 'Tajwid', 1, '2023-12-13', 13, 'Belum Dikembalikan'),
(47, '2023-12-13', 'Elian', '8H', 'Masa Depan Cerah', 1, '2023-12-14', 11, 'Sudah Dikembalikan'),
(48, '2023-12-13', 'Viona', '9A', 'IPA', 38, '2023-12-13', 11, 'Sudah Dikembalikan'),
(49, '2023-12-13', 'Alghava', '9C', 'Malioboro', 1, '2023-12-14', 21, 'Belum Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(11, '000/UMUM'),
(12, '100/FILSAFAT'),
(13, '200/AGAMA'),
(14, '300/ILMU SOSIAL'),
(15, '400/BAHASA'),
(16, '500/ILMU MURNI'),
(17, '600/TEKNOLOGI'),
(18, '700/SENI'),
(19, '800/SASTRA'),
(20, '900/GEOGRAFI'),
(21, 'F/FIKSI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('Auriga', '202cb962ac59075b964b07152d234b70'),
('Nana Sudiana', '3ae64554736f14ceb6c89254c8d1e8fc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
