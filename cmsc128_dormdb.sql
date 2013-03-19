-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2013 at 04:37 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cs128_dormdb`
--
CREATE DATABASE `cs128_dormdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cs128_dormdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com'),
('dumplings', '3b866494f61e0aeb5e52ec94f547b601', 'food@gmail.com'),
('try', '080f651e3fcca17df3a47c2cecfcb880', 'try@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dormitory`
--

CREATE TABLE IF NOT EXISTS `dormitory` (
  `dormname` varchar(30) NOT NULL,
  `dormdescription` text NOT NULL,
  `dormunits` int(11) DEFAULT NULL,
  `dormlocation` varchar(50) DEFAULT NULL,
  `dormtype` varchar(20) DEFAULT NULL,
  `availableslots` int(5) NOT NULL,
  `dormmonthlyfee` int(5) NOT NULL DEFAULT '500',
  `dormresfee` int(6) NOT NULL DEFAULT '1000',
  PRIMARY KEY (`dormname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dormitory`
--

INSERT INTO `dormitory` (`dormname`, `dormdescription`, `dormunits`, `dormlocation`, `dormtype`, `availableslots`, `dormmonthlyfee`, `dormresfee`) VALUES
('Acci', 'ACCI The dorm was formerly known as the Philippine Training Center for Rural Development (PTC-RD : NTC-RD) under the management of the Department of Agriculture. With the reorganization of DA, the center was renamed as the Agricultural Training Center-National Training Center (ATC-NTC). The management was turned over to Student Housing division, UPLB Housing office on June 8, 2010. It can accommodate 130 freshmen and upperclassmen both male and female.', 2, 'beside LRC', 'male', 100, 500, 1000),
('Ati', 'ATI-NTC Residence Hall (ATI-NTC Dorm). The dorm was formerly known as the Philippine Training Center for Rural Development (PTC-RD : NTC-RD) under the management of the Department of Agriculture. With the reorganization of DA, the center was renamed as the Agricultural Training Center-National Training Center (ATC-NTC). The management was turned over to Student Housing division, UPLB Housing office on June 8, 2010. It can accommodate 130 freshmen and upperclassmen both male and female.', 4, 'near copeland gym', 'male', 100, 500, 1000),
('Foreha', 'Forestry Residence Hall.  Commonly called FOREHA, it is situated at the College of Forestry and Natural Resources. It was constructed in 1960 under the administration of Mr. Benjamin Erasga. For five years under his control, developmental programs and activities were made. FOREHA is a two-storey building dormitory with 36 tooms that can accommodate 144 upper classmen. It also provides a recreation area, mini library, TV room, study area and a canteen adjacent to the building.', 4, 'in forestry', 'female', 97, 500, 1000),
('Ih', 'The International House. Inaugurated on April 13, 1960, it was built through the generosity of the Rockefeller Foundation. It has 31 rooms that can accommodate 124 occupants. It was built to accommodate international graduate students. Aside from the 31 roooms, there are six (6) guest rooms for University guests or transients who would like to get a good accommodation at a very reasonable price.', 3, 'on the way to forestry near uhs', 'coed', 99, 500, 1000),
('Mareha', 'The old Forest Research Institute (FORI) building was converted into dormitory in 1979 and was named MAREHA to cater the housing needs of the students especially within the forestry area. In 1990, the residence MAREHA was transferred to Forestry Residence Hall Extension changing the building''s name to MAREHA. MAREHA, a two-storey building with thirty (31) rooms can accommodate 112 occupants. MAREHA also offers similar facilitites and services to its residence just like the other dormitories.', 2, 'in forestry', 'male', 96, 500, 1000),
('Mens', 'Men''s Residence Hall (MRH). Originally it was a one-building dormitory which accommodates male students. In 1968, four buildings were added to accommodate increasing number of male students due to the expansion of university courses. However, from 1974 to 1982, three units were converted into a freshman exclusive dormitory and which was fully implemented in 2004. The Men''s Dormitory is composed of five two-storey buildings used as living quarters of Freshmen residents. Each building has an average accommodation of 132 heads which totals to 646 residents. Added to residential buildings in the compound are the multi-purpose area and a kitchen. Other facilities and provisions were provided within the area to offcer convenience to the students. These include the canteen, TV room, a mini-library, tutorial area, laundry area and a parking area.', 4, 'beside YMCA', 'female', 99, 500, 1000),
('New', 'New Dormitory (New Dorm). It was built in 2001 primarily for Freshmen students. It is a three-storey building with fifty (50) rooms; each room can accommodate six (6) students totaling to 300 students. Though it was designed primarily for male students, the thrid floor and half of the second floor was converted for female residents. Facilities and provisions were also provided including a spacious parking lot which also functions as a basketball court.', 2, 'near copeland gym across ati', 'male', 75, 500, 1000),
('Newforeha', 'New Forestry Residence Hall (New FOREHA). The dorm was formerly known as the Maharlika Residence Hall in the College of Forestry and Natual Resources and it started its operations on November 1983. It can accommodate 156 freshmen and upperclassmen.', 3, 'in forestry', 'male', 0, 500, 1000),
('Vetmed', 'Veterinary Medicine (VetMed) Residence Hall. The VetMed dorm began its operation in 1986 in anticipation for the College of Veterinary Medicine''s transfer from UP Diliman to UP Los Banos and intented exclusively for Veterinary Medicine students. It is a co-ed dormitory consisting of four (4) buildings - Unit 3, 4 5 and 6 for male residents and Units 1 and 2 for female with a maximum capacity of 280 beds.', 4, 'near YMCA back of Men''s dorm', 'coed', 91, 500, 1000),
('Womens', 'Women''s residence Hall (WRH). The Women''s Dorm was built in 1967 throught the Five Year Development Program. Its primary purpose is to house female residents. It has four dormitory buildings composed of 92 rooms with 444 student beds. Similar to the Men''s Residence Hall, but with an additional multipurpose court for badminton, volleyball and basketball facilities and provisions were also provided for the same purpose.', 5, 'near YMCA across Men''s dorm', 'female', 100, 500, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `postdescription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `username`, `role`, `postdescription`) VALUES
(1, 'new', 0, 'let''s eat!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `resdorm` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id` varchar(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `contactnumber` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `pgname` varchar(30) NOT NULL,
  `pgnum` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `id_2` (`id`),
  UNIQUE KEY `id_3` (`id`),
  UNIQUE KEY `id_4` (`id`),
  KEY `stdnum` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`resdorm`, `name`, `id`, `course`, `college`, `contactnumber`, `address`, `email`, `sex`, `pgname`, `pgnum`, `status`, `username`) VALUES
('Vetmed', 'Arellano, Regina Mae', '2008-56620', 'BSCS', 'CAS', '09053753678', 'Bataan', 'maemae.arellano@gmail.com', 'female', 'sherlock', '12345678909', 'accepted', 'maemae'),
('Vetmed', 'Rinno Adam Mendoza', '2010-27006', 'BSCS', 'CAS', '09263078781', 'Nueva Ecija', 'rinnomendoza@gmail.com', 'male', 'emma', '09163122147', 'pending', 'adam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `role` int(1) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `dormhandle` varchar(50) NOT NULL,
  `contactnumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`role`, `fullname`, `id`, `course`, `college`, `dormhandle`, `contactnumber`, `email`, `username`, `password`) VALUES
(0, 'Mens, DM', '1', '', '', 'Mens', '09129912453', 'mens@gmail.com', 'mens', '826b5dfb7301552b44e555677318a0cd'),
(0, 'Newforeha, DM', '10', '', '', 'Newforeha', '09128173615', 'newforeha@gmail.com', 'newforeha', '98c12c242a4f530c4dabbdf8e601280f'),
(0, 'Womens, DM', '2', '', '', 'Womens', '09123456789', 'womens@gmail.com', 'womens', '35376f636fec26edff479a86a576211b'),
(1, 'Arellano, Regina Mae', '2008-56620', 'BSCS', 'CAS', '', '09053753678', 'maemae.arellano@gmail.com', 'maemae', 'b30d2a1ed1874cd9ee6cdd02386faca2'),
(1, 'Mendoza, Rinno Adam', '2010-27006', 'BSCS', 'CAS', '', '09263078781', 'rinnomendoza@gmail.com', 'adam', 'cfcd7931ab079ae3848355f2a7e0615f'),
(1, 'Joar Morada', '2010-65336', 'BSCS', 'CAS', '', '09111111111', 'joar@gmail.com', 'joar', '383195b1a88d07e9753a30f8f9aeb735'),
(0, 'Vetmed, DM', '3', '', '', 'Vetmed', '09987654321', 'vetmed@gmail.com', 'vetmed', '9b919cd1c6c5c8ee950a322cda8a38c3'),
(0, 'Ati, DM', '4', '', '', 'Ati', '09121212121', 'ati@gmail.com', 'ati', '6a5bacf3c605dd478c9c119f54d4b30b'),
(0, 'New, DM', '5', '', '', 'New', '09213123151', 'new@gmail.com', 'new', '22af645d1859cb5ca6da0c484f1f37ea'),
(0, 'Acci, DM', '6', '', '', 'Acci', '09181726351', 'acci@gmail.com', 'acci', '07b7b8cd4c8afe72bc1a22cff4e7e4e6'),
(0, 'Ih, DM', '7', '', '', 'Ih', '09128653261', 'ih@gmail.com', 'ih', '95f11b6956a5cd3a7de04c8f2664316e'),
(0, 'Mareha, DM', '8', '', '', 'Mareha', '09172815341', 'mareha@gmail.com', 'mareha', 'e250d355640b9daccf3af55f6e828444'),
(0, 'Foreha, DM', '9', '', '', 'Foreha', '09171825131', 'foreha@gmail.com', 'foreha', '744c8f9f967c9c7a0ee99c215bdc587a');
