-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 01:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'amal', '25f9e794323b453885f5181f1b624d0b', 'm@gmail.com'),
(2, 'alaa', 'a3e30612f32967c01d0e5874565b8f32', 'alaa@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotes`
--

CREATE TABLE `tbl_quotes` (
  `id` int(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `tbl_quotes`
--

INSERT INTO `tbl_quotes` (`id`, `content`, `author`, `active`) VALUES
(1, 'The purpose of our lives is to be happy', 'Burnett', 'Yes'),
(2, 'Get busy living or get busy dying.', 'Oprah', 'No'),
(3, '“You only live once, but if you do it right, once is enough.”', 'Mae West', 'No'),
(4, '“In order to write about life first you must live it.”', 'Ernest', 'No'),
(5, '“The unexamined life is not worth living.”', 'Socrates', 'No'),
(6, '“I like criticism. It makes you strong.”', 'James', 'Yes'),
(7, '“You never really learn much from hearing yourself speak.”', 'George', 'Yes'),
(8, '“Live for each second without hesitation.”', 'John', 'Yes'),
(9, '“Life is a succession of lessons which must be lived to be understood.”', 'Keller', 'Yes'),
(10, '“The healthiest response to life is joy.”', 'Chopra', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UN_email` (`email`);

--
-- Indexes for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quotes`
--
ALTER TABLE `tbl_quotes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `descripition` text NOT NULL,
  `category_id` int(20) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `books` (`id`, `title`, `author`, `descripition`, `category_id`, `cover`, `file`, `active`) VALUES
(1, 'crime-and-punishment', 'Dostoevsky', 'Crime and Punishment follows the mental anguish and moral dilemmas of Rodion Raskolnikov, an impoverished ex-student in Saint Petersburg who plans to kill an unscrupulous pawnbroker', 1, '627aac18df8db3.52903962.jpg', '627aac18dfa8c0.36811086.pdf', ''),
(2, 'WOMAN ', 'SYED UMARI', ' Online Halal Information Platform that provides you with a one-stop solution for all your Islamic Information needs in the form of Books', 2, '627ab6a31a0a99.13056624.jpg', '627ab6a31a3400.37110969.pdf', '');