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

		if(!empty($data)):
			if(password_verify($secret_key, $data->secret_key)):
				$this->account->updateSecretKey($data->id_account, $secret_key);

				$user = new User();

				$user->id          = $data->id_account;
				$user->groups      = ['Administrators'];
				$user->permissions = ['total'];

				$this->auth->login($user);

				return redirect()->to(site_url('/home'));
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

}
