<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/logs.php' );

	class SQLite {

		private $dsn;
		private $options = [];
		public $link;

		public function open() {
			$this->dsn = 'sqlite:' . $_SERVER[ 'DOCUMENT_ROOT' ] . 'db.sqlite3';
			$this->options = [
				PDO::ATTR_EMULATE_PREPARES   => false,
				PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			];
			try {
				$this->link = new PDO( $this->dsn, '', '', $this->options );
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
