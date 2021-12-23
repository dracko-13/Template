<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/constants/authentication.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/logs.php' );

	class MariaDB {

		private $dsn;
		private $options = [];
		public $link;

		public function open() {
			$this->dsn = sprintf( "mysql:host=%s;dbname=%s;charset=%s;port=%s", HOST, DATABASE, CHARSET, PORT );
			$this->options = [
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
			];
			try {
				$this->link = new PDO( $this->dsn, USERNAME, PASSWORD, $this->options );
			} catch( PDOException $e ) {
				make_log( __CLASS__, __FUNCTION__, $e->getMessage() );
			}
			return $this->link;
		}

		public function close() {
			try {
				$this->link = NULL;
			} catch( PDOException $e ) {
				make_log( __CLASS__, __FUNCTION__, $e->getMessage() );
			}
		}

	}
