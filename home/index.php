<?php

	SESSION_START();

	if( !isset( $_SESSION[ 'csrf' ][ 'token' ] ) ):
		header( 'Location: /' );
	elseif( time() >= $_SESSION[ 'csrf' ][ 'token-expire' ] ):
		echo 'La sesión a expirado!';
	endif;

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );

?>

<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/dist/css/main.css">
		<link rel="icon" type="image/png" href="/favicon.png">
		<title>Inicio</title>
	</head>
		<body>

			<a href="/app/controllers/account.controller.php?choice=logout">Logout</a>

			<?php

				d( $_SESSION );

			?>

			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="/dist/js/main.js"></script>

		</body>
</html>
