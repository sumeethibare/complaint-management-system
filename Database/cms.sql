-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2024 at 06:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `fullname` varchar(259) DEFAULT NULL,
  `mobilenumber` bigint DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `mobilenumber`, `email`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 8956232356, 'admin@gmail.com', 'admin', 'f925916e2754e5e03f75dd58a5733251', '2023-09-12 05:16:16', '18-10-2016 04:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(9, 'Academic Issues', '', '2024-07-16 05:52:48', NULL),
(10, 'Facilities and Infrastructure', '', '2024-07-16 05:53:07', NULL),
(11, 'Health and Safety', '', '2024-07-16 05:53:20', NULL),
(12, 'Technology and IT Services', '', '2024-07-16 05:53:35', NULL),
(13, ' Student Issues', '', '2024-07-16 05:53:52', NULL),
(14, 'Campus Issues', '', '2024-07-16 05:54:15', NULL),
(15, 'Transportation', '', '2024-07-16 05:54:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE `complaintremark` (
  `id` int NOT NULL,
  `complaintNumber` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext,
  `remarkDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`) VALUES
(1, 3, 'in process', 'your ticket forward to associated team', '2023-09-15 13:05:38'),
(2, 3, 'closed', 'Ticket close in favor of user', '2023-09-15 13:06:31'),
(3, 5, 'in process', 'We are reviewing the complaint', '2023-10-01 04:12:48'),
(4, 5, 'closed', 'Issue resolved', '2023-10-01 04:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int NOT NULL,
  `stateName` varchar(255) DEFAULT NULL,
  `stateDescription` tinytext,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `stateDescription`, `postingDate`, `updationDate`) VALUES
(10, 'Engineering', '', '2024-07-16 05:45:52', NULL),
(11, 'Ayurveda', '', '2024-07-16 05:46:19', NULL),
(12, 'Homeopathy', '', '2024-07-16 05:46:26', NULL),
(13, 'Paramedical', '', '2024-07-16 05:46:32', NULL),
(14, 'Nursing', '', '2024-07-16 05:46:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int NOT NULL,
  `categoryid` int DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(8, 9, 'Inadequate study materials', '2024-07-16 05:55:52', NULL),
(9, 9, 'Lack of practical application', '2024-07-16 05:56:08', NULL),
(10, 9, 'Exam scheduling conflicts', '2024-07-16 05:56:28', NULL),
(11, 9, 'Examination paper issues', '2024-07-16 05:56:38', NULL),
(12, 10, 'Equipment malfunction', '2024-07-16 05:56:59', NULL),
(13, 10, 'Inadequate seating or lighting', '2024-07-16 05:57:10', NULL),
(14, 10, 'Limited resources or materials in library', '2024-07-16 05:57:27', NULL),
(15, 10, 'Operational hours of lab & library', '2024-07-16 05:57:49', NULL),
(16, 10, 'Room allocation problems', '2024-07-16 05:58:03', NULL),
(17, 10, 'Maintenance issues', '2024-07-16 05:58:26', NULL),
(18, 11, 'Inadequate medical staff or supplies', '2024-07-16 05:58:36', NULL),
(19, 11, 'Incidents of theft or violence', '2024-07-16 05:58:48', NULL),
(20, 11, 'Cleanliness issues', '2024-07-16 05:58:57', NULL),
(21, 11, 'Waste management problems', '2024-07-16 05:59:05', NULL),
(22, 12, 'Connectivity issues', '2024-07-16 05:59:14', NULL),
(23, 12, 'Inadequate IT infrastructure', '2024-07-16 05:59:25', NULL),
(24, 13, 'Quality of counselling', '2024-07-16 05:59:44', NULL),
(25, 13, 'Lack of job placement support', '2024-07-16 05:59:52', NULL),
(26, 13, 'Ineffective career guidance', '2024-07-16 06:00:00', NULL),
(27, 13, 'Insufficient activities or clubs', '2024-07-16 06:00:09', NULL),
(28, 13, 'Poor management of events', '2024-07-16 06:00:18', NULL),
(29, 14, 'Bullying or harassment', '2024-07-16 06:00:29', NULL),
(30, 14, 'Inclusion and diversity issues', '2024-07-16 06:00:38', NULL),
(31, 14, 'Hygiene standards', '2024-07-16 06:00:47', NULL),
(32, 14, 'Quality of food', '2024-07-16 06:00:55', NULL),
(33, 15, 'Parking problems', '2024-07-16 06:01:05', NULL),
(34, 15, 'bus timing issues', '2024-07-16 06:01:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE `tblcomplaints` (
  `complaintNumber` int NOT NULL,
  `userId` int DEFAULT NULL,
  `category` int DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `complaintType` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `noc` varchar(255) DEFAULT NULL,
  `complaintDetails` mediumtext,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint DEFAULT NULL,
  `address` tinytext,
  `State` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` int DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NULL DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `country`, `pincode`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(2, 'test', 'test@123', '202cb962ac59075b964b07152d234b70', 7894561236, NULL, NULL, NULL, NULL, NULL, '2023-09-13 05:05:11', NULL, 1),
(5, 'John Doe', 'jhndoe12@test.com', 'f925916e2754e5e03f75dd58a5733251', 4141414141, NULL, NULL, NULL, NULL, NULL, '2023-09-26 01:06:49', NULL, 1),
(6, 'Garima', 'grmat@test.com', 'f925916e2754e5e03f75dd58a5733251', 1234563214, 'A1 1222 XYZ Aprtment', 'Delhi', 'India', 110001, NULL, '2023-10-01 04:10:45', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaintremark`
--
ALTER TABLE `complaintremark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  ADD PRIMARY KEY (`complaintNumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `complaintremark`
--
ALTER TABLE `complaintremark`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tblcomplaints`
--
ALTER TABLE `tblcomplaints`
  MODIFY `complaintNumber` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
