-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2014 at 01:49 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `file_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_details`
--

CREATE TABLE IF NOT EXISTS `file_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(100) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `file_details`
--

INSERT INTO `file_details` (`id`, `file_name`, `file_size`, `file_type`, `file_location`) VALUES
(1, 'chimpanzee.jpg', '357965', 'image/jpeg', ''),
(2, 'chimpanzee.jpg', '357965', 'image/jpeg', 'uploads/chimpanzee.jpg'),
(3, 'chimpanzee.jpg', '357965', 'image/jpeg', 'uploads/chimpanzee.jpg'),
(4, '', '', '', 'uploads/'),
(5, 'waiver.docx', '87088', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'uploads/waiver.docx'),
(6, 'waiver.pdf', '269454', 'application/pdf', 'uploads/waiver.pdf'),
(7, '', '', '', 'uploads/'),
(8, '1.jpeg.darene.PNG', '67574', 'image/png', 'uploads/1.jpeg.darene.PNG'),
(9, '2.darene.jpg', '87415', 'image/jpeg', 'uploads/2.darene.jpg'),
(10, '2.darene.jpg', '87415', 'image/jpeg', 'uploads/2.darene.jpg'),
(11, 'python_tutorial.pdf', '0', '', 'uploads/python_tutorial.pdf'),
(12, '', '', '', 'uploads/'),
(13, '', '', '', 'uploads/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
