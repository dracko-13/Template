<?= $this->extend('layout/index') ?>

<?= $this->section('links') ?>
<?= $this->endSection() ?>

<?= $this->section('navigation') ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?= site_url('/') ?>" target="_self">
				<?= img(['src' => site_url('logo.png'), 'alt' => 'logo', 'class' => 'bg-black', 'width' => '150', 'height' => '50']) ?>
				<p><?= $app_name ?></p>
			</a>
		</div>
	</nav>
<?= $this->endSection() ?>

<?= $this->section('section') ?>
	<div class="container px-2 py-2">
		<form action="<?= site_url('/login') ?>" method="post">
			<div class="form-floating mb-2">
				<input type="text" class="form-control" name="nickname" placeholder="Apodo">
				<label for="nickname">Apodo	</label>
			</div>
			<div class="form-floating mb-2">
				<input class="form-control" type="password" name="secret_key" placeholder="********">
				<label for="secret_key">********</label>
			</div>
			<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
			<div class="d-grid gap-2">
				<button type="submit" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-in-right"></i> Login</button>
			</div>
			<a data-bs-toggle="modal" data-bs-target="#singUpForm">¿No tienes cuenta?</a>
		</form>
	</div>

	<div class="modal fade" id="singUpForm" tabindex="-1" aria-labelledby="singUpFormLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="singUpFormLabel">Crea tu cuenta</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?= site_url('/signup') ?>" method="post">
						<div class="form-floating mb-2">
							<input type="text" class="form-control" name="nickname" placeholder="Apodo">
							<label for="nickname">Apodo</label>
						</div>
						<div class="form-floating mb-2">
							<input class="form-control" type="password" name="secret_key" placeholder="********">
							<label for="secret_key">********</label>
						</div>
						<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
						<div class="d-grid gap-2">
							<button type="submit" class="btn btn-outline-secondary"><i class="bi bi-person"></i> Signup</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= $this->endSection() ?>