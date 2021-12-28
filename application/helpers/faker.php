<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/logs.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	class HelperFaker {

		private $db = NULL;
		private $faker;

		function __construct() {
			$this->db = new Databases();
			$this->faker = Faker\Factory::create();
		}

		function generateFakeData() {
			for($i = 1; $i <= 10 ; $i++):
				$this->data[] = [
					'nombres'          => $this->faker->unique()->firstName,
					'ap'               => $this->faker->unique()->lastName,
					'am'               => $this->faker->unique()->lastName,
					'fecha_nacimiento' => $this->faker->unique()->date(),
					'numero_celular'   => $this->faker->unique()->tollFreePhoneNumber(),
					'correo'           => $this->faker->unique()->freeEmail()
				];
			endfor;

			return $this->data;
		}

		function addFakeData() {
			$response = $this->db->MariaDB()->insert( 'personas', $this->generateFakeData() );

			if( $this->db->MariaDB()->error ):
				make_log( __CLASS__, __FUNCTION__, $this->db->MariaDB()->error );
			else:
				echo 'Affected rows: ' . $response->rowCount();
			endif;
		}

	}
