-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 08:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `Email` varchar(40) NOT NULL,
  `Passwordd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`Email`, `Passwordd`) VALUES
('ilobilo12985@gmail.com', 'dfdf'),
('njfdnjfnj', 'dfdf'),
('rakib', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` int(11) NOT NULL,
  `Amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`Name`, `Email`, `Phone`, `Amount`) VALUES
('', '', 0, 0),
('Md Sabbir Hossain', '221902126@student.green.edu.bd', 1518972140, 4343),
('Rakibul', 'rakibulalam59900@gmail.com', 1518972141, 2723);

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE `newsfeed` (
  `Title` varchar(200) NOT NULL,
  `Description` text DEFAULT NULL,
  `Imagename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsfeed`
--

INSERT INTO `newsfeed` (`Title`, `Description`, `Imagename`) VALUES
('Hndusd asjnjux', 'dnjcnjasnc', 'Screenshot 2022-06-05 193318.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projectlist`
--

CREATE TABLE `projectlist` (
  `Title` varchar(200) NOT NULL,
  `Description` text DEFAULT NULL,
  `Imagename` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectlist`
--

INSERT INTO `projectlist` (`Title`, `Description`, `Imagename`) VALUES
('Bangladesh', 'jnjsnn sjdnjn jsndj', 'Screenshot 2022-09-10 151834.png'),
('Eid Gift for Helpless people', 'Something write here', 'Screenshot 2022-09-09 234650.png'),
('Hellow', 'JNAsjnjc djnjnvsd jsdjnjcknsjdc', 'Screenshot 2022-08-24 203019.png'),
('hgvhbjjnju', 'mkjnjknjk', 'Screenshot 2022-09-11 103732.png'),
('Rakib Alam', 'sdnjnsndnf', 'Screenshot 2022-08-27 214427.png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` int(20) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `porfson` varchar(50) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `works` varchar(50) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `coment` varchar(500) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Email`, `Phone`, `Dob`, `Address`, `porfson`, `Gender`, `works`, `skills`, `coment`, `password`) VALUES
('Md. sabbir hossain', 'sa40829789@gmail.com', 345346353, '2024-06-11', 'dfgdhdvcswte', '1', 'button', '1', 'checked', 'dfgdfghdhdh', ''),
('Md. Sabbir Hossain', 'ksabbirprodan@gmail.com', 1954716440, '2024-06-12', 'Monohardi, Narsingdi, Banglasesh', '1', 'Male', '4', 'Digital Skills', 'I am Sabbir. I am a CSE Graduate Student.', ''),
('Rakibul Alam', 'sa40829789@gmail.com', 1521189740, '2024-06-18', 'Kaliyakoir, Gazipur', '1', 'Male', '2', 'Social Media Work', 'Hey, I am Rakib who are you?', ''),
('Md. Sabbir Hossain', 'sa40829789@gmail.com', 1954716440, '2024-06-09', 'Narrsingdi', 'Student', 'Male', 'Projects Work', 'Leadership Quality', 'Hey I am Sabbir', 'sabbir345'),
('Md. Sabbir Hossain', 'sa40829789@gmail.com', 1640829789, '2024-06-12', 'Post Office: Chowrasta Moulobi Bazar, Chandanbari', 'Full Time Job', 'Male', 'Volunterrism', 'Digital Skills', 'I am sabbir ', '4567sabbir'),
('Rakib', 'ilobilo12985@gmail.com', 1518972141, '2024-06-26', 'efdfedf', 'Others', 'Male', 'Community', 'Leadership Quality', 'sjdnjnfjjd', 'dfdf'),
('', '', 0, '0000-00-00', '', '', '', '', '', '', ''),
('', '', 0, '0000-00-00', '', '', '', '', '', '', ''),
('', '', 0, '0000-00-00', '', '', '', '', '', '', ''),
('', '', 0, '0000-00-00', '', '', '', '', '', '', ''),
('Kanchan_Bazar,Rupganj,Narayangonj', 'ilobilo12985@gmail.com', 1518972140, '2024-06-27', 'hdbhfb', 'Full Time Job', 'Male', 'Community', 'Management', 'xhbsbdh', 'dfdf'),
('Rakib', 'ilobilo12985@gmail.com', 1518972141, '2024-06-28', 'nfjdf', 'Full Time Job', 'Male', 'Community', 'Designing', 'dknjnfjks', 'dfdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminreg`
--
ALTER TABLE `adminreg`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`Phone`);

--
-- Indexes for table `projectlist`
--
ALTER TABLE `projectlist`
  ADD PRIMARY KEY (`Title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
