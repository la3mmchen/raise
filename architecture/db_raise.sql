-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2011 at 12:46 PM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_raise`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_businessbranch`
--

CREATE TABLE IF NOT EXISTS `tbl_businessbranch` (
  `businessbranch_id` int(11) NOT NULL AUTO_INCREMENT,
  `businessbranch_name` varchar(250) NOT NULL,
  `businessbranch_description` text NOT NULL,
  PRIMARY KEY (`businessbranch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_businessbranch`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate`
--

CREATE TABLE IF NOT EXISTS `tbl_certificate` (
  `certificate_id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_name` varchar(250) NOT NULL,
  `certificate_file` varchar(200) NOT NULL,
  PRIMARY KEY (`certificate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_certificate`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(250) NOT NULL,
  `company_contact` varchar(250) NOT NULL,
  `company_locationCount` int(11) NOT NULL DEFAULT '0',
  `company_description` text NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_company`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_company2businessbranch`
--

CREATE TABLE IF NOT EXISTS `tbl_company2businessbranch` (
  `company2businessbranch_companyId` int(11) NOT NULL,
  `company2businessbranch_businessbranchId` int(11) NOT NULL,
  PRIMARY KEY (`company2businessbranch_companyId`,`company2businessbranch_businessbranchId`),
  KEY `company2businessbranch_businessbranchId` (`company2businessbranch_businessbranchId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company2businessbranch`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_company2contactInformation`
--

CREATE TABLE IF NOT EXISTS `tbl_company2contactInformation` (
  `company2contactInformation_companyId` int(11) NOT NULL,
  `company2contactInformation_contactInformationId` int(11) NOT NULL,
  PRIMARY KEY (`company2contactInformation_companyId`,`company2contactInformation_contactInformationId`),
  KEY `company2contactInformation_contactInformationId` (`company2contactInformation_contactInformationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company2contactInformation`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_company2location`
--

CREATE TABLE IF NOT EXISTS `tbl_company2location` (
  `company2location_locationId` int(11) NOT NULL,
  `company2location_companyId` int(11) NOT NULL,
  PRIMARY KEY (`company2location_locationId`,`company2location_companyId`),
  KEY `company2location_companyId` (`company2location_companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_company2location`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactInformation`
--

CREATE TABLE IF NOT EXISTS `tbl_contactInformation` (
  `contactInformation_id` int(11) NOT NULL AUTO_INCREMENT,
  `contactInformation_type` varchar(50) NOT NULL,
  `contactInformation_information` varchar(500) NOT NULL,
  PRIMARY KEY (`contactInformation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_contactInformation`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_geoLocation`
--

CREATE TABLE IF NOT EXISTS `tbl_geoLocation` (
  `geoLocation_id` int(11) NOT NULL AUTO_INCREMENT,
  `geoLocation_coordinate` varchar(250) NOT NULL,
  PRIMARY KEY (`geoLocation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_geoLocation`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE IF NOT EXISTS `tbl_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_companyId` int(11) NOT NULL,
  `location_name` varchar(250) NOT NULL,
  PRIMARY KEY (`location_id`,`location_companyId`),
  KEY `location_companyId` (`location_companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_location`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_location2geoLocation`
--

CREATE TABLE IF NOT EXISTS `tbl_location2geoLocation` (
  `location2geoLocation_locationId` int(11) NOT NULL,
  `location2geoLocation_geoLocationId` int(11) NOT NULL,
  PRIMARY KEY (`location2geoLocation_locationId`,`location2geoLocation_geoLocationId`),
  KEY `location2geoLocation_geoLocationId` (`location2geoLocation_geoLocationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location2geoLocation`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_location2skillmatrix`
--

CREATE TABLE IF NOT EXISTS `tbl_location2skillmatrix` (
  `location2skillmatrix_locationId` int(11) NOT NULL,
  `location2skillmatrix_skillmatrixId` int(11) NOT NULL,
  PRIMARY KEY (`location2skillmatrix_locationId`,`location2skillmatrix_skillmatrixId`),
  KEY `location2skillmatrix_skillmatrixId` (`location2skillmatrix_skillmatrixId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location2skillmatrix`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill`
--

CREATE TABLE IF NOT EXISTS `tbl_skill` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_skillgenericId` int(11) NOT NULL,
  `skill_certificateId` int(11) DEFAULT NULL,
  `skill_manday` int(11) NOT NULL,
  PRIMARY KEY (`skill_id`),
  KEY `skill_skillgenericId` (`skill_skillgenericId`),
  KEY `skill_certificateId` (`skill_certificateId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_skill`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill2certificate`
--

CREATE TABLE IF NOT EXISTS `tbl_skill2certificate` (
  `skill2certificate_skillId` int(11) NOT NULL,
  `skill2certificate_certificateId` int(11) NOT NULL,
  PRIMARY KEY (`skill2certificate_skillId`,`skill2certificate_certificateId`),
  KEY `skill2certificate_certificateId` (`skill2certificate_certificateId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skill2certificate`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_skillgeneric`
--

CREATE TABLE IF NOT EXISTS `tbl_skillgeneric` (
  `skillgeneric_id` int(11) NOT NULL AUTO_INCREMENT,
  `skillgeneric_name` varchar(250) NOT NULL,
  `skillgeneric_description` varchar(250) NOT NULL,
  PRIMARY KEY (`skillgeneric_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_skillgeneric`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_skillgeneric2businessbranch`
--

CREATE TABLE IF NOT EXISTS `tbl_skillgeneric2businessbranch` (
  `skillgeneric2businessbranch_skillgenericId` int(11) NOT NULL,
  `skillgeneric2businessbranch_businessbranchId` int(11) NOT NULL,
  PRIMARY KEY (`skillgeneric2businessbranch_skillgenericId`,`skillgeneric2businessbranch_businessbranchId`),
  KEY `skillgeneric2businessbranch_businessbranchId` (`skillgeneric2businessbranch_businessbranchId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skillgeneric2businessbranch`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_skillmatrix`
--

CREATE TABLE IF NOT EXISTS `tbl_skillmatrix` (
  `skillmatrix_id` int(11) NOT NULL AUTO_INCREMENT,
  `skillmatrix_locationId` int(11) NOT NULL,
  `skillmatrix_skillId` int(11) NOT NULL,
  PRIMARY KEY (`skillmatrix_id`),
  UNIQUE KEY `skillmatrix_skillId` (`skillmatrix_skillId`),
  KEY `skillmatrix_locationId` (`skillmatrix_locationId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_skillmatrix`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(250) NOT NULL,
  `user_contact` varchar(250) NOT NULL,
  `user_pwd` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_user`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_user2company`
--

CREATE TABLE IF NOT EXISTS `tbl_user2company` (
  `user2company_userId` int(11) NOT NULL,
  `user2company_companyId` int(11) NOT NULL,
  PRIMARY KEY (`user2company_userId`,`user2company_companyId`),
  KEY `user2company_companyId` (`user2company_companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user2company`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_company2businessbranch`
--
ALTER TABLE `tbl_company2businessbranch`
  ADD CONSTRAINT `tbl_company2businessbranch_ibfk_2` FOREIGN KEY (`company2businessbranch_businessbranchId`) REFERENCES `tbl_businessbranch` (`businessbranch_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_company2businessbranch_ibfk_1` FOREIGN KEY (`company2businessbranch_companyId`) REFERENCES `tbl_company` (`company_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_company2contactInformation`
--
ALTER TABLE `tbl_company2contactInformation`
  ADD CONSTRAINT `tbl_company2contactInformation_ibfk_2` FOREIGN KEY (`company2contactInformation_contactInformationId`) REFERENCES `tbl_contactInformation` (`contactInformation_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_company2contactInformation_ibfk_1` FOREIGN KEY (`company2contactInformation_companyId`) REFERENCES `tbl_company` (`company_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_company2location`
--
ALTER TABLE `tbl_company2location`
  ADD CONSTRAINT `tbl_company2location_ibfk_2` FOREIGN KEY (`company2location_companyId`) REFERENCES `tbl_company` (`company_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_company2location_ibfk_1` FOREIGN KEY (`company2location_locationId`) REFERENCES `tbl_location` (`location_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD CONSTRAINT `tbl_location_ibfk_1` FOREIGN KEY (`location_companyId`) REFERENCES `tbl_company` (`company_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_location2geoLocation`
--
ALTER TABLE `tbl_location2geoLocation`
  ADD CONSTRAINT `tbl_location2geoLocation_ibfk_2` FOREIGN KEY (`location2geoLocation_geoLocationId`) REFERENCES `tbl_geoLocation` (`geoLocation_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_location2geoLocation_ibfk_1` FOREIGN KEY (`location2geoLocation_locationId`) REFERENCES `tbl_location` (`location_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_location2skillmatrix`
--
ALTER TABLE `tbl_location2skillmatrix`
  ADD CONSTRAINT `tbl_location2skillmatrix_ibfk_2` FOREIGN KEY (`location2skillmatrix_skillmatrixId`) REFERENCES `tbl_skillmatrix` (`skillmatrix_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_location2skillmatrix_ibfk_1` FOREIGN KEY (`location2skillmatrix_locationId`) REFERENCES `tbl_location` (`location_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  ADD CONSTRAINT `tbl_skill_ibfk_2` FOREIGN KEY (`skill_certificateId`) REFERENCES `tbl_certificate` (`certificate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_skill_ibfk_1` FOREIGN KEY (`skill_skillgenericId`) REFERENCES `tbl_skillgeneric` (`skillgeneric_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_skill2certificate`
--
ALTER TABLE `tbl_skill2certificate`
  ADD CONSTRAINT `tbl_skill2certificate_ibfk_2` FOREIGN KEY (`skill2certificate_certificateId`) REFERENCES `tbl_certificate` (`certificate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_skill2certificate_ibfk_1` FOREIGN KEY (`skill2certificate_skillId`) REFERENCES `tbl_skill` (`skill_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_skillgeneric2businessbranch`
--
ALTER TABLE `tbl_skillgeneric2businessbranch`
  ADD CONSTRAINT `tbl_skillgeneric2businessbranch_ibfk_2` FOREIGN KEY (`skillgeneric2businessbranch_businessbranchId`) REFERENCES `tbl_businessbranch` (`businessbranch_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_skillgeneric2businessbranch_ibfk_1` FOREIGN KEY (`skillgeneric2businessbranch_skillgenericId`) REFERENCES `tbl_skillgeneric` (`skillgeneric_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_skillmatrix`
--
ALTER TABLE `tbl_skillmatrix`
  ADD CONSTRAINT `tbl_skillmatrix_ibfk_2` FOREIGN KEY (`skillmatrix_skillId`) REFERENCES `tbl_skill` (`skill_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_skillmatrix_ibfk_1` FOREIGN KEY (`skillmatrix_locationId`) REFERENCES `tbl_location` (`location_id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_user2company`
--
ALTER TABLE `tbl_user2company`
  ADD CONSTRAINT `tbl_user2company_ibfk_2` FOREIGN KEY (`user2company_companyId`) REFERENCES `tbl_company` (`company_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_user2company_ibfk_1` FOREIGN KEY (`user2company_userId`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE;
