<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/faker.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/logs.php' );

	class DAO {

		private $db = NULL;

		function __construct() {
			$this->db = new Databases();
		}

	}
