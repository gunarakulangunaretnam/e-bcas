-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 02:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcas_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_number` int(100) NOT NULL,
  `start_date` varchar(60) NOT NULL,
  `end_date` varchar(60) NOT NULL,
  `course_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_number`, `start_date`, `end_date`, `course_id`) VALUES
(1, '565', '656', 11),
(1, '2019-5-31', '2023-08-07', 8),
(2, '2019-5-31', '2022-07-05', 8),
(3, '2019-5-31', '2020-05-04', 8),
(1, '2019-5-31', '2021-08-10', 9),
(2, '2019-5-31', '2023-08-07', 9),
(3, '2019-5-31', '2021-08-10', 9),
(1, '2019-5-31', '2020-05-06', 10),
(2, '2019-5-31', '2020-01-02', 10),
(3, '2019-5-31', '2020-05-06', 10),
(2, '2019-5-31', '2020-01-02', 11),
(3, '2019-5-31', '2021-08-10', 11),
(4, '2019-5-31', '2020-05-04', 11),
(1, '2019-5-31', '2023-08-07', 12),
(2, '2019-5-31', '2020-05-06', 12),
(3, '2019-5-31', '2021-08-10', 12),
(1, '2019-5-31', '2022-07-05', 13),
(2, '2019-5-31', '2020-05-06', 13),
(3, '2019-5-31', '2020-05-04', 13),
(3, '2019-5-31', '2023-08-07', 15),
(1, '2019-5-31', '2020-05-06', 16),
(2, '2019-5-31', '2020-05-06', 16),
(3, '2019-5-31', '2022-07-05', 16);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(100) NOT NULL,
  `course_short_title` varchar(30) NOT NULL,
  `course_full_title` varchar(300) NOT NULL,
  `course_type` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `total_payment` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_short_title`, `course_full_title`, `course_type`, `duration`, `total_payment`) VALUES
(14, ' Dip Eng', ' Diploma in English', 'Full-Time', '18 Months', 25000),
(15, ' HND Eng', ' HND in English', 'Part-Time', ' 12 Months', 60000),
(16, ' Access', ' Access', 'Full-Time', ' 06 Months ', 400000),
(17, 'CSD', 'Computer Science', 'Full-Time', '24 Months', 350000),
(18, 'QS', 'Quantity Surveying', 'Part-Time', '24 Months', 270000),
(19, 'BM', 'Business Management', 'Full-Time', '18 Months', 400000),
(20, 'LAW', 'Law ', 'Part-Time', '24 Months', 1000000),
(21, 'CATMPS', 'CATMPS', 'Full-Time', '08 Months', 200000),
(22, 'AI', 'Artificial Intelligence', 'Part-Time', '36 Months', 1200000),
(23, 'SE', 'Software Engineering ', 'Full-Time', '24 Months', 450000),
(24, 'NET', 'Network Engineering', 'Part-Time', '24 Months', 450000),
(25, 'CS', 'Cyber Security', 'Full-Time', '24 Months', 500000),
(26, 'Dip Eng', 'Diploma in English', 'Full-Time', '06 Months', 25000),
(27, 'HND Eng', 'HND in English', 'Part-Time', '12 Months', 60000),
(28, 'Access', 'Access', 'Full-Time', '06 Months ', 80000),
(29, 'CSD', 'Computer Science', 'Full-Time', '24 Months', 350000),
(30, 'QS', 'Quantity Surveying', 'Part-Time', '24 Months', 270000),
(31, 'BM', 'Business Management', 'Full-Time', '18 Months', 400000),
(32, 'LAW', 'Law ', 'Part-Time', '24 Months', 1000000),
(33, 'CATMPS', 'CATMPS', 'Full-Time', '08 Months', 200000),
(34, 'AI', 'Artificial Intelligence', 'Part-Time', '36 Months', 1200000),
(35, 'SE', 'Software Engineering ', 'Full-Time', '24 Months', 450000),
(36, 'NET', 'Network Engineering', 'Part-Time', '24 Months', 450000),
(37, 'CS', 'Cyber Security', 'Full-Time', '24 Months', 500000),
(38, 'Dip Eng', 'Diploma in English', 'Full-Time', '06 Months', 25000),
(39, 'HND Eng', 'HND in English', 'Part-Time', '12 Months', 60000),
(40, 'CSD', 'Computer Science', 'Full-Time', '24 Months', 350000),
(41, 'QS', 'Quantity Surveying', 'Part-Time', '24 Months', 270000),
(42, 'BM', 'Business Management', 'Full-Time', '18 Months', 400000),
(43, 'LAW', 'Law ', 'Part-Time', '24 Months', 1000000),
(44, 'CATMPS', 'CATMPS', 'Full-Time', '08 Months', 200000),
(45, 'AI', 'Artificial Intelligence', 'Part-Time', '36 Months', 1200000),
(46, 'SE', 'Software Engineering ', 'Full-Time', '24 Months', 450000),
(47, 'NET', 'Network Engineering', 'Part-Time', '24 Months', 450000),
(48, 'CS', 'Cyber Security', 'Full-Time', '24 Months', 500000),
(49, 'Dip Eng', 'Diploma in English', 'Full-Time', '06 Months', 25000),
(50, 'HND Eng', 'HND in English', 'Part-Time', '12 Months', 60000),
(51, 'Access', 'Access', 'Full-Time', '06 Months ', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(100) NOT NULL,
  `department_short_name` varchar(60) NOT NULL,
  `department_full_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_short_name`, `department_full_name`) VALUES
