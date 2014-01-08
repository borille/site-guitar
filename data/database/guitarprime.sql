-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `guitarprime`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(50) NOT NULL,
  `adminFullName` varchar(200) NOT NULL,
  `adminPassword` varchar(32) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminFullName`, `adminPassword`) VALUES
(1, 'borille', 'Thiago Borille', '58e5c7b9fba0532e36e5cd4740e1f4c5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `authorId` int(11) NOT NULL AUTO_INCREMENT,
  `authorName` varchar(200) DEFAULT NULL,
  `authorDesc` varchar(5000) DEFAULT NULL,
  `authorImg` varchar(200) NOT NULL,
  `authorSite` varchar(200) NOT NULL,
  PRIMARY KEY (`authorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `author`
--

INSERT INTO `author` (`authorId`, `authorName`, `authorDesc`, `authorImg`, `authorSite`) VALUES
(1, 'André Hernandes', '<p>Nasceu em S&atilde;o Paulo, no dia 18 de novembro de 1970.<br />\r\nO contato e o interesse pela m&uacute;sica vieram cedo. Sua inf&acirc;ncia foi marcada pelas rodas de samba e choro organizadas por seu av&ocirc;, seu pai e seus tios; entre seus passatempos preferidos estava assistir aos ensaios da Orquestra Azul, banda de seus primos mais velhos que tocava cl&aacute;ssicos da Mahavishny Orchestra.&nbsp;<br />\r\nAos 9 anos, gastava toda a sua mesada comprando discos dos Beatles. Foi nessa &eacute;poca que veio o interesse em aprender a tocar um instrumento. Ganhou seu primeiro viol&atilde;o, presente de seu pai escolhido com a ajudo do seu tio Nardo (renomado violonista de sete cordas). Vieram as primeiras aulas de viol&atilde;o com uma professora do bairro...</p>\r\n\r\n<p>Mas foi aos 11 anos, assistindo ao &uacute;ltimo bloco do Som Pop (programa de v&iacute;deo clip da &eacute;poca) quando viu um especial do Van Halen ao vivo (Turn&ecirc; Fair Warning) que decidiu tocar guitarra. Passou a ouvir bandas de rock pesado, deixando um pouco de lado o viol&atilde;o choro/samba herdado de seus tios e av&ocirc;.<br />\r\nEnt&atilde;o aos 13 anos, ap&oacute;s ter trabalhado um ano em uma farm&aacute;cia fazendo entrega de rem&eacute;dios, conseguiu juntar dinheiro para comprar sua primeira guitarra: uma Giannini SG, um amplificador Giannini Bag (&ldquo;baguinho&rdquo;) e um pedal de distor&ccedil;&atilde;o sem marca!<br />\r\nNesta mesma &eacute;poca come&ccedil;ou a ter aulas de guitarra passando por v&aacute;rios professores, at&eacute; que um amigo indicou o professor Michel Perie que foi quem o ensinou os conceitos de harmonia, improvisa&ccedil;&atilde;o e t&eacute;cnica de forma did&aacute;tica e organizada. J&aacute; levava a s&eacute;rio os estudos de guitarra, passando v&aacute;rias horas por dia estudando e tentando tocar Van Halen e Randy Rhoads.</p>\r\n\r\n<p>Com 15 anos, depois de ouvir o disco Rising Force (primeiro &aacute;lbum de Yngwie Malmstteen), decidiu entrar numa disciplina de tocar de oito a nove horas por dia porque queria tocar como Malmstteen.<br />\r\nNessa rotina de estudos surgiu o interesse por m&uacute;sica instrumental e nos anos seguintes passa a pesquisar este estilo musical, conhecendo nomes como: Joe Satriani, Steve Vai, Steve Morse, Vinnie Moore, Greg Howe, Jeff Beck, etc...<br />\r\nAos 17 anos, num show do Trielo (trio de guitarras com play-back), Andr&eacute; viu pela primeira vez o guitarrista Mozart Mello tocar. Na mesma hora quis ter aulas com ele...<br />\r\nA&iacute; come&ccedil;ou uma &ldquo;pequena batalha&rdquo; pra conseguir uma vaga com o mestre, j&aacute; que sua lista de espera era muito longa. Foi a v&aacute;rios shows, ligava toda semana atr&aacute;s de uma vaga...</p>\r\n\r\n<p>At&eacute; que um dia Mozart disse que iria ministrar um curso de harmonia no Conservat&oacute;rio Souza Lima. O curso foi t&atilde;o puxado que come&ccedil;ou com doze alunos e terminou com apenas dois. Ent&atilde;o Mozart decidiu abrir vagas para que esses dois alunos que conseguiram terminar o curso continuassem tendo aulas com ele. Foi assim que Andr&eacute; conseguiu sua vaga com o mestre e ficou tendo aulas por cinco anos.<br />\r\nMozart o incentivou a se aprofundar em outros estilos como jazz, blues, fusion e mpb. G&ecirc;neros que, junto ao rock, o ajudaram a formar sua identidade musical.<br />\r\nNessa mesma &eacute;poca Andr&eacute; come&ccedil;a a tocar profissionalmente passando por bandas de cover como Billy Idol, Guns&rsquo;n&rsquo;cover, U2 e at&eacute; um Dave Lee Roth cover!...</p>\r\n\r\n<p>Sua trajet&oacute;ria como professor se iniciou tamb&eacute;m aos 17 anos dando aulas para alguns amigos e logo j&aacute; estava dando aulas em escolas de m&uacute;sica, tornando-se um professor conceituado com vasto material did&aacute;tico. Atividade que exerce h&aacute; 20 anos, sem deixar de lado os estudos e constantes pesquisas. A fim de sempre aperfei&ccedil;oar sua did&aacute;tica e sua identidade musical que consiste em<span style="line-height:1.6em">&nbsp;misturar estilos e ritmos de forma coesa, buscando uma personalidade em sua linguagem.</span></p>\r\n\r\n<p>aaaAtualmente dedica-se ao ensino de guitarra, dando aulas a v&aacute;rios guitarristas atuantes no mercado. Grava guitarras e viol&otilde;es para est&uacute;dios em S&atilde;o Paulo (principalmente &aacute;udio publicit&aacute;rio), alem de tocar na banda de Andr&eacute; Matos, junto com os irm&atilde;os Luis e Hugo Mariutti, Fabio Ribeiro e Eloy Casagrande.</p>\r\n', '', 'http://www.andrehernandes.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blogId` int(11) NOT NULL AUTO_INCREMENT,
  `blogTitle` varchar(50) NOT NULL,
  `blogContent` varchar(4000) NOT NULL,
  `blogDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `adminId` int(11) NOT NULL,
  `blogTag` varchar(1000) NOT NULL,
  PRIMARY KEY (`blogId`),
  KEY `userId` (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `blog`
--

INSERT INTO `blog` (`blogId`, `blogTitle`, `blogContent`, `blogDate`, `adminId`, `blogTag`) VALUES
(1, 'First Blog Post', '<p><span style="color:rgb(90, 90, 90); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">We make the <strong>WordPress Bootstrap CSS</strong> plugin that your referred to earlier, on Host Like Toast.</span><br />\r\n<span style="color:rgb(90, 90, 90); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">This plugin is free and open-source, and we have tutorials on the website for how you can use WordPress shortcodes to implement some of the bootstrap features.</span><br />\r\n<span style="color:rgb(90, 90, 90); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">You could also, in your themes, use the do_shortcode() function to implement the existing shortcodes easily. Today we released version 2.0.0-beta so you can immediately start taking full advantage of Twitter Bootstrap 2.0.</span><br />\r\n<span style="color:rgb(90, 90, 90); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">We make the WordPress Bootstrap CSS plugin that your referred to earlier, on Host Like Toast.</span><br />\r\n<span style="color:rgb(90, 90, 90); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">This plugin is free and open-source, and we have tutorials on the website for how you can use WordPress shortcodes to implement some of the bootstrap features.</span><br />\r\n<span style="color:rgb(90, 90, 90); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px">You could also, in your themes, use the do_shortcode() function to implement the existing shortcodes easily. Today we released version 2.0.0-beta so you can immediately start taking full advantage of Twitter Bootstrap 2.0.</span></p>\r\n', '2014-01-08 16:36:41', 1, 'bootstrap, twitter'),
(2, 'From Wikipedia, the free encyclopedia', '<p><span style="color:rgb(0, 0, 0); font-family:sans-serif">A&nbsp;</span><strong>blog</strong><span style="color:rgb(0, 0, 0); font-family:sans-serif">&nbsp;(a truncation of the expression&nbsp;</span><em><strong>web log</strong></em><span style="color:rgb(0, 0, 0); font-family:sans-serif">)</span><sup><a href="http://en.wikipedia.org/wiki/Blog#cite_note-1" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; white-space: nowrap; background-position: initial initial; background-repeat: initial initial;">[1]</a></sup><span style="color:rgb(0, 0, 0); font-family:sans-serif">&nbsp;is a discussion or informational site published on the&nbsp;</span><a href="http://en.wikipedia.org/wiki/World_Wide_Web" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; line-height: 19.1875px;" title="World Wide Web">World Wide Web</a><span style="color:rgb(0, 0, 0); font-family:sans-serif">&nbsp;and consisting of discrete entries (&quot;posts&quot;) typically displayed in reverse chronological order (the most recent post appears first). Until 2009 blogs were usually the work of a single individual, occasionally of a small group, and often covered a single subject. More recently &quot;multi-author blogs&quot; (MABs) have developed, with posts written by large numbers of authors and professionally edited. MABs from&nbsp;</span><a href="http://en.wikipedia.org/wiki/Newspaper" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; line-height: 19.1875px;" title="Newspaper">newspapers</a><span style="color:rgb(0, 0, 0); font-family:sans-serif">, other media outlets,&nbsp;</span><a href="http://en.wikipedia.org/wiki/University" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; line-height: 19.1875px;" title="University">universities</a><span style="color:rgb(0, 0, 0); font-family:sans-serif">,&nbsp;</span><a class="mw-redirect" href="http://en.wikipedia.org/wiki/Think_tanks" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; line-height: 19.1875px;" title="Think tanks">think tanks</a><span style="color:rgb(0, 0, 0); font-family:sans-serif">,&nbsp;</span><a href="http://en.wikipedia.org/wiki/Advocacy_group" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; line-height: 19.1875px;" title="Advocacy group">advocacy groups</a><span style="color:rgb(0, 0, 0); font-family:sans-serif">&nbsp;and similar institutions account for an increasing quantity of blog traffic. The rise of&nbsp;</span><a href="http://en.wikipedia.org/wiki/Twitter" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; line-height: 19.1875px;" title="Twitter">Twitter</a><span style="color:rgb(0, 0, 0); font-family:sans-serif">&nbsp;and other &quot;</span><a href="http://en.wikipedia.org/wiki/Microblogging" style="text-decoration: none; color: rgb(11, 0, 128); background-image: none; font-family: sans-serif; line-height: 19.1875px;" title="Microblogging">microblogging</a><span style="color:rgb(0, 0, 0); font-family:sans-serif">&quot; systems helps integrate MABs and single-author blogs into societal newstreams.&nbsp;</span><em>Blog</em><span style="color:rgb(0, 0, 0); font-family:sans-serif">&nbsp;can also be used as a verb, meaning</span><em>to maintain or add content to a blog</em><span style="color:rgb(0, 0, 0); font-family:sans-serif">.</span></p>\r\n', '2013-12-02 17:10:52', 1, 'wikipedia, twitter');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(20) NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Category	1'),
(2, 'Category	2'),
(3, 'Category	3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrument`
--

CREATE TABLE IF NOT EXISTS `instrument` (
  `instrumentId` int(11) NOT NULL AUTO_INCREMENT,
  `instrumentName` varchar(20) NOT NULL,
  PRIMARY KEY (`instrumentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `instrument`
--

INSERT INTO `instrument` (`instrumentId`, `instrumentName`) VALUES
(1, 'Guitar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `languageId` int(11) NOT NULL AUTO_INCREMENT,
  `languageName` varchar(20) NOT NULL,
  PRIMARY KEY (`languageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `language`
--

INSERT INTO `language` (`languageId`, `languageName`) VALUES
(1, 'Português'),
(2, 'English');

-- --------------------------------------------------------

--
-- Estrutura da tabela `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `packageId` int(11) NOT NULL AUTO_INCREMENT,
  `packageName` varchar(50) NOT NULL,
  `subCategoryId` int(11) NOT NULL,
  `instrumentId` int(11) NOT NULL,
  PRIMARY KEY (`packageId`),
  KEY `subCategoryId` (`subCategoryId`,`instrumentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `package`
--

INSERT INTO `package` (`packageId`, `packageName`, `subCategoryId`, `instrumentId`) VALUES
(1, 'Package	1', 1, 1),
(2, 'Package	2', 2, 1),
(3, 'Package	3', 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `packagetrans`
--

CREATE TABLE IF NOT EXISTS `packagetrans` (
  `packageId` int(11) NOT NULL,
  `languageId` int(11) NOT NULL,
  `packageTransName` varchar(50) NOT NULL,
  `packageTransDesc` varchar(1000) NOT NULL,
  PRIMARY KEY (`packageId`,`languageId`),
  KEY `languageId` (`languageId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `packagetrans`
--

INSERT INTO `packagetrans` (`packageId`, `languageId`, `packageTransName`, `packageTransDesc`) VALUES
(1, 1, 'Palhetada Híbrida', '<p>Palhetada H&iacute;brida &eacute; uma t&eacute;cnica ...</p>\r\n'),
(1, 2, 'Hybrid Picking', 'Hybrid Picking is a technique ...');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `subCategoryName` varchar(20) NOT NULL,
  `categoryId` int(11) NOT NULL,
  PRIMARY KEY (`subCategoryId`),
  KEY `categoryId` (`categoryId`),
  KEY `categoryId_2` (`categoryId`),
  KEY `subCategoryId` (`subCategoryId`),
  KEY `categoryId_3` (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `subcategory`
--

INSERT INTO `subcategory` (`subCategoryId`, `subCategoryName`, `categoryId`) VALUES
(1, 'Sub-Category 1', 1),
(2, 'Sub-Category 2', 1),
(3, 'Sub-Category 3', 2),
(4, 'Sub-Category 4', 2),
(5, 'Sub-Category 5', 3),
(6, 'Sub-Category 6', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subpackage`
--

CREATE TABLE IF NOT EXISTS `subpackage` (
  `subPackageId` int(11) NOT NULL AUTO_INCREMENT,
  `subPackageName` varchar(50) NOT NULL,
  `packageId` int(11) NOT NULL,
  PRIMARY KEY (`subPackageId`),
  KEY `packageId` (`packageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `subpackage`
--

INSERT INTO `subpackage` (`subPackageId`, `subPackageName`, `packageId`) VALUES
(1, 'Parte Um', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `subpackagetrans`
--

CREATE TABLE IF NOT EXISTS `subpackagetrans` (
  `subpackageId` int(11) NOT NULL,
  `languageId` int(11) NOT NULL,
  `subpackageTransName` varchar(50) NOT NULL,
  `subpackageTransDesc` varchar(4000) NOT NULL,
  PRIMARY KEY (`subpackageId`,`languageId`),
  KEY `languageId` (`languageId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `subpackagetrans`
--

INSERT INTO `subpackagetrans` (`subpackageId`, `languageId`, `subpackageTransName`, `subpackageTransDesc`) VALUES
(1, 1, 'Parte Um', '<p>Nessa parte, voc&ecirc; ir&aacute; descobrir</p>\r\n'),
(1, 2, 'Part One', '<p>Description part one.</p>\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `tagName` varchar(50) NOT NULL,
  `tagColor` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`tagId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`tagId`, `tagName`, `tagColor`) VALUES
(1, 'blues', ''),
(2, 'pentatônica', '#AFAFAF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `userMail` varchar(100) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`userId`, `userName`, `userMail`, `userPassword`) VALUES
(1, 'borille', 'thiagoborille@gmail.com', '58e5c7b9fba0532e36e5cd4740e1f4c5'),
(3, 'claretimus', 'claretimus@gmail.com', '692c784846a2e1574709e921173d522c');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `admin` (`adminId`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `packagetrans`
--
ALTER TABLE `packagetrans`
  ADD CONSTRAINT `packagetrans_ibfk_1` FOREIGN KEY (`packageId`) REFERENCES `package` (`packageId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `packagetrans_ibfk_2` FOREIGN KEY (`languageId`) REFERENCES `language` (`languageId`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `subpackage`
--
ALTER TABLE `subpackage`
  ADD CONSTRAINT `subpackage_ibfk_1` FOREIGN KEY (`packageId`) REFERENCES `package` (`packageId`) ON UPDATE CASCADE;

--
-- Restrições para a tabela `subpackagetrans`
--
ALTER TABLE `subpackagetrans`
  ADD CONSTRAINT `subpackagetrans_ibfk_1` FOREIGN KEY (`subpackageId`) REFERENCES `subpackage` (`subPackageId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subpackagetrans_ibfk_2` FOREIGN KEY (`languageId`) REFERENCES `language` (`languageId`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
