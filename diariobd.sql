-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 03-Maio-2019 às 22:38
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diariobd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `nomePai` varchar(100) DEFAULT NULL,
  `nomeMae` varchar(100) DEFAULT NULL,
  `dataNascimento` varchar(10) DEFAULT NULL,
  `local` varchar(100) DEFAULT NULL,
  `cartorio` varchar(100) DEFAULT NULL,
  `residencia` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `escola` varchar(100) DEFAULT NULL,
  `emailPai` varchar(100) NOT NULL,
  `emailMae` varchar(100) NOT NULL,
  `situacao` varchar(20) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

DROP TABLE IF EXISTS `avaliacao`;
CREATE TABLE IF NOT EXISTS `avaliacao` (
  `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(40) NOT NULL,
  `nota` float NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `fkPerfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAvaliacao`),
  KEY `fkAvaliacao` (`fkPerfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisoaluno`
--

DROP TABLE IF EXISTS `avisoaluno`;
CREATE TABLE IF NOT EXISTS `avisoaluno` (
  `idAviso` int(11) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(100) NOT NULL,
  `aviso` varchar(300) NOT NULL,
  `fkAluno` int(11) DEFAULT NULL,
  `fkFuncionario` int(11) DEFAULT NULL,
  `fkProfessor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAviso`),
  KEY `fkAluno` (`fkAluno`),
  KEY `fkFuncionario` (`fkFuncionario`),
  KEY `fkProfessor` (`fkProfessor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avisoturma`
--

DROP TABLE IF EXISTS `avisoturma`;
CREATE TABLE IF NOT EXISTS `avisoturma` (
  `idAviso` int(11) NOT NULL AUTO_INCREMENT,
  `destinatario` varchar(100) NOT NULL,
  `aviso` varchar(300) NOT NULL,
  `fkTurma` int(11) DEFAULT NULL,
  `fkFuncionario` int(11) DEFAULT NULL,
  `fkProfessor` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAviso`),
  KEY `fkTurma` (`fkTurma`),
  KEY `fkFuncionario` (`fkFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE IF NOT EXISTS `disciplina` (
  `idDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cargaHoraria` float NOT NULL,
  PRIMARY KEY (`idDisciplina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `docsaluno`
--

DROP TABLE IF EXISTS `docsaluno`;
CREATE TABLE IF NOT EXISTS `docsaluno` (
  `idDocs` int(11) NOT NULL AUTO_INCREMENT,
  `registro` varchar(40) NOT NULL,
  `foto3x4` varchar(40) NOT NULL,
  `cartaoVacina` varchar(40) NOT NULL,
  `cartaoSus` varchar(40) NOT NULL,
  `assinaturaResponsavel` varchar(40) NOT NULL,
  `fkAluno` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDocs`),
  KEY `fkAluno` (`fkAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `docsfuncionario`
--

DROP TABLE IF EXISTS `docsfuncionario`;
CREATE TABLE IF NOT EXISTS `docsfuncionario` (
  `idDocs` int(11) NOT NULL AUTO_INCREMENT,
  `rg` varchar(40) DEFAULT NULL,
  `tituloEleitor` varchar(40) DEFAULT NULL,
  `certificadoFormacao` varchar(40) DEFAULT NULL,
  `fkFuncionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDocs`),
  KEY `fkFuncionario` (`fkFuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

DROP TABLE IF EXISTS `frequencia`;
CREATE TABLE IF NOT EXISTS `frequencia` (
  `idFrequencia` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(10) NOT NULL,
  `presenca` tinyint(1) NOT NULL,
  `fkPerfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFrequencia`),
  KEY `fkPerfil` (`fkPerfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `cargaHoraria` int(11) NOT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `corDaPele` varchar(20) DEFAULT NULL,
  `nomePai` varchar(100) DEFAULT NULL,
  `nomeMae` varchar(100) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `formacao` varchar(200) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `dataNascimento` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `cargo`, `cargaHoraria`, `cpf`, `rg`, `sexo`, `corDaPele`, `nomePai`, `nomeMae`, `endereco`, `estado`, `cep`, `telefone`, `email`, `formacao`, `senha`, `situacao`, `cidade`, `dataNascimento`) VALUES
(2, 'Levi Freire', 'Diretor', 48, '999.999.999-99', '91284987', 'Masculino', 'Amarela', 'Raimundo Pereira', 'Maria da ConceiÃ§Ã£o', 'rua tal', 'CE', '69600-000', '(88) 91232-1231', 'levifreire7@gmail.com', 'Bacharelado em ciÃªncia da computaÃ§Ã£o', 'd8578edf8458ce06fbc5bb76a58c5ca4', '1', 'Bela Cruz', '1997-10-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `fkTurma` int(11) DEFAULT NULL,
  `fkAluno` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPerfil`),
  KEY `fkTurma` (`fkTurma`),
  KEY `fkAluno` (`fkAluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

DROP TABLE IF EXISTS `turma`;
CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` int(11) NOT NULL AUTO_INCREMENT,
  `sala` varchar(40) NOT NULL,
  `horario` varchar(40) NOT NULL,
  `ano` varchar(10) NOT NULL,
  `serie` varchar(20) NOT NULL,
  `situacao` varchar(20) NOT NULL,
  `fkProfessor` int(11) DEFAULT NULL,
  `fkDisciplina` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTurma`),
  KEY `fkDisciplina` (`fkDisciplina`),
  KEY `turma_ibfk_1` (`fkProfessor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`fkPerfil`) REFERENCES `perfil` (`idPerfil`);

--
-- Limitadores para a tabela `avisoaluno`
--
ALTER TABLE `avisoaluno`
  ADD CONSTRAINT `avisoaluno_ibfk_1` FOREIGN KEY (`fkAluno`) REFERENCES `aluno` (`idAluno`),
  ADD CONSTRAINT `avisoaluno_ibfk_2` FOREIGN KEY (`fkFuncionario`) REFERENCES `funcionario` (`idFuncionario`);

--
-- Limitadores para a tabela `avisoturma`
--
ALTER TABLE `avisoturma`
  ADD CONSTRAINT `avisoturma_ibfk_1` FOREIGN KEY (`fkTurma`) REFERENCES `turma` (`idTurma`),
  ADD CONSTRAINT `avisoturma_ibfk_2` FOREIGN KEY (`fkFuncionario`) REFERENCES `funcionario` (`idFuncionario`);

--
-- Limitadores para a tabela `docsaluno`
--
ALTER TABLE `docsaluno`
  ADD CONSTRAINT `docsaluno_ibfk_1` FOREIGN KEY (`fkAluno`) REFERENCES `aluno` (`idAluno`);

--
-- Limitadores para a tabela `docsfuncionario`
--
ALTER TABLE `docsfuncionario`
  ADD CONSTRAINT `docsfuncionario_ibfk_1` FOREIGN KEY (`fkFuncionario`) REFERENCES `funcionario` (`idFuncionario`);

--
-- Limitadores para a tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD CONSTRAINT `frequencia_ibfk_1` FOREIGN KEY (`fkPerfil`) REFERENCES `perfil` (`idPerfil`);

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`fkTurma`) REFERENCES `turma` (`idTurma`),
  ADD CONSTRAINT `perfil_ibfk_2` FOREIGN KEY (`fkAluno`) REFERENCES `aluno` (`idAluno`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`fkProfessor`) REFERENCES `funcionario` (`idFuncionario`),
  ADD CONSTRAINT `turma_ibfk_2` FOREIGN KEY (`fkDisciplina`) REFERENCES `disciplina` (`idDisciplina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
