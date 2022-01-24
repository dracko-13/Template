<?php

	# require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/dao/dao.php' );

	# $dao = new DAO();

	$choice = isset( $_GET[ 'choice' ] ) ? $_GET[ 'choice' ] : '';

	switch ( $choice ):

		case 'login':

			SESSION_START();

			$nickname   = $_POST[ 'nickname' ];
			$secret_key = $_POST[ 'secret_key' ];

			$_SESSION[ 'user_data' ] = array(
				'nickname'   => $nickname,
				'secret_key' => $secret_key
			);

			if( $nickname == 'admin' && $secret_key == 'admin' ):
				header( 'Location: /home/' );
			endif;

		break;

		case 'logout':
			SESSION_START();
			SESSION_UNSET();
			SESSION_DESTROY();
			header( 'Location: /' );
		break;

		default:
			header( 'Location: /' );
		break;

	endswitch;