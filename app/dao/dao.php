<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );

	class DAO extends Database {

		private $data = [];
	
		public function __construct() {
			parent::__construct();
		}

	}
