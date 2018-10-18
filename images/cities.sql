-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 18 Mai 2018 à 20:02
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `babor$229`
--

-- --------------------------------------------------------

--
-- Structure de la table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`) VALUES
(1, 'Abomey-Calavi'),
(1, 'Cotonou'),
(1, 'Porto-Novo'),
(1, 'Parakou'),
(1, 'Abomey'),
(1, 'Bohicon'),
(1, 'Lokossa'),
(1, 'Ouidah'),
(1, 'Pobé'),
(1, 'Kétou'),
(1, 'Avrankou'),
(1, 'Sakété'),
(2, 'Ouagadougou'),
(2, 'Bobo-Dioulasso'),
(2, 'Koudougou'),
(2, 'Banfora'),
(2, 'Ouahigouya'),
(2, 'Dédougou'),
(2, 'Pissila'),
(2, 'Kaya'),
(2, 'Tanghin-Dassouri'),
(2, 'Tenkodogo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
