-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 11:44 AM
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
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'srinija', 'srinija', 'suga@1993');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_id` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_id`, `blood_group`) VALUES
(1, 'B+'),
(2, 'B-'),
(3, 'A+'),
(4, 'O+'),
(5, 'O-'),
(6, 'A-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `contact_query`
--

CREATE TABLE `contact_query` (
  `query_id` int(11) NOT NULL,
  `query_name` varchar(100) NOT NULL,
  `query_mail` varchar(120) NOT NULL,
  `query_number` char(11) NOT NULL,
  `query_message` longtext NOT NULL,
  `query_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `query_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_query`
--

INSERT INTO `contact_query` (`query_id`, `query_name`, `query_mail`, `query_number`, `query_message`, `query_date`, `query_status`) VALUES
(21, 'Srinija Landa', 'lsrinija13246@gmail.com', '8448598406', 'Good Morning, Can i Donate blood?\r\n', '2023-03-22 10:02:02', NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `page_type` varchar(50) DEFAULT NULL,
  `page_data` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_type`, `page_data`) VALUES
(2, 'Why Become Donor', 'donor', '<span style=\"font-size: medium; font-weight: 400; font-family: candara;\"><font size=\"5\">&nbsp;Blood is the most precious gift that anyone can give to another person — the gift of life. A decision to donate your blood can save a life, or even several if your blood is separated into its components — red cells, platelets and plasma — which can be used individually for patients with specific conditions. Safe blood saves lives and improves health. Blood transfusion is needed for: women with complications of pregnancy, such as ectopic pregnancies and haemorrhage before, during or after childbirth. children with severe anaemia often resulting from malaria or malnutrition. people with severe trauma following man-made and natural disasters. many complex medical and surgical procedures and cancer patients. It is also needed for regular transfusions for people with conditions such as thalassaemia and sickle cell disease and is used to make products such as clotting factors for people with haemophilia. There is a constant need for a regular blood supply because blood can be stored for only a limited time before use. Regular blood donations by a sufficient number of healthy people are needed to ensure that safe blood will be availabl</font></span><span style=\"font-weight: 400; font-family: candara; font-size: x-large;\">e whenever and wherever it is needed</span>                    '),
(3, 'About Us ', 'aboutus', '<p class=\"MsoNormal\" align=\"justify\" style=\"mso-pagination:none;text-align:justify;text-justify:inter-ideograph;\"><font size=\"4\" face=\"candara\" style=\"font-weight: normal;\">To make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors. We focus on creating and expanding a virtual army of blood-donating volunteers who could be searched a</font><span style=\"font-weight: normal; font-family: candara; font-size: large;\">nd</span><span style=\"font-weight: normal; font-family: candara; font-size: large;\">&nbsp;</span><span style=\"font-weight: normal; font-family: candara; font-size: large;\">contacted by the family/care givers of a patient in times of need.</span></p>                    '),
(4, 'The Need For Blood', 'needforblood', '<p class=\"MsoNormal\"><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-weight: normal;\"><font size=\"5\" style=\"\" face=\"candara\">Our nation requires 4 Core Units of Blood while only 40 lakh units are available, Every two seconds&nbsp;someone needs Blood. There is no substitute for Human Blood. It cannot be manufactured. Blood donation is an extremely noble deed, yet there is a scarcity of regular donors across India.We focus on creating and expanding a virtual army of blood-donating volunteers who could be searched&nbsp;and&nbsp;contacted by the family/caregivers of a patient in times of need.</font></span><span style=\"font-family: Candara; color: rgb(5, 4, 4); letter-spacing: 1pt; font-size: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p>                    '),
(5, 'Blood Tips', 'bloodtips', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">\n1) You must be in good health. <br>\n2) Hydrate and eat a healthy meal before your donation.<br>\n3) You’re never too old to donate blood. <br>\n4) Rest and relaxed.<br>\n5) Don’t forget your FREE post-donation snack. \n</span>'),
(6, 'Who you could Help', 'whoyouhelp', '<span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">\nEvery 2 seconds, someone in the World needs blood. Donating blood can help:\n\n1) People who go through disasters or emergency situations.<br>\n2) People who lose blood during major surgeries.<br>\n3) People who have lost blood because of a gastrointestinal bleed.<br>\n4) Women who have serious complications during pregnancy or childbirth.<br>\n5) People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.<br>\n</span>'),
(7, 'Blood Groups', 'bloodgroups', '<p class=\"p\" style=\"margin: 0pt 0pt 5pt; text-indent: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"5\" face=\"candara\" style=\"font-weight: normal;\"><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Blood group of any human being will mainly fall in any one of the following groups.</span><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-right: 0pt; margin-bottom: 5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"5\" face=\"candara\" style=\"font-weight: normal;\"><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">·&nbsp;A positive or A negative</span><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt;\"><o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-right: 0pt; margin-bottom: 5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"5\" face=\"candara\" style=\"font-weight: normal;\"><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">·&nbsp;B positive or B negative</span><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt;\"><o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-right: 0pt; margin-bottom: 5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"5\" face=\"candara\" style=\"font-weight: normal;\"><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">·&nbsp;O positive or O negative</span><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt;\"><o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-right: 0pt; margin-bottom: 5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"5\" face=\"candara\" style=\"font-weight: normal;\"><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">·&nbsp;AB positive or AB negative.</span><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt;\"><o:p></o:p></span></font></p><p class=\"p\" style=\"margin: 0pt 0pt 5pt; text-indent: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><font size=\"5\" face=\"candara\" style=\"font-weight: normal;\"><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Your blood group is determined by the genes you inherit from your parents.</span><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></span><span style=\"color: rgb(33, 37, 41); letter-spacing: 0pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">A healthy diet helps ensure a successful blood donation, and also makes you feel better!</span></font><span style=\"font-family: Candara; color: rgb(5, 4, 4); letter-spacing: 1pt; font-size: 11pt;\"><o:p></o:p></span></p>                    '),
(8, 'Universal Donors And Recepients', 'universal', '<p class=\"MsoNormal\"><font size=\"5\" face=\"candara\" style=\"font-weight: normal;\"><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">The most common blood type is O, followed by type</span><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;</span><span style=\"color: rgb(5, 4, 4); letter-spacing: 1pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">A. Type O individuals are often called \"universal donors\" since their blood can be transfused into persons with any blood type. Those with type AB blood are called \"universal recipients\" because they can receive blood of any type.</span></font><span style=\"font-family: Candara; color: rgb(5, 4, 4); letter-spacing: 1pt; font-size: 18pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><o:p></o:p></span></p>                    '),
(9, 'Vision And Mission', 'VisionMission', '<span style=\"font-weight: 400; text-align: justify;\"><font size=\"5\" style=\"\" face=\"candara\">To make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors. We focus on creating and expanding a virtual army of blood-donating volunteers who could be searched and&nbsp;contacted by the family/caregivers of a patient in times of need.</font></span>                    '),
(10, 'donaruses', 'lifesaver', '<p class=\"MsoNormal\" align=\"justify\" style=\"font-weight: 400; text-align: justify;\"><font face=\"candara\" style=\"\" size=\"5\">The benefits of donating blood include helping people injured in accidents, undergoing cancer treatment, and battling blood diseases, among other reasons. Blood donation not only enables patients to live longer and healthier lives, but it also benefits donors’ mental and physical health.</font></p><p class=\"MsoNormal\" align=\"justify\" style=\"font-weight: 400; text-align: justify;\"><font face=\"candara\" style=\"\" size=\"5\">Weight loss,&nbsp;Boosts Immunity,&nbsp;Reduces the risk of heart disease,&nbsp;Demotes possibility of Cancer,Elates Mental Health</font></p>                    ');

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
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`),
  ADD UNIQUE KEY `admin_username` (`admin_username`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `contact_query`
--
ALTER TABLE `contact_query`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donar_id`),
  ADD UNIQUE KEY `EmailId` (`donar_mail`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `page_id` (`page_id`),
  ADD UNIQUE KEY `page_type` (`page_type`);

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_query`
--
ALTER TABLE `contact_query`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
