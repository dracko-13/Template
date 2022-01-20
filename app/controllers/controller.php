<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/dao/dao.php' );

	$dao = new DAO();

	$choice = isset( $_GET[ 'choice' ] ) ? $_GET[ 'choice' ] : '';

	switch ( $choice ):

		case 'show_tables':
			return $dao->show_tables();
		break;

		default:
			header( 'Location: /' );
		break;

	endswitch;
