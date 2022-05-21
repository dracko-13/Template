<?php

	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/vendor/autoload.php' );
	require_once( $_SERVER[ 'DOCUMENT_ROOT' ] . '/app/helpers/pd.php' );

	# error_log(print_r($_SERVER, true), 3, $_SERVER[ 'DOCUMENT_ROOT' ] . '/logger/' . date('Y-m-d', time()) . '.log');

?>

<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="dist/css/main.css">
		<link rel="icon" type="image/ico" href="favicon.ico">
		<title>Inicio</title>
	</head>
		<body>

			<input type="text" id="message" />
			<button onclick="transmitMessage()">Send</button>

			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="dist/js/main.js"></script>

			<script>

				var socket  = new WebSocket('ws://localhost:8080');
				var message = document.getElementById('message');

				function transmitMessage() {
					socket.send( message.value );
				}

				socket.onmessage = function(e) {
					alert(e.data);
				}

			</script>

		</body>
</html>
