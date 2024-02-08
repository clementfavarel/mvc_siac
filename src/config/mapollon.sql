-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 fév. 2024 à 15:45
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
  `img_2-title` text NOT NULL,
  `feedback-check` tinyint(1) NOT NULL,
  `feedback-text` varchar(255) NOT NULL,
  `feedback-question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`artist_id`, `pseudo`, `num_stand`, `description1`, `description2`, `description3`, `bg_src`, `media_src`, `audio`, `aw_src`, `img_1`, `img_2`, `img_1-title`, `img_2-title`, `feedback-check`, `feedback-text`, `feedback-question`) VALUES
(1, 'AK LA ROUSSE', 88, 'Ak la Rousse, de son vrai nom Annie Krekbs, est une artiste féministe engagée dans l’égalité des sexes depuis plus de 20 ans. Artiste femme, elle est sensible aux injustices des sociétés patriarcales.', 'Elle est convaincue que l’art peut faire évoluer la place de la femme et son positionnment social. S’inspirant des héroïnes de la mythologie, des femmes fleurs de l’Art nouveau, des pin-up du Pop Art, et de bien d’autres chefs d’œuvre qui méritent de ne pas être oubliés, elle propose une vision libre de la femme d’aujourd’hui. Sa \"Vénus aux monarques\" cohabite ainsi avec \"Méduse\".', 'Adepte des techniques mixtes, elle a recours selon ses envies à différents médiums pour jouer avec les couleurs mais aussi aux encres, aux feutres et aux collages. Elle s’est dirigée au fil du temps vers la peinture, intéressée par sa possibilité de réinventer, faire revivre avec de nouvelles techniques. La photographie numérique, le digital painting font désormais partie de ses moyens d’expression sans pour autant l’éloigner des pinceaux.', 'aklarousse/bg-aklarousse.png', 'w7ch7jfao-o', 'aklarousse/audio_ak-la-rousse.wav', 'aklarousse/cocotte-barcelone.jpeg', 'aklarousse/ecolo-spritz.png', 'aklarousse/lilith.png', 'Ecolo Spritz', 'Lilith', 0, '', ''),
(2, 'CRISTEEN BREANDON', 41, 'Cristeen BREANDON, artiste engagée, explore à travers ses sculptures la symbolique des figures de proue, utilisant ces représentations pour interroger les actions humaines envers notre planète.\r\n', 'Son œuvre \"Aella\" incarne une guerrière protectrice, une gardienne des humains actuels, en lutte pour leur préservation et leur avenir. \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nVêtue d\'un short en denim qui l\'ancre dans notre époque, cette figure se dresse pour notre monde contemporain et se tourne vers l\'avenir, symbolisant un guide bienveillant pour les générations futures. Les figures de proue, thème récurrent dans ses créations, soulèvent des questions cruciales sur les dégâts écologiques infligés à la Terre, notamment le sixième continent de plastique, une réalité lointaine rencontrée uniquement par les marins. Ainsi, Cristeen Breandon a pour ambition de dénoncer les violences écologiques infligées à la terre.', 'Cristeen BREANDON associe la figure humaine à des symboles classiques tels que les amazones ou les chimères, intégrant également des objets de consommation contemporains dans ses créations. \r\n\r\nCette fusion de thèmes classiques et de symboles contemporains met en lumière les préoccupations écologiques et interroge les modes de vie modernes qui menacent notre planète. Ses sculptures, ancrées dans le contexte maritime, invitent à une réflexion sur notre rapport à l\'environnement et à la manière dont nos actions façonnent le monde que nous laissons derrière nous.\r\n\r\n', 'breandon/bg-breandon.png', 'X6tLR5LIQAM', 'breandon/audio_breandon.wav', 'breandon/dionysos.png', 'breandon/ainia.png', 'breandon/antiope.png', 'Ainia, compagne pacifique', 'Antiope', 0, '', ''),
(3, 'NGO TAN', 86, 'Né au Vietnam, Pierre Ngo Tan s’est installé en France à l\'âge de 18 ans, où il a depuis développé sa carrière artistique. Artiste professionnel à temps plein depuis 5 ans, il intervenait dans les ateliers d’art plastiques d’un hôpital spécialisé où il exerçait en tant qu’infirmier psychiatrique. L’art lui permet d’exprimer sa sensibilité, de retranscrire ses états d\'âmes, ses émotions, ses souvenirs et de partager sa vision de la vie. \r\n\r\n\r\n', 'Pierre Ngo Tan explore un territoire artistique situé entre le figuratif et l\'abstraction. Il cherche à capturer des atmosphères souvent brumeuses, utilisant la profondeur et la lumière comme éléments clés de ses créations. Son ambition artistique est de fusionner réalité et imaginaire, évoquant des souvenirs et suscitant des émotions à travers des nuances de gris, des couleurs estompées et des contours flous.', 'Lorsqu’il crée, il a la sensation de vivre quelque chose de très intime : “je me sens hors du\ntemps, de la réalité. Je ne cherche pas l’esthétique ni à faire passer un message, j’essaie de\ntraduire mes sensations, mes émotions, mes questionnements sur le sens de l’existence, de\nla vie.Lorsqu’il crée, il a la sensation de vivre quelque chose de très intime : “je me sens hors du\ntemps, de la réalité. Je ne cherche pas l’esthétique ni à faire passer un message, j’essaie de\ntraduire mes sensations, mes émotions, mes questionnements sur le sens de l’existence, de\nla vie.”', 'ngotan/bg-ngotan.png', '6vv-fvmeoCQ', 'ngotan/audio_ngotan.wav', 'ngotan/des-villes-et-des-hommes.png', 'ngotan/la-ou-seveille-le-silence.png', 'ngotan/loin-du-tumule.png', 'Là où s\'éveille le silence', 'Loin du tumule', 1, 'Certains font part à l’artiste d’un ressenti de nostalgie, d’apaisement ou encore d’espoir face au tableau, d’autres font référence aux univers de science-fiction ou encore aux romans de George Orwell. ', 'Que ressentez-vous face à cette œuvre ?'),
(4, 'FERNANDO FERREIRA', 83, 'Né au Portugal le 9 décembre 1961, Fernando Ferreira a émigré avec ses parents dans le nord de la France en 1974. Son parcours artistique débute à l\'âge de seize ans lorsqu\'il entame des cours de peinture par correspondance et se consacre à la reproduction de peintures de maîtres. C’est ensuite à 25 ans qu’il peindra ses propres tableaux.\r\nIl a commencé à peindre en plein air ce qu’il le touchait pour continuer en peignant dans son atelier des émotions', 'Installé dans la Drôme depuis 1987, Fernando a développé son art tout en travaillant en parallèle en tant que menuisier. \r\n\r\nFormé par la fédération compagnonnique des métiers du bâtiment, il devient peintre décorateur. Son parcours artistique est marqué par de nombreux prix, témoignant de la reconnaissance de son travail dans des événements artistiques majeurs tels que les Picturales de Bourg-de-Péage, le Salon International de Vittel, ou encore le Salon des Amis des Arts à Pont-de-Chéruy.\r\n\r\nIl s’inspire de lieux, d’architecture, d’ambiance lumineuse, de ressenti, de la nature et de ces émotions mais il a aussi été très inspiré par l\'artiste Rembrandt\r\n', 'Fernando Ferreira s\'exprime à travers la peinture à l\'huile sur toile. Son art semble chercher à révéler \"l\'invisible\". Cette approche artistique peut être interprétée comme une exploration des dimensions cachées, des émotions sous-jacentes ou des aspects souvent négligés de la réalité. Son œuvre artistique reflète probablement cette quête de transcender la surface visible pour capturer des éléments plus profonds et subtils de la réalité ou des sentiments.', 'fernando/bg-fernando.png', 'uk7JcKaUEqE', 'fernando/audio_fernando.wav', 'fernando/en-attendant-le-pianiste.png', 'fernando/ambiance-en-ville.png', 'fernando/la-parade.png', 'Ambiance en ville', 'La parade', 1, '', 'Quel type de musique pensez-vous que la violoniste joue ? '),
(5, 'ZiB', 62, 'ZIB, artiste française née en 1962 à Lorient, incarne une créatrice passionnée depuis son enfance, éveillée à l\'art, la musique et la peinture. Ses premières incursions artistiques l\'ont menée vers la musique en orchestre et l\'animation de rue, tout en gardant ses pinceaux toujours à proximité. \r\n\r\nSon parcours artistique s\'est façonné à travers divers ateliers de peinture, une formation de 7 ans à l\'école Martenot, ainsi qu\'une année d\'apprentissage avec une peintre professionnelle et une formation aux Beaux-Arts, explorant ainsi différentes techniques telles que les techniques mixtes et l\'acrylique.', 'ZIB, puisant son inspiration dans ses racines bretonnes, les lumières de la Côte d\'Azur, et ses 7 années d\'influence africaine lors de sa résidence, crée des toiles multicolores, véritables mélanges d\'influences. Son univers artistique se caractérise par des couleurs vives et joyeuses, mettant en avant des thèmes tels que la nature, la mer, les animaux et l\'écologie. La lumière et le soleil, des éléments constants dans ses œuvres, structurent les moments de la journée et les lieux présents sur ses toiles.\r\n', 'Animée par une source infinie d\'inspiration tirée de la nature, ZIB adopte une approche semi-abstraite dans son art. Bien que ses compositions soient principalement figuratives, elles arborent un aspect abstrait distinctif. La couleur, élément central de son travail, crée des visions kaléidoscopiques de tons purs, capturant ainsi les nuances changeantes de la lumière. À travers la superposition de paysages et la fusion de formes géométriques avec des sujets marins ou floraux, elle élabore des œuvres uniques.\r\n\r\nZIB joue avec la frontière entre réalisme et abstraction, invitant le spectateur à découvrir des détails cachés dans les rêves exubérants qu\'elle peint. Son art, imprégné d\'une inspiration colorée et diversifiée, offre une exploration visuelle et émotionnelle des multiples facettes de la nature et de la vie.', 'zib/bg-zib.png', 'Xzi7RUcnK4w', 'zib/audio_zib.wav', 'zib/porquerolles-plage.png', 'zib/reve-dun-soir-dete-a-toulon.png', 'zib/laigle-a-la-tete-dor.png', 'Rêve d\'un soir d\'été à Toulon', 'L’aigle à la tête d’or', 1, '', 'Qu’est-ce que ces œuvres vous font-elles ressentir ?  '),
(6, 'CATHERINE PUGEAT', 79, 'Catherine Pugeat, artiste française, a développé sa passion pour l\'art dès son plus jeune âge, à travers la découverte du dessin et de la peinture à l\'huile dans l\'atelier de son grand-oncle, un enseignant d\'arts plastiques et peintre amateur. Cette première immersion dans le monde artistique a façonné son parcours éducatif jusqu\'au baccalauréat, lui offrant l\'opportunité de pratiquer l\'art tant à titre personnel qu\'en tant que professeur des écoles.', 'En 2008, Catherine Pugeat a entamé un travail artistique plus sérieux, débutant avec le dessin au fusain et à la pierre noire dans l\'atelier de Shahram Nabati, un artiste peintre iranien. Après avoir exploré cette technique, elle s\'est tournée vers la peinture à l\'huile en reproduisant des tableaux de maîtres pour apprendre la technique. À partir de 2012, elle a commencé à créer ses propres œuvres d\'art, inspirées de son parcours et de ses réflexions.\r\n', 'Les peintures de Catherine Pugeat ont été exposées à l\'échelle nationale et ont valu à l\'artiste plusieurs distinctions. Sa démarche artistique est centrée sur la remise en question du mouvement de la vie et de l\'énergie vitale. À travers chaque toile, elle dissèque visuellement et émotionnellement le sujet pour mieux le comprendre et l\'expérimenter. Son objectif est de saisir l\'essence même de la vie, exprimant cette urgence d\'« arracher la vie au néant » en créant des œuvres qui captent l\'attention et résonnent avec émotion et intensité.\r\n\r\n', 'pugeat/bg-pugeat.png', 'O9FXfCGt0KQ', '', 'pugeat/mettre-les-voiles.png', 'pugeat/fulgurance.jpeg', 'pugeat/eblouissement.jpeg', 'Fulgurance', 'Eblouissement', 1, '', 'Que vous inspirent ces couleurs ? '),
(7, 'JEAN-MICHEL CORDIER', 152, 'Né au Burkina Faso en 1972, Jean-Michel Cordier réside actuellement dans la région d\'Aix-en-Provence. Baigné dans un environnement familial où la peinture occupe une place prépondérante, il a grandi au sein d\'une famille d\'artistes professionnels. Son apprentissage artistique a débuté en autodidacte, observant, expérimentant et échangeant avec ces peintres qui l\'entouraient. Pour lui, peindre représente un moyen de partager des émotions, de créer et d\'explorer.', 'L\'enfance de Jean-Michel en Afrique fait partie intégrante de son identité, et il revendique cette origine par une quête d\'authenticité. Il cherche à retrouver dans son art la puissance émanant des portraits, totems et sculptures des arts primitifs qui ont marqué son histoire. Sa préférence pour la peinture sur bois, les grattages, les collages et le travail de la matière témoigne de son intérêt pour l\'équilibre entre formes géométriques et couleurs.\r\n\r\n', 'La démarche artistique de Jean-Michel Cordier est le fruit de multiples influences, entre passé, racines et convictions. Son univers artistique est un partage, une exploration de ses expériences et de ses origines. Sa peinture semble être une quête d\'authenticité, une tentative de retrouver la force et la signification des arts primitifs tout en incorporant des techniques modernes pour créer un équilibre visuel unique entre formes et couleurs. Tout  se passe dans son atelier, son “laboratoire”, où il travaille et expérimente des techniques.', 'cordier/bg-cordier.png', 'GSgMSfYpznE', 'cordier/audio_cordier.wav', 'cordier/sentinelles.png', 'cordier/graffiti.jpg', 'cordier/senoufo.jpg', 'Graffiti', 'Senoufo', 1, '', 'Que vous inspire ce deuxième personnage ? ');

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
(1, 'La Cocotte de Barcelone', 'aklarousse/cocotte-barcelone.jpeg', '100x100', 'La Cocotte de Barcelone', 'primary', 1),
(2, 'Dionysos', 'breandon/dionysos.png', 'Unknown', 'Dionysos', 'primary', 2),
(3, 'Des villes et des hommes', 'ngotan/des-villes-et-des-hommes.png', '100x100cm', 'Des villes et des hommes', 'primary', 3),
(4, 'En attendant le pianiste', 'fernando/en-attendant-le-pianiste.png', '130x100cm', 'En attendant le pianiste', 'primary', 4),
(5, 'Porquerolles Plage', 'zib/porquerolles-plage.png', '50x40cm', 'Porquerolles Plage', 'primary', 5),
(6, 'Mettre les voiles', 'pugeat/mettre-les-voiles.png', '80x80cm', 'Mettre les voiles', 'primary', 6),
(7, 'Sentinelles', 'cordier/sentinelles.png', '50x40cm', 'Sentinelles', 'primary', 7);

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
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `artwork_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
