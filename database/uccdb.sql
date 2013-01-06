-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2012 at 05:56 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uccdb`
--
CREATE DATABASE `uccdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uccdb`;

-- --------------------------------------------------------

--
-- Table structure for table `acc_info`
--

CREATE TABLE `acc_info` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `acc_info`
--

INSERT INTO `acc_info` (`id`, `uid`, `firstname`, `lastname`, `gender`) VALUES
(1, 0, 'gemonio', 'yeah', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `sss_dec` varchar(6) NOT NULL,
  `sss_con` varchar(6) NOT NULL,
  `net_pay` varchar(6) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution`
--


-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL auto_increment,
  `dep_name` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name`) VALUES
(2, 'Accounting'),
(3, 'Fabrication'),
(4, 'Advertising'),
(7, 'gemonio');

-- --------------------------------------------------------

--
-- Table structure for table `dtr`
--

CREATE TABLE `dtr` (
  `id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) NOT NULL,
  `in` time NOT NULL,
  `out` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `dtr`
--

INSERT INTO `dtr` (`id`, `emp_id`, `in`, `out`, `date`) VALUES
(1, 8, '07:10:32', '16:30:23', '2012-09-26'),
(5, 8, '07:00:23', '16:10:10', '2012-09-25'),
(6, 8, '07:00:23', '16:10:10', '2012-09-24'),
(7, 7, '07:16:23', '16:10:10', '2012-09-17'),
(8, 8, '08:20:23', '16:10:10', '2012-09-18'),
(9, 8, '07:00:23', '16:10:10', '2012-09-19'),
(10, 8, '07:30:23', '16:10:10', '2012-09-20'),
(11, 7, '07:40:23', '16:10:10', '2012-09-21'),
(12, 8, '07:10:32', '14:10:10', '2012-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL auto_increment,
  `position` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `sss` int(11) NOT NULL,
  `philhealth` int(11) NOT NULL,
  `pagibig` int(11) NOT NULL,
  `tin` int(11) NOT NULL,
  `def_pass` varchar(50) NOT NULL,
  `hiredate` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `position`, `salary`, `lastname`, `firstname`, `mid_name`, `age`, `sex`, `civil_status`, `address`, `religion`, `contact`, `sss`, `philhealth`, `pagibig`, `tin`, `def_pass`, `hiredate`) VALUES
(6, '2', 8098, 'Daniel', 'Mariche', 'C', 30, 'F', 'Single', 'lkajsdjljlkj', 'lkjlkkljlkj', 98, 1, 1, 1, 1, 'DMariche_416', '0000-00-00'),
(7, '4', 80800, 'Jovero', 'Romelyn', 'new', 32, 'F', 'Single', 'adslkjlk', 'jlksadjlj', 1, 1, 1, 1, 1, 'JRomelyn_451', '0000-00-00'),
(8, '5', 10500, 'Cabuhat', 'Jennica', 'Atayde', 15, 'F', 'Single', 'Dyan lang street', 'Roman Catholic', 2147483647, 2147483647, 2147483647, 2147483647, 2147483647, 'CJennica_431', '1987-09-18'),
(11, '2', 123123, 'Gaston', 'Gerhard', 'Abad', 21, 'M', 'Single', '#437 Constabulary St., Vets. Vill. Diliman Quezon City ', 'Roman Catholic', 666, 0, 0, 0, 0, 'GGerhard_551', '2012-10-03'),
(12, '2', 2131213, 'Alis', 'Maricar', 'Pederes', 21, 'F', 'Married', 'fefdsfddf', 'cdfdfd', 1212121, 1, 0, 0, 0, 'AMaricar_420', '2012-10-06'),
(28, '4', 1, '24234234', 'safdsdf', '4234324', 0, 'F', 'Married', 'sdfgsdfg', '', 24234234, 4324234, 24234234, 2147483647, 2147483647, '', '0000-00-00'),
(29, '7', 1, 'ungasis', 'mangtoas', 'sarsa', 40, 'F', 'Married', 'asdfasdfsfdsadfsf', 'Roman Catholic', 24234234, 234234234, 23424234, 234234234, 234234324, 'umangtoas_542', '2012-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL auto_increment,
  `dep_id` int(11) NOT NULL,
  `job_name` varchar(60) NOT NULL,
  `job_desc` text NOT NULL,
  `b_salary` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `dep_id`, `job_name`, `job_desc`, `b_salary`) VALUES
