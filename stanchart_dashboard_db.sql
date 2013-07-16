-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2013 at 05:42 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stanchart_dashboard`
--
CREATE DATABASE `stanchart_dashboard` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stanchart_dashboard`;

-- --------------------------------------------------------

--
-- Table structure for table `24_hour_query_resolution`
--

CREATE TABLE IF NOT EXISTS `24_hour_query_resolution` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `24_hour_query_resolution`
--

INSERT INTO `24_hour_query_resolution` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Total No. Of Helpline Queries', 1664, 0, 14, 24, 19, 13, 14, 16, 18, 15, 37, 28, 29),
(2, '24Hrs Resolution', 1597.44, 0, 14, 24, 19, 13, 13, 16, 18, 15, 37, 28, 29),
(3, '% 24Hr Resolution', 0.96, 0, 1, 1, 1, 1, 0.928571429, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `absolute_volume_or_processing_headcount`
--

CREATE TABLE IF NOT EXISTS `absolute_volume_or_processing_headcount` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `absolute_volume_or_processing_headcount`
--

INSERT INTO `absolute_volume_or_processing_headcount` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Absolute Volume/Processing Head Count', 0, 0, 1638.87931, 1749.551724, 2119.65, 1608.616667, 1690.9, 1601.693548, 1522.951613, 1578.209677, 1671.904762, 1459.25, 1600.393939);

-- --------------------------------------------------------

--
-- Table structure for table `activity_volume_by_country`
--

CREATE TABLE IF NOT EXISTS `activity_volume_by_country` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `activity_volume_by_country`
--

INSERT INTO `activity_volume_by_country` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'KEN', 55424.2, 53854.2, 53717.2, 55602.2, 67489, 62626, 65384, 62802, 122541, 131633, 143370, 133790, 141321),
(2, 'UGA', 9700.2, 11836.2, 8801.2, 9860.2, 13040, 12975, 13698, 13635, 20288, 21918, 23118, 21691, 25308),
(3, 'TZA', 9402.2, 10189.2, 10022.2, 11042.2, 15300, 12221, 13748, 14075, 18553, 19466, 22281, 18777, 23771),
(4, 'ZAM', 9595.2, 9726.2, 10106.2, 10834.2, 17093, 16950, 17242, 19295, 23510, 25480, 26485, 25529, 29071),
(5, 'BOT', 8187.2, 8466.2, 7940.2, 9064.2, 9928, 9587, 11087, 10483, 15858, 15658, 18118, 18116, 18161),
(6, 'ZAR', 7025, 6325, 4468, 5418, 5318, 6304, 5789, 6792, 7378, 7432, 8112, 6287, 21216);

-- --------------------------------------------------------

--
-- Table structure for table `backlog_and_tat_compliance`
--

CREATE TABLE IF NOT EXISTS `backlog_and_tat_compliance` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `backlog_and_tat_compliance`
--

INSERT INTO `backlog_and_tat_compliance` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Backlog', 0, 0, 0, 0, 0, 0, 0, 0, 0, 93, 343, 197, 33),
(2, 'TAT Compliance', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0.999049556, 0.996743568, 0.997890612, 0.999687577);

-- --------------------------------------------------------

--
-- Table structure for table `country_hct_by_weighted_volume`
--

CREATE TABLE IF NOT EXISTS `country_hct_by_weighted_volume` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `country_hct_by_weighted_volume`
--

INSERT INTO `country_hct_by_weighted_volume` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'KEN', 37.01395062, 32.79987654, 31.57518519, 31.57679012, 39.98037037, 36.74493827, 37.85716049, 35.30197531, 35.11123457, 36.78814815, 40.41123457, 39.30975309, 45.00753086),
(2, 'UGA', 7.422592593, 12.43246914, 6.700617284, 6.094691358, 7.155555556, 6.927283951, 7.350617284, 6.582839506, 5.438271605, 6.508271605, 6.768518519, 6.337407407, 7.734444444),
(3, 'TZA', 7.249012346, 6.774074074, 8.614691358, 7.182345679, 8.576790123, 7.198765432, 8.783333333, 6.530864198, 6.688271605, 7.553580247, 8.77617284, 7.000246914, 9.612716049),
(4, 'ZAM', 5.973703704, 5.12617284, 5.081851852, 5.538888889, 9.238271605, 5.69345679, 6.127777778, 6.170246914, 5.641111111, 5.531975309, 6.052962963, 6.424444444, 7.197654321),
(5, 'BOT', 4.291358025, 4.207407407, 3.88962963, 4.275679012, 4.257160494, 4.213703704, 4.785925926, 4.45345679, 4.159259259, 4.601851852, 4.481358025, 4.325555556, 5.03617284),
(6, 'ZAR', 14.40320988, 16.40518519, 11.36641975, 5.923703704, 7.893333333, 9.076296296, 7.885432099, 5.516049383, 5.290123457, 5.637407407, 6.059012346, 5.303333333, 8.513703704);

