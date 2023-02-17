-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 12:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `id` int(11) NOT NULL,
  `Tilte` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_notice`
--

INSERT INTO `add_notice` (`id`, `Tilte`, `Description`) VALUES
(1, 'Addmision batch(2023-24)', 'Addmission for batch (2023-24) starts from 24-feb-2023.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `add_report`
--

CREATE TABLE `add_report` (
  `id` int(11) NOT NULL,
  `Tilte` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_report`
--

INSERT INTO `add_report` (`id`, `Tilte`, `Description`) VALUES
(1, 'Compliant', 'To change are english teacher.'),
(2, 'Request for new Teacher', 'Request for new English teacher\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `add_teacher`
--

CREATE TABLE `add_teacher` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `email` text NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_teacher`
--

INSERT INTO `add_teacher` (`id`, `name`, `subject`, `email`, `Address`) VALUES
(1, 'Bhargavi', 'Mathematics', 'bhargavi@gmail.com', 'Mandi'),
(2, 'harish', 'English', 'hello@gmail.com', 'Mandi');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `Password`) VALUES
(1, 'Admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Standard` text NOT NULL,
  `Gender` text NOT NULL,
  `Email` text NOT NULL,
  `Father_name` text NOT NULL,
  `Mother_name` text NOT NULL,
  `Contact_no` int(10) NOT NULL,
  `Address` text NOT NULL,
  `time` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `First_name`, `Last_name`, `Standard`, `Gender`, `Email`, `Father_name`, `Mother_name`, `Contact_no`, `Address`, `time`, `password`) VALUES
(4, 'hari', 'ram', 'NINTH', 'male', 'w@gmail.com', 'sham', 'sita', 124324, 'Mandi', '0', '3432'),
(6, 'rohan', 'R', 'EIGHTH', 'male', 'rohan@gmail.com', 'sham', 'sita', 2147483647, 'Mandi', 'Friday 17-02-2023 10:03:53 AM', 'e321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_notice`
--
ALTER TABLE `add_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_report`
--
ALTER TABLE `add_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_teacher`
--
ALTER TABLE `add_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_report`
--
ALTER TABLE `add_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_teacher`
--
ALTER TABLE `add_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
