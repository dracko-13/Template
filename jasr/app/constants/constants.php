<?php

	defined( 'TODAY' )  || define( 'TODAY', date( 'Y-m-d', time() ) );
	defined( 'LOGGER' ) || define( 'LOGGER', $_SERVER[ 'DOCUMENT_ROOT' ] . '/logger/' . date( 'Y-m-d', time() ) . '.log');
