-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 02:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `istifadeci`
--

CREATE TABLE `istifadeci` (
  `id` int(11) NOT NULL,
  `tam_ad` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `parol` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'profil.png',
  `stat` int(11) NOT NULL DEFAULT 0,
  `tarix` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kod`
--

CREATE TABLE `kod` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kod` varchar(8) NOT NULL,
  `stat` int(11) NOT NULL DEFAULT 1,
  `tarix` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(11) NOT NULL,
  `gonderenId` int(11) NOT NULL,
  `alanId` int(11) NOT NULL,
  `mesaj` text NOT NULL,
  `tip` int(11) NOT NULL DEFAULT 1,
  `stat` int(11) NOT NULL DEFAULT 1,
  `tarix` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `istifadeci`
--
ALTER TABLE `istifadeci`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kod`
--
ALTER TABLE `kod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `istifadeci`
--
ALTER TABLE `istifadeci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kod`
--
ALTER TABLE `kod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
