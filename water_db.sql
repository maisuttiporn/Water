-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2015 at 04:22 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `water_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminsetting_department`
--

CREATE TABLE `adminsetting_department` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `department_ID` varchar(20) NOT NULL,
  `department_NAME` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `adminsetting_department`
--

INSERT INTO `adminsetting_department` (`ID`, `department_ID`, `department_NAME`) VALUES
(6, 'TR01', 'แผนกขนส่ง'),
(7, 'EV01', 'แผนกสิ่งแวดล้อม'),
(8, 'AC01', 'แผนกบัญชีและการเงิน'),
(9, 'HR01', 'แผนกบุคคล'),
(10, 'OP01', 'แผนกปฏิบัติการ'),
(11, 'MK01', 'แผนกการตลาด'),
(12, 'MD01', 'แผนกบริหาร'),
(13, 'AD01', 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

--
-- Table structure for table `adminsetting_unit`
--

CREATE TABLE `adminsetting_unit` (
  `unit_ID` int(11) NOT NULL AUTO_INCREMENT,
  `unit_NAME` varchar(500) NOT NULL,
  PRIMARY KEY (`unit_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `adminsetting_unit`
--

INSERT INTO `adminsetting_unit` (`unit_ID`, `unit_NAME`) VALUES
(19, 'ตัน'),
(20, 'เที่ยว'),
(63, 'บาท'),
(64, 'adfa'),
(65, 'adfda');

-- --------------------------------------------------------

--
-- Table structure for table `adminsetting_user`
--

CREATE TABLE `adminsetting_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_EMAIL` varchar(200) NOT NULL,
  `user_PASSWORD` varchar(20) NOT NULL,
  `user_FULLNAME` varchar(200) NOT NULL,
  `department_ID` varchar(20) NOT NULL,
  `usergroup_ID` varchar(20) NOT NULL,
  `user_STATUS` varchar(20) NOT NULL DEFAULT 'new',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `adminsetting_user`
--

INSERT INTO `adminsetting_user` (`ID`, `user_EMAIL`, `user_PASSWORD`, `user_FULLNAME`, `department_ID`, `usergroup_ID`, `user_STATUS`) VALUES
(47, 'mm@mm', '111111', '11', 'AD01', 'ENVGRP', 'new'),
(48, 'maisuttiporn@gmail.com', '123456', 'สุทธิพร เรือนเย็น', 'AD01', 'ADMIN', 'new'),
(49, 'info@thaionlyone.com', 'thaionlyone', 'แอดมิน รักษ์ดี', 'AD01', 'ADMIN', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `adminsetting_usergroup`
--

CREATE TABLE `adminsetting_usergroup` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `usergroup_ID` varchar(20) NOT NULL,
  `usergroup_NAME` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `adminsetting_usergroup`
--

INSERT INTO `adminsetting_usergroup` (`ID`, `usergroup_ID`, `usergroup_NAME`) VALUES
(30, 'USR1', 'ฝายขาย OFFICE'),
(31, 'USR2', 'ฝายขาย Freelance'),
(32, 'ADMIN', 'System Administrator'),
(33, 'ENVGRP', 'สิ่งแวดล้อม');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3e76a59a384916acfc6f7ae305033105', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/600.6.3 (KHTML, like Gecko) Version/8.0.6 Safari/600.6.3', 1435310468, '');

-- --------------------------------------------------------

--
-- Table structure for table `saleservice_inquiry1`
--

CREATE TABLE `saleservice_inquiry1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOC_ID` varchar(20) NOT NULL,
  `DOC_DATETIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `inquiry_WASTECODE` varchar(20) NOT NULL,
  `inquiry_WASTEOWNER` varchar(20) NOT NULL,
  `inquiry_DATE` varchar(20) NOT NULL,
  `inquiry_WASTENAME` varchar(500) NOT NULL,
  `inquiry_FACTNAME` varchar(500) NOT NULL,
  `inquiry_FACTADDR` varchar(1000) NOT NULL,
  `inquiry_FACTCONTACT` varchar(200) NOT NULL,
  `inquiry_FACTPOSITION` varchar(200) NOT NULL,
  `inquiry_FACTTEL` varchar(20) NOT NULL,
  `inquiry_FACTFAX` varchar(20) NOT NULL,
  `inquiry_FACTEMAIL` varchar(100) NOT NULL,
  `inquiry_STATUS` varchar(10) NOT NULL DEFAULT 'NEW',
  `inquiry_CREATEBY` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `saleservice_inquiry1`
--

INSERT INTO `saleservice_inquiry1` (`ID`, `DOC_ID`, `DOC_DATETIME`, `inquiry_WASTECODE`, `inquiry_WASTEOWNER`, `inquiry_DATE`, `inquiry_WASTENAME`, `inquiry_FACTNAME`, `inquiry_FACTADDR`, `inquiry_FACTCONTACT`, `inquiry_FACTPOSITION`, `inquiry_FACTTEL`, `inquiry_FACTFAX`, `inquiry_FACTEMAIL`, `inquiry_STATUS`, `inquiry_CREATEBY`) VALUES
(1, 'DOC000001', '2015-06-24 03:11:07', '', '', '', '', '', '', '', '', '', '', '', 'NEW', ''),
(2, 'xx', '2015-06-24 08:19:48', 'sdsd', 'dasd', 'dsdsad', 'dsd', 'sdasd', 'dsad', 'dsad', 'dasdsa', 'dsad', 'dsadas', 'dasd', 'NEW', 'xx'),
(3, 'xx', '2015-06-24 08:21:50', 'sdsd', 'dasd', 'dsdsad', 'dsd', 'sdasd', 'dsad', 'dsad', 'dasdsa', 'dsad', 'dsadas', 'dasd', 'NEW', 'xx'),
(4, 'xx', '2015-06-24 08:22:05', 'sdsd', 'dasd', 'dsdsad', 'dsd', 'sdasd', 'dsad', 'dsad', 'dasdsa', 'dsad', 'dsadas', 'dasd', 'NEW', 'xx'),
(5, 'xx', '2015-06-24 08:23:07', 'adasd', 'asdsad', 'sadsads', 'adasdas', 'dsadasd', 'dasdasdas', 'dasdas', 'dasdas', 'dsadsa', 'dasdsa', 'dsad', 'NEW', 'xx'),
(6, 'DOC0000006', '2015-06-24 08:34:05', 'adfda', 'fdafda', 'fdaf', 'fad', 'fadfadf', 'dfdsF', 'DSFDS', 'FDSF', 'FDSFDSF', 'DFDS', 'FDSF', 'NEW', 'xx'),
(7, 'DOC0000007', '2015-06-24 08:37:06', 'X87474', '3049893028493', '18012553', 'น้ำเสียจากการซักล้างไลน์', 'Thai Only One Co.,Ltd.', 'หมู่ที่ 2 ตำบล เขาคันทรง อำเภอ ศรีราชา ชลบุรี 20110', 'สมชาย', 'หัวหน้าฝ่ายผลิต', '0-3841-6953', '0-3841-6953', 'info@thaionlyone.com', 'NEW', 'xx');

-- --------------------------------------------------------

--
-- Table structure for table `saleservice_inquiry2`
--

CREATE TABLE `saleservice_inquiry2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOC_ID` varchar(20) NOT NULL,
  `DOC_DATETIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `inquiry_INDUSTRYTYPE` varchar(200) NOT NULL,
  `inquiry_MAINPRODUCT` varchar(200) NOT NULL,
  `inquiry_INDUSTRYWNAME` varchar(200) NOT NULL,
  `inquiry_CHEMNAME` varchar(200) NOT NULL,
  `inquiry_PRESENTSTORE` varchar(200) NOT NULL,
  `inquiry_MAXSTORE` varchar(200) NOT NULL,
  `inquiry_GENRATEWMONTH` varchar(200) NOT NULL,
  `inquiry_GENRATEWYEAR` varchar(200) NOT NULL,
  `inquiry_GENRATEPDAYOPT` varchar(200) NOT NULL,
  `inquiry_GENRATEPDAYTXT` varchar(200) NOT NULL,
  `inquiry_GENRATEPMONTHOPT` varchar(200) NOT NULL,
  `inquiry_GENRATEPMMONTHTXT` varchar(200) NOT NULL,
  `inquiry_SOLIDOPT` varchar(200) NOT NULL,
  `inquiry_SOLIDRADIO` varchar(200) NOT NULL,
  `inquiry_SOLIDTXT` varchar(200) NOT NULL,
  `inquiry_SLUDGEOPT` varchar(200) NOT NULL,
  `inquiry_SLUDGERADIO` varchar(200) NOT NULL,
  `inquiry_WETSOLIDOPT` varchar(200) NOT NULL,
  `inquiry_LIQUIDOPT` varchar(200) NOT NULL,
  `inquiry_ODOR` varchar(200) NOT NULL,
  `inquiry_COLOR` varchar(200) NOT NULL,
  `inquiry_WATERCONTENT` varchar(200) NOT NULL,
  `inquiry_WATERBASEOPT` varchar(200) NOT NULL,
  `inquiry_OILBASEOPT` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saleservice_inquiry2_wastecomponent`
--

CREATE TABLE `saleservice_inquiry2_wastecomponent` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOC_ID` varchar(20) NOT NULL,
  `inquiry_WASTECOMPONENT` varchar(200) NOT NULL,
  `inquiry_APPROX` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
