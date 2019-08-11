-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 11:35 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k65c`
--

-- --------------------------------------------------------

--
-- Table structure for table `congviec`
--

CREATE TABLE `congviec` (
  `JOB_ID` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `JOB_ADDRESS` varchar(1024) NOT NULL,
  `chuyennganh` varchar(1024) NOT NULL,
  `luong` int(10) NOT NULL,
  `soluong` int(5) DEFAULT NULL,
  `ngaydang` date DEFAULT NULL,
  `noidung` varchar(2048) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhatuyendung`
--

CREATE TABLE `nhatuyendung` (
  `NTT_ID` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `COMP_NAME` varchar(1024) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` int(12) NOT NULL,
  `ADDRESS` varchar(1024) NOT NULL,
  `ROLE` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ungvien`
--

CREATE TABLE `ungvien` (
  `UV_ID` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `UV_NAME` varchar(1024) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` int(12) NOT NULL,
  `chuyennganh` varchar(1024) NOT NULL,
  `hocvan` varchar(1024) NOT NULL,
  `kinhnghiem` varchar(50) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `quequan` varchar(1024) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `role` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`JOB_ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD PRIMARY KEY (`NTT_ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ungvien`
--
ALTER TABLE `ungvien`
  ADD PRIMARY KEY (`UV_ID`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `nhatuyendung`
--
ALTER TABLE `nhatuyendung`
  ADD CONSTRAINT `nhatuyendung_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `ungvien`
--
ALTER TABLE `ungvien`
  ADD CONSTRAINT `ungvien_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
