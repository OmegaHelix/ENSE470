-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 05:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ense470`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvers`
--

CREATE TABLE `approvers` (
  `id` int(11) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `softwareid` int(11) UNSIGNED NOT NULL,
  `location` varchar(50) NOT NULL DEFAULT 'Canada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approvers`
--

INSERT INTO `approvers` (`id`, `userid`, `softwareid`, `location`) VALUES
(1, 56, 5, 'BC');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) UNSIGNED NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL,
  `softwareid` int(11) UNSIGNED NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'Awaiting Approval',
  `startdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enddate` timestamp NULL DEFAULT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `userid`, `softwareid`, `status`, `startdate`, `enddate`, `description`) VALUES
(18, 77, 1, 'Canceled', '2018-03-28 00:28:00', NULL, 'This is a test.'),
(19, 56, 5, 'Awaiting Approval', '2018-03-28 02:53:46', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) UNSIGNED NOT NULL,
  `acronym` varchar(20) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table for storing list of offered software';

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `acronym`, `name`) VALUES
(1, 'OMG', 'Operating Map of Gastropathy'),
(2, 'LOL', 'Limited Operating Liability'),
(3, 'TMI', 'Total Mastering of Incisions'),
(4, 'FOMO', 'Fixed Orthodontics Medical Operations'),
(5, 'LOTR', 'List of Transactions and Redactions'),
(6, 'NOOB', 'Northern Ozone & Ocean Biome'),
(7, '', 'Alternative Sewage System'),
(8, 'ROFL', 'Relational Observation System Limited'),
(9, '', 'Fast Family Finder'),
(10, 'SuX', 'Sustainable Xeriscaping'),
(11, 'WTF', 'World Terrain & Forestry'),
(12, 'WUT', 'Web Utility Table'),
(13, 'DUH', 'Data & Utility Heuristics'),
(14, 'OB1', 'Observation (version 1'),
(15, 'NOOB', 'National Ozone Observatory Bot'),
(16, 'HUH', 'Heart Ultrasound Heatmaps'),
(17, 'FML', 'Free MySQL Logger'),
(18, 'HAHA', 'Heart, Abdomen, and Head Assessor'),
(19, 'WEWE', 'Waste Electronic & Wireless Equipment'),
(20, '', 'Biosphere Air and Gas Interpreter'),
(21, 'ORLY', 'Original Record of Landscape and Yards'),
(22, 'SAM', 'Selected Analytical Methods'),
(23, '', 'Storm Water Management'),
(24, 'PERS', 'Planetary Environmental Reference System'),
(25, 'SASEE', 'Snowmed Analyzer System Extended Edition'),
(26, 'PACS', 'Picture Archive and Communication System'),
(27, 'RIS', 'Radiology Information System'),
(28, 'DUMB', 'Download Urgent Medical Backups'),
(29, 'PIP', 'Pharmaceutical Information Program'),
(30, '', 'Remote Health Checker'),
(31, '', 'Remote Stroke Checker'),
(32, '', 'Chronic Disease Management'),
(33, '', 'Ambulance Schedule System'),
(34, '', 'Care Manager'),
(35, 'LIS', 'Lab Information System'),
(36, 'PAT', 'Patient Admitter Tool'),
(37, '', 'Spillage Locator Tool'),
(38, '', 'Environmental Assessor Tool'),
(39, 'SAS', 'Statistical Analysis System'),
(40, 'SPSS', 'Statistical Package for Social Sciences'),
(41, '', 'Cisco WebEx'),
(42, '', 'Homecare System'),
(43, 'EMR', 'Electronic Medical Record (Viewer)'),
(44, '', 'eHealthChart'),
(45, '', 'Environmental Home Manager'),
(46, 'CDR', 'Clinical Data Repository'),
(47, 'NOOBS', 'Netcare Occupation & Observation Base System'),
(48, 'FAD', 'Find a Doctor'),
(49, 'DPV', 'Drug Profile Viewer'),
(50, 'AT-AT', 'Abdomen Tissue and Analysis Tool'),
(51, 'PCV', 'Provider Coverage Viewer'),
(52, 'TMI', 'Transcription Magic Interpreter'),
(53, '', 'PharmaCare'),
(54, 'PRS', 'Provider Registry System'),
(55, 'ELSI', 'Electronic Lab System Interpolator'),
(56, '', 'myeHealth'),
(57, '', 'eReferral'),
(58, '', 'Cleaning Product Analyzer'),
(59, '', 'Greenhouse Gas Analyzer'),
(60, 'PAD', 'Pollution Alerts Datamart'),
(61, 'WALDO', 'Water and Land Data Observer'),
(62, '', 'Waste Observation System'),
(63, 'WASSUP', 'Weather Analyzer Software System Unix Platform'),
(64, 'WOOKEEE', 'Weather and Ozone Observation Knowledge Emulator Enterprise '),
(65, '', 'Microstrategy'),
(66, '', 'Clinical Admission Manager'),
(67, '', 'Ambulance Supply System'),
(68, '', 'TeleCare'),
(69, 'SIS', 'Surgical Information System');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `middlename` varchar(60) DEFAULT NULL,
  `firstname` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `location` varchar(60) NOT NULL DEFAULT 'Canada',
  `accessType` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `lastname`, `middlename`, `firstname`, `password`, `location`, `accessType`) VALUES
