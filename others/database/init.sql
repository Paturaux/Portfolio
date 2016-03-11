DROP DATABASE IF EXISTS `portfolio`;
CREATE DATABASE  `portfolio`;

USE `portfolio`;

DROP USER 'admin'@'localhost';
GRANT ALL PRIVILEGES ON `portfolio`.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';