-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Out-2019 às 20:55
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetointegrador2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `idCurso` int(3) UNSIGNED NOT NULL,
  `nomeCurso` varchar(50) NOT NULL,
  `siglaCurso` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`idCurso`, `nomeCurso`, `siglaCurso`) VALUES
(1, 'Bacharelado em Sistemas de Informação', 'BSI'),
(2, 'Tecnólogo em Mecatrônica Industrial', 'MI'),
(4, 'teste', 'TES'),
(5, 'hsh', 'aaa'),
(6, 'test', 'teste '),
(7, 'Licenciatura em Matemática', 'LM'),
(8, 'jaJA', 'AA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplina`
--

CREATE TABLE `tb_disciplina` (
  `idCursoFk` int(3) UNSIGNED NOT NULL,
  `idDisciplina` int(3) UNSIGNED NOT NULL,
  `nomeDisciplina` varchar(50) NOT NULL,
  `siglaDisciplina` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_disciplina`
--

INSERT INTO `tb_disciplina` (`idCursoFk`, `idDisciplina`, `nomeDisciplina`, `siglaDisciplina`) VALUES
(1, 2, 'Programação', 'LLP'),
(1, 4, 'hhs', 'jjdd'),
(1, 6, 'Construção e Analise de Algoritmos', 'CAA'),
(1, 7, 'Construção e Analise de Algoritmos', 'CAA'),
(1, 8, 'Construção e Analise de Algoritmos', 'CAA'),
(1, 9, 'Teste 1', 't1'),
(2, 11, 'Corrente Continua', 'CC'),
(2, 12, 'panorama', 'pa'),
(2, 16, 'shha', 'klksdk'),
(6, 17, 'asjdajs', 'kjsdja'),
(7, 18, 'Fundamentos I', 'fundI'),
(1, 19, 'jjsjs', 'jjd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_laboratorio`
--

CREATE TABLE `tb_laboratorio` (
  `idLab` int(3) UNSIGNED NOT NULL,
  `codLab` int(6) NOT NULL,
  `nomeLab` varchar(50) NOT NULL,
  `qtdcompLab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_reserva`
--

CREATE TABLE `tb_reserva` (
  `idDisciplinaFk` int(3) UNSIGNED NOT NULL,
  `idUsuarioFk` int(11) UNSIGNED NOT NULL,
  `idLabFk` int(3) UNSIGNED NOT NULL,
  `idReserva` int(10) UNSIGNED NOT NULL,
  `dataReserva` varchar(10) NOT NULL,
  `horaReserva` varchar(5) NOT NULL,
  `statusReserva` varchar(10) NOT NULL,
  `justificativaReserva` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `idUsuario` int(11) UNSIGNED NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(30) NOT NULL,
  `senhaUsuario` varchar(16) NOT NULL,
  `nivelUsuario` tinyint(1) NOT NULL DEFAULT 0,
  `telefoneUsuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `nivelUsuario`, `telefoneUsuario`) VALUES
(1, 'aqsad', 'asd@df', 'oHQHE', 1, 'SPOSP2'),
(2, 'adm', 'teste@teste.com', '123', 1, '998007766'),
(3, 'User', 'outro@outro.com', '123', 0, '998445566'),
(4, 'adm2', 'teste@test.com', '123', 2, '99858466');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Índices para tabela `tb_disciplina`
--
ALTER TABLE `tb_disciplina`
  ADD PRIMARY KEY (`idDisciplina`),
  ADD KEY `FK_curso` (`idCursoFk`);

--
-- Índices para tabela `tb_laboratorio`
--
ALTER TABLE `tb_laboratorio`
  ADD PRIMARY KEY (`idLab`),
  ADD UNIQUE KEY `codLab` (`codLab`);

--
-- Índices para tabela `tb_reserva`
--
ALTER TABLE `tb_reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `FK_laboratorio` (`idLabFk`),
  ADD KEY `FK_usuario` (`idUsuarioFk`),
  ADD KEY `FK_disciplina` (`idDisciplinaFk`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `idCurso` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_disciplina`
--
ALTER TABLE `tb_disciplina`
  MODIFY `idDisciplina` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_laboratorio`
--
ALTER TABLE `tb_laboratorio`
  MODIFY `idLab` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_reserva`
--
ALTER TABLE `tb_reserva`
  MODIFY `idReserva` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `idUsuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_disciplina`
--
ALTER TABLE `tb_disciplina`
  ADD CONSTRAINT `FK_curso` FOREIGN KEY (`idCursoFk`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `tb_reserva`
--
ALTER TABLE `tb_reserva`
  ADD CONSTRAINT `FK_disciplina` FOREIGN KEY (`idDisciplinaFk`) REFERENCES `tb_disciplina` (`idDisciplina`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_laboratorio` FOREIGN KEY (`idLabFk`) REFERENCES `tb_laboratorio` (`idLab`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_usuario` FOREIGN KEY (`idUsuarioFk`) REFERENCES `tb_usuario` (`idUsuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
