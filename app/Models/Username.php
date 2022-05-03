<?php

namespace App\Models;

use MongoDB\Client;

class Username {

	private $db = NULL;

	public function __construct() {
		$dns = sprintf("mongodb://%s:%s@%s:%s", getenv('user_mdb'), getenv('passwd_user_mdb'), getenv('host_mdb'), getenv('port_mdb'));
		$this->db = new Client($dns);
	}

	public function getUserName($uuid) {
	}

	function findUserName($username) {
	}

	function setUserName($username, $id_account) {
	}

}
