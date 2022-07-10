<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/constants/constants.php' );

	use Medoo\Medoo;
	use Dotenv\Dotenv;

	function getMariaDBConnection() {
		$dot = Dotenv::createImmutable( $_SERVER[ 'DOCUMENT_ROOT' ] . '/', '.mariadb' );
		$dot->load();
		return new Medoo([
			'type'     => $_ENV[ 'TYPE' ],
			'host'     => $_ENV[ 'HOST' ],
			'database' => $_ENV[ 'DATABASE' ],
			'username' => $_ENV[ 'USER' ],
			'password' => $_ENV[ 'PASSWORD' ]
		]);
	}
