-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 02, 2013 at 03:33 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projet2`
--
CREATE DATABASE `projet2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet2`;

-- --------------------------------------------------------

--
-- Table structure for table `exercice`
--

CREATE TABLE IF NOT EXISTS `exercice` (
  `Exercice` text NOT NULL,
  `CodeMatiere` varchar(255) NOT NULL,
  `CodeExercice` varchar(255) NOT NULL,
  `Diff` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercice`
--

INSERT INTO `exercice` (`Exercice`, `CodeMatiere`, `CodeExercice`, `Diff`) VALUES
('On considère un cache associatif composé de 4 entrées de 4 mots de 16 bits.<br> Les adresses mémoire sont sur 8 bits. ', 'NFA006', 'NFA006-1', 'E'),
('Une mémoire centrale est formée de 8192 blocs.<br> La taille du bloc est 32 mots de 4 octets.<br> Un cache à correspondance direct est associé à cette mémoire et contient 32 lignes.<br> La mémoire centrale est adressable par octet.', 'NFA006', 'NFA006-2', 'E'),
('convertir', 'NFA006', 'NFA006-3', 'M'),
('Une mémoire centrale de taille 512 MB<br> organisée en mots de 32 bits.', 'NFA006', 'NFA006-4', 'E'),
('Calculer la valeur décimale du nombre flottant<br> représenté en IEEE 754 simple précision', 'NFA006', 'NFA006-5', 'M'),
('Combien de cycles necessite ce prog', 'NFA006', 'NFA006-0', 'S'),
('test2', 'NFA006', 'NFA006-6', 'E'),
('asdsad', 'NFA006', 'NFA006-7', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE IF NOT EXISTS `matiere` (
  `NomM` varchar(255) NOT NULL,
  `CodeM` varchar(255) NOT NULL,
  `Specialiter` varchar(255) NOT NULL,
  `Prof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`NomM`, `CodeM`, `Specialiter`, `Prof`) VALUES
('method', 'NFA007', 'INFORMATIQUE', 'prof1'),
('web1', 'NFA010', 'INFORMATIQUE', 'prof2'),
('web2', 'NFA011', 'INFORMATIQUE', 'prof2'),
('web3', 'NFA012', 'INFORMATIQUE', 'pascal'),
('archi', 'NFA006', 'INFORMATIQUE', 'abdalla');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `UserName` varchar(255) NOT NULL,
  `CMatiere` varchar(255) NOT NULL,
  `Note` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Specialiter` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`UserName`, `CMatiere`, `Note`, `Date`, `Specialiter`, `time`) VALUES
('marco', 'NFA006', 12, '2013-05-18', 'INFORMATIQUE', '0:0:12'),
('marco', 'NFA006', 12, '2013-09-16', 'INFORMATIQUE', '0:0:40'),
('marco', 'NFA006', 0, '2013-09-16', 'INFORMATIQUE', '0:0:5'),
('marco', 'NFA006', 12, '2013-09-21', 'INFORMATIQUE', '0:0:27'),
('7amad', 'NFA006', 13, '2012-05-21', 'INFORMATIQUE', '0:2:30'),
('marco', 'NFA007', 9, '2013-09-23', 'INFORMATIQUE', '0:0:18'),
('marco', 'NFA006', 3, '2013-09-24', 'INFORMATIQUE', '0:0:29'),
('marco', 'NFA007', 3, '2013-09-24', 'INFORMATIQUE', '0:0:8'),
('marco', 'NFA007', 8, '2013-09-24', 'INFORMATIQUE', '0:0:5'),
('bob', 'NFA007', 5, '2013-09-25', 'INFORMATIQUE', '0:0:6'),
('marco', 'NFA007', 12, '2013-09-25', 'INFORMATIQUE', '0:0:39'),
('bob', 'NFA007', 6, '2013-09-25', 'INFORMATIQUE', '0:0:4'),
('bob', 'NFA006', 20, '2013-09-25', 'INFORMATIQUE', '0:0:13'),
('bob', 'NFA006', 11, '2013-09-25', 'INFORMATIQUE', '0:0:20'),
('bob', 'NFA007', 14, '2013-09-25', 'INFORMATIQUE', '0:0:14'),
('bob', 'NFA006', 17, '2013-09-26', 'INFORMATIQUE', '0:0:16'),
('marco', 'NFA006', 7, '2013-09-29', 'INFORMATIQUE', '0:0:8'),
('bob', 'NFA006', 10, '2013-09-30', 'INFORMATIQUE', '0:0:34'),
('bob', 'NFA006', 8, '2013-10-02', 'INFORMATIQUE', '0:0:26'),
('marco', 'NFA006', 4, '2013-10-02', 'INFORMATIQUE', '0:0:3'),
('marco', 'NFA006', 14, '2013-10-02', 'INFORMATIQUE', '0:5:21'),
('marco', 'NFA006', 14, '2013-10-02', 'INFORMATIQUE', '0:5:24'),
('marco', 'NFA006', 9, '2013-10-02', 'INFORMATIQUE', '0:0:1');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `Question` text NOT NULL,
  `R1` text NOT NULL,
  `R2` text NOT NULL,
  `Rc` text NOT NULL,
  `CMatiere` varchar(255) NOT NULL,
  `CQuestion` varchar(255) NOT NULL,
  `CExercice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Question`, `R1`, `R2`, `Rc`, `CMatiere`, `CQuestion`, `CExercice`) VALUES
