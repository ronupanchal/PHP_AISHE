-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 07:42 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_aishe`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `code_of_college` int(50) NOT NULL AUTO_INCREMENT,
  `name_of_college` varchar(100) NOT NULL,
  `aishe_code` varchar(100) NOT NULL,
  `postal_address_line1` varchar(100) NOT NULL,
  `postal_address_line2` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `web_site` varchar(100) NOT NULL,
  `year_of_establishment` varchar(100) NOT NULL,
  `name_of_principal` varchar(100) NOT NULL,
  `principal_contactno` varchar(100) NOT NULL,
  `principal_email_id` varchar(100) NOT NULL,
  `name_of_collage_nodal_officer_for_aishe` varchar(100) NOT NULL,
  `designation_of_nodel_officer` varchar(100) NOT NULL,
  `telephone_no_of_nodel_officer` varchar(100) NOT NULL,
  `mobile_no_of_nodel_officer` varchar(100) NOT NULL,
  `email_id_of_nodel_officer` varchar(100) NOT NULL,
  `name_of_university_to_which_affiliated` varchar(100) NOT NULL,
  `university_type` varchar(100) NOT NULL,
  `the_statutory_body_through_which_recognized` varchar(100) NOT NULL,
  `year_of_affiliation_with_university` varchar(100) NOT NULL,
  `location_of_the_college` varchar(50) NOT NULL,
  `longi` varchar(50) NOT NULL,
  `lati` varchar(50) NOT NULL,
  `level_of_course` varchar(100) NOT NULL,
  `type_of_college` varchar(100) NOT NULL,
  `management_of_college` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `pre_requesting_course` varchar(100) NOT NULL,
  `fee` varchar(100) NOT NULL,
  `intake` varchar(100) NOT NULL,
  `flag` varchar(100) NOT NULL DEFAULT '1',
  PRIMARY KEY (`code_of_college`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`code_of_college`, `name_of_college`, `aishe_code`, `postal_address_line1`, `postal_address_line2`, `country`, `state`, `district`, `pin_code`, `web_site`, `year_of_establishment`, `name_of_principal`, `principal_contactno`, `principal_email_id`, `name_of_collage_nodal_officer_for_aishe`, `designation_of_nodel_officer`, `telephone_no_of_nodel_officer`, `mobile_no_of_nodel_officer`, `email_id_of_nodel_officer`, `name_of_university_to_which_affiliated`, `university_type`, `the_statutory_body_through_which_recognized`, `year_of_affiliation_with_university`, `location_of_the_college`, `longi`, `lati`, `level_of_course`, `type_of_college`, `management_of_college`, `course`, `pre_requesting_course`, `fee`, `intake`, `flag`) VALUES
(1, 'VIDHYABHARTI TRUST INST. OF TECH. & RESEARCH CENTER', 'C-48', 'vidyabharti campus at & po. umrakh, bardoli-mota road ta:bardoli', 'at & po. umrakh taluka-bardoli', 'india', 'gujarat', 'surat', '394345', 'www.snpitrc.ac.in', '2008', 'yatin patel', '1234567890', 'yatinpatel@gmail.com', 'mr.vipul g gajera', 'assistant professer', '02622246528', '1234567890', 'gajera@gmail.com', 'Gujarat Technological University, Ahmedabad', 'State Public University', 'a', '2008', 'Rural', '21.1458682', '73.0875466', 'under ', 'AFFILIATED COLLEGE', 'Private Un-Aided', 'bca', 'aabc', '10000', '60', '1'),
(2, 'ANAND AGRICULTURAL UNIVERSITY,ANAND', 'U-0123', 'ANAND AGRICULTURAL UNIVERSITY,ANAND.KHETIWADI TALUKA-ANAND,DIST-ANAND', 'ANAND', '13', '16', '6', '388001', 'WWW.AAU.IN', '2004', 'DR. SUNIL R PATEL', ' 07573013415', 'SRPATELANAND@AAU.IN', ' DR. MANISH R DABHI', 'ASSISTANT PROFESSOR', '', ' 09737662320', 'DABHIMR2004@AAU.IN', '1', 'STATE PUBLIC UNIVERSITY', '14', '2004', 'URBAN', '22.5358802', '72.9748657', 'UNDER-GRADUATE', 'AFFILIATED COLLEGE', 'CENTRAL GOVERNMENT', '8', 'BCA', '25000', '10', '1'),
(3, 'BHAKTA KAVI NARSINH MEHTA UNIVERSITY	', 'U-0783', 'Bilkha Road, Government Polytechnic', 'Khadia, Gujarat ', '13', '16', '12', '362640', 'www.bknmu.edu.in', '2015', 'OM P. JOSHI', '7894561230', ' OMJOSHI5@GMAIL.COM', 'VINIT J. VARMA', 'ASSISTANT PROFESSOR', '', '', ' VINVARMA23@GMAIL.COM', '1', 'STATE PUBLIC UNIVERSITY', '14', '2015', 'URBAN', '21.4382972', '70.5036811', 'POST-GRADUATE', 'PG CENTER / OFF-CAMPUS', 'CENTRAL GOVERNMENT', '8', 'BCA', '20000', '11', '1'),
(4, 'UKA TARSADIA UNIVERSITY	', 'U-0668', 'MALIBA CAMPUS ,GOPAL VIDHYANAGAR BARDOLI-MAHUVA ROAD, AT.TARSADI POST.SARBHON	', 'TARSADI', '13', '16', '3', '394350', 'WWW.UTU.AC.IN', '2011', 'RONAK SIR', '9898267744', 'RONAKPANCHAL@GMAIL.COM', 'KIRPAL MAHIDA', 'ASSISTANT PROFESSOR', '02622246526', '7567510050', 'KIRPALMAHIDA@GMAIL.COM', '---SELECT UNIVERSITY---', 'STATE PRIVATE UNIVERSITY', '19', '2012', 'RURAL', '21.069029', '73.133224', 'POST-GRADUATE', 'AFFILIATED COLLEGE', 'PRIVATE AIDED', '8', 'BCA', '50000', '12', '1'),
(5, 'PANDIT DEENDAYAL PETROLEUM UNIVERSITY', 'U-0147', 'NR.BHAJIPURA PATIA,RAISAN', 'GANDHINAGAR', '2', '2', '10', '382355', 'WWW.PDPU.AC.IN', '2007', 'RAJIB BANDYOPADHYAY', '9876543210', 'RAJIB.BANDYOPADHYAY@SOT.PDPU.AC.IN', 'DR. MANOJ KUMAR PANDEY', 'ASSOCIATE PROFESSOR', '222942', '9874563210', 'MANOJ.PANDEY@SOT.PDPU.AC.IN', '---SELECT UNIVERSITY---', 'STATE PRIVATE UNIVERSITY', '1', '', 'URBAN', '23.153937', '72.6668561', 'POST-GRADUATE', 'CONSTITUENT / UNIVERSITY COLLEGE', 'PRIVATE AIDED', '1', '', '70000', '11', '1'),
(6, 'VIDHYABHARTI TRUST COLLEGE BCA', 'U-0668', 'MALIBA CAMPUS ,GOPAL VIDHYANAGAR BARDOLI-MAHUVA ROAD, AT.TARSADI POST.SARBHON	', 'MOTA ROAD', '2', '2', '5', '394335', 'WWW.UTU.AC.IN', '2015', 'DR. SUNIL R PATEL', '9898267744', 'YATINPATEL@GMAIL.COM', 'DR. MANOJ KUMAR PANDEY', 'ASSISTANT PROFESSOR', '02622246526', '7567510060', 'RONAKPANCHAL@GMAIL.COM', '4', 'DEEMED UNIVERSITY-GOVERNMENT', '2', '2009', 'URBAN', '20.111', '72.9748657', 'UNDER-GRADUATE', 'RECOGNIZED CENTER', 'GOVERNMENT AIDED', '2', 'BCA', '20000', '10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `c_id` int(5) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`c_id`, `c_name`, `flag`) VALUES
(1, 'United Kingdom', 1),
(2, 'India', 1),
(3, 'Belgium', 1),
(4, 'United States', 1),
(5, 'Oman', 1),
(6, 'RUSSIA', 1),
(7, 'CANADA', 1),
(8, 'CHINA', 1),
(9, 'BRAZIL', 1),
(10, 'AUSTRALIA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `co_id` int(5) NOT NULL AUTO_INCREMENT,
  `co_name` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`co_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`co_id`, `co_name`, `flag`, `status`) VALUES
