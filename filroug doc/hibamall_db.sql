-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 31 août 2020 à 17:59
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
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(18, 'Smartphone débloqué', 'Smartphone débloqué 4G, Blackview® A60 Pro (2020) Ecran 6,1 Pouces Android 9.0, 3Go RAM+16Go ROM Dual SIM Téléphone Mobile Double caméra 8MP+5MP, Batterie 4080mAh - Reconnaissance Faciale/Fingerprint', 'https://images-na.ssl-images-amazon.com/images/I/71c0XZ-WV5L._AC_SL1500_.jpg', '★ 【Ecran FullView 6,1\" Waterdrop HD téléphone portable débloqué】Le tout dernier écran à encoche au sommet éclate sur le format d\'image 6,1 pouces HD + 19: 9, Écran goutte de rosée offrant un large champ de vision et une prise en main confortable. Le petit Blackview A60 Pro Smartphone pas cher 4g avec grand écran équipé assure un contenu couvert maximum.\r\n★ 【Android 9.0, processeur Helio A22, 3 Go + 16 Go】Grâce au rapport 19,2: 9 de l\'affichage plein écran de 6,1\"et à la courbure de, Blackview A60 Pro (2019) smartphone débloqué offre une expérience tactile confortable, parfaite pour une utilisation à une main. 3 Go de mémoire garantit un fonctionnement fluide, avec peu de chaleur et une faible consommation d\'énergie. En outre, 16 Go de mémoire (256 Go extensible) suffisent pour répondre aux exigences de base.\r\n★ 【Double caméra 8MP+5MP + batterie 4080 mAh】Smartphone Débloqué Blackview A60 Pro (2019) est livré avec une caméra double 8MP et 5MP, une caméra frontale pour des selfies encore plus beaux - avec flou d\'arrière-plan et de nombreux autres effets beauté . Equipé d\'une batterie 4080 mAh, grande capacité de batterie, temps de veille plus long; Lire des nouvelles, regarder des vidéos, utiliser le GPS et jouer à des jeux.\r\n★ 【Identité faciale + Déverrouillage par empreinte digitale】Le smartphone pas cher 4g déverrouillage du visage permet de déverrouiller votre Blackview A60 Pro (2019) de manière simple et sécurisée. Le smartphones et téléphones portables débloqués utilise l\'algorithme le plus avancé pour accélérer le processus de déverrouillage. Globalement, votre visage unique est le mot de passe parfait - un simple coup d\'œil, et votre identité peut être reconnue\r\n★ 【Triple emplacement, 2 Nano SIM + 1 MicroSD】Ajoute un chariot triple pour le téléphone mobile Blackview A60 Pro (4G), ce qui signifie que vous n\'avez plus à choisir entre 2 SIM, 1 SIM et un microSD. Maintenant, vous pouvez garder vos sims actifs et étendre l’espace de votre smartphone (jusqu\'à 256 Go). Finis les soucis des vacances, des voyages d\'affaires et des voyages d\'affaires internationaux à l\'étranger. Il suffit de prendre 1 téléphone portable pas cher pour les longs trajets.', 75, 75, 0, '#000000', '#FFD700', '#800000', 'https://images-na.ssl-images-amazon.com/images/I/61cwycpY7vL._AC_SL1001_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61tlP2-8mbL._AC_SL1001_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61DmLo9Tx-L._AC_SL1001_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61Z0AGK9eVL._AC_SL1001_.jpg', 1, 0),
(19, 'xiaomi Redmi Note 8', 'xiaomi Redmi Note 8 4GB 64GB White', 'https://images-na.ssl-images-amazon.com/images/I/510GdVKLkfL._AC_SL1000_.jpg', 'Apparence: Smartphone Xiaomi Redmi Note 8 avec écran de largage FHD + Dot de 6,3 \", corps en verre 2,5D, menton plus petit, bord plus étroit, taux de remplissage de l\'écran supérieur à 90%. Conception aérodynamique 3D incurvée à 4 côtés. confortablement dans la main.\r\nObjectif de la caméra: Caméra selfie 13 MP avec mode portrait AI avec réglage du flou d\'arrière-plan. Selfie parfait à tout moment. La caméra principale avec résolution ultra haute résolution 48MP + objectif ultra grand angle 8 ° 120 ° + objectif ultra macro 2MP 2cm + capteur de profondeur de caméra 2MP Quad.\r\nBatterie 4000 mAh et charge rapide: batterie haute capacité 4000 mAh, prend en charge la charge rapide avec un câble de 18 watts. Prend en charge 2 heures de charge à 100%.\r\nHaut-parleur: 1217 haut-parleurs super linéaires, système de son intelligent, volume externe élevé, récepteur haute puissance 0810, les appels dans des environnements bruyants peuvent être entendus clairement. Pas seulement fort, bonne qualité sonore. Avec des capacités cachées, suppression de la poussière sonore du haut-parleur.\r\nDual Nano SIM + Micro SD: utilisez deux cartes SIM en même temps et développez l\'espace de stockage, ce qui vous permet de changer de carte à tout moment. Les deux cartes peuvent accéder simultanément à la connectivité 4G et peuvent ne pas être disponibles dans toutes les régions. Seuls certaines régions et certains opérateurs de télécommunication prennent en charge le protocole VoLTE.', 143, 143, 10, '#000000', '#FFFFFF', '#FD6C9E', 'https://images-na.ssl-images-amazon.com/images/I/61Dx6R9szdL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61G02OGT4GL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61Dx6R9szdL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71gQ9F-x2OL._AC_SL1000_.jpg', 1, 0),
(20, 'Nokia 105 2019', 'Nokia 105 2019, Téléphones Portable, (Ecran QQVGA 1.8 Pouces - GSM/Dual Band - Propriétaire) [Italia] Bleu', 'https://images-na.ssl-images-amazon.com/images/I/61NPzKurYfL._AC_SL1500_.jpg', 'Design classique et ergonomique qui tient mieux dans votre main\r\nJusqu\'à quinze heures d\'autonomie en conversation et un mois en mode veille\r\nL\'écran QVGA de 1,8 po facilite la visualisation\r\nLe clavier de style îlot facilite la saisie et la numérotation', 55, 70, 10, '#000000', '#FFFFFF', '#FF0000', 'https://images-na.ssl-images-amazon.com/images/I/71UolqZvAvL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71Hbq8IBhiL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61wY%2BaI4FFL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71MHo0Tj99L._AC_SL1500_.jpg', 1, 1),
(21, 'Huawei P30 Lite', 'Huawei P30 Lite Smartphone débloqué 4G (6,15 pouces - 128Go - Double Nano SIM - Android 9.0) Midnight Black [Version Française]', 'https://images-na.ssl-images-amazon.com/images/I/61o6BJI5-3L._AC_SL1200_.jpg', 'Triple caméra avec capteur principal de 48MP\r\nCapteur ultra grand angle\r\nEcran Huawei Dewdrop de 6, 15\" et résolution FHD+\r\nDesign et couleurs avant-gardistes\r\nProcesseur Kiri, 710 Octo-Core et 128Go de stockage\r\nTaux d\'occupation de l\'éccran:90%', 179, 203, 10, '#007FFF', '#007FFF', '#007FFF', 'https://images-na.ssl-images-amazon.com/images/I/61SUO4f2eZL._AC_SL1200_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/617cdhC7SUL._AC_SL1200_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/616fl-e6onL._AC_SL1200_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61CFo3s8YLL._AC_SL1200_.jpg', 1, 1),
(22, 'Rampow Adaptateur', 'Rampow Adaptateur USB C vers USB OTG 3.1 - Adaptateur USB Type C Mâle vers USB A Femelle pour Samsung S8/S9/S10, MacBook Pro, Google Pixel/Chromebook, Huawei P20/P30 [Lot de 2] Gris Sidéral', 'https://images-na.ssl-images-amazon.com/images/I/71FOuv-Pt3L._AC_SL1500_.jpg', '1.Transmitter Mode (TX): Wirelessly transfer audio from your non-Bluetooth TV, home stereo system, or CD player to your Bluetooth headphones or speakers.\r\n\r\n2.PC Audio Transmitter Mode: Wirelessly transfer audio from the PC, notebook to Bluetooth headset or speaker through USB port, no audio cable is required.\r\n\r\n[USB OTG Soutenu] - L\'adaptateur USB C vers USB A Rampow peut facilement connecter vos périphériques USB A (clavier, souris, disque flash USB, lecteur de carte, disque dur, contrôleur de jeu) aux téléphones et tablettes USB C équipés. Une option rentable pour utiliser au maximum et de manière créative vos périphériques USB précédents.\r\n[Transfert de Données Très Rapide] - USB 3.1 Gen 1 très rapide offre une vitesse de transfert incroyable (jusqu\'à 5Gbps). Les données sont transférées 10x plus rapidement que les USB 2.0 traditionnels (480Mbps). Remplissez votre téléphone avec vos vidéos et photos préférées en quelques secondes. Compatible avec USB 3.0 / 2.0.\r\n[Connecteur Réversible Premium] - L’adaptateur USB type C peut être installé dans n\'importe quelle direction pour des connexions sans tracas. L’adaptateur type C sans soudure et les contacts dorés offrent une conductivité exceptionnelle sans la perte de données. Fabriqué pour supporter plus de 10 000 insertions.\r\n[Léger et Compact] - La taille de poche et la portabilité font cet adaptateur USB C facile à transporter en tout temps. Une conception minimaliste et élégante va bien avec tous les appareils électroniques.\r\n[Garantie à Vie] - Les adaptateurs USB C Rampow sont couverts par une garantie à vie. Veuillez nous contacter pour toute question ou préoccupation. Nous sommes le distributeur exclusif et le propriétaire de la marque \"Rampow\". Nous n\'avons jamais accordé d\'autorisation à d\'autres vendeurs pour vendre notre marque ni nous les avons vendus pour revente. Assurez-vous de choisir Vendu par RAMPOW-FR!', 6, 6, 150, '#000000', '#000000', '#000000', 'https://images-na.ssl-images-amazon.com/images/I/71R07NYjidL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61TuZkkyMjL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/618AtVXmekL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/610c99fsZsL._AC_SL1500_.jpg', 2, 0),
(23, 'NETGEAR Routeur', 'NETGEAR Routeur WiFi Nighthawk Pro Gaming (XR700), AD7200 Bi-Bandes Quad Stream Gigabit, 4 Ports Ethernet Gigabit, 1 Port Ethernet 10G, Filtre geographique MU-MIMO, Technologie Netduma', 'https://images-na.ssl-images-amazon.com/images/I/51rJ%2Be31ykL._AC_SL1000_.jpg', 'NETGEAR Routeur WiFi Nighthawk Pro Gaming (XR700), AD7200 Bi-Bandes Quad Stream Gigabit, 4 Ports Ethernet Gigabit, 1 Port Ethernet 10G, Filtre geographique MU-MIMO, Technologie Netduma\r\n', 279, 474, 10, '#000000', '#000000', '#000000', 'https://images-na.ssl-images-amazon.com/images/I/61lsqvJH-BL._AC_SL1350_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/51hk-vmxx8L._AC_SL1350_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61ABISLebaL._AC_SL1350_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/814VcBGqvbL._AC_SL1500_.jpg', 2, 0),
(24, 'Gaoominy 5', 'Gaoominy 5 en 1 Hub C USB, USB Type C 3.1 vers 4K Hdmi Adaptateur, USB- C A Station d\'accueil Multiport Hdmi/USB 3.0 USB C Pd Port pour Macbook/Pro, Spectre, (Noir)', 'https://images-na.ssl-images-amazon.com/images/I/411GdWnBViL._AC_.jpg', '3. 3 * usb3.0 Femme\r\n2. Sortie: 1 x HDMI femelle\r\n1. Entree: 1 x male de type c\r\n4. 1 * Type-c femelle', 15, 20, 10, '#000000', '#000000', '#000000', 'https://images-na.ssl-images-amazon.com/images/I/61STF1f9nUL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/31tnrA%2BE0pL._AC_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/4198DxVEKCL._AC_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/41KS2gdf6XL._AC_.jpg', 2, 1),
(25, 'Aceele Hub USB', 'Aceele Hub USB C,Hub 11-en-1 Multifuntion,USB C Hub avec HDMI et VGA Dual Display,4 Ports USB, 1 GPS Ethernet,Audio,PD 60-100W, Lecteur de Carte SD&TF pour Macbook Pro 2020 etc', 'https://images-na.ssl-images-amazon.com/images/I/71xc68-bSAL._AC_SL1500_.jpg', '【Cadeau utile pour la fête des pères】 Connectez-vous à votre MacBook ou à d\'autres périphériques USB-C avec un concentrateur de type multiport c comprenant un port Ethernet, un port PD 3.0, un port HDMI 4K / 30Hz et un port VGA 1080P / 60Hz, un lecteur de carte SD, un lecteur de carte TF, Prise audio 3,5 mm, 2 ports USB 3.0 et 2 ports USB 2.0.\r\n【Synchronisation vidéo HDMI et VGA】Prise en charge HDMI jusqu’à 4K 30Hz (3840x2160), le port VGA prend en charge jusqu’à 1080P à 60Hz, compatibilité descendante avec 1080P, 1080I, 720P. Le port HDMI prend en charge les téléviseurs LCD grand écran ou les écrans compatibles avec une sortie 4K Max. Partagez l\'affichage avec votre famille ou vos amis sur un écran plus grand.\r\n【Transfert de données super rapide】Deux ports USB3.0 prenant en charge des vitesses de transmission allant jusqu\'à 5 Gbps, connectez-vous à votre smartphone, votre tablette et votre disque dur pour un transfert de données sans effort. Deux ports USB 2.0 pour une connexion plus stable avec le clavier et la souris. Intégré dans les logements SD et TF pour un accès aisé aux fichiers de la carte mémoire SD et Micro SD universelle.\r\n【Audio et micro PD & 3.5mm】Prise en charge de ce concentrateur de type c USB Chargement d\'un ordinateur portable avec un chargeur PD d\'origine, la puissance maximale autorisée est de 65 W. Le standard de prise de concentrateur est conforme à la norme internationale CTIA.\r\n【Appareils compatibles】:Compatible avec la plupart des ordinateurs portables, téléphones intelligents et tablettes avec port C USB. Tels que Mac Book Pro/Macbook air 2020, DELL XPS, HP Spectre X360, Google Chromebook Pixel, Lenovo yoga900 / 910, Samsung Chromebook Plus, HUAWEI MATEBOOK, HUAWEI P30, HUAWEI MATE 10.', 44, 44, 10, '#000000', '#000000', '#000000', 'https://images-na.ssl-images-amazon.com/images/I/714BQ7TXNhL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71C0-2tPVXL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71lYzk3DJRL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71qx0qcouOL._AC_SL1500_.jpg', 2, 0),
(26, 'Memory PC Gamer', 'Memory PC Gamer AMD Ryzen 5 2600 6X 3,4 GHz, 16 Go DDR4, 240 Go SSD + 2000 Go HDD, NVIDIA GeForce GTX 1660 Super 6Go pc Gaming', 'https://images-na.ssl-images-amazon.com/images/I/61lEcCwwb1L._AC_SL1500_.jpg', 'Ce PC haut de gamme qui offre des composants de marque parfaitement coordonnés. La NVIDIA GeForce GTX 1660 SUPER 6Go vous êtes bien préparés pour tous les derniers titres de jeux. opération chuchotement silencieux, que ce soit les jeux, retouche d\'images et de la vidéo et le streaming en direct. Des programmes tels que Adobe Lightroom ou Photoshop fonctionnent ici rapidement\r\nLe processeur AMD Ryzen 5 2600 offre des performances optimales pour les applications de jeu et multimédia. Avec le processeur 6 cur rapide et jusqu\'à la vitesse d\'horloge de 4.20GHz tous les programmes actuels peuvent être exécutés rapidement. le système est arrondi visuellement par le nouveau boîtier de cyclone RGo avec interrupteur à LED pour le réglage des couleurs de réglage avant indivual.\r\nLe PC de la mémoire avec plein 6 curs - Power vous fournit que vous avez besoin au bureau ou à la maison avec toutes les vitesses nécessaires. Les connexions plus récentes telles que SATA3 / M.2 et USB3.1 ainsi que Gigabit LAN ne laissent rien à désirer. Nous avons également entravions 3000MHz ultra-rapide DDR4 mémoire que la performance globale nettement améliorée.\r\nEn outre, la carte mère MSI a une fente M.2 SSD prospectifs. Vous pouvez installer les disques SSD sont à jour 10 fois plus rapide que les disques SSD traditionnels et jusqu\'à environ 20 fois plus rapide que les disques durs traditionnels. Optez pour la dernière génération de processeurs d\'AMD. Ryzen établit de nouvelles normes en matière de puissance de traitement.\r\nChaque système PC est fabriqué individuellement dans le nord de l\'Allemagne et testé avant expédition. Nous installons Windows 10 sur ce PC de jeu directement devant et complètement équipé sans logiciel publicitaire. Pour nos clients français, nous installons Windows directement en français.', 700, 700, 0, '#000000', '#FFFFFF', '#808080', 'https://images-na.ssl-images-amazon.com/images/I/71BdZJeErSL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/81bouWfRDSL._AC_SL1500_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/311GgTj7l9L._AC_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/71-pWgESBLL._AC_SL1500_.jpg', 3, 0),
(27, 'ASUS PC Portable', 'ASUS PC Portable Gamer AMD Ryzen 5 -', 'https://images-na.ssl-images-amazon.com/images/I/61NSWjKjRXL._AC_SL1198_.jpg', 'Ordinateur portable 15.6\'\' (1920x1080)\r\nAMD Ryzen 5 (4x 2.10GHz/ 3.70GHz) -\r\nRam 8Go - 512Go SSD\r\nNvidia GTX1050M (2Go dédié) - HDMI\r\nWindows 10 Home 64 bits - Clavier AZERTY avec Pavé numérique', 699, 799, 10, '#000000', '#FFFFFF', '#808080', 'https://images-na.ssl-images-amazon.com/images/I/51sZwIYIX1L._AC_SL1198_.jpg', '', '', '', 3, 1),
(28, 'HUAWEI MateBook', 'HUAWEI MateBook D 15 2020 PC Portable 15.6\'\' 1080p FHD (AMD Ryzen 5 3500U, RAM 8Go, SSD 256Go, Windows 10 Home, Clavier Français AZERTY), Argent', 'https://images-na.ssl-images-amazon.com/images/I/61NCF56lnfL._AC_SL1000_.jpg', 'Ecran FullView de 15.6 pouces et épaisseur de 16.9mm\r\nContinuité multi-écrans, pour une projection de votre smartphone directement sur votre PC\r\nCapteur d\'empreinte digitale intégré au bouton d\'alimentation\r\nProcesseur AMD Ryzen 5 3500U pour des performances exceptionnelles\r\nCaméra rétractable pour plus d\'immersion dans votre écran et une confidentialité accrue', 524, 524, 10, '#000000', '#000000', '#000000', 'https://images-na.ssl-images-amazon.com/images/I/61DUoJ-aN1L._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/51Mja-1HAtL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/61LcF4uycCL._AC_SL1000_.jpg', 'https://images-na.ssl-images-amazon.com/images/I/41N6SGwQLtL._AC_SL1000_.jpg', 3, 0),
(29, 'Dell Inspiron 14', 'Dell Inspiron 14 5490 Ordinateur Portable 14\" Full HD Silver (Intel Core i5, RAM 8Go, 512Go SSD, Intel UHD Graphics, Windows 10H) Clavier AZERTY Français', 'https://images-na.ssl-images-amazon.com/images/I/81b1%2Bu%2BOBdL._AC_SL1500_.jpg', 'Processeur Intel Core i5 de 10e génération- 1,6 GHz - Turbo : 4,2 GHz, 8 Go DDR4-SDRAM, Intel UHD Graphics, 512 Go SSD, Windows 10 Home\r\nGARANTIE 2 ANS CONSTRUCTEUR. Connectivité : 1 Port USB 2.0, 2 ports de type A USB 3.2, 1 port de type C USB 3.2, HDMI, Port Combo casque / microphone\r\nLECTEUR D’EMPREINTES DIGITALES - Clavier rétroéclairé - ECRAN FULL HD 35,6 cm (14\") 1920 x 1080 pixels\r\nDELL CINEMA - L’expérience ultime de cinéma privé: Une expérience cinématographique à portée de main avec des couleurs, une qualité de streaming et un son incroyables\r\nDELL MOBILE CONNECT - Intégration PC/smartphone fluide : la technologie couple votre smartphone à votre ordinateur portable pour vous permettre d’accéder à plusieurs appareils sans vous déconcentrer', 50, 50, 10, '#000000', '#000000', '#000000', '', '', '', '', 3, 0),
(30, 'Office 2019', 'Office 2019 Professional Plus 32/64 bits | Licence pour 1PC ( seulement pour windows 10 ) | [Téléchargement] - Livraison 2-6h par E-mail', 'https://images-na.ssl-images-amazon.com/images/I/61GtZ7ro06L._AC_SL1100_.jpg', '--Seulement pour windows 10--Livraison 2-6h par email--https://setup.office.com/\r\nAucun support physique (DVD / USB / CD) ne vous sera envoyé - Veuillez vérifier l\'arrivée de votre licence dans votre messagerie Amazon\r\nvous pouvez trouver une licence e-mail :connectez-vous à votre compte Amazon et cliquez sur: Votre compte(En haut à droite avec votre nom)-Centre de messagerie -**Messages liés aux acheteur/vendeur** ???????????????? www.amazon.fr/gp/message ????????????????\r\nLe meilleur de Microsoft désormais puissamment intégré: Microsoft Word 2019, Microsoft Excel 2019, Microsoft PowerPoint 2019, OneNote, Outlook\r\nClé de Licence Lifetime originale pour Microsoft Office 2019 Professional Plus 32Bit et 64Bit --Version perpétuelle ---Lien officiel Microsoft pour l\'installation du office 2019 :https://setup.office.com/', 40, 40, 10, '#000000', '#000000', '#000000', '', '', '', '', 4, 0);

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
-- Index pour la table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
