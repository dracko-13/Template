<?php

	session_start();

	$_SESSION['token'] = bin2hex(random_bytes(32));
	$_SESSION['token-expire'] = time() * 3600;

?>

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

			<div class="container px-2 py-2">
				<form action="app/controllers/account.controller.php?choice=login" method="post">
					<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">@</div>
							</div>
							<input type="text" class="form-control" name="nickname">
						</div>
					</div>
					<div class="mb-2">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">***</div>
							</div>
							<input class="form-control" type="password" name="secret_key">
						</div>
					</div>
					<button type="submit" class="btn btn-outline-secondary">Acceder</button>
				</form>
			</div>

			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<script src="dist/js/main.js"></script>

		</body>
</html>
