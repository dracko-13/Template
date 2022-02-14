<?php

namespace App\Controllers;

class Index extends BaseController {

	public function index()	{
		if($this->session->id_account && $this->session->nickname):
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

				$this->session->set('nickname', $nickname);
				$this->session->set('id_account', $data->id_account);

				return redirect()->to(site_url('/home'));
			else:
				return redirect()->to(site_url('/'));
			endif;
		else:
			return redirect()->to(site_url('/'));
		endif;
	}

	public function logout() {
		$this->session->remove(['id_account', 'nickname']);
		$this->session->stop();
		$this->session->destroy();
		return redirect()->to(site_url('/'));
	}

}
