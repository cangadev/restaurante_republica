-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2025 às 13:35
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `republica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `username`, `password`) VALUES
(1, 'admin', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- --------------------------------------------------------

--
-- Estrutura da tabela `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `producto`
--

INSERT INTO `producto` (`id`, `nome`, `preco`, `descricao`, `image`) VALUES
(3, 'Arroz', 1500.00, 'Exemplo de descricao curta', 'pngwing.com.png'),
(4, 'Bitoque', 1500.00, 'olaas', 'img2.jpg'),
(6, 'Vinho', 1500.00, 'exemplo de descricao', 'vinh.jpg'),
(8, 'Luacas', 1500.00, 'belallala', 'agua.jpg'),
(9, 'Mufete', 2500.00, 'This track has a mischievous and crafty tone to it. It draws its inspiration from a Luganda', 'img1.jpg'),
(10, 'Funge', 2500.00, 'Serve para o almoço, Jantar a qualquer hora', 'funge.jfif');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `nomeitem` varchar(60) NOT NULL,
  `preco` int(11) NOT NULL,
  `cliente` varchar(60) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `mesa` int(11) NOT NULL,
  `descricao` varchar(110) DEFAULT NULL,
  `dat` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id`, `nomeitem`, `preco`, `cliente`, `quantidade`, `mesa`, `descricao`, `dat`, `hora`) VALUES
(14, 'Mufete', 2500, 'Simao', 2, 2, 'olaas', '2025-05-28', '18:09:00'),
(15, 'Mufete', 2500, 'Simao', 2, 2, 'olaas', '2025-05-28', '18:09:00'),
(16, 'Bitoque', 1500, 'HelenaPPP', 2, 3, 'olaas', '2025-05-28', '17:17:00'),
(18, 'Funge', 2500, 'Helenaqqq', 2, 3, 'olaas', '2025-05-28', '17:30:00'),
(20, 'Funge', 2500, 'Pailo22', 2, 2, 'olaas', '2025-05-28', '19:39:00'),
(21, 'Arroz', 1500, 'Berta', 2, 3, 'olaas', '2025-05-28', '20:58:00'),
(22, 'Bitoque', 1500, 'Pailo', 2, 4, 'olaas', '2025-05-28', '19:00:00'),
(23, 'Mufete', 2500, 'Lucio Jose', 2, 2, 'Bom atendimento', '2025-05-29', '20:08:00'),
(24, 'Bitoque', 1500, 'André Almeida', 3, 4, 'Bom atendimento', '2025-05-30', '10:22:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Índices para tabela `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
