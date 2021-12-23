<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/faker.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/logs.php' );

	class DAO {

		public function test_connection_db() {
			
			if( $db->error ):
				make_log( __CLASS__, __FUNCTION__, $db->error );
			endif;
		}

	}
