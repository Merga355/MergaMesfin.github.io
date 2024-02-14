-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 04:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merga`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(89) NOT NULL,
  `Name` varchar(55) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(34) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `Name`, `email`, `subject`, `message`, `date_created`) VALUES
(1, 'chara alamu', 'chexdd@gmail.com', 'This is good job', 'bro keep it up. we need bid thing from you. ', '2024-01-12 09:07:08'),
(2, 'Namtinael Getachew ', 'Nati@gmail.com', 'jabaadhu', 'kjzscbozakc', '2024-01-12 09:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `username` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `passord` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `facebook` varchar(45) NOT NULL,
  `instagram` varchar(45) NOT NULL,
  `linkedin` varchar(45) NOT NULL,
  `github` varchar(45) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `username`, `Email`, `passord`, `title`, `facebook`, `instagram`, `linkedin`, `github`, `Phone`) VALUES
(0, 'Merga Mesfin', 'mergamesfin', 'margamasfin@gmail.com', '1234!!', 'Developer ', 'https://www.facebook.com/marga.masfin', 'https://www.instagram.com/margamasfin?igsh=MW', 'https://www.linkedin.com/public-profile/setti', 'https://github.com/users/Merga355/succession/', '0913392804');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(89) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