(11, 'RD', 'Research and Development'),
(12, 'AI', 'Artificial Intelligence'),
(13, 'QS', 'Quantity Surveying'),
(14, 'BI', 'Business Intelligence'),
(15, 'BM', 'Business Management'),
(16, 'AF', 'Accounting and Finance.'),
(17, 'CI', 'Control of Inventory'),
(18, 'MA', 'Marketing and Advertising'),
(19, 'PI', 'Production and Inventory'),
(20, 'GS', 'Growing Your Sales'),
(21, 'CA', 'Computer Architecture'),
(22, 'CSD', 'Computer Science'),
(23, 'Mar', 'Marketing'),
(24, 'HR', 'Human Resources'),
(25, 'SE', 'Software Engineering'),
(26, 'NET', 'Network Engineering'),
(27, 'RD', 'Research and Development'),
(28, 'AI', 'Artificial Intelligence'),
(29, 'QS', 'Quantity Surveying'),
(30, 'BI', 'Business Intelligence'),
(31, 'BM', 'Business Management'),
(32, 'AF', 'Accounting and Finance.'),
(33, 'CI', 'Control of Inventory'),
(34, 'MA', 'Marketing and Advertising'),
(35, 'PI', 'Production and Inventory'),
(36, 'GS', 'Growing Your Sales'),
(37, 'CA', 'Computer Architecture');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `module_id` int(100) NOT NULL,
  `module_code` varchar(100) NOT NULL,
  `module_name` varchar(300) NOT NULL,
  `module_level` varchar(30) NOT NULL,
  `module_credit` int(100) NOT NULL,
  `lecturing_hours` int(100) NOT NULL,
  `course_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`module_id`, `module_code`, `module_name`, `module_level`, `module_credit`, `lecturing_hours`, `course_id`) VALUES
(11, '8781', 'Administrative law', 'Level-04', 115, 100, 153),
(12, '5300', 'Advertising law', 'Level-04', 135, 50, 153),
(13, '9654', 'Admiralty law', 'Level-04', 105, 100, 153),
(14, '9631', 'Agency law', 'Level-05', 160, 50, 153),
(15, '3936', 'Alcohol law', 'Level-05', 175, 70, 153),
(16, '9133', 'Alternative dispute resolution', 'Level-05', 130, 90, 153),
(17, '6091', 'Animal law', 'Level-05', 90, 70, 153),
(18, '8485', 'Antitrust law ', 'Level-05', 80, 100, 153),
(19, '4933', 'Appellate practice', 'Level-05', 75, 110, 153),
(20, '8995', 'Art law ', 'Level-04', 80, 40, 153),
(21, '4736', 'Aviation law', 'Level-05', 145, 50, 153),
(22, '3722', 'Banking law', 'Level-04', 150, 60, 153),
(23, '4231', 'Bankruptcy law ', 'Level-05', 80, 90, 153),
(24, '1468', 'Bioethics', 'Level-05', 160, 60, 153),
(25, '3313', 'Business law', 'Level-04', 160, 110, 153),
(26, '2671', 'Business organizations law ', 'Level-04', 120, 110, 153),
(27, '2339', 'Civil law or common law', 'Level-05', 85, 110, 153),
(28, '2161', 'Class action litigation/Mass tort litigation', 'Level-04', 95, 70, 153),
(29, '5989', 'Common Interest Development law', 'Level-05', 165, 90, 153),
(30, '9969', 'Communications law', 'Level-05', 75, 110, 153),
(31, '8524', 'Computer law', 'Level-04', 65, 50, 153),
(32, '6979', 'Competition law', 'Level-05', 165, 70, 153),
(33, '8526', 'Conflict of law ', 'Level-05', 65, 80, 153),
(34, '1995', 'Constitutional law', 'Level-04', 130, 60, 153),
(35, '3784', 'Construction law', 'Level-05', 160, 80, 153),
(36, '7197', 'Consumer law', 'Level-04', 110, 90, 153),
(37, '8621', 'Contract law', 'Level-05', 110, 90, 153),
(38, '2636', 'Copyright law', 'Level-04', 60, 110, 153),
(39, '9429', 'Corporate law ', 'Level-05', 60, 70, 153),
(40, '9007', 'Criminal law', 'Level-05', 160, 50, 153),
(41, '5659', 'Cryptography law', 'Level-04', 110, 100, 154),
(42, '7590', 'Cultural property law', 'Level-04', 120, 70, 154),
(43, '1771', 'Custom (law)', 'Level-04', 75, 50, 154),
(44, '8650', 'Cyber law', 'Level-05', 140, 100, 154),
(45, '5220', 'Defamation', 'Level-04', 105, 40, 154),
(46, '1942', 'Derivatives and futures law', 'Level-05', 60, 50, 154),
(47, '1981', 'Drug control law', 'Level-04', 165, 70, 154),
(48, '2397', 'Ecclesiastical law (or Canon law)', 'Level-04', 130, 60, 154),
(49, '3238', 'Elder law', 'Level-05', 130, 90, 154),
(50, '9201', 'Employee benefits law (ERISA)', 'Level-05', 135, 90, 154),
(51, '2171', 'Employment law', 'Level-05', 175, 90, 154),
(52, '4467', 'Energy law', 'Level-04', 90, 40, 154),
(53, '5564', 'Entertainment law', 'Level-04', 165, 80, 154),
(54, '4839', 'Environmental law', 'Level-04', 70, 40, 154),
(55, '6660', 'Equipment finance law', 'Level-04', 80, 100, 154),
(56, '4654', 'Family law', 'Level-05', 105, 100, 154),
(57, '9339', 'FDA law', 'Level-05', 80, 90, 154),
(58, '4768', 'Financial services regulation law', 'Level-04', 120, 100, 154),
(59, '4718', 'Artificial Creativity', 'Level-05', 145, 40, 155),
(60, '4068', 'Artificial life', 'Level-04', 70, 100, 155),
(61, '9438', 'Automated planning and scheduling', 'Level-05', 80, 70, 155),
(62, '2022', 'Automated reasoning', 'Level-04', 145, 50, 155),
(63, '2916', 'Automation', 'Level-04', 90, 60, 155),
(64, '9303', 'Automatic target recognition', 'Level-04', 75, 50, 155),
(65, '1034', 'Biologically inspired computing', 'Level-05', 145, 40, 155),
(66, '9235', 'Computer Audition', 'Level-05', 135, 50, 155),
(67, '2177', 'Speech recognition', 'Level-04', 90, 40, 155),
(68, '7310', 'Speaker recognition', 'Level-04', 95, 40, 155),
(69, '6291', 'Computer vision', 'Level-05', 140, 100, 155),
(70, '3357', 'Image processing', 'Level-04', 170, 90, 155),
(71, '2776', 'Intelligent word recognition', 'Level-05', 130, 80, 155),
(72, '1601', 'Object recognition', 'Level-04', 130, 90, 155),
(73, '7366', 'Optical mark recognition', 'Level-05', 110, 100, 155),
(74, '2652', 'Handwriting recognition', 'Level-04', 160, 50, 155),
(75, '8682', 'Optical character recognition', 'Level-04', 145, 100, 155),
(76, '9372', 'Automatic number plate recognition', 'Level-05', 100, 40, 155),
(77, '3502', 'Facial recognition systems', 'Level-05', 65, 40, 155),
(78, '3656', 'Silent speech interface', 'Level-04', 150, 110, 155),
(79, '6912', 'Diagnosis', 'Level-05', 85, 80, 155),
(80, '9949', 'Expert system', 'Level-04', 165, 110, 155),
(81, '8462', 'Decision support system', 'Level-05', 70, 80, 155),
(82, '3334', 'Clinical decision support system', 'Level-05', 90, 110, 155),
(83, '8826', 'Game artificial intelligence', 'Level-05', 120, 50, 155),
(84, '9360', 'Computer game bot', 'Level-04', 175, 60, 155),
(85, '9400', 'Video game AI', 'Level-04', 110, 110, 155),
(86, '2432', 'Computer chess', 'Level-05', 80, 80, 155),
(87, '9717', 'Computer Go', 'Level-04', 135, 50, 155),
(88, '5540', 'General game playing', 'Level-05', 80, 100, 155),
(89, '4318', 'General video game playing ', 'Level-04', 115, 60, 155),
(90, '5158', 'Game theory ', 'Level-05', 100, 60, 155),
(91, '5278', 'Hybrid intelligent system ', 'Level-05', 110, 40, 155),
(92, '2787', 'Intelligent agent ', 'Level-04', 120, 110, 155),
(93, '8564', 'Agent architecture ', 'Level-04', 165, 40, 155),
(94, '5392', 'Cognitive architecture ', 'Level-05', 65, 100, 155),
(95, '3923', 'Intelligent control ', 'Level-05', 60, 80, 155),
(96, '3380', 'Knowledge management ', 'Level-05', 155, 100, 155),
(97, '1155', 'Concept mining ', 'Level-05', 60, 90, 155),
(98, '8314', 'Data mining ', 'Level-04', 130, 110, 155),
(99, '1182', 'Text mining ', 'Level-04', 160, 60, 155),
(100, '2302', 'Process mining ', 'Level-05', 105, 110, 155),
(101, '8438', 'E-mail spam filtering ', 'Level-05', 165, 70, 155),
(102, '8427', 'Information extraction ', 'Level-05', 100, 100, 155),
(103, '6085', 'Activity recognition ', 'Level-05', 150, 100, 155),
(104, '4594', 'Image retrieval ', 'Level-04', 80, 80, 155),
(105, '8504', 'Automatic image annotation ?', 'Level-04', 145, 70, 155),
(106, '3703', 'Named-entity extraction ?', 'Level-05', 130, 60, 155),
(107, '2214', 'Coreference resolution ?', 'Level-05', 75, 90, 155),
(108, '4969', 'Named-entity recognition ?', 'Level-05', 145, 90, 155),
(109, '9725', 'Relationship extraction ?', 'Level-05', 175, 80, 155),
(110, '1104', 'Terminology extraction ?', 'Level-05', 75, 70, 155),
(111, '3012', 'Knowledge representation ?', 'Level-04', 65, 60, 155),
(112, '6111', 'Semantic Web ?', 'Level-05', 175, 70, 155),
(113, '4246', 'Machine learning ?', 'Level-04', 145, 90, 155),
(114, '4041', 'Constrained Conditional Models ?', 'Level-05', 100, 50, 155),
(115, '5272', 'Deep learning ?', 'Level-05', 75, 80, 155),
(116, '8212', 'Neural modeling fields ?', 'Level-04', 160, 90, 155),
(117, '7246', 'Natural language processing ?', 'Level-05', 170, 60, 155),
(118, '1591', 'Chatterbots', 'Level-05', 120, 50, 155),
(119, '8428', 'Language identification', 'Level-04', 80, 40, 155),
(120, '4123', 'Natural language user interface', 'Level-05', 175, 110, 155),
(121, '8772', 'Natural language understanding', 'Level-05', 125, 60, 155),
(122, '4574', 'Machine translation', 'Level-05', 85, 100, 155),
(123, '4171', 'Statistical semantics', 'Level-05', 75, 70, 155),
(124, '3562', 'Question answering', 'Level-05', 165, 70, 155),
(125, '2112', 'Semantic translation', 'Level-05', 90, 40, 155),
(126, '3801', 'Nonlinear control', 'Level-04', 80, 70, 155),
(127, '5258', 'Pattern recognition', 'Level-05', 115, 50, 155),
(128, '9710', 'Optical character recognition', 'Level-04', 145, 90, 155),
(129, '9753', 'Handwriting recognition', 'Level-04', 140, 60, 155),
(130, '7633', 'Speech recognition', 'Level-05', 60, 70, 155),
(131, '1770', 'Face recognition', 'Level-04', 60, 70, 155),
(132, '9687', 'Robotics', 'Level-05', 175, 60, 155),
(133, '3441', 'Behavior-based robotics', 'Level-04', 125, 100, 155),
(134, '7388', 'Cognitive', 'Level-05', 175, 90, 155),
(135, '4559', 'Cybernetics', 'Level-04', 65, 70, 155),
(136, '8568', 'Developmental robotics', 'Level-05', 120, 110, 155),
(137, '1059', 'Epigenetic robotics', 'Level-05', 160, 40, 155),
(138, '7939', 'Evolutionary robotics', 'Level-05', 165, 50, 155),
(139, '4829', 'Speech generating device', 'Level-05', 70, 110, 155),
(140, '2549', 'Strategic planning ', 'Level-05', 100, 60, 155),
(141, '4517', 'Vehicle infrastructure integration', 'Level-05', 105, 70, 155),
(142, '9606', 'Virtual Intelligence', 'Level-04', 80, 90, 155),
(143, '9286', 'Virtual reality', 'Level-05', 60, 110, 155),
(144, '1120', 'Introduction to Software Engineering', 'Level-05', 140, 70, 156),
(145, '4587', 'Software Requirements & Modeling', 'Level-04', 130, 110, 156),
(146, '8770', 'Software Design & Construction', 'Level-05', 65, 50, 156),
(147, '5284', 'Software Testing, Verification, and Validation', 'Level-05', 140, 60, 156),
(148, '4826', 'Software Quality Assurance', 'Level-05', 105, 90, 156),
(149, '3947', 'Software Project Management', 'Level-05', 115, 70, 156),
(150, '1385', 'Software Configuration Management', 'Level-05', 145, 100, 156),
(151, '5707', 'CS Requirements:[3]', 'Level-05', 65, 70, 156),
(152, '5919', 'Fundamentals of Programming', 'Level-05', 125, 50, 156),
(153, '5318', 'Data Structures', 'Level-05', 75, 50, 156),
(154, '8154', 'Introduction to Algorithms', 'Level-04', 125, 70, 156),
(155, '3545', 'Operating Systems', 'Level-04', 135, 100, 156),
(156, '1708', 'Computer Architecture', 'Level-04', 125, 50, 156),
(157, '7640', 'Programming Languages', 'Level-05', 135, 40, 156),
(158, '9028', 'Human - Computer Interaction', 'Level-04', 65, 70, 156),
(159, '1447', 'Discrete Mathematics', 'Level-04', 115, 90, 156),
(160, '2979', 'Database Designing', 'Level-04', 145, 80, 156),
(161, '9730', 'Network Administrator', 'Level-04', 100, 60, 157),
(162, '2835', 'Network Engineer', 'Level-04', 100, 50, 157),
(163, '9385', 'Network Designer', 'Level-05', 160, 40, 157),
(164, '4893', 'Database Engineer', 'Level-05', 135, 60, 157),
(165, '8935', 'Infrastructure Manager', 'Level-04', 160, 100, 157),
(166, '7901', 'System Designer', 'Level-05', 60, 100, 157),
(167, '8612', 'Systems Administrator', 'Level-04', 125, 70, 157),
(168, '5693', 'Embedded Systems Designer', 'Level-04', 95, 60, 157),
(169, '5052', 'Embedded Software Designer', 'Level-04', 150, 110, 157),
(170, '5788', 'Information Systems Auditor', 'Level-04', 175, 60, 157),
(171, '4231', 'Information Security Manager', 'Level-04', 155, 110, 157),
(172, '8849', 'Database Administrator', 'Level-04', 140, 60, 157),
(173, '6241', 'IT Manger', 'Level-05', 70, 50, 157),
(174, '5857', 'Communication Engineer', 'Level-04', 150, 60, 157),
(175, '7402', 'Cloud Engineer / Architect', 'Level-05', 150, 50, 157),
(176, '9441', 'Network Architect', 'Level-04', 165, 90, 157),
(177, '8910', 'Network Programmer', 'Level-05', 70, 40, 157),
(178, '9121', 'Computer Forensics', 'Level-05', 70, 110, 158),
(179, '6826', 'Ethical Hacking', 'Level-05', 160, 60, 158),
(180, '7391', 'Cryptography', 'Level-05', 60, 90, 158),
(181, '3766', 'Programming and Networking Protocols', 'Level-04', 170, 50, 158),
(182, '2297', 'Internet of Things', 'Level-05', 75, 100, 158),
(183, '4053', 'Algorithms and Data Structures', 'Level-05', 80, 40, 158),
(184, '6444', 'Programming Language', 'Level-04', 160, 40, 158),
(185, '2710', 'Software Development', 'Level-04', 170, 50, 158),
(186, '6370', 'Information Security', 'Level-04', 145, 60, 158),
(187, '8319', 'Administrative law', 'Level-04', 130, 40, 153),
(188, '3667', 'Advertising law', 'Level-05', 120, 60, 153),
(189, '6221', 'Admiralty law', 'Level-04', 170, 40, 153),
(190, '6088', 'Agency law', 'Level-05', 140, 70, 153),
(191, '6462', 'Alcohol law', 'Level-05', 170, 40, 153),
(192, '7688', 'Alternative dispute resolution', 'Level-04', 155, 110, 153),
(193, '5945', 'Animal law', 'Level-04', 90, 100, 153),
(194, '4899', 'Antitrust law ', 'Level-05', 125, 110, 153),
(195, '3189', 'Appellate practice', 'Level-05', 60, 80, 153),
(196, '8483', 'Art law ', 'Level-04', 65, 110, 153),
(197, '2702', 'Aviation law', 'Level-05', 75, 80, 153),
(198, '8286', 'Banking law', 'Level-05', 80, 70, 153),
(199, '7100', 'Bankruptcy law ', 'Level-04', 145, 60, 153),
(200, '1225', 'Bioethics', 'Level-05', 140, 100, 153),
(201, '1026', 'Business law', 'Level-04', 160, 40, 153),
(202, '9830', 'Business organizations law ', 'Level-04', 140, 90, 153),
(203, '2647', 'Civil law or common law', 'Level-04', 80, 80, 153),
(204, '5120', 'Class action litigation/Mass tort litigation', 'Level-04', 120, 70, 153),
(205, '8850', 'Common Interest Development law', 'Level-04', 95, 50, 153),
(206, '9685', 'Communications law', 'Level-05', 150, 100, 153),
(207, '9075', 'Computer law', 'Level-04', 160, 80, 153),
(208, '4845', 'Competition law', 'Level-05', 125, 90, 153),
(209, '7088', 'Conflict of law ', 'Level-05', 150, 90, 153),
(210, '5101', 'Constitutional law', 'Level-05', 145, 80, 153),
(211, '3390', 'Construction law', 'Level-05', 105, 70, 153),
(212, '3057', 'Consumer law', 'Level-04', 115, 110, 153),
(213, '1084', 'Contract law', 'Level-04', 115, 90, 153),
(214, '5935', 'Copyright law', 'Level-04', 135, 100, 153),
(215, '2808', 'Corporate law ', 'Level-04', 135, 80, 153),
(216, '8651', 'Criminal law', 'Level-05', 100, 40, 153),
(217, '7809', 'Cryptography law', 'Level-05', 150, 60, 154),
(218, '8513', 'Cultural property law', 'Level-05', 60, 100, 154),
(219, '5259', 'Custom (law)', 'Level-04', 65, 100, 154),
(220, '8784', 'Cyber law', 'Level-05', 100, 50, 154),
(221, '8204', 'Defamation', 'Level-05', 140, 50, 154),
(222, '7705', 'Derivatives and futures law', 'Level-05', 140, 50, 154),
(223, '1412', 'Drug control law', 'Level-04', 120, 60, 154),
(224, '3975', 'Ecclesiastical law (or Canon law)', 'Level-04', 110, 90, 154),
(225, '9098', 'Elder law', 'Level-04', 105, 100, 154),
(226, '5872', 'Employee benefits law (ERISA)', 'Level-05', 170, 50, 154),
(227, '4411', 'Employment law', 'Level-05', 80, 50, 154),
(228, '5745', 'Energy law', 'Level-05', 85, 80, 154),
(229, '2350', 'Entertainment law', 'Level-05', 80, 100, 154),
(230, '5281', 'Environmental law', 'Level-04', 110, 110, 154),
(231, '7556', 'Equipment finance law', 'Level-05', 105, 110, 154),
(232, '5899', 'Family law', 'Level-05', 135, 80, 154),
(233, '8699', 'FDA law', 'Level-04', 115, 100, 154),
(234, '9597', 'Financial services regulation law', 'Level-04', 145, 110, 154),
(235, '2399', 'Artificial Creativity', 'Level-04', 85, 40, 155),
(236, '8195', 'Artificial life', 'Level-05', 100, 100, 155),
(237, '4580', 'Automated planning and scheduling', 'Level-05', 105, 80, 155),
(238, '1595', 'Automated reasoning', 'Level-05', 125, 90, 155),
(239, '5942', 'Automation', 'Level-04', 105, 70, 155),
(240, '4593', 'Automatic target recognition', 'Level-05', 130, 40, 155),
(241, '5155', 'Biologically inspired computing', 'Level-04', 125, 80, 155),
(242, '2304', 'Computer Audition', 'Level-05', 150, 60, 155),
(243, '5063', 'Speech recognition', 'Level-04', 115, 110, 155),
(244, '2902', 'Speaker recognition', 'Level-04', 80, 110, 155),
(245, '1897', 'Computer vision', 'Level-05', 175, 40, 155),
(246, '6966', 'Image processing', 'Level-04', 60, 50, 155),
(247, '7255', 'Intelligent word recognition', 'Level-04', 160, 90, 155),
(248, '3940', 'Object recognition', 'Level-05', 165, 80, 155),
(249, '9996', 'Optical mark recognition', 'Level-04', 105, 110, 155),
(250, '3570', 'Handwriting recognition', 'Level-04', 165, 50, 155),
(251, '4514', 'Optical character recognition', 'Level-05', 65, 50, 155),
(252, '3698', 'Automatic number plate recognition', 'Level-04', 115, 60, 155),
(253, '8396', 'Facial recognition systems', 'Level-05', 155, 60, 155),
(254, '4322', 'Silent speech interface', 'Level-04', 160, 80, 155),
(255, '3508', 'Diagnosis', 'Level-05', 155, 40, 155),
(256, '6514', 'Expert system', 'Level-05', 105, 80, 155),
(257, '8950', 'Decision support system', 'Level-04', 165, 70, 155),
(258, '4997', 'Clinical decision support system', 'Level-05', 135, 60, 155),
(259, '2364', 'Game artificial intelligence', 'Level-04', 90, 70, 155),
(260, '6229', 'Computer game bot', 'Level-05', 75, 110, 155),
(261, '1794', 'Video game AI', 'Level-04', 100, 100, 155),
(262, '5840', 'Computer chess', 'Level-04', 160, 50, 155),
(263, '8891', 'Computer Go', 'Level-05', 75, 90, 155),
(264, '4261', 'General game playing', 'Level-05', 60, 60, 155),
(265, '4395', 'General video game playing ', 'Level-04', 120, 50, 155),
(266, '4042', 'Game theory ', 'Level-04', 75, 40, 155),
(267, '4398', 'Hybrid intelligent system ', 'Level-04', 80, 110, 155),
(268, '8240', 'Intelligent agent ', 'Level-04', 115, 100, 155),
(269, '6937', 'Agent architecture ', 'Level-04', 155, 50, 155),
(270, '1608', 'Cognitive architecture ', 'Level-04', 145, 50, 155),
(271, '5175', 'Intelligent control ', 'Level-05', 175, 110, 155),
(272, '2084', 'Knowledge management ', 'Level-04', 170, 50, 155),
(273, '2869', 'Concept mining ', 'Level-05', 85, 40, 155),
(274, '4847', 'Data mining ', 'Level-05', 130, 100, 155),
(275, '6836', 'Text mining ', 'Level-04', 145, 110, 155),
(276, '9072', 'Process mining ', 'Level-04', 100, 60, 155),
(277, '6206', 'E-mail spam filtering ', 'Level-04', 165, 60, 155),
(278, '4086', 'Information extraction ', 'Level-05', 140, 70, 155),
(279, '7812', 'Activity recognition ', 'Level-04', 125, 60, 155),
(280, '8594', 'Image retrieval ', 'Level-04', 110, 70, 155),
(281, '1999', 'Automatic image annotation ?', 'Level-05', 165, 100, 155),
(282, '2095', 'Named-entity extraction ?', 'Level-04', 160, 80, 155),
(283, '2965', 'Coreference resolution ?', 'Level-05', 130, 70, 155),
(284, '3610', 'Named-entity recognition ?', 'Level-05', 175, 90, 155),
(285, '1070', 'Relationship extraction ?', 'Level-05', 140, 100, 155),
(286, '1832', 'Terminology extraction ?', 'Level-04', 140, 90, 155),
(287, '8113', 'Knowledge representation ?', 'Level-05', 125, 60, 155),
(288, '3415', 'Semantic Web ?', 'Level-05', 120, 80, 155),
(289, '8418', 'Machine learning ?', 'Level-05', 125, 90, 155),
(290, '2000', 'Constrained Conditional Models ?', 'Level-05', 135, 100, 155),
(291, '2696', 'Deep learning ?', 'Level-04', 135, 60, 155),
(292, '8772', 'Neural modeling fields ?', 'Level-05', 65, 70, 155),
(293, '9008', 'Natural language processing ?', 'Level-05', 140, 100, 155),
(294, '2634', 'Chatterbots', 'Level-05', 150, 100, 155),
(295, '1839', 'Language identification', 'Level-05', 75, 50, 155),
(296, '1525', 'Natural language user interface', 'Level-04', 160, 60, 155),
(297, '4804', 'Natural language understanding', 'Level-05', 110, 70, 155),
(298, '8750', 'Machine translation', 'Level-05', 120, 100, 155),
(299, '9311', 'Statistical semantics', 'Level-04', 165, 40, 155),
(300, '1570', 'Question answering', 'Level-04', 95, 50, 155),
(301, '3593', 'Semantic translation', 'Level-05', 150, 100, 155),
(302, '3696', 'Nonlinear control', 'Level-05', 100, 70, 155),
(303, '4246', 'Pattern recognition', 'Level-05', 170, 70, 155),
(304, '8372', 'Optical character recognition', 'Level-04', 125, 80, 155),
(305, '7047', 'Handwriting recognition', 'Level-04', 125, 50, 155),
(306, '9156', 'Speech recognition', 'Level-04', 160, 70, 155),
(307, '2636', 'Face recognition', 'Level-05', 90, 100, 155),
(308, '1876', 'Robotics', 'Level-04', 160, 90, 155),
(309, '4571', 'Behavior-based robotics', 'Level-04', 130, 60, 155),
(310, '1737', 'Cognitive', 'Level-05', 75, 50, 155),
(311, '9972', 'Cybernetics', 'Level-04', 175, 70, 155),
(312, '5196', 'Developmental robotics', 'Level-04', 120, 80, 155),
(313, '3040', 'Epigenetic robotics', 'Level-04', 150, 50, 155),
(314, '9920', 'Evolutionary robotics', 'Level-05', 125, 80, 155),
(315, '4467', 'Speech generating device', 'Level-04', 60, 90, 155),
(316, '8705', 'Strategic planning ', 'Level-04', 100, 40, 155),
(317, '4687', 'Vehicle infrastructure integration', 'Level-04', 65, 50, 155),
(318, '4855', 'Virtual Intelligence', 'Level-04', 135, 90, 155),
(319, '1050', 'Virtual reality', 'Level-05', 175, 50, 155),
(320, '3165', 'Introduction to Software Engineering', 'Level-05', 100, 70, 156),
(321, '1232', 'Software Requirements & Modeling', 'Level-05', 80, 40, 156),
(322, '5993', 'Software Design & Construction', 'Level-05', 65, 70, 156),
(323, '9757', 'Software Testing, Verification, and Validation', 'Level-04', 155, 50, 156),
(324, '6305', 'Software Quality Assurance', 'Level-05', 95, 40, 156),
(325, '4867', 'Software Project Management', 'Level-05', 110, 50, 156),
(326, '8649', 'Software Configuration Management', 'Level-05', 90, 70, 156),
(327, '8691', 'CS Requirements:[3]', 'Level-05', 150, 50, 156),
(328, '5735', 'Fundamentals of Programming', 'Level-04', 75, 70, 156),
(329, '6646', 'Data Structures', 'Level-04', 85, 50, 156),
(330, '5727', 'Introduction to Algorithms', 'Level-04', 115, 100, 156),
(331, '1859', 'Operating Systems', 'Level-04', 150, 110, 156),
(332, '5312', 'Computer Architecture', 'Level-05', 85, 100, 156),
(333, '5908', 'Programming Languages', 'Level-05', 70, 80, 156),
(334, '1837', 'Human - Computer Interaction', 'Level-05', 60, 60, 156),
(335, '6874', 'Discrete Mathematics', 'Level-05', 155, 90, 156),
(336, '2709', 'Database Designing', 'Level-04', 115, 60, 156),
(337, '3717', 'Network Administrator', 'Level-04', 140, 60, 157),
(338, '2220', 'Network Engineer', 'Level-05', 120, 110, 157),
(339, '2840', 'Network Designer', 'Level-05', 80, 80, 157),
(340, '7400', 'Database Engineer', 'Level-05', 175, 50, 157),
(341, '4363', 'Infrastructure Manager', 'Level-04', 100, 90, 157),
(342, '5316', 'System Designer', 'Level-04', 160, 70, 157),
(343, '4824', 'Systems Administrator', 'Level-05', 80, 80, 157),
(344, '4963', 'Embedded Systems Designer', 'Level-04', 115, 50, 157),
(345, '7376', 'Embedded Software Designer', 'Level-04', 110, 110, 157),
(346, '3382', 'Information Systems Auditor', 'Level-04', 175, 90, 157),
(347, '5201', 'Information Security Manager', 'Level-04', 170, 90, 157),
(348, '3665', 'Database Administrator', 'Level-04', 130, 40, 157),
(349, '6169', 'IT Manger', 'Level-05', 110, 70, 157),
(350, '5418', 'Communication Engineer', 'Level-05', 145, 100, 157),
(351, '8647', 'Cloud Engineer / Architect', 'Level-05', 140, 40, 157),
(352, '6529', 'Network Architect', 'Level-04', 75, 40, 157),
(353, '8850', 'Network Programmer', 'Level-04', 160, 80, 157),
(354, '4105', 'Computer Forensics', 'Level-05', 95, 70, 158),
(355, '6205', 'Ethical Hacking', 'Level-05', 120, 110, 158),
(356, '9218', 'Cryptography', 'Level-04', 135, 40, 158),
(357, '8992', 'Programming and Networking Protocols', 'Level-05', 165, 60, 158),
(358, '3408', 'Internet of Things', 'Level-04', 105, 80, 158),
(359, '2912', 'Algorithms and Data Structures', 'Level-04', 85, 90, 158),
(360, '6584', 'Programming Language', 'Level-04', 155, 110, 158),
(361, '5551', 'Software Development', 'Level-04', 115, 110, 158),
(362, '2890', 'Information Security', 'Level-05', 150, 50, 158),
(363, '4545', 'programming', 'Level-05', 56556, 555, 23);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(100) NOT NULL,
  `module_id` int(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `points` double NOT NULL,
  `student_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_id_card_no` varchar(100) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `job_title` varchar(250) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `address` varchar(350) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_no` varchar(16) NOT NULL,
  `nic_card_no` varchar(16) NOT NULL,
  `department_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_id_card_no`, `first_name`, `last_name`, `date_of_birth`, `age`, `gender`, `job_title`, `job_type`, `address`, `email`, `phone_no`, `nic_card_no`, `department_id`) VALUES
