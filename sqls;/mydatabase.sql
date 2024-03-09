-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 06:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `campaign_cause` enum('Education','Food Aid','Medical Assistance','Scholarship Request') NOT NULL,
  `date_of_application` date NOT NULL,
  `grace_period` date NOT NULL,
  `urgency_years` int(11) NOT NULL,
  `beneficiaries` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `first_name`, `last_name`, `email`, `campaign_cause`, `date_of_application`, `grace_period`, `urgency_years`, `beneficiaries`) VALUES
(1, 'Shila', 'Owuor', '20s01acs014@anu.ac.ke', '', '0000-00-00', '0000-00-00', 1, 1),
(2, 'Shila', 'Owuor', '20s01acs014@anu.ac.ke', '', '0000-00-00', '0000-00-00', 1, 1),
(3, 'Shila', 'Owuor', '20s01acs014@anu.ac.ke', 'Scholarship Request', '0000-00-00', '0000-00-00', 1, 1),
(4, 'Shila', 'Owuor', '20s01acs014@anu.ac.ke', 'Scholarship Request', '2023-11-14', '2023-12-03', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`) VALUES
(1, 'achiengshi', 'owuor200'),
(3, 'achiengshi', 'Shei12la'),
(15, 'iagiagi@gm', 'PY6S?sB6'),
(16, 'achiengshi', 'PY6S?sB6'),
(17, 'achiengshi', 'Shei12la'),
(18, 'achiengshi', 'Shei12la'),
(19, 'achiengshi', 'Shei12la');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