(1, 'COMPUTER ENGINEERING ( DIPLOMA )', 1, 1),
(2, 'ELECTRICAL ENGINEERING ( DIPLOMA )', 1, 1),
(3, 'ELECTRONICS AND COMMUNICATION ENGG ( DIPLOMA )', 1, 1),
(4, 'INFORMATION TECHNOLOGY ( DIPLOMA )', 1, 1),
(5, 'MECHANICAL ENGINEERING ( DIPLOMA )', 1, 1),
(6, 'AUTOMOBILE ENGINEERING ( DIPLOMA )', 1, 1),
(7, 'CIVIL ENGINEERING ( DIPLOMA )', 1, 1),
(8, 'COMPUTER ENGINEERING ( DIPLOMA )', 1, 1),
(9, 'ELECTRICAL ENGINEERING ( DIPLOMA )', 1, 1),
(10, 'HOTEL MANAGEMENT AND CATERING TECHNOLOGY ( UNDER G', 1, 1),
(11, 'HOSPITALITY AND TOURISM ADMINISTRATION ( UNDER GRA', 1, 1),
(12, 'COMPUTER APPLICATIONS ( POST GRADUATE )', 1, 1),
(13, 'PHARMACEUTICAL MANAGEMENT AND REGULATORY AFFAIRS (', 1, 1),
(14, 'QUALITY ASSURANCE ( POST GRADUATE )', 1, 1),
(15, 'NANO TECHNOLOGY ( UNDER GRADUATE )', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `d_id` int(5) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL,
  `s_id` int(5) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`d_id`, `d_name`, `s_id`, `flag`) VALUES
