<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/logger.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	use Faker\Factory;

	function generateFakeData() {
		$faker = Factory::create('es_ES');

		$faker->addProvider(new \Mmo\Faker\LoremSpaceProvider($faker));

	}

	function addFakeData() {
		$db = new Databases();

		// try {
		// 	$db->MariaDB()->
		// } catch(PDOException $e) {
		// 	make_log( 'error', __FUNCTION__ , $e->getMessage() );
		// }
	}