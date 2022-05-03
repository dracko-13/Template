<?php

namespace App\Models;

use MongoDB\Client;
use Ramsey\Uuid\Uuid;

class Account {

	private $db = NULL;

	public function __construct() {
		$dns = sprintf("mongodb://%s:%s@%s:%s", getenv('user_mdb'), getenv('passwd_user_mdb'), getenv('host_mdb'), getenv('port_mdb'));
		$this->db = new Client($dns);
	}

	public function getData($nickname) {
		$accounts = $this->db->ci4->accounts;
		return $accounts->findOne(
			[
				'nickname' => $nickname
			]
		);
	}

	public function updateSecretKey($uuid, $secret_key) {
		$accounts = $this->db->ci4->accounts;

		$result = $accounts->updateOne(
			[
				'uuid' => $uuid
			],
			[
				'$set' => [
					'secret_key' => password_hash($secret_key, PASSWORD_DEFAULT)
				]
			]
		);

		return $result->getModifiedCount();
	}

	public function signup($nickname, $secret_key) {
		$uuid = Uuid::uuid4();

		$this->db->accounts->insertOne(
			[
				'uuid'       => $uuid->toString(),
				'nickname'   => $nickname,
				'secret_key' => $secret_key,
				'group_uuid' => '28f6f0ef-b07c-4244-8dcd-0cfdfc923f56'
			]
		);
	}

}
