<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/application/helpers/logs.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	class HelperFaker {

		private $faker;

		function __construct() {
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
			foreach( $this->generateFakeData() as $row ):
			endforeach;
		}

	}

	$h = new HelperFaker();

	$h->addFakeData();
