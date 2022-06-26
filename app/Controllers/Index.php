<?php

namespace App\Controllers;

class Index extends BaseController {

	public function index()	{
		if():
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
				$this->account->updateSecretKey($data->uuid, $secret_key);

				return redirect()->to(site_url('/home'));
			else:
				return redirect()->to(site_url('/'));
			endif;
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

	public function logout() {
		return redirect()->to(site_url('/'));
	}

}
