-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2021 at 03:49 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `buro`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `credit` int(11) NOT NULL DEFAULT '0',
  `discount` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `surname`, `name`, `email`, `birthday`, `login`, `password`, `status`, `credit`, `discount`) VALUES
(2, 'test', 'test', 'test@test.test', '2001-01-20', 'test', '123', 1, 0, 0),
(3, 'new', 'new', 'new@new.new', '2002-02-20', 'new', '456', 0, 0, 0),
(4, 'user', 'user', 'user@user.user', '2000-01-01', 'user', 'user', 0, 0, 0),
(5, 'ert', 'wer', 'qw@qw.ru', '2000-10-30', 'awe', '123', 0, 0, 0),
(6, 'Dolidze', 'Alexandra', 'alex@mail.ru', '2000-10-30', 'Alex', '123', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `title`, `date_time`, `type`) VALUES
(1, 'Роберт Фальк', '2021-03-30 18:30:00', 'Выставка'),
(2, 'Евгений Онегин', '2021-03-31 16:00:00', 'Спектакль'),
(3, 'Борис Годунов', '2021-04-01 16:30:00', 'Опера'),
(4, 'Шахматы', '2021-03-27 17:00:00', 'Мюзикл'),
(5, 'Пиковая дама', '2021-04-06 15:00:00', 'Опера'),
(6, 'Язык [не] свободы', '2021-05-10 06:00:00', 'Выставка');

-- --------------------------------------------------------

--
-- Table structure for table `event_has_site`
--

CREATE TABLE `event_has_site` (
  `event_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_has_site`
--

INSERT INTO `event_has_site` (`event_id`, `site_id`) VALUES
(1, 9),
(2, 5),
(3, 5),
(4, 5),
(5, 1),
(6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `surname`, `name`, `login`, `password`) VALUES
(1, 'manager1', 'manager1', 'manager1', '123'),
(2, 'manager2', 'manager2', 'manager2', '456');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sum` int(11) NOT NULL DEFAULT '0',
  `payment` tinyint(2) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `manager_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `date_time`, `sum`, `payment`, `status`, `client_id`, `manager_id`) VALUES
(1, '2021-03-30 12:57:07', 2000, 1, 0, 6, NULL),
(44, '2021-03-27 04:56:25', 2143, 1, 0, 3, NULL),
(45, '2021-03-27 04:56:10', 3221, 1, 0, 3, NULL),
(76, '2021-03-27 04:56:58', 1920, 1, 0, 2, NULL),
(77, '2021-03-27 04:57:24', 932, 1, 0, 2, NULL),
(89, '2021-03-27 07:05:28', 789, 1, 0, 2, NULL),
(90, '2021-03-27 07:10:46', 3706, 1, 0, 2, NULL),
(91, '2021-03-27 07:25:59', 7229, 1, 0, 2, NULL),
(109, '2021-03-27 19:30:08', 2017, 1, 0, 2, NULL),
(112, '2021-03-29 13:23:42', 1127, 1, 0, 3, NULL),
(123, '2021-03-29 18:38:29', 712, 1, 0, 2, NULL),
(126, '2021-03-29 22:15:58', 625, 1, 0, 2, NULL),
(127, '2021-03-30 10:23:56', 1127, 1, 0, 4, NULL),
(137, '2021-03-30 11:36:21', 927, 1, 0, 4, NULL),
(138, '2021-03-30 11:37:32', 3183, 1, 0, 4, NULL),
(139, '2021-03-30 11:40:46', 3171, 1, 0, 4, NULL),
(140, '2021-03-30 11:52:42', 913, 1, 0, 2, NULL),
(141, '2021-03-30 11:52:46', 913, 1, 0, 4, NULL),
(148, '2021-03-30 12:13:09', 1418, 1, 0, 2, NULL),
(149, '2021-03-30 12:14:16', 1483, 1, 0, 2, NULL),
(154, '2021-03-30 12:35:57', 2709, 1, 0, 4, NULL),
(155, '2021-03-30 12:38:09', 2014, 1, 0, 2, NULL),
(161, '2021-03-30 13:10:39', 1129, 1, 0, 4, NULL),
(162, '2021-03-30 13:11:27', 1624, 1, 0, 2, NULL),
(165, '2021-03-30 13:58:49', 1918, 1, 0, 2, NULL),
(169, '2021-03-30 14:29:44', 2103, 1, 0, 2, NULL),
(171, '2021-03-30 14:31:55', 3211, 1, 0, 2, NULL),
(174, '2021-03-30 14:38:04', 1622, 1, 0, 2, NULL),
(176, '2021-03-30 14:46:39', 986, 1, 0, 4, NULL),
(180, '2021-03-30 14:57:45', 345, 1, 0, 4, NULL),
(181, '2021-03-30 15:00:33', 2172, 1, 0, 2, NULL),
(182, '2021-03-30 15:00:26', 3211, 1, 0, 4, NULL),
(183, '2021-03-30 15:15:30', 797, 1, 0, 4, NULL),
(185, '2021-03-30 15:18:02', 1849, 1, 0, 4, NULL),
(186, '2021-03-30 15:18:11', 1849, 1, 0, 2, NULL);

