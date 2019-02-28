-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 28 Février 2019 à 15:25
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `optic4000`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `prod_id` int(11) NOT NULL,
  `prod_marque` varchar(50) NOT NULL,
  `prod_nom` varchar(100) NOT NULL,
  `prod_prix` int(5) NOT NULL,
  `prod_img` varchar(100) NOT NULL,
  `prod_desc` varchar(500) NOT NULL,
  `prod_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`prod_id`, `prod_marque`, `prod_nom`, `prod_prix`, `prod_img`, `prod_desc`, `prod_type`) VALUES
(1, 'Banana', 'Skylike Bleu', 269, 'banana_bleu.jpg', '\r\nLe succès de la célèbre marque monégasque de maillots de bain, l\'a conduite à développer depuis 2004, des collections optiques et solaires. Résolument et exclusivement féminines, chaque monture est un hymne au style et à l\'allégresse de la femme Banana. Toniques, tendances et hautes en couleurs, les lunettes Banana sont aussi le reflet d’un style de vie, d’un désir de se démarquer. ', 'soleil'),
(2, 'Calvin Klein', 'Boo Rose', 339, 'calvin_rose.jpg', 'Calvin Klein est l’une des marques de mode les plus vendues dans le monde. Le design des lunettes est à la fois minimaliste et complexe avec des détails raffinés et des couleurs intemporelles. ', 'vue'),
(3, 'Cerruti', 'Sombre écailles', 229, 'cerruti_ecaille.jpg', 'La nouvelle ligne de lunettes Cerruti est une collection masculine au style moderne et pur, d’une élégance très française, qui véhicule les codes et les valeurs de la maison. Les lunettes Cerruti allient confort, qualité et innovation.', 'vue'),
(4, 'Diesel', 'Métal gris', 259, 'diesel_gris.jpg', '\r\nLes lunettes Diesel changent vraiment la donne, jetez donc un œil à la nouvelle collection pour un look original ou plus discret.\r\nDu style rétro revisité au look contemporain avec ses matériaux contemporains, la collection de lunettes Diesel offre de nombreux styles : des lunettes aviateurs classiques aux montures carrées indémodables. ', 'vue'),
(5, 'Lens', 'Acuvue', 199, 'lens_acuvue.jpg', 'Lentilles souples multifocales à port journalier à usage unique. disponible en boîte de 30 lentilles. Elles corrigent la myopie, l\'hypermétropie et la presbytie. ', 'lentille'),
(6, 'Lens', 'Biofinity', 199, 'lens_biofinity.jpg', '\r\nDans les conditions normales d’utilisation et d’entretien, les lentilles mensuelles peuvent être portées au maximum 30 jours.', 'lentille'),
(7, 'Lens', 'Dia 1', 189, 'lens_dia.jpg', 'Dans les conditions normales d’utilisation, les lentilles journalières ne peuvent être portées plus d\'une journée.', 'lentille'),
(8, 'Police', 'Gris sombre', 149, 'police_gris.jpg', 'Le style Police, c’est avant tout un look : un look \"chic urbain\", en provenance directe des grandes métropoles. \r\nUne réalité peinte avec des couleurs vives, qui naît et grandit dans la rue. Les formes sont incisives et collent aux tendances les plus récentes, inspirées des années 80 et du style militaire.', 'soleil'),
(9, 'Rayban', 'Wayfarer v3', 399, 'rayban_wayfarer.jpg', '\r\nLes Ray-Ban Original Wayfarer Classics RB2140 sont les modèles les plus caractéristiques de toute l\'histoire des lunettes de soleil. Depuis la première version en 1952, les Wayfarer Classics ont gagné en popularité parmi les célébrités, les musiciens, les artistes et les personnes dotées d\'un sens aiguisé de la mode et du style. ', 'soleil'),
(10, 'Hugo', 'Basic Gris', 299, 'hugo_gris.jpg', '\r\nPopularisé grâce à la coupe un peu stricte de ses costumes aux épaules renforcées dans les années 80, HUGO BOSS n\'a cessé depuis, d\'étendre son empire à l\'international. HUGO BOSS s\'adresse à une clientèle à la recherche de l\'élégance, dans un style chic et décontracté. ', 'vue'),
(11, 'Carrera', 'Metal Gris', 149, 'carrera_gris.jpg', '\r\nLa marque Carrera évolue dans un univers où le design est essentiel. Une recherche constante de nouvelles solutions techniques est mise en œuvre pour apporter confort et plaisir au porteur de lunettes CARRERA. Une attention particulière est portée aux dernières tendances de la mode, pour apporter un design novateur et ultra \"looké\".', 'vue'),
(12, 'Hugo', 'Opaque Bleu', 139, 'hugo_bleu.jpg', '\r\nPopularisé grâce à la coupe un peu stricte de ses costumes aux épaules renforcées dans les années 80, HUGO BOSS n\'a cessé depuis, d\'étendre son empire à l\'international. HUGO BOSS s\'adresse à une clientèle à la recherche de l\'élégance, dans un style chic et décontracté. ', 'vue'),
(13, 'Carrera', 'Gris Opaque', 299, 'carrera_gris2.jpg', '\r\nLa marque Carrera évolue dans un univers où le design est essentiel. Une recherche constante de nouvelles solutions techniques est mise en œuvre pour apporter confort et plaisir au porteur de lunettes CARRERA. Une attention particulière est portée aux dernières tendances de la mode, pour apporter un design novateur et ultra \"looké\".', 'vue');

-- --------------------------------------------------------

--
-- Structure de la table `usercart`
--

CREATE TABLE `usercart` (
  `id` int(11) NOT NULL,
  `usr_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `updated_at` varchar(100) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `remember_token` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'Tony Mourier', 'moinarnia42@live.fr', '$2y$10$bys8dwKLwldcf44H2/ZdQ.LrJbbdJG9LVV4x/weXEohEfU2g09hnC', '2019-02-27 09:41:08', '2019-02-27 09:41:08', 'IDAOjL9Q2NUyGPkDIckxjuJcuwwCm8UCXw5qiujNYU5ffV9aaBAD4M3QFkjP');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`prod_id`);

--
-- Index pour la table `usercart`
--
ALTER TABLE `usercart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `usercart`
--
ALTER TABLE `usercart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
