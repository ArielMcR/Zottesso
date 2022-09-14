-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2022 às 02:04
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `sobrenome` varchar(180) NOT NULL,
  `idade` int(180) NOT NULL,
  `setor` varchar(180) NOT NULL,
  `email` varchar(180) NOT NULL,
  `telefone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `sobrenome`, `idade`, `setor`, `email`, `telefone`) VALUES
(1, 'Marcos', 'Rodrigues', 17, 'Produção', 'marcos@gmail.com', '(44) 9141-7896'),
(3, 'Mathes', 'da Silva', 19, 'Administração', 'mathes@gmail.com', '(44) 9343-7896'),
(4, 'Fernanda', 'Cheade', 20, 'Segurança', 'fernanda@gmail.com', '(44) 9444-7896'),
(5, 'Carla', 'Pinheiro', 21, 'Segurança', 'carla@gmail.com', '(44) 9545-7896'),
(8, 'João', 'Lucas Pinheiro', 19, 'Produção', 'lucasdallas25@gmail.com', '(44) 9999-9999');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(8, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `valorBruto` decimal(10,2) NOT NULL,
  `valorLiquido` decimal(10,2) NOT NULL,
  `Mês` varchar(11) NOT NULL,
  `ano` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `valorBruto`, `valorLiquido`, `Mês`, `ano`) VALUES
(37, '20000.00', '8000.00', 'Fevereiro', 2022),
(38, '15000.00', '11000.00', 'Março', 2022),
(39, '20000.00', '14000.00', 'Abril', 2022),
(40, '25000.00', '17000.00', 'Maio', 2022),
(41, '30000.00', '20000.00', 'Junho', 2022),
(42, '35000.00', '23000.00', 'Julho', 2022),
(43, '40000.00', '26000.00', 'Agosto', 2022),
(44, '45000.00', '29000.00', 'Setembro', 2022),
(45, '50000.00', '21000.00', 'Outubro', 2022),
(46, '55000.00', '5000.00', 'Novembro', 2022),
(47, '60000.00', '38000.00', 'Dezembro', 2022),
(48, '10000.00', '5000.00', 'Janeiro', 2022),
(49, '10000.00', '5000.00', 'Janeiro', 2021),
(50, '150000.00', '8000.00', 'Fevereiro', 2021),
(51, '105000.00', '11000.00', 'Março', 2021),
(52, '20000.00', '14000.00', 'Abril', 2021),
(53, '25000.00', '17000.00', 'Maio', 2021),
(54, '30000.00', '20000.00', 'Junho', 2021),
(55, '35000.00', '23000.00', 'Julho', 2021),
(56, '40000.00', '26000.00', 'Agosto', 2021),
(57, '45000.00', '9000.00', 'Setembro', 2021),
(58, '50000.00', '21000.00', 'Outubro', 2021),
(59, '80000.00', '5000.00', 'Novembro', 2021),
(60, '60000.00', '38000.00', 'Dezembro', 2021),
(61, '50000.00', '8000.00', 'Fevereiro', 2019),
(62, '15000.00', '11000.00', 'Março', 2019),
(63, '96000.00', '14000.00', 'Abril', 2019),
(64, '31000.00', '17000.00', 'Maio', 2019),
(65, '30000.00', '20000.00', 'Junho', 2019),
(66, '35000.00', '23000.00', 'Julho', 2019),
(67, '40000.00', '26000.00', 'Agosto', 2019),
(68, '45000.00', '29000.00', 'Setembro', 2019),
(69, '50000.00', '21000.00', 'Outubro', 2019),
(70, '5000.00', '5000.00', 'Novembro', 2019),
(71, '60000.00', '38000.00', 'Dezembro', 2019),
(72, '10000.00', '5000.00', 'Janeiro', 2019),
(73, '150000.00', '80000.00', 'Fevereiro', 2018),
(74, '105000.00', '11000.00', 'Março', 2018),
(75, '20000.00', '14000.00', 'Abril', 2018),
(76, '25000.00', '17000.00', 'Maio', 2018),
(77, '25000.00', '20000.00', 'Junho', 2018),
(78, '35000.00', '23000.00', 'Julho', 2018),
(79, '40000.00', '26000.00', 'Agosto', 2018),
(80, '45000.00', '9000.00', 'Setembro', 2018),
(81, '80000.00', '21000.00', 'Outubro', 2018),
(82, '21000.00', '5000.00', 'Novembro', 2018),
(83, '31000.00', '38000.00', 'Dezembro', 2018),
(84, '10000.00', '5000.00', 'Janeiro', 2018);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
