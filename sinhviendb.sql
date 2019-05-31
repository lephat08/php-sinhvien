-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 06:47 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinhviendb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masv` varchar(255) NOT NULL,
  `hotensv` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `malop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `hotensv`, `email`, `malop`) VALUES
('1080', 'hieu', 'hieu@a.com', 'sm'),
('B1113', 'Minh tien', ' tien@a.com', 'BI87'),
('B150498', 'Minh Nghi', 'mnghi@gmail.com', 'M150'),
('C1500385', 'LÃª vÄƒn hiáº¿u', 'hieu@gmail.com', 'DI9A2'),
('C150038532322', 'LÃª vÄƒn hiáº¿u', 'hieu@gmail.com', 'DI9A2'),
('C1500399', 'Le Huu Phat', 'phat@gmail.com', 'DI9A1\r\n'),
('D154897', 'Thanos', 'thanos', ''),
('eqeq', 'qweqeq', 'qweqeq', 'qweqe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('admin1', 'abcde'),
('phat', 'huuphat'),
('lephat', '0e9fb2d7639a35e9a1002401bf3b7efb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
