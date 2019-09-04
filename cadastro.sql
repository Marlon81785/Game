-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25/08/2019 às 11:53
-- Versão do servidor: 10.4.6-MariaDB
-- Versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `UsrID` smallint(4) NOT NULL,
  `UsrNome` text COLLATE utf8_unicode_ci NOT NULL,
  `UsrSenha` text COLLATE utf8_unicode_ci NOT NULL,
  `UsrEmail` text COLLATE utf8_unicode_ci NOT NULL,
  `UsrPoints` int(11) NOT NULL,
  `UsrSession` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`UsrID`, `UsrNome`, `UsrSenha`, `UsrEmail`, `UsrPoints`, `UsrSession`) VALUES
(7, 'MARLON FELIPE MARTINS DE OLIVEIRA', '123', 'marlon81785@gmail.com', 276, 0),
(8, 'usuario teste da silva', '123', 'teste@gmail.com', 486, 0),
(11, 'Carlos Bolsonaro', '123', 'carlos@gmail.com', 0, 0),
(12, 'Jair Messias', '123', 'bolson@gmail.com', 0, 0),
(13, 'mais umm teste', '123', 'teste4@gmail.com', 0, 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`UsrID`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `UsrID` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