-- --------------------------------------------------------

--
-- Table structure for table `cur_&_productivity_trend`
--

CREATE TABLE IF NOT EXISTS `cur_&_productivity_trend` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cur_&_productivity_trend`
--

INSERT INTO `cur_&_productivity_trend` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Standard CUR', 1.11, 1.13, 1.09, 0.679675132, 0.758483034, 0.612109115, 0.981370592, 0.840254974, 0.811280664, 0.851522761, 0.812660393, 0.798403194, 0.824109357),
(2, 'Available CUR', 1.07, 1.04, 1.05, 0.968137255, 0.953336678, 0.800069571, 1.233638607, 1.113101331, 1.046598555, 1.053868834, 0.960674157, 1.040650407, 1.068627451),
(3, 'Actual Productivity', 1.04, 1.03, 1.01, 0.802845528, 0.844444444, 0.766666667, 1.156862745, 1.0875, 0.933333333, 1.037254902, 0.95, 1.066666667, 0.95113438);

-- --------------------------------------------------------

--
-- Table structure for table `customer_complaints_vs_accuracy`
--

CREATE TABLE IF NOT EXISTS `customer_complaints_vs_accuracy` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `customer_complaints_vs_accuracy`
--

INSERT INTO `customer_complaints_vs_accuracy` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Customer Complaints', 16, 17, 10, 5, 1, 1, 1, 1, 6, 1, 37, 22, 18),
(2, 'Accuracy', 0.999838927, 0.999830672, 0.999894798, 0.999950894, 0.999992198, 0.999991712, 0.999992123, 0.999992131, 0.999971172, 0.999995487, 0.999846781, 0.999901869, 0.999930461),
(3, 'Point Zero Target', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(4, '50% Gap', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employed_vs_unemployed_worker`
--

CREATE TABLE IF NOT EXISTS `employed_vs_unemployed_worker` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employed_vs_unemployed_worker`
--

INSERT INTO `employed_vs_unemployed_worker` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Employed Worker (FTE)', 63, 64, 64, 64, 65, 65, 65, 65, 65, 65, 66, 66, 66),
(2, 'Non-employed Worker (NFTE)', 5, 5, 5, 5, 9, 6, 6, 8, 8, 8, 8, 9, 11),
(3, '% of Non-employed workforce', 0.103448276, 0.103448276, 0.103448276, 0.103448276, 0.1, 0.1, 0.084507042, 0.109589041, 0.109589041, 0.109589041, 0.108108108, 0.12, 0.142857143);

-- --------------------------------------------------------

--
-- Table structure for table `interday_volumes_flow`
--

CREATE TABLE IF NOT EXISTS `interday_volumes_flow` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `interday_volumes_flow`
--

INSERT INTO `interday_volumes_flow` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Monday', 0, 2195, 1836, 2035, 1657, 1515, 1609, 2474, 2265, 1927, 2075, 0, 0),
(2, 'Tuesday', 0, 2534, 1890, 2117, 1728, 1454, 1716, 1433, 1798, 2043, 2046, 0, 0),
(3, 'Wednesday', 0, 3320, 2706, 2801, 2360, 2505, 2474, 1716, 1870, 2008, 2191, 0, 0),
(4, 'Thursday', 0, 3199, 2541, 2587, 2541, 2135, 2230, 1890, 1912, 2050, 2119, 0, 0),
(5, 'Friday', 0, 2529, 2838, 2748, 2695, 2415, 2394, 1653, 1923, 1949, 1932, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mandatory_elearning_completion_rate`
--

