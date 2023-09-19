-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 19, 2023 at 08:58 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nm-contact-us`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `message` text NOT NULL,
  `marketing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `company`, `email`, `telephone`, `message`, `marketing`) VALUES
(15, 'Estelle Reiner', '', 'estelle@reiner.com', 1111222333, 'I’ll have what she’s having.', 0),
(16, 'Renee Zellwegger', '', 'renee@zellwegger.com', 1111222333, 'Oh, I don’t know. I suppose it doesn’t help that underneath our clothes our entire bodies are covered in scales.', 0),
(17, 'Nigel Tufnel', '', 'nigel@tufnel.com', 1111222333, 'The numbers all go to 11.', 0),
(18, 'Bill Murray', '', 'bill@murray.com', 1111222333, 'He slimed me.', 0),
(19, 'Leslie Nielsen', '', 'leslie@nielsen.com', 1111222333, 'I am serious, and don’t call me Shirley.', 0),
(20, 'economics teacher', 'Ferris Bueller\'s Day Off', 'economics@teacher.com', 1111222333, 'Bueller … Bueller … Bueller … Bueller?', 0),
(21, 'Nicholas Cage', '', 'nicholas@cage.com', 1111222333, 'I’ll be taking these Huggies and whatever cash you got.', 0),
(22, 'Will Smith', '', 'will@smith.com', 1111222333, 'Welcome to earth! (*pulls out a cigar*) Now that’s what I call a close encounter.', 0),
(23, 'Whoopi Goldberg', '', 'whoopi@goldberg.com', 1111222333, 'You relax. You’re the dead guy.', 0),
(24, 'Roy Scheider', '', 'roy@scheider.com', 1111222333, 'You’re gonna need a bigger boat.', 0),
(25, 'Meryl Streep', '', 'meryl@streep.com', 1111222333, 'By all means move at a glacial pace, you know how that thrills me.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
