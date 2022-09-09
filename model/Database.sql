-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 06 sep. 2022 à 03:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `azerty`
--

-- --------------------------------------------------------

--
-- Structure de la table `continents`
--

DROP TABLE IF EXISTS `continents`;
CREATE TABLE IF NOT EXISTS `continents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idContinent` varchar(10) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `photoPath` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `continents`
--

INSERT INTO `continents` (`id`, `idContinent`, `nom`, `photoPath`, `description`) VALUES
(1, 'Afrique', 'Afrique', '../medias/continents/Afrique/Irlande.jpg', 'uygdqsuhdgqsjhdgsqjhdgqsdhqsdjqshdqsiuopoiqsudiusqjghqsjhqsh'),
(2, 'sdfghj', 'Europe', '../medias/continents/Europe/Royaume-Uni.jpg', 'shfsdkjfhskfjhsdkzrçzurtzyequdsiopxclkjnbx,'),
(3, 'sqjgfh', 'Asie', '../medias/continents/Asie/Pays.jpg', 'fkjsdhfsfskjlfnsfs'),
(4, 'sdfghj', 'Amerique', '../medias/continents/Amerique/Balt.jpg', 'kjfjqdjls');

-- --------------------------------------------------------

--
-- Structure de la table `destinations`
--

DROP TABLE IF EXISTS `destinations`;
CREATE TABLE IF NOT EXISTS `destinations` (
  `idSite` varchar(10) NOT NULL,
  `continent` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `coordonnees` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`idSite`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`idSite`, `continent`, `pays`, `coordonnees`, `nom`, `description`) VALUES
('1', 'Afrique', 'Congo', 'zertyuiojkop', 'zongo', 'sdfghjklmùqdsmwfyuiop^$eaz yuiop dsqdgsqdjqsodmjsqkdjqdo fqsifbs eoazurzeiudqkjx dqsudgsqdnsqdsqkjdgsqjfhds sqfnksqdbfqsdjgfqslkjfhoifazeiazefkjbqjqdhqsjdqsmlfq fqifgqkfzepofeziru qsihgdqsidsqopjezoif fsjifgsqfoijf qqsuidqsdqsjdqs djqsbkqsjdqskjdhazfizefrug '),
('2', 'Afrique', 'Congo', 'fghjsq', 'Kinshasa', 'sdfghjklm'),
('3', 'Afrique', 'Congo', 'ghjklmù', 'Kamina', 'fdsjfqsdjqshlkqsjdqs fsdkjfbsfs\r\nsdgfjdsgfsd\r\nfdsgfsjdhfsd\r\n\r\n\r\n\r\nsdfksdgfuzefeziufyzefs');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

DROP TABLE IF EXISTS `medias`;
CREATE TABLE IF NOT EXISTS `medias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idSite` varchar(10) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medias`
--

INSERT INTO `medias` (`id`, `idSite`, `path`) VALUES
(1, '1', '../medias/sites/zongo/zongo.jpg'),
(6, '2', '../medias/sites/kinshasa/Kin.jpg'),
(8, '2', '../medias/sites/zongo/kin-oasis.jpg'),
(9, '2', '../medias/sites/kinshasa/kinshasacap.jpg'),
(12, '3', '../medias/sites/kamina/mbu.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `email` varchar(100) NOT NULL,
  `idUser` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `statut` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`email`, `idUser`, `password`, `nom`, `prenom`, `statut`) VALUES
('jonathankukwabantu120302@gmail.com', 'd272da8fd1', '8cb2237d0679ca88db6464eac60da96345513964', 'Kukwabantu', 'Jonathan', 1),
('jonathankukwabantu12030@gmail.com', '42fe33ea41', '8cb2237d0679ca88db6464eac60da96345513964', 'Backelants', 'Joseph', 1),
('jonathankukwabantu1203@gmail.com', 'e2fcfcd348', '8cb2237d0679ca88db6464eac60da96345513964', 'Kasenda', 'Jean', 1),
('jonathankukwabantu12032@gmail.com', 'bd93598ebe', '30136e5392ab5ab089818235ee1552a8fcb172c6', 'Andedi', 'Joel', 1),
('dev@gmail.com', 'a365e97d1a', 'b6589fc6ab0dc82cf12099d1c2d40ab994e8410c', 'mbala', 'dev', 1),
('hans@gmail.com', '35e7dc6081', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'Hybani', 'Hans', 1),
('ot@gmail.com', '37afec6ccd', 'b56495d500f9e5388a3efe5f65ee2361e8ed2238', 'Otema', 'Elie', 1),
('bene@gmail.com', 'aa430d26a1', '63274db57b18124674b845180931dcb653b831b5', 'Manzombi', 'BÃ©nÃ©dicte', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
