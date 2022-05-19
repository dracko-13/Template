<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	use MongoDB\Client;
	use Dotenv\Dotenv;

	class Database {
	
		protected $link   = NULL;
		protected $dotenv = NULL;

		public function __construct() {
			$this->dotenv = Dotenv::createImmutable( $_SERVER[ 'DOCUMENT_ROOT' ] . '/' );
			$this->dotenv->load();
			$dns = sprintf("mongodb://%s:%s@%s:%s", $_ENV[ 'USER' ], $_ENV[ 'PASSWORD' ], $_ENV[ 'HOST' ], $_ENV[ 'PORT' ]);
			$this->link = new Client($dns);
		}
	
	}
