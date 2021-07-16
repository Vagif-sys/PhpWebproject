-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2021 at 07:24 PM
-- Server version: 5.7.29
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` int(11) UNSIGNED NOT NULL,
  `Author` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `subject`, `text`, `data`, `Author`) VALUES
(2, 'Football', 'What does football mean  in your life', 'I really love football  and  i  play it everyday', 1621750928, 'Vago'),
(3, 'Interesting facts', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident ipsum', 'alias debitis sed labore, quis fuga saepe asperiores incidunt, nostrum exercitationem odit!', 1621758365, 'Vago'),
(7, 'Interesting facts', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident ipsum vecusanda', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident ipsum vecusandae dolorum assumenda error nam! Ad alias debitis sed labore, quis fuga sa', 1621787624, 'Vago'),
(8, 'Interesting facts', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident ipsum vecusandae dolorum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed provident ipsum vecusandae dolorum assumen', 1621787658, 'Vaho');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mess` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `mess`, `article_id`) VALUES
(24, 'Samir', 'Sizin ela  klubunuz var !!!', 7),
(23, 'Samir', 'Sizin ela  klubunuz var !!!', 7),
(21, 'Jack', 'This a new comment in our site', 8),
(20, 'Jack', 'This a new comment in our site', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `login`, `pass`) VALUES
(1, 'Vagif', 'mail1@mail.ru', 'Vago', '12345'),
(2, 'Kamil', 'mail2@mail.ru', 'Kamo', 'cf3e686075780cf893956493b866e08c'),
(3, 'Vahid', 'mail3@mail.ru', 'Vaho', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