--
-- Triggers `purchase`
--
DELIMITER $$
CREATE TRIGGER `setNewStatus` AFTER UPDATE ON `purchase` FOR EACH ROW if New.sum > 5000 then 
update client set status=1 where client.client_id=New.client_id; 
end if
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seat` tinyint(2) NOT NULL,
  `price` int(11) NOT NULL,
  `status_purchase` int(11) DEFAULT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seat`, `price`, `status_purchase`, `event_id`) VALUES
(6, 1, 595, NULL, 1),
(7, 2, 2960, NULL, 1),
(8, 3, 2143, 89, 1),
(9, 4, 3221, 45, 1),
(10, 5, 4503, NULL, 1),
(11, 6, 1920, 76, 1),
(12, 7, 932, 77, 1),
(13, 8, 913, 141, 1),
(14, 9, 2017, 109, 1),
(15, 10, 3353, NULL, 1),
(16, 11, 3118, NULL, 1),
(17, 12, 2709, 154, 1),
(18, 13, 3706, 90, 1),
(19, 14, 2014, 155, 1),
(20, 15, 4871, NULL, 1),
(21, 16, 4140, NULL, 1),
(22, 17, 1032, NULL, 1),
(23, 18, 3043, NULL, 1),
(24, 19, 4979, NULL, 1),
(25, 20, 3681, NULL, 1),
(26, 21, 2799, 138, 1),
(27, 22, 1713, NULL, 1),
(28, 23, 2377, NULL, 1),
(29, 24, 4069, NULL, 1),
(30, 25, 2801, NULL, 1),
(31, 1, 1234, NULL, 2),
(32, 2, 345, 180, 2),
(33, 3, 789, 89, 2),
(34, 4, 3282, NULL, 2),
(35, 5, 1918, 165, 2),
(36, 6, 4268, NULL, 2),
(37, 7, 692, NULL, 2),
(38, 8, 712, 123, 2),
(39, 9, 3092, NULL, 2),
(40, 10, 1849, 185, 2),
(41, 11, 510, NULL, 2),
(42, 12, 3536, NULL, 2),
(43, 13, 1966, NULL, 2),
(44, 14, 1223, NULL, 2),
(45, 15, 2208, NULL, 2),
(46, 16, 1016, NULL, 2),
(47, 17, 1361, NULL, 2),
(48, 18, 3168, NULL, 2),
(49, 19, 686, NULL, 2),
(50, 20, 2380, NULL, 2),
(51, 21, 4043, NULL, 2),
(52, 22, 2551, NULL, 2),
(53, 23, 4731, NULL, 2),
(54, 24, 3194, NULL, 2),
(55, 25, 554, NULL, 2),
(56, 1, 1577, NULL, 3),
(57, 2, 1035, NULL, 3),
(58, 3, 1392, 89, 3),
(59, 4, 1129, 161, 3),
(60, 5, 3075, NULL, 3),
(61, 6, 1275, NULL, 3),
(62, 7, 3514, NULL, 3),
(63, 8, 2097, NULL, 3),
(64, 9, 3183, 138, 3),
(65, 10, 986, 176, 3),
(66, 11, 1624, 162, 3),
(67, 12, 1986, NULL, 3),
(68, 13, 2395, NULL, 3),
(69, 14, 4758, NULL, 3),
(70, 15, 3612, NULL, 3),
(71, 16, 4154, NULL, 3),
(72, 17, 3771, NULL, 3),
(73, 18, 3203, NULL, 3),
(74, 19, 2669, NULL, 3),
(75, 20, 4030, NULL, 3),
(76, 21, 1509, NULL, 3),
(77, 22, 3259, NULL, 3),
(78, 23, 4289, NULL, 3),
(79, 24, 2876, NULL, 3),
(80, 25, 2963, NULL, 3),
(81, 1, 2330, NULL, 4),
(82, 2, 3527, NULL, 4),
(83, 3, 4732, 89, 4),
(84, 4, 320, NULL, 4),
(85, 5, 1434, NULL, 4),
(86, 6, 797, NULL, 4),
(87, 7, 4053, 91, 4),
(88, 8, 2210, 91, 4),
(89, 9, 966, 91, 4),
(90, 10, 1622, NULL, 4),
(91, 11, 4291, NULL, 4),
(92, 12, 2748, NULL, 4),
(93, 13, 625, 126, 4),
(95, 15, 1483, 149, 4),
(96, 16, 1032, NULL, 4),
(97, 17, 4683, NULL, 4),
(98, 18, 1488, NULL, 4),
(99, 19, 1964, NULL, 4),
(100, 20, 1336, NULL, 4),
(101, 21, 3757, NULL, 4),
(102, 22, 3006, NULL, 4),
(104, 24, 655, NULL, 4),
(105, 25, 1521, NULL, 4),
(106, 1, 3302, 1, 5),
(107, 2, 4814, NULL, 5),
(108, 3, 916, 89, 5),
(109, 4, 4175, NULL, 5),
(110, 5, 879, NULL, 5),
(111, 6, 3730, NULL, 5),
(112, 7, 927, 137, 5),
(113, 8, 793, NULL, 5),
(114, 9, 2573, NULL, 5),
(115, 10, 1418, 148, 5),
(116, 11, 1025, NULL, 5),
(117, 12, 4041, NULL, 5),
(118, 13, 1127, 127, 5),
(119, 14, 2103, 169, 5),
(120, 15, 3211, 182, 5),
(121, 16, 3171, 139, 5),
(122, 17, 3763, NULL, 5),
(123, 18, 4631, NULL, 5),
(124, 19, 2172, 181, 5),
(125, 20, 3907, NULL, 5),
(126, 21, 2322, NULL, 5),
(127, 22, 3308, NULL, 5),
(128, 23, 2396, NULL, 5),
(129, 24, 944, NULL, 5),
(130, 25, 1349, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `site_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `city` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `house` int(11) NOT NULL,
  `block` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `title`, `city`, `street`, `house`, `block`) VALUES
(1, 'Большой театр', 'Москва', 'Театральная пл.', 1, NULL),
(4, 'Театр имени Пушкина', 'Москва', 'Тверской б-р', 23, NULL),
(5, 'Театр Вахтангова', 'Москва', 'Арбат ул.', 26, NULL),
(6, 'Государственный академический театр имени Моссовета', 'Москва', 'Большая Садовая ул.', 16, 1),
(7, 'Государственный Театр Наций', 'Москва', 'Петровский пер.', 3, NULL),
(8, 'Государственная Третьяковская галерея', 'Москва', 'Лаврушинский пер.', 10, NULL),
(9, 'Новая Третьяковка', 'Москва', 'Крымский Вал ул.', 10, NULL),
(10, 'Музей истории ГУЛАГа', 'Москва', ' 1-й Самотечный пер.', 9, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_has_site`
--
ALTER TABLE `event_has_site`
  ADD KEY `event_id` (`event_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `manager_id` (`manager_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `status_purchase` (`status_purchase`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_has_site`
--
ALTER TABLE `event_has_site`
  ADD CONSTRAINT `event_has_site_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `event_has_site_ibfk_2` FOREIGN KEY (`site_id`) REFERENCES `site` (`site_id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `purchase_ibfk_2` FOREIGN KEY (`manager_id`) REFERENCES `manager` (`manager_id`);

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`),
  ADD CONSTRAINT `seat_ibfk_2` FOREIGN KEY (`status_purchase`) REFERENCES `purchase` (`purchase_id`);
