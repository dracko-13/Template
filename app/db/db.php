<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	use MongoDB\Client;
	use Dotenv\Dotenv;

	$dotenv = Dotenv::createImmutable( $_SERVER[ 'DOCUMENT_ROOT' ] . '/' );

	class Database {
	
		protected $db = NULL;
	
		public function __construct() {
			$dotenv->load();
			$dns = sprintf("mongodb://%s:%s@%s:%s", $_ENV[ 'USER' ], $_ENV[ 'PASSWORD' ], $_ENV[ 'HOST' ], $_ENV[ 'PORT' ]);
			$this->db = new Client($dns);
		}
	
	}
