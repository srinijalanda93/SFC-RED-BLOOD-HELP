-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 11:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfcredhelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `NAME` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`NAME`, `EMAIL`, `PASSWORD`) VALUES
('Srinija_25', '121320052025@sfc.ac.in', 'Min_nija97'),
('Chandra', 'Chandra@gmail.com', 'chandu'),
('Hari', 'Hari@gmail.com', 'Hari@gmail.com'),
('Kim Jenni', 'Jenni@gmail.com', 'jenni'),
('kim jin', 'jin@gmail.com', 'jin'),
('kim jisoo', 'jisoo@gmail.com', 'jisoo'),
('Kavitha', 'Kavitha@gmail.com', 'kavitha'),
('Komal', 'Komal@gmail.com', 'komal'),
('sai sudha', 'lsreesaisudha@gmail.com', 'saisudha'),
('Kim Namjoon', 'Namjoon@gmail.com', 'Namjoon'),
('Neetu', 'Neetu@gmail.com', 'neetu'),
('Sowenjanya', 'network@gmail.com', '12345'),
('pooja_mali', 'pooja@gmail.com', 'pooja'),
('Rahul', 'Rahul@gmail.com', 'rahul'),
('Renu', 'renu@gmail.com', 'Renu'),
('shawn', 'shawn@gmail.com', 'shawn'),
('Shima', 'Shima@gmail.com', '12345'),
('Shobana', 'Shobana@gmail.com', 'shobana'),
('Shruthi', 'shruthi@gmail.com', 'shruthi'),
('shruthi_12', 'ShruthiManda@gmail.com', '12345'),
('Srija', 'Srija@gmail.com', 'srija30'),
('Anand', 'srinisai85502@gmail.com', 'Anand'),
('Vijay', 'Vijay@gmail.com', 'vijay'),
('statssir', 'Yungendar@gmail.com', 'statssir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
