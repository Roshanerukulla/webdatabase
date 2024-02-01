-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2024 at 07:29 PM
-- Server version: 10.3.39-MariaDB-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bshelke_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobposted`
--

CREATE TABLE `jobposted` (
  `id` int(11) NOT NULL,
  `jobTitle` varchar(100) NOT NULL,
  `jobDescription` text NOT NULL,
  `department` text NOT NULL,
  `requiredSkills` text NOT NULL,
  `hourlyRate` int(11) NOT NULL,
  `applicationInstructions` text NOT NULL,
  `contactInfo` varchar(30) NOT NULL,
  `status` enum('Open','Close') NOT NULL DEFAULT 'Open'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobposted`
--

INSERT INTO `jobposted` (`id`, `jobTitle`, `jobDescription`, `department`, `requiredSkills`, `hourlyRate`, `applicationInstructions`, `contactInfo`, `status`) VALUES
(9, 'Data Science Intern', 'Classification ', 'Data ', 'Python, R, SQL', 25, 'Resume, CL', '3175079381', 'Open'),
(10, 'Data Science Intern I', 'Regression', 'CS', 'Python, R, SQL, Java', 29, 'Resume, CL', '3175079382', 'Open'),
(11, 'Data Science Intern II', 'Prediction', 'CS', 'Python, R, SQL, Java, Excel', 20, 'Resume', '3176079382', 'Open'),
(12, 'Data Intern ', 'Analysis', 'CS', 'Excel', 20, 'Resume', '3176079386', 'Close'),
(13, 'Dance Intern ', 'Teach dance', 'Arts', 'Dance', 20, 'Resume', '3176029386', 'Open'),
(14, 'Lab Assistant', 'Handle Lab activities', 'Chemistry', 'Handling Chemicals', 22, 'Resume', '3176029366', 'Open'),
(15, 'Lab Assistant', 'Handle Lab activities', 'Mechanical', 'Handling Tools', 15, 'Resume', '3176029389', 'Open');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobposted`
--
ALTER TABLE `jobposted`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobposted`
--
ALTER TABLE `jobposted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
