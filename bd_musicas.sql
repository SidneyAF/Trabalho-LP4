-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2018 às 01:23
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_musicas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE `musicas` (
  `id_musica` int(11) NOT NULL,
  `nm_musica` varchar(100) NOT NULL,
  `nm_artista` varchar(100) NOT NULL,
  `nm_album` varchar(100) NOT NULL,
  `dt_lancamento` date NOT NULL,
  `nm_genero` varchar(50) NOT NULL,
  `fk_email_usuario` varchar(50) DEFAULT NULL,
  `tipo_musica` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `musicas`
--

INSERT INTO `musicas` (`id_musica`, `nm_musica`, `nm_artista`, `nm_album`, `dt_lancamento`, `nm_genero`, `fk_email_usuario`, `tipo_musica`) VALUES
(2, 'Skate', 'Charlie Brown Jr.', 'My Life', '2012-09-29', 'Sertanejo', 'sid@sid.com', 'Instrumental'),
(4, 'Black ', 'Pearl Jam', 'Ten', '1991-09-29', 'Pop', 'sid@sid.com', 'Vocal'),
(5, 'Car Radio', 'Twenty one Pilots', 'Vessel', '2015-06-14', 'Rock', 'sid@sid.com', 'Vocal'),
(7, 'Overture ', 'The Who', 'Tommy', '1969-04-30', 'Rock', 'a@a.com', 'Instrumental'),
(8, 'CartÃ£o Postal', 'Scalene', 'Magnetite', '2017-09-29', 'Rock', 'max@max.com', 'Vocal'),
(33, 'Trem Azul', 'Clube da Esquina', 'Clube da Esquina', '1973-10-30', 'MPB', 'sid@sid.com', 'Instrumental');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `email_usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email_usuario`, `senha_usuario`) VALUES
('a@a.com', 'a123'),
('max@max.com', '123456'),
('sid@sid.com', '123456'),
('teste@teste.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `musicas`
--
ALTER TABLE `musicas`
  ADD PRIMARY KEY (`id_musica`),
  ADD KEY `fk_email_usuario` (`fk_email_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email_usuario`),
  ADD UNIQUE KEY `email_usuario` (`email_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musicas`
--
ALTER TABLE `musicas`
  MODIFY `id_musica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
