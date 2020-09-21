CREATE DATABASE IF NOT EXISTS `PdoF4Speak`;
USE `PdoF4Speak`;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `F4Speak`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` char(3) NOT NULL,
  `nom` char(32) NOT NULL,
  `mdp` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `mdp`) VALUES
('1', 'admin', 'admin'),
('2', 'demo', 'demo');