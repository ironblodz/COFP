-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Jul-2022 às 13:25
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `info`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formacao`
--

DROP TABLE IF EXISTS `formacao`;
CREATE TABLE IF NOT EXISTS `formacao` (
  `id_formacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_formacao` date NOT NULL,
  `duracao` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `categoria` enum('Saúde','Imformática','Gestão','Educação','Turísmo') DEFAULT NULL,
  `fk_id_professor` int(11) NOT NULL,
  PRIMARY KEY (`id_formacao`),
  KEY `fk_id_professor` (`fk_id_professor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formacao`
--

INSERT INTO `formacao` (`id_formacao`, `nome`, `data_formacao`, `duracao`, `descricao`, `categoria`, `fk_id_professor`) VALUES
(1, 'Educação Sexual', '2022-05-27', 460, 'Nestas aulas temos como objetivo aumentar o nosso conhecimento sobre a pratica de atos sexuais, aulas mais praticas e pouco teóricas. com fáceis aumentos de nota, basta mostrar ao professor trabalho feito em aula.', 'Saúde', 3),
(2, 'Língua estrangeira-Ingles', '2022-05-31', 54, 'Aprender uma língua estrangeira, em pouco tempo para vos ajudar no futuro', 'Educação', 5),
(3, 'Historia da pátria', '2022-05-31', 1200, 'Deixa de ser inculto a cerca da historia da tua pátria, vem ser um verdadeiro lusitano ', 'Educação', 4),
(4, 'Gestão de Cobranças', '2022-05-30', 120, 'A formação de Gestão de Cobranças tem como objetivo formar profissionais capazes de aumentar a eficácia na gestão dos processos de cobranças, de forma a recuperar créditos e atrasos de pagamento dos/as clientes.', 'Gestão', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_formacoes`
--

