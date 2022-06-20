<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/constants/constants.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/db/mariadb.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/db/mongodb.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/dao/dao.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/jasr/app/helpers/pd.php' );

	# error_log(print_r($_SERVER, true), 3, $_SERVER[ 'DOCUMENT_ROOT' ] . '/logger/' . TODAY . '.log');

?>

<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?= HOST ?>dist/css/main.css">
		<link rel="icon" type="image/ico" href="<?= HOST ?>favicon.ico">
		<title>Inicio</title>
	</head>
		<body>

			<div class="container px-2 py-2">
				<p class="h1">Hello world!</p>
			</div>

			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="<?= HOST ?>dist/js/main.js"></script>

		</body>
</html>
