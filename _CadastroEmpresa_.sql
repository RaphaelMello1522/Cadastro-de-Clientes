-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 01:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `dtnasc` date NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `nome`, `cpf`, `tipo`, `dtnasc`, `usuarios_idusuarios`) VALUES
(15, 'asasd', 'asdasdasd', 'a', '1999-03-08', 0),
(16, 'asdasd', 'asdasd', 'a', '1999-03-08', 0),
(17, 'asdas', 'asdas', 'a', '1999-03-08', 0),
(18, 'asdasd', 'asdasd', 'a', '1999-03-08', 0),
(19, 'asdasd', 'asdasd', 'a', '1999-03-08', 0),
(20, 'asdasd', 'asdas', 'a', '1999-03-08', 0),
(21, 'Pedro', '07496954985', 'a', '1999-03-08', 0),
(22, 'Pedro', '07496954985', 'a', '1999-03-08', 0),
(23, 'asdasd', 'asdas', 'd', '0000-00-00', 3),
(24, 'asdasd', 'asdas', 'd', '1999-03-08', 3),
(25, 'asdasda', 'sdasdasd', '1', '1999-03-08', 3),
(38, 'eu', '456465456', 'a', '1999-03-08', 825),
(39, 'eu', '456465456', 'a', '1999-03-08', 3),
(40, 'eee', '048654615', 'a', '1999-03-08', 3),
(41, 'eee', '048654615', 'a', '1999-03-08', 3),
(42, 'asdasd', 'asdasd', 'a', '1999-08-03', 3),
(43, 'Raphael ', '07496954988', 'A', '1999-03-08', 3),
(44, 'rasdasd', '211561561', 'a', '1999-03-08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `enderecos`
--

CREATE TABLE `enderecos` (
  `idenderecos` int(11) NOT NULL,
  `logradouro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `enderecocol` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  `idclientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enderecos`
--

INSERT INTO `enderecos` (`idenderecos`, `logradouro`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `uf`, `enderecocol`, `usuarios_idusuarios`, `idclientes`) VALUES
(43, 'aaaa', '32', 'asdasd', 'centro', '80230000', 'curitiba', 'PR', 'asdas', 3, 43),
(44, 'aaaa', '32', 'asdasd', 'centro', '80230000', 'curitiba', 'PR', 'asdas', 3, 43);

-- --------------------------------------------------------

--
-- Table structure for table `logs_acesso`
--

CREATE TABLE `logs_acesso` (
  `idlogs` int(11) NOT NULL,
  `descricao` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telefones`
--

CREATE TABLE `telefones` (
  `idtelefones` int(11) NOT NULL,
  `ddd` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `fone` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `clientes_idclientes` int(11) NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `telefones`
--

INSERT INTO `telefones` (`idtelefones`, `ddd`, `fone`, `tipo`, `clientes_idclientes`, `usuarios_idusuarios`) VALUES
(1, '41', '995494332', 'Celular', 0, 3),
(2, '41', '995494332', 'Celular', 21, 3),
(3, '41', '995494332', 'Celular', 21, 3),
(4, '41', '995494332', 'Celular', 21, 3),
(5, '41', '995494332', 'Celular', 21, 3),
(8, '41', '995494332', 'Celular', 43, 3),
(9, '41', '995494330', 'Celular', 43, 3),
(10, '41', '995494330', 'Celular', 43, 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nome`, `senha`) VALUES
(3, 'Raphael', 'kika1500'),
(825, 'RH', '202001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`),
  ADD KEY `usuarios_idusuarios` (`usuarios_idusuarios`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idenderecos`),
  ADD KEY `idclientes` (`idclientes`),
  ADD KEY `usuarios_idusuarios` (`usuarios_idusuarios`);

--
-- Indexes for table `logs_acesso`
--
ALTER TABLE `logs_acesso`
  ADD PRIMARY KEY (`idlogs`),
  ADD KEY `usuarios_idusuarios` (`usuarios_idusuarios`);

--
-- Indexes for table `telefones`
--
ALTER TABLE `telefones`
  ADD PRIMARY KEY (`idtelefones`),
  ADD KEY `usuarios_idusuarios` (`usuarios_idusuarios`),
  ADD KEY `clientes_idclientes` (`clientes_idclientes`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idenderecos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `logs_acesso`
--
ALTER TABLE `logs_acesso`
  MODIFY `idlogs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefones`
--
ALTER TABLE `telefones`
  MODIFY `idtelefones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=826;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`);

--
-- Constraints for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`idclientes`) REFERENCES `clientes` (`id_clientes`),
  ADD CONSTRAINT `enderecos_ibfk_2` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`);

--
-- Constraints for table `logs_acesso`
--
ALTER TABLE `logs_acesso`
  ADD CONSTRAINT `logs_acesso_ibfk_1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`);

--
-- Constraints for table `telefones`
--
ALTER TABLE `telefones`
  ADD CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`),
  ADD CONSTRAINT `telefones_ibfk_2` FOREIGN KEY (`clientes_idclientes`) REFERENCES `clientes` (`id_clientes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
