<?php

namespace App\Controllers;

use Tatter\Imposter\Entities\User;

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
		if($this->auth->id()):
			$username = $_POST['username'];

			$rows = $this->username->findUserName($username);

			if( empty( $rows ) ):
				echo '1';
			else:
				echo '0';
			endif;
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

	function setUserName() {
		if($this->auth->id()):
			$username = $_POST['username'];

			if($this->username->setUserName($username, $this->auth->id())):
				echo '1';
			else:
				echo '0';
			endif;
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

}
