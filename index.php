<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/main.css">
		<link rel="icon" type="image/png" href="favicon.png">
		<title>Inicio</title>
	</head>
		<body>

			<?php

				require 'vendor/autoload.php';

				use Medoo\Medoo;

				$database = new Medoo([
					'type' => 'mysql',
					'host' => 'localhost',
					'database' => 'informatica_db',
					'username' => 'alumno',
					'password' => 'alumno'
				]);


				$data = $database->select('personas', ['id_persona']);

				d($data);

			?>

			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="dist/js/main.js"></script>

		</body>
</html>
