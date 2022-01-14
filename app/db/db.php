<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/constants/authentication.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/logs.php' );

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
