-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 07:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmsdup_previous`
--

-- --------------------------------------------------------

--
-- Table structure for table `adviser_fields_tbl`
--

CREATE TABLE `adviser_fields_tbl` (
  `adviser_field_id` int(11) NOT NULL,
  `adviser` int(11) NOT NULL,
  `field` char(100) NOT NULL,
  `ad_fld_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adviser_fields_tbl`
--

INSERT INTO `adviser_fields_tbl` (`adviser_field_id`, `adviser`, `field`, `ad_fld_status`) VALUES
(54, 73, 'web development', 0),
(55, 73, 'arduino', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_tbl`
--

CREATE TABLE `group_tbl` (
  `group_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `team_name` char(100) NOT NULL,
  `team_adviser` int(11) NOT NULL,
  `initial_title` varchar(255) NOT NULL,
  `initial_title_category` varchar(255) NOT NULL,
  `gro_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_tbl`
--

INSERT INTO `group_tbl` (`group_id`, `team_id`, `team_name`, `team_adviser`, `initial_title`, `initial_title_category`, `gro_status`) VALUES
(26, 54, 'Roderick Agol Team', 71, 'online construction', 'Arduino', 0),
(28, 58, 'Diamond Unos Team', 73, 'online communication sa buta ug bungol', 'Data Science', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_members_tbl`
--

CREATE TABLE `team_members_tbl` (
  `team_members_id` int(11) NOT NULL,
  `team` int(255) NOT NULL,
  `member_id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `gro_mem_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_members_tbl`
--

INSERT INTO `team_members_tbl` (`team_members_id`, `team`, `member_id`, `role`, `gro_mem_status`) VALUES
(90, 54, 51, 'Project Leader', 54),
(91, 54, 52, 'Financer', 54),
(93, 54, 54, 'Financer', 54),
(94, 54, 53, 'Wifi Librer', 0),
(99, 58, 58, 'Wifi Librer', 58);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_docu_tbl`
--

CREATE TABLE `thesis_docu_tbl` (
  `thesis_docu_id` int(255) NOT NULL,
  `team_id` int(255) NOT NULL,
  `thesis_title` varchar(255) NOT NULL,
  `thesis_category` varchar(255) NOT NULL,
  `th_date_started` varchar(255) NOT NULL,
  `th_date_ended` varchar(255) NOT NULL,
  `th_doc_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `userpassword` varchar(250) NOT NULL,
  `gender` text NOT NULL,
  `phone` int(25) NOT NULL,
  `type` varchar(250) DEFAULT NULL,
  `section` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `set_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `name`, `email`, `userpassword`, `gender`, `phone`, `type`, `section`, `status`, `set_count`) VALUES
(25, 'Secretary', 'secretary@secretary.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 'secretary', '', 0, 0),
(26, 'Admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 'admin', '', 0, 0),
(51, 'Gedeon B.  Lumbayan ', 'gedeon@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 54, NULL),
(52, 'James Joshua Balbon ', 'jebjeb@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 54, NULL),
(53, 'Merlito Salas', 'paps@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 54, NULL),
(54, 'Roderick Agol', 'kiking@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 54, NULL),
(55, 'Bryan Sabejon', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, NULL),
(56, 'Hanz Valmoria', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, NULL),
(57, 'Justin Libres', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, NULL),
(58, 'Diamond Unos', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 58, NULL),
(59, 'Junnabelle Labadan ', 'junna@gg.como', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, NULL),
(60, 'Noel Angelou Echem', 'echem@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, NULL),
(61, 'Jayson Bilar', 'son@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, NULL),
(62, 'Linin Che Bagani', 'acao@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, NULL),
(63, ' Jomar Llevado ', 'f1@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, 3),
(64, 'Anna Fay Edulsa', 'f2@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 0, 'faculty', NULL, 0, NULL),
(65, 'Ulrich Uy', 'f3@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(66, 'Paul Estrera', 'f4@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(67, 'Vince Calo', 'f5@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(68, 'Elon Musk ', 'f6@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(69, 'Mark Zuckerberg ', 'f7@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(70, 'Bill Gates', 'f8@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(71, 'Archie Pachica', 'f9@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(72, 'Jocelyn Garrido', 'f10@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL),
(73, 'Petal May Dal', 'f11@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 0, 'faculty', NULL, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adviser_fields_tbl`
--
ALTER TABLE `adviser_fields_tbl`
  ADD PRIMARY KEY (`adviser_field_id`),
  ADD KEY `adviser` (`adviser`);

--
-- Indexes for table `group_tbl`
--
ALTER TABLE `group_tbl`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `team_adviser` (`team_adviser`);

--
-- Indexes for table `team_members_tbl`
--
ALTER TABLE `team_members_tbl`
  ADD PRIMARY KEY (`team_members_id`),
  ADD KEY `team` (`team`);

--
-- Indexes for table `thesis_docu_tbl`
--
ALTER TABLE `thesis_docu_tbl`
  ADD PRIMARY KEY (`thesis_docu_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adviser_fields_tbl`
--
ALTER TABLE `adviser_fields_tbl`
  MODIFY `adviser_field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `group_tbl`
--
ALTER TABLE `group_tbl`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `team_members_tbl`
--
ALTER TABLE `team_members_tbl`
  MODIFY `team_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `thesis_docu_tbl`
--
ALTER TABLE `thesis_docu_tbl`
  MODIFY `thesis_docu_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adviser_fields_tbl`
--
ALTER TABLE `adviser_fields_tbl`
  ADD CONSTRAINT `adviser_fields_tbl_ibfk_1` FOREIGN KEY (`adviser`) REFERENCES `users_tbl` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `group_tbl`
--
ALTER TABLE `group_tbl`
  ADD CONSTRAINT `group_tbl_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `users_tbl` (`user_id`),
  ADD CONSTRAINT `group_tbl_ibfk_2` FOREIGN KEY (`team_adviser`) REFERENCES `users_tbl` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `team_members_tbl`
--
ALTER TABLE `team_members_tbl`
  ADD CONSTRAINT `team_members_tbl_ibfk_1` FOREIGN KEY (`team`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `thesis_docu_tbl`
--
ALTER TABLE `thesis_docu_tbl`
  ADD CONSTRAINT `thesis_docu_tbl_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `users_tbl` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
