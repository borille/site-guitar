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
  `adminPassword` varchar(32) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'borille', '58e5c7b9fba0532e36e5cd4740e1f4c5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(20) NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'Blues'),
(2, 'Fusion');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `package`
--

INSERT INTO `package` (`packageId`, `packageName`, `subCategoryId`, `instrumentId`) VALUES
(1, 'Introduction', 1, 1);

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
(1, 1, 'Palhetada Híbrida', 'Palhetada Híbrida é uma técnica ...'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `subcategory`
--

INSERT INTO `subcategory` (`subCategoryId`, `subCategoryName`, `categoryId`) VALUES
(1, 'Palhetada Híbrida', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
