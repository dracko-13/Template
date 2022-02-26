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
				<input type="text" class="form-control" name="nickname" placeholder="Nombre de usuario">
				<label for="nickname">Nombre de usuario</label>
			</div>
			<div class="form-floating mb-2">
				<input class="form-control" type="password" name="secret_key" placeholder="********">
				<label for="secret_key">********</label>
			</div>
			<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
			<div class="d-grid gap-2">
				<button type="submit" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-in-right"></i> Login</button>
			</div>	
		</form>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= $this->endSection() ?>
