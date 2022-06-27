<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/constants/constants.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/dao/dao.php' );

	$dao = new DAO();

	$choice = isset( $_GET[ 'choice' ] ) ? $_GET[ 'choice' ] : '';

	switch( $choice ):

		default:
			header( 'Location: /' );
		break;

	endswitch;
