-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 12:30 PM
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
-- Database: `tmsdup`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_members_tbl`
--

CREATE TABLE `group_members_tbl` (
  `group_members_id` int(11) NOT NULL,
  `team` int(255) NOT NULL,
  `member_id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `gro_mem_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `group_tbl`
--

CREATE TABLE `group_tbl` (
  `group_id` int(255) NOT NULL,
  `team_id` int(255) NOT NULL,
  `team_adviser` int(255) NOT NULL,
  `initial_title` varchar(255) NOT NULL,
  `initial_title_category` varchar(255) NOT NULL,
  `gro_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `del_stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `name`, `email`, `userpassword`, `gender`, `phone`, `type`, `section`, `status`, `del_stat`) VALUES
(1, 'Faculty', 'faculty@faculty.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 'faculty', '', 0, 0),
(2, 'Secretary', 'secretary@secretary.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 'secretary', '', 0, 0),
(3, 'Admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'male', 2147483647, 'admin', '', 0, 0),
(4, 'Gedeon B.  Lumbayan ', 'gedeon@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 0, 0),
(5, 'James Joshua Balbon ', 'jebjeb@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 0, 0),
(6, 'Merlito Salas', 'paps@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 0, 0),
(7, 'Roderick Agol', 'kiking@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R3', 0, 0),
(8, 'Bryan Sabejon', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(9, 'Hanz Valmoria', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(10, 'Justin Libres', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(11, 'Diamond Unos', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(12, 'Junnabelle Labadan ', 'junna@gg.como', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(13, 'Noel Angelou Echem', 'echem@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(14, 'Jayson Bilar', 'son@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(15, 'Linin Che Bagani', 'acao@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 0, 'student', 'R4', 0, 0),
(16, ' Faculty One ', 'f1@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 505984589, 'faculty', NULL, 0, 0),
(17, 'Faculty Two', 'f2@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 8458375, 'faculty', NULL, 0, 0),
(18, 'Faculty Three', 'f3@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 456294857, 'faculty', NULL, 0, 0),
(19, 'Faculty Four', 'f4@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 47526459, 'faculty', NULL, 0, 0),
(20, 'Faculty Five', 'f5@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'male', 9468094, 'faculty', NULL, 0, 0),
(21, 'Faculty Six', 'f6@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'female', 92345783, 'faculty', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_members_tbl`
--
ALTER TABLE `group_members_tbl`
  ADD PRIMARY KEY (`group_members_id`),
  ADD KEY `team` (`team`);

--
-- Indexes for table `group_tbl`
--
ALTER TABLE `group_tbl`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `team_adviser` (`team_adviser`);

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
-- AUTO_INCREMENT for table `group_members_tbl`
--
ALTER TABLE `group_members_tbl`
  MODIFY `group_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_tbl`
--
ALTER TABLE `group_tbl`
  MODIFY `group_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thesis_docu_tbl`
--
ALTER TABLE `thesis_docu_tbl`
  MODIFY `thesis_docu_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `group_members_tbl`
--
ALTER TABLE `group_members_tbl`
  ADD CONSTRAINT `group_members_tbl_ibfk_1` FOREIGN KEY (`team`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `group_tbl`
--
ALTER TABLE `group_tbl`
  ADD CONSTRAINT `group_tbl_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `users_tbl` (`user_id`),
  ADD CONSTRAINT `group_tbl_ibfk_2` FOREIGN KEY (`team_adviser`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `thesis_docu_tbl`
--
ALTER TABLE `thesis_docu_tbl`
  ADD CONSTRAINT `thesis_docu_tbl_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `users_tbl` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