CREATE TABLE IF NOT EXISTS `mandatory_elearning_completion_rate` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mandatory_elearning_completion_rate`
--

INSERT INTO `mandatory_elearning_completion_rate` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'No Of Staff Not Completed', 1, 3, 1, 0, 0, 0, 0, 0, 6, 0, 0, 0, 0),
(2, 'Completion Rate %', 0.985294118, 0.956521739, 0.985507246, 1, 1, 1, 1, 1, 0.917808219, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `overtime_hours_vs_average_working_hour`
--

CREATE TABLE IF NOT EXISTS `overtime_hours_vs_average_working_hour` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `overtime_hours_vs_average_working_hour`
--

INSERT INTO `overtime_hours_vs_average_working_hour` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Overtime Hrs (Week Days)', 1636.666667, 1966.111111, 870.2777778, 1038, 768, 0, 88.5, 0, 533.5, 0, 0, 0, 589.6111111),
(2, 'Average Wkg Hrs(Week Days)', 11.86813187, 11.77705977, 10.35719726, 10.67839196, 9.353333333, 8.5, 8.598333333, 8.5, 9.092777778, 8.5, 8.5, 8.5, 9.103011364),
(3, 'H''day & Weekend Working Hrs', 200, 400, 245, 100, 200, 100, 12, 90, 90, 90, 50, 18, 12),
(4, 'Expected Working Hrs', 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5, 9.5);

-- --------------------------------------------------------

--
-- Table structure for table `pass1_errors_vs_maker_accuracy`
--

CREATE TABLE IF NOT EXISTS `pass1_errors_vs_maker_accuracy` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pass1_errors_vs_maker_accuracy`
--

INSERT INTO `pass1_errors_vs_maker_accuracy` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Pass 1 errors', 323, 360, 413, 323, 273, 265, 265, 247, 281, 265, 235, 235, 213),
(2, 'Maker Accuracy', 0.996436266, 0.996115422, 0.995392141, 0.996621522, 0.997799763, 0.9977375, 0.997770741, 0.997969815, 0.998563384, 0.998758952, 0.998840503, 0.998809046, 0.999061225),
(3, 'Point Zero Target', 0.993, 0.993, 0.993, 0.993, 0.993, 0.993, 0.993, 0.993, 0.998, 0.998, 0.998, 0.998, 0.998),
(4, '50% Gap', 0.9965, 0.9965, 0.9965, 0.9965, 0.9965, 0.9965, 0.9965, 0.9965, 0.989, 0.999, 0.999, 0.999, 0.999);

-- --------------------------------------------------------

--
-- Table structure for table `pass2_errors_vs_checker_accuracy`
--

CREATE TABLE IF NOT EXISTS `pass2_errors_vs_checker_accuracy` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pass2_errors_vs_checker_accuracy`
--

INSERT INTO `pass2_errors_vs_checker_accuracy` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Pass 2 errors', 15, 13, 15, 16, 8, 7, 17, 10, 12, 9, 8, 10, 12),
(2, 'Checker Accuracy', 0.999687922, 0.999701186, 0.999736994, 0.999793756, 0.99992978, 0.9999337, 0.99985821, 0.999913442, 0.999913515, 0.999954871, 0.999813652, 0.999857264, 0.999884102),
(3, 'Point Zero Target', 0.99946, 0.99946, 0.99946, 0.99946, 0.99946, 0.99946, 0.99946, 0.99946, 0.99993, 0.99993, 0.99993, 0.99993, 0.99993),
(4, '50% Gap', 0.99973, 0.99973, 0.99973, 0.99973, 0.99973, 0.99973, 0.99973, 0.99973, 0.99997, 0.99997, 0.99997, 0.99997, 0.999965);

-- --------------------------------------------------------

--
-- Table structure for table `processors_&_non_processors_total_hct`
--

CREATE TABLE IF NOT EXISTS `processors_&_non_processors_total_hct` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `processors_&_non_processors_total_hct`
--

INSERT INTO `processors_&_non_processors_total_hct` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Employed Worker (FTE)', 63, 64, 64, 64, 65, 65, 65, 65, 65, 65, 66, 66, 66),
(2, 'Non-employed Worker (NFTE)', 5, 5, 5, 5, 9, 6, 6, 8, 8, 8, 8, 9, 11),
(3, 'Total HCT', 68, 69, 69, 69, 74, 71, 71, 73, 73, 73, 74, 75, 77),
(4, 'No Of Processors', 58, 58, 58, 58, 60, 60, 60, 62, 62, 62, 63, 64, 66),
(5, 'No Of Non Processors', 10, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11, 11),
(6, 'Total HCT', 68, 69, 69, 69, 71, 71, 71, 73, 73, 73, 74, 75, 77),
(7, '% of Non-employed workforce', 7, 7, 7, 7, 12, 8, 8, 11, 11, 11, 11, 12, 14),
(8, 'HCT Correctness Check', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'No. Of Processors (FTE)', 52, 52, 52, 52, 54, 54, 54, 54, 54, 54, 55, 55, 55),
(10, 'No. Of Processors (NFTE)', 6, 6, 6, 6, 6, 6, 6, 8, 8, 8, 8, 9, 11),
(11, '% of Non-employed workforce', 10, 10, 10, 10, 10, 10, 8, 11, 11, 11, 11, 12, 14),
(12, 'Processors HCT Correctness Check', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rejects_by_country_percentage`
--

