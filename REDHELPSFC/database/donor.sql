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
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donar_id` int(11) NOT NULL,
  `donar_fullname` varchar(100) DEFAULT NULL,
  `donar_mail` varchar(100) DEFAULT NULL,
  `donar_number` char(11) DEFAULT NULL,
  `donar_age` int(11) DEFAULT NULL,
  `donar_gender` varchar(12) NOT NULL,
  `donar_blood` varchar(20) DEFAULT NULL,
  `donar_address` varchar(255) DEFAULT NULL,
  `donar_regas` varchar(20) DEFAULT NULL,
  `Dia` varchar(20) DEFAULT NULL,
  `recent` varchar(20) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donar_id`, `donar_fullname`, `donar_mail`, `donar_number`, `donar_age`, `donar_gender`, `donar_blood`, `donar_address`, `donar_regas`, `Dia`, `recent`, `PostingDate`, `status`) VALUES
(89, 'Dontha Srija', 'srija@gmail.com', '9012873456', 24, 'female', ' 1', 'Secunderabad', 'Student', 'No', 'No', '2023-03-22 09:14:11', NULL),
(90, 'Landa Sree Sai sudha', 'lsreesaisudha@gmail.com', '9100371372', 25, 'female', ' 2', 'Lingampally', 'Student', 'No', 'No', '2023-03-22 09:15:49', NULL),
(92, 'Landa Ananda Rao', 'srinisai85502@gmail.com', '+9197045313', 31, 'male', ' 3', 'Google India Pvt Ltd, Divyasree OMEGA-A', 'Parent', 'No', 'No', '2023-03-22 09:22:01', NULL),
(93, 'Kim Jennie', 'jennie@gmail.com', '98034567812', 25, 'female', ' 4', 'Begumpet', 'Staff', 'No', 'yes', '2023-03-22 09:25:59', NULL),
(94, 'Kim jisoo', 'jisoo@gmail.com', '87907612345', 29, 'female', ' 5', 'Hitech-city', 'Staff', 'No', 'yes', '2023-03-22 09:30:10', NULL),
(95, 'kim soekjin', 'jin@gmail.com', '87120983456', 32, 'male', ' 6', 'Bharatnagar', 'Parent', 'yes', 'No', '2023-03-22 09:32:27', NULL),
(96, 'Pooja mail', 'pooja@gmail.com', '9783120456', 26, 'female', ' 7', 'Rai Durgam', 'Student', 'No', 'No', '2023-03-22 09:35:07', NULL),
(97, 'Neetu Sencha', 'Neetu@gmail.com', '8899012345', 28, 'female', ' 8', 'KPHB colony', 'Student', 'No', 'yes', '2023-03-22 09:38:32', NULL),
(98, 'shruthi Konke', 'shruthi@gmail.com', '8721340856', 27, 'Female', ' 1', 'Chandanagar', 'Student', 'No', 'Yes', '2023-03-22 09:41:07', NULL),
(99, 'Komal Cashyap', 'Komal@gmail.com', '81290345671', 19, 'Female', ' 2', 'Hapizpet', 'Staff', 'No', 'No', '2023-03-22 09:42:38', NULL),
(100, 'Chandra Sekar', 'Chandra@gmail.com', '9012837456', 32, 'Male', ' 3', 'Borabanda', 'Staff', 'Yes', 'No', '2023-03-22 09:43:56', NULL),
(101, 'Vijay Kumar', 'Vijay@gmail.com', '8891200678', 27, 'Male', ' 6', 'Gachibowli', 'Staff', 'No', 'Yes', '2023-03-22 09:46:03', NULL),
(102, 'Sowenjanya', 'network@gmail.com', '87901234568', 32, 'Female', ' 4', 'Shamshabad', 'Staff', 'No', 'Yes', '2023-03-22 09:47:15', NULL),
(103, 'Shruthi Manda', 'ShruthiManda@gmail.com', '8899007765', 30, 'Female', ' 5', 'Kukatpally', 'Staff', 'No', 'No', '2023-03-22 09:49:19', NULL),
(104, 'Rahul Kumar', 'Rahul@gmail.com', '88779912306', 27, 'Male', ' 7', 'Kukatpally', 'Staff', 'No', 'Yes', '2023-03-22 09:50:58', NULL),
(105, 'Hari kumar', 'Hari@gmail.com', '7722334466', 29, 'Male', ' 2', 'Habsiguda', 'Staff', 'Yes', 'No', '2023-03-22 09:52:37', NULL),
(106, 'Yungendar', 'Yungendar@gmail.com', '6789120345', 40, 'Male', ' 3', 'Erragadda', 'Staff', 'No', 'No', '2023-03-22 09:54:31', NULL),
(107, 'Renuka Kumari', 'renu@gmail.com', '8970453217', 42, 'Female', ' 4', 'Gandhi Nagar', 'Staff', 'No', 'No', '2023-03-22 09:55:58', NULL),
(108, 'Kavitha', 'Kavitha@gmail.com', '98701263789', 43, 'Female', ' 5', 'Green Lands', 'Staff', 'Yes', 'No', '2023-03-22 09:57:27', NULL),
(109, 'Shima hari', 'Shima@gmail.com', '7689312398', 44, 'Female', ' 5', 'Golconda', 'Staff', 'Yes', 'No', '2023-03-22 09:58:56', NULL),
(110, 'Shobana kumari', 'Shobana@gmail.com', '7689012345', 41, 'Female', ' 7', 'Kachiguda', 'Staff', 'No', 'Yes', '2023-03-22 10:00:49', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donar_id`),
  ADD UNIQUE KEY `EmailId` (`donar_mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
