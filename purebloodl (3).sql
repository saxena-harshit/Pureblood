-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 11:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purebloodl`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `question` varchar(20) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bgroup` varchar(10) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(10) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `email`, `password`, `question`, `answer`, `phone`, `gender`, `address`, `bgroup`, `pin`, `city`, `state`, `photo`) VALUES
('kishan saxena', 'h@gmail.com', '123456', 'Favourite player', 'kohli', '789654321', 'Male', '101 mml saxena ', 'O+', '243001', 'agra', 'Uttar Prad', 'a2.jpg'),
('harshit saxena', 'saxena@gnail.com', '123456', 'Pet name', 'rockie', '+918923369059', 'Male', '00 mml saxena ', 'AB+', '243001', 'bareilly', 'uttar prad', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `details2`
--

CREATE TABLE `details2` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `age` varchar(5) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details2`
--

INSERT INTO `details2` (`name`, `email`, `phone`, `gender`, `address`, `bgroup`, `weight`, `age`, `pin`, `city`) VALUES
('kishan saxena', 'h@gmail.com', '789654321', 'Male', '101 mml saxena ', 'O+', '66', '23', '243001', 'agra');

-- --------------------------------------------------------

--
-- Table structure for table `details3`
--

CREATE TABLE `details3` (
  `name` varchar(40) NOT NULL,
  `age` varchar(5) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `unit` int(11) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `city` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `rname` varchar(40) NOT NULL,
  `rphone` varchar(15) NOT NULL,
  `rcity` varchar(10) NOT NULL,
  `rstate` varchar(10) NOT NULL,
  `rphoto` varchar(1000) NOT NULL,
  `dname` varchar(40) NOT NULL,
  `dphone` varchar(15) NOT NULL,
  `dcity` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details3`
--

INSERT INTO `details3` (`name`, `age`, `bgroup`, `unit`, `reason`, `city`, `phone`, `rname`, `rphone`, `rcity`, `rstate`, `rphoto`, `dname`, `dphone`, `dcity`, `status`) VALUES
('xyz', '21', 'O+', 2, 'because of an accident', 'bareilly', '789456123', 'harshit saxena', '+918923369059', 'bareilly', 'uttar prad', 'download.jpg', '', '', '', ''),
('ram', '21', 'A+', 1, 'dengue', 'bar', '741852369', 'kishan saxena', '789654321', 'agra', 'Uttar Prad', 'a2.jpg', 'harshit saxena', '+918923369059', 'bareilly', ''),
('seema', '25', 'A+', 1, 'dengue', 'bareilly', '8529637410', 'kishan saxena', '789654321', 'agra', 'Uttar Prad', 'a2.jpg', 'harshit saxena', '+918923369059', 'bareilly', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