DROP TABLE IF EXISTS `imagens_formacoes`;
CREATE TABLE IF NOT EXISTS `imagens_formacoes` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `caminho` varchar(255) NOT NULL,
  `fk_id_formacao` int(11) NOT NULL,
  PRIMARY KEY (`id_imagem`),
  KEY `fk_id_formacao` (`fk_id_formacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens_workshop`
--

DROP TABLE IF EXISTS `imagens_workshop`;
CREATE TABLE IF NOT EXISTS `imagens_workshop` (
  `id_imagem` int(11) NOT NULL AUTO_INCREMENT,
  `caminho` varchar(255) NOT NULL,
  `fk_id_workshop` int(11) NOT NULL,
  PRIMARY KEY (`id_imagem`),
  KEY `fk_id_workshop` (`fk_id_workshop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

DROP TABLE IF EXISTS `inscricao`;
CREATE TABLE IF NOT EXISTS `inscricao` (
  `id_inscricao` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_formacao` int(11) NOT NULL,
  `fk_id_utilizador` int(11) NOT NULL,
  `data_inscricao` date NOT NULL,
  PRIMARY KEY (`id_inscricao`),
  KEY `fk_id_formacao` (`fk_id_formacao`),
  KEY `fk_id_utilizador` (`fk_id_utilizador`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id_inscricao`, `fk_id_formacao`, `fk_id_utilizador`, `data_inscricao`) VALUES
(1, 1, 3, '2022-05-28'),
(2, 1, 4, '2022-05-30'),
(3, 1, 5, '2022-05-30'),
(4, 2, 3, '2022-06-01');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `lista_formacoes`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `lista_formacoes`;
CREATE TABLE IF NOT EXISTS `lista_formacoes` (
`categoria` enum('Saúde','Imformática','Gestão','Educação','Turísmo')
,`caminho` varchar(255)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `lista_inscritos`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `lista_inscritos`;
CREATE TABLE IF NOT EXISTS `lista_inscritos` (
`nome` varchar(100)
,`primeiro_nome` varchar(60)
,`apelido` varchar(60)
,`email` varchar(100)
,`id_utilizador` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `list_prof`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `list_prof`;
CREATE TABLE IF NOT EXISTS `list_prof` (
`nome` varchar(100)
,`categoria` enum('Saúde','Imformática','Gestão','Educação','Turísmo')
,`Nome do professor` varchar(200)
,`area_formacao` text
,`habilitacao` enum('Licenciatura','Mestrado','Doutoramento')
,`email` varchar(100)
,`formacao` int(11)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `id_professor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `genero` enum('Masculino','Feminino','Indefenido') NOT NULL,
  `habilitacao` enum('Licenciatura','Mestrado','Doutoramento') NOT NULL,
  `morada` tinytext,
  `area_formacao` text,
  `telefone` char(9) DEFAULT NULL,
  PRIMARY KEY (`id_professor`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `telefone` (`telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome`, `data_nasc`, `email`, `genero`, `habilitacao`, `morada`, `area_formacao`, `telefone`) VALUES
(1, 'Yara', '1996-01-06', 'yara@gmail.com', 'Feminino', 'Mestrado', '', 'turismo', '919578946'),
(2, 'Joseph Luís Marques\r\n', '1980-02-05', 'Joseph.Marques@sapo.pt', 'Indefenido', 'Doutoramento', 'Liége ,Rua Joseph Vrindts 620', 'Informática', ''),
(3, 'Rui Pedro Runa Costa', '2001-12-13', 'ruirunacosta@gmail.com', 'Masculino', 'Doutoramento', 'Rua Joaquim Torrado nº6', 'Educação Sexual', '919106676'),
(4, 'Alfredo Soares Conceição', '1969-04-15', 'soarescenceiçao56@gmail.com', 'Masculino', 'Mestrado', 'Lisboa,mosteiro da batalha', 'Educação, Historia da nossa nação portuguesa, aprender como os moros expulsarão os marroquinos do nosso povo.\r\n', '390457864'),
(5, 'Josh Joshua Smith Williams', '1975-12-25', 'brithish420@hotmail.com', 'Masculino', 'Licenciatura', 'Live right next to the queen Elizabeth the III', 'Informática', '112445778');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `quant_inscritos`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `quant_inscritos`;
CREATE TABLE IF NOT EXISTS `quant_inscritos` (
`Quantidade Inscrições` bigint(21)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(60) NOT NULL,
  `apelido` varchar(60) NOT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` char(9) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `genero` enum('Masculino','Feminino','Indefenido') DEFAULT NULL,
  `perfil` enum('formando','admin') DEFAULT 'formando',
  PRIMARY KEY (`id_utilizador`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `primeiro_nome`, `apelido`, `data_nasc`, `telefone`, `email`, `pass`, `genero`, `perfil`) VALUES
(2, 'Alexandre', 'Silva', '2002-02-12', '', 'alexandreosilva@outlook.pt', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Masculino', 'admin'),
(3, 'Rui', 'Costa', '2002-02-12', '912345678', 'ruirunacosta@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Masculino', 'admin'),
(4, 'Jhonny', 'Sins', '1978-12-31', '919578945', 'jhonny.bigsins@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Masculino', 'formando'),
(5, 'Lana', 'Rhoades', '1996-09-06', '919578946', 'Lana.Rhoades@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Feminino', 'formando'),
(6, 'Lee', 'Faker', '1996-05-07', '123456789', 'demonking@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Masculino', 'formando'),
(7, 'Abda', 'Ghail', '1976-01-31', '919578948', 'Abda.bigsins@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Feminino', 'formando'),
(8, 'Rua Miguel Torga', 'Escola', '2021-05-04', '912321456', 'INFOhelp@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Indefenido', 'formando'),
(10, 'ruben', 'reis', '2000-08-09', '916459879', 'ruben.reis@gmail.pt', '$2y$10$h4AA8FJqUC5.RxxCvXsgPes3hHrHFcgxClOTGhpypmv0IBac5A6Da', NULL, 'formando'),
(18, 'joao', 'peres', NULL, NULL, 'ola@gmail.com', '$2y$10$1ZOK33I7aLdR.Tzu/iemjuMPVQGKeS.GCNndaVsnPPrjDQRaNyFJG', NULL, 'formando'),
(19, 'alexandre', 'silva', NULL, NULL, 'alexandreilva@outlook.pt', '$2y$10$VKwz20XHlNAYNSAeU8jfV.D.V8kMR3l1mki0QzaH/fY/zUaKugZOG', NULL, 'formando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `workshop`
--

DROP TABLE IF EXISTS `workshop`;
CREATE TABLE IF NOT EXISTS `workshop` (
  `id_workshop` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `data_work` date NOT NULL,
  `fk_id_professor` int(11) NOT NULL,
  PRIMARY KEY (`id_workshop`),
  KEY `fk_id_professor` (`fk_id_professor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para vista `lista_formacoes`
--
DROP TABLE IF EXISTS `lista_formacoes`;

DROP VIEW IF EXISTS `lista_formacoes`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista_formacoes`  AS  select `f`.`categoria` AS `categoria`,`imf`.`caminho` AS `caminho` from (`formacao` `f` join `imagens_formacoes` `imf` on((`f`.`id_formacao` = `imf`.`fk_id_formacao`))) ;

-- --------------------------------------------------------

--
-- Estrutura para vista `lista_inscritos`
--
DROP TABLE IF EXISTS `lista_inscritos`;

DROP VIEW IF EXISTS `lista_inscritos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista_inscritos`  AS  select `f`.`nome` AS `nome`,`u`.`primeiro_nome` AS `primeiro_nome`,`u`.`apelido` AS `apelido`,`u`.`email` AS `email`,`u`.`id_utilizador` AS `id_utilizador` from ((`formacao` `f` join `inscricao` `i` on((`f`.`id_formacao` = `i`.`fk_id_formacao`))) join `utilizador` `u` on((`u`.`id_utilizador` = `i`.`fk_id_utilizador`))) ;

-- --------------------------------------------------------

--
-- Estrutura para vista `list_prof`
--
DROP TABLE IF EXISTS `list_prof`;

DROP VIEW IF EXISTS `list_prof`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_prof`  AS  select `f`.`nome` AS `nome`,`f`.`categoria` AS `categoria`,`p`.`nome` AS `Nome do professor`,`p`.`area_formacao` AS `area_formacao`,`p`.`habilitacao` AS `habilitacao`,`p`.`email` AS `email`,`f`.`id_formacao` AS `formacao` from (`formacao` `f` join `professor` `p` on((`f`.`fk_id_professor` = `p`.`id_professor`))) ;

-- --------------------------------------------------------

--
-- Estrutura para vista `quant_inscritos`
--
DROP TABLE IF EXISTS `quant_inscritos`;

DROP VIEW IF EXISTS `quant_inscritos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `quant_inscritos`  AS  select count(0) AS `Quantidade Inscrições` from `inscricao` ;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `formacao`
--
ALTER TABLE `formacao`
  ADD CONSTRAINT `formacao_ibfk_1` FOREIGN KEY (`fk_id_professor`) REFERENCES `professor` (`id_professor`);

--
-- Limitadores para a tabela `imagens_formacoes`
--
ALTER TABLE `imagens_formacoes`
  ADD CONSTRAINT `imagens_formacoes_ibfk_1` FOREIGN KEY (`fk_id_formacao`) REFERENCES `formacao` (`id_formacao`);

--
-- Limitadores para a tabela `imagens_workshop`
--
ALTER TABLE `imagens_workshop`
  ADD CONSTRAINT `imagens_workshop_ibfk_1` FOREIGN KEY (`fk_id_workshop`) REFERENCES `workshop` (`id_workshop`);

--
-- Limitadores para a tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD CONSTRAINT `inscricao_ibfk_1` FOREIGN KEY (`fk_id_formacao`) REFERENCES `formacao` (`id_formacao`),
  ADD CONSTRAINT `inscricao_ibfk_2` FOREIGN KEY (`fk_id_utilizador`) REFERENCES `utilizador` (`id_utilizador`);

--
-- Limitadores para a tabela `workshop`
--
ALTER TABLE `workshop`
  ADD CONSTRAINT `workshop_ibfk_1` FOREIGN KEY (`fk_id_professor`) REFERENCES `professor` (`id_professor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