(2, 1, 'Marketing Manager', '1', 8000),
(3, 1, 'Marketing Assistant', '', 6000),
(4, 2, 'Accounting Manager', ' gege', 1),
(5, 1, 'Utility', 'Taga walis ng mga kalat.', 350),
(7, 2, 'Accounting Staff', 'gege', 1),
(8, 2, 'Collection Staff', 'gege', 1),
(9, 2, 'Financial Analyst', 'gege', 1),
(10, 2, 'Collector', 'gege', 1),
(11, 2, 'Driver', 'gege', 1),
(12, 3, 'Fabrication Supervisor', 'gege', 12),
(13, 3, 'Project Engineer', 'gege', 12),
(14, 3, 'Department Secretary', 'gege', 12);

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(11) NOT NULL auto_increment,
  `emp_id` int(11) NOT NULL,
  `leave_apply` varchar(255) NOT NULL,
  `lctr` int(1) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `fr` varchar(15) NOT NULL,
  `tod` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `emp_id`, `leave_apply`, `lctr`, `reason`, `fr`, `tod`, `date`, `status`) VALUES
(2, 12, 'sick', 1, 'asd', '10-10-2012', '10-24-2012', '2012-10-09', 1),
(5, 12, 'vacation', 1, 'sadfasfsdffasfasdfsadfasdf', '10-17-2012', '10-23-2012', '2012-10-11', 1),
(6, 11, 'vacation', 1, 'gege', '10-01-2012', '10-06-2012', '2012-10-11', 1),
(7, 11, 'sick', 1, 'poopoo', '10-17-2012', '10-20-2012', '2012-10-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pagibig_tbl`
--

CREATE TABLE `pagibig_tbl` (
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `pagibig_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `sss_tbl`
--

CREATE TABLE `sss_tbl` (
  `id` int(11) NOT NULL auto_increment,
  `fr_r` int(11) NOT NULL,
  `to_r` float NOT NULL,
  `m_salary` int(11) NOT NULL,
  `er` float NOT NULL,
  `ee` float NOT NULL,
  `total` int(11) NOT NULL,
  `ec_er` int(11) NOT NULL,
  `er_t_con` float NOT NULL,
  `ee_t_con` float NOT NULL,
  `t_t_con` int(11) NOT NULL,
  `t_con` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `fr_r` (`fr_r`,`to_r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sss_tbl`
--

INSERT INTO `sss_tbl` (`id`, `fr_r`, `to_r`, `m_salary`, `er`, `ee`, `total`, `ec_er`, `er_t_con`, `ee_t_con`, `t_t_con`, `t_con`) VALUES
(1, 1000, 1249.99, 1000, 70.7, 33.3, 104, 10, 80.7, 33.3, 114, 104),
(2, 1250, 1749, 1500, 106, 50, 156, 10, 116, 50, 166, 156),
(3, 1750, 2249.99, 2000, 141.3, 66.7, 260, 10, 151.3, 66.7, 218, 208);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=136 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `username`, `password`, `usertype`) VALUES
(1, 0, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0),
(4, 12, 'sample', 'a9993e364706816aba3e25717850c26c9cd0d89d', 1),
(5, 3, 'AMaricar_446', 'af8015a05ee290c749fa026af3ba165d07ec87de', 1),
(6, 4, 'abrixbimbo_225', 'f192318a1f2cd737b0f6c2739da2ca9505b9874a', 1),
(7, 5, 'hhey_250', 'f76bf3cd2148e5c8634538b6fec09f8732bb8076', 1),
(8, 6, 'DMariche_416', '21834e028dc3bf6ff878e3355a2ce9c2b7ba4805', 1),
(9, 7, 'JRomelyn_451', '9d2f084a2e67dfd27d9f1c8e0f39b1e57b853460', 1),
(10, 8, 'CJennica_431', '5b8dd01b7d7c0e59b7f7fba78c85c96f3dae76d7', 1),
(52, 6, 'DMariche_416', '21834e028dc3bf6ff878e3355a2ce9c2b7ba4805', 0),
(73, 9, 'jasdkjlkj_413', '95630d6acf87c72ae802c7a0814284ee471df539', 1),
(74, 10, 'jasdkjlkj_413', '95630d6acf87c72ae802c7a0814284ee471df539', 1),
(75, 11, 'GGerhard_551', '738dde8b3530936bce5dc85735bee7e98e1d430a', 1),
(76, 0, 'sam', 'ddd', 0),
(77, 0, 'sam', 'ddd', 0),
(78, 0, 'sam', 'ddd', 0),
(79, 13, 'ggege_542', 'f3cdf2d1de04da7c99bd1a6df86cf8632aa256db', 0),
(80, 0, 'sam', 'ddd', 0),
(81, 14, 'asadf_542', 'd592b527b434d24f3f8ff323250dc8947da85953', 0),
(82, 15, 'aasfjksdf_542', '1297acd37df16d686a822c94c1bfa644eda8c4ba', 0),
(83, 16, 'asdasd_542', '17613a7db82113b9cfa76a77b5bc85a7a5e639be', 0),
(84, 17, 'wsdfsadf_542', '74b93f01390ec9f62a39eeef5eac3e33b4f0d011', 0),
(94, 0, 'sam', 'ddd', 0),
(95, 0, 'sam', 'ddd', 0),
(96, 0, 'sam', 'ddd', 0),
(97, 0, 'sam', 'ddd', 0),
(98, 0, 'sam', 'ddd', 0),
(99, 0, 'sam', 'ddd', 0),
(100, 0, 'sam', 'ddd', 0),
(101, 0, 'sam', 'ddd', 0),
(102, 0, 'sam', 'ddd', 0),
(103, 0, 'sam', 'ddd', 0),
(104, 0, 'sam', 'ddd', 0),
(105, 0, 'sam', 'ddd', 0),
(106, 0, 'sam', 'ddd', 0),
(107, 0, 'sam', 'ddd', 0),
(108, 0, 'sam', 'ddd', 0),
(109, 0, 'sam', 'ddd', 0),
(110, 0, 'sam', 'ddd', 0),
(111, 18, '112313_542', '688711edc5fc2d88ec1aaf8e28eac43ec0def6a9', 0),
(112, 19, 'ssdf_542', 'c58067ed56f0d8f6c323f3a3ac0800aa1857c874', 0),
(113, 20, 'aasdfadf_542', '9b8fad732e2a40fbc1b4ed0c16c960a338a971cf', 0),
(114, 21, 'aasd_542', '29ccfaebbd870c3633668ac24d7c42803c5d4e01', 0),
(115, 22, 'aasdf_542', 'd364b8e3c2c8056d8a90bcefb078730cbc189ed9', 0),
(116, 23, 'aasdasd_542', 'd8a538edb634f16e7f125b2ad9e65cfd8a99fe31', 0),
(117, 24, 'aasdf_542', 'd364b8e3c2c8056d8a90bcefb078730cbc189ed9', 0),
(118, 25, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0),
(119, 26, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 0),
(120, 27, 'aasdfsdf_542', '8b09fda309d9548a29c4bcf926d583b753567c29', 0),
(121, 28, '2safdsdf_542', 'b595fef8e64b378dedb609ca9d1b8e36b1fac916', 0),
(122, 29, 'umangtoas_542', 'f24c99df1b3f301962fbd9be689628ce9bb37386', 0),
(123, 0, 'sam', 'ddd', 0),
(124, 0, 'sam', 'ddd', 0),
(125, 0, 'sam', 'ddd', 0),
(126, 0, 'sam', 'ddd', 0),
(127, 0, 'sam', 'ddd', 0),
(128, 0, 'sam', 'ddd', 0),
(129, 0, 'sam', 'ddd', 0),
(130, 0, 'sam', 'ddd', 0),
(131, 0, 'sam', 'ddd', 0),
(132, 0, 'sam', 'ddd', 0),
(133, 0, 'sam', 'ddd', 0),
(134, 0, 'sam', 'ddd', 0),
(135, 0, 'sam', 'ddd', 0);
