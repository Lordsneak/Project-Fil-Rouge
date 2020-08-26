-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 août 2020 à 00:34
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hibamall_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `annance`
--

CREATE TABLE `annance` (
  `id` int(11) NOT NULL,
  `annance_nom` varchar(255) NOT NULL,
  `annance_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annance`
--

INSERT INTO `annance` (`id`, `annance_nom`, `annance_image`) VALUES
(1, 'Slide 1', 'asset/img/slide/slide1.jpg'),
(19, 'slide3', 'asset/img/slide/slide4.jpg'),
(20, 'slide3', 'asset/img/slide/slide4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_icon`) VALUES
(1, 'Phones & Accessories', 'fa fa-mobile'),
(2, 'Electronics & Application', 'fa fa-television'),
(3, 'Comptures & Tablets', 'fa fa-tablet'),
(4, 'Office Products', 'fa fa-desktop');

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`) VALUES
(1, 'Azure', '#007FFF'),
(2, 'Black', '#000000'),
(3, 'Gold', '#FFD700'),
(4, 'Green', '#008000'),
(5, 'Maroon', '#800000'),
(6, 'Orange', '#FF6600'),
(7, 'Pink', '#FD6C9E'),
(8, 'Red', '#FF0000'),
(9, 'White', '#FFFFFF'),
(10, 'Gray', '#808080');

-- --------------------------------------------------------

--
-- Structure de la table `commenter`
--

CREATE TABLE `commenter` (
  `id` int(11) NOT NULL,
  `commonter_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `commonter_subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commenter`
--

INSERT INTO `commenter` (`id`, `commonter_name`, `email`, `commonter_subject`) VALUES
(1, 'Hamza', 'Hamza@gmail.com', 'WAAAALO\r\n\r\n  '),
(2, 'Ilyass', 'Ilyass@gmail.com', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_fullname` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `product_description` text NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_oldprice` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `color1` varchar(255) NOT NULL,
  `color2` varchar(255) NOT NULL,
  `color3` varchar(255) NOT NULL,
  `product_smallimage1` varchar(255) NOT NULL,
  `product_smallimage2` varchar(255) NOT NULL,
  `product_smallimage3` varchar(255) NOT NULL,
  `product_smallimage4` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `promo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_fullname`, `product_image`, `product_description`, `product_price`, `product_oldprice`, `product_quantity`, `color1`, `color2`, `color3`, `product_smallimage1`, `product_smallimage2`, `product_smallimage3`, `product_smallimage4`, `category_id`, `promo`) VALUES
(11, 'IWO 8 Lite Smart Watch', '', 'https://i.ebayimg.com/images/g/n7wAAOSwIJNeQ8cc/s-l1600.jpg', 'Risk', 28, 40, 0, '#000000', '#FD6C9E', '#000000', 'https://i.ebayimg.com/images/g/hiEAAOSwavReJaXk/s-l1600.jpg', 'https://i.ebayimg.com/images/g/CxQAAOSwMY9eJaZV/s-l1600.png', 'https://i.ebayimg.com/images/g/qHUAAOSwADReJaXk/s-l1600.jpg', 'https://i.ebayimg.com/images/g/QBMAAOSwDy1eJaXm/s-l1600.jpg', 1, 1),
(12, 'Samsung Galaxy A10e', '', 'https://images-na.ssl-images-amazon.com/images/I/41G0evZ4-VL._AC_.jpg', 'With a long lasting battery, the Galaxy A10e gives you more time to post, talk, text and share with friends and family\r\nKeep more with 32GB of built in memory; Expand your memory up to 512GB with a Micro SD card\r\nEnjoy an edge to edge view on a 5. 83\" Inf', 100, 130, 0, '#007FFF', '#000000', '#FFD700', 'https://images-na.ssl-images-amazon.com/images/I/51KTUH54%2BsL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/91umUATWMiL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/81kWtPDTaSL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71--wEAXT1L._AC_SL1500_.jpg', 0, 1),
(13, 'IWO 8 Lite Smart Watch', '', 'https://i.ebayimg.com/images/g/n7wAAOSwIJNeQ8cc/s-l1600.jpg', 'category_idcategory_idcategory_idcategory_idcategory_id', 28, 28, 0, '#007FFF', '#007FFF', '#007FFF', '', '', '', '', 1, 0),
(14, 'Galaxy Note 10', '', 'https://images-na.ssl-images-amazon.com/images/I/61jLpFaAiqL._AC_SL1500_.jpg', 'Samsung Galaxy Note 10, 256GB, Aura Black - Fully Unlocked (Renewed) ', 629, 700, 0, '#000000', '#008000', '#FF0000', 'https://images-na.ssl-images-amazon.com/images/I/61kS43gT3rL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61bmGu-owAL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/51ilkJ-VvRL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61Qf3dkpcbL._AC_SL1500_.jpg', 1, 0),
(15, 'Apple AirPods Pro 2019', 'Coque de protection en silicone pour Apple AirPods Pro 2019 (LED frontale visible) Noir', 'https://images-na.ssl-images-amazon.com/images/I/61hiW%2BdXJAL._AC_SL1200_.jpg', ' Coque AirPods Pro : compatible avec Apple Airpod Pro 2019.\r\nProtège les AirPods Pro pour éviter les chocs et les rayures.\r\nInstallation facile, mousqueton gratuit, LED visible sur le devant.\r\nFabriqué à partir de silicone élastique de haute qualité, surf', 139, 139, 0, '#008000', '#000000', '#FFFFFF', 'https://images-na.ssl-images-amazon.com/images/I/616GUjfOZ0L._AC_SL1200_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61bmGu-owAL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/51ilkJ-VvRL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61dcY%2BWfPrL._AC_SL1200_.jpg', 1, 0),
(16, 'Tablet 10.1 inch', 'Tablet 10.1 inch Android Tablet with 2GB+32GB, 3G Phone Tablets & Dual Sim Card & 2MP+ 5MP Dual Camera, Quad Core Processor, 1280x800 IPS HD Display,GPS, FM (Silver) ', 'https://images-na.ssl-images-amazon.com/images/I/61TnJmEb%2B3L._AC_SL1000_.jpg', ' 【3G Phone Call & 2.4G WIFI Connect】---The newessst tablet support 2pcs phone card insertion, enable you to call or send messages to anyone anywhere anytime even without wifi. The wifi connection perfect for fast connecting network .\r\n【Incredible Storage】--', 101, 101, 0, '#000000', '#FFD700', '#FFFFFF', 'https://images-na.ssl-images-amazon.com/images/I/618xdieYqKL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61-j-NaPzUL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71HlVEzHoCL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/712s0gKfzCL._AC_SL1000_.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`) VALUES
(1, 'Hamza', 'HamzaGh', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'hamza1ghounbaz@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annance`
--
ALTER TABLE `annance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commenter`
--
ALTER TABLE `commenter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annance`
--
ALTER TABLE `annance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commenter`
--
ALTER TABLE `commenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
