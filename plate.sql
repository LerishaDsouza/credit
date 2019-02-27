-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 09:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `plate`
--

CREATE TABLE `plate` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `credit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plate`
--

INSERT INTO `plate` (`id`, `username`, `adress`, `email`, `contact`, `credit`) VALUES
(1, 'john', 'C/10,Prem vasundhara,Mumbai', 'john12@gmail.com', '9743551234', 1000),
(2, 'dave', 'B/12,Ambika appartments,Mumbai', 'dave34@gmail.com', '7623445612', 5000),
(3, 'sami', 'D/10,Nandanvan,Mumbai', 'sami776@yahoo.com', '9876234516', 8000),
(4, 'Cari', 'A/10,Nandanvan,Mumbai', 'cari76@yahoo.com', '9812345671', 7000),
(5, 'prem', 'C/4,Kanika,Mumbai', 'prem65@gmail.com', '9876213455', 2000),
(6, 'vasu', 'G/12,Vasu Apartments,Mumbai', 'vasu66@gmail.com', '9876554321', 3000),
(7, 'somi', 'F/19,Kanika,Mumbai', 'somi88@gmail.com', '9546553214', 5500),
(8, 'jane', 'D/9,Havika,Mumbai', 'jane43@ymail.com', '9654321455', 6700),
(9, 'sera', 'B/3,Patrika Appartment,Mumbai', 'sera443@gmail.com', '9876554321', 7600),
(10, 'seba', 'C/6,Char Bungalow,Mumbai', 'sera443@gmail.com', '9655123455', 3400);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
