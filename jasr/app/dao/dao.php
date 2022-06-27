<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/constants/constants.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/db/mariadb.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/db/mongodb.php' );

	class DAO {

		private $mariadb = NULL;
		private $mongodb = NULL;
		private $data    = [];

		public function __construct() {
			$this->mariadb = getMariaDBConnection();
			$this->mongodb = getMongoDBConnection();
			$this->mongodb->selectDatabase( $_ENV[ 'DATABASE' ] );
		}

	}
