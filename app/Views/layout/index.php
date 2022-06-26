<!DOCTYPE html>
<html lang="es-mx">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/src/jquery.toast.css">
		<?= $this->renderSection('links') ?>
		<?= link_tag('dist/css/main.css') ?>
		<link rel="icon" type="image/icon" href="<?= site_url('favicon.ico') ?>">
		<title><?= $title ?></title>
	</head>
		<body>

			<?= $this->renderSection('navigation') ?>

			<?= $this->renderSection('section') ?>

			<div class="container-fluid p-2">
				<p class="text-center">
					<?= CodeIgniter\CodeIgniter::CI_VERSION ?> - <?= strtoupper(ENVIRONMENT) ?>
				</p>
			</div>

			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
			<?= $this->renderSection('scripts') ?>
			<?= script_tag('dist/js/main.js') ?>

		</body>
</html>
