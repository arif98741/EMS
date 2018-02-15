-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 06:29 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `td_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_employee`
--

CREATE TABLE `td_employee` (
  `id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(15) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(299) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `td_employee`
--

INSERT INTO `td_employee` (`id`, `f_name`, `l_name`, `mail`, `username`, `password`, `status`) VALUES
(1, 'Shakil', 'Hossain', 'mrsonnetkhan@gmail.com', 'sonnet', '2375ghnjh5jj', 1),
(2, 'King', 'Rayhan', 'kingrayhan@gmail.com', 'kingrayhan', 'rhj4g25h', 0),
(3, 'Tariqul', 'Islam', 'tariqulislam0090@gmail.com', 'legendtariq', '2g5h5', 1),
(4, 'Mohid', 'Vuia', 'ovelio@gmail.com', 'ove', 'tht54f53yhj', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_employee`
--
ALTER TABLE `td_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `td_employee`
--
ALTER TABLE `td_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
