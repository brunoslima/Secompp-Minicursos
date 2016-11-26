-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Nov-2016 às 00:46
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `metrophoto`
--
CREATE DATABASE IF NOT EXISTS `metrophoto` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `metrophoto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

CREATE TABLE IF NOT EXISTS `artigo` (
  `idartigo` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `source` varchar(100) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idartigo`),
  KEY `fk_artigo_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`idartigo`, `descricao`, `source`, `usuario_idusuario`) VALUES
(1, 'Apresentação do Minicurso', 'apresentacao.pdf', 4),
(2, 'Proposta do Minicurso', 'proposta.pdf', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE IF NOT EXISTS `atividade` (
  `idatividade` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `posicaoDia` decimal(1,0) NOT NULL,
  `descricao` text NOT NULL,
  `local` varchar(60) NOT NULL,
  PRIMARY KEY (`idatividade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`idatividade`, `nome`, `data`, `posicaoDia`, `descricao`, `local`) VALUES
(1, 'Abertura', '2016-11-28', '1', 'Esta atividade marca o início do evento MetroPhoto', 'Auditório - Discente V'),
(2, 'Evento Cultural', '2016-11-28', '2', 'Esta atividade busca promover a integração dos participantes do evento.', 'Hall do Discente V'),
(3, 'Cinema', '2016-11-28', '3', 'Promoção de trabalhos renomados na área.', 'Hall do Discente V'),
(4, 'Avaliação de Trabalhos', '2016-11-28', '4', 'Análise de trabalhos inscritos.', 'Hall do Discente V'),
(5, 'Palestra I', '2016-11-28', '5', 'Debate sobre novas técnicas na área.', 'Auditório - Discente V'),
(6, 'Amostra de Artistas Locais', '2016-11-29', '1', '', 'Anfiteatro I'),
(7, 'Palestra II', '2016-11-29', '2', 'Histórico e curiosidades das ferramentas.', 'Auditório - Discente V'),
(8, 'Avaliação de Trabalhos', '2016-11-29', '3', 'Análise de trabalhos inscritos.', 'Hall do Discente V'),
(9, 'Avaliação de Trabalhos', '2016-11-29', '4', 'Análise de trabalhos inscritos.', 'Hall do Discente V'),
(10, 'Palestra III', '2016-11-29', '5', '', 'Auditório - Discente V'),
(11, 'Palestra IV', '2016-11-30', '1', '', 'Auditório - Discente V'),
(12, 'Palestra V', '2016-11-30', '2', '', 'Auditório - Discente V'),
(13, 'Divulgação do Resultado', '2016-11-30', '3', '', 'Auditório - Discente V'),
(14, 'Encerramento', '2016-11-30', '4', '', 'Auditório - Discente V'),
(15, 'Confraternização', '2016-11-30', '5', '', 'A definir');

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `idfoto` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `source` varchar(100) DEFAULT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idfoto`,`nome`),
  KEY `fk_foto_usuario_idx` (`fk_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `foto`
--

INSERT INTO `foto` (`idfoto`, `nome`, `source`, `fk_usuario`) VALUES
(1, 'Muralha da China', 'china.jpg', 4),
(2, 'Big Bang', 'big.jpg', 7),
(3, 'Alpes Suíços', 'alpes.jpg', 1),
(4, 'Monte Everest', 'everest.jpg', 11),
(5, 'Ponte 25 de Abril', 'portugal.jpg', 6),
(6, 'Coliseu', 'coliseu.jpg', 11),
(7, 'Torre Eiffel', 'torre.jpg', 3),
(8, 'Portão de Brandemburgo', 'portao.jpg', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `formacao` decimal(1,0) NOT NULL,
  `comentario` text,
  `organizacao` tinyint(1) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `formacao`, `comentario`, `organizacao`) VALUES
(1, 'Bruno Santos de Lima', 'brunos.lima@outlook.com', 'bruno123', '0', NULL, 1),
(2, 'Danilo Medeiros Eler', 'danilomedeirosunesp@gmail.com', 'naoexistecaminholongoguloso', '1', NULL, 1),
(3, 'Jorge Marques Prates', 'jorgem.prates@gmail.com', 'canada', '1', NULL, 0),
(4, 'Leandro Ungari Cayres', 'leandroungari@gmail.com', 'teste123', '0', NULL, 1),
(5, 'Eymar Ferrario de Lima', 'yasmat@gmail.com', 'yasmat123', '0', NULL, 1),
(6, 'Ana Carolina Vaz', 'ana.carol@outlook.com', 'photometro10', '0', NULL, 0),
(7, 'Marco Ântonio Cid', 'marco@gmail.com', 'cideradogelo', '0', NULL, 0),
(8, 'Matheus Prachedes Batista', 'mortzion@hotmail.com', 'teste123456789', '0', NULL, 1),
(9, 'Guilherme Cavichioli', 'cavichioli@gmail.com', '12345', '0', NULL, 1),
(10, 'Fábio da Silva Takaki', 'fabio@takaki.me', 'oadministradordosistema', '0', NULL, 1),
(11, 'Rafael Araújo', 'rafael@teste.com', 'teste', '0', NULL, 0),
(12, 'Anderson Costa', 'anderson@teste.com', 'teste12', '0', 'Texto Padrão', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioatividade`
--

CREATE TABLE IF NOT EXISTS `usuarioatividade` (
  `usuario_idusuario` int(11) NOT NULL,
  `atividade_idatividade` int(11) NOT NULL,
  PRIMARY KEY (`usuario_idusuario`,`atividade_idatividade`),
  KEY `fk_usuario_has_atividade_atividade1_idx` (`atividade_idatividade`),
  KEY `fk_usuario_has_atividade_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarioatividade`
--

INSERT INTO `usuarioatividade` (`usuario_idusuario`, `atividade_idatividade`) VALUES
(3, 1),
(5, 4),
(2, 14),
(3, 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `idvideo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `source` varchar(45) NOT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idvideo`),
  KEY `fk_video_usuario1_idx` (`usuario_idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `video`
--

INSERT INTO `video` (`idvideo`, `nome`, `source`, `usuario_idusuario`) VALUES
(1, 'Demonstrativo', 'demonstrativo.mp4', 7);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `artigo`
--
ALTER TABLE `artigo`
  ADD CONSTRAINT `fk_artigo_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_usuario` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuarioatividade`
--
ALTER TABLE `usuarioatividade`
  ADD CONSTRAINT `fk_usuario_has_atividade_atividade1` FOREIGN KEY (`atividade_idatividade`) REFERENCES `atividade` (`idatividade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_atividade_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `fk_video_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
