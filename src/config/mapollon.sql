-- Adminer 4.8.1 MySQL 5.5.5-10.11.4-MariaDB-1:10.11.4+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `num_stand` int(11) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `bg_src` varchar(255) NOT NULL,
  `media_src` varchar(255) NOT NULL,
  `deco1` varchar(255) DEFAULT NULL,
  `deco2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `artists` (`artist_id`, `pseudo`, `num_stand`, `description1`, `description2`, `description3`, `bg_src`, `media_src`, `deco1`, `deco2`) VALUES
(1,	'AK La Rousse',	88,	'Ak la Rousse, de son vrai nom Annie Krekbs, est une artiste féministe engagée dans l’égalité des sexes depuis plus de 20 ans. Artiste femme, elle est sensible aux injustices des sociétés patriarcales.',	'Elle est convaincue que l’art peut faire évoluer la place de la femme et son positionnment social. S’inspirant des héroïnes de la mythologie, des femmes fleurs de l’Art nouveau, des pin-up du Pop Art, et de bien d’autres chefs d’œuvre qui méritent de ne pas être oubliés, elle propose une vision libre de la femme d’aujourd’hui. Sa \"Vénus aux monarques\" cohabite ainsi avec \"Méduse\".',	'Adepte des techniques mixtes, elle a recours selon ses envies à différents médiums pour jouer avec les couleurs mais aussi aux encres, aux feutres et aux collages. Elle s’est dirigée au fil du temps vers la peinture, intéressée par sa possibilité de réinventer, faire revivre avec de nouvelles techniques. La photographie numérique, le digital painting font désormais partie de ses moyens d’expression sans pour autant l’éloigner des pinceaux.',	'assets/img/aklarousse/bg.png',	'assets/media/aklarousse/itw.mp4',	'assets/img/aklarousse/plume-haute.png',	'assets/img/aklarousse/plume-basse.png');

DROP TABLE IF EXISTS `artworks`;
CREATE TABLE `artworks` (
  `artwork_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `image_alt` varchar(50) NOT NULL,
  `importance` varchar(50) NOT NULL,
  `artist_id` int(11) NOT NULL,
  PRIMARY KEY (`artwork_id`),
  KEY `artist_id` (`artist_id`),
  CONSTRAINT `artworks_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`artist_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `artworks` (`artwork_id`, `title`, `image_src`, `image_alt`, `importance`, `artist_id`) VALUES
(1,	'La Cocotte de Barcelone',	'assets/img/aklarousse/cocotte-barcelone.jpeg',	'La Cocotte de Barcelone',	'primary',	1);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(50) NOT NULL,
  `user_lastname` varchar(50) NOT NULL,
  `user_job` varchar(60) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pwd` varchar(60) NOT NULL,
  `user_role` varchar(30) NOT NULL DEFAULT 'user',
  `user_birth_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_job`, `user_email`, `user_pwd`, `user_role`, `user_birth_date`) VALUES
(1,	'Clément',	'FAVAREL',	'Etudiant',	'plkode.dev@protonmail.com',	'$2y$10$RDQ.GF5eIt0vD9de4a/pcegL7Kk8/eunD4b36Y91w1u4sImKyOyWm',	'user',	'2004-07-28 00:00:00');

-- 2024-01-29 13:34:24
