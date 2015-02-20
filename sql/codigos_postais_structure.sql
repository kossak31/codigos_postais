-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 19-Fev-2015 às 17:58
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `kitano`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigos_postais`
--

CREATE TABLE IF NOT EXISTS `codigos_postais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `distrito_id` int(10) unsigned NOT NULL,
  `concelho_id` int(10) unsigned NOT NULL,
  `cp` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `localidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cp_alfa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `codigos_postais_distrito_id_index` (`distrito_id`),
  KEY `codigos_postais_concelho_id_index` (`concelho_id`),
  KEY `codigos_postais_cp_index` (`cp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
