-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 10:08 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine_info`
--

CREATE TABLE `medicine_info` (
  `ID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Buying Price` int(100) NOT NULL,
  `Selling Price` int(100) NOT NULL,
  `Display` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_info`
--

INSERT INTO `medicine_info` (`ID`, `Name`, `Buying Price`, `Selling Price`, `Display`) VALUES
(4, 'Riboson', 3, 10, 'YES'),
(5, 'Alatrol', 30, 50, 'YES'),
(6, 'Zimax', 100, 150, 'YES'),
(7, 'ACE', 5, 10, 'YES'),
(8, 'Disopen ', 200, 280, 'YES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine_info`
--
ALTER TABLE `medicine_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine_info`
--
ALTER TABLE `medicine_info`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
