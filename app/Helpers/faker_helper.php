<?php

use Faker\Factory;

function generateFakeData() {
	$faker = Factory::create('es_ES');

	$faker->addProvider(new \Mmo\Faker\LoremSpaceProvider($faker));

	$imageUrl = $faker->loremSpaceUrl(\Mmo\Faker\LoremSpaceProvider::CATEGORY_FACE);
}

function addFakeData() {
	$db = \Config\Database::connect('default');
}
