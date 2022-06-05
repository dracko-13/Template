<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	use MongoDB\Client;
	use Dotenv\Dotenv;

	class Database {
	
		protected $link = NULL;
		protected $dot  = NULL;

		public function __construct() {
			$this->dot = Dotenv::createImmutable( $_SERVER[ 'DOCUMENT_ROOT' ] . '/', '.mongodb' );
			$this->dot->load();
			$dns = sprintf( "mongodb://%s:%s@%s:%s", $_ENV[ 'USER' ], $_ENV[ 'PASSWORD' ], $_ENV[ 'HOST' ], $_ENV[ 'PORT' ] );
			$this->link = new Client( $dns );
		}
	
	}
