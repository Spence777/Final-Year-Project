-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 08:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(30) NOT NULL,
  `dateadded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryid`, `categoryname`, `dateadded`) VALUES
(1, 'Cultural Services', '2022-01-20 08:41:37'),
(2, 'Education Services', '2022-01-20 08:41:37'),
(8, 'Water and Waste Management', '2022-01-29 10:35:09'),
(9, 'Library Services', '2022-02-04 06:58:24'),
(10, 'Environmental Services', '2022-02-04 06:58:42'),
(11, 'Urban Planning and Land Use', '2022-02-04 06:59:04'),
(12, 'Health and Social Services', '2022-02-04 06:59:41');

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `datemonitored` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Category` text NOT NULL,
  `projectname` varchar(100) NOT NULL,
  `leaderOfProject` text NOT NULL,
  `projectcomplete` text NOT NULL,
  `benefited` text NOT NULL,
  `govtDoneEnough` text NOT NULL,
  `serviceHasAProblem` text NOT NULL,
  `unnecessaryService` text NOT NULL,
  `serviceProvidedOnTime` text NOT NULL,
  `challengesFaced` text NOT NULL,
  `accessToservice` text NOT NULL,
  `localGovDoneEnough` text NOT NULL,
  `effortPutIn` text NOT NULL,
  `sufficientPersonnel` text NOT NULL,
  `recommendService` text NOT NULL,
  `Interventions` text NOT NULL,
  `problemFaced` varchar(240) NOT NULL,
  `programSuccess` text NOT NULL,
  `excelsheet` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`datemonitored`, `Category`, `projectname`, `leaderOfProject`, `projectcomplete`, `benefited`, `govtDoneEnough`, `serviceHasAProblem`, `unnecessaryService`, `serviceProvidedOnTime`, `challengesFaced`, `accessToservice`, `localGovDoneEnough`, `effortPutIn`, `sufficientPersonnel`, `recommendService`, `Interventions`, `problemFaced`, `programSuccess`, `excelsheet`) VALUES
('2022-02-01 06:27:59', '', '', '', ' ', '', '  ', ' ', ' ', '', '', '', '', ' ', '', '', '', '', '', ''),
('2022-02-01 06:30:21', '', '', '', ' ', '', '  ', ' ', ' ', '', '', '', '', ' ', '', '', '', '', '', ''),
('2022-02-01 06:37:57', '', 'Lubiri Secondary School', '', ' ', '', '  on', ' ', '  s klc kacklcd c', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'mcdlccapocojapcm', ',camklcaiocqjcjq', 'on', ''),
('2022-02-01 06:52:03', '', 'Mengo Secondary School', '', ' ', '', '  on', ' ', '  s klc kacklcd c', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'mcdlccapocojapcm', ',camklcaiocqjcjq', 'on', ''),
('2022-02-01 06:52:30', '', 'Mengo Secondary School', '', ' ', '', '  on', ' ', '  s klc kacklcd c', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'mcdlccapocojapcm', ',camklcaiocqjcjq', 'on', ''),
('2022-02-01 07:19:49', '', 'NWSC', '', ' ', '', '  on', ' ', ' yes', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'yes', 'yes', 'on', 'Copy of day eservice updated.xlsx'),
('2022-02-01 07:20:46', '', 'NWSC', '', ' ', '', '  on', ' ', ' yes', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'yes', 'yes', 'on', 'Copy of day eservice updated.xlsx'),
('2022-02-01 07:22:13', '', 'NWSC', '', ' ', '', '  on', ' ', ' yes', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'yes', 'yes', 'on', 'Copy of day eservice updated.xlsx'),
('2022-02-01 07:28:40', '', 'NWSC', '', ' ', '', '  on', ' ', ' yes', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'yes', 'yes', 'on', 'Copy of day eservice updated.xlsx'),
('2022-02-01 07:30:54', '', 'NWSC', '', ' on', '', '  on', ' ', ' yes', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', 'yes', 'yes', 'on', 'Copy of day eservice updated.xlsx'),
('2022-02-01 07:34:09', '', 'Mengo Secondary School', '', ' yes', 'on', '  on', ' cm,wclkekfnv', ' mclkww', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', ' mcwclw sc', 'cmsms', 'on', ''),
('2022-02-01 07:40:21', '1', 'Mengo Secondary School', 'sentongo', ' yes', 'on', '  on', ' cm,wclkekfnv', ' mclkww', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', ' mcwclw sc', 'cmsms', 'on', ''),
('2022-02-01 07:48:58', '1', 'Mengo Secondary School', 'sentongo', ' yes', 'on', '  on', ' cm,wclkekfnv', ' mclkww', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', ' mcwclw sc', 'cmsms', 'on', ''),
('2022-02-01 07:49:08', '1', 'Mengo Secondary School', 'sentongo', ' yes', 'on', '  on', ' cm,wclkekfnv', ' mclkww', 'on', 'on', 'on', 'option1', ' on', 'on', 'on', ' mcwclw sc', 'cmsms', 'on', ''),
('2022-02-01 08:06:28', '2', 'Uganda Martyrs SEC Sch.', 'Eric Bakahuna', ' Yes', 'Yes', '  Yes', ' It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', ' It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'Yes', 'No', 'Impossible', 'Yes', ' Extremely-Alot-of-Effort', 'Yes', 'No', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'No', 'Copy of evening eservice updated.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `names` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `role` enum('user','admin','','') NOT NULL,
  `status` enum('active','inactive','','') NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
