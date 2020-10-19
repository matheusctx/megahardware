-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2020 às 02:33
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressora`
--

CREATE TABLE `impressora` (
  `id` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `valor` double NOT NULL,
  `cor` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `processo_impressao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `impressora`
--

INSERT INTO `impressora` (`id`, `modelo`, `fabricante`, `valor`, `cor`, `tipo`, `processo_impressao`) VALUES
(1, 'Multifuncional HP Deskjet 2136', 'HP', 5000, 'preto', 'multifuncional', 'Jato de tinta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `valor` float NOT NULL,
  `memoria` int(11) NOT NULL,
  `processador` varchar(30) NOT NULL,
  `armazenamento` varchar(30) NOT NULL,
  `sistema` varchar(30) NOT NULL,
  `tela` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `modelo`, `fabricante`, `valor`, `memoria`, `processador`, `armazenamento`, `sistema`, `tela`) VALUES
(1, '3232', 'dell', 2000, 4, 'i5', '30 gb', 'windows 10', '14'),
(2, '2020', 'acer', 4000, 8, 'i5', '30 gb', 'windows 10', '14'),
(3, '2512', 'asus', 400, 4, 'i3', '20', 'windows 7', '15'),
(4, '5F45', 'HP', 2500, 8, 'I5', '500', 'WINDOWS 10', '15'),
(5, '3232', 'dell', 400, 4, 'i5', '30 gb', 'windows 10', '14'),
(6, '3232', 'dell', 800, 4, 'i5', '30 gb', 'windows 10', '14'),
(7, '2020', 'acer', 400, 4, 'i5', '30 gb', 'windows 10', '14'),
(8, '3232', 'dell', 50, 4, 'i5', '30 gb', 'windows 10', '14');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `impressora`
--
ALTER TABLE `impressora`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `impressora`
--
ALTER TABLE `impressora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
