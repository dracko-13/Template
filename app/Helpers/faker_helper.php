<?php

use Faker\Factory;

function addFakeData()
{
	$db = \Config\Database::connect('default');

	$faker = Factory::create('es_ES');

	d($faker);
}
