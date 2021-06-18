-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 02:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(33) NOT NULL,
  `name` varchar(33) NOT NULL,
  `rank` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `name`, `rank`) VALUES
(1, 'Natsukumo', 'Master'),
(4, 'Avin', 'Administrator'),
(5, 'Naruto', 'Hokage'),
(6, 'Avin Chaili Salim', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(33) DEFAULT NULL,
  `user_id` bigint(33) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `password`, `date`) VALUES
(NULL, 7814316145458743, 'Testing123', 'asdasdasd', '2021-06-06 14:02:31.577787'),
(NULL, 377579313, 'adminbiskuit', 'asdasdasd', '2021-06-06 15:19:57.967400'),
(NULL, 5646961817, 'asdasdasd', 'asdasdasd', '2021-06-17 08:29:58.527660'),
(NULL, 35323610353058, 'asdasdasd', 'asdasdasd', '2021-06-17 09:02:00.330853'),
(NULL, 8211582537326157, 'Natsukumo', 'Guren555', '2021-06-18 05:30:28.230749'),
(NULL, 175169370341216, 'Avin Chaili Salim', 'asdasdasd', '2021-06-18 07:48:08.134386'),
(NULL, 450, 'AvinChaili', 'asdasdasd', '2021-06-18 11:45:51.440991'),
(NULL, 967614840764, 'aaaaaaaa', 'aaaaaaaa', '2021-06-18 11:53:56.389159'),
(NULL, 286919022081, 'namanama', 'namanama', '2021-06-18 12:00:26.783749'),
(NULL, 11060236464, 'namanama', 'namanama', '2021-06-18 12:09:20.905574');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
