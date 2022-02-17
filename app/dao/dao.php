<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/logger.php' );

	class DAO {

		private $db = NULL;

		function __construct() {
			$this->db = new Databases();
		}

	}
