<?php

namespace App\Controllers;

use Tatter\Imposter\Entities\User;

use \PDO;
use \PDOException;

class Home extends BaseController {

	public function index() {
		if($this->auth->id()):
			$data = [
				'title'    => 'CI4',
				'app_name' => 'CI4 - Home',
				'username' => $this->username->getUserName($this->auth->id())
			];
			return view('home/home', $data);
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

	function findUserName() {
		try {
			$username = $_POST['username'];

			$query = "SELECT * FROM usernames WHERE username LIKE '%$username%'";

			$rows = MariaDB()->query( $query )->fetchAll();

			if( empty( $rows ) ):
				echo '1';
			else:
				echo '0';
			endif;
		} catch(PDOException $e) {
			log_message('error', $e->getMessage());
		}
	}

	function setUserName() {
		try {
			$username = $_POST['username'];

			$rows = MariaDB()->insert('usernames', [
				'username'   => strtolower($username),
				'account_id' => $this->auth->id()
			]);

			echo $rows->rowCount();

		} catch(PDOException $e) {
			log_message('error', $e->getMessage());
		}
	}

}
