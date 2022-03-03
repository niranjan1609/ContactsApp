-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2022 at 06:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `num` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `num`, `email`, `user_id`) VALUES
(10, 'vadla', '45484125174', 'vadla4587@gmail.com', 2),
(11, 'vadlal niran', '4841523548', 'niran@gmail.com', 1),
(12, 'vadlal niran', '4841523548', 'niran@gmail.com', 1),
(13, 'admin', '487518421', 'admin@gmail.com', 1),
(14, 'admin1', '7845752402', 'admin1@gmail.com', 1),
(15, 'admin2', '7818771241', 'admin2@gmail.com', 1),
(16, 'admin4', '7841571020', 'admin4@gmail.com', 2),
(17, 'admin4', '8484121200', 'admin4@gmail.com', 2),
(18, 'admin3', '7841282108', 'admin3@gmail.com', 1),
(19, 'admin1', '4841021245', 'admin1@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `secret` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `password`, `secret`) VALUES
(1, 'niranjanvadla1609@gmail.com', 'admin123', 'niranjan@123'),
(2, 'lavanyavadla0103@gmail.com', 'admin', 'lav@123'),
(3, 'admin6@gmail.com', 'admin6', 'name6'),
(4, 'admin2@gmail.com', 'name2', 'name2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
