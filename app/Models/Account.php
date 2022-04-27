<?php

namespace App\Models;

use MongoDB\Client;

class Account {

	private $link = NULL;

	public function __construct() {
		$dns = sprintf("mongodb://%s:%s@%s:%s", getenv('user_mdb'), getenv('passwd_user_mdb'), getenv('host_mdb'), getenv('port_mdb'));
		$this->link = new Client($dns);
	}

	public function getData($nickname) {
		$collection = $this->link->ci4->accounts;
		return $collection->findOne(array('nickname' => $nickname));
	}

	// public function updateSecretKey($id_account, $secret_key) {
	// 	$collection = $this->link->ci4->accounts;

	// 	$result = $collection->updateOne(
	// 		[
	// 			'_id' => new MongoDB\BSON\ObjectId($id_account)
	// 		],
	// 		[
	// 			'$set' => [
	// 				'secret_key' => password_hash($secret_key, PASSWORD_DEFAULT)
	// 			]
	// 		]
	// 	);

	// 	return $result->getModifiedCount();
	// }

	// public function signup($nickname, $secret_key) {
	// 	return $this->insert([
	// 		'nickname' => $nickname,
	// 		'secret_key' => password_hash($secret_key, PASSWORD_DEFAULT)
	// 	]);
	// }

}
