# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 34.121.169.225 (MySQL 5.5.5-10.3.16-MariaDB-1:10.3.16+maria~stretch-log)
# Base de Dados: evento
# Tempo de Geração: 2021-05-08 21:13:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_880E0D76E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;

INSERT INTO `admin` (`id`, `email`, `roles`, `password`)
VALUES
	(1,'alex@22vb.com.br',X'5B5D','$argon2i$v=19$m=1024,t=2,p=2$Ung3VUM1Rkt1MkFkb1hHOA$tPeC94VBtjydgYthrylT6br8VLavN2IVN2u8GWh/2cI');

/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela cliente
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dados_profissionais_id` int(11) DEFAULT NULL,
  `dados_medicos_id` int(11) DEFAULT NULL,
  `dados_veiculo_id` int(11) DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apelido` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `rg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnh` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_residencial` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone_celular` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F41C9B25E7927C74` (`email`),
  UNIQUE KEY `UNIQ_F41C9B25F30F3BD8` (`dados_profissionais_id`),
  UNIQUE KEY `UNIQ_F41C9B25F3840385` (`dados_medicos_id`),
  UNIQUE KEY `UNIQ_F41C9B259B5F4074` (`dados_veiculo_id`),
  CONSTRAINT `FK_F41C9B259B5F4074` FOREIGN KEY (`dados_veiculo_id`) REFERENCES `dados_veiculo` (`id`),
  CONSTRAINT `FK_F41C9B25F30F3BD8` FOREIGN KEY (`dados_profissionais_id`) REFERENCES `dados_profissionais` (`id`),
  CONSTRAINT `FK_F41C9B25F3840385` FOREIGN KEY (`dados_medicos_id`) REFERENCES `dados_medicos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;

INSERT INTO `cliente` (`id`, `dados_profissionais_id`, `dados_medicos_id`, `dados_veiculo_id`, `email`, `roles`, `password`, `nome`, `sobrenome`, `apelido`, `data_nascimento`, `rg`, `cpf`, `cnh`, `sexo`, `telefone_residencial`, `telefone_celular`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `estado`)
VALUES
	(1,1,1,1,'renato@4x4aventura.com.br',X'5B5D','$argon2i$v=19$m=1024,t=2,p=2$SUhoWktxSzlKS205WnZJRw$pXTlkWvRbY4oj6Wldj/tJuFzoNV/ut/hClUxTPHISCs','Renato','Rudge Perotti','Renatão','1969-08-08','14.138.253','072.430.718-48','454545454','1','(45) 4545 454','(11) 99110-0994','jhg','5','S/C','jhg','515','Guararema','São Paulo'),
	(2,2,2,2,'alex@alexjmarques.com.br',X'5B5D','$2y$13$xDWqnh7JQgadoPAKK52B3.V2R7ufddsbldNoVWAUYHU6B9qeWETyi','Alex Junior','Marques','Alex','1990-07-30','37.498.991-6','385.181.678-17','36652417234','1','(11) 2985-4332','(11) 98030-9212','Rua Desembargador Alves de Castro','135','Casa 01','Vila Agua Funda','04157-100','São Paulo','SP'),
	(3,3,3,3,'valterjrdev@gmail.com',X'5B5D','$2y$13$ERN9.1xaIlkR7vqJRc7QTejKEjAUg4UjXIhGt5eRVuvPTXFEWQn.m','Valter','Carneiro da Silva','SAdasddsadsa','1903-04-05','33.333.333-3','095.887.114-01','22222222222','1','(88) 8888-8888','(88) 88888-8888','asdasdasdads','135','asdsad','asdsda','55555-555','asdasdads','RO'),
	(5,5,4,4,'dcifu@uol.com.br',X'5B5D','$2y$13$6f4L073beUUEHZhNEXIZAO9Lc1Hu4MNTg2k9YUy0JgFshcLvoL3se','Daniel','Cifu','Cifu','1975-01-09','16.226.649','145.353.378-88','02153577248','1','(11) 9896-5613','(11) 98965-6131','Rua Franca Pinto','280','Apto 112','Vila Mariana','04016-001','Sao Paulo','SP'),
	(6,6,NULL,NULL,'Rafael_wermelinger@hotmail.com',X'5B5D','$2y$13$t9sCPQ5Er.DGUAA4baWZFu7l9i5cbVCVGJBxCmqbbl3j7KW.meaIO','Rafael','Wermelinger','S/C','1981-11-10','12.915.609-7','056.001.797-90','01130041255','1','(22) 2764-1383','(22) 99914-9120','Rua das casuarinas','156','S/C','Praia âncora','28899-430','Rio das ostras','RJ');

