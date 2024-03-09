-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 05:19 PM
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
  `phone_number` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `campaign_cause` enum('Education','Food Aid','Medical Assistance','Scholarship Request') NOT NULL,
  `date_of_application` date NOT NULL,
  `grace_period` date NOT NULL,
  `urgency_years` int(11) NOT NULL,
  `beneficiaries` int(11) NOT NULL,
  `upload_images` blob DEFAULT NULL,
  `description_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `phone_number`, `first_name`, `last_name`, `email`, `campaign_cause`, `date_of_application`, `grace_period`, `urgency_years`, `beneficiaries`, `upload_images`, `description_id`) VALUES
(9, 120013704, 'Alpha', 'Omega', 'alphaomega@gmail.com', 'Education', '2023-11-20', '2023-11-27', 1, 1, '', 'Are you passionate about education and eager to pursue your academic dreams? Help support my journey by contributing to my school fees fundraiser! As a dedicated and motivated student, I am seeking assistance to cover the costs of my education. Your generous contributions will directly impact my ability to access quality education and achieve my academic goals. Every donation, no matter the size, brings me one step closer to realizing my dreams. Join me on this educational journey and make a difference in the life of a determined student. Together, we can pave the way for a brighter future!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `phone_number` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`phone_number`, `username`, `password`) VALUES
(112380283, 'hags', 'hagshags'),
(120013703, 'beta', 'betabeta'),
(120013704, 'alpha', 'alphaalp'),
(122138237, 'jesus', 'jesusjes'),
(129320283, 'wara', 'warawara'),
(380220738, 'omega', 'omegaome'),
(380220739, 'Alpha$omeg', 'omegaome'),
(712345678, 'Shila', '$2y$10$g'),
(732134513, 'Jna', '$2y$10$t');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`phone_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_ibfk_1` FOREIGN KEY (`phone_number`) REFERENCES `users` (`phone_number`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
