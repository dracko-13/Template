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

		function generateFakeData() {
			for($i = 1; $i <= 3 ; $i++):
				$this->data[] = [
					'nombres'          => $this->faker->unique()->firstName,
					'ap'               => $this->faker->unique()->lastName,
					'am'               => $this->faker->unique()->lastName,
					'fecha_nacimiento' => $this->faker->unique()->date(),
					'telefono'         => $this->faker->unique()->tollFreeNumber(),
					'correo'           => $this->faker->unique()->freeEmail()
				];
			endfor;

			return $this->data;
		}

		function addFakeData() {
			try{
				foreach( $this->generateFakeData() as $row ):
					$this->db->MariaDB()->insert( 'personas', [
						'nombres'          => $row[ 'nombres' ],
						'ap'               => $row[ 'ap' ],
						'am'               => $row[ 'am' ],
						'fecha_nacimiento' => $row[ 'fecha_nacimiento' ],
						'telefono'         => $row[ 'telefono' ],
						'correo'           => $row[ 'correo' ]
					]);
				endforeach;
			} catch (PDOException $e) {
				make_log( __CLASS__, __FUNCTION__, $e->getMessage() );
			}
		}

	}
