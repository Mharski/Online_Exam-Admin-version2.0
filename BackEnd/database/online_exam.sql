-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2014 at 03:11 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam`
--
CREATE DATABASE IF NOT EXISTS `online_exam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_exam`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(30) NOT NULL,
  `Last_name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `profile_pict` geometrycollection NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `First_name`, `Last_name`, `Email`, `Password`, `profile_pict`) VALUES
(1, 'Marjoe', 'Casidsid', 'marjoesullencasidsid@gmail.com', 'marjorito', '');

-- --------------------------------------------------------

--
-- Table structure for table `exam_record`
--

CREATE TABLE IF NOT EXISTS `exam_record` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email_add` varchar(30) NOT NULL,
  `score` int(20) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `date_of_exam` date NOT NULL,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exam_record`
--

INSERT INTO `exam_record` (`exam_id`, `f_name`, `l_name`, `email_add`, `score`, `remarks`, `date_of_exam`) VALUES
(1, 'Marjoe', 'Casidsid', 'marjoesullencasidsid@yahoo.com', 10, 'Excellent!', '2014-02-07'),
(2, 'Marjoe', 'Casidsid', 'marjoesullencasidsid@yahoo.com', 4, 'Poor, try your best next time ', '2014-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Lerelyn', 'Moraleda', 'yenyen@yahoo.com', '12345678'),
(2, 'Marjoe', 'Casidsid', 'marjoesullencasidsid@yahoo.com', 'marjoe<3bhezt'),
(3, 'Mark Lois Julian', 'Razon', 'markLois.yahoo.com', '12345678'),
(4, 'Marjoe', 'Casidsid', 'marjoesullencasidsid@yahoo.com', '12345678'),
(5, 'Ma Dahlia', 'Santos', 'MTDSantos@yahoo.com', 'aabbccdd'),
(6, 'Rodrigo', 'Galura', 'rodz@yahoo.com', '12345678'),
(8, 'nene', 'ko', 'nene@yahoo.com', 'aabbccdd'),
(9, 'Mac Jay', 'De Mesa', 'macarl@gmail.com', 'aabbccdd'),
(10, 'jeffrey', 'rique', 'jeffreyrique@yahoo.com', 'ingkong_07'),
(11, 'Micah', 'Moral', 'micahMoral@gmail.com', 'aabbccddee'),
(12, 'Ryan Carlo', 'Francisco', 'ryancarlo_francisco@yahoo.com', 'aabbccddee'),
(13, 'jonas', 'jones', 'jonasjones26@yahoo.com', 'asdasdasd'),
(14, 'Merlin', 'Casidsid', 'merlinlusuegro@gmail.com', 'iloveyou'),
(15, 'Alden', 'Richards', 'alden_cute@gmail.com', 'smilewithme'),
(16, 'Gilda', 'Casidsid', 'gildacasidsid@gmail.com', 'azsxdcfv'),
(17, 'Cedric', 'Lusuegro', 'cedricLusuegro@gmail.com', 'loveyou');

-- --------------------------------------------------------

--
-- Table structure for table `test_question`
--

CREATE TABLE IF NOT EXISTS `test_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_question` text NOT NULL,
  `choice_A` text NOT NULL,
  `choice_B` text NOT NULL,
  `choice_C` text NOT NULL,
  `choice_D` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `test_question`
--

INSERT INTO `test_question` (`id`, `test_question`, `choice_A`, `choice_B`, `choice_C`, `choice_D`, `answer`) VALUES
(1, 'Who Invented the telescope?', 'Isaac Newton', 'Anton Van Leuvenhooke', 'Thomas Edison', 'Galileo Galelli', 'd'),
(2, 'What is true about Light and Sound?', 'Light travels slower than sound.', 'Light is proportional to sound.', 'Light travels faster than sound.', 'Sound is as faster than sound.', 'c'),
(3, 'What is the element symbol for Silver?', 'Ag', 'Au', 'Si', 'S', 'a'),
(4, 'Who is the first scientist who formulate the Periodic Table?', 'Edwin Hubble', 'Albert Einstien', 'Dmitri Evanovic Mendyleev', 'Antoin Van Leuveenhook', 'c'),
(5, 'It is a property of light waves sometimes known as the ''Binding of Light''.', 'Replection', 'Refraction', 'Defraction', 'Deffusion', 'b'),
(6, 'Atmosphere is commonly composed of Nitrogen, few are Oxygen and less of  other gases element, the question is what is/are the chemical composition for Ozone Layer?', 'C2O', 'N2O', 'O2', 'O3', 'd'),
(7, 'Universe, according to some scientist, are made of dust particles, this was proved by several exploration in the outer space. What instrument did the scientist used to picture the space over a million of Light years?', 'Hubble Space Telescope', 'Gigantic Binacular Telescope', 'USSR Satellite', 'Universal Stadium Telescope', 'a'),
(8, 'It is a type of rock that was actually form due too cooling, brought by Volcanic Erruption.', 'Igneous Rock', 'Granite', 'Bed Rock', 'Sedimentary Rock', 'd'),
(9, 'It is s nuclear/chemical events resulting in two daughter nuclei which have identical genetic material to each other and to the mother cell.', 'Mitosis', 'Meosis', 'DNA', 'Metaphase', 'a'),
(10, 'It is a species of Kingdom Aracnida known as tailless whip scorpions or cave spiders. Approximately 5 families, 17 genera and 136 species have been described. They are found in tropical and subtropical regions worldwide. Some species are subterranean; many are nocturnal.', 'Acari', 'Araneae', 'Amblypygi', 'Haptopoda', 'c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
