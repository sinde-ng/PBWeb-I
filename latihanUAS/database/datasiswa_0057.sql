-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 04:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasiswa_0057`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilaimakul`
--

CREATE TABLE `nilaimakul` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `makul` varchar(20) NOT NULL,
  `nilai_t` int(3) NOT NULL,
  `nilai_p` int(3) NOT NULL,
  `t_nilai` int(3) NOT NULL,
  `grade` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilaimakul`
--

INSERT INTO `nilaimakul` (`nim`, `nama`, `makul`, `nilai_t`, `nilai_p`, `t_nilai`, `grade`) VALUES
('078123', 'ABC', 'TI', 20, 100, 60, 'D'),
('123dicoba', 'cekcek', 'soundis', 999, 555, 777, 'A'),
('1983491', 'Coba1', 'uaoisda', 80, 100, 90, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilaimakul`
--
ALTER TABLE `nilaimakul`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
