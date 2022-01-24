<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/constants/queries.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/faker.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/logs.php' );

	class DAO {

		private $mariadb = NULL;
		private $sqlite  = NULL;

		private $rows = [];
		private $data = [];

		public function __construct() {
			$this->mariadb = new MariaDB();
			$this->sqlite  = new SQLite();
		}

	}
