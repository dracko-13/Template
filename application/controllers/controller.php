<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/dao/dao.php' );

	$dao = new DAO();

	$choice = isset( $_GET[ 'choice' ] ) ? $_GET[ 'choice' ] : '';

	switch ( $choice ):

		case 'test_connection_db':
			return $dao->test_connection_db();
		break;

	endswitch;
