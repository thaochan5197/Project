-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2017 at 12:22 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `group_name` int(1) NOT NULL DEFAULT '2',
  `gender` tinyint(1) NOT NULL DEFAULT '1',
  `date_updated` date NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `status`, `group_name`, `gender`, `date_updated`, `date_created`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 0, 0, 1, '2016-12-31', '2017-01-05'),
(12, 'test1', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test1@gmail.com', 1, 0, 0, '0000-00-00', '2017-01-09'),
(13, 'test2', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test2@gmail.com', 0, 1, 1, '0000-00-00', '0000-00-00'),
(14, 'test3', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'test3@gmail.com', 1, 2, 1, '0000-00-00', '2017-02-11'),
(17, 'test4', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'test4@gmail.com', 1, 1, 1, '0000-00-00', '2017-02-11'),
(18, 'test5', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'test5@gmail.com', 1, 2, 1, '0000-00-00', '2017-02-11'),
(19, 'test6', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'test6@gmail.com', 1, 1, 1, '0000-00-00', '2017-02-11'),
(20, 'test7', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'test7@gmail.com', 1, 1, 1, '0000-00-00', '2017-02-11'),
(21, 'test8', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'test8@gmail.com', 1, 2, 0, '0000-00-00', '2017-02-11'),
(22, 'test9', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'test9@gmail.com', 1, 2, 0, '0000-00-00', '2017-02-11'),
(24, 'localhost', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'local@gmail.com', 0, 1, 1, '0000-00-00', '2017-11-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
