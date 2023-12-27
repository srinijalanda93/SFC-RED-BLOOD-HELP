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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `page_id` (`page_id`),
  ADD UNIQUE KEY `page_type` (`page_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
