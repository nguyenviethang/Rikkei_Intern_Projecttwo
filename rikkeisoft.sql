-- Adminer 4.8.1 MySQL 5.7.36 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `departments` (`id`, `name`) VALUES
(1,	'IT department'),
(2,	'Acounting department'),
(3,	'Acounting department'),
(4,	'Administration department'),
(5,	'Human Resources Department'),
(6,	'department1'),
(7,	'department2'),
(8,	'department3'),
(9,	'department4'),
(12,	'eeee'),
(13,	'wwww'),
(14,	'qqqqq'),
(15,	'rrrr');

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `roles` (`id`, `name`) VALUES
(1,	'Admin'),
(2,	'User');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `avatar`, `department_id`, `role_id`) VALUES
(1,	'user_1',	'Hello',	'123456',	'anh1.jpg',	1,	1),
(2,	'user_2',	'Sayhi',	'123456',	'anh2.jpg',	2,	2),
(3,	'user_3',	'goodbye',	'123456',	'anh3.jpg',	3,	1),
(4,	'user_4',	'David',	'123456',	'anh4.jpg',	4,	2),
(5,	' user_5',	'Kelvin',	'123456',	'anhgau.jpg',	5,	2),
(6,	'user_6',	'hihi',	'123456',	'anhheo.jpg',	3,	2),
(7,	'user_7',	'sdfghj',	'123456',	'anhgau.jpg',	4,	1),
(8,	'user_8',	'123',	'123456',	'anh1.jpg',	4,	1),
(9,	'user_9',	'sdfghj',	'123456',	'anhgau.jpg',	5,	2),
(10,	'user_10',	'Sayhello',	'123456',	'anh3.jpg',	7,	2),
(12,	'user_12',	'Bui Ly',	'1223456',	'anhgau.jpg',	6,	1),
(13,	'user_13',	'Ohhhhh',	'123456',	'anhgau.jpg',	3,	1),
(14,	'123',	'123',	'123',	'unnamed.jpg',	7,	2),
(15,	'lybt',	'LyBT',	'123456',	'unnamed.jpg',	5,	2),
(16,	'buily',	'buily',	'123456',	'anhgau.jpg',	8,	1),
(17,	'aaaa',	'aaaaa',	'123456',	'anh2.jpg',	6,	1),
(18,	'aaaaa',	'aaaaa',	'123456',	'anh3.jpg',	8,	1),
(19,	'eee',	'eeee',	'12345',	'anh1.jpg',	7,	2),
(20,	'aa',	'aaa',	'aaaa',	'anh3.jpg',	3,	1),
(22,	'aaaaaa',	'aaaaa',	'aaaaaaaaaaa',	'anhgau.jpg',	1,	2),
(23,	'qqqqqq',	'qqqqqq',	'qqqqqq',	'anhheo.jpg',	6,	2),
(24,	'1234',	'1234',	'1234',	'anh1.jpg',	13,	1);

-- 2022-01-07 11:16:20