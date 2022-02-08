<?= $this->extend('layout/index') ?>

<?= $this->section('links') ?>
<?= $this->endSection() ?>

<?= $this->section('navigation') ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?= site_url('/') ?>" target="_self">
				<?= img(['src' => site_url('logo.png'), 'alt' => 'logo', 'class' => 'bg-danger', 'width' => '150', 'height' => '50']) ?>
				<p><?= $app_name ?></p>
			</a>
		</div>
	</nav>
<?= $this->endSection() ?>

<?= $this->section('section') ?>
	<div class="container px-2 py-2">
		<form action="<?= site_url('/login') ?>" method="post">
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
			<input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
			<button type="submit" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-in-right"></i> Login</button>
		</form>
	</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= $this->endSection() ?>
