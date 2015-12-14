-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2015 at 05:45 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpisciot`
--

-- --------------------------------------------------------

--
-- Table structure for table `affairs`
--

CREATE TABLE IF NOT EXISTS `affairs` (
  `character1ID` int(15) NOT NULL,
  `character2ID` int(15) NOT NULL,
  `characterID` int(15) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affairs`
--

INSERT INTO `affairs` (`character1ID`, `character2ID`, `characterID`, `start_date`, `end_date`) VALUES
(4, 14, 3, '2014-10-13', '2014-10-20'),
(6, 12, 1, '2014-11-24', '2015-04-20'),
(4, 3, 10, '2010-01-13', '2010-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `characterID` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `biography` varchar(500) NOT NULL,
  `image_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`characterID`, `name`, `biography`, `image_path`) VALUES
(1, 'Jane Villanueva', 'A religious young Latina woman who becomes pregnant after being artificially inseminated by mistake. After meeting Rafael and hearing his situation, she agrees to carry the baby full term and turn over custody to him and his wife Petra, but only if she is sure her baby will be safe and loved with them. But, as the pregnancy grows, they both start to have feelings for each other.', 'Gina.jpg'),
(2, 'Xiomara Villanueva', '"Xo" Gloriana Villanueva, Jane''s outgoing mother. She was only sixteen years old when she had Jane, which is why Jane would rather keep her virginity until marriage than make the same mistake her mother did.', 'xo.jpg'),
(3, 'Rafael Solano', 'A 31-year-old hotel owner and the biological father of Jane''s unborn child who has fallen out of love with his wife. As the series progresses, he develops growing feelings for Jane, and plans to divorce his wife Petra after discovering her affair.', 'rafael.jpg'),
(4, 'Petra Solano', 'Rafael''s scheming wife and a member of a shady Czech crime family who got married to Rafael in order to steal his wealth, though over time she did fall in love with him. She is one of several antagonists in the series.', 'petra.jpg'),
(5, 'Alba Villanueva', 'Jane''s pious maternal grandmother. She is highly religious, and encourages Jane to save herself for marriage. Although she rarely speaks English, she understands it, since her granddaughter usually only speaks to her in English. She is also in the the country illegally from Venezuela.', 'alba.jpg'),
(6, 'Michael Cordero', 'Jane''s detective 29-year-old ex-fiance. He is aware of Petra''s affair, and blackmails her to ensure that her marriage remains intact, so that Jane will give the baby to them. He also dislikes Rafael due to Jane''s, and eventually Rafael''s, mutual attraction.', 'michael.jpg'),
(7, 'Rogelio de la Vega', 'A self-involved, famous telenovela star and Jane''s biological father. He is currently trying to gain a relationship with his daughter. He also has feelings for Xiomara. His ex-wife is after Xiomara and Jane, so she can take him back.', 'rogelio.jpg'),
(8, 'Luisa Alver', 'Rafael''s neurotic, recovering alcoholic sister, and the doctor who accidentally artificially inseminated Jane.', 'luisa.jpg'),
(9, 'Emilio Solano', 'Rafael and Luisa''s father.', 'emilio.jpg'),
(10, 'Lachlan', 'Rafael''s rival and Petra''s former finace. ', 'lachlan.jpg'),
(11, 'Rose Solano', 'A former lawyer, former girlfriend, and stepmother of Luisa and Rafael who defends Luisa against the malpractice suit. She is also the infamous Sin Rostro (without a face) who murders Emilio.', 'rose.jpg'),
(12, 'Nadine Hansan', 'A police detective and rival/partner to Michael. ', 'nadine.jpg'),
(13, 'Magda', 'Petra''s mother. She is confined to a wheelchair (but only pretends to be paraplegic) and she is Petra''s co-conspirator in her plot to steal Rafael''s hotel and wealth. ', 'magda.jpg'),
(14, 'Roman Zazo', 'Rafael''s best friend and Petra''s lover. He is believed to be murdered in the hotel, causing tension for everyone, including Petra and Rafael. Aaron Zazo, Roman''s twin brother who appears from Chapter Fourteen onwards investigating his brother''s murder.', 'roman.jpg'),
(15, 'Mateo Gloriano Rogelio Solano Villanueva', 'Jane and Rafael''s baby', 'mateo.jpg'),
(16, 'Mateo Villanueva', 'Deceased husband of Alba Villanueva. ', 'unknown.jpg'),
(17, 'Edward', 'Alba Villanueva''s crush from physical therapy. ', 'edward.jpg'),
(18, 'Elena Di Nola', 'Rafael''s mother. Abandoned him after being paid off by Rafael''s father. ', 'elena.jpg'),
(19, 'Petra''s Father', 'Identity still unknown. ', 'unknown.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lineage`
--

CREATE TABLE IF NOT EXISTS `lineage` (
  `parent1ID` int(15) NOT NULL,
  `parent2ID` int(15) DEFAULT NULL,
  `characterID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lineage`
--

INSERT INTO `lineage` (`parent1ID`, `parent2ID`, `characterID`) VALUES
(1, 3, 15),
(2, 7, 1),
(5, 16, 2),
(9, 18, 3),
(13, 0, 4),
(13, 19, 4);

-- --------------------------------------------------------

--
-- Table structure for table `relationships`
--

CREATE TABLE IF NOT EXISTS `relationships` (
  `relationship_id` int(10) unsigned NOT NULL,
  `character1ID` int(15) NOT NULL,
  `character2ID` int(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relationships`
--

INSERT INTO `relationships` (`relationship_id`, `character1ID`, `character2ID`, `status`, `start_date`, `end_date`) VALUES
(1, 1, 6, 'ended', '2014-10-13', '2014-11-24'),
(2, 1, 3, 'ended', '2014-11-24', '2015-04-20'),
(3, 2, 7, 'together', '2014-12-15', NULL),
(4, 3, 4, 'ended', '2014-10-13', '2014-10-27'),
(5, 5, 17, 'together', '2015-02-09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`characterID`),
  ADD UNIQUE KEY `characterID` (`characterID`);

--
-- Indexes for table `lineage`
--
ALTER TABLE `lineage`
  ADD KEY `parent1ID_2` (`parent1ID`),
  ADD KEY `parent1ID` (`parent1ID`) USING BTREE,
  ADD KEY `parent2ID` (`parent2ID`) USING BTREE;

--
-- Indexes for table `relationships`
--
ALTER TABLE `relationships`
  ADD PRIMARY KEY (`relationship_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `characterID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `relationships`
--
ALTER TABLE `relationships`
  MODIFY `relationship_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
