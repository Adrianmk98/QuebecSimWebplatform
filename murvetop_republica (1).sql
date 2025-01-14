-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 14, 2025 at 04:17 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `murvetop_republica`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `Username` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `Username`, `Password`, `Email`) VALUES
(1, 'Adrian', 'abc123', 'adapokemongames@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `electionvalues`
--

CREATE TABLE `electionvalues` (
  `ID` int(3) NOT NULL DEFAULT '0',
  `state` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `Name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `electionvalues`
--

INSERT INTO `electionvalues` (`ID`, `state`, `Name`, `q1`, `q2`, `q3`) VALUES
(1, 'AL', 'Alabama', 56, 50, 50),
(2, 'AK', 'Alaska', 53, 50, 50),
(3, 'AZ', 'Arizona', 63, 50, 50),
(4, 'AR', 'Arkansas', 61, 50, 50),
(5, 'CA', 'California', 60, 50, 50),
(6, 'CO', 'Colorado', 50, 50, 50),
(7, 'CT', 'Connecticut', 50, 50, 50),
(8, 'DE', 'Delaware', 50, 50, 50),
(9, 'DC', 'District of Columbia', 50, 50, 50),
(10, 'FL', 'Florida', 50, 50, 50),
(11, 'GA', 'Georgia', 50, 50, 50),
(12, 'HI', 'Hawaii', 50, 50, 50),
(13, 'ID', 'Idaho', 50, 50, 50),
(14, 'IL', 'Illinois', 50, 50, 50),
(15, 'IN', 'Indiana', 50, 50, 50),
(16, 'IA', 'Iowa', 50, 50, 50),
(17, 'KS', 'Kansas', 50, 50, 50),
(18, 'KY', 'Kentucky', 50, 50, 50),
(19, 'LA', 'Louisiana', 50, 50, 50),
(20, 'ME', 'Maine', 50, 50, 50),
(21, 'MD', 'Maryland', 50, 50, 50),
(22, 'MA', 'Massachusetts', 50, 50, 50),
(23, 'MI', 'Michigan', 50, 50, 50),
(24, 'MN', 'Minnesota', 50, 50, 50),
(25, 'MS', 'Mississippi', 50, 50, 50),
(26, 'MO', 'Missouri', 50, 50, 50),
(27, 'MT', 'Montana', 50, 50, 50),
(28, 'NE', 'Nebraska', 50, 50, 50),
(29, 'NV', 'Nevada', 50, 50, 50),
(30, 'NH', 'New Hampshire', 50, 50, 50),
(31, 'NJ', 'New Jersey', 50, 50, 50),
(32, 'NM', 'New Mexico', 50, 50, 50),
(33, 'NY', 'New York', 50, 50, 50),
(34, 'NC', 'North Carolina', 50, 50, 50),
(35, 'ND', 'North Dakota', 50, 50, 50),
(36, 'OH', 'Ohio', 50, 50, 50),
(37, 'OK', 'Oklahoma', 50, 50, 50),
(38, 'OR', 'Oregon', 50, 50, 50),
(39, 'PA', 'Pennsylvania', 50, 50, 50),
(40, 'RI', 'Rhode Island', 50, 50, 50),
(41, 'SC', 'South Carolina', 50, 50, 50),
(42, 'SD', 'South Dakota', 50, 50, 50),
(43, 'TN', 'Tennessee', 50, 50, 50),
(44, 'TX', 'Texas', 50, 50, 50),
(45, 'UT', 'Utah', 50, 50, 50),
(46, 'VT', 'Vermont', 50, 50, 50),
(47, 'VA', 'Virginia', 50, 50, 50),
(48, 'WA', 'Washington', 50, 50, 50),
(49, 'WV', 'West Virginia', 50, 50, 50),
(50, 'WI', 'Wisconsin', 50, 50, 50),
(51, 'WY', 'Wyoming', 50, 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `Gamestate`
--

CREATE TABLE `Gamestate` (
  `election` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Gamestate`
--

INSERT INTO `Gamestate` (`election`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `laws`
--

CREATE TABLE `laws` (
  `NationID` int(11) NOT NULL,
  `statusq1` int(11) NOT NULL,
  `statusq2` int(11) NOT NULL,
  `statusq3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `laws`
--

INSERT INTO `laws` (`NationID`, `statusq1`, `statusq2`, `statusq3`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `sorter` int(11) NOT NULL,
  `sendid` int(11) NOT NULL,
  `recieveid` int(11) NOT NULL,
  `messageid` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `partyid` int(11) NOT NULL,
  `seen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`sorter`, `sendid`, `recieveid`, `messageid`, `message`, `partyid`, `seen`) VALUES
(108, 1, 0, 2, 'test', 8, 1),
(107, 2, 1, 3, 'failed', 0, 1),
(106, 2, 1, 3, 'succeeded', 0, 1),
(105, 1, 4, 3, 'succeeded', 0, 1),
(109, 1, 0, 2, 'fsdfs', 8, 1),
(110, 1, 0, 2, 'hfghfghf', 8, 1),
(111, 1, 0, 2, 'hfghfghfgh', 8, 1),
(112, 1, 0, 2, 'ghfhgfh', 8, 1),
(113, 1, 0, 2, '', 8, 1),
(114, 1, 0, 2, '', 8, 1),
(115, 1, 0, 2, '', 8, 1),
(116, 1, 0, 2, '', 8, 1),
(117, 1, 0, 2, '', 8, 1),
(118, 1, 0, 2, '', 8, 1),
(119, 1, 0, 2, '', 8, 1),
(120, 1, 0, 2, '', 8, 1),
(121, 1, 0, 2, '', 8, 1),
(122, 1, 0, 2, '', 8, 1),
(123, 1, 0, 2, '', 8, 1),
(124, 1, 4, 3, 'succeeded', 0, 0),
(125, 1, 4, 3, 'succeeded', 0, 0),
(126, 1, 4, 3, 'succeeded', 0, 0),
(127, 1, 4, 3, 'succeeded', 0, 0),
(128, 1, 4, 3, 'succeeded', 0, 0),
(129, 1, 0, 2, '', 8, 1),
(130, 1, 0, 2, '', 8, 1),
(131, 1, 0, 2, '', 8, 1),
(132, 1, 0, 2, 'TEST', 8, 1),
(133, 1, 2, 1, 'ufgdfusghfkdjbfsk', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `partyid` int(11) NOT NULL,
  `pname` text COLLATE utf8_unicode_ci NOT NULL,
  `ppic` text COLLATE utf8_unicode_ci NOT NULL,
  `partycolour` text COLLATE utf8_unicode_ci NOT NULL,
  `ptax` int(11) NOT NULL,
  `ptreasury` int(11) NOT NULL,
  `nummem` int(11) NOT NULL,
  `pleaderid` int(11) NOT NULL,
  `pwhipid` int(11) NOT NULL,
  `ptreasurerid` int(11) NOT NULL,
  `pauth` int(11) NOT NULL,
  `pecon` int(11) NOT NULL,
  `ial` decimal(10,0) NOT NULL,
  `iak` decimal(10,0) NOT NULL,
  `iar` decimal(10,0) NOT NULL,
  `iaz` decimal(10,0) NOT NULL,
  `ica` decimal(10,0) NOT NULL,
  `ico` decimal(10,0) NOT NULL,
  `ict` decimal(10,0) NOT NULL,
  `ide` decimal(10,0) NOT NULL,
  `ifl` decimal(10,0) NOT NULL,
  `iga` decimal(10,0) NOT NULL,
  `ihi` decimal(10,0) NOT NULL,
  `iid` decimal(10,0) NOT NULL,
  `iil` decimal(10,0) NOT NULL,
  `iin` decimal(10,0) NOT NULL,
  `iia` decimal(10,0) NOT NULL,
  `iks` decimal(10,0) NOT NULL,
  `iky` decimal(10,0) NOT NULL,
  `ila` decimal(10,0) NOT NULL,
  `ime` decimal(10,0) NOT NULL,
  `imd` decimal(10,0) NOT NULL,
  `ima` decimal(10,0) NOT NULL,
  `imi` decimal(10,0) NOT NULL,
  `imn` decimal(10,0) NOT NULL,
  `ims` decimal(10,0) NOT NULL,
  `imo` decimal(10,0) NOT NULL,
  `imt` decimal(10,0) NOT NULL,
  `ine` decimal(10,0) NOT NULL,
  `inv` decimal(10,0) NOT NULL,
  `inh` decimal(10,0) NOT NULL,
  `inj` decimal(10,0) NOT NULL,
  `inm` decimal(10,0) NOT NULL,
  `iny` decimal(10,0) NOT NULL,
  `inc` decimal(10,0) NOT NULL,
  `ind` decimal(10,0) NOT NULL,
  `ioh` decimal(10,0) NOT NULL,
  `iok` decimal(10,0) NOT NULL,
  `ior` decimal(10,0) NOT NULL,
  `ipa` decimal(10,0) NOT NULL,
  `iri` decimal(10,0) NOT NULL,
  `isc` decimal(10,0) NOT NULL,
  `isd` decimal(10,0) NOT NULL,
  `itn` decimal(10,0) NOT NULL,
  `itx` decimal(10,0) NOT NULL,
  `iut` decimal(10,0) NOT NULL,
  `ivt` decimal(10,0) NOT NULL,
  `iva` decimal(10,0) NOT NULL,
  `iwa` decimal(10,0) NOT NULL,
  `iwv` decimal(10,0) NOT NULL,
  `iwi` decimal(10,0) NOT NULL,
  `iwy` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`partyid`, `pname`, `ppic`, `partycolour`, `ptax`, `ptreasury`, `nummem`, `pleaderid`, `pwhipid`, `ptreasurerid`, `pauth`, `pecon`, `ial`, `iak`, `iar`, `iaz`, `ica`, `ico`, `ict`, `ide`, `ifl`, `iga`, `ihi`, `iid`, `iil`, `iin`, `iia`, `iks`, `iky`, `ila`, `ime`, `imd`, `ima`, `imi`, `imn`, `ims`, `imo`, `imt`, `ine`, `inv`, `inh`, `inj`, `inm`, `iny`, `inc`, `ind`, `ioh`, `iok`, `ior`, `ipa`, `iri`, `isc`, `isd`, `itn`, `itx`, `iut`, `ivt`, `iva`, `iwa`, `iwv`, `iwi`, `iwy`) VALUES
(11, 'Mario Party', '9Ryh0CS.jpg', '#ffdbac', 0, 0, 0, 0, 0, 0, 7, 3, 17, 10, 8, 46, 9, 4, 3, 7, 41, 23, 9, 38, 23, 14, 4, 4, 22, 4, 0, 21, 3, 29, 7, 300, 10, 3, 5, 5, 3, 7, 5, 71, 34, 3, 14, 5, 15, 29, 3, 24, 3, 24, 36, 5, 3, 154, 15, 38, 210, 3),
(10, 'G6', '9Ryh0CS.jpg', '#FFC0CB', 0, 0, 2, 2, 0, 0, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 8, 3, 0, 5, 0, 0, 0, 0, 3, 6, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 3, 0),
(9, 'King Adrian', '9Ryh0CS.jpg', '#0080ff', 0, 0, 0, 0, 0, 0, 1, 10, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Test', '9Ryh0CS.jpg', '#0080ff', 25, 367604, 1, 1, 6, 6, 6, 5, 100, 3, 7, 3, 7, 3, 1, 1, 10, 11, 3, 21, 13, 1, 2, 4, 1, 3, 27, 0, 1, 8, 4, 115, 9, 2, 4, 4, 0, 0, 4, 58, 21, 2, 0, 4, 4, 24, 0, 16, 2, 0, 11, 4, 0, 0, 4, 0, 2, 2),
(12, 'American Labor Party', '9Ryh0CS.jpg', '#FF1A00', 0, 0, 0, 0, 0, 0, 8, 3, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 38, 1, 1, 1, 1, 0, 0, 0, 0, 0, 100, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Shaving Cream Coalition', 'YSgW0Jw.jpg', '#25D014', 0, 0, 0, 0, 0, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1),
(14, 'Test Create', '9Ryh0CS.jpg', '#000000', 0, 0, 0, 0, 0, 0, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 'Test', '9Ryh0CS.jpg', '#6c1354', 0, 0, 0, 0, 0, 0, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 'test3', '9Ryh0CS.jpg', '#000000', 0, 0, 0, 0, 0, 0, 6, 7, 16, 0, 4, 0, 0, 0, 2, 6, 30, 22, 0, 0, 22, 13, 2, 0, 21, 0, 3, 8, 2, 9, 2, 13, 2, 0, 0, 0, 2, 6, 0, 18, 33, 0, 13, 0, 0, 28, 2, 23, 0, 23, 0, 0, 2, 24, 0, 14, 2, 0),
(17, 'Milk Organized Opposition', '9Ryh0CS.jpg', '#ffffff', 0, 0, 0, 0, 0, 0, 7, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 355, 0),
(18, 'Conservative Party', '9Ryh0CS.jpg', '#472ffe', 5, 92898, 0, 0, 14, 0, 7, 5, 19, 0, 11, 48, 0, 0, 0, 0, 43, 26, 0, 0, 0, 0, 0, 0, 24, 7, 0, 23, 0, 0, 0, 303, 12, 0, 0, 0, 0, 0, 7, 0, 36, 0, 0, 7, 0, 0, 0, 26, 0, 26, 38, 0, 0, 158, 0, 39, 0, 0),
(0, 'Independant', '', '#808080', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partypositions`
--

CREATE TABLE `partypositions` (
  `ID` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shistory`
--

CREATE TABLE `shistory` (
  `horder` int(11) NOT NULL,
  `statenum` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `playid` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statedemo`
--

CREATE TABLE `statedemo` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `state` varchar(2) CHARACTER SET utf8 DEFAULT NULL,
  `Name` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `normturnout` decimal(3,1) DEFAULT NULL,
  `maxturnout` decimal(3,1) DEFAULT NULL,
  `DemoA` decimal(4,2) DEFAULT NULL,
  `DemoB` decimal(4,2) DEFAULT NULL,
  `DemoC` decimal(4,2) DEFAULT NULL,
  `DemoD` decimal(4,2) DEFAULT NULL,
  `DemoE` decimal(4,2) DEFAULT NULL,
  `DemoF` decimal(4,2) DEFAULT NULL,
  `Male` decimal(17,4) DEFAULT NULL,
  `Female` decimal(17,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statedemo`
--

INSERT INTO `statedemo` (`ID`, `state`, `Name`, `population`, `normturnout`, `maxturnout`, `DemoA`, `DemoB`, `DemoC`, `DemoD`, `DemoE`, `DemoF`, `Male`, `Female`) VALUES
(1, 'AL', 'Alabama', 4903185, 63.1, 77.8, 68.09, 26.64, 0.52, 1.36, 0.05, 3.34, 48.1000, 51.9000),
(2, 'AK', 'Alaska', 731545, 68.8, 75.4, 64.58, 3.28, 14.89, 6.23, 1.25, 9.76, 50.7000, 49.3000),
(3, 'AZ', 'Arizona', 7278717, 65.9, 77.5, 77.22, 4.50, 4.50, 3.31, 0.21, 10.26, 49.3000, 50.7000),
(4, 'AR', 'Arkansas', 3017804, 56.1, 76.8, 76.72, 15.32, 0.68, 1.52, 0.29, 5.47, 48.4000, 51.6000),
(5, 'CA', 'California', 39512223, 68.5, 77.5, 59.70, 5.79, 0.77, 14.49, 0.40, 18.85, 49.4000, 50.6000),
(6, 'CO', 'Colorado', 5758736, 76.4, 78.1, 84.00, 4.16, 0.98, 3.18, 0.15, 7.53, 50.1000, 49.9000),
(7, 'CT', 'Connecticut', 3565287, 71.5, 79.6, 75.92, 10.72, 0.28, 4.51, 0.03, 8.54, 48.7000, 51.3000),
(8, 'DE', 'Delaware', 973764, 70.7, 79.1, 68.76, 22.18, 0.39, 3.87, 0.06, 4.75, 48.2000, 51.8000),
(9, 'DC', 'District of Columbia', 705749, 64.1, 81.8, 41.27, 46.31, 0.30, 3.98, 0.05, 8.08, 47.5000, 52.5000),
(10, 'FL', 'Florida', 21477737, 71.7, 80.3, 75.12, 16.07, 0.28, 2.73, 0.06, 5.73, 48.5000, 51.5000),
(11, 'GA', 'Georgia', 10617423, 68.0, 76.4, 58.62, 31.61, 0.36, 3.98, 0.06, 5.36, 48.2000, 51.8000),
(12, 'HI', 'Hawaii', 1415872, 57.5, 78.8, 24.95, 1.83, 0.26, 37.79, 10.06, 25.12, 48.8000, 51.2000),
(13, 'ID', 'Idaho', 1787065, 68.0, 74.9, 89.97, 0.69, 1.35, 1.41, 0.16, 6.42, 49.9000, 50.1000),
(14, 'IL', 'Illinois', 12671821, 67.0, 77.8, 71.53, 14.20, 0.26, 5.47, 0.04, 8.50, 48.7000, 51.3000),
(15, 'IN', 'Indiana', 6732219, 61.4, 76.7, 83.31, 9.40, 0.24, 2.28, 0.04, 4.73, 49.0000, 51.0000),
(16, 'IA', 'Iowa', 3155070, 73.2, 77.0, 90.02, 3.71, 0.38, 2.41, 0.12, 3.36, 49.5000, 50.5000),
(17, 'KS', 'Kansas', 2913314, 65.9, 76.0, 84.38, 5.85, 0.82, 2.95, 0.08, 5.92, 49.0000, 51.0000),
(18, 'KY', 'Kentucky', 4467673, 64.9, 77.6, 86.95, 8.07, 0.21, 1.47, 0.07, 3.23, 49.0000, 51.0000),
(19, 'LA', 'Louisiana', 4648794, 64.3, 76.6, 62.01, 32.22, 0.57, 1.73, 0.03, 3.44, 48.1000, 51.9000),
(20, 'ME', 'Maine', 1344212, 76.3, 81.5, 94.31, 1.38, 0.65, 1.13, 0.03, 2.50, 48.4000, 51.6000),
(21, 'MD', 'Maryland', 6045680, 71.1, 77.9, 55.54, 29.89, 0.28, 6.28, 0.05, 7.96, 48.0000, 52.0000),
(22, 'MA', 'Massachusetts', 6892503, 72.1, 80.4, 78.07, 7.63, 0.22, 6.60, 0.04, 7.44, 48.6000, 51.4000),
(23, 'MI', 'Michigan', 9986857, 73.9, 78.5, 78.41, 13.79, 0.54, 3.13, 0.03, 4.10, 49.0000, 51.0000),
(24, 'MN', 'Minnesota', 5639632, 80.0, 76.9, 82.85, 6.41, 1.04, 4.82, 0.04, 4.84, 49.6000, 50.4000),
(25, 'MS', 'Mississippi', 2976149, 60.2, 76.5, 58.41, 37.72, 0.48, 0.99, 0.02, 2.38, 47.5000, 52.5000),
(26, 'MO', 'Missouri', 6137428, 65.7, 77.7, 82.16, 11.49, 0.44, 1.98, 0.13, 3.80, 48.7000, 51.3000),
(27, 'MT', 'Montana', 1068778, 73.1, 78.6, 88.54, 0.50, 6.36, 0.79, 0.08, 3.73, 49.9000, 50.1000),
(28, 'NE', 'Nebraska', 1934408, 69.9, 75.4, 87.06, 4.83, 0.92, 2.38, 0.07, 4.73, 49.7000, 50.3000),
(29, 'NV', 'Nevada', 3080156, 65.4, 77.5, 65.59, 9.12, 1.28, 8.15, 0.67, 15.18, 49.7000, 50.3000),
(30, 'NH', 'New Hampshire', 1359711, 75.5, 81.2, 92.88, 1.60, 0.15, 2.68, 0.03, 2.65, 49.4000, 50.6000),
(31, 'NJ', 'New Jersey', 8882190, 75.3, 78.2, 67.78, 13.46, 0.22, 9.46, 0.04, 9.04, 48.7000, 51.3000),
(32, 'NM', 'New Mexico', 2096829, 61.3, 77.3, 74.81, 2.11, 9.55, 1.56, 0.08, 11.90, 48.8000, 51.2000),
(33, 'NY', 'New York', 19453561, 63.6, 79.3, 63.66, 15.66, 0.41, 8.42, 0.05, 11.81, 48.4000, 51.6000),
(34, 'NC', 'North Carolina', 10488084, 71.5, 78.1, 68.68, 21.44, 1.21, 2.85, 0.07, 5.75, 48.0000, 52.0000),
(35, 'ND', 'North Dakota', 762062, 64.5, 76.4, 86.58, 2.91, 5.29, 1.45, 0.11, 3.66, 50.5000, 49.5000),
(36, 'OH', 'Ohio', 11689100, 67.4, 77.9, 81.30, 12.41, 0.20, 2.22, 0.03, 3.85, 48.9000, 51.1000),
(37, 'OK', 'Oklahoma', 3956971, 55.0, 75.9, 72.32, 7.28, 7.62, 2.17, 0.16, 10.46, 49.0000, 51.0000),
(38, 'OR', 'Oregon', 4217737, 75.5, 79.5, 84.29, 1.91, 1.16, 4.37, 0.40, 7.87, 49.2000, 50.8000),
(39, 'PA', 'Pennsylvania', 12801989, 71.1, 79.4, 80.53, 11.18, 0.19, 3.41, 0.03, 4.65, 48.7000, 51.3000),
(40, 'RI', 'Rhode Island', 1059361, 65.3, 80.7, 80.46, 6.77, 0.50, 3.40, 0.08, 8.80, 48.9000, 51.1000),
(41, 'SC', 'South Carolina', 5148714, 64.5, 78.4, 67.16, 26.77, 0.35, 1.57, 0.08, 4.07, 47.7000, 52.3000),
(42, 'SD', 'South Dakota', 884659, 66.0, 75.5, 84.27, 2.01, 8.75, 1.45, 0.06, 3.45, 50.4000, 49.6000),
(43, 'TN', 'Tennessee', 6829174, 59.8, 77.9, 77.58, 16.76, 0.27, 1.75, 0.06, 3.58, 48.4000, 51.6000),
(44, 'TX', 'Texas', 28995881, 60.4, 74.5, 73.97, 12.13, 0.50, 4.80, 0.09, 8.51, 49.1000, 50.9000),
(45, 'UT', 'Utah', 3205958, 69.2, 71.0, 86.43, 1.19, 1.09, 2.32, 0.89, 8.08, 50.0000, 50.0000),
(46, 'VT', 'Vermont', 623989, 74.2, 81.7, 94.16, 1.36, 0.34, 1.68, 0.05, 2.40, 49.4000, 50.6000),
(47, 'VA', 'Virginia', 8535519, 73.0, 78.2, 67.63, 19.18, 0.28, 6.40, 0.07, 6.44, 48.4000, 51.6000),
(48, 'WA', 'Washington', 7614893, 75.7, 78.2, 75.38, 3.80, 1.28, 8.53, 0.66, 10.35, 49.7000, 50.3000),
(49, 'WV', 'West Virginia', 1792147, 57.6, 79.9, 93.08, 3.69, 0.20, 0.80, 0.02, 2.21, 49.1000, 50.9000),
(50, 'WI', 'Wisconsin', 5822434, 75.8, 78.2, 85.43, 6.41, 0.89, 2.79, 0.04, 4.44, 49.3000, 50.7000),
(51, 'WY', 'Wyoming', 578759, 64.6, 76.9, 91.44, 0.96, 2.44, 0.86, 0.10, 4.19, 50.9000, 49.1000);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `statenum` int(11) NOT NULL,
  `statename` text COLLATE utf8_unicode_ci NOT NULL,
  `stateid` text COLLATE utf8_unicode_ci NOT NULL,
  `stateflag` text COLLATE utf8_unicode_ci NOT NULL,
  `P001A` int(11) NOT NULL,
  `P001B` int(11) NOT NULL,
  `P002A` int(11) NOT NULL,
  `P002B` int(11) NOT NULL,
  `P003A` int(11) NOT NULL,
  `P003B` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`statenum`, `statename`, `stateid`, `stateflag`, `P001A`, `P001B`, `P002A`, `P002B`, `P003A`, `P003B`) VALUES
(1, 'Alabama', 'AL', 'none', 70, 30, 40, 60, 20, 80),
(2, 'Alaska', 'AK', 'none', 0, 0, 0, 0, 0, 0),
(3, 'Arizona', 'AZ', 'none', 0, 0, 0, 0, 0, 0),
(4, 'Arkansas', 'AR', 'none', 0, 0, 0, 0, 0, 0),
(5, 'California', 'CA', 'none', 0, 0, 0, 0, 0, 0),
(6, 'Colorado', 'CO', 'none', 0, 0, 0, 0, 0, 0),
(7, 'Connecticut', 'CT', 'none', 0, 0, 0, 0, 0, 0),
(8, 'Delaware', 'DE', 'none', 0, 0, 0, 0, 0, 0),
(9, 'Florida', 'FL', 'none', 0, 0, 0, 0, 0, 0),
(10, 'Georgia', 'GA', 'none', 0, 0, 0, 0, 0, 0),
(11, 'Hawaii', 'HI', 'none', 0, 0, 0, 0, 0, 0),
(12, 'Idaho', 'ID', 'none', 0, 0, 0, 0, 0, 0),
(13, 'Illinois', 'IL', 'none', 0, 0, 0, 0, 0, 0),
(14, 'Indiana', 'IN', 'none', 0, 0, 0, 0, 0, 0),
(15, 'Iowa', 'IA', 'none', 0, 0, 0, 0, 0, 0),
(16, 'Kansas', 'KS', 'none', 0, 0, 0, 0, 0, 0),
(17, 'Kentucky', 'KY', 'none', 0, 0, 0, 0, 0, 0),
(18, 'Louisiana', 'LA', 'none', 0, 0, 0, 0, 0, 0),
(19, 'Maine', 'ME', 'none', 0, 0, 0, 0, 0, 0),
(20, 'Maryland', 'MD', 'none', 0, 0, 0, 0, 0, 0),
(21, 'Massachusetts', 'MA', 'none', 0, 0, 0, 0, 0, 0),
(22, 'Michigan', 'MI', 'none', 0, 0, 0, 0, 0, 0),
(23, 'Minnesota', 'MN', 'none', 0, 0, 0, 0, 0, 0),
(24, 'Mississippi', 'MS', 'none', 0, 0, 0, 0, 0, 0),
(25, 'Missouri', 'MO', 'none', 0, 0, 0, 0, 0, 0),
(26, 'Montana', 'MT', 'none', 0, 0, 0, 0, 0, 0),
(27, 'Nebraska', 'NE', 'none', 0, 0, 0, 0, 0, 0),
(28, 'Nevada', 'NV', 'none', 0, 0, 0, 0, 0, 0),
(29, 'New Hampshire', 'NH', 'none', 0, 0, 0, 0, 0, 0),
(30, 'New Jersey', 'NJ', 'none', 0, 0, 0, 0, 0, 0),
(31, 'New Mexico', 'NM', 'none', 0, 0, 0, 0, 0, 0),
(32, 'New York', 'NY', 'none', 0, 0, 0, 0, 0, 0),
(33, 'North Carolina', 'NC', 'none', 0, 0, 0, 0, 0, 0),
(34, 'North Dakota', 'ND', 'none', 0, 0, 0, 0, 0, 0),
(35, 'Ohio', 'OH', 'none', 0, 0, 0, 0, 0, 0),
(36, 'Oklahoma', 'OK', 'none', 0, 0, 0, 0, 0, 0),
(37, 'Oregon', 'OR', 'none', 0, 0, 0, 0, 0, 0),
(38, 'Pennsylvania', 'PA', 'none', 0, 0, 0, 0, 0, 0),
(39, 'Rhode Island', 'RI', 'none', 0, 0, 0, 0, 0, 0),
(40, 'South Carolina', 'SC', 'none', 0, 0, 0, 0, 0, 0),
(41, 'South Dakota', 'SD', 'none', 0, 0, 0, 0, 0, 0),
(42, 'Tennesse', 'TN', 'none', 0, 0, 0, 0, 0, 0),
(43, 'Texas', 'TX', 'none', 0, 0, 0, 0, 0, 0),
(44, 'Utah', 'UT', 'none', 0, 0, 0, 0, 0, 0),
(45, 'Vermont', 'VT', 'none', 0, 0, 0, 0, 0, 0),
(46, 'Virginia', 'VA', 'none', 0, 0, 0, 0, 0, 0),
(47, 'Washington', 'WA', 'none', 0, 0, 0, 0, 0, 0),
(48, 'West Virginia', 'WV', 'none', 0, 0, 0, 0, 0, 0),
(49, 'Wisconsin', 'WI', 'none', 0, 0, 0, 0, 0, 0),
(50, 'Wyoming', 'WY', 'none', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `cpic` text COLLATE utf8_unicode_ci NOT NULL,
  `cname` text COLLATE utf8_unicode_ci NOT NULL,
  `state` text COLLATE utf8_unicode_ci NOT NULL,
  `partyid` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `actionp` int(11) NOT NULL,
  `state_influ` decimal(11,2) NOT NULL,
  `nation_influ` decimal(11,2) NOT NULL,
  `approval` decimal(11,2) NOT NULL,
  `pleadervoteid` int(11) NOT NULL,
  `leadervotes` int(11) NOT NULL,
  `advisor1id` int(11) NOT NULL,
  `positionid` int(11) NOT NULL,
  `ppositionid` int(11) NOT NULL,
  `inelection` int(11) NOT NULL,
  `pinelection` int(11) NOT NULL,
  `hoursinactive` int(11) NOT NULL,
  `accountage` int(11) NOT NULL,
  `campaignsong` text COLLATE utf8_unicode_ci NOT NULL,
  `biography` text COLLATE utf8_unicode_ci NOT NULL,
  `corruption` double(5,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `cpic`, `cname`, `state`, `partyid`, `money`, `actionp`, `state_influ`, `nation_influ`, `approval`, `pleadervoteid`, `leadervotes`, `advisor1id`, `positionid`, `ppositionid`, `inelection`, `pinelection`, `hoursinactive`, `accountage`, `campaignsong`, `biography`, `corruption`) VALUES
(1, '3dSzFje.jpeg', 'Adrian', 'AL', 8, 14214973, 26333, 50.00, 0.00, 60.00, 1, 1, 1, 1, 0, 1, 0, 0, 8258, 'SYnVYJDxu2Q', '  bccbcb g hfhgf hgf hfg hdfh gf yjhj dyjyj yjyj d j jgy jdjhgjhjhj ehjdj   jdh j j jd jhjgh jdyj ', 10.10),
(2, '3dSzFje.jpeg', 'Adrian2', 'AL', 10, 14214973, 26333, 49.97, -0.39, 50.00, 1, 0, 1, 2, 0, 1, 0, 64, 8258, 'SYnVYJDxu2Q', '  bccbcb g hfhgf hgf hfg hdfh gf yjhj dyjyj yjyj d j jgy jdjhgjhjhj ehjdj   jdh j j jd jhjgh jdyj ', 10.10),
(3, '3dSzFje.jpeg', 'Adrian3', 'AL', 10, 14214973, 26333, 49.97, -0.39, 50.00, 1, 0, 1, 3, 0, 1, 0, 0, 8258, 'SYnVYJDxu2Q', '  bccbcb g hfhgf hgf hfg hdfh gf yjhj dyjyj yjyj d j jgy jdjhgjhjhj ehjdj   jdh j j jd jhjgh jdyj ', 10.10);

-- --------------------------------------------------------

--
-- Table structure for table `userposition`
--

CREATE TABLE `userposition` (
  `ID` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userposition`
--

INSERT INTO `userposition` (`ID`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(1, 1, 2, 1, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 2, 1, 0, 0, 0, 0, 0, 0, 0),
(3, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `electionvalues`
--
ALTER TABLE `electionvalues`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Gamestate`
--
ALTER TABLE `Gamestate`
  ADD PRIMARY KEY (`election`);

--
-- Indexes for table `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`NationID`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`sorter`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`partyid`);

--
-- Indexes for table `partypositions`
--
ALTER TABLE `partypositions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shistory`
--
ALTER TABLE `shistory`
  ADD PRIMARY KEY (`horder`);

--
-- Indexes for table `statedemo`
--
ALTER TABLE `statedemo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`statenum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userposition`
--
ALTER TABLE `userposition`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laws`
--
ALTER TABLE `laws`
  MODIFY `NationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `sorter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `partyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `shistory`
--
ALTER TABLE `shistory`
  MODIFY `horder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `statenum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userposition`
--
ALTER TABLE `userposition`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
