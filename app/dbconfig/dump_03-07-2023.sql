-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/07/2023 às 02:10
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_de_taxi_utec`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `email` varchar(50) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `morada` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa_taxi`
--

CREATE TABLE `empresa_taxi` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `motorista`
--

CREATE TABLE `motorista` (
  `email` varchar(100) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `morada` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_viatura`
--

CREATE TABLE `tipo_viatura` (
  `id_tipo_viatura` int(11) NOT NULL,
  `tipo_viatura` varchar(45) NOT NULL,
  `velocidade_media_pkm` float NOT NULL,
  `preco_base_pkm` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `viagem`
--

CREATE TABLE `viagem` (
  `id_viagem` int(11) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `email_motorista` varchar(50) NOT NULL,
  `data_hora_ini` datetime NOT NULL,
  `data_hora_fim` datetime NOT NULL,
  `coordenadas_origem` varchar(45) NOT NULL,
  `coordenadas_destino` varchar(45) NOT NULL,
  `custo_estimado` decimal(10,2) NOT NULL,
  `custo_real` decimal(10,2) NOT NULL,
  `classificacao_motorista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `viatura`
--

CREATE TABLE `viatura` (
  `id_viatura` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `fator_fiabilidade` varchar(45) NOT NULL,
  `email_motorista` varchar(100) NOT NULL,
  `fk_id_empresa` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `empresa_taxi`
--
ALTER TABLE `empresa_taxi`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `tipo_viatura`
--
ALTER TABLE `tipo_viatura`
  ADD PRIMARY KEY (`id_tipo_viatura`);

--
-- Índices de tabela `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id_viagem`),
  ADD KEY `viagem_ibfk_1` (`email_cliente`),
  ADD KEY `email_motorista` (`email_motorista`);

--
-- Índices de tabela `viatura`
--
ALTER TABLE `viatura`
  ADD PRIMARY KEY (`id_viatura`),
  ADD KEY `tipo` (`tipo`),
  ADD KEY `email_motorista` (`email_motorista`),
  ADD KEY `fk_id_empresa` (`fk_id_empresa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa_taxi`
--
ALTER TABLE `empresa_taxi`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id_viagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `viagem_ibfk_1` FOREIGN KEY (`email_cliente`) REFERENCES `cliente` (`email`),
  ADD CONSTRAINT `viagem_ibfk_2` FOREIGN KEY (`email_motorista`) REFERENCES `motorista` (`email`);

--
-- Restrições para tabelas `viatura`
--
ALTER TABLE `viatura`
  ADD CONSTRAINT `viatura_ibfk_1` FOREIGN KEY (`tipo`) REFERENCES `tipo_viatura` (`id_tipo_viatura`),
  ADD CONSTRAINT `viatura_ibfk_2` FOREIGN KEY (`email_motorista`) REFERENCES `motorista` (`email`),
  ADD CONSTRAINT `viatura_ibfk_3` FOREIGN KEY (`fk_id_empresa`) REFERENCES `empresa_taxi` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
