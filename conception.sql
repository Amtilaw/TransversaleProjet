-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2020 at 09:57 PM
-- Server version: 5.7.28
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conception`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` varchar(20) NOT NULL,
  `nom_admin` varchar(20) DEFAULT NULL,
  `prenom_admin` varchar(20) DEFAULT NULL,
  `mot_de_passe` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom_admin`, `prenom_admin`, `mot_de_passe`) VALUES
('adrien10', 'jeanjean', 'adrien', 'adrien10');

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `num_chambre` int(3) NOT NULL,
  `nom_service` varchar(50) NOT NULL,
  PRIMARY KEY (`num_chambre`),
  KEY `FK_service_nom_service` (`nom_service`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`num_chambre`, `nom_service`) VALUES
(11, 'radiologie'),
(12, 'radiologie'),
(13, 'radiologie'),
(14, 'radiologie'),
(15, 'radiologie'),
(21, 'cardiologie'),
(22, 'cardiologie'),
(23, 'cardiologie'),
(31, 'neurologie'),
(32, 'neurologie'),
(41, 'pneumologie'),
(42, 'pneumologie'),
(43, 'pneumologie');

-- --------------------------------------------------------

--
-- Table structure for table `infirmier`
--

DROP TABLE IF EXISTS `infirmier`;
CREATE TABLE IF NOT EXISTS `infirmier` (
  `id_infirmier` varchar(20) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `mdp` varchar(10) NOT NULL,
  PRIMARY KEY (`id_infirmier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infirmier`
--

INSERT INTO `infirmier` (`id_infirmier`, `nom`, `prenom`, `mdp`) VALUES
('Emma99', 'Tamadji', 'emmanuela', 'emma99');

-- --------------------------------------------------------

--
-- Table structure for table `lit`
--

DROP TABLE IF EXISTS `lit`;
CREATE TABLE IF NOT EXISTS `lit` (
  `num_lit` int(3) NOT NULL,
  `num_chambre` int(3) NOT NULL,
  PRIMARY KEY (`num_lit`),
  KEY `FK_chambre_num_chambre` (`num_chambre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lit`
--

INSERT INTO `lit` (`num_lit`, `num_chambre`) VALUES
(111, 11),
(121, 12),
(131, 13),
(132, 13),
(141, 14),
(142, 14),
(151, 15),
(152, 15),
(211, 21),
(221, 22),
(222, 22),
(231, 23),
(232, 23),
(311, 31),
(321, 32),
(411, 41),
(421, 42),
(431, 43),
(433, 43);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id_patient` varchar(50) NOT NULL,
  `nomPrenom` varchar(100) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `telephone` int(10) NOT NULL,
  PRIMARY KEY (`id_patient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id_patient`, `nomPrenom`, `date_naissance`, `adresse`, `ville`, `telephone`) VALUES
('marion31', 'Marion Ekitti', '2000-01-31', '2 place antoine tacq', 'lille', 753644536),
('david15', 'david ake', '2002-09-15', '43 rue colbert', 'lille', 645894726);

-- --------------------------------------------------------

--
-- Table structure for table `sejour`
--

DROP TABLE IF EXISTS `sejour`;
CREATE TABLE IF NOT EXISTS `sejour` (
  `id_sejour` int(3) NOT NULL AUTO_INCREMENT,
  `id_patient` varchar(50) NOT NULL,
  `date_entree` date NOT NULL,
  `date_sortie` date DEFAULT NULL,
  `num_lit` int(3) NOT NULL,
  `nom_service` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sejour`),
  KEY `FK_patient_id_patient` (`id_patient`),
  KEY `FK_service_nom_service` (`nom_service`),
  KEY `FK_lit_num_lit` (`num_lit`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejour`
--

INSERT INTO `sejour` (`id_sejour`, `id_patient`, `date_entree`, `date_sortie`, `num_lit`, `nom_service`) VALUES
(1, 'marion31', '2020-11-15', '2020-11-20', 121, 'radiologie'),
(2, 'david15', '2020-11-24', NULL, 411, 'pneumologie');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `nom_service` varchar(50) NOT NULL,
  `nombre_chambre` int(3) NOT NULL,
  PRIMARY KEY (`nom_service`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`nom_service`, `nombre_chambre`) VALUES
('radiologie', 5),
('cardiologie', 3),
('neurologie', 2),
('pneumologie', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
