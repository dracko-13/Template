<?php

use Faker\Factory;

function generateFakeData() {
	$faker = Factory::create('es_ES');
}

function addFakeData() {
	$db = \Config\Database::connect('default');
}
