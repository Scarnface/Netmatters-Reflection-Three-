-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 09:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(8) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telephone` int(32) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `subscribe` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `telephone`, `subject`, `message`, `subscribe`) VALUES
(1, 'fdsfsdf', 'sfdsf', 0, 'fsdfds', 'dsfdsf', 1),
(2, 'hjgdfkj', 'klnjhgfxdxgc', 2147483647, 'jhgfdgh', 'jhgdh kjg kjhfhgkjh', NULL),
(3, 'Adam Atom', 'a@b.com', 123456789, 'Test One', 'lorem ipsum', 1),
(4, 'sdfsd', '', 0, '', '', NULL),
(5, 'dgffdgdf', '', 0, '', '', NULL),
(6, 'Barry Boffin', 'barry@gmail.com', 678901456, 'Test Two', 'Lorem Ipsum', 1),
(7, 'Charlie Chop', 'sfasfsd@gmail.com', 2147483647, 'Test Three', 'sdffg dsgh hfg gfhsgfh ', 1),
(8, 'David Duck', 'asdasd@asgg.com', 7687546, 'Test Four', 'sdfg dffh fggh ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(8) NOT NULL,
  `imgurl` varchar(128) NOT NULL,
  `title` varchar(64) NOT NULL,
  `text` varchar(512) NOT NULL,
  `btntext` varchar(16) NOT NULL,
  `postedby` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `colour` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
