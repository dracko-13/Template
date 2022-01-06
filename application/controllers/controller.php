<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/dao/dao.php' );

	$dao = new DAO();

	$choice = isset( $_GET[ 'choice' ] ) ? $_GET[ 'choice' ] : '';

	switch ( $choice ):

		case 'login':

			$nickname   = $_POST[ 'nickname' ];
			$secret_key = $_POST[ 'secret_key' ];

			if( $nickname == 'admin' && $secret_key == 'admin' ):
				header( 'Location: /home/' );
			endif;

		break;

		case 'test_connection_db':
			return $dao->test_connection_db();
		break;

	endswitch;
