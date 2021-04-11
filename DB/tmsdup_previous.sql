-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 05:37 AM
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
  `adviser_id` int(11) NOT NULL,
  `field` char(100) NOT NULL,
  `adviser_field_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adviser_fields_tbl`
--

INSERT INTO `adviser_fields_tbl` (`adviser_field_id`, `adviser_id`, `field`, `adviser_field_status`) VALUES
(1, 8, 'Arduino', 0),
(2, 8, 'Web Development', 0),
(3, 8, 'Data Science', 0),
(4, 8, 'RPI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_members_tbl`
--

CREATE TABLE `group_members_tbl` (
  `group_members_id` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_member_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `group_tbl`
--

CREATE TABLE `group_tbl` (
  `group_id` int(11) NOT NULL,
  `group_name` char(100) DEFAULT NULL,
  `adviser` int(11) NOT NULL,
  `description` char(100) NOT NULL,
  `group_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_tbl`
--

INSERT INTO `group_tbl` (`group_id`, `group_name`, `adviser`, `description`, `group_status`) VALUES
(54, 'Group 1', 3, '', 0),
(55, 'Group 2', 13, '', 0),
(56, 'Group 3', 4, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `minutes_panels_tbl`
--

CREATE TABLE `minutes_panels_tbl` (
  `minutes_panel_id` int(11) NOT NULL,
  `minutes_id` int(255) NOT NULL,
  `panelist_id` int(255) NOT NULL,
  `minutes_panell_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `minutes_tbl`
--

CREATE TABLE `minutes_tbl` (
  `minutes_id` int(11) NOT NULL,
  `group_id` int(255) NOT NULL,
  `secretary_id` int(255) NOT NULL,
  `adviser_id` int(255) NOT NULL,
  `phase_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `venue` char(100) NOT NULL,
  `general comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phases_tbl`
--

CREATE TABLE `phases_tbl` (
  `phase_id` int(11) NOT NULL,
  `phase_name` char(100) DEFAULT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `passing_score` int(255) NOT NULL,
  `phase_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phases_tbl`
--

INSERT INTO `phases_tbl` (`phase_id`, `phase_name`, `date_start`, `date_end`, `passing_score`, `phase_status`) VALUES
(1, 'Concept Proposal', '0000-00-00', '0000-00-00', 0, 0),
(2, 'Project Proposal', '0000-00-00', '0000-00-00', 0, 0),
(3, 'Project Implementation', '0000-00-00', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `raw_scores_tbl`
--

CREATE TABLE `raw_scores_tbl` (
  `raw_scores_id` int(255) NOT NULL,
  `rubric` int(255) NOT NULL,
  `panel` int(11) NOT NULL,
  `score` int(255) NOT NULL,
  `raw_score_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rubrics_tbl`
--

CREATE TABLE `rubrics_tbl` (
  `rubric_id` int(255) NOT NULL,
  `phase` int(255) NOT NULL,
  `rubric_name` char(100) NOT NULL,
  `max_score` int(255) NOT NULL,
  `min_score` int(255) NOT NULL,
  `parent_rubric_id` int(255) NOT NULL,
  `rubric_type` char(100) NOT NULL,
  `rubric_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedules_tbl`
--

CREATE TABLE `schedules_tbl` (
  `schedule_id` int(11) NOT NULL,
  `group_sc` int(255) NOT NULL,
  `phase_sc` int(255) NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `venue` char(100) NOT NULL,
  `phase_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules_tbl`
--

INSERT INTO `schedules_tbl` (`schedule_id`, `group_sc`, `phase_sc`, `date`, `time_start`, `time_end`, `venue`, `phase_status`) VALUES
(1, 54, 2, '0000-00-00', '00:00:00', '00:00:00', '', 0),
(2, 55, 2, '2021-04-08', '00:20:00', '00:20:00', 'dgfdffg', 0),
(3, 55, 2, '2021-04-09', '00:25:00', '00:25:00', 'gmeet', 0),
(4, 55, 3, '2021-04-02', '01:36:00', '02:37:00', 'ict building', 0),
(5, 54, 3, '2021-02-19', '00:44:00', '01:44:00', 'canteen', 0),
(6, 56, 3, '2020-07-07', '15:03:00', '16:06:00', 'ITB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_documents_tbl`
--

CREATE TABLE `thesis_documents_tbl` (
  `thesis_document_id` int(11) NOT NULL,
  `thesis_id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `type` char(100) NOT NULL,
  `server_directory` char(100) NOT NULL,
  `thesis_document_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis_documents_tbl`
--

INSERT INTO `thesis_documents_tbl` (`thesis_document_id`, `thesis_id`, `name`, `type`, `server_directory`, `thesis_document_status`) VALUES
(12, 1, 'AB277133 (3).docx', '', '', 1),
(13, 1, 'Joemar-S-docxfinal (1) (1).docx', '', '', 1),
(14, 1, 'A8.PNG', '', '', 1),
(15, 1, 'Cisco3_finaltask_steps.docx', '', '', 1),
(16, 1, '3d-illustration-hat-and-diploma-with-books-and-thesis-in-the-background-PECTY6.jpg', '', '', 1),
(17, 1, 'THESIS-MANAGEMENT-SYSTEM.pdf', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_panels_tbl`
--

CREATE TABLE `thesis_panels_tbl` (
  `thesis_panel_id` int(11) NOT NULL,
  `group_ad` int(255) NOT NULL,
  `panelist_id` int(255) NOT NULL,
  `thesis_panel_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis_panels_tbl`
--

INSERT INTO `thesis_panels_tbl` (`thesis_panel_id`, `group_ad`, `panelist_id`, `thesis_panel_status`) VALUES
(2, 54, 7, 0),
(3, 54, 6, 0),
(4, 54, 13, 0),
(5, 54, 12, 0),
(6, 54, 4, 0),
(7, 55, 3, 0),
(8, 55, 6, 0),
(9, 55, 11, 0),
(10, 56, 7, 0),
(11, 56, 8, 0),
(12, 56, 12, 0),
(14, 55, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_phase_tbl`
--

CREATE TABLE `thesis_phase_tbl` (
  `thesis_phase_id` int(11) NOT NULL,
  `thesis_id` int(255) NOT NULL,
  `phase_id` int(255) NOT NULL,
  `thesis_phase_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thesis_tbl`
--

CREATE TABLE `thesis_tbl` (
  `thesis_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `thesis_title` char(100) NOT NULL,
  `thesis_description` char(100) NOT NULL,
  `thesis_status` int(11) NOT NULL,
  `date_started` date NOT NULL,
  `date_ended` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis_tbl`
--

INSERT INTO `thesis_tbl` (`thesis_id`, `group_id`, `thesis_title`, `thesis_description`, `thesis_status`, `date_started`, `date_ended`) VALUES
(1, 54, '', '', 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `userpassword` varchar(250) NOT NULL,
  `type` char(100) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`user_id`, `name`, `username`, `email`, `userpassword`, `type`, `is_active`, `user_status`) VALUES
(1, 'Super Admin', 'superadmin123', 'superadmin@superadmin.com', '202cb962ac59075b964b07152d234b70', 'super admin', 0, 0),
(2, 'Chairman', 'chairman123', 'chairman@chairman.com', '202cb962ac59075b964b07152d234b70', 'chairman', 0, 0),
(3, 'Jomar Llevado', 'llevado123', 'jomarllevado@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(4, 'Anna Fay Edulsa Naïve', 'naive123', 'f2@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(5, 'Ulrich Uy', 'uy123', 'f3@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(6, 'Paul Estrera', 'estrera123', 'estrera@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(7, 'Vince Calo', 'calo123', 'f5@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(8, 'Elon Musk ', 'musk123', 'f6@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(10, 'Bill Gates', 'gates123', 'f8@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(11, 'Archie Pachica', 'pachica123', 'pachica@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(12, 'Jocelyn Garrido', 'garrido123', 'f10@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(13, 'Petal May Dal', 'dal123', 'dal@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'faculty', 0, 0),
(14, 'Gedeon Bahian Lumbayan', 'geds123', 'gedeon@gg.com', '202cb962ac59075b964b07152d234b70', 'student', 1, 0),
(15, 'James Joshua Balbon ', 'jebjeb123', 'jebjeb@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 1, 0),
(16, 'Merlito Salas', 'paps123', 'paps@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(17, 'Roderick Agol', 'kiking123', 'kiking@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(18, 'Bryan Sabejon', 'brybry123', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(19, 'Hanz Valmoria', 'hanz123', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(20, 'Justin Libres', 'jus123', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(21, 'Diamond Unos', 'diamond123', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(22, 'Junnabelle Labadan ', 'junna123', 'junna@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(23, 'Noel Angelou Echem', 'echem123', 'echem@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(24, 'Jayson Bilar', 'son123', 'son@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 1, 0),
(38, 'Secretary', 'secretary123', 'secretary@secretary.com', '202cb962ac59075b964b07152d234b70', 'secretary', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles_tbl`
--

CREATE TABLE `user_profiles_tbl` (
  `profile_id` int(11) NOT NULL,
  `user_profile_id` int(11) NOT NULL,
  `gender` char(100) NOT NULL,
  `contact_number` int(255) NOT NULL,
  `user_profile_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adviser_fields_tbl`
--
ALTER TABLE `adviser_fields_tbl`
  ADD PRIMARY KEY (`adviser_field_id`),
  ADD KEY `adviser_id` (`adviser_id`);

--
-- Indexes for table `group_members_tbl`
--
ALTER TABLE `group_members_tbl`
  ADD PRIMARY KEY (`group_members_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `group` (`group`);

--
-- Indexes for table `group_tbl`
--
ALTER TABLE `group_tbl`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `minutes_panels_tbl`
--
ALTER TABLE `minutes_panels_tbl`
  ADD PRIMARY KEY (`minutes_panel_id`),
  ADD KEY `minutes_id` (`minutes_id`),
  ADD KEY `panelist_id` (`panelist_id`);

--
-- Indexes for table `minutes_tbl`
--
ALTER TABLE `minutes_tbl`
  ADD PRIMARY KEY (`minutes_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `secretary_id` (`secretary_id`),
  ADD KEY `adviser_id` (`adviser_id`),
  ADD KEY `phase_id` (`phase_id`);

--
-- Indexes for table `phases_tbl`
--
ALTER TABLE `phases_tbl`
  ADD PRIMARY KEY (`phase_id`);

--
-- Indexes for table `raw_scores_tbl`
--
ALTER TABLE `raw_scores_tbl`
  ADD PRIMARY KEY (`raw_scores_id`),
  ADD KEY `rubric` (`rubric`),
  ADD KEY `panel` (`panel`);

--
-- Indexes for table `rubrics_tbl`
--
ALTER TABLE `rubrics_tbl`
  ADD PRIMARY KEY (`rubric_id`),
  ADD KEY `phase` (`phase`);

--
-- Indexes for table `schedules_tbl`
--
ALTER TABLE `schedules_tbl`
  ADD PRIMARY KEY (`schedule_id`),
  ADD KEY `group_sc` (`group_sc`),
  ADD KEY `phase_sc` (`phase_sc`);

--
-- Indexes for table `thesis_documents_tbl`
--
ALTER TABLE `thesis_documents_tbl`
  ADD PRIMARY KEY (`thesis_document_id`),
  ADD KEY `thesis_id` (`thesis_id`);

--
-- Indexes for table `thesis_panels_tbl`
--
ALTER TABLE `thesis_panels_tbl`
  ADD PRIMARY KEY (`thesis_panel_id`),
  ADD KEY `group_ad` (`group_ad`),
  ADD KEY `panelist_id` (`panelist_id`);

--
-- Indexes for table `thesis_phase_tbl`
--
ALTER TABLE `thesis_phase_tbl`
  ADD PRIMARY KEY (`thesis_phase_id`),
  ADD KEY `thesis_id` (`thesis_id`),
  ADD KEY `phase_id` (`phase_id`);

--
-- Indexes for table `thesis_tbl`
--
ALTER TABLE `thesis_tbl`
  ADD PRIMARY KEY (`thesis_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_profiles_tbl`
--
ALTER TABLE `user_profiles_tbl`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `user_profile_id` (`user_profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adviser_fields_tbl`
--
ALTER TABLE `adviser_fields_tbl`
  MODIFY `adviser_field_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `group_members_tbl`
--
ALTER TABLE `group_members_tbl`
  MODIFY `group_members_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_tbl`
--
ALTER TABLE `group_tbl`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `minutes_panels_tbl`
--
ALTER TABLE `minutes_panels_tbl`
  MODIFY `minutes_panel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `minutes_tbl`
--
ALTER TABLE `minutes_tbl`
  MODIFY `minutes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phases_tbl`
--
ALTER TABLE `phases_tbl`
  MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `raw_scores_tbl`
--
ALTER TABLE `raw_scores_tbl`
  MODIFY `raw_scores_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rubrics_tbl`
--
ALTER TABLE `rubrics_tbl`
  MODIFY `rubric_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules_tbl`
--
ALTER TABLE `schedules_tbl`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `thesis_documents_tbl`
--
ALTER TABLE `thesis_documents_tbl`
  MODIFY `thesis_document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `thesis_panels_tbl`
--
ALTER TABLE `thesis_panels_tbl`
  MODIFY `thesis_panel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `thesis_phase_tbl`
--
ALTER TABLE `thesis_phase_tbl`
  MODIFY `thesis_phase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thesis_tbl`
--
ALTER TABLE `thesis_tbl`
  MODIFY `thesis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `user_profiles_tbl`
--
ALTER TABLE `user_profiles_tbl`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adviser_fields_tbl`
--
ALTER TABLE `adviser_fields_tbl`
  ADD CONSTRAINT `adviser_fields_tbl_ibfk_1` FOREIGN KEY (`adviser_id`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `group_members_tbl`
--
ALTER TABLE `group_members_tbl`
  ADD CONSTRAINT `group_members_tbl_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `users_tbl` (`user_id`),
  ADD CONSTRAINT `group_members_tbl_ibfk_2` FOREIGN KEY (`group`) REFERENCES `group_tbl` (`group_id`);

--
-- Constraints for table `minutes_panels_tbl`
--
ALTER TABLE `minutes_panels_tbl`
  ADD CONSTRAINT `minutes_panels_tbl_ibfk_1` FOREIGN KEY (`minutes_id`) REFERENCES `minutes_tbl` (`minutes_id`),
  ADD CONSTRAINT `minutes_panels_tbl_ibfk_2` FOREIGN KEY (`panelist_id`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `minutes_tbl`
--
ALTER TABLE `minutes_tbl`
  ADD CONSTRAINT `minutes_tbl_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group_tbl` (`group_id`),
  ADD CONSTRAINT `minutes_tbl_ibfk_2` FOREIGN KEY (`secretary_id`) REFERENCES `users_tbl` (`user_id`),
  ADD CONSTRAINT `minutes_tbl_ibfk_3` FOREIGN KEY (`adviser_id`) REFERENCES `users_tbl` (`user_id`),
  ADD CONSTRAINT `minutes_tbl_ibfk_4` FOREIGN KEY (`phase_id`) REFERENCES `phases_tbl` (`phase_id`);

--
-- Constraints for table `raw_scores_tbl`
--
ALTER TABLE `raw_scores_tbl`
  ADD CONSTRAINT `raw_scores_tbl_ibfk_1` FOREIGN KEY (`rubric`) REFERENCES `rubrics_tbl` (`rubric_id`),
  ADD CONSTRAINT `raw_scores_tbl_ibfk_2` FOREIGN KEY (`panel`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `rubrics_tbl`
--
ALTER TABLE `rubrics_tbl`
  ADD CONSTRAINT `rubrics_tbl_ibfk_1` FOREIGN KEY (`phase`) REFERENCES `phases_tbl` (`phase_id`);

--
-- Constraints for table `schedules_tbl`
--
ALTER TABLE `schedules_tbl`
  ADD CONSTRAINT `schedules_tbl_ibfk_1` FOREIGN KEY (`group_sc`) REFERENCES `group_tbl` (`group_id`),
  ADD CONSTRAINT `schedules_tbl_ibfk_2` FOREIGN KEY (`phase_sc`) REFERENCES `phases_tbl` (`phase_id`);

--
-- Constraints for table `thesis_documents_tbl`
--
ALTER TABLE `thesis_documents_tbl`
  ADD CONSTRAINT `thesis_documents_tbl_ibfk_1` FOREIGN KEY (`thesis_id`) REFERENCES `thesis_tbl` (`thesis_id`);

--
-- Constraints for table `thesis_panels_tbl`
--
ALTER TABLE `thesis_panels_tbl`
  ADD CONSTRAINT `thesis_panels_tbl_ibfk_1` FOREIGN KEY (`group_ad`) REFERENCES `group_tbl` (`group_id`),
  ADD CONSTRAINT `thesis_panels_tbl_ibfk_2` FOREIGN KEY (`panelist_id`) REFERENCES `users_tbl` (`user_id`);

--
-- Constraints for table `thesis_phase_tbl`
--
ALTER TABLE `thesis_phase_tbl`
  ADD CONSTRAINT `thesis_phase_tbl_ibfk_1` FOREIGN KEY (`thesis_id`) REFERENCES `thesis_tbl` (`thesis_id`),
  ADD CONSTRAINT `thesis_phase_tbl_ibfk_2` FOREIGN KEY (`phase_id`) REFERENCES `phases_tbl` (`phase_id`);

--
-- Constraints for table `thesis_tbl`
--
ALTER TABLE `thesis_tbl`
  ADD CONSTRAINT `thesis_tbl_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group_tbl` (`group_id`);

--
-- Constraints for table `user_profiles_tbl`
--
ALTER TABLE `user_profiles_tbl`
  ADD CONSTRAINT `user_profiles_tbl_ibfk_1` FOREIGN KEY (`user_profile_id`) REFERENCES `users_tbl` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