(1, 'cfield', 'Field', NULL, 'Chester', 'password', 'Canada', 'approver'),
(2, 'iclaire', 'Claire', NULL, 'Ida', 'password', 'Canada', 'approver'),
(3, 'ahuginkiss', 'Huginkiss', NULL, 'Amanda', 'password', 'Canada', 'approver'),
(4, 'lwynan', 'Wynan', NULL, 'Les', 'password', 'Canada', 'approver'),
(5, 'tdactyl', 'Dactyl', NULL, 'Tara', 'password', 'Canada', 'approver'),
(6, 'cvoyant', 'Voyant', NULL, 'Claire', 'password', 'Canada', 'approver'),
(7, 'wtickelu', 'Tickelu', NULL, 'Will', 'password', 'Canada', 'approver'),
(8, 'pgraff', 'Graff', NULL, 'Polly', 'password', 'Canada', 'approver'),
(9, 'sdupp', 'Dupp', NULL, 'Stan', 'password', 'Canada', 'approver'),
(10, 'gpoole', 'Poole', NULL, 'Gene', 'password', 'Canada', 'approver'),
(11, 'ndown', 'Down', NULL, 'Neil', 'password', 'Canada', 'approver'),
(12, 'blee', 'Lee', NULL, 'Brock', 'password', 'Canada', 'approver'),
(13, 'dmatricks', 'Matricks', NULL, 'Dot', 'password', 'Canada', 'approver'),
(14, 'glocke', 'Locke', NULL, 'Goldie', 'password', 'Canada', 'approver'),
(15, 'akatz', 'Katz', NULL, 'Ally', 'password', 'Canada', 'approver'),
(16, 'ltarde', 'Tarde', NULL, 'Leah', 'password', 'Canada', 'approver'),
(17, 'cbacon', 'Bacon', 'P.', 'Chris', 'password', 'Canada', 'approver'),
(18, 'sflay', 'Flay', NULL, 'Sue', 'password', 'Canada', 'approver'),
(19, 'dyare', 'Yare', NULL, 'Derry', 'password', 'Canada', 'approver'),
(20, 'kball', 'Ball', NULL, 'Krystal', 'password', 'Canada', 'approver'),
(21, 'hpotts', 'Potts', NULL, 'Honey', 'password', 'Canada', 'approver'),
(22, 'sbutts', 'Butts', NULL, 'Seymore', 'password', 'Canada', 'approver'),
(23, 'blight', 'Light', NULL, 'Bud', 'password', 'Canada', 'approver'),
(24, 'fminyon', 'Minyon', NULL, 'Filet', 'password', 'Canada', 'approver'),
(25, 'rbanks', 'Banks', NULL, 'Robyn', 'password', 'Canada', 'approver'),
(26, 'dpickel', 'Pickel', NULL, 'Dyl', 'password', 'Canada', 'approver'),
(27, 'pturner', 'Turner', NULL, 'Paige', 'password', 'Canada', 'approver'),
(28, 'jknight', 'Knight', 'I.', 'Jed', 'password', 'Canada', 'approver'),
(29, 'jcase', 'Case', NULL, 'Justin', 'password', 'Canada', 'approver'),
(30, 'cball', 'Ball', NULL, 'Crystal', 'password', 'Canada', 'approver'),
(31, 'ppu', 'Pu', NULL, 'Pea', 'password', 'Canada', 'approver'),
(32, 'adente', 'Dente', NULL, 'Al', 'password', 'Canada', 'approver'),
(33, 'dfurr', 'Furr', NULL, 'Douglas', 'password', 'Canada', 'approver'),
(34, 'bwellington', 'Wellington', NULL, 'Biff', 'password', 'Canada', 'approver'),
(35, 'adekko', 'Dekko', NULL, 'Art', 'password', 'Canada', 'approver'),
(36, 'cpotts', 'Potts', NULL, 'Clay', 'password', 'Canada', 'approver'),
(37, 'afalfa', 'Falfa', NULL, 'Al', 'password', 'Canada', 'approver'),
(38, 'ffurter', 'Furter', NULL, 'Frank', 'password', 'Canada', 'approver'),
(39, 'hbeard', 'Beard', NULL, 'Harry', 'password', 'Canada', 'approver'),
(40, 'aconda', 'Conda', NULL, 'Anna', 'password', 'Canada', 'approver'),
(41, 'jthyme', 'Thyme', NULL, 'Justin', 'password', 'Canada', 'approver'),
(42, 'ogark', 'Gark', NULL, 'Ollie', 'password', 'Canada', 'approver'),
(43, 'pmoss', 'Moss', NULL, 'Pete', 'password', 'Canada', 'approver'),
(44, 'rfoord', 'Foord', NULL, 'Rusty', 'password', 'Canada', 'approver'),
(45, 'tfoolery', 'Foolery', NULL, 'Tom', 'password', 'Canada', 'approver'),
(46, 'wpeace', 'Peace', NULL, 'Warren', 'password', 'Canada', 'approver'),
(47, 'lhand', 'Hand', NULL, 'Linda', 'password', 'Canada', 'approver'),
(48, 'lnoyes', 'Noyes', NULL, 'Lotta', 'password', 'Canada', 'approver'),
(49, 'bwyre', 'Wyre', NULL, 'Barb', 'password', 'Canada', 'approver'),
(50, 'bberner', 'Berner', NULL, 'Bunsen', 'password', 'Canada', 'approver'),
(51, 'gvitus', 'Vitus', NULL, 'Ginger', 'password', 'Canada', 'approver'),
(52, 'juzzi', 'Uzzi', NULL, 'Jack', 'password', 'Canada', 'approver'),
(53, 'mjarr', 'Jarr', NULL, 'Mason', 'password', 'Canada', 'approver'),
(54, 'tkuhn', 'Kuhn', NULL, 'Ty', 'password', 'Canada', 'approver'),
(55, 'wnaime', 'Naime', NULL, 'Wazziz', 'password', 'Canada', 'approver'),
(56, 'rcurtains', 'Curtains', NULL, 'Rod', 'password', 'BC', 'approver'),
(57, 'kkun', 'Kun', NULL, 'Kanye', 'password', 'Canada', 'approver'),
(58, 'rrhodes', 'Rhodes', NULL, 'Rocky', 'password', 'AB, SK, MB', 'approver'),
(59, 'sbeech', 'Beech', NULL, 'Sandy', 'password', 'Canada', 'approver'),
(60, 'svlaki', 'Vlaki', NULL, 'Sue', 'password', 'Canada', 'approver'),
(61, 'arench', 'Rench', NULL, 'Alan', 'password', 'Canada', 'approver'),
(62, 'athrax', 'Thrax', NULL, 'Anne', 'password', 'Canada', 'approver'),
(63, 'ajob', 'Job', NULL, 'Annita', 'password', 'Canada', 'approver'),
(64, 'amajor', 'Major', NULL, 'Art', 'password', 'ON', 'approver'),
(65, 'ttamoni', 'Tamoni', NULL, 'Tess', 'password', 'QC', 'approver'),
(66, 'apacca', 'Pacca', NULL, 'Al', 'password', 'YT, NT, NU', 'approver'),
(67, 'achoake', 'Choake', 'A.', 'Art', 'password', 'Canada', 'approver'),
(68, 'bfitz', 'Fitz', NULL, 'Benny', 'password', 'Canada', 'approver'),
(69, 'animmity', 'Nimmity', NULL, 'Anna', 'password', 'Canada', 'approver'),
(70, '', '', NULL, '', 'password', 'Canada', 'approver'),
(71, 'mraffone', 'Raffone', NULL, 'Mike', 'password', 'NB, PE, NS, NL', 'approver'),
(72, 'sday', 'Day', NULL, 'Sonny', 'password', 'Canada', 'approver'),
(73, 'wdoolittle', 'Doolittle', NULL, 'Will', 'password', 'Canada', 'approver'),
(74, 'gdunn', 'Dunn', NULL, 'Gladys', 'password', 'Canada', 'approver'),
(75, 'user', 'user', NULL, 'user', 'password', 'Canada', 'user'),
(76, 'analyst', 'analyst', NULL, 'analyst', 'password', 'Canada', 'analyst'),
(77, 'approveranalyst', 'approver', NULL, 'analyst', 'password', 'Canada', 'approver analyst');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approvers`
--
ALTER TABLE `approvers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `softwareid` (`softwareid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requestsSoftwareid` (`softwareid`),
  ADD KEY `requestsUserid` (`userid`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approvers`
--
ALTER TABLE `approvers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approvers`
--
ALTER TABLE `approvers`
  ADD CONSTRAINT `approversSoftwareid` FOREIGN KEY (`softwareid`) REFERENCES `software` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `approversUserid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requestsSoftwareid` FOREIGN KEY (`softwareid`) REFERENCES `software` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requestsUserid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
