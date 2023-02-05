-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2021 at 10:31 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Yash000842226`
--

-- --------------------------------------------------------

--
-- Table structure for table `Players`
--

CREATE TABLE `Players` (
  `Email` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Wins` int(11) NOT NULL DEFAULT 0,
  `Losses` int(11) NOT NULL DEFAULT 0,
  `Date_Last_played` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Players`
--

INSERT INTO `Players` (`Email`, `Name`, `Wins`, `Losses`, `Date_Last_played`) VALUES
('fficial3733@icloud.com', 'Yash ', 0, 1, '2021-10-21'),
('hchudasama@algomau.ca', 'Yash ', 0, 1, '2021-10-21'),
('yashp3933@gmail.com', 'Yash ', 1, 0, '2021-10-21'),
('yashqp3933@gmail.com', 'Yash ', 1, 0, '2021-10-21'),
('yasqhqp3933@gmail.com', 'Yash ', 1, 0, '2021-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Players`
--
ALTER TABLE `Players`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
