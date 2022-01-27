<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/logs.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	class HelperFaker {

		private $mariadb = NULL;
		private $sqlite  = NULL;

		private $rows = [];
		private $data = [];

		private const QUERY = '';

		private $faker = NULL;

		function __construct() {
			$this->mariadb = new MariaDB();
			$this->sqlite  = new SQLite();
			$this->faker   = Faker\Factory::create();
		}

		function generateFakeData() {
		}

		function addFakeData() {
		}

	}
