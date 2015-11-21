-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2015 at 09:30 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universitydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branchname` varchar(60) NOT NULL,
  `location` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`branchname`,`location`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branchname`, `location`, `contact`) VALUES
(1, 'Karachi 12', '45 C block main road bhatian stop karachi', '0321-1234567'),
(2, 'Lahore', '132 c, nawab town, thokar niaz baig lahore', '0333-1234567'),
(7, 'Faisalabad', 'gunj mor factory road faisalabad', '0300-5136939');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(50) NOT NULL,
  `cr_hr` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coursename` (`coursename`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `coursename`, `cr_hr`) VALUES
(2, 'Computer Programming', 3),
(7, 'Computer Networking', 3),
(9, 'into to databases', 4);

-- --------------------------------------------------------

--
-- Table structure for table `coursedegree`
--

CREATE TABLE IF NOT EXISTS `coursedegree` (
  `degree_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  KEY `degree_id` (`degree_id`,`course_id`),
  KEY `coursedegree` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursedegree`
--

INSERT INTO `coursedegree` (`degree_id`, `course_id`) VALUES
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE IF NOT EXISTS `degree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `degreename` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`degreename`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`id`, `degreename`, `dept_id`) VALUES
(7, 'BSCS', 1),
(8, 'BSIT', 1),
(9, 'BBA', 4),
(11, 'MBA', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deptname` varchar(70) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `content` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`deptname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `deptname`, `contact`, `contact_person`, `content`) VALUES
(1, 'Department of Computer Science and IT', '0300-5136939', 'Abdullah', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(3, 'Department of Medical Science', '0342-2123243', 'Rafay', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(4, 'Department of Management Science', '0322-6753672', 'taimoor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(5, 'School of Creative Arts', '0321-2137337', 'Majid jahangir', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum'),
(6, 'Pharmacy Department', '0322-0823947', 'Ahmed malik', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum');

-- --------------------------------------------------------

--
-- Table structure for table `deptbranch`
--

CREATE TABLE IF NOT EXISTS `deptbranch` (
  `branch_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  KEY `branch_id` (`branch_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptbranch`
--

INSERT INTO `deptbranch` (`branch_id`, `dept_id`) VALUES
(1, 1),
(1, 3),
(1, 4),
(1, 5),
(2, 1),
(2, 3),
(2, 6),
(7, 1),
(7, 5),
(7, 4),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullname`, `email`, `password`, `id`, `admin`) VALUES
('AbdullahTariq', 'Abdullah Tariq', 'abdullabintariq@gmail.com', 'd93ec75bca4b7ef88df5a6c591654422', 1, 1),
('mian rafay', 'Rafay Ameen', 'rafay@gmail.com', 'd93ec75bca4b7ef88df5a6c591654422', 2, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursedegree`
--
ALTER TABLE `coursedegree`
  ADD CONSTRAINT `coursedegree_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `coursedegree_ibfk_2` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`id`),
  ADD CONSTRAINT `coursedegree_ibfk_3` FOREIGN KEY (`course_id`) REFERENCES `course` (`id`);

--
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `degree_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`id`);

--
-- Constraints for table `deptbranch`
--
ALTER TABLE `deptbranch`
  ADD CONSTRAINT `deptbranch_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`id`),
  ADD CONSTRAINT `deptbranch_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
