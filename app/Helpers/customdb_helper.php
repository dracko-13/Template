<?php

use Medoo\Medoo;

function MariaDB() {
	return new Medoo([
		'type'      => 'mariadb',
		'host'      => getenv('hostname'),
		'database'  => getenv('database'),
		'username'  => getenv('username'),
		'password'  => getenv('password'),
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

function SQLite() {
	return new Medoo([
		'type'     => 'sqlite',
		'database' => $_SERVER[ 'DOCUMENT_ROOT' ] . '/writable/db.sqlite3'
	]);
}
