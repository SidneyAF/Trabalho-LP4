-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 25-Nov-2018 às 04:41
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bd_musicas`
--
CREATE DATABASE IF NOT EXISTS `bd_musicas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_musicas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE IF NOT EXISTS `musicas` (
  `id_musica` int(11) NOT NULL AUTO_INCREMENT,
  `nm_musica` varchar(100) NOT NULL,
  `nm_artista` varchar(100) NOT NULL,
  `nm_album` varchar(100) NOT NULL,
  `dt_lancamento` date NOT NULL,
  `nm_genero` varchar(50) NOT NULL,
  `fk_email_usuario` varchar(50) DEFAULT NULL,
  `tipo_musica` varchar(50) NOT NULL,
  PRIMARY KEY (`id_musica`),
  KEY `fk_email_usuario` (`fk_email_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`id_musica`, `nm_musica`, `nm_artista`, `nm_album`, `dt_lancamento`, `nm_genero`, `fk_email_usuario`, `tipo_musica`) VALUES
(2, 'Charlie Brown', 'Skate', 'MY Life', '0000-00-00', 'Rock', 'sid@sid.com', ''),
(4, 'aaa', 'aaa', 'aaa', '0000-00-00', 'Pop', 'sid@sid.com', 'Vocal'),
(5, 'Car Radio', 'Twenty one Pilots', 'Vessel', '2015-06-14', 'Rock', 'sid@sid.com', 'Vocal'),
(8, '', '', '', '2018-11-08', '', NULL, ''),
(33, 'ee', 'e', 'e', '0000-00-00', 'Pop', 'sid@sid.com', 'Vocal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `email_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  PRIMARY KEY (`email_usuario`),
  UNIQUE KEY `email_usuario` (`email_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email_usuario`, `senha_usuario`) VALUES
('a@a.com', 'a123'),
('max@max.com', '123456'),
('sid@sid.com', '123456'),
('teste@teste.com', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
