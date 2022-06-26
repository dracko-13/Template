<?= $this->extend('layout/index') ?>

<?= $this->section('links') ?>
<?= $this->endSection() ?>

<?= $this->section('navigation') ?>
	<a class="nav-link" href="<?= site_url('/logout') ?>"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
<?= $this->endSection() ?>

<?= $this->section('section') ?>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<?= $this->endSection() ?>
