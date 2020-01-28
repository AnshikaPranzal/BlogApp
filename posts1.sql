-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 09:08 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts1`
--

CREATE TABLE `posts1` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts1`
--

INSERT INTO `posts1` (`id`, `name`, `title`, `post`, `time`, `Category`) VALUES
(1, 'abc', 'HTML5', 'HTML is the standard markup language for Web pages.  With HTML you can create your own Website. Its an easy language', '2020-01-28 13:25:31', 'Blog-Tech'),
(2, 'abc', 'DELHI POLICE', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:53:13', 'News-Indian'),
(3, 'abc', 'OOP', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:53:13', 'News-International'),
(4, 'abc', 'pop', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:54:04', 'Blog-Indian'),
(5, 'abc', 'url', 'qwert asdf hcjhdjjh op hjj d fff dddw', '2020-01-28 17:43:18', 'Blog-International'),
(6, 'abc', 'KIIT', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:54:57', 'Blog-Tech'),
(7, 'abc', 'UNIVERSITY', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:54:57', 'Blog-International'),
(8, 'abc', 'Kalinga', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:55:59', 'News-Tech'),
(9, 'abc', 'Institute', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:55:59', 'News-Tech'),
(10, 'abc', 'technology', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:56:33', 'News-International');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts1`
--
ALTER TABLE `posts1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts1`
--
ALTER TABLE `posts1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
