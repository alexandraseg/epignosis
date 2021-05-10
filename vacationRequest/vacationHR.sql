-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2021 at 06:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacationHR`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `afm` int(10) NOT NULL,
  `eponimia` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`afm`, `eponimia`, `address`, `email`) VALUES
(112233, 'Langano Coffee', 'Filis 20', 'info@langano.gr'),
(223344, 'MainSys', 'Kosti Palama 3', 'info@mainsys.eu');

-- --------------------------------------------------------

--
-- Table structure for table `ergazomenos`
--

CREATE TABLE `ergazomenos` (
  `afm` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `id_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ergazomenos`
--

INSERT INTO `ergazomenos` (`afm`, `name`, `surname`, `address`, `email`, `id_number`) VALUES
(12345, 'George', 'Liakopoulos', 'Aidiniou 18', 'gliak@gmail.com', 'AK14562'),
(23456, 'Alexandra', 'Segkou', 'Sofokleous 5', 'alexse@gmail.com', 'AT12413'),
(87454, 'Kostas', 'Papadopoulos', 'Korinthou 3', 'kostas@gmail.com', 'AM21132'),
(98732, 'Maria', 'Stergiou', 'Ermou 93', 'stergiou@gmail.com', 'AT22293');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `afm` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `confirm_psw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`afm`, `password`, `username`, `type`, `email`, `name`, `surname`, `confirm_psw`) VALUES
(12345, 'gliak', 'gliak', 2, 'gliak@example.com', 'gliakn', 'gliaks', ''),
(23456, 'alex', 'alex', 2, 'alex@example.com', 'alexn', 'alexs', ''),
(87454, 'kostas', 'kostas', 2, 'kostas@example.com', 'kostasn', 'ks', ''),
(98732, 'maria', 'maria', 2, 'maria@example.com', 'mn', 'ms', ''),
(112233, 'langano', 'langano', 1, 'lang@example.com', 'ln', 'ls', ''),
(223344, 'mainsys', 'mainsys', 1, 'mainsys@example.com', 'mainsn', 'mainss', '');

-- --------------------------------------------------------

--
-- Table structure for table `vacationRequest`
--

CREATE TABLE `vacationRequest` (
  `id` int(10) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `date_submitted` date NOT NULL,
  `days` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `afm` int(10) NOT NULL,
  `reason` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacationRequest`
--

INSERT INTO `vacationRequest` (`id`, `from_date`, `to_date`, `email`, `date_submitted`, `days`, `status`, `afm`, `reason`) VALUES
(1, '2021-06-01', '2021-06-05', '', '2021-05-08', 5, 'αποδεκτή', 98732, ''),
(2, '2021-08-02', '2021-08-10', '', '2021-05-09', 9, 'αποδεκτή', 98732, ''),
(3, '2021-05-18', '2021-05-19', '', '2021-05-06', 2, 'αποδεκτή', 98732, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`afm`);

--
-- Indexes for table `ergazomenos`
--
ALTER TABLE `ergazomenos`
  ADD PRIMARY KEY (`afm`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`afm`);

--
-- Indexes for table `vacationRequest`
--
ALTER TABLE `vacationRequest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vacationRequest`
--
ALTER TABLE `vacationRequest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
