-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2017 at 02:36 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfonySmallAds`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(9500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photoPath` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `user_id`, `category_id`, `title`, `description`, `photoPath`, `endDate`) VALUES
(1, 2, 3, 'pierwsze edit3 edit33', 'pierwsze edit3', '20170228154653188.jpeg', '2017-02-05 13:25:00'),
(2, 2, 2, 'pierwsze22', 'pierwsze22', NULL, '2017-03-05 13:26:04'),
(3, 2, 6, 'testttttttt edit2', 'asdasd', NULL, '2017-03-05 14:26:30'),
(7, 1, 6, 'dla gołębi', 'dla gołębi', NULL, '2017-01-07 13:34:06'),
(8, 1, 1, 'dla jenor', 'dla jednor', '1201703021318132421.jpeg', '2017-03-07 13:34:24'),
(9, 3, 4, 'Pierwszy plan', 'Bardzo dobry plan, na pewno zadziała. 30zł płatne z góry na konto słupa.', '201702281359179846.jpeg', '2017-03-07 13:59:17'),
(10, 3, 4, 'drugi plan', 'jeszcze lepszy niz pierwszy', NULL, '2017-03-07 14:08:50'),
(11, 3, 1, 'pluszowy jednorozec mutant', 'ma 2 rogi i muczy', NULL, '2017-03-07 14:10:21'),
(12, 2, 4, 'admin admin', 'admin admin', '201702281526145990.jpeg', '2017-03-07 15:26:14'),
(13, 4, 6, 'ogłoszenie do gołębi', 'bedzie ze zdjeciem', '201702281602314958.jpeg', '2017-03-07 16:02:31'),
(14, 4, 3, 'moje nowe super ogłoszenie', 'zwyłu opis', '201702281751054365.jpeg', '2017-03-07 17:51:05'),
(15, 2, 1, 'gif test', 'gif test w jednorozcach', '201702282025135630.gif', '2017-03-07 20:25:13'),
(16, 1, 7, 'Doris Day Glass Bottom Boat', 'film na VHS, 15$ za sztukę', '201702282036584307.gif', '2017-01-07 20:36:58'),
(17, 1, 6, 'najnowsze', 'najnowxsze', NULL, '2017-03-07 21:46:05'),
(18, 2, 1, 'jednorożec pospolity', 'jednorożec pospolity, zwykły, za grosze', '201703011257582058.gif', '2017-03-08 12:57:58'),
(19, 2, 3, 'chomik w kocie, 2 w 1', 'niepowtarzalna okazja! dwa zwierzęta w jednej cenie w tym jedno z nich najedzone... 30zł', '201703011259443649.gif', '2017-03-08 12:59:44'),
(20, 1, 6, 'do archiwummmm', 'wqewefe', NULL, '2017-02-08 16:01:48'),
(21, 5, 3, 'grinpis', 'zielona siła edit', '201703011633437218.jpeg', '2017-03-08 16:32:04'),
(22, 5, 6, 'sag', 'dsfgdsfgdg', '201703011635303355.jpeg', '2017-03-08 16:35:30'),
(23, 1, 3, 'zwykłe ogłoszenie z długim tytułem', 'w3ww.kasd.kjc qaswd\'wijq\'wijdqd', '20170301180344599.gif', '2017-03-08 18:03:44'),
(24, 4, 3, 'Kot i chomik w promocji - niesamowita okazja!', 'Dwa zwierzaki w jednej cenie, promocja jest bardzo ograniczona czasowo. Jedno ze zwierząt jest najedzone.\r\n\r\n20zł za wszystko, info pod numerem 123123123. Pozdrawiam', '201703011811049219.jpeg', '2017-03-08 18:11:04'),
(25, 4, 1, 'nA 2 DNI', 'na 2 dni', NULL, '2017-03-03 21:27:24'),
(26, 4, 3, 'na 4 dni', 'na 4 dni', '201703012132268278.jpeg', '2017-03-05 21:32:26'),
(27, 4, 7, '33', '3333', '201703012137368427.png', '2017-03-08 21:37:36'),
(28, 4, 6, 'sfdhgfds', 'fdshgfdhgh', NULL, '2017-03-04 21:45:49'),
(29, 4, 4, 'fffffffffffffffffffffffffffffffff', 'fffffffffffffffffffffffffffffffffffff', 'ccwrcltd201703012146075166.jpeg', '2017-03-04 21:46:07'),
(30, 4, 1, '5t', '5t', '4201703012148397422.jpeg', '2017-03-04 21:48:39'),
(31, 1, 6, 'asdfsdf', 'sdfsdfsdf', NULL, '2017-03-07 14:37:05'),
(32, 1, 6, 'dsfg', 'sdsfsfsd', NULL, '2017-03-05 14:39:37'),
(33, 1, 6, '2www', '2www', '1201703021448238083.jpeg', '2017-03-09 14:48:23'),
(34, 2, 4, 'z gifem', 'z gifem', '2201703021552012835.gif', '2017-03-05 15:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(6, 'Gołębie pocztowe'),
(1, 'Jednorożce'),
(2, 'Komputery 8-bit'),
(3, 'Koty i chomiki'),
(4, 'Plany podboju świata'),
(7, 'Wszystkie pozostałe');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ad_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `text` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `ad_id`, `date`, `text`) VALUES
(1, 1, 1, '2017-02-26 21:35:54', 'ytdytdt'),
(3, 1, 1, '2017-02-26 21:36:31', 'i po edycji komentarz'),
(4, 1, 2, '2017-02-26 21:54:25', 'q324rwefdqd'),
(5, 1, 2, '2017-02-26 21:55:25', 'q324rwefdqdfffffffffffffffffffffffff'),
(6, 1, 2, '2017-02-26 22:14:32', 'nowyyy'),
(7, NULL, 2, '2017-02-26 22:17:56', 'bla222'),
(8, NULL, 1, '2017-02-26 22:18:53', 'jytdydydydydy0000'),
(11, NULL, 1, '2017-02-27 18:00:07', 'nowy koment 27'),
(14, 1, 1, '2017-02-27 21:57:26', 'bla zalogowany po edycji'),
(15, NULL, 3, '2017-02-27 22:29:10', 'anonimmmmmm'),
(16, NULL, 3, '2017-02-27 22:29:26', 'ytyryrytryt'),
(17, NULL, 7, '2017-02-28 13:40:06', 'anonimowy komentarz'),
(18, 3, 9, '2017-02-28 13:59:46', 'polecam !'),
(19, 2, 1, '2017-02-28 15:47:35', 'mój komentarz po edycji'),
(20, NULL, 10, '2017-02-28 15:55:49', 'gdzie foto ja pytam?'),
(21, 4, 13, '2017-02-28 16:03:01', 'moj pierwszy komentarz do pierwszego ogloszenia'),
(22, 4, 13, '2017-02-28 17:00:32', 'ytrdyrdyrdydyr'),
(23, 4, 13, '2017-02-28 17:22:31', 'awregtawsegtsw'),
(24, 4, 13, '2017-02-28 17:25:15', 'mail comment'),
(25, 4, 13, '2017-02-28 17:45:56', 'werwr'),
(26, NULL, 14, '2017-02-28 17:51:33', 'anonimowy koment do maila'),
(27, NULL, 14, '2017-02-28 17:52:56', 'to już podchodzi pod spam'),
(28, NULL, 14, '2017-02-28 17:54:00', 'new url'),
(30, 1, 7, '2017-02-28 18:09:30', 'waefswfe'),
(32, 2, 15, '2017-02-28 20:29:59', 'ta pani jest ostra...'),
(33, 4, 13, '2017-02-28 20:56:30', 'swfsdf'),
(34, 2, 14, '2017-03-01 12:42:50', 'safsadf'),
(35, 1, 8, '2017-03-01 16:09:26', 'dsfdsfvzsgsgsdrg'),
(36, NULL, 8, '2017-03-01 16:16:39', 'anonimowy komentarz'),
(37, NULL, 24, '2017-03-01 18:12:02', 'Czy chomik oddycha?'),
(38, 5, 24, '2017-03-01 18:13:42', 'Dostajemy niepokojące sygnały nt. Pańskiego ogłoszenia. Prosimy o kontakt.'),
(39, 4, 24, '2017-03-01 18:15:14', 'Spieszę z odpowiedzią: Kot żyje i ma się dobrze. dziękuję za zainteresowanie ogłoszeniem.'),
(40, 4, 14, '2017-03-01 22:16:58', 'sfsdf444444'),
(42, 2, 2, '2017-03-01 23:02:53', '111'),
(43, 2, 2, '2017-03-01 23:13:13', 'walidacja daty');

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'ccwrcuser', 'ccwrcuser', 'ccwrcuser@ccwrcuser.pl', 'ccwrcuser@ccwrcuser.pl', 1, NULL, '$2y$13$QppOYAnN2Aa9CCBGp/G0OuchtL0QrwFu/JSXu63c5SNsHVgDOZZyq', '2017-03-02 21:49:49', NULL, NULL, 'a:0:{}'),
(2, 'ccwrcadmin', 'ccwrcadmin', 'ccwrcadmin@ccwrcadmin.pl', 'ccwrcadmin@ccwrcadmin.pl', 1, NULL, '$2y$13$jICqqGaP8OWVjJtHXUClBOK54HZl2JLu/wFgfzL/WQnwQhp3DkPVS', '2017-03-03 13:14:35', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(3, 'Mózg', 'mózg', 'mozg@mozg.pl99', 'mozg@mozg.pl99', 1, NULL, '$2y$13$9r5D3YVf/0RB3nK/biT56eFPKuTwLaDZY6Y/Inba6hFp.B.rkhJsS', '2017-02-28 13:58:29', NULL, NULL, 'a:0:{}'),
(4, 'ccwrcltd', 'ccwrcltd', 'ccwrcltd@gmail.elo', 'ccwrcltd@gmail.elo', 1, NULL, '$2y$13$qC8H0v4.UsV/QH92fqWx7.y5R5ZeQDYoVXsHNC8q2OLLfHrI6FZ4O', '2017-03-01 21:15:41', NULL, NULL, 'a:0:{}'),
(5, 'greenpeace', 'greenpeace', 'tyyyt@wasssss.90ooo', 'tyyyt@wasssss.90ooo', 1, NULL, '$2y$13$XRD1qARbaBYofNq8uHDjSuXIk6CF8Qqhqm4rgCQ4CXGJMRBN4HBs6', '2017-03-01 18:12:28', NULL, NULL, 'a:0:{}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_77E0ED58A76ED395` (`user_id`),
  ADD KEY `IDX_77E0ED5812469DE2` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_64C19C15E237E06` (`name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526CA76ED395` (`user_id`),
  ADD KEY `IDX_9474526C4F34D596` (`ad_id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `FK_77E0ED5812469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_77E0ED58A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526C4F34D596` FOREIGN KEY (`ad_id`) REFERENCES `ad` (`id`),
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
