<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );

	use Ramsey\Uuid\Uuid;

	class DAO extends Database {

		private $db   = NULL;
		private $data = [];

		public function __construct() {
			parent::__construct();
			$this->db = $this->link->selectDatabase( $_ENV[ 'DATABASE' ] );
		}

	}
