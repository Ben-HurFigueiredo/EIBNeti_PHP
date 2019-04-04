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


-- Copiando estrutura do banco de dados para php_noite
CREATE DATABASE IF NOT EXISTS `php_noite` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php_noite`;

-- Copiando dados para a tabela php_noite.tb_aluno: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_aluno` DISABLE KEYS */;
INSERT INTO `tb_aluno` (`id`, `nome`, `sobrenome`, `genero`, `data_nascimento`, `salario`, `tem_filho`) VALUES
	(0, 'Pafuncio', 'da Silva', 'M', '2002-04-20', 2089.85, 'N'),
	(3, 'Aline', 'da Silva', 'F', '2001-01-18', 230, 'N'),
	(4, 'Rodrigo', 'Maia', 'M', '1999-12-01', 8500, 'S'),
	(5, 'Ana', 'Mouza', 'F', '1980-06-25', 4500.83, 'N');
/*!40000 ALTER TABLE `tb_aluno` ENABLE KEYS */;

-- Copiando dados para a tabela php_noite.tb_professor: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_professor` DISABLE KEYS */;
INSERT INTO `tb_professor` (`id`, `nome`, `sobrenome`, `titulacao`, `disciplina`) VALUES
	(1, 'Ana', 'Paula', 'doutorado', 'historia'),
	(2, 'Paulo', 'Amaral', 'doutorado', 'matemática'),
	(3, 'Pedro', 'Cardoso', 'licenciatura', 'geografia');
/*!40000 ALTER TABLE `tb_professor` ENABLE KEYS */;

-- Copiando dados para a tabela php_noite.tb_usuario: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`id`, `login`, `email`, `senha`, `genero`, `data_cadastro`, `cidade`, `uf`) VALUES
	(1, 'Laura', 'laura@gmail.com', 'abc123', 'F', '2019-02-10', 'Taguatinga', 'DF'),
	(2, 'Pedro', 'pedro@gmail.com', '123abc', 'M', '2019-12-15', 'Osasco', 'SP'),
	(3, 'Joana', 'joana@gmail.com', '123abc', 'F', '2019-01-05', 'Bangu', 'RJ'),
	(4, 'Ana', 'ana@gmail.com', '132acb', 'F', '2019-02-22', 'Ouro Preto', 'MG'),
	(5, 'Julio', 'julio@gmail.com', '112aab', 'M', '2019-03-12', 'Jaraguá', 'GO'),
	(6, 'Leo', 'leo@gmail.com', '333ccc', 'M', '2019-04-09', 'Belém', 'PA');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
