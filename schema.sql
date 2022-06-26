CREATE DATABASE `accounts`;

CREATE TABLE `accounts`.`accounts` (
	`id_account` TINYINT(3) NOT NULL AUTO_INCREMENT,
	`nickname`   VARCHAR(30) NOT NULL,
	`secret_key` TINYBLOB NOT NULL,

	PRIMARY KEY(`id_account`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO
	`accounts`.`accounts`
VALUES
	(null, 'admin', '$2y$10$kE7NJ/UxOweN3pVWSKf9e.cE6ahclPtSfOepNnskjDAXujrXD9o.6');

CREATE TABLE `accounts`.`ci_sessions` (
	`id`         VARCHAR(128) NOT NULL,
	`ip_address` VARCHAR(45) NOT NULL,
	`timestamp`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	`data`       BLOB NOT NULL,

	PRIMARY KEY(`id`, `ip_address`)
);
