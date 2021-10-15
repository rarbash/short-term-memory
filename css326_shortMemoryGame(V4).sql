-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2021 at 05:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `css326_shortMemoryGame`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE DATABASE IF NOT EXISTS `css326_shortMemoryGame` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `css326_shortMemoryGame`;

CREATE TABLE `choices` (
  `choice_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `answer` varchar(100) NOT NULL,
  `rightorwrong` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`choice_id`, `question_id`, `answer`, `rightorwrong`) VALUES
(1, 1, 'Pink', 0),
(2, 1, 'Brown', 0),
(3, 1, 'Yellow', 0),
(4, 1, 'White', 1),
(5, 2, '9', 0),
(6, 2, '10', 0),
(7, 2, '12', 1),
(8, 2, '14', 0),
(9, 3, 'Japanese food', 0),
(10, 3, 'Dessert', 0),
(11, 3, 'Italian food', 1),
(12, 3, 'Fast-food', 0),
(13, 4, 'Red', 1),
(14, 4, 'Orange', 0),
(15, 4, 'Green', 0),
(16, 4, 'Brown', 0),
(17, 5, '2', 0),
(18, 5, '3', 1),
(19, 5, '4', 0),
(20, 5, '5', 0),
(21, 6, '7', 0),
(22, 6, '8', 1),
(23, 6, '9', 0),
(24, 6, '10', 0),
(25, 7, 'Raccoon', 1),
(26, 7, 'Rabbit', 0),
(27, 7, 'Mouse', 0),
(28, 7, 'Tiger', 0),
(29, 8, 'Squirrel', 0),
(30, 8, 'Panda', 0),
(31, 8, 'Cat', 1),
(32, 8, 'Fox', 0),
(33, 9, '0', 0),
(34, 9, '1', 0),
(35, 9, '2', 0),
(36, 9, '3', 1),
(37, 10, 'Purple', 0),
(38, 10, 'Yellow', 1),
(39, 10, 'Orange', 0),
(40, 10, 'Red', 0),
(41, 11, 'Chicken', 0),
(42, 11, 'Crow', 1),
(43, 11, 'Penguin', 0),
(44, 11, 'Goose', 0),
(45, 12, 'Pink', 0),
(46, 12, 'Purple', 0),
(47, 12, 'Cyan', 1),
(48, 12, 'Green', 0),
(49, 13, '3', 0),
(50, 13, '4', 0),
(51, 13, '5', 0),
(52, 13, '6', 1),
(53, 14, 'Seal', 0),
(54, 14, 'Deer', 0),
(55, 14, 'Owl', 1),
(56, 14, 'Bear', 0),
(57, 15, 'Cow', 1),
(58, 15, 'Penguin', 0),
(59, 15, 'Sheap', 0),
(60, 15, 'Donkey', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(10) UNSIGNED NOT NULL,
  `qset_id` int(4) UNSIGNED NOT NULL,
  `question_sentence` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `qset_id`, `question_sentence`) VALUES
(1, 1, 'Which was not the color of any scoop of ice-cream?'),
(2, 1, 'How many pieces of sushi were there?'),
(3, 1, 'Which type of food was not in the image?'),
(4, 1, 'What was the color of the topping fruit of the ice-cream?'),
(5, 1, 'How many hamburgers were there?'),
(6, 2, 'How many rabbits were there?'),
(7, 2, 'Which of these was holding cake?'),
(8, 2, 'What animal was not in the image?'),
(9, 2, 'How many carrots were being held by rabbits?'),
(10, 2, 'Which was not the color of any present box?'),
(11, 3, 'Which winged animal was not in the image?'),
(12, 3, 'Which color was not in the image?'),
(13, 3, 'How many species of mammal were there?'),
(14, 3, 'There was only one of which animal?'),
(15, 3, 'There were more than two of which animal?');

-- --------------------------------------------------------

--
-- Table structure for table `question_set`
--

CREATE TABLE `question_set` (
  `qset_id` int(4) UNSIGNED NOT NULL,
  `qset_name` varchar(100) NOT NULL,
  `qset_level` varchar(20) NOT NULL,
  `qset_description` varchar(250) NOT NULL,
  `img_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_set`
--

INSERT INTO `question_set` (`qset_id`, `qset_name`, `qset_level`, `qset_description`, `img_url`) VALUES
(1, 'Easy', 'easy', 'Easy test about memorizing an image of various food items', 'images/Easy.png'),
(2, 'Medium', 'medium', 'Medium-level test about memorizing an image of many cute Christmas critters', 'images/Medium.png'),
(3, 'Hard', 'hard', 'Hard test about memorizing an image of all kinds of animals', 'images/Hard.png');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(12) UNSIGNED NOT NULL,
  `qset_id` int(4) UNSIGNED NOT NULL,
  `score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `user_id`, `qset_id`, `score`) VALUES
(1, 1, 3, 2),
(4, 2, 1, 3),
(7, 3, 1, 1),
(10, 4, 3, 5),
(11, 19, 2, 2),
(12, 14, 2, 4),
(13, 15, 1, 5),
(14, 5, 2, 3),
(15, 6, 3, 1),
(16, 12, 1, 4),
(17, 11, 2, 1),
(18, 9, 3, 4),
(19, 17, 1, 5),
(20, 13, 2, 2),
(21, 10, 3, 0),
(22, 32, 1, 0),
(23, 31, 2, 4),
(24, 33, 3, 1),
(25, 27, 1, 0),
(26, 26, 2, 1),
(27, 25, 3, 2),
(28, 28, 1, 5),
(29, 29, 2, 3),
(30, 30, 3, 2),
(31, 21, 1, 4),
(32, 20, 2, 2),
(33, 18, 3, 4),
(34, 8, 1, 3),
(35, 16, 2, 0),
(36, 7, 3, 0),
(37, 24, 1, 2),
(38, 23, 2, 5),
(39, 22, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(12) UNSIGNED NOT NULL,
  `user_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`) VALUES
(1, 'PlayTester'),
(2, 'PlayTester'),
(3, 'Fenyvier'),
(4, 'Fenyvier'),
(5, 'Rabash'),
(6, 'Rabash'),
(7, 'Unnamed1'),
(8, 'Unnamed1'),
(9, 'Cheater1'),
(10, 'Cheater2'),
(11, 'Cheater1'),
(12, 'Cheater1'),
(13, 'Cheater2'),
(14, 'Fenyvier'),
(15, 'Rabash'),
(16, 'Unnamed1'),
(17, 'Cheater2'),
(18, 'Playtester'),
(19, 'PlayTester'),
(20, 'Playtester'),
(21, 'Playtester'),
(22, 'Unnamed2'),
(23, 'Unnamed2'),
(24, 'Unnamed2'),
(25, 'Godmode'),
(26, 'Godmode'),
(27, 'Godmode'),
(28, 'Kitten'),
(29, 'Kitten'),
(30, 'Kitten'),
(31, 'Dragon'),
(32, 'Dragon'),
(33, 'Dragon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`choice_id`),
  ADD KEY `question_id_fk` (`question_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `qset_id_fk` (`qset_id`);

--
-- Indexes for table `question_set`
--
ALTER TABLE `question_set`
  ADD PRIMARY KEY (`qset_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `qset_id` (`qset_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `choice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `question_set`
--
ALTER TABLE `question_set`
  MODIFY `qset_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(12) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `question_id_fk` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON DELETE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `qset_id_fk` FOREIGN KEY (`qset_id`) REFERENCES `question_set` (`qset_id`) ON DELETE CASCADE;

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `qset_id` FOREIGN KEY (`qset_id`) REFERENCES `question_set` (`qset_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
