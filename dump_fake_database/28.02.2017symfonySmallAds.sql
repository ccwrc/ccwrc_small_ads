-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2017 at 03:57 PM
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
(1, 2, 3, 'pierwsze edit3 edit33', 'pierwsze edit3', '20170228154653188.jpeg', '2017-03-05 13:25:00'),
(2, 2, 2, 'pierwsze22', 'pierwsze22', NULL, '2017-03-05 13:26:04'),
(3, 2, 6, 'testttttttt edit2', 'asdasd', NULL, '2017-03-05 14:26:30'),
(5, 1, 1, '2 fdhgfdghf edit', '2 fhfghfhfgh edit', NULL, '2017-03-05 16:27:55'),
(6, 2, 6, 'wsgftsdgf---------------------', 'sdfsdf', '201702261748402127.png', '2017-03-05 17:29:46'),
(7, 1, 6, 'dla gołębi', 'dla gołębi', NULL, '2017-03-07 13:34:06'),
(8, 1, 1, 'dla jenor', 'dla jednor', NULL, '2017-03-07 13:34:24'),
(9, 3, 4, 'Pierwszy plan', 'Bardzo dobry plan, na pewno zadziała. 30zł płatne z góry na konto słupa.', '201702281359179846.jpeg', '2017-03-07 13:59:17'),
(10, 3, 4, 'drugi plan', 'jeszcze lepszy niz pierwszy', NULL, '2017-03-07 14:08:50'),
(11, 3, 1, 'pluszowy jednorozec mutant', 'ma 2 rogi i muczy', NULL, '2017-03-07 14:10:21'),
(12, 2, 4, 'admin admin', 'admin admin', '201702281526145990.jpeg', '2017-03-07 15:26:14');

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
(4, 'Plany podboju świata');

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
(10, 2, 6, '2017-02-26 22:38:38', 'fgfgfgfgfgfgf'),
(11, NULL, 1, '2017-02-27 18:00:07', 'nowy koment 27'),
(14, 1, 1, '2017-02-27 21:57:26', 'bla zalogowany po edycji'),
(15, NULL, 3, '2017-02-27 22:29:10', 'anonimmmmmm'),
(16, NULL, 3, '2017-02-27 22:29:26', 'ytyryrytryt'),
(17, NULL, 7, '2017-02-28 13:40:06', 'anonimowy komentarz'),
(18, 3, 9, '2017-02-28 13:59:46', 'polecam !'),
(19, 2, 1, '2017-02-28 15:47:35', 'mój komentarz po edycji'),
(20, NULL, 10, '2017-02-28 15:55:49', 'gdzie foto ja pytam?');

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
(1, 'ccwrcuser', 'ccwrcuser', 'ccwrcuser@ccwrcuser.pl', 'ccwrcuser@ccwrcuser.pl', 1, NULL, '$2y$13$QppOYAnN2Aa9CCBGp/G0OuchtL0QrwFu/JSXu63c5SNsHVgDOZZyq', '2017-02-28 13:54:56', NULL, NULL, 'a:0:{}'),
(2, 'ccwrcadmin', 'ccwrcadmin', 'ccwrcadmin@ccwrcadmin.pl', 'ccwrcadmin@ccwrcadmin.pl', 1, NULL, '$2y$13$jICqqGaP8OWVjJtHXUClBOK54HZl2JLu/wFgfzL/WQnwQhp3DkPVS', '2017-02-28 14:52:52', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(3, 'Mózg', 'mózg', 'mozg@mozg.pl', 'mozg@mozg.pl', 1, NULL, '$2y$13$9r5D3YVf/0RB3nK/biT56eFPKuTwLaDZY6Y/Inba6hFp.B.rkhJsS', '2017-02-28 13:58:29', NULL, NULL, 'a:0:{}');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
