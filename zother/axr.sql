-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2014 at 06:10 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `axr`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `url` varchar(200) NOT NULL,
  `sourcetitle` varchar(200) NOT NULL,
  `axrtitle` varchar(200) NOT NULL,
  `tag_1` varchar(50) NOT NULL,
  `tag_2` varchar(50) NOT NULL,
  `tag_3` varchar(50) NOT NULL,
  `tags` varchar(500) NOT NULL,
  `reaction` varchar(50) NOT NULL,
  `language` varchar(20) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  `submittedon` date NOT NULL,
  `views` int(10) NOT NULL DEFAULT '0',
  `likes` int(10) NOT NULL DEFAULT '0',
  `comments` int(9) NOT NULL DEFAULT '0',
  `dislikes` int(8) NOT NULL DEFAULT '0',
  `flags` int(7) NOT NULL DEFAULT '0',
  `shares` int(10) NOT NULL DEFAULT '0',
  `id` int(32) NOT NULL,
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`url`, `sourcetitle`, `axrtitle`, `tag_1`, `tag_2`, `tag_3`, `tags`, `reaction`, `language`, `submittedby`, `submittedon`, `views`, `likes`, `comments`, `dislikes`, `flags`, `shares`, `id`) VALUES
('3O1_3zBUKM8', '', '', 'Music', '', '', 'Naughty Boy', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('3YxaaGgTQYM', '', '', 'Music', '', '', '', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('4GuqB1BQVr4', '', '', 'Music', '', '', 'Justin Bieber', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('7-7knsP2n5w', '', '', 'Music', '', '', 'Shakira, World Cup, Fifa14', 'Nice', 'English', 'manual', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('aE2GCa-_nyU', '', '', 'Music', '', '', 'Radioactive,Cover', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('a_YR4dKArgo', '', '', 'Music', '', '', 'Selena Gomez', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('e82VE8UtW8A', '', '', 'Music', '', '', '', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('EgT_us6AsDg', '', '', 'Music', '', '', '', '', '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('IcrbM1l_BoI', '', '', 'Music', '', '', 'Avicii', 'Wow', 'English', 'manual', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('KD5fLb-WgBU', '', '', 'Music', '', '', 'Sigma', 'Nice', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('oC-GflRB0y4', '', '', 'Music', '', '', 'David Guetta', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('prmmCg5bKxA', '', '', 'Music', '', '', 'justin bieber,sean kingston', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('r00ikilDxW4', '', '', 'Music', '', '', '', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('SbUBMklQSVU', '', '', 'Music', '', '', '', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('SOI4OF7iIr4', '', '', 'Music', '', '', 'justin bieber', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('tLcfAnN2QgY', '', '', 'Music', '', '', 'Enrique Iglesias', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('TOrnUquxtwA', '', '', 'Music', '', '', '', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('vx2u5uUu3DE', '', '', 'Music', '', '', 'bon jovi', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('ynMk2EwRi4Q', '', '', 'Music', '', '', '', '', 'English', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0),
('y_SI2EDM6Lo', '', '', 'Music', '', '', '', '', '', '', '0000-00-00', 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
