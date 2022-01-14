<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/db/db.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/logs.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

	class HelperFaker {

		private $mariadb = NULL;
		private $sqlite  = NULL;

		private $rows = [];
		private $data = [];

		private const QUERY = 'INSERT INTO personas VALUES(null, ?, ?, ?, ?, ?, ?)';

		private $faker = NULL;

		function __construct() {
			$this->mariadb = new MariaDB();
			$this->sqlite  = new SQLite();
			$this->faker   = Faker\Factory::create();
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
			try {
				foreach( $this->generateFakeData() as $row ):
					$stmt = $this->mariadb->open()->prepare( self::QUERY );
					$stmt->bindParam( 1, $row['nombres'] );
					$stmt->bindParam( 2, $row['ap'] );
					$stmt->bindParam( 3, $row['am'] );
					$stmt->bindParam( 4, $row['fecha_nacimiento'] );
					$stmt->bindParam( 5, $row['numero_celular'] );
					$stmt->bindParam( 6, $row['correo'] );
					$stmt->execute();
				endforeach;
			} catch( PDOException $e ) {
				make_log( __CLASS__, __FUNCTION__, $e->getMessage() );
			} finally {
				$this->mariadb->close();
			}
		}

	}

	$h = new HelperFaker();

	$h->addFakeData();