CREATE TABLE IF NOT EXISTS `rejects_by_country_percentage` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `rejects_by_country_percentage`
--

INSERT INTO `rejects_by_country_percentage` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'KEN', 0, 0, 0, 0, 0, 0.19354838, 0.21052631, 0.16371681, 0.1352459, 0.09473684, 0.15432098, 0.14285714, 0.00011321),
(2, 'UGA', 0, 0, 0, 0, 0, 0.16532258, 0.14979757, 0.16814159, 0.24590163, 0.1368421, 0.2345679, 0.17006802, 0.00106685),
(3, 'TZA', 0, 0, 0, 0, 0, 0.24596774, 0.20647773, 0.19026548, 0.20491803, 0.25263157, 0.21604938, 0.22448979, 0.00109377),
(4, 'ZAM', 0, 0, 0, 0, 0, 0.18548387, 0.18623481, 0.18141592, 0.15163934, 0.16842105, 0.1728395, 0.19047619, 0.00079116),
(5, 'BOT', 0, 0, 0, 0, 0, 0.1532258, 0.1659919, 0.15044247, 0.14344262, 0.17368421, 0.15432098, 0.1632653, 0.00143163),
(6, 'ZAR', 0, 0, 0, 0, 0, 56.9180327, 0.00345482, 0.00485865, 0.0039306, 0.00444025, 0.06790123, 0.10884353, 0.00070701);

-- --------------------------------------------------------

--
-- Table structure for table `rejects_or_defectives`
--

