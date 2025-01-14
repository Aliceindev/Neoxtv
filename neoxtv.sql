-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para neoxtv
CREATE DATABASE IF NOT EXISTS `neoxtv` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `neoxtv`;

-- Copiando estrutura para tabela neoxtv.cadastro
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_cod` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `idade` int DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cod`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela neoxtv.cadastro: ~3 rows (aproximadamente)
INSERT INTO `cadastro` (`id_cod`, `nome`, `idade`, `email`, `senha`) VALUES
	(18, 'Alice', 18, 'alice@gmail.com', '6384e2b2184bcbf58eccf10ca7a6563c'),
	(20, 'admin', 20, 'admin@admin.adm', '21232f297a57a5a743894a0e4a801fc3'),
	(21, 'Samuel', 12, 's@gmail.com', 'd8ae5776067290c4712fa454006c8ec6');

-- Copiando estrutura para tabela neoxtv.filmes
CREATE TABLE IF NOT EXISTS `filmes` (
  `id_filme` int NOT NULL AUTO_INCREMENT,
  `nome_f` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cla_etaria_f` int DEFAULT NULL,
  `descricao_f` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ano_public_f` year DEFAULT NULL,
  `capa_f` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `link_f` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `genero_f` varchar(50) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_filme`),
  UNIQUE KEY `link_f` (`link_f`) USING BTREE,
  UNIQUE KEY `nome_f` (`nome_f`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela neoxtv.filmes: ~15 rows (aproximadamente)
INSERT INTO `filmes` (`id_filme`, `nome_f`, `cla_etaria_f`, `descricao_f`, `ano_public_f`, `capa_f`, `link_f`, `genero_f`, `path`) VALUES
	(13, 'Terrifier 2', 18, 'Após ser ressuscitado por uma entidade sinistra, Art, o Palhaço, retorna ao Condado de Miles, onde irá à caça de uma adolescente e seu irmão mais novo na noite de Halloween.', '2022', 'terrifier2.jpg', 'https://youtu.be/6KkONLf_ZKU', 'Terror', '../img/terrifier2.jpg'),
	(14, 'Jack in the box awakening 2', 18, 'Quando uma mulher moribunda abre uma antiga caixa misteriosa, ela entra em um acordo com o demônio dentro dela que curaria sua doença em troca de ajudá-lo a reclamar seis vítimas inocentes.', '2022', 'jackBox_terror.jpg', 'https://youtu.be/3pIKzYXqmI4', 'Terror', '../img/jackBox_terror.jpg'),
	(16, 'A Avó', 18, 'O estilo de vida glamoroso de Susana, modelo de vinte e poucos anos, em Paris, muda quando sua amada avó sofre um derrame. Ao voltar para sua cidade natal, Madri, ela não sabe que está entrando em um pesadelo enquanto está acordada.', '2022', 'aAvo_terror.jpg', 'https://youtu.be/a45KLDB2RXk', 'Terror', '../img/aAvo_terror.jpg'),
	(17, 'O Telefone Preto', 18, 'Após ter sido raptado por um assassino de crianças e trancado numa cave à prova de som, Finney Shaw um menino de 13 anos começa a receber chamadas num telefone desligado das vítimas anteriores do assassino. E eles estão determinados a garantir que o que aconteceu com eles não aconteça com Finney.', '2022', 'telefonePreto_terror.jpg', 'https://www.youtube.com/embed/dCAbPQnFAU4', 'Terror', '../img/telefonePreto_terror.jpg'),
	(18, 'Exorcismo Sagrado', 18, 'Ao ser possuído durante um ritual de exorcismo, o padre Peter Williams acabou cometendo um terrível sacrilégio. Dezoito anos depois, as consequências de seu pecado voltam para assombrá-lo e acabam desencadeando uma batalha ainda maior entre o bem e o mal.', '2022', 'exorcismoSagrado_terror.jpg', 'https://youtu.be/my6TZRMLUzU', 'Terror', '../img/exorcismoSagrado_terror.jpg'),
	(19, 'Avatar: O Caminho da Água', 12, 'Após formar uma família, Jake Sully e Ney\'tiri fazem de tudo para ficarem juntos. No entanto, eles devem sair de casa e explorar as regiões de Pandora quando uma antiga ameaça ressurge, e Jake deve travar uma guerra difícil contra os humanos', '2022', 'avatar_acao.jpg', 'https://youtu.be/rLhhJQysKLk', 'Ação', '../img/avatar_acao.jpg'),
	(20, 'Círculo de Fogo', 12, 'Criaturas monstruosas conhecidas como Kaiju começam a emergir do mar. Para combatê-los, a humanidade desenvolve uma série de robôs gigantescos, os Jaegers. Cada um é controlado por duas pessoas por meio de uma conexão neural. Entretanto, mesmo os Jaegers se mostram insuficientes para derrotar os Kaiju. Diante deste cenário, a última esperança é um velho robô, que passa a ser comandado por um antigo piloto e uma pessoa em treinamento.', '2013', 'circuloDeFogo_acao.jpg', 'https://youtu.be/R7J3RJcxv58', 'Ação', '../img/circuloDeFogo_acao.jpg'),
	(21, 'A Guerra do Amanhã', 14, 'Em 2051, a humanidade está perdendo uma guerra global contra uma espécie mortal de alienígenas. Para garantir a sobrevivência dos humanos, soldados e civis do presente são transportados para o futuro e se juntam à luta, entre eles Dan Forester, um pai de família determinado a salvar o mundo para sua filha.', '2021', 'guerraDoAmanha_acao.jpg', 'https://youtu.be/iT5YPWGmh0k', 'Ação', '../img/guerraDoAmanha_acao.jpg'),
	(22, 'Jurassic World: Domínio ', 12, 'Quatro anos após a destruição da Ilha Nublar, os dinossauros agora vivem – e caçam – ao lado de humanos em todo o mundo. Esse frágil equilíbrio remodelará o futuro e determinará, de uma vez por todas, se os seres humanos continuarão sendo os principais predadores em um planeta que agora compartilham com as criaturas mais temíveis da história.', '2022', 'jurassicWorld_acao.jpg', 'https://youtu.be/kATdt-lCnU8', 'Ação', '../img/jurassicWorld_acao.jpg'),
	(23, 'O Projeto Adam', 12, 'Um viajante do tempo volta ao ano de 2022 por acidente e acaba se encontrando com seu eu mais novo. Juntos, e sendo caçados por forças do futuro, os dois embarcam em uma missão para consertar a linha temporal e salvar seus entes queridos.', '2022', 'projetoAdam_acao.jpg', 'https://youtu.be/miycJHABS1w', 'Ação', '../img/projetoAdam_acao.jpg'),
	(24, 'Moonfall: Ameaça Lunar', 14, 'Poucas semanas antes do impacto e com a humanidade à beira da aniquilação, a ex-astronauta da NASA Jo Fowler está convencida de que tem a resposta para salvar o planeta, mas apenas um colega do passado, o astronauta Brian Harper, e o teorista K.C. Houseman, acreditam nela. Os improváveis heróis correm contra o tempo para montar uma missão ao espaço, mas lá descobrem que a Lua não é o que parece.', '2022', 'moonfall_acao.jpg', 'https://youtu.be/l4sDvkgh9vI', 'Ação', '../img/moonfall_acao.jpg'),
	(25, 'Os Primeiros Passos de Groot', 12, 'Baby Groot finalmente está pronto para tentar dar seus primeiros passos fora de seu vaso, aprendendo que se deve andar antes de correr.', '2022', 'groot_ac.jpg', 'https://youtu.be/5kzT_wjfSPE', 'Ação', '../img/groot_ac.jpg'),
	(26, 'Sonic 2 ', 12, 'Depois de se estabelecer em Green Hills, Sonic está pronto para mais liberdade e deixar sua marca como um herói, e Tom e Maddie concordam em deixá-lo em casa enquanto vão de férias. Mas, assim que eles se foram, Dr. Robotnik volta, desta vez com um novo parceiro, Knuckles, em busca de uma esmeralda que tem o poder de construir e destruir civilizações. Sonic se une a um novo companheiro, Tails, e juntos eles embarcam em uma jornada para encontrar a esmeralda antes que ela caia nas mãos erradas.', '2022', 'sonic_ac.jpg', 'https://youtu.be/A2SjVRziC7M', 'Ação', '../img/sonic_ac.jpg'),
	(27, 'Red: Crescer é Uma Fera', 12, 'Mei, de treze anos, está experimentando a estranheza de ser uma adolescente com uma reviravolta – quando ela fica muito animada, ela se transforma em um panda vermelho gigante.', '2022', 'red_ac.jpg', 'https://youtu.be/V2Xlg8WOS-Q', 'Ação', '../img/red_ac.jpg'),
	(32, 'Halloween Ends', 18, 'Depois de seu último encontro com Michael Myers, Laurie Strode finalmente decide se libertar e abraçar a vida. No entanto, um assassinato local desencadeia uma onda de violência e terror, forçando-a a enfrentar o mal que ela não pode controlar.', '2022', 'halloweenEnds.jpg', 'https://youtu.be/gz1-ixdPGhM', 'Terror', '../img/halloweenEnds.jpg');

-- Copiando estrutura para tabela neoxtv.series
CREATE TABLE IF NOT EXISTS `series` (
  `id_serie` int NOT NULL AUTO_INCREMENT,
  `nome_s` varchar(50) DEFAULT NULL,
  `cla_etaria_s` int DEFAULT NULL,
  `descricao_s` varchar(1000) DEFAULT NULL,
  `ano_public_s` year DEFAULT NULL,
  `total_eps_s` int DEFAULT NULL,
  `total_temp_s` int DEFAULT NULL,
  `capa_s` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `link_s` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `genero_s` varchar(50) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_serie`),
  UNIQUE KEY `link_s` (`link_s`),
  UNIQUE KEY `nome_s` (`nome_s`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela neoxtv.series: ~15 rows (aproximadamente)
INSERT INTO `series` (`id_serie`, `nome_s`, `cla_etaria_s`, `descricao_s`, `ano_public_s`, `total_eps_s`, `total_temp_s`, `capa_s`, `link_s`, `genero_s`, `path`) VALUES
	(3, '1899', 16, 'Em um navio a vapor migrante rumo ao oeste para deixar o velho continente de Londres para Nova York, os passageiros, uma mistura de origens europeias, estão unidos por suas esperanças e sonhos para o novo século e seu futuro no exterior. Quando eles descobrem outro navio migrante à deriva em mar aberto, sua jornada toma um rumo inesperado. O que eles encontrarem a bordo transformará sua passagem para a terra prometida em um pesadelo horrível.', '2022', 8, 1, '1899_mi.jpg', 'https://youtu.be/hxGXPirkFGU', 'Mistério', '../img/1899_mi.jpg'),
	(4, 'Black Mirror', 16, 'Black Mirror é uma série de televisão britânica antológica, criada por Charlie Brooker e centrada em temas obscuros e satíricos que examinam a sociedade moderna, particularmente a respeito das consequências imprevistas das novas tecnologias.', '2011', 21, 5, 'blackMirror_mi.jpg', 'https://youtu.be/M8qG0vS2zWM', 'Mistério', '../img/blackMirror_mi.jpg'),
	(5, 'O Diabo em Ohio ', 16, 'Uma psiquiatra abriga uma jovem que está fugindo de um culto misterioso, sem nem perceber que esse gesto pode colocar a própria família em risco.', '2022', 8, 1, 'ohio_mi.jpg', 'https://youtu.be/sboFLmeD-9M', 'Mistério', '../img/ohio_mi.jpg'),
	(6, 'Sobrenatural', 16, 'Os irmãos Dean e Sam vasculham o país em busca de atividades paranormais, brigando com demônios, fantasmas e monstros no caminho.', '2005', 327, 15, 'sobrenatural_mi.jpg', 'https://youtu.be/31A0DqX6jHI', 'Mistério', '../img/sobrenatural_mi.jpg'),
	(7, 'Terra Incógnita', 16, 'Eric retorna à sua cidade de infância para resolver o misterioso desaparecimento de seus pais há oito anos. Ele foi criado pelos seus avós maternos junto com sua irmã, e foge para a "Tierra Incógnita", o parque de diversões de terror que pertencia aos seus pais e o último lugar onde eles foram vistos.', '2022', 8, 1, 'trIncognita_mi.jpg', 'https://youtu.be/u4TOQMFAl4M', 'Mistério', '../img/trIncognita_mi.jpg'),
	(8, 'O Domo ', 16, 'Uma pequena cidade americana é repentinamente isolada do restante do mundo por uma enorme e indestrutível cúpula transparente.', '2013', 39, 3, 'domo_mi.jpg', 'https://youtu.be/f_Y5YeYrqUk', 'Mistério', '../img/domo_mi.jpg'),
	(9, 'O Senhor dos Anéis: Os Anéis de Poder', 16, 'Tendo início em uma época de relativa paz, a série acompanha um grupo de personagens que enfrenta o ressurgimento do mal na Terra-média. Das profundezas escuras das Montanhas de Névoa, das majestosas florestas de Lindon, do belíssimo reino da ilha de Númenor, até os confins do mapa, esses reinos e personagens criarão legados que permanecerão vivos muito além de suas partidas.', '2022', 8, 1, 'senhorDosaneis_ac.jpg', 'https://youtu.be/m-CvfthZ4zg', 'Ficção científica', '../img/senhorDosaneis_ac.jpg'),
	(10, 'A Casa do Dragão', 16, '200 anos antes dos eventos de "Game of Thrones", os Targaryen estavam no ápice de seu poder, tendo inúmeros dragões sob seu comando, mas nem tudo dura para sempre. O início do fim da dinastia Targaryen.', '2022', 10, 1, 'gameof_ac.jpg', 'https://youtu.be/t3p4EPoo9ug', 'Ficção científica', '../img/gameof_ac.jpg'),
	(11, 'Game of Thrones', 16, 'Em uma terra onde os verões podem durar vários anos e o inverno toda uma vida, sete nobres famílias lutam pelo controle da mítica terra de Westeros, dividida depois de uma guerra. Num cenário que lembra a Europa medieval, reis, rainhas, cavaleiros e renegados usam todos os meios possíveis em um jogo político pela disputa do Trono de Ferro, o símbolo do poder absoluto.', '2011', 73, 8, 'gamethrones.jpg', 'https://youtu.be/KPLWWIOCOOQ', 'Ficção científica', '../img/gamethrones.jpg'),
	(12, 'Dark', 16, 'Quatro famílias iniciam uma desesperada busca por respostas quando uma criança desaparece e um complexo mistério envolvendo três gerações começa a se revelar.', '2017', 26, 3, 'dark_fc.jpg', 'https://youtu.be/JCCssUOtn2E', 'Ficção científica', '../img/dark_fc.jpg'),
	(13, 'Van Helsing', 16, 'Vanessa Van Helsing é ressuscitada depois de cinco anos morta e descobre que o mundo foi tomado por vampiros. Agora ela precisa lutar para manter vivo o legado de seu pai Abraham.', '2016', 65, 5, 'vanHelsing_fc.jpg', 'https://youtu.be/sRXdgOoY-wk', 'Ficção científica', '../img/vanHelsing_fc.jpg'),
	(14, 'Teen Wolf', 16, 'Após ser mordido por um animal, Scott vira lobisomem e é o cara adorado por todas na escola. Só que ele também ganha novos problemas.', '2011', 100, 6, 'teenWolf_fc.jpg', 'https://youtu.be/BmHM5eUp9w4', 'Ficção científica', '../img/teenWolf_fc.jpg'),
	(15, 'A Roda do Tempo ', 16, 'As vidas de cinco jovens camponeses mudam para sempre quando uma mulher estranha e poderosa chega dizendo que um deles é a criança de uma antiga profecia, com o poder de alterar o equilíbrio entre Luz e Trevas para sempre. Eles precisam decidir se confiam na desconhecida – e uns nos outros – para mudar o destino do mundo antes que o Tenebroso consiga se libertar de sua prisão.', '2021', 8, 1, 'rodaDoTempo_fc.jpg', 'https://youtu.be/Hbx4ljf4Bjs', 'Ficção científica', '../img/rodaDoTempo_fc.jpg'),
	(16, 'Ragnarok ', 16, 'Em uma cidade norueguesa envenenada pela poluição e abalada por geleiras derretendo, o fim dos tempos parece real. Só uma lenda poderá combater um mal antigo.', '2020', 12, 2, 'ragnarok_fc.jpg', 'https://youtu.be/i2qDt5D8RSs', 'Ficção científica', '../img/ragnarok_fc.jpg'),
	(17, 'Charmed: Nova Geração', 16, 'Após a morte trágica de sua mãe, três irmãs que estão na faculdade descobrem que são bruxas. Rapidamente o trio precisa se unir para lutar as batalhas cotidianas e sobrenatural que todas as bruxas precisam encarar: desde acabar com demônios poderosos, até derrubar o patriarcado.', '2018', 72, 4, 'chamed_fc.jpg', 'https://youtu.be/5sBNuKG_teY', 'Ficção científica', '../img/chamed_fc.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
