-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para salaodebeleza
CREATE DATABASE IF NOT EXISTS `salaodebeleza` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `salaodebeleza`;

-- Copiando estrutura para tabela salaodebeleza.cadastroclientes
CREATE TABLE IF NOT EXISTS `cadastroclientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela salaodebeleza.cadastroclientes: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela salaodebeleza.cadastrofuncionarios
CREATE TABLE IF NOT EXISTS `cadastrofuncionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Cpf` varchar(50) NOT NULL,
  `DataNasc` date NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Email` text NOT NULL,
  `Endereco` text NOT NULL,
  `Cargo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela salaodebeleza.cadastrofuncionarios: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela salaodebeleza.cadastrologin
CREATE TABLE IF NOT EXISTS `cadastrologin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela salaodebeleza.cadastrologin: ~2 rows (aproximadamente)
INSERT IGNORE INTO `cadastrologin` (`id`, `Nome`, `Email`) VALUES
	(1, 'Gustavo Aparecido', 'Gustavoaparecido2204@gmail.com'),
	(2, 'Carlos Maia', 'Carlinhosboteco@gmail.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
