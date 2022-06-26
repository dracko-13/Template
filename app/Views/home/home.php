<?= $this->extend('layout/index') ?>

<?= $this->section('links') ?>
<?= $this->endSection() ?>

<?= $this->section('navigation') ?>
	<a class="nav-link" href="<?= site_url('/logout') ?>"><i class="bi bi-box-arrow-in-left"></i> Logout</a>

	<div class="container px-2 py-2">

		<?php if(isset($username)): ?>
				<p>@<?= $username->username ?></p>
		<?php else: ?>

			<form action="<?= site_url('/setUserName') ?>" method="post">
				<div class="mb-2">
					<label for="username" class="form-label">Elige tu nombre de usuario</label>
					<input class="form-control" id="username" name="username" placeholder="&#128269;">
					<small class="text-muted"></small>
				</div>
				<button type="submit" class="btn btn-outline-secondary">Elegir</button>
			</form>

		<?php endif; ?>

	</div>

<?= $this->endSection() ?>

<?= $this->section('section') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= $this->endSection() ?>
