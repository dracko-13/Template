<?php

	function addFakeData()
	{
		$db_accounts = \Config\Database::connect('default');

		$faker = \Faker\Factory::create('es_ES');

		d($faker);
	}
