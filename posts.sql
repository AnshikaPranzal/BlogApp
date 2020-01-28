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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `post` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `title`, `post`, `time`, `Category`) VALUES
(1, 'saman', 'HTML', 'HTML (HyperText Markup Language) is the most basic building block of the Web. It defines the meaning and structure of web content. ', '2020-01-28 16:37:35', 'Blog-Tech'),
(2, 'saman', 'Delhi case', 'A special CBI court in Delhi today remanded NRI businessman CC Thampi to judicial custody till February 7 in connection with a money laundering probe against businessman Robert Vadra.', '2020-01-28 16:39:42', 'News-Indian'),
(3, 'saman', 'USA today', 'Microsoft News (previously named MSN News and Bing News) is a news aggregator and service that features the latest news headlines ', '2020-01-28 16:42:52', 'News-International'),
(4, 'saman', 'oop', 'a quick brown box jumps over the lazy dod', '2020-01-28 16:43:56', 'News-Tech'),
(5, 'saman', 'pop', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:45:27', 'Blog-Indian'),
(6, 'saman', 'qwerty', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:45:27', 'Blog-International'),
(7, 'saman', 'you', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:46:57', 'Blog-International'),
(8, 'saman', 'dsa', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:46:57', 'News-Indian'),
(9, 'saman', 'AFL', 'The following table lists all available button methods.\r\n\r\nNote: Methods can also be passed via data attributes; append the method name to data-, as in data-toggle or data-dispose.', '2020-01-28 16:48:11', 'Blog-Tech'),
(10, 'saman', 'kiit', 'a quick brown fox jumps over the lazy dog', '2020-01-28 17:24:58', 'News-International');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
