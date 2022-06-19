-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 19, 2022 at 10:59 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_repository`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author`) VALUES
(1, 'umar'),
(2, 'toif');

-- --------------------------------------------------------

--
-- Table structure for table `enkripsi`
--

CREATE TABLE `enkripsi` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `hasil` varchar(1024) NOT NULL,
  `kunci` varchar(256) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enkripsi`
--

INSERT INTO `enkripsi` (`id`, `username`, `hasil`, `kunci`, `tgl`) VALUES
(2, 'umar', 'kasodkasodk', 'kkkkk', '2022-06-19'),
(4, 'umar', 'DZNNZRZNZ', '1', '2022-06-19'),
(5, 'admin', 'DZNNZRZNZDZNNZRZNZDZNNZRZNZ', '696969696', '2022-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(10) NOT NULL,
  `program_studi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `program_studi`) VALUES
(1, 'ps'),
(2, 'background');

-- --------------------------------------------------------

--
-- Table structure for table `repo`
--

CREATE TABLE `repo` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `year` int(4) NOT NULL,
  `id_author` int(10) NOT NULL,
  `username` varchar(128) NOT NULL,
  `id_type` int(10) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `file_repo` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `tipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repo`
--

INSERT INTO `repo` (`id`, `date`, `year`, `id_author`, `username`, `id_type`, `id_prodi`, `title`, `description`, `file_repo`, `thumbnail`, `nama`, `tipe`) VALUES
(5, '3333-03-31', 3333, 0, '', 0, 2, 'ads', '', '', '7a7de2a2c392e8f4d3e5e8e7d4d7a0494f836d6f.png', 'awkoawko', 'akwokaow'),
(6, '2222-02-22', 2222, 0, '', 0, 1, 'adasdd', '', '', '2612470572.png', 'ini nama', 'ini tipe'),
(8, '2222-02-22', 2222, 0, '', 0, 2, 'tessttt', '', '', '1.png', 'bukan umar', 'png'),
(9, '0002-02-22', 2, 0, '', 0, 1, 'adawadwdaw', '', '', '7a7de2a2c392e8f4d3e5e8e7d4d7a0494f836d6f1.png', 'umaaarr', 'png'),
(12, '2222-02-22', 2222, 0, 'umar', 0, 1, 'sadasasd', '', '', 'parker-hilton-vFzZ1_LPttk-unsplash.jpg', 'kokkokokokokokoko', 'klklklklkl'),
(14, '2022-06-14', 2022, 0, 'bagas00', 0, 1, 'ikan', '', '', 'WhatsApp_Image_2022-05-25_at_14.41.441.jpeg', 'Yuliana', 'jpg'),
(15, '2022-06-14', 2022, 0, 'bagas00', 0, 2, 'ikan', '', '', 'cover_(19).png', 'Yuliana', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type`) VALUES
(1, 'tip'),
(2, 'png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `email`, `username`, `password`, `level`) VALUES
(1, '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'master'),
(2, '', '', '', 'umar', '67862890a9ebe89eefdb55671cae33f4', 'admin'),
(6, '', '', '', 'hhhh', 'a3aca2964e72000eea4c56cb341002a4', 'admin'),
(7, 'Umar hadi Siswanto', 'disanaa', 'hi@umarhadi.dev', 'hehehe', '69492767a592621ec0e785e0135e1c6f', 'admin'),
(8, 'TOIFUDDIN ROZIKI', 'jakal', 'toifuddinroziki@gmail.com', 'Toif', '83dbb2993441f2eaa9abab51a19cb693', 'admin'),
(9, 'Yuliana', 'jalan Jaten', 'yulianaroiz02@gmail.com', 'yuliana12', 'f2c4416ef8c5a6b48d952286d3b9e79d', 'admin'),
(10, 'Bagas', 'jalan kaliurang', 'bagas12@gmail.com', 'bagas00', '5ffd9bb73b00bce4feeb77e2d12722da', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enkripsi`
--
ALTER TABLE `enkripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repo`
--
ALTER TABLE `repo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enkripsi`
--
ALTER TABLE `enkripsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `repo`
--
ALTER TABLE `repo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;