-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 12, 2013 at 09:38 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dorm`
--
CREATE DATABASE `dorm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dorm`;

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
  PRIMARY KEY (`dormname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dormitory`
--

INSERT INTO `dormitory` (`dormname`, `dormdescription`, `dormunits`, `dormlocation`, `dormtype`, `availableslots`) VALUES
('Acci', 'ACCI The dorm was formerly known as the Philippine Training Center for Rural Development (PTC-RD : NTC-RD) under the management of the Department of Agriculture. With the reorganization of DA, the center was renamed as the Agricultural Training Center-National Training Center (ATC-NTC). The management was turned over to Student Housing division, UPLB Housing office on June 8, 2010. It can accommodate 130 freshmen and upperclassmen both male and female.', 2, 'beside LRC', 'male', 100),
('Ati', 'ATI-NTC Residence Hall (ATI-NTC Dorm). The dorm was formerly known as the Philippine Training Center for Rural Development (PTC-RD : NTC-RD) under the management of the Department of Agriculture. With the reorganization of DA, the center was renamed as the Agricultural Training Center-National Training Center (ATC-NTC). The management was turned over to Student Housing division, UPLB Housing office on June 8, 2010. It can accommodate 130 freshmen and upperclassmen both male and female.', 4, 'near copeland gym', 'male', 100),
('Foreha', 'Forestry Residence Hall.  Commonly called FOREHA, it is situated at the College of Forestry and Natural Resources. It was constructed in 1960 under the administration of Mr. Benjamin Erasga. For five years under his control, developmental programs and activities were made. FOREHA is a two-storey building dormitory with 36 tooms that can accommodate 144 upper classmen. It also provides a recreation area, mini library, TV room, study area and a canteen adjacent to the building.', 4, 'in forestry', 'female', 99),
('Ih', 'The International House. Inaugurated on April 13, 1960, it was built through the generosity of the Rockefeller Foundation. It has 31 rooms that can accommodate 124 occupants. It was built to accommodate international graduate students. Aside from the 31 roooms, there are six (6) guest rooms for University guests or transients who would like to get a good accommodation at a very reasonable price.', 3, 'on the way to forestry near uhs', 'coed', 100),
('Mareha', 'The old Forest Research Institute (FORI) building was converted into dormitory in 1979 and was named MAREHA to cater the housing needs of the students especially within the forestry area. In 1990, the residence MAREHA was transferred to Forestry Residence Hall Extension changing the building''s name to MAREHA. MAREHA, a two-storey building with thirty (31) rooms can accommodate 112 occupants. MAREHA also offers similar facilitites and services to its residence just like the other dormitories.', 2, 'in forestry', 'male', 100),
('Mens', 'Men''s Residence Hall (MRH). Originally it was a one-building dormitory which accommodates male students. In 1968, four buildings were added to accommodate increasing number of male students due to the expansion of university courses. However, from 1974 to 1982, three units were converted into a freshman exclusive dormitory and which was fully implemented in 2004. The Men''s Dormitory is composed of five two-storey buildings used as living quarters of Freshmen residents. Each building has an average accommodation of 132 heads which totals to 646 residents. Added to residential buildings in the compound are the multi-purpose area and a kitchen. Other facilities and provisions were provided within the area to offcer convenience to the students. These include the canteen, TV room, a mini-library, tutorial area, laundry area and a parking area.', 4, 'beside YMCA', 'female', 72),
('New', 'New Dormitory (New Dorm). It was built in 2001 primarily for Freshmen students. It is a three-storey building with fifty (50) rooms; each room can accommodate six (6) students totaling to 300 students. Though it was designed primarily for male students, the thrid floor and half of the second floor was converted for female residents. Facilities and provisions were also provided including a spacious parking lot which also functions as a basketball court.', 2, 'near copeland gym across ati', 'male', 100),
('Newforeha', 'New Forestry Residence Hall (New FOREHA). The dorm was formerly known as the Maharlika Residence Hall in the College of Forestry and Natual Resources and it started its operations on November 1983. It can accommodate 156 freshmen and upperclassmen.', 3, 'in forestry', 'male', 98),
('Vetmed', 'Veterinary Medicine (VetMed) Residence Hall. The VetMed dorm began its operation in 1986 in anticipation for the College of Veterinary Medicine''s transfer from UP Diliman to UP Los Baños and intented exclusively for Veterinary Medicine students. It is a co-ed dormitory consisting of four (4) buildings - Unit 3, 4 5 and 6 for male residents and Units 1 and 2 for female with a maximum capacity of 280 beds.', 4, 'near YMCA back of Men''s dorm', 'coed', 100),
('Womens', 'Women''s residence Hall (WRH). The Women''s Dorm was built in 1967 throught the Five Year Development Program. Its primary purpose is to house female residents. It has four dormitory buildings composed of 92 rooms with 444 student beds. Similar to the Men''s Residence Hall, but with an additional multipurpose court for badminton, volleyball and basketball facilities and provisions were also provided for the same purpose.', 5, 'near YMCA across Men''s dorm', 'female', 100);

-- --------------------------------------------------------

--
-- Table structure for table `dormmanager`
--

CREATE TABLE IF NOT EXISTS `dormmanager` (
  `empnumber` varchar(10) NOT NULL,
  `dname` varchar(30) DEFAULT NULL,
  `dconumber` int(11) DEFAULT NULL,
  `deadd` varchar(50) DEFAULT NULL,
  `duname` varchar(30) DEFAULT NULL,
  `dpword` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`empnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stnumber` varchar(10) NOT NULL,
  `stname` varchar(30) DEFAULT NULL,
  `stcourse` varchar(50) DEFAULT NULL,
  `stcollege` varchar(50) DEFAULT NULL,
  `stconumber` int(11) DEFAULT NULL,
  `steadd` varchar(50) DEFAULT NULL,
  `stuname` varchar(30) DEFAULT NULL,
  `stpword` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`stnumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
