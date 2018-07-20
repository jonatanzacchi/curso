-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jul-2018 às 02:32
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `documento` varchar(18) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` smallint(6) DEFAULT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` int(11) DEFAULT NULL,
  `pais` varchar(100) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `data_nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `documento`, `endereco`, `numero`, `cidade`, `uf`, `pais`, `fone`, `email`, `data_nasc`) VALUES
(1, 'Jonatan Zacchi', '151.5', '15', 15, '15', 1, '15', '(15)1', 'teste@teste.com.br', '1515-12-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(11) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `nomeEstado` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`idEstado`, `uf`, `nomeEstado`) VALUES
(1, 'RS', 'Rio Grande do Sul'),
(3, 'SC', 'Santa Catarina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `nome`) VALUES
(1, '1231');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `usuario`, `senha`, `status`) VALUES
(1, '123', '202cb962ac59075b964b07152d234b70', 1),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(5, 'asd', '7815696ecbf1c96e6894b779456d330e', 1),
(7, 'sad', '7815696ecbf1c96e6894b779456d330e', 1),
(8, 'sad', '7815696ecbf1c96e6894b779456d330e', 1),
(9, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 1),
(10, '151', 'a8f15eda80c50adb0e71943adc8015cf', 1),
(11, 'asdas', 'a8f5f167f44f4964e6c998dee827110c', 1),
(12, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 1),
(13, 'asdasdasd', '26f3808cdec7fb1ba79cd549cba6e200', 1),
(14, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uf` (`uf`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD CONSTRAINT `cadastro_ibfk_1` FOREIGN KEY (`uf`) REFERENCES `estados` (`idEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
