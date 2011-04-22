-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2011 at 11:30 AM
-- Server version: 5.1.49
-- PHP Version: 5.3.3-1ubuntu9.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `raise`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(250) NOT NULL,
  `company_contact` varchar(250) NOT NULL,
  `company_location` int(11) DEFAULT NULL,
  `company_description` text NOT NULL,
  `company_branch` varchar(500) NOT NULL DEFAULT 'uncategorized',
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `company_name`, `company_contact`, `company_location`, `company_description`, `company_branch`) VALUES
(1, 'lala_comp', 'lala@lalacompany.org', 0, 'lala lalalal lalalal la lal al \r\nalala\r\nlall', 'uncategorized'),
(2, 'lelel_comp', 'lele_comp@lelecomp_.org', 0, 'kdsjfdggfd\r\ngsfd\r\ng\r\nsgdsfgdfsgdsfgdsfg\r\n sdfg dsfgdfs\r\ngdfsgsdfgsdgdfs', 'uncategorized'),
(3, 'alex', 'alex@alae.org', 0, 'blubb', 'uncategorized'),
(4, 'alex', 'alex@alae.org', 0, 'blubb', 'uncategorized'),
(5, 'alex', 'alex@alae.org', 0, 'blubb', 'uncategorized'),
(6, 'alex', 'alex@alae.org', 0, 'blubb', 'uncategorized');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE IF NOT EXISTS `tbl_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `location_companyId` int(11) NOT NULL,
  `location_name` varchar(250) NOT NULL,
  `location_geo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`location_id`),
  KEY `location_companyId` (`location_companyId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_location`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(500) NOT NULL,
  `user_contact` varchar(250) NOT NULL,
  `user_information` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_user`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD CONSTRAINT `tbl_location_ibfk_1` FOREIGN KEY (`location_companyId`) REFERENCES `tbl_company` (`company_id`) ON DELETE CASCADE;