(' a)Combien de blocs existe-il dans la memoire centrale?', '16 blocs', '64 clocs', '32 blocsc', 'NFA006', 'NFA006-1-0', 'NFA006-1'),
('b)Quelle est la taille de l’étiquette ?', '4Mo', '2Mo', '1Moc', 'NFA006', 'NFA006-1-1', 'NFA006-1'),
('a)Quelle est la taille de la mémoire centrale ?', '4Mo', '2Mo', '1Moc', 'NFA006', 'NFA006-2-0', 'NFA006-2'),
('b)Quelle est la taille totale du cache direct ?', '5 Ko', '4 Ko', '4.25 Koc', 'NFA006', 'NFA006-2-1', 'NFA006-2'),
('c)Quelle est la longueur de l’adresse mémoire ?', '10 bits', '15 bits', '20 bitsc', 'NFA006', 'NFA006-2-2', 'NFA006-2'),
('a)(29AF)16=( ?)8', '(25657)8', '(247543)8', '(24657)8c', 'NFA006', 'NFA006-3-0', 'NFA006-3'),
('b)(253)10=( ?)16', '(FE)16', '(FA)16', '(FD)16c', 'NFA006', 'NFA006-3-1', 'NFA006-3'),
('c)(01010110)2=( ?)16', '(65)16', '(60)16', '(56)16c', 'NFA006', 'NFA006-3-2', 'NFA006-3'),
('a)Quelle est en bits la largeur du bus de données', '16 bit', '8 bit', '32 bitc', 'NFA006', 'NFA006-4-0', 'NFA006-4'),
('b)Quelle est en bits la largeur du bus d’adresses', '64 bit', '32 bit', '29 bitc', 'NFA006', 'NFA006-4-1', 'NFA006-4'),
('a)1F9E2000', '628,5 x 2-73', '635,5 x 2-73', '632,5 x 2-73c', 'NFA006', 'NFA006-5-0', 'NFA006-5'),
('b)(8,625)10', '(410C0000)16', '(411D0000)16', '(410A0000)16c', 'NFA006', 'NFA006-5-1', 'NFA006-5'),
('a)LOAD Im R 3/ADD D R A/STORE B R X', '25 cycles', '22 cycles', '24 cyclesc', 'NFA006', 'NFA006-0-0', 'NFA006-0'),
('a)fsdg', 'fdh', 'sdf', 'asd', 'NFA007', 'NFA007-0-0', 'NFA007-0'),
('b)dg', 'hfgh', 'jg', 'hj', 'NFA007', 'NFA007-0-1', 'NFA007-0'),
('a)dasda', 'wqe', 'sad', 'sdf', 'NFA006', 'NFA006-6-0', 'NFA006-6'),
('b)dasd', 'ads', 'asd', 'df', 'NFA006', 'NFA006-6-1', 'NFA006-6');

-- --------------------------------------------------------

--
-- Table structure for table `specialiter`
--

CREATE TABLE IF NOT EXISTS `specialiter` (
  `NomS` varchar(255) NOT NULL,
  `NomChef` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialiter`
--

INSERT INTO `specialiter` (`NomS`, `NomChef`) VALUES
('CIVIL', 'chef3'),
('INFORMATIQUE', 'pascal'),
('ELECTRONIQUE', 'chef1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Specialiter` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `UserName`, `Password`, `Email`, `Specialiter`, `Position`) VALUES
('abbas', 'marco', 'polo', '@hotmail.com', 'INFORMATIQUE', 'etu'),
('abdalla l asmar', 'abdalla', 'lasmar', '@hotmail.com', 'INFORMATIQUE', 'prof'),
('abc', 'abc', 'abc', '@hotmail.com', 'INFORMATIQUE', 'prof'),
('ali', 'ali', 'kataya', '@hotmail.com', 'CIVIL', 'etu'),
('brahim brahim', 'bob', 'bob', '@hotmail.com', 'INFORMATIQUE', 'etu'),
('prof1', 'prof1', 'prof1', '@hotmail.com', 'INFORMATIQUE', 'prof'),
('prof2', 'prof2', 'prof2', '@hotmail.com', 'INFORMATIQUE', 'prof'),
('moudir', 'moudir', 'dir', '@hotmail.com', 'DIRECTEUR', 'dir'),
('civil', 'chef3', 'chef3', '@hotmail.com', 'CIVIL', 'chef'),
('pascal fares', 'pascal', 'fares', '@hotmail.com', 'INFORMATIQUE', 'chef'),
('elec', 'chef1', 'chef1', '@hotmail.com', 'ELECTRONIQUE', 'chef');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
