<?php

	SESSION_START();

	if( !isset( $_SESSION[ 'csrf' ][ 'token' ] ) ):
		header( 'Location: /' );
	endif;

	if( !isset( $_SESSION[ 'user_data' ] ) ):
		header( 'Location: /' );
	endif;

	if( time() >= $_SESSION[ 'csrf' ][ 'token-expire' ] ):
		echo 'La sesión a expirado!';
		SESSION_DESTROY();
		header( 'Location: /' );
	endif;

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	d( $_SESSION );

?>

<a href="/app/controllers/account.controller.php?choice=logout">Logout</a>
