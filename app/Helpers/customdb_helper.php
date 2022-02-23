<?php

use Medoo\Medoo;

function customDB($db, $user, $password, $type) {
	switch($type):

		case 'mariadb':
			return new Medoo([
				'type'      => 'mariadb',
				'host'      => 'localhost',
				'database'  => $db,
				'username'  => $user,
				'password'  => $password,
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
		break;

		case 'sqlite':
			return new Medoo([
				'type'     => 'sqlite',
				'database' => $_SERVER[ 'DOCUMENT_ROOT' ] . '/writable/db.sqlite3'
			]);
		break;

	endswitch;
}
