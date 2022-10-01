-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 10:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_id` varchar(255) NOT NULL,
  `date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `picture`, `post_by`, `post_content`, `post_id`, `date_Time`) VALUES
(1, '', 'john@gmail.com', 'i dont know', '7150176252', '2022-10-01 06:04:53'),
(2, '', 'john@gmail.com', 'i dont know', '3357513239', '2022-10-01 06:04:49'),
(3, '', 'john@gmail.com', 'i dont know', '4538436906', '2022-10-01 06:04:46'),
(4, '', 'john@gmail.com', 'i dont know', '4053127207', '2022-10-01 06:04:42'),
(5, '', 'john@gmail.com', 'hi my name is patrick louie portera and i am new here in this platform', '3480767067', '2022-10-01 06:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `picture`, `firstname`, `lastname`, `email`, `number`, `status`, `password`, `date_time`) VALUES
(1, 'user.png', 'portera', 'patrick', 'john@gmail.com', 2147483647, 0, '6c84cbd30cf9350a990bad2bcc1bec5f', '2022-10-01 07:20:27'),
(2, 'user.png', 'donato', 'alvin', 'alvindonato@gmail.com', 909090, 0, '9573534ee6a886f4831ac5bcdfe85565', '2022-10-01 07:20:33'),
(3, '', 'ken', 'ken', 'ken@gmail.com', 909090, 0, 'ee11cbb19052e40b07aac0ca060c23ee', '2022-10-01 07:40:55'),
(4, '', 'user', 'user', 'user@gmail.com', 2147483647, 0, 'ee11cbb19052e40b07aac0ca060c23ee', '2022-10-01 07:45:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
