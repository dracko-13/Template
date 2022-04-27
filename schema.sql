CREATE DATABASE `accounts`;

CREATE TABLE `accounts`.`accounts` (
	`id_account` TINYINT(3) NOT NULL AUTO_INCREMENT,
	`nickname` VARCHAR(30) NOT NULL,
	`secret_key` TINYBLOB NOT NULL,
	PRIMARY KEY (`id_account`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO
	`accounts`.`accounts`
VALUES
	(null, 'admin', '$2y$10$kE7NJ/UxOweN3pVWSKf9e.cE6ahclPtSfOepNnskjDAXujrXD9o.6');

CREATE TABLE `accounts`.`usernames` (
	`id_username` TINYINT NOT NULL AUTO_INCREMENT,
	`username`    VARCHAR(30) NOT NULL,
	`account_id`  TINYINT(3) DEFAULT NULL ,
	CONSTRAINT `fk_account_id` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE,
	PRIMARY KEY (`id_username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO
	`accounts`.`usernames`
VALUES
	(null, 'administrator', 1);

CREATE TABLE `accounts`.`ci_sessions` (
	`id` VARCHAR(128) NOT NULL,
	`ip_address` VARCHAR(45) NOT NULL,
	`timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	`data` BLOB NOT NULL,
	PRIMARY KEY (`id`, `ip_address`)
);


-- MongoDB

show dbs

	admin   0.000GB
	config  0.000GB
	local   0.000GB

use ci4

	switched to db ci4

show collections

db.accounts.insert(
	{
		nickname: 'admin',
		secret_key: '$2y$10$kE7NJ/UxOweN3pVWSKf9e.cE6ahclPtSfOepNnskjDAXujrXD9o.6'
	}
)

db.accounts.findOne(
	{
		'nickname': 'admin'
	}
)

db.accounts.count()

db.dropDatabase()
