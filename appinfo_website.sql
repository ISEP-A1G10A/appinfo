-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 11 juin 2018 à 16:38
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `appinfo_website`
--

-- --------------------------------------------------------

--
-- Structure de la table `gear`
--

CREATE TABLE `gear` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `reference` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `room` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gear`
--

INSERT INTO `gear` (`id`, `type`, `reference`, `label`, `room`, `state`) VALUES
(1, 1, 'Q-0000003232', 'salon_température', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `gear_action`
--

CREATE TABLE `gear_action` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `instruction` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gear_category`
--

CREATE TABLE `gear_category` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `gear_company`
--

CREATE TABLE `gear_company` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gear_company`
--

INSERT INTO `gear_company` (`id`, `label`) VALUES
(1, 'domisep');

-- --------------------------------------------------------

--
-- Structure de la table `gear_event`
--

CREATE TABLE `gear_event` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `frame_type` int(11) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `request_type` int(11) NOT NULL,
  `sensor_type` int(11) NOT NULL,
  `sensor_number` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `frame_number` int(11) NOT NULL,
  `checksum` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gear_event`
--

INSERT INTO `gear_event` (`id`, `user`, `frame_type`, `card_number`, `request_type`, `sensor_type`, `sensor_number`, `value`, `frame_number`, `checksum`, `date_time`) VALUES
(73, 1, 1, 'G10A', 1, 3, 1, 25, 0, 66, '2018-06-08 14:43:15'),
(74, 1, 1, 'G10A', 1, 3, 1, 27, 1, 69, '2018-06-08 14:47:10'),
(75, 1, 1, 'G10A', 1, 3, 1, 30, 2, 64, '2018-06-08 16:03:59'),
(76, 1, 1, 'G10A', 1, 4, 2, 32, 3, 69, '2018-06-08 16:13:12');

-- --------------------------------------------------------

--
-- Structure de la table `gear_type`
--

CREATE TABLE `gear_type` (
  `id` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `serial_number` varchar(515) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `gear_type`
--

INSERT INTO `gear_type` (`id`, `company`, `label`, `serial_number`, `category`) VALUES
(1, 1, 'sensor-temperature', '00000032', 1);

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `main_user` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `surface` varchar(11) NOT NULL,
  `address_line_1` varchar(1023) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address_line_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address_zip_code` varchar(10) NOT NULL,
  `address_city` varchar(127) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address_country` varchar(127) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`id`, `main_user`, `type`, `surface`, `address_line_1`, `address_line_2`, `address_zip_code`, `address_city`, `address_country`, `label`) VALUES
(1, 2, 1, '32', '32 rue de l\'ISEP', 'Appartement 32', '75000', 'Paris', 'France', 'Ma maison'),
(2, 26, 1, '35', '10 rue de l\'ISEP', 'appartement 10', '75001', 'Paris', 'France', 'Ma 1 maison '),
(3, 26, 1, '30', '45 rue isep', 'app 5', '75000', 'Paris', 'France', 'm2');

-- --------------------------------------------------------

--
-- Structure de la table `home_type`
--

CREATE TABLE `home_type` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `home_type`
--

INSERT INTO `home_type` (`id`, `label`) VALUES
(1, 'house');

-- --------------------------------------------------------

--
-- Structure de la table `link_gear_action_gear_category`
--

CREATE TABLE `link_gear_action_gear_category` (
  `id` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `link_user_home`
--

CREATE TABLE `link_user_home` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `home` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `link_user_home`
--

INSERT INTO `link_user_home` (`id`, `user`, `home`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `object` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message_object`
--

CREATE TABLE `message_object` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `email_prefix` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `room_type`
--

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `room_type`
--

INSERT INTO `room_type` (`id`, `label`) VALUES
(1, 'living_room');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `type`, `email`, `phone`, `password`) VALUES
(1, 'test_admin_sys', 'test_admin_sys', 1, 'admin_sys@test.com', '0000000000', '$6$rounds=3232$yRyJDM8YPUMMRAJF$80d8yrKfQdx.BEleBxPuCxJh2IJp3IRJM32poxmYJcZ/MBoyvYPSVN2MeP.9Yrl.P1DBSkJ9mbBz0DhDeckRc0'),
(2, 'test_client', 'test_client', 3, 'client@test.com', '0000000000', '$6$rounds=3232$yRyJDM8YPUMMRAJF$80d8yrKfQdx.BEleBxPuCxJh2IJp3IRJM32poxmYJcZ/MBoyvYPSVN2MeP.9Yrl.P1DBSkJ9mbBz0DhDeckRc0'),
(3, 'test_client2', 'test_client2', 4, 'client2@test.com', '0000000000', '$6$rounds=3232$yRyJDM8YPUMMRAJF$80d8yrKfQdx.BEleBxPuCxJh2IJp3IRJM32poxmYJcZ/MBoyvYPSVN2MeP.9Yrl.P1DBSkJ9mbBz0DhDeckRc0'),
(4, 'test_admin_sav', 'test_admin_sav', 2, 'admin_sav@test.com', '0000000000', '$6$rounds=3232$yRyJDM8YPUMMRAJF$80d8yrKfQdx.BEleBxPuCxJh2IJp3IRJM32poxmYJcZ/MBoyvYPSVN2MeP.9Yrl.P1DBSkJ9mbBz0DhDeckRc0'),
(26, 'florian', 'pabich', 3, 'florian.pabich@yahoo.fr', '0600000000', '$6$rounds=3232$yRyJDM8YPUMMRAJF$SW6zk5Y4.PKrXl7uEU50C5jczBTD3t2Zr17/1Rm4Xjeo14oCaD9kJ09ou3v8ixQ63h0eMeuMd.wNKClvR/Ac1.');

-- --------------------------------------------------------

--
-- Structure de la table `user_tempory_password`
--

CREATE TABLE `user_tempory_password` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `expiration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_type`
--

INSERT INTO `user_type` (`id`, `label`) VALUES
(1, 'admin_sys'),
(2, 'admin_sav'),
(3, 'user_main'),
(4, 'user_secondary');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `gear`
--
ALTER TABLE `gear`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gear_action`
--
ALTER TABLE `gear_action`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gear_category`
--
ALTER TABLE `gear_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gear_company`
--
ALTER TABLE `gear_company`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gear_event`
--
ALTER TABLE `gear_event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gear_type`
--
ALTER TABLE `gear_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `home_type`
--
ALTER TABLE `home_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `link_gear_action_gear_category`
--
ALTER TABLE `link_gear_action_gear_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `link_user_home`
--
ALTER TABLE `link_user_home`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message_object`
--
ALTER TABLE `message_object`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_tempory_password`
--
ALTER TABLE `user_tempory_password`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `gear`
--
ALTER TABLE `gear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `gear_action`
--
ALTER TABLE `gear_action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gear_category`
--
ALTER TABLE `gear_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gear_company`
--
ALTER TABLE `gear_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `gear_event`
--
ALTER TABLE `gear_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `gear_type`
--
ALTER TABLE `gear_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `home_type`
--
ALTER TABLE `home_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `link_gear_action_gear_category`
--
ALTER TABLE `link_gear_action_gear_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `link_user_home`
--
ALTER TABLE `link_user_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message_object`
--
ALTER TABLE `message_object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `user_tempory_password`
--
ALTER TABLE `user_tempory_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