(11, 'bcas01', ' Mohamed', ' Nizzad', '1989-11-17', 31, 'male', 'Lecture', 'Full-Time', 'No: 03, Sainthamaruthu road 14', 'nizzad@bcas.lk', '0756800519', '8965656566V', 21),
(12, 'EIT-8396526', 'BryleeSchultz', 'AveryHolden', '1994-08-28', 21, 'male', 'Economist', 'Full-Time', ' 54 Glenridge Dr. ', 'heroine@aol.com', '0774616475', '7400569650V', 21),
(13, 'EIT-3109501', 'KasonColeman', 'ValentinaHeath', '2010-12-13', 49, 'male', 'Chef', 'Part-Time', ' Davenport, IA 52804', 'kaiser@verizon.net', '0761568275', '7333685114V', 21),
(14, 'EIT-3015415', 'MadelynnKnight', 'MadalynnHolloway', '1976-02-19', 20, 'male', 'Surveyor', 'Full-Time', ' 39 West Street ', 'ournews@optonline.net', '0728945891', '2585888920V', 21),
(15, 'EIT-1876482', 'JosieBrennan', 'FernandaLiu', '1957-03-25', 65, 'female', 'Mechanical Engineer', 'Part-Time', ' Garland, TX 75043', 'lstein@aol.com', '0776669897', '6644451681V', 21),
(16, 'EIT-1561070', 'KaydencePineda', 'AnabelleHughes', '1999-11-25', 16, 'male', 'Bookkeeping clerk', 'Full-Time', ' 8891 Peachtree St. ', 'anicolao@optonline.net', '0778012389', '2931573289V', 21),
(17, 'EIT-4053619', 'SamuelWilliams', 'KeenanHiggins', '1981-03-05', 17, 'female', 'Epidemiologist', 'Full-Time', ' Fort Worth, TX 76110', 'aukjan@aol.com', '0723871451', '7584842448V', 21),
(18, 'EIT-4860342', 'KalebGallegos', 'MalcolmLawrence', '2007-04-25', 56, 'male', 'Bus Driver', 'Part-Time', ' 565 Westminster Street ', 'sfoskett@hotmail.com', '0757506280', '2960221773V', 21),
(19, 'EIT-2162954', 'AdolfoHogan', 'TroyRosario', '1971-04-28', 44, 'male', 'Real Estate Agent', 'Part-Time', ' Sioux City, IA 51106', 'dvdotnet@outlook.com', '0752551165', '781130901V', 21),
(20, 'EIT-3381142', 'ZavierElliott', 'AnahiJacobson', '1994-11-20', 17, 'female', 'Computer Hardware Engineer', 'Part-Time', ' 64 North Inverness Street ', 'fangorn@msn.com', '0764946801', '4496735372V', 21),
(21, 'EIT-7417096', 'HanaYork', 'ParkerSimpson', '1954-05-20', 41, 'male', 'Veterinarian', 'Part-Time', ' Stone Mountain, GA 30083', 'trieuvan@mac.com', '0715037964', '5316046292V', 21),
(22, 'EIT-7420206', 'RuthBarajas', 'EzraEstrada', '2009-10-06', 24, 'male', 'Editor', 'Part-Time', ' 526 Grant Ave. ', 'jmcnamara@live.com', '0753027379', '5794036640V', 21),
(23, 'EIT-1844981', 'AriellaSantos', 'CasonWelch', '2002-06-14', 59, 'male', 'Preschool Teacher', 'Full-Time', ' New Lenox, IL 60451', 'sharon@sbcglobal.net', '0722814922', '7152245225V', 21),
(24, 'EIT-1110254', 'RhiannaLiu', 'CedricMccoy', '1971-08-09', 45, 'male', 'Radiologic Technologist', 'Part-Time', ' 82 Gartner Street ', 'staffelb@att.net', '0716648325', '3056525066V', 21),
(25, 'EIT-1979312', 'ArnavOdonnell', 'HaydenJackson', '1971-11-14', 65, 'male', 'Photographer', 'Full-Time', ' Rome, NY 13440', 'emcleod@optonline.net', '0763982325', '7144975135V', 21),
(26, 'EIT-5805308', 'SheldonDavidson', 'JaxonNavarro', '1985-05-27', 27, 'male', 'Designer', 'Part-Time', ' 62 Hill Court ', 'zyghom@msn.com', '0771453220', '7366158246V', 21),
(27, 'EIT-6146559', 'AlexSolis', 'SantiagoBarber', '1993-09-19', 64, 'male', 'College Professor', 'Full-Time', ' Mount Holly, NJ 08060', 'durist@aol.com', '0771392498', '4182921218V', 21),
(28, 'EIT-7439622', 'RaelynnMacias', 'JaydanBradley', '1991-08-16', 44, 'male', 'Massage Therapist', 'Full-Time', ' 44 Kent Lane ', 'ivoibs@yahoo.ca', '0728353329', '3906082711V', 21),
(29, 'EIT-4497766', 'NathalyBarker', 'KarleyCasey', '0961-11-23', 36, 'male', 'Psychologist', 'Full-Time', ' Parlin, NJ 08859', 'rafasgj@outlook.com', '0714804094', '5411925084V', 21),
(30, 'EIT-3851451', 'MakailaWilliamson', 'TaniyahChung', '1962-07-26', 54, 'female', 'Electrical Engineer', 'Part-Time', ' 42 Schoolhouse Drive ', 'mgemmons@optonline.net', '0761726886', '1340588299V', 21),
(31, 'EIT-8688011', 'CarolynLogan', 'FridaGill', '1995-09-14', 44, 'female', 'Physicist', 'Full-Time', ' Lithonia, GA 30038', 'frostman@sbcglobal.net', '0713626401', '5892119409V', 21),
(32, 'EIT-5638362', 'KyleSwanson', 'JordonAtkins', '2013-02-09', 55, 'female', 'Police Officer', 'Full-Time', ' 76 Poor House Street ', 'presoff@sbcglobal.net', '0763153072', '4473609394V', 21),
(33, 'EIT-3030700', 'MaritzaHood', 'MayraCohen', '1953-08-20', 33, 'female', 'Maintenance & Repair Worker', 'Part-Time', ' Wasilla, AK 99654', 'tkrotchko@comcast.net', '0713906763', '1094331779V', 21),
(34, 'EIT-3039000', 'AronRay', 'TristianTran', '1960-10-14', 62, 'female', 'Automotive mechanic', 'Full-Time', ' 79 Second St. ', 'stakasa@mac.com', '0776034686', '5518050440V', 21),
(35, 'EIT-4795795', 'JazminMerritt', 'IvyDowns', '1965-12-17', 34, 'female', 'Computer Programmer', 'Part-Time', ' Palm Beach Gardens, FL 33410', 'mwilson@verizon.net', '0766742396', '7477575334V', 21),
(36, 'EIT-6695911', 'SidneyEscobar', 'DarrylOconnor', '1973-12-14', 19, 'male', 'Court Reporter', 'Full-Time', ' 79 North School Ave. ', 'flaviog@comcast.net', '0718257583', '3903936272V', 21),
(37, 'EIT-1407982', 'JovanyFerguson', 'GageBentley', '1958-05-23', 29, 'male', 'Paramedic', 'Full-Time', ' Quincy, MA 02169', 'quinn@optonline.net', '0725743694', '7566587735V', 21),
(38, 'EIT-3737400', 'JocelynnCamacho', 'JosephineKaiser', '1988-08-07', 23, 'female', 'Personal Care Aide', 'Full-Time', ' 7732 Riverview Drive ', 'jaffe@aol.com', '0763151682', '1732867554V', 21),
(39, 'EIT-5831128', 'JohanChan', 'ClayBeasley', '1979-11-24', 39, 'male', 'Executive Assistant', 'Full-Time', ' Auburndale, FL 33823', 'chaki@yahoo.ca', '0754337002', '3561201323V', 21),
(40, 'EIT-8802225', 'ReginaPeters', 'BriannaMckee', '1987-10-19', 23, 'female', 'Farmer', 'Full-Time', ' 91 Edgefield St. ', 'jipsen@yahoo.com', '0774577122', '9914714672V', 22),
(41, 'EIT-6180807', 'RaquelBrown', 'KaylieWatkins', '1985-09-04', 65, 'male', 'Hairdresser', 'Full-Time', ' Madison Heights, MI 48071', 'malvar@outlook.com', '0762850729', '6617590060V', 22),
(42, 'EIT-7030494', 'LiamCherry', 'StevenColon', '0009-12-27', 23, 'female', 'Drafter', 'Full-Time', ' 93 Longbranch St. ', 'valdez@aol.com', '0768596065', '1983698731V', 22),
(43, 'EIT-4715505', 'DavisKirby', 'TroyWebb', '2006-05-04', 28, 'male', 'Accountant', 'Full-Time', ' Whitehall, PA 18052', 'hahiss@verizon.net', '0756603674', '3910546919V', 22),
(44, 'EIT-2123033', 'BraylenRuiz', 'AbrilAguilar', '0001-12-25', 55, 'female', 'Painter', 'Part-Time', ' 99 Anderson Drive ', 'qmacro@comcast.net', '0755810050', '622886616V', 22),
(45, 'EIT-4829463', 'JakobPacheco', 'JohanBeltran', '1953-05-05', 64, 'male', 'Physical Therapist', 'Full-Time', ' Cranberry Twp, PA 16066', 'budinger@optonline.net', '0779446865', '5045796091V', 22),
(46, 'EIT-5253685', 'MauriceLiu', 'KysonHuerta', '1988-02-24', 34, 'male', 'Computer Systems Analyst', 'Full-Time', ' 85 Edgewater Drive ', 'matloff@hotmail.com', '0769019709', '6820645226V', 22);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_id_card_no` varchar(100) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(350) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_no` varchar(16) NOT NULL,
  `nic_card_no` varchar(16) NOT NULL,
  `course_id` int(100) NOT NULL,
  `batch_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_id_card_no`, `first_name`, `last_name`, `date_of_birth`, `age`, `gender`, `address`, `email`, `phone_no`, `nic_card_no`, `course_id`, `batch_id`) VALUES
