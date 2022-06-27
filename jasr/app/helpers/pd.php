<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/constants/constants.php' );

	function pd( array | object $data ) : void {
		echo '<pre>';
		print_r( $data );
		echo '</pre>';
	}
