<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/logs.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	class HelperFaker {

		private $db    = NULL;
		private $faker = NULL;

		function __construct() {
			$this->db    = new Databases();
			$this->faker = Faker\Factory::create( 'es_ES' );
		}

	}
