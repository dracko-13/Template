<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/constants/constants.php' );

	use MongoDB\Client;
	use Dotenv\Dotenv;

	function getMongoDBConnection() {
		$dot = Dotenv::createImmutable( $_SERVER[ 'DOCUMENT_ROOT' ] . '/', '.mongodb' );
		$dot->load();
		$dns = sprintf( "mongodb://%s:%s@%s:%s", $_ENV[ 'USER' ], $_ENV[ 'PASSWORD' ], $_ENV[ 'HOST' ], $_ENV[ 'PORT' ] );
		return new Client( $dns );
	}