/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela contato
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contato`;

CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dados_medicos_id` int(11) NOT NULL,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_parentesco` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C384AB42F3840385` (`dados_medicos_id`),
  CONSTRAINT `FK_C384AB42F3840385` FOREIGN KEY (`dados_medicos_id`) REFERENCES `dados_medicos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump da tabela dados_medicos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dados_medicos`;

CREATE TABLE `dados_medicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_sanguineo` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `possui_alergia` tinyint(1) NOT NULL,
  `possui_doenca` tinyint(1) NOT NULL,
  `toma_medicamento` tinyint(1) NOT NULL,
  `nome_plano_saude` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone_plano_saude` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `dados_medicos` WRITE;
/*!40000 ALTER TABLE `dados_medicos` DISABLE KEYS */;

INSERT INTO `dados_medicos` (`id`, `tipo_sanguineo`, `possui_alergia`, `possui_doenca`, `toma_medicamento`, `nome_plano_saude`, `telefone_plano_saude`)
VALUES
	(1,'a+',1,1,1,'nada','(11) 1122-2211'),
	(2,'a+',1,1,1,'Amil','(11) 1122-2211'),
	(3,'a+',1,1,1,'asdas','(88) 8888-8888'),
	(4,'a-',1,1,1,'Bradesco','(11) 3940-1606');

/*!40000 ALTER TABLE `dados_medicos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela dados_profissionais
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dados_profissionais`;

CREATE TABLE `dados_profissionais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ramo_de_atividade` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funcao` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `dados_profissionais` WRITE;
/*!40000 ALTER TABLE `dados_profissionais` DISABLE KEYS */;

INSERT INTO `dados_profissionais` (`id`, `empresa`, `ramo_de_atividade`, `funcao`, `email`, `telefone`)
VALUES
	(1,NULL,NULL,'diretor','renato@4x4aventura.com.br',NULL),
	(2,'22 VB','Tecnologia','CTO','alex@22vb.com.br','(11) 2985-9212'),
	(3,'Teste','Teste','Teste','valterjrdev@gmail.com','(88) 8888-8888'),
	(5,'KPMG','Consultoria','Socio','dcifu@kpmg.com.br','(11) 3940-1606'),
	(6,'Odontomed','Odontológico','Proprietário','Osontomed01@hotmail.com','(22) 2760-4655');

/*!40000 ALTER TABLE `dados_profissionais` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela dados_veiculo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dados_veiculo`;

CREATE TABLE `dados_veiculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano_fabricacao` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `dados_veiculo` WRITE;
/*!40000 ALTER TABLE `dados_veiculo` DISABLE KEYS */;

INSERT INTO `dados_veiculo` (`id`, `ano_fabricacao`, `marca`, `modelo`, `placa`)
VALUES
	(1,'13','mitsubishi','triton','ogv3495'),
	(2,'2011','Jac','J3','eur 1262'),
	(3,'3333','sadasd','asdasd','asdasdasd'),
	(4,'2012','Mitsubishi','Pajero Dakar','FAO1177');

