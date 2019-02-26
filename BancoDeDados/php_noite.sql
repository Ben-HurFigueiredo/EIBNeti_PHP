-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/02/2019 às 01:55
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
-- Banco de dados: `php_noite`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `genero` char(1) NOT NULL,
  `data_nascimento` date NOT NULL,
  `salario` double DEFAULT NULL,
  `tem_filho` enum('S','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_professor`
--

CREATE TABLE `tb_professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `titulacao` varchar(20) NOT NULL,
  `disciplina` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_professor`
--

INSERT INTO `tb_professor` (`id`, `nome`, `sobrenome`, `titulacao`, `disciplina`) VALUES
(1, 'Ana', 'Paula', 'doutorado', 'historia'),
(3, 'Pedro', 'Cardoso', 'licenciatura', 'matematica');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `genero` char(1) NOT NULL,
  `data_cadastro` date NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `login`, `email`, `senha`, `genero`, `data_cadastro`, `cidade`, `uf`) VALUES
(1, 'laura', 'laura@gmail.com', 'abc123', 'F', '2018-11-10', 'Taguatinga', 'DF'),
(2, 'pedro', 'pedro@gmail.com', '123abc', 'M', '2018-12-15', 'Osasco', 'SP'),
(3, 'joana', 'joana@gmail.com', '123abc', 'F', '2019-01-05', 'Bangu', 'RJ'),
(4, 'laura', 'laura@gmail.com', 'abc123', 'F', '2019-02-10', 'Taguatinga', 'DF'),
(5, 'pedro', 'pedro@gmail.com', '123abc', 'M', '2019-03-15', 'Osasco', 'SP'),
(6, 'joana', 'joana@gmail.com', '123abc', 'F', '2019-04-05', 'Bangu', 'RJ');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `v_aluno`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `v_aluno` (
`id` int(11)
,`nome` varchar(20)
,`sobrenome` varchar(20)
,`genero` char(1)
,`data_nascimento` date
,`salario` double
,`tem_filho` enum('S','N')
);

-- --------------------------------------------------------

--
-- Estrutura para view `v_aluno`
--
DROP TABLE IF EXISTS `v_aluno`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_aluno`  AS  select `tb_aluno`.`id` AS `id`,`tb_aluno`.`nome` AS `nome`,`tb_aluno`.`sobrenome` AS `sobrenome`,`tb_aluno`.`genero` AS `genero`,`tb_aluno`.`data_nascimento` AS `data_nascimento`,`tb_aluno`.`salario` AS `salario`,`tb_aluno`.`tem_filho` AS `tem_filho` from `tb_aluno` ;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
