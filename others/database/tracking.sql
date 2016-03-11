USE `portfolio`;

DROP TABLE IF EXISTS `tracking`;
DROP TABLE IF EXISTS `tagging`;

CREATE TABLE `tagging` (
    `tag` VARCHAR(25) NOT NULL,
    `date` DATETIME NOT NULL,
    `ip` varchar(15) NOT NULL,
    `pseudo` varchar(30),
    CONSTRAINT PK_TAGGING PRIMARY KEY (`tag`)
);

CREATE TABLE `tracking` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `tag` VARCHAR(25) NOT NULL,
    `date` DATETIME NOT NULL,
    `action` varchar(256) NOT NULL,
    CONSTRAINT PK_TRACKING PRIMARY KEY (`id`),
    CONSTRAINT FK_TRACKING FOREIGN KEY (`tag`) REFERENCES `tagging`(`tag`)
);