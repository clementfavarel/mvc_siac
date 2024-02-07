-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 fév. 2024 à 20:07
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siac`
--

-- --------------------------------------------------------

--
-- Structure de la table `artists`
--

CREATE TABLE `artists` (
  `artist_id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `num_stand` int(11) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `bg_src` varchar(255) NOT NULL,
  `media_src` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `aw_src` varchar(255) NOT NULL,
  `img_1` varchar(255) NOT NULL,
  `img_2` varchar(255) NOT NULL,
  `img_1-title` text NOT NULL,
  `img_2-title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`artist_id`, `pseudo`, `num_stand`, `description1`, `description2`, `description3`, `bg_src`, `media_src`, `audio`, `aw_src`, `img_1`, `img_2`, `img_1-title`, `img_2-title`) VALUES
(1, 'AK La Rousse', 88, 'Ak la Rousse, de son vrai nom Annie Krekbs, est une artiste féministe engagée dans l’égalité des sexes depuis plus de 20 ans. Artiste femme, elle est sensible aux injustices des sociétés patriarcales.', 'Elle est convaincue que l’art peut faire évoluer la place de la femme et son positionnment social. S’inspirant des héroïnes de la mythologie, des femmes fleurs de l’Art nouveau, des pin-up du Pop Art, et de bien d’autres chefs d’œuvre qui méritent de ne pas être oubliés, elle propose une vision libre de la femme d’aujourd’hui. Sa \"Vénus aux monarques\" cohabite ainsi avec \"Méduse\".', 'Adepte des techniques mixtes, elle a recours selon ses envies à différents médiums pour jouer avec les couleurs mais aussi aux encres, aux feutres et aux collages. Elle s’est dirigée au fil du temps vers la peinture, intéressée par sa possibilité de réinventer, faire revivre avec de nouvelles techniques. La photographie numérique, le digital painting font désormais partie de ses moyens d’expression sans pour autant l’éloigner des pinceaux.', 'aklarousse/bg.png', 'w7ch7jfao-o', 'aklarousse/audio_ak-la-rousse.wav', 'aklarousse/cocotte-barcelone.jpeg', 'aklarousse/ecolo-spritz.png', 'aklarousse/lilith.png', 'Ecolo Spritz', 'Lilith'),
(2, 'CRISTEEN BREANDON', 8, 'Cristeen BREANDON, artiste engagée, explore à travers ses sculptures la symbolique des figures de proue, utilisant ces représentations pour interroger les actions humaines envers notre planète.\r\n', 'Son œuvre \"Aella\" incarne une guerrière protectrice, une gardienne des humains actuels, en lutte pour leur préservation et leur avenir. \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nVêtue d\'un short en denim qui l\'ancre dans notre époque, cette figure se dresse pour notre monde contemporain et se tourne vers l\'avenir, symbolisant un guide bienveillant pour les générations futures. Les figures de proue, thème récurrent dans ses créations, soulèvent des questions cruciales sur les dégâts écologiques infligés à la Terre, notamment le sixième continent de plastique, une réalité lointaine rencontrée uniquement par les marins. Ainsi, Cristeen Breandon a pour ambition de dénoncer les violences écologiques infligées à la terre.', 'Cristeen BREANDON associe la figure humaine à des symboles classiques tels que les amazones ou les chimères, intégrant également des objets de consommation contemporains dans ses créations. \r\n\r\nCette fusion de thèmes classiques et de symboles contemporains met en lumière les préoccupations écologiques et interroge les modes de vie modernes qui menacent notre planète. Ses sculptures, ancrées dans le contexte maritime, invitent à une réflexion sur notre rapport à l\'environnement et à la manière dont nos actions façonnent le monde que nous laissons derrière nous.\r\n\r\n', 'breandon/bg-breandon.png', 'X6tLR5LIQAM', 'breadon/audio_breandon.wav', 'breandon/en-attendant-le-pianiste.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `artworks`
--

CREATE TABLE `artworks` (
  `artwork_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL,
  `image_alt` varchar(50) NOT NULL,
  `importance` varchar(50) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artworks`
--

INSERT INTO `artworks` (`artwork_id`, `title`, `image_src`, `size`, `image_alt`, `importance`, `artist_id`) VALUES
(1, 'La Cocotte de Barcelone', 'assets/img/aklarousse/cocotte-barcelone.jpeg', '100x100', 'La Cocotte de Barcelone', 'primary', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_job` varchar(60) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pwd` varchar(60) NOT NULL,
  `user_role` varchar(30) NOT NULL DEFAULT 'user',
  `user_birth_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_job`, `user_email`, `user_pwd`, `user_role`, `user_birth_date`) VALUES
(1, 'Clément', 'FAVAREL', 'Etudiant', 'plkode.dev@protonmail.com', '$2y$10$RDQ.GF5eIt0vD9de4a/pcegL7Kk8/eunD4b36Y91w1u4sImKyOyWm', 'user', '2004-07-28 00:00:00'),
(2, 'Alan', 'THOB', 'Etudiant', 'alan.thob@hotmail.fr', '$2y$10$vVK2EOerxZKafq2SR8VdkOZz.H0RZ7EVeHpsqSIgYVTBf82AOwX9O', 'user', '2003-03-03 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`artist_id`);

--
-- Index pour la table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`artwork_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artists`
--
ALTER TABLE `artists`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `artwork_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artworks`
--
ALTER TABLE `artworks`
  ADD CONSTRAINT `artworks_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`artist_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
