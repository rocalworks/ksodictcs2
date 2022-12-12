-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for crud
CREATE DATABASE IF NOT EXISTS `crud`;
USE `crud`;

-- Dumping structure for table crud.participants
-- UPDATE: Change charset to match database
CREATE TABLE IF NOT EXISTS `participants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `participant` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `gender` char(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `agency` varchar(100) DEFAULT NULL,
  `paddress` varchar(255) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table crud.participants: ~0 rows (approximately)
INSERT INTO `participants` (`id`, `participant`, `gender`, `email`, `agency`, `paddress`, `remarks`, `created_at`, `updated_at`) VALUES
	(1, 'Slade Serrano', 'Male', 'slade@yahoo.com', 'SSS', 'Manila', 'On-going', '2022-12-05 16:13:13', NULL),
	(2, 'Gabriela Ashley', 'Female', 'gabriela@gmail.com', 'MIT', 'USA', 'Finished', '2022-12-05 16:14:35', NULL),
	(3, 'Matilda Miles', 'Female', 'matilda@yahoo.com', 'DEPED', 'Tacloban City', 'On-going', '2022-12-05 16:15:17', NULL),
	(4, 'Rafael Cross', 'Male', 'rafael@email.com', 'LGU', 'Pasay', 'On-going', '2022-12-05 16:16:15', NULL),
	(5, 'Alessandro Bray', 'Male', 'bray@yahoo.com', 'DSWD', 'Baguio', 'Finished', '2022-12-05 16:17:13', NULL),
	(6, 'Lilia Vang', 'Female', 'lilia@gmail.com', 'DEPED', 'Cebu', 'Finished', '2022-12-05 16:17:50', NULL),
	(7, 'Emma West', 'Female', 'emma@email.com', 'DICT', 'Makati', 'Finished', '2022-12-05 16:18:36', NULL),
	(8, 'Alfredo Hart', 'Male', 'alfredo@gmail.com', 'PNP', 'Crame', 'On-going', '2022-12-05 16:19:14', NULL),
	(9, 'Gina Haynes', 'Female', 'gina@gmail.com', 'DSWD', 'Cebu', 'On-going', '2022-12-05 16:19:58', NULL),
	(10, 'Cassandra Melendez', 'Female', 'sandra@email.com', 'DPWH', 'Spain', 'Finished', '2022-12-05 16:20:49', NULL),
	(11, 'Jeffrey Smith', 'Male', 'jeff@yahoo.com', 'BFP', 'Pasay', 'On-going', '2022-12-05 16:21:30', NULL),
	(12, 'Justine Yu', 'Male', 'justine@gmail.com', 'PNP', 'QC', 'On-going', '2022-12-05 16:22:31', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
