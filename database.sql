--
-- config
--
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

--
-- Table structure for new users
--
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- users sample information
--
INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Bob', 'Tahoe', 'bobtahoe@gmail.com', 'XXXXXXXX'),
(2, 'Fred', 'Melvin', 'fredmelvin@yahoo.com', 'XXXXXXXX'),
(3, 'Sally', 'Winthrop', 'sallywinthrop@gmail.com', 'XXXXXXXX');