CREATE TABLE IF NOT EXISTS `rejects_or_defectives` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rejects_or_defectives`
--

INSERT INTO `rejects_or_defectives` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Total Reject', 378, 485, 413, 396, 317, 248, 247, 226, 244, 190, 162, 147, 133),
(2, '% Total Rejects', 0.003805344, 0.004830822, 0.004344853, 0.003889178, 0.002473316, 0.002055311, 0.001945679, 0.001778379, 0.002584116, 0.001941767, 0.001538023, 0.001395614, 0.00125916);

-- --------------------------------------------------------

--
-- Table structure for table `staff_turnover`
--

CREATE TABLE IF NOT EXISTS `staff_turnover` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `staff_turnover`
--

INSERT INTO `staff_turnover` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Monthly Turnover', 0, 3, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 2),
(2, 'Attrition Rate', 0.044117647, 0.086956522, 0.086956522, 0.101449275, 0.108108108, 0.126760563, 0.126760563, 0.136986301, 0.150684932, 0.150684932, 0.135135135, 0.133333333, 0.155844156);

-- --------------------------------------------------------

--
-- Table structure for table `standard_&_average_working_days`
--

CREATE TABLE IF NOT EXISTS `standard_&_average_working_days` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `standard_&_average_working_days`
--

INSERT INTO `standard_&_average_working_days` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Average Working Days', 11.49425287, 13.40996169, 12.83524904, 13.79310345, 15, 14.44444444, 15, 14.24731183, 14.51612903, 15.23297491, 16.04938272, 14.58333333, 14.81481481),
(2, 'Standard Working Days', 18.2, 18.2, 18.2, 18.2, 18.2, 18.2, 18.2, 18.2, 18.2, 18.2, 18.2, 18.2, 18.2);

-- --------------------------------------------------------

--
-- Table structure for table `total_overtime`
--

CREATE TABLE IF NOT EXISTS `total_overtime` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `total_overtime`
--

INSERT INTO `total_overtime` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Total Overtime Hrs', 1836.666667, 2366.111111, 1115.277778, 1138, 968, 100, 100.5, 90, 623.5, 90, 50, 18, 601.6111111),
(2, '% Overtime', 0.318681319, 0.362129071, 0.160941195, 0.150489289, 0.115789474, 0.01215978, 0.011767461, 0.010737081, 0.073005093, 0.010062924, 0.005220811, 0.002034435, 0.064966074);

-- --------------------------------------------------------

--
-- Table structure for table `volumes`
--

CREATE TABLE IF NOT EXISTS `volumes` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `volumes`
--

INSERT INTO `volumes` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Volumes (Products)', 0, 0, 95055, 101474, 127179, 96517, 101454, 99305, 94423, 97849, 105330, 93392, 105626),
(2, 'Volumes (SWSR)', 99334, 100397, 95055, 101821, 128168, 120663, 126948, 127082, 208128, 221587, 241484, 224190, 258848),
(3, 'Volumes (RF Monthly)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Volumes (FileNet)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `volumes_vs_weighted_volumes`
--

CREATE TABLE IF NOT EXISTS `volumes_vs_weighted_volumes` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `volumes_vs_weighted_volumes`
--

INSERT INTO `volumes_vs_weighted_volumes` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'Earned Time (Weighted Vol)', 345000, 623000, 5444000, 395000, 456000, 368000, 590000, 522000, 504000, 529000, 513000, 512000, 545000),
(2, 'Volumes (Products)', 0, 0, 95055, 101474, 127179, 96517, 101454, 99305, 94423, 97849, 105330, 93392, 105626),
(3, 'Volumes (SWSR)', 99334, 100397, 95055, 101821, 128168, 120663, 126948, 127082, 208128, 221587, 241484, 224190, 258848);

-- --------------------------------------------------------

--
-- Table structure for table `weighted_activity_volume_by_country`
--

CREATE TABLE IF NOT EXISTS `weighted_activity_volume_by_country` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `weighted_activity_volume_by_country`
--

INSERT INTO `weighted_activity_volume_by_country` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'KEN', 299813, 265679, 255759, 255772, 323841, 297634, 306643, 285946, 284401, 297984, 327331, 318409, 364561),
(2, 'UGA', 60123, 100703, 54275, 49367, 57960, 56111, 59540, 53321, 44050, 52717, 54825, 51333, 62649),
(3, 'TZA', 58717, 54870, 69779, 58177, 69472, 58310, 71145, 52900, 54175, 61184, 71087, 56702, 77863),
(4, 'ZAM', 48387, 41522, 41163, 44865, 74830, 46117, 49635, 49979, 45693, 44809, 49029, 52038, 58301),
(5, 'BOT', 34760, 34080, 31506, 34633, 34483, 34131, 38766, 36073, 33690, 37275, 36299, 35037, 40793),
(6, 'ZAR', 116666, 132882, 92068, 47982, 63936, 73518, 63872, 44680, 42850, 45663, 49078, 42957, 68961);

-- --------------------------------------------------------

--
-- Table structure for table `weighted_volume_per_processing_hct`
--

CREATE TABLE IF NOT EXISTS `weighted_volume_per_processing_hct` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `parameter` varchar(45) NOT NULL,
  `may_11` double NOT NULL DEFAULT '0',
  `june_11` double NOT NULL,
  `july_11` double NOT NULL,
  `aug_11` double NOT NULL,
  `sept_11` double NOT NULL,
  `oct_11` double NOT NULL,
  `nov_11` double NOT NULL,
  `dec_11` double NOT NULL,
  `jan_12` double NOT NULL,
  `feb_12` double NOT NULL,
  `mar_12` double NOT NULL,
  `apr_12` double NOT NULL,
  `may_12` double NOT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `weighted_volume_per_processing_hct`
--

INSERT INTO `weighted_volume_per_processing_hct` (`recordID`, `parameter`, `may_11`, `june_11`, `july_11`, `aug_11`, `sept_11`, `oct_11`, `nov_11`, `dec_11`, `jan_12`, `feb_12`, `mar_12`, `apr_12`, `may_12`) VALUES
(1, 'WV/Processor HCT', 5948.275862, 10741.37931, 93862.06897, 6810.344828, 7600, 6133.333333, 9833.333333, 8419.354839, 8129.032258, 8532.258065, 8142.857143, 8000, 8257.575758),
(2, 'No Of Processors', 58, 58, 58, 58, 60, 60, 60, 62, 62, 62, 63, 64, 66),
(3, 'Standard WV per Processor HCT', 10020, 10020, 10020, 10020, 10020, 10020, 10020, 10020, 10020, 10020, 10020, 10020, 10020);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
