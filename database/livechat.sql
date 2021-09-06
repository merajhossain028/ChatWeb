-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 08:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livechat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_id` int(11) NOT NULL,
  `outgoing` varchar(20) NOT NULL,
  `incoming` varchar(20) NOT NULL,
  `messages` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messages_id`, `outgoing`, `incoming`, `messages`) VALUES
(1, '1', '2', 'hello'),
(2, '1', '2', 'hy'),
(3, '1', '2', 'hy'),
(4, '1', '2', 'hy'),
(5, '1', '2', 'hy'),
(6, '1', '2', 'hy'),
(7, '1', '2', 'hy'),
(8, '1', '2', 'hy'),
(9, '1', '2', 'how are u sir'),
(10, '1', '2', 'plzz help me'),
(11, '1', '2', 'hlp me to improve my skills'),
(12, '2', '1', 'ok'),
(13, '2', '1', 'i will help u'),
(14, '1', '2', 'ok'),
(15, '1', '2', 'where are u from?'),
(16, '1', '2', 'hello'),
(17, '1', '2', 'hello code provider'),
(18, '1', '2', 'hello'),
(19, '1', '2', 'test message'),
(20, '3', '1', 'hello'),
(21, '3', '1', 'how r u?'),
(22, '3', '1', 'i need your help?'),
(23, '4', '3', 'hello sir'),
(24, '4', '3', 'how r u?'),
(25, '3', '4', 'i am fine'),
(26, '4', '3', 'i need your help'),
(27, '4', '3', 'how can i help u?'),
(28, '1', '4', 'hello'),
(29, '1', '3', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `image`, `status`) VALUES
(1, 'code', 'now', 'codenow@gmail.com', 'c5f35c1c4a5ad369a735a89dc92dd131', '5039195321624039056image1.jpg', 'Online'),
(2, 'code', 'provider', 'codeprovider@gmail.com', 'faa7e5046f85f77abf04a2219f2596fc', '5067225981624039240image5.jpg', 'Offline'),
(3, 'Coding', 'Trainer', 'codingtrainer@gmail.com', 'e791e06aa70c118c3664e44ca7db5e6a', '3945489681624132843image7.jpg', 'Offline'),
(4, 'code', 'code', 'codecode@gmail.com', '9a1e2b7451d3625e691fd18591e6aeb8', '5966851251624133771image10.jpg', 'Online'),
(5, 'pixels', 'coder', 'pixels@gmail.com', 'fb905be5d81d07a936944cc60a6e72e1', '7314873891624134134image2.jpg', 'Offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
