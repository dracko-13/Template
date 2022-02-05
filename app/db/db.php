<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	$dotenv = Dotenv\Dotenv::createImmutable( $_SERVER[ 'DOCUMENT_ROOT' ] . '/' );

	$dotenv->load();

	use Medoo\Medoo;

	class Databases {

		public function MariaDB() {
			return new Medoo([
				'type'      => 'mariadb',
				'host'      => 'localhost',
				'database'  => $_ENV[ 'DATABASE' ],
				'username'  => $_ENV[ 'USER_DB' ],
				'password'  => $_ENV[ 'USER_PASSWD' ],
				'charset'   => 'utf8mb4',
				'collation' => 'utf8mb4_general_ci',
				'port'      => 3306,
				'prefix'    => '',
				'logging'   => true,

				'error'     => PDO::ERRMODE_EXCEPTION,

				'option'    => [
					PDO::ATTR_CASE => PDO::CASE_NATURAL
				],

				'command'   => [
					'SET SQL_MODE = ANSI_QUOTES'
				]
			]);
		}

		public function SQLite() {
			return new Medoo([
				'type'     => 'sqlite',
				'database' => $_SERVER[ 'DOCUMENT_ROOT' ] . '/db.sqlite3'
			]);
		}

	}
