-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2021 at 06:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `acoydemand`
--

CREATE TABLE `acoydemand` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `blue` int(11) NOT NULL,
  `black` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acoydemand`
--

INSERT INTO `acoydemand` (`id`, `month`, `blue`, `black`) VALUES
(1, 'jan', 10, 4),
(2, 'feb', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acoydist`
--

CREATE TABLE `acoydist` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `blue` int(11) NOT NULL,
  `black` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acoydist`
--

INSERT INTO `acoydist` (`id`, `month`, `blue`, `black`) VALUES
(1, 'jan', 0, 0),
(2, 'feb', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acoyissue`
--

CREATE TABLE `acoyissue` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `blue` int(11) NOT NULL,
  `black` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acoyissue`
--

INSERT INTO `acoyissue` (`id`, `month`, `blue`, `black`) VALUES
(1, 'jan', 0, 0),
(2, 'feb', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `avlb`
--

CREATE TABLE `avlb` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `blue` int(11) NOT NULL,
  `black` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avlb`
--

INSERT INTO `avlb` (`id`, `month`, `blue`, `black`) VALUES
(1, 'jan', 0, 0),
(2, 'feb', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bcoydemand`
--

CREATE TABLE `bcoydemand` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `blue` int(11) NOT NULL,
  `black` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bcoydemand`
--

INSERT INTO `bcoydemand` (`id`, `month`, `blue`, `black`) VALUES
(1, 'jan', 0, 0),
(2, 'feb', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bcoydist`
--

CREATE TABLE `bcoydist` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `blue` int(11) NOT NULL,
  `black` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bcoydist`
--

INSERT INTO `bcoydist` (`id`, `month`, `blue`, `black`) VALUES
(1, 'jan', 0, 0),
(2, 'feb', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bcoyissue`
--

CREATE TABLE `bcoyissue` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `blue` int(11) NOT NULL,
  `black` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bcoyissue`
--

INSERT INTO `bcoyissue` (`id`, `month`, `blue`, `black`) VALUES
(1, 'jan', 0, 0),
(2, 'feb', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'adjt', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'acoy', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'bcoy', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'skt', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acoydemand`
--
ALTER TABLE `acoydemand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acoydist`
--
ALTER TABLE `acoydist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acoyissue`
--
ALTER TABLE `acoyissue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `avlb`
--
ALTER TABLE `avlb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcoydemand`
--
ALTER TABLE `bcoydemand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcoydist`
--
ALTER TABLE `bcoydist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcoyissue`
--
ALTER TABLE `bcoyissue`
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
-- AUTO_INCREMENT for table `acoydemand`
--
ALTER TABLE `acoydemand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `acoydist`
--
ALTER TABLE `acoydist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `acoyissue`
--
ALTER TABLE `acoyissue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `avlb`
--
ALTER TABLE `avlb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bcoydemand`
--
ALTER TABLE `bcoydemand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bcoydist`
--
ALTER TABLE `bcoydist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bcoyissue`
--
ALTER TABLE `bcoyissue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
