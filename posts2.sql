-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 09:09 PM
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
-- Table structure for table `posts2`
--

CREATE TABLE `posts2` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts2`
--

INSERT INTO `posts2` (`id`, `name`, `title`, `post`, `time`, `Category`) VALUES
(1, 'qwerty', 'KIIT', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:58:15', 'Blog-Tech'),
(2, 'qwerty', 'University', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:58:15', 'Blog-International'),
(3, 'qwerty', 'OOPPP', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:04:57', 'Blog-International'),
(4, 'qwerty', 'popop', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:04:57', 'News-International'),
(5, 'qwerty', 'Technology', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:05:49', 'News-Indian'),
(6, 'qwerty', 'Life', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:05:49', 'News-Indian'),
(7, 'qwerty', 'keeping', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:07:30', 'Blog-Tech'),
(8, 'qwerty', 'askeddd', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:07:30', 'News-Tech'),
(9, 'qwerty', 'CCD', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:08:48', 'Blog-Indian'),
(10, 'qwerty', 'FLYHIGH', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 17:08:48', 'Blog-Indian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts2`
--
ALTER TABLE `posts2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts2`
--
ALTER TABLE `posts2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
