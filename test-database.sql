-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for bluechip
CREATE DATABASE IF NOT EXISTS `bluechip` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bluechip`;

-- Dumping structure for table bluechip.tbl_message
CREATE TABLE IF NOT EXISTS `tbl_message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext NOT NULL,
  `name` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `date-entered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table bluechip.tbl_message: 3 rows
/*!40000 ALTER TABLE `tbl_message` DISABLE KEYS */;
INSERT INTO `tbl_message` (`message_id`, `message`, `name`, `email`, `date-entered`) VALUES
	(1, 'This is a test.. ', 'Kevin Davis', 'kevindavis338@gmail.com', '2018-11-18 13:11:28'),
	(2, 'This is a test.. ', 'Kevin Davis', 'kevindavis338@gmail.com', '2018-11-18 13:12:38'),
	(3, 'This is a test.. ', 'Kevin Davis', 'kevindavis338@gmail.com', '2018-11-18 13:12:42');
/*!40000 ALTER TABLE `tbl_message` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
