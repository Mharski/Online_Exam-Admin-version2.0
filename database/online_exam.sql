-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2014 at 05:53 AM
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
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'lerelyn', 'moraleda', 'yenyen@yahoo.com', '12345678'),
(2, 'Marjoe', 'Casidsid', 'marjoesullencasidsid@yahoo.com', 'marjoe<3bhezt'),
(3, 'Mark Lois Julian', 'Razon', 'markLois.yahoo.com', '12345678'),
(4, 'Marjoe', 'Casidsid', 'marjoesullencasidsid@yahoo.com', '12345678'),
(5, 'Ma Dahlia', 'Santos', 'MTDSantos@yahoo.com', 'aabbccdd'),
(6, 'Rodrigo', 'Galura', 'rodz@yahoo.com', '12345678'),
(7, 'nene', 'ko', 'nene@yahoo.com', 'aabbccdd'),
(8, 'nene', 'ko', 'nene@yahoo.com', 'aabbccdd'),
(9, 'Mac Jay', 'De Mesa', 'macarl@gmail.com', 'aabbccdd');

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
(1, 'Who Invented the telescope?', 'Isaac Newton', 'Galileo Galleli', 'Tkomas Edison', 'Anton Van Leuvenhooke', 'b'),
(2, 'What is true about Light and Sound?', 'Light travels slower than sound.', 'Light is proportional to sound.', 'Light travels faster than sound.', 'Sound is as faster than sound.', 'c'),
(3, 'What is the element symbol for Silver?', 'Ag', 'Au', 'Si', 'S', 'a'),
(4, 'Who is the first scientist who formulate the Periodic Table?', 'Edwin Hubble', 'Albert Einstien', 'Dmitri Evanovic Mendyleev', 'Antoin Van Leuveenhook', 'c'),
(5, 'It is a property of light waves sometimes known as the ''Binding of Light''.', 'Replection', 'Refraction', 'Defraction', 'Deffusion', 'b'),
(6, 'Atmosphere is commonly composed of Nitrogen, few are Oxygen and less of  other gases element, the question is what is/are the chemical composition for Ozone Layer?', 'C2O', 'N2O', 'O2', 'O3', 'd'),
(7, 'Universe, according to some scientist, are made of dust particles, this was proved by several exploration in the outer space. What instrument did the scientist used to picture the space over a million of Light years?', 'Hubble Space Telescope', 'Gigantic Binacular Telescope', 'USSR Satellite', 'Universal Stadium Telescope', 'a'),
(8, 'It is a type of rock that was actually form due too cooling, brought by Volcanic Erruption', 'Ignious Rock', 'Granite', 'Bed Rock', 'Sedimentary Rock', 'd'),
(9, 'It is s nuclear/chemical events resulting in two daughter nuclei which have identical genetic material to each other and to the mother cell.', 'Mitosis', 'Meosis', 'DNA', 'Metaphase', 'a'),
(10, 'It is a species of Kingdom Aracnida known as tailless whip scorpions or cave spiders. Approximately 5 families, 17 genera and 136 species have been described. They are found in tropical and subtropical regions worldwide. Some species are subterranean; many are nocturnal.', 'Acari', 'Araneae', 'Amblypygi', 'Haptopoda', 'c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
