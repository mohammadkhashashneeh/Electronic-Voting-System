-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 05:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votings`
--

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `id` int(11) NOT NULL,
  `language` int(11) DEFAULT NULL,
  `statues` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st`
--

INSERT INTO `st` (`id`, `language`, `statues`) VALUES
(1, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_type` varchar(300) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(300) NOT NULL,
  `photo` varchar(400) NOT NULL,
  `ssn` varchar(10) NOT NULL,
  `birth_date` varchar(100) NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `restricted_id_no` varchar(8) NOT NULL,
  `restricted_place` varchar(100) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `vision` varchar(5000) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `login` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `password`, `name`, `photo`, `ssn`, `birth_date`, `birth_place`, `mother_name`, `area`, `restricted_id_no`, `restricted_place`, `description`, `vision`, `phone_number`, `login`) VALUES
(7, 'admin', '1234', 'Mohammad', 'Sec_4_Grades.jpg', '2022', '2000-11-02', 'dryt', 'trdtsrdg', 'oseuityoy', ' 12345', 'dtydydtyyy', '', '', '', 0),
(8, 'voter', '1234', 'adam', 'Sec_4_Grades.jpg', '123456789', '2021-12-23', 'rsdeysdey', 'seyse', 'amman', ' 12345', 'amman', '', '', '', 0),
(11, 'vofficer', '1234', 'Anas', 'evs-logo.jpg', '2021', '2021-12-31', 'dryt', 'rtujrururu', 'irbid', ' 12345', 'ldrsihgjslirg', '', '', '', 0),
(12, 'candedte', '1234', 'malek ahmed', 'evs-logo.jpg', '987654321', '2000-06-30', 'place', 'name', 'amman', ' 12345', 'hjkf', 'description', 'vision1', '1548787878', 0),
(13, 'candedte', '1234', 'radad ali', 'evs-logo.jpg', '123456', '1988-03-02', 'dryt', 'trdtsrdg', 'amman', ' 12345', 'dty', 'description', 'vision2', '98345628', 0);

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(6000) NOT NULL,
  `area` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` text DEFAULT NULL,
  `cover_image` varchar(400) NOT NULL,
  `end_time` text DEFAULT NULL,
  `number_votes` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `title`, `description`, `area`, `type`, `user_id`, `date`, `cover_image`, `end_time`, `number_votes`) VALUES
(10, 'title1', 'desc', 'amman', 'a', 12, '2021-12-31', 'evs-logo.jpg', '21554', '1'),
(11, 'title2', 'description', 'amman', 'a', 13, '2021-12-31', 'evs-logo.jpg', '21554', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st`
--
ALTER TABLE `st`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
