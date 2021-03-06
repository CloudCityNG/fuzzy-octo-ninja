-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2013 at 08:31 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ninjadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_info`
--

CREATE TABLE IF NOT EXISTS `acc_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
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

CREATE TABLE IF NOT EXISTS `contribution` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `sss_dec` varchar(6) NOT NULL,
  `sss_con` varchar(6) NOT NULL,
  `net_pay` varchar(6) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dep_name`) VALUES
(2, 'Accounting'),
(3, 'Fabrication'),
(4, 'Advertising'),
(7, 'gemonio'),
(8, 'asdfasf'),
(9, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `dtr`
--

CREATE TABLE IF NOT EXISTS `dtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `_in` time NOT NULL,
  `_out` time NOT NULL,
  `date` date NOT NULL,
  `p_status` tinyint(1) NOT NULL,
  `is_out` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `dtr`
--

INSERT INTO `dtr` (`id`, `emp_id`, `_in`, `_out`, `date`, `p_status`, `is_out`) VALUES
(1, 35, '07:10:32', '16:30:23', '2012-09-26', 1, 1),
(5, 35, '07:00:23', '16:10:10', '2012-09-25', 1, 1),
(6, 35, '07:00:23', '16:10:10', '2012-09-24', 1, 1),
(7, 35, '07:16:23', '16:10:10', '2012-06-13', 1, 1),
(8, 35, '08:20:23', '12:10:10', '2012-09-18', 1, 1),
(9, 35, '08:00:23', '16:10:10', '2012-09-19', 1, 1),
(10, 35, '07:20:23', '16:10:10', '2012-09-20', 1, 1),
(11, 35, '07:20:23', '16:10:10', '2012-09-21', 1, 1),
(14, 35, '15:12:29', '00:00:00', '2013-01-04', 0, 0),
(16, 35, '16:11:50', '00:00:00', '2013-01-04', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `mid_name` varchar(30) NOT NULL,
  `bday` varchar(25) NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `dep_id`, `position`, `salary`, `lastname`, `firstname`, `mid_name`, `bday`, `age`, `sex`, `civil_status`, `address`, `religion`, `contact`, `sss`, `philhealth`, `pagibig`, `tin`, `def_pass`, `hiredate`) VALUES
(0, 0, '2', 8098, 'Daniel', 'Mariche', 'C', '13', 24, 'F', 'Single', 'lkajsdjljlkj', '', 98, 345345, 1, 1234234, 1, 'DMariche_416', '0000-00-00'),
(35, 3, '12', 50000, 'Adventure', 'Bearded', 'Octo', '04-December-1979', 33, 'M', 'Single', 'asdfasdfasf', 'Iglesia ni Cristo', 234234324, 234234324, 234234, 234234234, 234234234, 'aabc_11112', '2012-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_id` int(11) NOT NULL,
  `job_name` varchar(60) NOT NULL,
  `job_desc` text NOT NULL,
  `b_salary` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
(14, 3, 'Department Secretary', 'gege', 12),
(15, 7, 'ssdfsdf', '', 0),
(16, 7, 'sd', '', 0),
(17, 4, 'dsfd', '', 0),
(18, 4, 'wew', '', 0),
(19, 2, 'sdfsdf', '', 0),
(20, 7, 'asdfasdfasfasdfasdf', '', 0),
(22, 3, 'sd', '', 0),
(23, 8, 'asdf', '', 0),
(24, 8, '', '', 0),
(25, 9, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE IF NOT EXISTS `leave_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `leave_apply` varchar(255) NOT NULL,
  `lctr` int(1) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `fr` varchar(15) NOT NULL,
  `tod` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `emp_id`, `leave_apply`, `lctr`, `reason`, `fr`, `tod`, `date`, `status`) VALUES
(8, 35, 'Sick', 1, 'asdfasdf', '12-04-2012', '12-29-2012', '2012-12-22', 1),
(9, 35, 'asfasf', 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pagibig_tbl`
--

CREATE TABLE IF NOT EXISTS `pagibig_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `proll_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `c_off` varchar(255) NOT NULL,
  `basic` varchar(11) NOT NULL,
  `total_lates` varchar(6) NOT NULL,
  `absencesnlates` varchar(11) NOT NULL,
  `total_hours` varchar(6) NOT NULL,
  `netpay` varchar(11) NOT NULL,
  PRIMARY KEY (`proll_id`),
  KEY `emp_id` (`emp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`proll_id`, `emp_id`, `emp_name`, `c_off`, `basic`, `total_lates`, `absencesnlates`, `total_hours`, `netpay`) VALUES
(1, 35, 'abc abc', '2012-09-8/2012-09-23', '50,000', '3:00', '616.44', '26:40', '5,479.28'),
(2, 35, 'abc abc', '2012-09-24/2012-10-7', '50,000', '21:10', '414.38', '24:50', '5,102.52'),
(3, 35, 'abc abc', '2012-06-8/2012-06-23', '50,000', '0:16', '0.00', '7:54', '1,623.04'),
(4, 35, 'abc abc', '2012-09-8/2012-09-23', '50,000', '3:00', '616.44', '26:40', '5,479.28'),
(5, 35, 'abc abc', '2012-12-24/2013-01-07', '50,000', '16:24', '3,369.76', '2:24', '493.04'),
(6, 35, 'abc abc', '2012-09-24/2012-10-07', '50,000', '21:10', '4,349.28', '24:50', '5,102.52'),
(7, 35, 'abc abc', '2012-06-08/2012-06-23', '50,000', '0:16', '54.72', '7:54', '1,623.04');

-- --------------------------------------------------------

--
-- Table structure for table `sss_tbl`
--

CREATE TABLE IF NOT EXISTS `sss_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `fr_r` (`fr_r`,`to_r`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `username`, `password`, `usertype`) VALUES
(1, 0, 'admin', 'a9993e364706816aba3e25717850c26c9cd0d89d', 0),
(141, 35, 'aabc_11112', 'd22f84023d242e627f0a8db9aa252189c89f3e23', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
