-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/02/2019 às 02:03
-- Versão do servidor: 10.1.37-MariaDB
-- Versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_loja_noite`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `data_nasc` date NOT NULL,
  `salario` double DEFAULT NULL,
  `id_profissao` int(11) DEFAULT NULL,
  `id_uf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `cpf`, `nome`, `sobrenome`, `data_nasc`, `salario`, `id_profissao`, `id_uf`) VALUES
(1, '000.000.000-00', 'Keanu', 'Reaves', '1964-09-02', 9500, 2, 7),
(2, '111.111.111-11', 'Jonas', 'Baleia', '1999-01-02', 10389, 10, 18),
(5, '222.222.222-22', 'Ana', 'Meireles', '2019-02-25', 5978.87, 8, 6),
(6, '333.333.333-33', 'Davi', 'Miranda', '2000-02-10', 3456.55, NULL, NULL),
(7, '444.444.444-44', 'Pedro', 'Mendonca', '1998-04-14', 5600, NULL, 8),
(8, '555.555.555-55', 'Lana', 'Kiara', '2011-12-25', 0, 12, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `profissao`
--

CREATE TABLE `profissao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `profissao`
--

INSERT INTO `profissao` (`id`, `descricao`) VALUES
(1, 'Administrador'),
(2, 'Advogado'),
(3, 'Biotecnólogo'),
(4, 'Bombeiro'),
(5, 'Contador'),
(6, 'Cozinheiro'),
(7, 'Diarista'),
(8, 'Dentista'),
(9, 'Engenheiro'),
(10, 'Endocrinologista'),
(11, 'Farmaceutico'),
(12, 'Professor');

-- --------------------------------------------------------

--
-- Estrutura para tabela `uf`
--

CREATE TABLE `uf` (
  `id` int(11) NOT NULL,
  `sigla` char(2) DEFAULT NULL,
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `uf`
--

INSERT INTO `uf` (`id`, `sigla`, `descricao`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'CE', 'Ceará'),
(6, 'BA', 'Bahia'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espirito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MT', 'Mato Grosso'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MG', 'Minas Gerais'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PR', 'Paraná'),
(17, 'PE', 'Pernanbuco'),
(18, 'PI', 'Piauí'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RS', 'Rio Grande do Sul'),
(22, 'RO', 'Rondonia'),
(23, 'RR', 'Roraima'),
(24, 'SC', 'Santa Catarina'),
(25, 'SP', 'São Paulo'),
(26, 'SE', 'Sergipe'),
(27, 'TO', 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `v_innerjoinsimples`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `v_innerjoinsimples` (
`CPFCli` varchar(20)
,`NomeCli` varchar(20)
,`SobrenomeCli` varchar(20)
,`DnCli` date
,`SalarioCli` double
,`ProfissaoCli` varchar(30)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `v_inner_simples_cli_uf`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `v_inner_simples_cli_uf` (
`CPFCli` varchar(20)
,`NomeCli` varchar(20)
,`SobrenomeCli` varchar(20)
,`DnCli` date
,`SalarioCli` double
,`SiglaCli` char(2)
,`Estado` varchar(30)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `v_leftjoin`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `v_leftjoin` (
`CPFCli` varchar(20)
,`NomeCli` varchar(20)
,`SobrenomeCli` varchar(20)
,`DnCli` date
,`SalarioCli` double
,`ProfissaoCli` varchar(30)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `v_testeleftjoin`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `v_testeleftjoin` (
`CPFCli` varchar(20)
,`NomeCli` varchar(20)
,`SobrenomeCli` varchar(20)
,`DnCli` date
,`ProfissaoCli` varchar(30)
,`SalarioCli` double
,`SiglaCli` char(2)
,`Estado` varchar(30)
);

-- --------------------------------------------------------

--
-- Estrutura para view `v_innerjoinsimples`
--
DROP TABLE IF EXISTS `v_innerjoinsimples`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_innerjoinsimples`  AS  select `cliente`.`cpf` AS `CPFCli`,`cliente`.`nome` AS `NomeCli`,`cliente`.`sobrenome` AS `SobrenomeCli`,`cliente`.`data_nasc` AS `DnCli`,`cliente`.`salario` AS `SalarioCli`,`profissao`.`descricao` AS `ProfissaoCli` from (`cliente` join `profissao` on((`cliente`.`id_profissao` = `profissao`.`id`))) ;

-- --------------------------------------------------------

--
-- Estrutura para view `v_inner_simples_cli_uf`
--
DROP TABLE IF EXISTS `v_inner_simples_cli_uf`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_inner_simples_cli_uf`  AS  select `cliente`.`cpf` AS `CPFCli`,`cliente`.`nome` AS `NomeCli`,`cliente`.`sobrenome` AS `SobrenomeCli`,`cliente`.`data_nasc` AS `DnCli`,`cliente`.`salario` AS `SalarioCli`,`uf`.`sigla` AS `SiglaCli`,`uf`.`descricao` AS `Estado` from (`cliente` join `uf` on((`cliente`.`id_uf` = `uf`.`id`))) ;

-- --------------------------------------------------------

--
-- Estrutura para view `v_leftjoin`
--
DROP TABLE IF EXISTS `v_leftjoin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_leftjoin`  AS  select `cliente`.`cpf` AS `CPFCli`,`cliente`.`nome` AS `NomeCli`,`cliente`.`sobrenome` AS `SobrenomeCli`,`cliente`.`data_nasc` AS `DnCli`,`cliente`.`salario` AS `SalarioCli`,`profissao`.`descricao` AS `ProfissaoCli` from (`cliente` left join `profissao` on((`cliente`.`id_profissao` = `profissao`.`id`))) ;

-- --------------------------------------------------------

--
-- Estrutura para view `v_testeleftjoin`
--
DROP TABLE IF EXISTS `v_testeleftjoin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_testeleftjoin`  AS  select `cliente`.`cpf` AS `CPFCli`,`cliente`.`nome` AS `NomeCli`,`cliente`.`sobrenome` AS `SobrenomeCli`,`cliente`.`data_nasc` AS `DnCli`,`profissao`.`descricao` AS `ProfissaoCli`,`cliente`.`salario` AS `SalarioCli`,`uf`.`sigla` AS `SiglaCli`,`uf`.`descricao` AS `Estado` from ((`cliente` join `uf` on((`cliente`.`id_uf` = `uf`.`id`))) left join `profissao` on((`cliente`.`id_profissao` = `profissao`.`id`))) ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD KEY `id_uf` (`id_uf`),
  ADD KEY `id_profissao` (`id_profissao`);

--
-- Índices de tabela `profissao`
--
ALTER TABLE `profissao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `uf`
--
ALTER TABLE `uf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `profissao`
--
ALTER TABLE `profissao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `uf`
--
ALTER TABLE `uf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_uf`) REFERENCES `uf` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`id_profissao`) REFERENCES `profissao` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
