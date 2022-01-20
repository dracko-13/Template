CREATE DATABASE `informatica_6`;

CREATE TABLE personas (
	id_persona       TINYINT     NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombres          VARCHAR(30) NOT NULL,
	ap               VARCHAR(20) NOT NULL,
	am               VARCHAR(20) NOT NULL,
	fecha_nacimiento DATE        NOT NULL,
	numero_celular   VARCHAR(15) NOT NULL,
	correo           VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
