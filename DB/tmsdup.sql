-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 06:10 AM
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
(1, 8, 'arduino', 0),
(2, 8, 'web development', 0),
(3, 8, 'data science', 0),
(4, 8, 'rpi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_members_tbl`
--

CREATE TABLE `group_members_tbl` (
  `group_members_id` int(11) NOT NULL,
  `group_m` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_member_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_members_tbl`
--

INSERT INTO `group_members_tbl` (`group_members_id`, `group_m`, `member_id`, `group_member_status`) VALUES
(7, 54, 14, 0),
(8, 54, 15, 0),
(9, 54, 17, 0),
(11, 55, 19, 0),
(12, 55, 20, 0),
(13, 55, 21, 0),
(14, 55, 22, 0);

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
(54, 'group 1', 3, '', 0),
(55, 'group 2', 13, '', 0),
(56, 'group 3', 4, '', 0);

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
(1, 'concept proposal', '0000-00-00', '0000-00-00', 0, 0),
(2, 'project proposal', '0000-00-00', '0000-00-00', 0, 0),
(3, 'project implementation', '0000-00-00', '0000-00-00', 0, 0),
(4, 'final manuscript', '0000-00-00', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `raw_scores_tbl`
--

CREATE TABLE `raw_scores_tbl` (
  `raw_scores_id` int(255) NOT NULL,
  `rubric` int(255) NOT NULL,
  `panel` int(11) NOT NULL,
  `group_sc` int(11) NOT NULL,
  `score` int(255) NOT NULL,
  `raw_score_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `raw_scores_tbl`
--

INSERT INTO `raw_scores_tbl` (`raw_scores_id`, `rubric`, `panel`, `group_sc`, `score`, `raw_score_status`) VALUES
(61, 4, 5, 54, 5, 0),
(62, 5, 5, 54, 5, 0),
(63, 6, 5, 54, 5, 0),
(64, 7, 5, 54, 5, 0),
(65, 8, 5, 54, 5, 0),
(66, 4, 5, 54, 5, 0),
(67, 5, 5, 54, 5, 0),
(68, 6, 5, 54, 5, 0),
(69, 7, 5, 54, 5, 0),
(70, 8, 5, 54, 5, 0),
(78, 12, 13, 54, 1, 0),
(79, 13, 13, 54, 1, 0),
(80, 14, 13, 54, 1, 0),
(81, 15, 13, 54, 20, 0),
(82, 16, 13, 54, 5, 0),
(83, 17, 13, 54, 25, 0),
(84, 18, 13, 54, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rubrics_tbl`
--

CREATE TABLE `rubrics_tbl` (
  `rubric_id` int(255) NOT NULL,
  `rubric_phase` int(255) NOT NULL,
  `rubric_name` char(100) NOT NULL,
  `max_score` int(255) NOT NULL,
  `min_score` int(255) NOT NULL,
  `parent_rubric_id` int(255) NOT NULL,
  `rubric_type` char(100) NOT NULL,
  `rubric_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rubrics_tbl`
--

INSERT INTO `rubrics_tbl` (`rubric_id`, `rubric_phase`, `rubric_name`, `max_score`, `min_score`, `parent_rubric_id`, `rubric_type`, `rubric_status`) VALUES
(1, 1, 'Project Concept', 0, 0, 0, '', 0),
(2, 2, 'Project Proposal', 0, 0, 0, '', 0),
(3, 3, 'Project Implementation', 0, 0, 0, '', 0),
(4, 1, 'Research Topic', 0, 0, 1, '', 0),
(5, 1, 'Relevant Literature and Related Existing Application', 0, 0, 1, '', 0),
(6, 1, 'Issues and Gap', 0, 0, 1, '', 0),
(7, 1, 'Possible Solutions/Enhancement and Impact', 0, 0, 1, '', 0),
(8, 1, 'Overall Concept Presentation', 0, 0, 1, '', 0),
(9, 2, 'Project Proposal Manuscript', 0, 0, 2, '', 0),
(10, 2, 'Project Prototype', 0, 0, 2, '', 0),
(11, 2, 'Oral Examination', 0, 0, 2, '', 0),
(12, 2, 'Initial Pages', 0, 0, 9, '', 0),
(13, 2, 'Chapter 1', 0, 0, 9, '', 0),
(14, 2, 'Chapter 2', 0, 0, 9, '', 0),
(15, 2, 'Chapter 3', 0, 0, 9, '', 0),
(16, 2, 'Final Pages', 0, 0, 9, '', 0),
(17, 2, 'Output Consistency', 0, 0, 10, '', 0),
(18, 2, 'Item Delivery', 0, 0, 10, '', 0),
(19, 2, 'Mastery of Subject Matters', 0, 0, 10, '', 0),
(20, 2, 'Idea Presentation and Delivery', 0, 0, 10, '', 0),
(21, 2, 'Responsiveness/Receptiveness/Defense Idea', 0, 0, 10, '', 0),
(22, 3, 'Project Full Blown Manuscript', 0, 0, 3, '', 0),
(23, 3, 'Project Output', 0, 0, 3, '', 0),
(24, 3, 'Oral Examination', 0, 0, 3, '', 0),
(25, 3, 'Initial Pages', 0, 0, 22, '', 0),
(26, 3, 'Chapter 1', 0, 0, 22, '', 0),
(27, 3, 'Chapter 2', 0, 0, 22, '', 0),
(28, 3, 'Chapter 3', 0, 0, 22, '', 0),
(29, 3, 'Chapter 4', 0, 0, 22, '', 0),
(30, 3, 'Chapter 5 and Final Pages', 0, 0, 22, '', 0),
(31, 3, 'Manuscript Mechanics', 0, 0, 22, '', 0),
(32, 3, 'Output Consistency', 0, 0, 23, '', 0),
(33, 3, 'Item Delivery', 0, 0, 23, '', 0),
(34, 3, 'Coding Style', 0, 0, 23, '', 0),
(35, 3, 'Mastery of Subject Matters', 0, 0, 24, '', 0),
(36, 3, 'Idea Presentation and Delivery', 0, 0, 24, '', 0),
(37, 3, 'Responsiveness/Receptiveness/Defense Idea', 0, 0, 24, '', 0);

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
(3, 55, 2, '2021-04-09', '00:25:00', '00:25:00', 'gmeet', 0),
(4, 55, 3, '2021-04-02', '01:36:00', '02:37:00', 'ict building', 0),
(6, 56, 3, '2020-07-07', '15:03:00', '16:06:00', 'ITB', 0);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_documents_tbl`
--

CREATE TABLE `thesis_documents_tbl` (
  `thesis_document_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `type` char(100) NOT NULL,
  `server_directory` char(100) NOT NULL,
  `thesis_document_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis_documents_tbl`
--

INSERT INTO `thesis_documents_tbl` (`thesis_document_id`, `group_id`, `name`, `type`, `server_directory`, `thesis_document_status`) VALUES
(17, 54, 'THESIS-MANAGEMENT-SYSTEM.pdf', 'MANUSCRIPT', '', 1),
(19, 54, 'mysql_output.PNG', 'ERD', '', 1),
(47, 55, 'c9c.PNG', 'ERD', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thesis_panels_tbl`
--

CREATE TABLE `thesis_panels_tbl` (
  `thesis_panel_id` int(11) NOT NULL,
  `group_id` int(255) NOT NULL,
  `panelist_id` int(255) NOT NULL,
  `thesis_panel_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis_panels_tbl`
--

INSERT INTO `thesis_panels_tbl` (`thesis_panel_id`, `group_id`, `panelist_id`, `thesis_panel_status`) VALUES
(27, 54, 11, 0);

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

--
-- Dumping data for table `thesis_phase_tbl`
--

INSERT INTO `thesis_phase_tbl` (`thesis_phase_id`, `thesis_id`, `phase_id`, `thesis_phase_status`) VALUES
(1, 1, 1, 1),
(3, 1, 2, 0),
(4, 1, 3, 0),
(5, 2, 1, 0),
(6, 2, 2, 1),
(7, 2, 3, 0);

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
(1, 54, 'Thesis Management System', '', 0, '0000-00-00', '0000-00-00'),
(2, 55, 'POS', '', 0, '0000-00-00', '0000-00-00'),
(52, 56, 'asd', '', 0, '0000-00-00', '0000-00-00'),
(55, 56, 'test test test', '', 0, '0000-00-00', '0000-00-00'),
(60, 56, 'test', '', 0, '0000-00-00', '0000-00-00'),
(69, 55, 'testing hanz', 'ok pa sa alryt ni', 0, '0000-00-00', '0000-00-00');

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
(14, 'Gedeon Bahian Lumbayan', 'geds123', 'geds@gg.com', '202cb962ac59075b964b07152d234b70', 'student', 0, 54),
(15, 'James Joshua Balbon ', 'jebjeb123', 'jebjeb@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 54),
(17, 'Roderick Agol', 'kiking123', 'kiking@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 54),
(18, 'Bryan Sabejon', 'brybry123', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(19, 'Hanz Valmoria', 'hanz123', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 55),
(20, 'Justin Libres', 'jus123', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 55),
(21, 'Diamond Unos', 'diamond123', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 55),
(22, 'Junnabelle Labadan ', 'junna123', 'junna@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 55),
(23, 'Noel Angelou Echem', 'echem123', 'echem@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(24, 'Jayson Bilar', 'son123', 'son@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(38, 'Secretary', 'secretary123', 'secretary@secretary.com', '202cb962ac59075b964b07152d234b70', 'secretary', 0, 0),
(67, 'Bryan Sabejon', 'brybry123', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(68, 'Hanz Valmoria', 'hanz123', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(69, 'Justin Libres', 'jus123', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(70, 'Diamond Unos', 'diamond123', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(71, 'Junnabelle Labadan ', 'junna123', 'junna@gg.como', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(73, 'Jayson Bilar', 'son123', 'son@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(74, 'Linin Che Bagani', 'acao123', 'acao@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(79, 'Bryan Sabejon', 'brybry123', 'brybry@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(80, 'Hanz Valmoria', 'hanz123', 'hanz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(81, 'Justin Libres', 'jus123', 'jus@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(82, 'Diamond Unos', 'diamond123', 'diamond@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(83, 'Junnabelle Labadan ', 'junna123', 'junna@gg.como', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(85, 'Jayson Bilar', 'son123', 'son@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(86, 'Linin Che Bagani', 'acao123', 'acao@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(87, 'Pedro Miles Aldeza', 'peds123', 'peds@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(88, 'Denzel Lanzaderas', 'denz123', 'denz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(89, 'Gladys Tagsip', 'glads123', 'glads@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(90, 'Danielle Olive Anne Agustin', 'dans123', 'dans@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(91, 'Rachel Ana Dantes', 'rach123', 'rach@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(92, 'Adrian Karlo Siangco', 'adrian123', 'adrian@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(93, 'Rey Patlunag', 'rey123', 'rey@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(94, 'Geraldine Aruta', 'geraldine123', 'geraldine@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(95, 'Jay Clark Bermudez', 'jay123', 'jay@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(96, 'Allan Jay Amper', 'al123', 'al@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(97, 'Japhet Duapa', 'japs123', 'japs@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(98, 'Mes Pollen Roa', 'mes123', 'mes@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(99, 'Angellan Fe Diaz', 'ange123', 'ange@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(100, 'Aster Jone Veloz', 'ast123', 'ast@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(101, 'Carl Vincent Depaz', 'carl123', 'carl@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(102, 'Christian Dave Eugenio', 'chris123', 'chris@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(103, 'James Noe Calonia', 'james123', 'james@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(104, 'Van Gilbert Tuballa', 'van123', 'van@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(105, 'Neco Angello Nicdao', 'nec123', 'nec@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(106, 'Wesley Jun Munez', 'wes123', 'wes@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(107, 'Seth Bajao', 'seth123', 'seth@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(108, 'Jinomel Fajardo', 'jin123', 'jin@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(109, 'Jyzryll Llwyz Sumicad', 'jyz123', 'jyz@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(110, 'Rijie Ladao', 'rij123', 'rij@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(111, 'Cindy Jalop', 'cin123', 'cin@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(112, 'Jovane Rey Acenas ', 'jov123', 'jov@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(113, 'Louraline Lugtu', 'lou123', 'lou@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(114, 'Threcia Ann Laurente', 'threcia123', 'threcia@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(115, 'Kristelle Angelique Catapang ', 'kris123', 'kris@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(116, 'Mary Joy Bailio', 'maryjoy123', 'maryjoy@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(117, 'Jubilee Bation', 'jub123', 'jub@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(118, 'Armando Naparan Jr.', 'arm123', 'arm@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(119, 'Paul Senara', 'paul123', 'paul@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(120, 'Bituin Macrohon', 'bit123', 'bit@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(121, 'Jason Fuentes Paica', 'jason123', 'jason@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(122, 'Peter Babia', 'peter123', 'peter@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(123, 'Ken Vincent  Jemenia', 'ken123', 'ken@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(124, 'Jim Markino Lao', 'jim123', 'jim@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(125, 'Jennifer Mana', 'jen123', 'jen@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(126, 'Kynt Lemuel Sayre', 'kynt123', 'kynt@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(127, 'Florelene Suganob ', 'flor123', 'flor@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(128, 'Rommel Fabella', 'rom123', 'rom@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(129, 'Prince Collin Salvador', 'prince123', 'prince@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(130, 'Rhea Fe Cahanap ', 'rhea123', 'rhea@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(131, 'Val Saliring ', 'val123', 'val@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(132, 'Kevin Calapiz', 'kev123', 'kev@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(133, 'Michelle Katipunan', 'mich123', 'mich@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(134, 'Jerel Roi Rotoras', 'jerel123', 'jerel@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(135, 'Clint Dello  Cardenas ', 'clint123', 'clint@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(136, 'Richie Ann Lourene Villar', 'rich123', 'rich@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(137, 'Prisy Aceron', 'prisy123', 'prisy@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(138, 'Kristine Dumdum', 'kristine123', 'kristine@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(139, 'Shaina Mae Montareal', 'shai123', 'shai@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(140, 'Christian Daohog', 'christian123', 'christian@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(141, 'Kristene Mae Aganap', 'kristenemae123', 'kristenemae@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(142, 'Juniel Beron', 'jun123', 'jun@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(143, 'Nathaniel John Casalan ', 'nath123', 'nath@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(144, 'Lovely Joy Janio', 'love123', 'love@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(145, 'Gabamel Lubrico', 'gab123', 'gab@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(146, 'April Rose Katipunan', 'april123', 'april@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(147, 'Pauline May Bacal', 'pauline123', 'pauline@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(148, 'Margie Escol', 'margie123', 'margie@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(149, 'Richelyn Gallogo', 'richelyn123', 'richelyn@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(150, 'Allyssa Gutierrez ', 'allysa123', 'allysa@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(151, 'Oliver Vincent Fernandico', 'olive123', 'olive@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(152, 'Nida Mandawe', 'nida123', 'nida@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(153, 'Analie Pacana', 'ana123', 'ana@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(154, 'Regina Andrea Sanico', 'reg123', 'reg@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(155, 'Paolo Joseph Moreno', 'paolo123', 'paolo@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(156, 'Mark Vincent Achacoso', 'mark123', 'mark@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(157, 'Mary Nacua', 'mary123', 'mary@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(158, 'Julieren Roa', 'jul123', 'jul@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(159, 'Al Zoren Saraus', 'al123', 'al@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(160, 'Mary Antonette Roxas ', 'maryant123', 'maryant@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(161, 'Leoner Vincent Cubillan ', 'leo123', 'leo@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(162, 'Juven Gabe', 'juven123', 'juven@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(163, 'Jessel Mae Parpan', 'jessel123', 'jessel@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(164, 'April Rose Legaspi', 'aprilrose123', 'aprilrose@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(165, 'Christopher Pabalete ', 'christopher123', 'christopher@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(166, 'Jollo Erbito', 'jollo123', 'jollo@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(167, 'Roderic Constantino', 'rod123', 'rod@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(168, 'Jomaricsan Degenion', 'jom123', 'jom@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(169, 'Nikko Jann Daguplo', 'nik123', 'nik@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(170, 'Jessa Montejo', 'jess123', 'jess@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(171, 'Vincent Louie Arrabis ', 'vince123', 'vince@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(172, 'Allen Dave Mabolo', 'allen123', 'allen@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(173, 'Eunice Marie Morondoz', 'eunice123', 'eunice@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(174, 'Shane Mar Quiblat', 'shane123', 'shane@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(175, 'Dan David Abanilla', 'dan123', 'dan@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(176, 'Patrecia Abug ', 'pat123', 'pat@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(177, 'Nica Gabutan', 'nica123', 'nica@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(178, 'Laila Matin-ao', 'laila123', 'laila@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(179, 'Kaolin Allyssa Delmonte ', 'kao123', 'kao@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(180, 'Showbee Emnas ', 'show123', 'show@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(181, 'Christian Vince Borromeo', 'chrisvince123', 'chrisvince@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(182, 'Richard Lapiz ', 'richard123', 'richard@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(183, 'Karl Malone Obsioma', 'karlmalone123pasar', 'karlmalone@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(184, 'Richfield James Villanueva ', 'richfield123', 'richfield@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(185, 'Roannie Montero ', 'roan123', 'roan@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(186, 'Mary Joy  Pealez', 'marypelaez123', 'marypelaez@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(187, 'Rejan Vincent Onting', 'rej123', 'rej@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(188, 'Leo Carlie  Abato', 'leocarl123', 'leocarl@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(189, 'Adriane Jimenez ', 'adriane123', 'adriane@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(190, ' Richie Gatela', 'richie123', 'richie@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(191, 'John Paul Llido', 'john123', 'john@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(192, 'Dhan Negparanon ', 'dhan123', 'dhan@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(193, 'Annie Commendador', 'annie123', 'annie@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(194, 'Bryan Tabaloc ', 'bryan123', 'bryan@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(195, 'Warren Louie Banjao', 'warren123', 'warren@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(196, 'Archimedes Bunga', 'arch123', 'arch@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(197, 'Vegie Sison ', 'vegie123', 'vegie@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(198, 'Marion Rosete', 'marion123', 'marion@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(199, 'Charles Llagas ', 'charles123', 'charles@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(200, 'Joevie Panuncia ', 'joev123', 'joev@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(201, 'Karl Lloyd Ignalig ', 'karllloyd123', 'karllloyd@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(202, 'Trezia Mae Gacus ', 'trez123', 'trez@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(203, 'Quennie Macapundag', 'quen123', 'quen@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(204, 'April Ann Lopez', 'aprilann123', 'aprilann@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(205, 'Abdul Mohaimen Lomabao', 'abdul123', 'abdul@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(206, 'Paulin Quilon', 'paulin1235', 'paulin@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(207, 'Sherwin Pimentel', 'sher1234', 'sher@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0),
(208, 'Giovanni Maestrado', 'gio98765', 'gio@gg.com', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 0, 0);

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
  ADD KEY `group_m` (`group_m`);

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
  ADD KEY `panel` (`panel`),
  ADD KEY `group_sc` (`group_sc`);

--
-- Indexes for table `rubrics_tbl`
--
ALTER TABLE `rubrics_tbl`
  ADD PRIMARY KEY (`rubric_id`),
  ADD KEY `rubric_phase` (`rubric_phase`);

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
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `thesis_panels_tbl`
--
ALTER TABLE `thesis_panels_tbl`
  ADD PRIMARY KEY (`thesis_panel_id`),
  ADD KEY `group_id` (`group_id`),
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
  MODIFY `group_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `group_tbl`
--
ALTER TABLE `group_tbl`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
  MODIFY `phase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `raw_scores_tbl`
--
ALTER TABLE `raw_scores_tbl`
  MODIFY `raw_scores_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `rubrics_tbl`
--
ALTER TABLE `rubrics_tbl`
  MODIFY `rubric_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `schedules_tbl`
--
ALTER TABLE `schedules_tbl`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `thesis_documents_tbl`
--
ALTER TABLE `thesis_documents_tbl`
  MODIFY `thesis_document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `thesis_panels_tbl`
--
ALTER TABLE `thesis_panels_tbl`
  MODIFY `thesis_panel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `thesis_phase_tbl`
--
ALTER TABLE `thesis_phase_tbl`
  MODIFY `thesis_phase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `thesis_tbl`
--
ALTER TABLE `thesis_tbl`
  MODIFY `thesis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

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
  ADD CONSTRAINT `group_members_tbl_ibfk_2` FOREIGN KEY (`group_m`) REFERENCES `group_tbl` (`group_id`);

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
  ADD CONSTRAINT `raw_scores_tbl_ibfk_2` FOREIGN KEY (`panel`) REFERENCES `users_tbl` (`user_id`),
  ADD CONSTRAINT `raw_scores_tbl_ibfk_3` FOREIGN KEY (`group_sc`) REFERENCES `group_tbl` (`group_id`);

--
-- Constraints for table `rubrics_tbl`
--
ALTER TABLE `rubrics_tbl`
  ADD CONSTRAINT `rubrics_tbl_ibfk_1` FOREIGN KEY (`rubric_phase`) REFERENCES `phases_tbl` (`phase_id`);

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
  ADD CONSTRAINT `thesis_documents_tbl_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group_tbl` (`group_id`);

--
-- Constraints for table `thesis_panels_tbl`
--
ALTER TABLE `thesis_panels_tbl`
  ADD CONSTRAINT `thesis_panels_tbl_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group_tbl` (`group_id`),
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
