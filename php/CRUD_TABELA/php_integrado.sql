-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.37-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para php_integrado
CREATE DATABASE IF NOT EXISTS `php_integrado` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php_integrado`;

-- Copiando dados para a tabela php_integrado.acesso: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `acesso` DISABLE KEYS */;
INSERT INTO `acesso` (`id`, `nome`, `login`, `senha`, `active`) VALUES
	(1, 'Administrador', 'adm', '123', 'S'),
	(2, 'Rodrigo freitas', 'rodrigo', '123abc', 'N'),
	(3, 'Adriana Moura', 'adriana', 'abc123', 'N');
/*!40000 ALTER TABLE `acesso` ENABLE KEYS */;

-- Copiando dados para a tabela php_integrado.pessoa: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` (`id`, `nome`, `sobrenome`, `data_nascimento`, `genero`, `estado_civil`) VALUES
	(1, 'Ben-Hur', 'Figueiredo', '2019-03-12', 'M', 'Casado(a)'),
	(2, '', '', '0000-00-00', '', '');
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
