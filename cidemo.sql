-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.6.7-MariaDB-2ubuntu1.1 - Ubuntu 22.04
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             12.2.0.6576
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table cidemo.data1
CREATE TABLE IF NOT EXISTS `data1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `jml` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cidemo.data1: ~8 rows (approximately)
DELETE FROM `data1`;
INSERT INTO `data1` (`id`, `nama`, `jml`) VALUES
	(1, 'JUN', 700),
	(2, 'JUL', 1700),
	(3, 'AUG', 2700),
	(4, 'SEP', 2000),
	(5, 'OCT', 1800),
	(6, 'NOV', 1500),
	(7, 'DEC', 2000),
	(8, 'JAN', 450),
	(9, 'FEB', 760);

-- Dumping structure for table cidemo.data2
CREATE TABLE IF NOT EXISTS `data2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL DEFAULT '0',
  `jml` int(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table cidemo.data2: ~7 rows (approximately)
DELETE FROM `data2`;
INSERT INTO `data2` (`id`, `nama`, `jml`) VALUES
	(1, 'JUN', 500),
	(2, 'JUL', 700),
	(3, 'AUG', 2000),
	(4, 'SEP', 200),
	(5, 'OCT', 800),
	(6, 'NOV', 1500),
	(7, 'DEC', 2000);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
