<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/dao/dao.php' );

	function pd( array | object $data ) : void {
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
	}
