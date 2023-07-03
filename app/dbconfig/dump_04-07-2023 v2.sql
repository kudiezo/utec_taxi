-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/07/2023 às 12:53
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

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastrar_motorista` (IN `email` VARCHAR(100), IN `nome` VARCHAR(45), IN `senha` VARCHAR(100), IN `morada` VARCHAR(45), IN `dataNasc` DATE, IN `tipo_auto` INT, IN `empresa` INT)   BEGIN
	INSERT INTO motorista VALUES (email, nome, senha, morada, dataNasc, 0, 'indisponivel');
    INSERT INTO viatura  VALUES (default, tipo_auto, email, empresa);
END$$

DELIMITER ;

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

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`email`, `nome`, `password`, `morada`, `data_nascimento`) VALUES
('judson.paiva@isptec.co.ao', 'Judson Paiva', '1234', 'Luanda', '1988-12-01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `empresa_taxi`
--

CREATE TABLE `empresa_taxi` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `empresa_taxi`
--

INSERT INTO `empresa_taxi` (`id_empresa`, `nome_empresa`) VALUES
(1, 'particular'),
(2, 'Empresa 1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `motorista`
--

CREATE TABLE `motorista` (
  `email` varchar(100) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `morada` varchar(45) NOT NULL,
  `data_nascimento` date NOT NULL,
  `classificacao` float NOT NULL,
  `disponibilidade` set('disponivel','indisponivel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `motorista`
--

INSERT INTO `motorista` (`email`, `nome`, `password`, `morada`, `data_nascimento`, `classificacao`, `disponibilidade`) VALUES
('am@gmail.com', 'Alberto Mulonde', '1234', 'Zango', '2023-07-11', 0, 'indisponivel'),
('em@gmail.com', 'Édner Mateus', '1234', 'Kilamba', '2023-07-19', 0, 'indisponivel'),
('jb@gmail.com', 'Júlio Baptista', '1234', 'Kilamba', '2023-07-12', 0, 'indisponivel'),
('judson.paiva@isptec.co.ao', 'Judson Paiva', '1234', 'Golf', '1988-05-07', 0, 'indisponivel'),
('kudiezo527@gmail.com', 'Antonio Kudiezo', '1234', 'Vila Estoril, Golf 2', '2023-06-28', 0, 'indisponivel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_viatura`
--

CREATE TABLE `tipo_viatura` (
  `id_tipo_viatura` int(11) NOT NULL,
  `tipo_viatura` varchar(45) NOT NULL,
  `velocidade_media_pkm` float NOT NULL,
  `preco_base_pkm` decimal(10,2) NOT NULL,
  `fator_fiabilidade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tipo_viatura`
--

INSERT INTO `tipo_viatura` (`id_tipo_viatura`, `tipo_viatura`, `velocidade_media_pkm`, `preco_base_pkm`, `fator_fiabilidade`) VALUES
(1, 'ligeiro', 50, 3000.00, 0),
(2, 'carrinha', 80, 5000.00, 0),
(3, 'moto', 70, 2500.00, 0);

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
  `email_motorista` varchar(100) NOT NULL,
  `fk_id_empresa` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `viatura`
--

INSERT INTO `viatura` (`id_viatura`, `tipo`, `email_motorista`, `fk_id_empresa`) VALUES
(1, 1, 'judson.paiva@isptec.co.ao', 1),
(4, 3, 'em@gmail.com', 2),
(5, 1, 'am@gmail.com', 2);

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
  ADD KEY `email_motorista` (`email_motorista`),
  ADD KEY `fk_id_empresa` (`fk_id_empresa`),
  ADD KEY `tipo` (`tipo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa_taxi`
--
ALTER TABLE `empresa_taxi`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_viatura`
--
ALTER TABLE `tipo_viatura`
  MODIFY `id_tipo_viatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id_viagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `viatura`
--
ALTER TABLE `viatura`
  MODIFY `id_viatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `viatura_ibfk_2` FOREIGN KEY (`email_motorista`) REFERENCES `motorista` (`email`),
  ADD CONSTRAINT `viatura_ibfk_3` FOREIGN KEY (`fk_id_empresa`) REFERENCES `empresa_taxi` (`id_empresa`),
  ADD CONSTRAINT `viatura_ibfk_4` FOREIGN KEY (`tipo`) REFERENCES `tipo_viatura` (`id_tipo_viatura`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
