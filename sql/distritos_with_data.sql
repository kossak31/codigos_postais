-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 20-Fev-2015 às 01:07
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `props`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `distritos`
--

CREATE TABLE IF NOT EXISTS `distritos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(10) unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `distritos_country_id_index` (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `distritos`
--

INSERT INTO `distritos` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 184, 'Aveiro', '2015-02-11 13:45:56', '2015-02-11 13:45:56'),
(2, 184, 'Beja', '2015-02-11 13:45:56', '2015-02-11 13:45:56'),
(3, 184, 'Braga', '2015-02-11 13:45:56', '2015-02-11 13:45:56'),
(4, 184, 'Bragança', '2015-02-11 13:45:56', '2015-02-11 13:45:56'),
(5, 184, 'Castelo Branco', '2015-02-11 13:45:56', '2015-02-11 13:45:56'),
(6, 184, 'Coimbra', '2015-02-11 13:45:56', '2015-02-11 13:45:56'),
(7, 184, 'Évora', '2015-02-11 13:45:56', '2015-02-11 13:45:56'),
(8, 184, 'Faro', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(9, 184, 'Guarda', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(10, 184, 'Leiria', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(11, 184, 'Lisboa', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(12, 184, 'Portalegre', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(13, 184, 'Porto', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(14, 184, 'Santarém', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(15, 184, 'Setúbal', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(16, 184, 'Viana do Castelo', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(17, 184, 'Vila Real', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(18, 184, 'Viseu', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(19, 184, 'Ilha da Madeira', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(20, 184, 'Ilha de Porto Santo', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(21, 184, 'Ilha de Santa Maria', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(22, 184, 'Ilha de São Miguel', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(23, 184, 'Ilha Terceira', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(24, 184, 'Ilha da Graciosa', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(25, 184, 'Ilha de São Jorge', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(26, 184, 'Ilha do Pico', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(27, 184, 'Ilha do Faial', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(28, 184, 'Ilha das Flores', '2015-02-11 13:45:57', '2015-02-11 13:45:57'),
(29, 184, 'Ilha do Corvo', '2015-02-11 13:45:57', '2015-02-11 13:45:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
