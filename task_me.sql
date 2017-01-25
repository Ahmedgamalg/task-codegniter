-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 01:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodect`
--

CREATE TABLE IF NOT EXISTS `prodect` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prodect_name` varchar(100) NOT NULL,
  `prodect_disc` varchar(100) NOT NULL,
  `image_prodect` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `prodect`
--

INSERT INTO `prodect` (`id`, `prodect_name`, `prodect_disc`, `image_prodect`) VALUES
(83, 'test1', 'ttttttttttttttt', '12.PNG'),
(84, 'test2', 'rrrrrrrrrrrrrr', '914a4e15-2ae1-45f3-a144-d6da2077bd13.jpg'),
(90, 'ahme3', 'rfrrrrrrrrrrr', '224453--624x0-21.jpg'),
(91, '', '', ''),
(92, 'fffffff', 'fffffffffffff', ''),
(93, 'yarb', 'yarb', ''),
(94, 'yarb', 'yarb', ''),
(95, 'ahhhhhh', 'ahhhhhhhhhhh', ''),
(96, 'test', 'test', ''),
(97, 'test3', 'test4', ''),
(98, 'dina', 'nada', ''),
(99, 'yara', 'yaya', ''),
(100, 'hhhhhhhhhh', 'hhhhhhhhhhh', ''),
(101, 'nada', 'dina', ''),
(102, 'dddddddddd', 'dddddddd', ''),
(103, 'image', 'image', ''),
(113, 'sssss', 'sssssss', ''),
(114, 'hhhhhh', 'hhhhhhhh', ''),
(115, '', '', ''),
(116, 'ttttttttttt', 'uuuuuuuuuu', ''),
(117, 'eeeeee', 'eeeeeee', ''),
(118, 'kkkkkkkk', 'kkkkkkkk', ''),
(119, 'kkkkkkkk', 'kkkkkkkk', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`, `admin`) VALUES
(1, 'mohamed', 'admin@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'user', 'user@yahoo.com', 'b2130cc690a15a0ed214904cfa7460d0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
