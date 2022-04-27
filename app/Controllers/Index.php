<?php

namespace App\Controllers;

use Tatter\Imposter\Entities\User;

class Index extends BaseController {

	public function index()	{
		if($this->auth->id()):
			return redirect()->to(site_url('/home'));
		else:
			$data = [
				'title'    => 'Inicio',
				'app_name' => 'CI4 - Test',
			];
			return view('index', $data);
		endif;
	}

	public function login() {
		$nickname   = $this->request->getPost('nickname');
		$secret_key = $this->request->getPost('secret_key');

		$data = $this->account->getData($nickname);

		d($data);

		if(!empty($data)):
			if(password_verify($secret_key, $data->secret_key)):
				// $this->account->updateSecretKey($data->_id, $secret_key);

				$user = new User();

				$user->id          = $data->_id;
				$user->groups      = ['Administrators'];
				$user->permissions = ['total'];

				$this->auth->login($user);

				echo $data->_id;

				echo '<br>';

				d($user);

				// return redirect()->to(site_url('/home'));
			else:
				return redirect()->to(site_url('/'));
			endif;
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

	public function logout() {
		service('auth')->logout();
		return redirect()->to(site_url('/'));
	}

	public function signup() {
		$nickname   = $this->request->getPost('nickname');
		$secret_key = $this->request->getPost('secret_key');

		if($this->account->signup($nickname, $secret_key)):
			echo 'Usuario agragado';
		else:
			echo 'Error!';
		endif;
	}

}