(42, 'AIT-3297542', 'Kuna', 'Rakulan', '1986-12-11', 65, 'female', ' No:03, 2nd cross kallady batticaloa', 'gunarakulan@gmail.com', '0772876991', '1297628103V', 14, 1),
(43, 'AIT-6681684', 'Richard', 'Green', '0979-11-25', 36, 'male', ' 299 Jadewood Drive Gary, IN 46403', 'RichardMGreen@dayrep.com', '0767214155', '4988099943V', 14, 1),
(44, 'AIT-8245483', 'Shante', 'Dawn', '1956-09-28', 28, 'male', ' 485 High Point St.', 'cgcra@yahoo.ca', '0761601251', '7752495001V', 14, 1),
(45, 'AIT-5666347', 'Luanna', 'Messineo', '1964-05-22', 33, 'female', ' Maplewood, NJ 07040', 'novanet@yahoo.com', '0716664835', '1163219969V', 14, 1),
(46, 'AIT-1803131', 'Geneva', 'Kielbasa', '2006-08-23', 24, 'female', ' 390 Green Hill Drive', 'kwilliams@outlook.com', '0765722219', '7876096369V', 14, 1),
(47, 'AIT-8723756', 'Niesha', 'Cocke', '0006-02-28', 25, 'male', ' Blacksburg, VA 24060', 'bmcmahon@icloud.com', '0755114248', '1171750512V', 14, 1),
(48, 'AIT-8349581', 'Eloy', 'Lacourse', '2010-11-14', 56, 'male', ' 7714 Talbot St.', 'calin@msn.com', '0717230528', '4652094443V', 14, 1),
(49, 'AIT-1953420', 'Johnathan', 'Lage', '2001-06-14', 48, 'female', ' Clearwater, FL 33756', 'isaacson@live.com', '0724750026', '6506420838V', 14, 1),
(50, 'AIT-5440083', 'Piper', 'Heineman', '1977-03-13', 30, 'male', ' 6 Cambridge Road', 'keijser@aol.com', '0721010216', '9389039040V', 14, 1),
(51, 'AIT-5245925', 'Fermina', 'Rickles', '1999-07-08', 50, 'male', ' Green Cove Springs, FL 32043', 'policies@yahoo.com', '0777113943', '1197755755V', 14, 1),
(52, 'AIT-2987515', 'Selma', 'Kerner', '1994-09-11', 16, 'female', ' 6442 Main St', 'irving@live.com', '0759220550', '9188064270V', 14, 1),
(53, 'AIT-6765890', 'Camilla', 'Felps', '1965-07-14', 59, 'female', ' Portland,New York(NY),14769', 'lahvak@gmail.com', '0721241972', '7551212439V', 14, 1),
(54, 'AIT-1226513', 'Delpha', 'Wessner', '1961-02-10', 51, 'female', ' 245 Woodlawn Cir', 'sagal@verizon.net', '0755154823', '8691809975V', 14, 1),
(55, 'AIT-7833807', 'Madge', 'Rennick', '1984-07-21', 41, 'female', ' East Hartford,Connecticut(CT),', 'krueger@gmail.com', '0773699320', '6189785036V', 14, 1),
(56, 'AIT-3775597', 'Stephine', 'Giroux', '1987-04-13', 44, 'female', ' 1221 Corazan St', 'kidehen@icloud.com', '0753128327', '6245429086V', 14, 1),
(57, 'AIT-3165193', 'Carlyn', 'Bealer', '2007-05-17', 27, 'female', ' Alice,Texas(TX),78332', 'moonlapse@me.com', '0717233769', '1859218927V', 14, 1),
(58, 'AIT-6372822', 'Pamella', 'Westgate', '2013-04-28', 61, 'female', ' 937) 393-1756', 'dartlife@yahoo.ca', '0757674456', '3312284951V', 14, 1),
(59, 'AIT-1332163', 'Cher', 'Bachelor', '2010-06-11', 62, 'female', ' 8383 State 124 Rte', 'corrada@verizon.net', '0758615567', '5804093696V', 14, 1),
(60, 'AIT-5736355', 'Camie', 'Chilcote', '1963-06-14', 36, 'male', ' Hillsboro,Ohio(OH)', 'durist@yahoo.ca', '0729029332', '4437885273V', 14, 1),
(61, 'AIT-4822207', 'Richelle', 'Menchaca', '1964-06-14', 61, 'female', ' 53 Fairmount Ave', 'offthelip@hotmail.com', '0719496723', '8885452552V', 14, 1),
(62, 'AIT-8698179', 'Louetta', 'Marsh', '1981-07-23', 39, 'male', ' Morristown,New Jersey(NJ),07960', 'raides@yahoo.com', '0764757926', '1702473313V', 14, 1),
(63, 'AIT-5785535', 'Boyce', 'Treece', '0012-02-26', 65, 'male', ' 53 Fairmount Ave', 'mcnihil@icloud.com', '0751215451', '9853897403V', 14, 1),
(64, 'AIT-1611076', 'Audrina', 'Moon', '2010-12-05', 27, 'male', ' (856) 293-9114', 'lbaxter@aol.com', '0755790976', '8119374060V', 14, 2),
(65, 'AIT-6237715', 'Bernard', 'Mora', '0065-12-31', 30, 'male', ' 521 W Main St', 'afeldspar@icloud.com', '0759768425', '919884545V', 14, 2),
(66, 'AIT-4155078', 'Dillon', 'Oneill', '1956-10-26', 52, 'male', ' Millville,New Jersey(NJ),08332', 'gbacon@icloud.com', '0779364662', '8781767409V', 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `theme_id` int(11) NOT NULL,
  `theme_name` varchar(150) NOT NULL,
  `value_1` varchar(50) NOT NULL,
  `value_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`theme_id`, `theme_name`, `value_1`, `value_2`) VALUES
(1, 'Default', '#17202A', '#1C2833'),
(2, 'mongo', '#9309A1', '#4E0B54'),
(3, 'blue', '#1A4AFB', '#1C0783'),
(4, 'greener', '#83F590', '#07B41A'),
(5, 'Pinker', '#FD68BE', '#7E044A'),
(6, 'yelower', '#D6E75C', '#93A60C');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `user_type` varchar(60) NOT NULL,
  `user_category` varchar(60) NOT NULL,
  `user_identification_id` int(100) NOT NULL,
  `profile` varchar(60000) NOT NULL,
  `theme_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_type`, `user_category`, `user_identification_id`, `profile`, `theme_id`) VALUES
(1, 'admin', 'admin', 'admin', 'staff', 11, '/public_files/theme/dist/img/user_accounts/109.png', 1),
(2, 'student1', 'pass123', 'student', 'student', 1, '/public_files/theme/dist/img/user_accounts/default_male.png', 1),
(3, 'AIT-3297542', 'kuna', 'student', 'student', 42, '/public_files/theme/dist/img/user_accounts/default_female.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`theme_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `module_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
