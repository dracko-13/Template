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

		public function show_tables() {
			try {
				$stmt = $this->mariadb->open()->prepare( SHOW_TABLES );
				$stmt->execute();
				while ( $this->rows = $stmt->fetch( PDO::FETCH_ASSOC ) ):
					$this->data[] = $this->rows;
				endwhile;
				echo json_encode( $this->data );
			} catch( PDOException $e ) {
				make_log( __CLASS__, __FUNCTION__, $e->getMessage() );
			} finally {
				$stmt = NULL;
				$this->mariadb->close();
				unset( $this->data );
				unset( $this->rows );
			}
		}

	}