/*!40000 ALTER TABLE `dados_veiculo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela evento
# ------------------------------------------------------------

DROP TABLE IF EXISTS `evento`;

CREATE TABLE `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `local_partida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_chegada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_longa` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao_curta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vagas` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `evento` WRITE;
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;

INSERT INTO `evento` (`id`, `titulo`, `data`, `local_partida`, `local_chegada`, `pais`, `descricao_longa`, `descricao_curta`, `valor`, `slug`, `imagem`, `vagas`)
VALUES
	(1,'Caminhos do Dakar','2019-09-07','Foz do Iguaçu','Foz do Iguaçu','Brasil','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>A Expedi&ccedil;&atilde;o Caminhos do Dakar 2019 ir&aacute; explorar as mais belas e in&oacute;spitas paisagens da Cordilheira dos Andes onde o Rally Dakar j&aacute; passou por 10 anos seguidos. Iremos passar por paisagens estonteantes de tanta beleza em regi&otilde;es absolutamente intocadas! Voc&ecirc; pode ir com a sua pick-up VW Amarok ou com um ve&iacute;culos 4&times;4 de qualquer marca.</p>\r\n<p>Ser&atilde;o 13 dias e 12 noites atravessando a Argentina, curtindo as melhores op&ccedil;&otilde;es gastron&ocirc;micas, fazendo novos amigos e se hospedando nos melhores hot&eacute;is de cada cidade.</p>\r\n<p>&nbsp;</p>\r\n</body>\r\n</html>','A Expedição Caminhos do Dakar 2019 irá explorar as mais belas e inóspitas paisagens da Cordilheira dos Andes onde o Rally Dakar...',6500,'caminhos-do-dakar','evento-5d2e2e5258e8f.jpeg','0'),
	(2,'SERTÕES - CONFUSÕES','2019-09-22','Fortaleza CE','Brasília DF','Brasil','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>O roteiro CONFUS&Otilde;ES &eacute; o ideal para voc&ecirc; que quer conhecer as mais lindas trilhas do rally dos SERT&Otilde;ES. Passando pela Serra da Capivara, destino de arque&oacute;logos internacionais, vamos atravessar os c&acirc;nions da Serra das Confus&otilde;es, e depois desfrutar das trilhas de areias da Bahia e rios cristalinos de Goi&aacute;s. Al&eacute;m disto os hot&eacute;is e a culin&aacute;ria v&atilde;o te surpreender a cada dia, mostrando o verdadeiro jeito de disfrutar o sert&atilde;o brasileiro.</p>\r\n<h4><strong>Hot&eacute;is cadastrados na rota: </strong></h4>\r\n<p>Fortaleza: <a href=\"https://www.marinapark.com.br/pt-br\">https://www.marinapark.com.br/pt-br </a></p>\r\n<p>S&atilde;o Raimundo Nonato: <a href=\"http://ceramicacapivara.com/\">http://ceramicacapivara.com/ </a></p>\r\n<p>Bom Jesus: <a href=\"http://www.gurgueiaparkhotel.com.br/\">http://www.gurgueiaparkhotel.com.br/ </a></p>\r\n<p>Luis Eduardo Magalh&atilde;es: <a href=\"https://www.hotelsaintlouis.com.br/\">https://www.hotelsaintlouis.com.br/ </a></p>\r\n<p>Brasilia: <a href=\"https://www.google.com/travel/hotels/Bras%C3%ADlia/entity/CgsInueipJfY8NDQARAB?g2lb=4207876%2C4208993%2C4223281%2C4242898%2C4253230%2C4253564%2C4254308%2C4258167%2C4260036%2C4260580%2C4250437%2C4253015&amp;hl=pt-BR&amp;gl=br&amp;un=0&amp;q=mercure%20brasilia&amp;rp=OAJAAUgD&amp;ictx=1&amp;ved=2ahUKEwi19saW647iAhXyEbkGHa5qCZkQvS4wAXoECAoQJw&amp;hrf=CgUI3gIQACIDQlJMKhYKBwjjDxAFGB4SBwjjDxAFGB8YASgAkgECIAE&amp;tcfs=EhoaGAoKMjAxOS0wNS0zMBIKMjAxOS0wNS0zMVIA\">https://www.goo.com/trtts</a></p>\r\n<p>Obs: os hot&eacute;is s&atilde;o refer&ecirc;ncias e ser&atilde;o fechados junto da confirma&ccedil;&atilde;o da expedi&ccedil;&atilde;o. Incluso: 06 noites de hotel 06 caf&eacute;s da manh&atilde; 06 Jantares, n&atilde;o inclui bebidas camiseta alusiva ao evento apoio da organiza&ccedil;&atilde;o durante todo o trajeto Guia tur&iacute;stico com conhecimento da regi&atilde;o Aluguel de ve&iacute;culo 4x4 pelo per&iacute;odo da expedi&ccedil;&atilde;o, exclusivo para o trajeto N&atilde;o incluso no pacote: Passagem a&eacute;rea de ida ou retorno da expedi&ccedil;&atilde;o Combust&iacute;vel durante o trajeto Balsas, ped&aacute;gios e taxas de entrada em atrativos tur&iacute;sticos Snacks, ou qualquer alimenta&ccedil;&atilde;o e bebida durante o dia</p>\r\n</body>\r\n</html>','Expedição para veículos 4x4 como meio de transporte. Nesta expedição os carros 4x4 são disponibilizadas pela organização, com todo equipamento necessário para a viagem...',6500,'sertoes-confusoes','evento-5d2e2e5cea4be.jpeg','0'),
	(3,'SERTÕES - EMOÇÕES','2019-09-08','Fortaleza CE','São Luis MA','Brasil','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>O roteiro EMO&Ccedil;&Otilde;ES &eacute; o ideal para voc&ecirc; que quer disfrutar as aventuras da Rota das Emo&ccedil;&otilde;es com a pitada do Rally dos SERT&Otilde;ES, que passou por alguns lugares desta que &eacute; a principal rota de turismo de aventura do nordeste. <br />Dirigir pelas dunas, onde pilotos aceleraram muito, desfrutar o visual do por do sol na praia, e andar pela magia dos Len&ccedil;ois Maranhenses &eacute; uma experi&ecirc;ncia inigual&aacute;vel e vai fazer de voc&ecirc; um verdadeiro aventureiro. <br />Al&eacute;m disto os hot&eacute;is e a culin&aacute;ria v&atilde;o te surpreender a cada dia, mostrando o verdadeiro jeito de disfrutar o nordeste brasileiro.</p>\r\n<h4><strong>Hot&eacute;is cadastrados no rota: </strong></h4>\r\n<p>S&atilde;o Luis: <a href=\"https://www.bluetree.com.br/hotel/blue-tree-towers-sao-luis/\">https://www.bluetree.com.br/hotel/blue-tree-towers-sao-luis/ </a></p>\r\n<p>Barreirinhas: <a href=\"https://www.portopreguicas.com.br/\">https://www.portopreguicas.com.br/ </a></p>\r\n<p>Parnaiba: <a href=\"https://www.casadesantoantonio.com.br/pt\">https://www.casadesantoantonio.com.br/pt </a></p>\r\n<p>Jeiricoacoara: <a href=\"https://www.mybluehotel.com.br/\">https://www.mybluehotel.com.br/ </a></p>\r\n<p>Fortaleza: <a href=\"https://www.marinapark.com.br/pt-br\">https://www.marinapark.com.br/pt-br </a></p>\r\n<p>Obs: os hot&eacute;is s&atilde;o refer&ecirc;ncias e ser&atilde;o fechados junto da confirma&ccedil;&atilde;o da expedi&ccedil;&atilde;o. Incluso: 06 noites de hotel 06 caf&eacute;s da manh&atilde; 06 Jantares, n&atilde;o inclui bebidas camiseta alusiva ao evento apoio da organiza&ccedil;&atilde;o durante todo o trajeto Guia tur&iacute;stico com conhecimento da regi&atilde;o Aluguel de ve&iacute;culo 4x4 pelo per&iacute;odo da expedi&ccedil;&atilde;o, exclusivo para o trajeto N&atilde;o incluso no pacote: Passagem a&eacute;rea de ida ou retorno da expedi&ccedil;&atilde;o Combust&iacute;vel durante o trajeto Balsas, ped&aacute;gios e taxas de entrada em atrativos tur&iacute;sticos Snacks, ou qualquer alimenta&ccedil;&atilde;o e bebida durante o dia</p>\r\n</body>\r\n</html>','<p>Expedi&ccedil;&atilde;o para ve&iacute;culos 4x4 como meio de transporte. Nesta expedi&ccedil;&atilde;o os carros 4x4 s&atilde;o disponibilizados pela organiza&ccedil;&atilde;o, com todo equipamento necess&aacute;rio para a viagem</p>',6500,'sertoes-emocoes','evento-5d2e2e6b8b818.jpeg','0'),
	(4,'SERTÕES TRACK','2019-09-07','Fortaleza - CE','Catalão - GO','Brasil','<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<h5>1&ordf; edi&ccedil;&atilde;o do SERT&Otilde;ES TRACK</h5>\r\n<div>&Eacute; uma aventura onde cada participante recebe um &ldquo;track&rdquo; (uma rota), que a partir de um APP, ele reconhece o caminho e se aventura atrav&eacute;s dele.</div>\r\n<div>&nbsp;</div>\r\n<div>Os participantes podem sair&nbsp; pequenos grupos de carros ou com a organiza&ccedil;&atilde;o, como preferirem, pois o objetivo &eacute; todos cumprirem os caminhos desta aventura, que passa pelos maiores desafios dos pilotos de rally.</div>\r\n<div>&nbsp;</div>\r\n<div>A organiza&ccedil;&atilde;o estar&aacute; na rota com carros de apoio para orientar todos sobre condu&ccedil;&atilde;o e/ou d&uacute;vidas.</div>\r\n<div>&nbsp;</div>\r\n<div>&Eacute; organizado um per&iacute;odo de tempo de uma horas para que os carros passem no posto de controle de in&iacute;cio, os pontos de checagem podem ser com a organiza&ccedil;&atilde;o ou virtual, com check point atrav&eacute;s de mensagens.</div>\r\n<div>&nbsp;</div>\r\n<div>Todos que cumprirem a rota durante todos os dias ser&atilde;o considerados vencedores.A &uacute;nica regra &eacute; se aventurar e se divertir.</div>\r\n<p>&nbsp;</p>\r\n<h4><strong>N&atilde;o &eacute; uma corrida...</strong><br /><strong>N&atilde;o tem rivalidade...</strong><br /><strong>&Eacute; um desafio, uma aventura, com parceria e amizade!</strong></h4>\r\n<p>&nbsp;</p>\r\n<p>3.500km de AVENTURA Saindo de Fortaleza passando por 5 estados brasileiros -3 parques nacionais at&eacute; Catal&atilde;o com mais de 1.000km offroadde desafio.</p>\r\n<p><strong>Dia 07 de setembro</strong> &ndash; Etapa 1 &ndash; Fortaleza / Tau&aacute; - 430km&nbsp; - Dunas e 60km de offrad</p>\r\n<p><strong>Dia 08 de setembro</strong> - Etapa 2 &ndash; Tau&aacute; / S&atilde;o Raimundo Nonato - 480km -&nbsp; Serra da Capivara &ndash; off roadt&eacute;cnico</p>\r\n<p><strong>Dia 09 de setembro</strong> - Etapa 3 &ndash;S&atilde;o Raimundo Nonato &ndash; Bom Jesus - 310 km - 180 off road</p>\r\n<p><strong>Dia 10 de setembro</strong> - Etapa 4 &ndash;Bom Jesus &ndash; S&atilde;o Felix do Tocantins - 390 km - 210 off road</p>\r\n<p><strong>Dia 11 de setembro</strong> - Etapa 5 &ndash;S&atilde;o Felix T - Dian&oacute;polis - 448 km - 320 off road</p>\r\n<p><strong>Dia 12 de setembro</strong> &ndash; Etapa 6 &ndash; Dian&oacute;polis - Posse - 308 km - 115 off road</p>\r\n<p><strong>Dia 13 de setemebro</strong> &ndash; Etapa 7 &ndash;Posse - Catal&atilde;o - 630 km - 140 off road</p>\r\n<p><strong>Dia 14 de setemebro</strong> &ndash; Etapa 8 &ndash; Catal&atilde;o Mitsubishi Brasil</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Inclui:</strong> Comodato dos carros oficiais do Sert&otilde;es / Rotas da aventura / Apoio log&iacute;stico / Local de acampamento</p>\r\n<p><strong>N&Atilde;O inclui:</strong> Hospedagem / Alimenta&ccedil;&atilde;o / Combust&iacute;vel / Ped&aacute;gios / Entradas em Parques</p>\r\n<p>As regras sobre condu&ccedil;&atilde;o dos ve&iacute;culos, responsabilidades e velocidades m&aacute;ximas permitidas em cada trecho ser&atilde;o r&iacute;gidas, e com penaliza&ccedil;&atilde;o de advert&ecirc;ncia, multas financeiras e expuls&atilde;o do grupo, com retirada do ve&iacute;culo do participante. N&Atilde;O &Eacute; CORRIDA &Eacute; AVENTURA!</p>\r\n<h5>&nbsp;</h5>\r\n<h5><strong>REGULAMENTO</strong></h5>\r\n<ul>\r\n<li>S&oacute; poder&atilde;o se inscrever carros 4x4 (altos).</li>\r\n<li>O motorista deve estar habilitado.</li>\r\n<li>O respons&aacute;vel pelo carro dever&aacute; assinar o termo de seguro do carro e da aventura.</li>\r\n<li>Outro participante s&oacute; poder&aacute; assumir o carro se estiver inscrito como motorista adicional.</li>\r\n<li>Todas as infra&ccedil;&otilde;es de tr&acirc;nsito e/ou problemas com o ve&iacute;culo ser&atilde;o de inteira responsabilidade do motorista e do respons&aacute;vel pelo carro.</li>\r\n<li>O participante dever&aacute; cumprir os hor&aacute;rios de sa&iacute;da todos os dias do evento.</li>\r\n<li>Os participantes devem cumprir rigorosamente o trajeto definido pela organiza&ccedil;&atilde;o.</li>\r\n<li>O participante nunca poder&aacute; estar na frente do ve&iacute;culo de abertura do dia, e nem depois da equipe de fechamento de trilha.</li>\r\n<li>Os participantes devem seguir rigorosamente o limite de velocidade m&aacute;xima em cada trecho da aventura.&nbsp;</li>\r\n<li>O participante dever&aacute; abastecer o ve&iacute;culo nos postos indicados e com o combust&iacute;vel orientado pela organiza&ccedil;&atilde;o.</li>\r\n<li>Os participantes dever&atilde;o fazer todos os controles de passagem, confirmando o trecho.</li>\r\n<li>Os participantes que descumprirem o regulamento, e/ou se colocarem em risco outras pessoas ou a si mesmo, poder&atilde;o ser desclassificados do evento e, se for o caso de aluguel, terem o carro tomado pela organiza&ccedil;&atilde;o da prova, sem direito a indeniza&ccedil;&otilde;es, mesmo que necessitem contratar outra condu&ccedil;&atilde;o para seguir viagem.</li>\r\n<li>Todos os participantes que participarem do evento completo receber&atilde;o a medalha do SERT&Otilde;ES Track 2019.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h5>ACAMPAMENTOS:</h5>\r\n<p>A organiza&ccedil;&atilde;o vai disponibilizar locais de acampamentos, como faz durante o rallydos SERT&Otilde;ES, para que a aventura esteja o mais pr&oacute;ximo poss&iacute;vel da experi&ecirc;ncia do rally.</p>\r\n<p>Os participantes que queiram seguir do acampamento at&eacute; hot&eacute;is, pousadas e/ou casas poder&atilde;o seguir depois do fechamento do dia, mas dever&atilde;o partir no pr&oacute;ximo dia rigorosamente do ponto de partida do evento.</p>\r\n<p>A organiza&ccedil;&atilde;o indicar&aacute; op&ccedil;&otilde;es de hot&eacute;is e pousadas pr&oacute;ximo aos acampamentos.</p>\r\n<p>&nbsp;</p>\r\n<h5>RIGOROSO</h5>\r\n<p>Velocidades m&aacute;ximas ser&atilde;o controladas 24 horas por dia! N&atilde;o &eacute; uma corrida &eacute; um desafio!</p>\r\n<p>&nbsp;</p>\r\n<h5>ROTEIRO ILUSTRATIVO</h5>\r\n<div>&nbsp;</div>\r\n<div>As fotos podem estar diferentes do apresentado, por &acirc;ngulo fotogr&aacute;fico, condi&ccedil;&atilde;o clim&aacute;tica ou desvio do percurso.A organiza&ccedil;&atilde;o&nbsp; se reserva o direito de alterar o percurso a qualquer momento, por for&ccedil;a maior, altera&ccedil;&atilde;o de exig&ecirc;ncias governamentais, seguran&ccedil;a, ou mesmo para trazer novas experi&ecirc;ncias aos participantes.</div>\r\n</body>\r\n</html>','O SERTÕES, maior desafio das Américas para os pilotos\r\nde rally , agora é também o seu maior desafio. A 1ª edição do SERTÕES TRACK acontecerá em setembro\r\nde 2019...',6000,'sertoes-track','evento-5d313c99bc85a.jpeg','45');

/*!40000 ALTER TABLE `evento` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela migration_versions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migration_versions`;

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;

INSERT INTO `migration_versions` (`version`, `executed_at`)
VALUES
	('20190427184857','2019-05-09 03:23:22'),
	('20190427195221','2019-05-09 03:23:23'),
	('20190427200304','2019-05-09 03:23:23'),
	('20190427231241','2019-05-09 03:23:23'),
	('20190428171231','2019-05-09 03:23:23'),
	('20190428172142','2019-05-09 03:23:23'),
	('20190428175728','2019-05-09 03:23:23'),
	('20190501032334','2019-05-09 03:23:23'),
	('20190715130927','2019-07-17 16:20:57'),
	('20190715131713','2019-07-17 16:20:57'),
	('20190715131853','2019-07-17 16:20:57'),
	('20190717141031','2019-07-17 16:20:57'),
	('20190717160857','2019-07-17 16:20:57');

/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela usuario_evento
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuario_evento`;

CREATE TABLE `usuario_evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evento_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `data_pagamento` datetime DEFAULT NULL,
  `status_pagamento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_pagamento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objeto_pagamento` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BD94E80C87A5F842` (`evento_id`),
  KEY `IDX_BD94E80CDE734E51` (`cliente_id`),
  CONSTRAINT `FK_BD94E80C87A5F842` FOREIGN KEY (`evento_id`) REFERENCES `evento` (`id`),
  CONSTRAINT `FK_BD94E80CDE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
