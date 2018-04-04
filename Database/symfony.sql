-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2018 at 08:40 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfony`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `Name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateModified` datetime DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `Image` int(11) DEFAULT NULL,
  `Userrole` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `Name`, `Email`, `Status`, `Mobile`, `Password`, `DateCreated`, `DateModified`, `CreatedBy`, `ModifiedBy`, `Image`, `Userrole`) VALUES
(1, 'Vishnu', 'vishnusharmax@gmail.com', '1', '9412558541', 'e10adc3949ba59abbe56e057f20f883e', '2018-03-28 00:00:00', '2018-03-28 00:00:00', 1, 1, NULL, 1),
(2, 'Demo Hero', 'demo@gmail.com', '1', '09999999999', 'e10adc3949ba59abbe56e057f20f883e', '2018-03-29 06:14:46', '2018-03-29 06:15:06', 1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` longtext COLLATE utf8_unicode_ci,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Isdeleted` smallint(6) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `DateModified` datetime DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `ModifiedBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`id`, `Name`, `Description`, `Status`, `Isdeleted`, `DateCreated`, `DateModified`, `CreatedBy`, `ModifiedBy`) VALUES
(1, 'Admin', 'admin', '1', 0, '2018-03-28 00:00:00', '2018-03-28 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Middlename` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Devicetoken` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Latitude` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Longitude` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Devicetype` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Profileimage` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Vpid` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Mycredit` decimal(19,4) DEFAULT NULL,
  `DateCreated` datetime NOT NULL,
  `DateModified` datetime DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `ModifiedBy` int(11) DEFAULT NULL,
  `UserLoginModeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vlabs_image`
--

CREATE TABLE `vlabs_image` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `content_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vlabs_image`
--

INSERT INTO `vlabs_image` (`id`, `name`, `size`, `created_at`, `content_type`, `path`) VALUES
(2, '5abc84568c32f.jpg', 8583, '2018-03-29 06:14:46', 'image/jpeg', 'Userprofile/5abc84568c32f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UNIQ_B6FF9CC64FC2B5B` (`Image`),
  ADD KEY `IDX_B6FF9CC6862904D` (`Userrole`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1483A5E9F509EC02` (`UserLoginModeID`);

--
-- Indexes for table `vlabs_image`
--
ALTER TABLE `vlabs_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vlabs_image`
--
ALTER TABLE `vlabs_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD CONSTRAINT `FK_B6FF9CC64FC2B5B` FOREIGN KEY (`Image`) REFERENCES `vlabs_image` (`id`),
  ADD CONSTRAINT `FK_B6FF9CC6862904D` FOREIGN KEY (`Userrole`) REFERENCES `userrole` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_1483A5E9F509EC02` FOREIGN KEY (`UserLoginModeID`) REFERENCES `userrole` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
