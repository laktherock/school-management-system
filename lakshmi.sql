-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2015 at 05:51 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lakshmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `att_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `id` bigint(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`att_id`, `id`, `name`, `status`, `date`) VALUES
(1, 1, '', 'absent', '2015-10-13'),
(2, 4, '', 'present', '2015-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `createddate` date NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `group` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `age`, `gender`, `dob`, `email`, `password`, `createddate`, `qualification`, `group`) VALUES
(2, 'ravi', 26, 'male', '0000-00-00', 'ravibabu@yesyesservices.com', '1234', '2015-10-08', 'MCA', 'student'),
(4, 'hari', 34, 'male', '0000-00-00', 'hari@gmail.com', '12345h', '2015-10-12', 'ECE', 'student'),
(5, 'lakshminaryanan', 22, 'male', '0000-00-00', 'laktherock@gmail.com', 'lakshmi123', '2015-10-12', 'B.E', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `mark_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `maths` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `computer` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `result` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE IF NOT EXISTS `regi` (
  `regi_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `hobbies` varchar(10) NOT NULL,
  PRIMARY KEY (`regi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`regi_id`, `fullname`, `username`, `password`, `age`, `gender`, `country`, `hobbies`) VALUES
(3, 'tamil', 'vanan', '1234', 23, 'male', 'America', 'Cricket,Vo'),
(4, 'vasu', 'deva', '456666', 21, 'female', 'America', 'Cricket,Vo'),
(5, 'innings', 'hey', '6586', 58, 'female', 'Bangalades', 'Cricket');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `fullname` varchar(20) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL,
  `age` int(4) NOT NULL,
  `work` varchar(20) NOT NULL,
  `college` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `country` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `sports` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fullname`, `username`, `password`, `age`, `work`, `college`, `mobile`, `country`, `gender`, `sports`) VALUES
('sdfsdfad', 'adasdasd', 'asdasdsad', 44, 'ujfyhdf', 'gdgsfs', 2147483647, '', '', ''),
('Lakshmi Narayanan', 'lakkz', 'abcdefgh', 20, 'yys', 'st.peters', 2147483647, '', '', ''),
('hari', 'hari', 'jj', 11, 'ujoiu', 'yjhuj', 45555, '', '', ''),
('balu', 'baloon', 'lakshmi', 22, 'yes yes', 'veltech', 2147483647, '', '', ''),
('tamil', 'tamil123', '12345678', 26, 'yys', 'something', 2147483647, '', '', ''),
('tamil', 'tamil123', '12345678', 26, 'yys', 'something', 2147483647, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(100) NOT NULL,
  `class` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `class`, `gender`) VALUES
(1, 'lakshminarayanan', 22, '10', 'male'),
(2, 'ravibabu', 24, '11', 'female'),
(3, 'jai kumar', 21, '12', 'male'),
(4, 'arunkumar', 23, '10', 'female');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
