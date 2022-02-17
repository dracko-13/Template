<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	use Monolog\Handler\FirePHPHandler;

	function make_log( $class, $function, $data ) {
		$logger = new Logger( $class );

		$logger->pushHandler(
			new StreamHandler(
				$_SERVER[ 'DOCUMENT_ROOT' ] . '/logger/' . $function . '.log', Logger::DEBUG
			)
		);

		$logger->pushHandler(
			new FirePHPHandler()
		);

		$logger->info( $data );
	}
