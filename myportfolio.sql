-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le :  lun. 27 mai 2019 à 12:10
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `myportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id_project` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` varchar(10000) NOT NULL,
  `source` varchar(200) NOT NULL,
  `img` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id_project`, `title`, `des`, `source`, `img`) VALUES
(1, 'E-Pockets', 'E-Pockets is an application that has a relationship with banks and manages all bank operations. \r\nIt made with HTML, CSS, IONIC, JavaScript and JSON. \r\nIt is a result of team work.', 'https://github.com/houria-ch/E-Pockets', 'E-pockets.png'),
(2, 'Youcode Site Web', 'Youcode Website is a redesign of the original Youcode school website.\r\n It made with HTML, CSS, JavaScript and SASS.\r\n It is a result of team work .', 'https://github.com/houria-ch/refont-Youcode', 'YoucodeSite.png'),
(3, 'E-Pockets test Template', 'E-Pockets test template is an initial mockup for the E-Pockets application.\r\nIt made by adobe xd software. \r\nIt was a test to validate my adobe xd skills.', 'https://github.com/houria-ch/EPockets-test-template', 'E-pockets-test.png'),
(4, 'Youcode test template', 'Youcode test template is an initial mockup for the redesign of the Youcode website.\r\nMade by adobe xd softwar.\r\nIt was a test to validate my adobe xd skills.', 'https://github.com/houria-ch/Youcode-test-template', 'youcode.PNG'),
(5, 'Fast Food ', 'Fast Food is an e-commerce site made from scratch to validate my skills in HTML, CSS, Bootstrap, MySQL and especially PHP which is used to create admin panel to add articles, contact form and login page. ', 'https://github.com/houria-ch/project-e-commerce', 'ecom.png'),
(6, 'Contact form', 'Contact form is a contact page created by HTML, CSS and PHP.\r\nIt is a test to validate my skills by sending emails from my website using PHP.', 'https://github.com/houria-ch/contact-form-php', 'contact-form.png'),
(7, 'Slack Simulation', 'Slack Simulation is a simulation of the frontend of the Salck website created by HTML and CSS.\r\nIt is a workshop to validate my skills in Flex Box.', 'https://github.com/houria-ch/slack-simulation', 'slack.png'),
(8, 'Radonnee Simulation', 'Radonnees similation is a simulation of the frontend of the website RadonnÃ©es in HTML and CSS.\r\nIt is a workshop to validate my skills in css animation.', 'https://github.com/houria-ch/Randonnee-animated', 'animation.png'),
(9, 'Donut Whole simulation', 'Donut Whole simulation is a simulation of the frontend of the Donut Whole website in HTML and CSS.\r\nIt is a workshop to validate my CSS skills.', 'https://github.com/houria-ch/Donut-Whole-simulation', 'donut.png'),
(10, 'Pascal Triangle', 'Pascal Triangle is a pascal triangle made by HTML, CSS and JavaScript to determine the length of the triangle columns.\r\nIt is a workshop to validate my JavaScript skills.', 'https://github.com/houria-ch/triangle-de-pascale', 'triangle.PNG'),
(11, 'Galerie', 'Gallery is a JavaScript practice to create a dynamic gallery.\r\nIt is a workshop to validate my skills in javascript event listener.', 'https://github.com/houria-ch/galerie-js', 'galleri.PNG'),
(12, 'CV exemple with CSS', 'CV example with CSS is an example of a curriculum vita created by HTML and CSS.\r\nIt is a workshop to validate my HTML and CSS skills.', 'https://github.com/houria-ch/cv-html-css', 'cv-css.png'),
(13, 'CV exemple with HTML', 'CV example with HTML is an example of a curriculum vita created by HTML only.\r\nThere is a workshop to validate my HTML skills.', 'https://github.com/houria-ch/html-cv', 'cv-html.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'houria', 'houriachafiq'),
(2, 'houria', 'houriachafiq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id_project`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
