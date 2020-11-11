-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2020 at 03:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(200) DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Test', 'admin', 8979555556, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-01-17 06:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `ID` int(10) NOT NULL,
  `BookName` varchar(200) DEFAULT NULL,
  `ISBN` bigint(12) DEFAULT NULL,
  `AuthorName` varchar(200) DEFAULT NULL,
  `Price` varchar(200) DEFAULT NULL,
  `UploadBook` varchar(200) DEFAULT NULL,
  `CoverImage` varchar(200) NOT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`ID`, `BookName`, `ISBN`, `AuthorName`, `Price`, `UploadBook`, `CoverImage`, `PostingDate`) VALUES
(2, 'The Blue Umbrella', 97881716734, 'Ruskin Bon', '120', '069741a92a2f641eb428ba6d12ccb9af1579497823.pdf', '9b542d2e8b3c740ccf6c0a65820e42d8.jpg', '2020-01-18 15:15:26'),
(3, 'Great Stories for Children', 97881291189, 'Ruskin Bon', '120', '72e5fcb23a3a1b0fab98cd94eebe59041579360763.pdf', 'bcec32d44212374c7b2442884a509f1d.jpg', '2020-01-18 15:19:23'),
(4, 'Man\'s Search for Meaning', 97818460412, 'Viktor E F', '45', '72e5fcb23a3a1b0fab98cd94eebe59041579360854.pdf', 'ac53a339dad2d62518e20eb723e448d6.jpg', '2020-01-18 15:20:54'),
(5, 'Harry Potter and the Philosopher\'s Stone', 97814088556, 'JK Rowling', '50', '72e5fcb23a3a1b0fab98cd94eebe59041579360928.pdf', 'bcec32d44212374c7b2442884a509f1d.jpg', '2020-01-18 15:22:08'),
(6, 'Mahatma Gandhi Autobiography: The Story Of My Experiments With Truth', 97881723431, 'Mahatma Gandhi ', '12', '72e5fcb23a3a1b0fab98cd94eebe59041579362371.pdf', '3e142968fcdfd5e3d80ecba6c746a6bc.jpg', '2020-01-18 15:46:11'),
(7, 'Autobiography of Sachin Tendulkar', 121232434556, 'Gyan Chandra', '120', '069741a92a2f641eb428ba6d12ccb9af1579497744.pdf', '3e142968fcdfd5e3d80ecba6c746a6bc.jpg', '2020-01-19 16:01:34'),
(8, 'Ruskin Bond', 121232434556, 'Ruskin Bond', '300', '72e5fcb23a3a1b0fab98cd94eebe59041579449910.pdf', '4c60ce96359e7d31e1b7f082d067c4d7.jpg', '2020-01-19 16:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 30px; margin-left: 0px; line-height: 25px; text-align: justify; color: rgb(68, 68, 68); font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in.</p><p style=\"box-sizing: border-box; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; line-height: 25px; text-align: justify; color: rgb(68, 68, 68); font-family: Poppins, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minimLorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in.</p>', NULL, NULL, '2020-02-04 07:20:30'),
(2, 'contactus', 'Contact Us', 'D-204, Hole Town South West,Delhi-110096,India', 'info@gmail.com', 8529631235, '2020-02-04 06:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE `tblreview` (
  `ID` int(10) NOT NULL,
  `UserID` int(5) DEFAULT NULL,
  `BookID` int(5) DEFAULT NULL,
  `Review` mediumtext DEFAULT NULL,
  `Rating` tinyint(2) NOT NULL,
  `ReviewDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`ID`, `UserID`, `BookID`, `Review`, `Rating`, `ReviewDate`) VALUES
(1, 1, 5, 'Nice Book', 0, '2020-02-04 11:59:17'),
(2, 1, 8, 'Good Book Must be buy', 0, '2020-02-04 12:00:53'),
(3, 1, 6, 'Nice Book', 0, '2020-02-04 12:02:04'),
(4, 1, 3, 'Good Book', 0, '2020-02-04 12:02:57'),
(5, 1, 5, 'ghjhgjhgjhg', 0, '2020-02-04 14:39:03'),
(6, 1, 6, 'ljoioiuioioigj', 0, '2020-02-04 14:39:53'),
(7, 1, 6, 'gfdgfc', 0, '2020-02-04 14:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Ganesh Singh', 8979987879, 'ganu@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-01-20 07:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
