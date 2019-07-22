-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 06:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom1_cdtn`
--

-- --------------------------------------------------------

--
-- Table structure for table `cong_viec`
--

CREATE TABLE `cong_viec` (
  `id` int(50) NOT NULL,
  `job_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `add_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuyen_nghanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `luong` int(12) NOT NULL,
  `so_luong` int(5) NOT NULL,
  `ngay_dang` datetime NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dk_nhatuyendung`
--

CREATE TABLE `dk_nhatuyendung` (
  `id` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt_ntd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `add_ntd` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dk_ungvien`
--

CREATE TABLE `dk_ungvien` (
  `id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dk_ungvien`
--

INSERT INTO `dk_ungvien` (`id`, `name`, `email`, `sdt`) VALUES
(1, 'Trịnh Khánh Linh', 'trinhkhanhlinh97@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `ho_so`
--

CREATE TABLE `ho_so` (
  `id` int(50) NOT NULL,
  `chuyen_nghanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoc_van` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_nam_kinh_nghiem` int(50) NOT NULL,
  `ngay_thang_nam_sinh` date NOT NULL,
  `que_quan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ho_so`
--

INSERT INTO `ho_so` (`id`, `chuyen_nghanh`, `hoc_van`, `so_nam_kinh_nghiem`, `ngay_thang_nam_sinh`, `que_quan`) VALUES
(1, 'Công Nghệ Thông Tin', 'Đại Học', 1, '1997-01-06', 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cong_viec`
--
ALTER TABLE `cong_viec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dk_nhatuyendung`
--
ALTER TABLE `dk_nhatuyendung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dk_ungvien`
--
ALTER TABLE `dk_ungvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ho_so`
--
ALTER TABLE `ho_so`
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
-- AUTO_INCREMENT for table `cong_viec`
--
ALTER TABLE `cong_viec`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dk_nhatuyendung`
--
ALTER TABLE `dk_nhatuyendung`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dk_ungvien`
--
ALTER TABLE `dk_ungvien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ho_so`
--
ALTER TABLE `ho_so`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
