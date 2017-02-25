-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2017 at 12:28 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `symfonySmall`
--

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
(3, 'Koty i chomiki'),
(4, 'Plany podboju świata'),
(5, 'Gołębie pocztowe'),
(6, 'Jednorożce'),
(7, 'Komputery 8-bit'),
(8, 'Testowa');

-- --------------------------------------------------------

--
-- Table structure for table `category_smallad`
--

CREATE TABLE `category_smallad` (
  `small_ad_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_smallad`
--

INSERT INTO `category_smallad` (`small_ad_id`, `category_id`) VALUES
(8, 6),
(9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `smallad_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `text` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'ccwrcuser', 'ccwrcuser', 'ccwrcuser@ccwrcuser.pl', 'ccwrcuser@ccwrcuser.pl', 1, NULL, '$2y$13$nmC3AvQ7tg0Wqo/doAC4nOPUBRP8KDNqTVL6mYuSCC0ccc4SH5BAS', '2017-02-24 16:37:39', 'MQ6V0VUDxSUFDPrj8dRNqZCVvPd-2dcuivtW5LsPuKI', '2017-02-23 15:18:29', 'a:0:{}'),
(2, 'ccwrcadmin', 'ccwrcadmin', 'ccwrcadmin@ccwrcadmin.pl', 'ccwrcadmin@ccwrcadmin.pl', 1, NULL, '$2y$13$.cxRMaK7FDQ5E3pX2PvGEOMPSS137rjp9Pa3DdDAFE8FhAPFf0Y6e', '2017-02-24 12:49:25', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(3, 'ccwrcltd', 'ccwrcltd', 'ccwrcltd@pl.ccwrcltd', 'ccwrcltd@pl.ccwrcltd', 1, NULL, '$2y$13$t1/aha1tM1XaYxaG94AWn.94sHyUuyHx66vBAiVJygjmPSg6r1Tqu', '2017-02-23 15:21:10', 'uX0Nu9OgbBkF30ANeRljg3e2TTEzxwppw7c7DDLqluQ', '2017-02-23 15:21:35', 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `path` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `smallAd_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `small_ad`
--

CREATE TABLE `small_ad` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(9500) COLLATE utf8_unicode_ci NOT NULL,
  `startDate` datetime NOT NULL,
  `endDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `small_ad`
--

INSERT INTO `small_ad` (`id`, `user_id`, `title`, `description`, `startDate`, `endDate`) VALUES
(1, 1, 'xcdcfd', 'dfgdfgdfg', '2017-02-01 00:00:00', '2017-02-14 00:00:00'),
(2, 1, 'esgr', 'sdfsdf', '2017-02-24 17:19:04', '2017-02-24 17:19:04'),
(3, 1, 'esgr', 'sdfsdf', '2017-02-24 17:21:05', '2017-02-24 17:21:05'),
(4, 1, 'esgr', 'sdfsdf', '2017-02-24 17:21:33', '2017-02-24 17:21:56'),
(5, 1, 'esgr', 'sdfsdf', '2017-02-24 17:22:17', '2017-02-24 18:22:17'),
(6, 1, 'esgr', 'sdfsdf', '2017-02-24 17:22:53', '2017-03-03 17:22:53'),
(7, 1, 'esgr', 'sdfsdf', '2017-02-24 17:23:49', '2017-03-03 17:23:49'),
(8, 1, 'esgr', 'sdfsdf', '2017-02-24 18:09:31', '2017-03-03 18:09:31'),
(9, 1, 'esgr33434', 'sdfsdf34343434', '2017-02-24 18:11:36', '2017-03-03 18:11:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_smallad`
--
ALTER TABLE `category_smallad`
  ADD PRIMARY KEY (`small_ad_id`,`category_id`),
  ADD KEY `IDX_91089297DCDA94F5` (`small_ad_id`),
  ADD KEY `IDX_9108929712469DE2` (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9474526CA76ED395` (`user_id`),
  ADD KEY `IDX_9474526CF5AF5B00` (`smallad_id`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_14B78418346E7404` (`smallAd_id`);

--
-- Indexes for table `small_ad`
--
ALTER TABLE `small_ad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_12DFFC1DA76ED395` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `small_ad`
--
ALTER TABLE `small_ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_smallad`
--
ALTER TABLE `category_smallad`
  ADD CONSTRAINT `FK_9108929712469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_91089297DCDA94F5` FOREIGN KEY (`small_ad_id`) REFERENCES `small_ad` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_9474526CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_9474526CF5AF5B00` FOREIGN KEY (`smallad_id`) REFERENCES `small_ad` (`id`);

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `FK_14B78418346E7404` FOREIGN KEY (`smallAd_id`) REFERENCES `small_ad` (`id`);

--
-- Constraints for table `small_ad`
--
ALTER TABLE `small_ad`
  ADD CONSTRAINT `FK_12DFFC1DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
