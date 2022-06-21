-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 21-Jun-2022 às 20:16
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `residencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id_complaints` int(11) NOT NULL,
  `race` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `data` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `complement` varchar(200) DEFAULT NULL,
  `closest_city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `observations` text NOT NULL,
  `complainer_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `complement` varchar(200) DEFAULT NULL,
  `province` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `foods`
--

DROP TABLE IF EXISTS `foods`;
CREATE TABLE IF NOT EXISTS `foods` (
  `id_complaints` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `complement` varchar(200) DEFAULT NULL,
  `closest_city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `others`
--

DROP TABLE IF EXISTS `others`;
CREATE TABLE IF NOT EXISTS `others` (
  `id_complaints` int(11) NOT NULL,
  `school_level` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `ocuppation` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `complement` varchar(200) DEFAULT NULL,
  `closest_city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