(3, 'SURAT', 2, 1),
(5, 'NAVSARI', 2, 1),
(8, 'JUNAGADH', 2, 1),
(6, 'ANAND', 2, 1),
(9, 'AHMADABAD', 2, 1),
(10, 'GANDHINAGAR', 2, 1),
(11, 'KHEDA', 2, 1),
(12, 'JAMNAGAR', 2, 1),
(14, 'PATAN', 2, 1),
(15, 'KACHCHH', 2, 1),
(16, 'BHAVNAGAR', 2, 1),
(17, 'VADODRA', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `g_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(10000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`g_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `s_id` int(5) NOT NULL AUTO_INCREMENT,
  `s_name` varchar(50) NOT NULL,
  `c_id` int(5) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `s_name`, `c_id`, `flag`) VALUES
(1, 'KERAL', 1, 1),
(2, 'GUJARAT', 2, 1),
(3, 'RAJASTHAN', 2, 1),
(4, 'UTTAR PRADESH', 1, 1),
(5, 'TRIPURA', 1, 1),
(6, 'CALIFORNIA', 4, 1),
(7, 'FLORIDA', 4, 1),
(8, 'TEXAS', 4, 1),
(9, 'WASHINGTON', 4, 1),
(10, 'HAWAII', 4, 1),
(11, 'ONTARIO', 7, 1),
(12, 'YUKON', 7, 1),
(13, 'QUEBEC', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `statutory_body`
--

CREATE TABLE IF NOT EXISTS `statutory_body` (
  `st_id` int(5) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `statutory_body`
--

INSERT INTO `statutory_body` (`st_id`, `st_name`, `flag`, `status`) VALUES
(1, 'UGC(UNIVERSITY GRANTS COMMISSION)', 1, 1),
(2, 'AICTE(ALL INDIA COUNCIL FOR TECHNICAL EDUCATION)', 1, 1),
(3, 'MCI(MEDICAL COUNCIL OF INDIA)', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacherinformation`
--

CREATE TABLE IF NOT EXISTS `teacherinformation` (
  `sl_no` int(50) NOT NULL AUTO_INCREMENT,
  `name_of_the_employee` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `aadhar_number` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `social_category` varchar(50) NOT NULL,
  `religious_community` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `nature_of_appointment` varchar(50) NOT NULL,
  `selection_mode` varchar(50) NOT NULL,
  `date_of_joining_institution` varchar(50) NOT NULL,
  `date_of_joining_teaching_profession` varchar(50) NOT NULL,
  `highest_qualification` varchar(50) NOT NULL,
  `eligibility_qualification` varchar(50) NOT NULL,
  `broad_discipline_group_category` varchar(50) NOT NULL,
  `broad_discipline` varchar(50) NOT NULL,
  `years_spent_exclusively_in_other_job` varchar(50) NOT NULL,
  `job_status` varchar(50) NOT NULL,
  `date_of_change_in_status` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `teacherinformation`
--

INSERT INTO `teacherinformation` (`sl_no`, `name_of_the_employee`, `designation`, `gender`, `aadhar_number`, `date_of_birth`, `social_category`, `religious_community`, `pwd`, `nature_of_appointment`, `selection_mode`, `date_of_joining_institution`, `date_of_joining_teaching_profession`, `highest_qualification`, `eligibility_qualification`, `broad_discipline_group_category`, `broad_discipline`, `years_spent_exclusively_in_other_job`, `job_status`, `date_of_change_in_status`, `email`, `mobile`, `flag`) VALUES
(12, 'RONAK PANCHAL', 'PROFESSOR & EQUIVA', 'MALE', '123456', '17-03-2019', 'OPEN', 'SIKH', 'NO', 'TEMPORARY', 'CAS', '24-03-2019', '22-03-2019', 'GRADUATE DIPLOMA', 'NET', 'COMMERCE', 'CS', '2', 'NEW APPROACH', '2', 'RONAK@GMAIL.COM', '9898267744', 1),
(3, 'BHUMI', 'PROFESSOR & EQUIVA', 'FEMALE', '123456', '2019-03-17', 'OPEN', 'SIKH', 'NO', 'TEMPORARY', 'CAS', '2019-03-24', '2019-03-22', 'GRADUATE DIPLOMA', 'NET', 'COMMERCE', 'CS', '2', 'NEW APPROACH', '2', 'BHUMI@GMAIL.COM', '8765432109', 1),
(4, 'KISHAN', 'ASSISTANT PROFESSOR', 'MALE', '774433333', '16-03-2019', 'OPEN', 'HINDU', 'NO', 'TEMPORARY', 'CAS', '17-03-2019', '20-03-2019', 'BACHELOR DEGREE(HONOURS)', 'CERTIFICATE', 'AGRICULTURE', 'CS', '1', 'PROMOTED', '2', 'KISHAN@GMAIL.COM', '7654321098', 1),
(5, 'DEVANSHI', 'LECTURER', 'FEMALE', '1.23457E+11', '06-03-2019', 'OBC', 'HINDU', 'NO', 'REGULAR', 'DIRECT', '09-03-2019', '07-03-2019', 'POST GRADUATION DEGREE', 'PG DIPLOMA', 'IT & COMPUTER SCIENCE', 'CS', '2', 'CONTINUE', '2', 'DEVANSHI@GMAIL.COM', '6543210987', 1),
(6, 'PINAK', 'PROFESSOR & EQUIVA', 'MALE', '123456', '17-03-2019', 'OPEN', 'SIKH', 'NO', 'TEMPORARY', 'CAS', '24-03-2019', '22-03-2019', 'GRADUATE DIPLOMA', 'NET', 'COMMERCE', 'CS', '2', 'NEW APPROACH', '2', 'PINAK@GMAIL.COM', '5432109876', 1),
(11, 'NIDHI', 'LECTURER', 'FEMALE', '1234562', '06-03-2019', 'OBC', 'HINDU', 'NO', 'REGULAR', 'DIRECT', '09-03-2019', '07-03-2019', 'POST GRADUATION DEGREE', 'PG DIPLOMA', 'IT & COMPUTER SCIENCE', 'CS', '2', 'CONTINUE', '2', 'NIDHI@GMAIL.COM', '99999999', 1),
(10, 'OM', 'ASSISTANT PROFESSOR', 'FEMALE', '774433333', '16-03-2019', 'OPEN', 'HINDU', 'NO', 'TEMPORARY', 'CAS', '17-03-2019', '20-03-2019', 'BACHELOR DEGREE(HONOURS)', 'CERTIFICATE', 'AGRICULTURE', 'CS', '1', 'PROMOTED', '2', 'OM@GMAIL.COM', '9898267744', 1),
(9, 'RONAK PANCHAL', 'PROFESSOR & EQUIVA', 'MALE', '123456', '17-03-2019', 'OPEN', 'SIKH', 'NO', 'TEMPORARY', 'CAS', '24-03-2019', '22-03-2019', 'GRADUATE DIPLOMA', 'NET', 'COMMERCE', 'CS', '2', 'NEW APPROACH', '2', 'RONAK@GMAIL.COM', '9898267744', 1);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE IF NOT EXISTS `university` (
  `u_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `type_uni` varchar(50) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '1',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`u_id`, `u_name`, `type_uni`, `flag`, `status`) VALUES
(1, 'BHAVNAGAR UNIVERSITY', 'STATE PRIVATE UNIVERSITY', 1, 1),
(2, 'CHAROTAR UNIVERSITY OF SCIENCE AND TECHNOLOGY (CHA', 'DEEMED UNIVERSITY', 1, 1),
(3, 'AHMEDABAD UNIVERSITY', 'STATE PRIVATE UNIVERSITY', 1, 1),
(4, 'CENTRAL UNIVERSITY OF GUJARAT', 'CENTRAL UNIVERSITY', 1, 1),
(5, 'AURO UNIVERSITY', 'STATE PRIVATE UNIVERSITY', 1, 1),
(6, 'UKA TARSADIA UNIVERSITY', 'STATE PRIVATE UNIVERSITY', 1, 1),
(7, 'NIRMA UNIVERSITY', 'STATE PRIVATE UNIVERSITY', 1, 1),
(8, 'VNSGU', 'STATE PUBLIC UNIVERSITY', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_password`, `status`, `flag`) VALUES
(1, 'nidhi', 'nidhi@gmail.com', '1234', 1, 1),
(2, 'niki', 'niki@gmail.com', '5678', 1, 1);
