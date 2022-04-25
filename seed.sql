-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.26 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for pokedex
CREATE DATABASE IF NOT EXISTS `pokedex` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `pokedex`;

-- Dumping structure for table pokedex.pokemons
CREATE TABLE IF NOT EXISTS `pokemons` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pokemon_nr` int DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pokedex.pokemons: ~15 rows (approximately)
DELETE FROM `pokemons`;
/*!40000 ALTER TABLE `pokemons` DISABLE KEYS */;
INSERT INTO `pokemons` (`id`, `name`, `pokemon_nr`, `img`, `type`, `weight`, `height`) VALUES
	(11, 'Ivysaur', 2, 'Ivysaur.png', 'Grass', 1, 13),
	(12, 'Venusaur', 3, 'Venusaur.png', 'Grass', 2, 100),
	(13, 'Charmander', 4, 'Charmander.png', 'Fire', 0.6, 8.5),
	(14, 'Charmeleon', 5, 'Charmeleon.png', 'Fire', 1.1, 19),
	(15, 'Charizard', 6, 'Charizard.png', 'Fire', 1.7, 90.5),
	(16, 'Squirtle', 7, 'Squirtle.png', 'Water', 0.5, 9),
	(17, 'Wartortle', 8, 'Wartortle.png', 'Water', 1, 22.5),
	(18, 'Blastoise', 9, 'Blastoise.png', 'Water', 1.6, 85.5),
	(19, 'Caterpie ', 10, 'Caterpie.png', 'Bug', 0.3, 2.9),
	(20, 'Metapod', 11, 'Metapod.png', 'Bug', 0.7, 9.9),
	(21, 'Butterfree', 12, 'Butterfree.png', 'Bug', 1.1, 32),
	(22, 'Weedle', 13, 'Weedle.png', 'Poison', 0.3, 3.2),
	(23, 'Kakuna', 14, 'Kakuna.png', 'Poison', 0.6, 10),
	(24, 'Beedrill', 15, 'Beedrill.png', 'Poison', 1, 29.5),
	(33, 'Bul', 1, 'image2.jpeg', 'Grass', 0.7, 26);
/*!40000 ALTER TABLE `pokemons` ENABLE KEYS */;

-- Dumping structure for table pokedex.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table pokedex.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
	(1, 'Admin', 'Admin', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
