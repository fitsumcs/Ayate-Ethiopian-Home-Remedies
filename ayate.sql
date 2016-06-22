-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2016 at 02:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ayate`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commentId` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentId`, `content`, `date`, `time`) VALUES
(123, 'com', 'to', 'ti'),
(0, 'content', 'date', 'time'),
(123, 'i am comenting', '6/4/2016', '7:55');

-- --------------------------------------------------------

--
-- Table structure for table `debunkeddescription`
--

CREATE TABLE IF NOT EXISTS `debunkeddescription` (
  `submission_id` int(11) NOT NULL,
  `debunk_id` int(11) NOT NULL,
  `explanation` text NOT NULL,
  `verify_debunk` text NOT NULL,
  `verified_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debunkeddescription`
--

INSERT INTO `debunkeddescription` (`submission_id`, `debunk_id`, `explanation`, `verify_debunk`, `verified_by`) VALUES
(124, 23, 'iy ggh gfsvhjmk', 'verify', 'Mahi'),
(124, 23, 'iy ggh gfsvhjmk', 'verify', 'Mahi');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `diseaseNum` int(11) NOT NULL,
  `diseaseName` varchar(30) NOT NULL,
  `Catagory` varchar(30) NOT NULL,
  PRIMARY KEY (`diseaseNum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`diseaseNum`, `diseaseName`, `Catagory`) VALUES
(1, 'Aches', 'Skin'),
(2, 'Acne spots', 'Skin'),
(3, 'Age spots', 'skin'),
(4, 'Allergic Asthma', 'Respiratory'),
(5, 'Adults Stem cell', 'Respiratory'),
(6, 'Allergic conjunction', 'Respiratory'),
(7, 'Adults Autism', 'Mental'),
(8, 'Adolescents', 'Mental'),
(9, 'ADHD', 'Mental'),
(10, 'Adult Disorder', 'Mental'),
(11, 'Agrophobia', 'Mental'),
(12, 'Alzheimers', 'Mental'),
(13, 'Animea', 'Deficiency'),
(14, 'Annovulation', 'STD'),
(15, 'Antiphospholoid ', 'Deficiency'),
(16, 'Anxiety', 'Mental'),
(17, 'Athlete''s foot', 'Skin'),
(18, 'Baldness', 'Deficiency'),
(19, 'BOD', 'Skin'),
(20, 'BedWetting', 'Deficiency'),
(21, 'Birth Defects', 'Deficency'),
(22, 'Burns', 'Skin'),
(23, 'Cholera', 'Respiratory'),
(24, 'Chronic cough', 'Respiratory'),
(25, 'Chancroid', 'STD'),
(26, 'Cigurate Posioning', 'Respiratory'),
(27, 'Common Cold', 'Respiratory'),
(28, 'Dehydration', 'Deficiency');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `remedyId` int(11) NOT NULL,
  `remedyname` text NOT NULL,
  `diseasename` text NOT NULL,
  `category` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`remedyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE IF NOT EXISTS `professionals` (
  `fName` varchar(20) NOT NULL,
  `mName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `registration_status` varchar(10) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `work_address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`fName`, `mName`, `lName`, `qualification`, `occupation`, `registration_status`, `experience`, `gender`, `password`, `username`, `work_address`, `email`, `phone`) VALUES
('Hayelom', 'Haileslasse', '', 'Phd', 'herbalist', 'registered', '10 years at zewditu', 'fmale', 'rozina', 'hayelom', 'kirkos', 'hhaileslasse@gmail.com', '+251910452802'),
('Mahder', 'Haileslasse', 'Atsbeha', 'Msc in herbal medicine', 'lecturer in Addis Ababa university', 'registered', '4 years experiance at zewditu hospital and 10 year', 'female', 'Mahi', 'Mahi', 'kirkos wereda 04 kebele 31', 'hhajhh@gmail.com', '+25(19)2062-7902'),
('Hayelom', 'Haileslasse', '', 'Phd', 'herbalist', 'registered', '10 years at zewditu', 'fmale', 'hayelom', 'hayelom', 'kirkos', 'hhaileslasse@gmail.com', '+251910452802'),
('Mahder', 'Haileslasse', 'Atsbeha', 'Msc in herbal medicine', 'lecturer in Addis Ababa university', 'registered', '4 years experiance at zewditu hospital and 10 year', 'female', 'Mahi', 'Mahi', 'kirkos wereda 04 kebele 31', 'mahderhaileslasse@gmail.com', '+25(19)2062-7902');

-- --------------------------------------------------------

--
-- Table structure for table `remedy`
--

CREATE TABLE IF NOT EXISTS `remedy` (
  `remedyId` varchar(15) NOT NULL,
  `remedyname` varchar(20) NOT NULL,
  `diseasename` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`remedyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remedy`
--

INSERT INTO `remedy` (`remedyId`, `remedyname`, `diseasename`, `content`, `time`, `date`) VALUES
('abc', 'Garlic', 'Amoebas', 'The most suggested treatment for amoebas is to take a strong doses of garlic for 10 to 15 days. As garlic is a natural and effective antibiotics, it strengthens the immune system and so combats amoebas', '08:55:20', '2016-06-07'),
('abd', 'Herbal Tea', 'Appetite loss', 'Take herbal tea(chamomile, ginger, etc) to stimulate the appetite. Drink it like water throughout the day ', '08:59:10', '2016-06-07'),
('abe', 'Pure Aloe Vera Gel', 'Gastritis', 'Ingestion of pure aloe vera gel is recommended for treating gastritis. Aloe Vera Gel is anti-inflammatory, pain inhibitor antibiotic that contains fiber. ', '09:03:18', '2016-06-07'),
('ABf123', 'Garlic with thyme', 'Stomach Gas', 'Garlic and thyme are excellent products for digestion. ', '02:38:30', '2016-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE IF NOT EXISTS `submit` (
  `submitterEmail` text NOT NULL,
  `diseaseName` text NOT NULL,
  `remedyName` text NOT NULL,
  `description` text NOT NULL,
  `catagory` text,
  `time` datetime NOT NULL,
  `submission_id` int(11) NOT NULL,
  `numberOfVotes` int(11) NOT NULL DEFAULT '0',
  `debunkedDescription` text,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`submitterEmail`, `diseaseName`, `remedyName`, `description`, `catagory`, `time`, `submission_id`, `numberOfVotes`, `debunkedDescription`, `status`) VALUES
('as@gmai.com', 'jrga', 'iman', 'dromo', '', '0000-00-00 00:00:00', 124, 20, 'null', 0),
('faithabdulselam@gmail.com', 'gunfan', 'kochkocha', 'kochkocha betbto ke shay gar bemaflat and lay metetat', 'miteta', '2016-05-28 09:08:00', 0, 5, '', 0),
('iman@gmail.com', '', '', 'yetekolefen mekfet', 'mibela', '2016-06-03 00:00:00', 123, 6, 'such a good point u raised boy', 7),
('aj@gmail.com', 'gunfan', 'berbere', 'mefchet', 'powder', '2016-06-14 05:29:40', 89, 17, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `com_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
