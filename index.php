<?php

	date_default_timezone_set("America/Mexico_City");

	SESSION_START();

	$_SESSION[ 'csrf' ] = array(
		'token'        => bin2hex( random_bytes( 32 ) ),
		'token-expire' => time() + (60 * 15)
	);

	if( isset( $_SESSION[ 'user_data' ] ) ):
		header( 'Location: /home/' );
	endif;

	if( time() >= $_SESSION[ 'csrf' ][ 'token-expire' ] ):
		echo 'La sesión a expirado! <a href="/" target="self">Ir a inicio</a>';
	endif;

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

?>

<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/src/jquery.toast.css">
		<link rel="stylesheet" type="text/css" href="dist/css/main.css">
		<link rel="icon" type="image/ico" href="favicon.ico">
		<title>Inicio</title>
	</head>
		<body>

			<div class="container px-2 py-2">
				<form action="app/controllers/account.controller.php?choice=login" method="post">
					<input type="hidden" name="csrf-token" value="<?= $_SESSION[ 'csrf' ][ 'token' ] ?>">
					<div class="form-floating mb-2">
						<input type="text" class="form-control" id="nickname" name="nickname" placeholder="Nickname">
						<label for="nickname">Nickname</label>
					</div>
					<div class="form-floating mb-2">
						<input class="form-control" type="password" id="secret_key" name="secret_key" placeholder="******">
						<label for="secret_key">******</label>
					</div>
					<button type="submit" class="btn btn-outline-secondary">Acceder</button>
				</form>
			</div>

			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/src/jquery.toast.js"></script>
			<script src="dist/js/main.js"></script>

		</body>
</html>
