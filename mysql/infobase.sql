-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2016 at 11:16 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adrec1`
--

-- --------------------------------------------------------

--
-- Table structure for table `infobase`
--

CREATE TABLE `infobase` (
  `content_id` bigint(255) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `ip_sender` varchar(255) NOT NULL,
  `ip_receiver` varchar(255) NOT NULL,
  `msg` varchar(60000) NOT NULL,
  `datentime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delivery_info` varchar(255) NOT NULL,
  `read_time` varchar(100) NOT NULL,
  `msg_type` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infobase`
--

INSERT INTO `infobase` (`content_id`, `sender`, `receiver`, `ip_sender`, `ip_receiver`, `msg`, `datentime`, `delivery_info`, `read_time`, `msg_type`, `date`) VALUES
(1186, 'b', 'sk', '::1', '', 'hey', '2016-06-02 03:39:59', '', '', '', '2016-06-02 03:39:59'),
(1193, 'b', 'sk', '::1', '', 'hiii', '2016-06-02 04:08:41', '', '', '', '2016-06-02 04:08:41'),
(1196, 'st', 'b', '::1', '::1', '1', '2016-06-02 06:36:28', '', '', '', '2016-06-02 06:06:53'),
(1197, 'st', 'b', '::1', '::1', '2', '2016-06-02 06:36:28', '', '', '', '2016-06-02 06:06:55'),
(1198, 'st', 'b', '::1', '::1', '3', '2016-06-02 06:36:28', '', '', '', '2016-06-02 06:06:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infobase`
--
ALTER TABLE `infobase`
  ADD PRIMARY KEY (`content_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infobase`
--
ALTER TABLE `infobase`
  MODIFY `content_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1213;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
