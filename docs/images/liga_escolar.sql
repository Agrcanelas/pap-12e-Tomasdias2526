-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jan-2026 às 11:59
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
-- Banco de dados: `liga_escolar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ID_Aluno` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Numero_Estudante` varchar(20) NOT NULL,
  `Turma` varchar(20) NOT NULL,
  `Contacto` varchar(20) DEFAULT NULL,
  `ID_Equipa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ID_Aluno`, `Nome`, `Numero_Estudante`, `Turma`, `Contacto`, `ID_Equipa`) VALUES
(1, 'Ana Silva', 'E1001', '10A', '912345001', 1),
(2, 'Bruno Costa', 'E1002', '11B', '912345002', 2),
(3, 'Carla Mendes', 'E1003', '12C', '912345003', 3),
(4, 'Diogo Rocha', 'E1004', '10D', '912345004', 4),
(5, 'Eva Pires', 'E1005', '11E', '912345005', 5),
(6, 'Filipe Nunes', 'E1006', '12F', '912345006', 6),
(7, 'Gonçalo Reis', 'E1007', '10G', '912345007', 7),
(8, 'Helena Matos', 'E1008', '11H', '912345008', 8),
(9, 'Igor Lopes', 'E1009', '12I', '912345009', 9),
(10, 'Joana Tavares', 'E1010', '10J', '912345010', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificacao`
--

CREATE TABLE `classificacao` (
  `ID_Classificacao` int(11) NOT NULL,
  `Posicao` int(11) NOT NULL,
  `Pontos` int(11) DEFAULT 0,
  `Vitorias` int(11) DEFAULT 0,
  `Derrotas` int(11) DEFAULT 0,
  `Empates` int(11) DEFAULT 0,
  `ID_Equipa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `classificacao`
--

INSERT INTO `classificacao` (`ID_Classificacao`, `Posicao`, `Pontos`, `Vitorias`, `Derrotas`, `Empates`, `ID_Equipa`) VALUES
(1, 1, 12, 4, 0, 0, 1),
(2, 2, 10, 3, 1, 1, 2),
(3, 3, 9, 3, 1, 0, 3),
(4, 4, 8, 2, 2, 2, 4),
(5, 5, 7, 2, 3, 1, 5),
(6, 6, 6, 2, 4, 0, 6),
(7, 7, 5, 1, 4, 2, 7),
(8, 8, 4, 1, 5, 1, 8),
(9, 9, 3, 1, 6, 0, 9),
(10, 10, 1, 0, 7, 1, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipa`
--

CREATE TABLE `equipa` (
  `ID_Equipa` int(11) NOT NULL,
  `Nome_Equipa` varchar(100) NOT NULL,
  `Curso` varchar(100) NOT NULL,
  `Ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `equipa`
--

INSERT INTO `equipa` (`ID_Equipa`, `Nome_Equipa`, `Curso`, `Ano`) VALUES
(1, 'Leões do 10A', 'Informática', 10),
(2, 'Tigres do 11B', 'Informática', 11),
(3, 'Águias do 12C', 'Multimédia', 12),
(4, 'Lobos do 10D', 'Gestão', 10),
(5, 'Falcões do 11E', 'Informática', 11),
(6, 'Panteras do 12F', 'Multimédia', 12),
(7, 'Dragões do 10G', 'Gestão', 10),
(8, 'Raptors do 11H', 'Informática', 11),
(9, 'Cobras do 12I', 'Multimédia', 12),
(10, 'Tubaroes do 10J', 'Gestão', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `ID_Jogos` int(11) NOT NULL,
  `Data_Jogos` date NOT NULL,
  `Hora` time NOT NULL,
  `Local` varchar(100) NOT NULL,
  `Resultado` varchar(10) DEFAULT NULL,
  `ID_Equipa1` int(11) NOT NULL,
  `ID_Equipa2` int(11) NOT NULL
) ;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`ID_Jogos`, `Data_Jogos`, `Hora`, `Local`, `Resultado`, `ID_Equipa1`, `ID_Equipa2`) VALUES
(1, '2025-01-10', '10:00:00', 'Pavilhão A', '2-1', 1, 2),
(2, '2025-01-11', '11:00:00', 'Pavilhão B', '1-1', 3, 4),
(3, '2025-01-12', '12:00:00', 'Pavilhão C', '0-3', 5, 6),
(4, '2025-01-13', '13:00:00', 'Pavilhão A', '4-2', 7, 8),
(5, '2025-01-14', '14:00:00', 'Pavilhão B', '2-2', 9, 10),
(6, '2025-01-15', '10:00:00', 'Pavilhão C', '1-0', 1, 3),
(7, '2025-01-16', '11:00:00', 'Pavilhão A', '3-1', 2, 4),
(8, '2025-01-17', '12:00:00', 'Pavilhão B', '0-0', 5, 7),
(9, '2025-01-18', '13:00:00', 'Pavilhão C', '2-3', 6, 8),
(10, '2025-01-19', '14:00:00', 'Pavilhão A', '1-4', 9, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ID_Aluno`),
  ADD UNIQUE KEY `Numero_Estudante` (`Numero_Estudante`),
  ADD KEY `ID_Equipa` (`ID_Equipa`);

--
-- Índices para tabela `classificacao`
--
ALTER TABLE `classificacao`
  ADD PRIMARY KEY (`ID_Classificacao`),
  ADD UNIQUE KEY `ID_Equipa` (`ID_Equipa`);

--
-- Índices para tabela `equipa`
--
ALTER TABLE `equipa`
  ADD PRIMARY KEY (`ID_Equipa`);

--
-- Índices para tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`ID_Jogos`),
  ADD KEY `ID_Equipa1` (`ID_Equipa1`),
  ADD KEY `ID_Equipa2` (`ID_Equipa2`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `ID_Aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `classificacao`
--
ALTER TABLE `classificacao`
  MODIFY `ID_Classificacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `equipa`
--
ALTER TABLE `equipa`
  MODIFY `ID_Equipa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `ID_Jogos` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`ID_Equipa`) REFERENCES `equipa` (`ID_Equipa`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `classificacao`
--
ALTER TABLE `classificacao`
  ADD CONSTRAINT `classificacao_ibfk_1` FOREIGN KEY (`ID_Equipa`) REFERENCES `equipa` (`ID_Equipa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `jogos`
--
ALTER TABLE `jogos`
  ADD CONSTRAINT `jogos_ibfk_1` FOREIGN KEY (`ID_Equipa1`) REFERENCES `equipa` (`ID_Equipa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jogos_ibfk_2` FOREIGN KEY (`ID_Equipa2`) REFERENCES `equipa` (`ID_Equipa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
