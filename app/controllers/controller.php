<?php

	if( isset( $_GET[ 'choice' ] ) ):

		require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/dao/dao.php' );

		$dao = new DAO();

		$choice = $_GET[ 'choice' ];

		switch ( $choice ):

			default:
				header( 'Location: /' );
			break;
	
		endswitch;
	else:
		header( 'Location: /' );
	endif;
