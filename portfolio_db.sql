-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 12:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `accountID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `accountID`) VALUES
('username', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `recordId` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profilePhoto` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zipCode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `homeDescription` varchar(1028) NOT NULL,
  `aboutDescription` varchar(1028) NOT NULL,
  `footerDescription` varchar(1028) NOT NULL,
  `skillSummary` varchar(1028) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`recordId`, `name`, `profilePhoto`, `address`, `zipCode`, `email`, `phone`, `fb`, `linkedin`, `homeDescription`, `aboutDescription`, `footerDescription`, `skillSummary`) VALUES
(1, 'Raquel Alunsagay', 'profile-photo.jpg', 'Zambowood, Zamboanga City, Philippines', '7000', 'darkscheduler28@gmail.com', '(+63) 9651701307', 'fb link', 'linkedin link', 'This is a sample introduction', 'About me information', 'Footer information', 'This is a sample skills section summary');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `recordId` int(50) NOT NULL,
  `workTitle` varchar(255) NOT NULL,
  `workImage` varchar(255) NOT NULL,
  `workRole` varchar(255) NOT NULL,
  `workDescription` varchar(920) NOT NULL,
  `workPublished` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`recordId`, `workTitle`, `workImage`, `workRole`, `workDescription`, `workPublished`) VALUES
(1, 'Laundry Management System', 'profile-photo.jpg', 'Information Systems Analyst', 'This is a sample project description.', 'February 20, 2024');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `recordId` int(50) NOT NULL,
  `skillName` varchar(255) NOT NULL,
  `skillIcon` varchar(255) NOT NULL,
  `skillDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`recordId`, `skillName`, `skillIcon`, `skillDescription`) VALUES
(1, 'Skill 1', 'profile-photo.jpg', 'This is a sample skill description 1'),
(2, 'Skill 2', 'profile-photo.jpg', 'This is a sample skill description 2'),
(3, 'Skill 3', 'profile-photo.jpg', 'This is a sample skill description 3'),
(4, 'Skill 4', 'profile-photo.jpg', 'This is a sample skill description 4'),
(5, 'Skill 5', 'profile-photo.jpg', 'This is a sample skill description 5'),
(6, 'Skill 6', 'profile-photo.jpg', 'This is a sample skill description 6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`recordId`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`recordId`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`recordId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `recordId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `recordId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `recordId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
