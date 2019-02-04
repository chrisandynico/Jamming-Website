-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 05:36 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jamming`
--

-- --------------------------------------------------------

--
-- Table structure for table `j_article`
--

CREATE TABLE `j_article` (
  `id_article` int(5) NOT NULL,
  `article` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `j_user`
--

CREATE TABLE `j_user` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `twibbon` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `j_user`
--

INSERT INTO `j_user` (`id`, `username`, `password`, `email`, `nama`, `ttl`, `twibbon`, `level`) VALUES
(1, 'nico', '410ec15153a6dff0bed851467309bcbd', '', '', '', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `j_article`
--
ALTER TABLE `j_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `j_user`
--
ALTER TABLE `j_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `j_article`
--
ALTER TABLE `j_article`
  MODIFY `id_article` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `j_user`
--
ALTER TABLE `j_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
